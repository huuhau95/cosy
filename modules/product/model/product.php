<?php 
class Product{
    private $product;
    private $productDetail;
    private $productImage;
    private $cate;
    private $productRate;
	public function __construct(){
		global $_web;
		$this->lang                   = $_web['lang'];
        $this->cate                   = new system\Model($this->lang.'_category');
		$this->product                = new system\Model($this->lang.'_product_basic');
        $this->productDetail          = new system\Model($this->lang.'_product_detail');
        $this->productImage           = new system\Model($this->lang.'_product_image');
		$this->productRate            = new system\Model($this->lang.'_product_rate');
	}
	public function getBreadcrumbsCategory($idCate, $data = array()) {
        $this->cate->where("id",$idCate);
        $this->cate->where("status",1);
        $category = $this->cate->getOne();

        $category['link'] = base_url().alias($category['title']).'-x'.$category['id'].'.htm';
        $data[]           = array(
            'name' => (isset($category['title']) ? $category['title'] : ''),
            'href'  => $category['link'],
        );
        if (isset($category['parent_id']) && $category['parent_id'] > 0) {
            $data = $this->getBreadcrumbsCategory($category['parent_id'], $data);
        }
        return $data;
    }
    public function findSearch($search){
        $select = $this->lang."_product_basic.*, user.id as id_user, user.username";
        $this->product->where($this->lang.'_product_basic.name', '%'.$search.'%', 'like');
        $this->product->join('user', 'user.id = '.$this->lang.'_product_basic.create_author', 'LEFT');
        $result  = $this->product->get(null,null,$select);
        return $result;
    }
    public function getproduct(){
    	$this->product->where('status',1);
		$result  = $this->product->num_rows();
		return $result;
	}
    public function getAllOtherProducts($start = null, $limit = null){
        $select = $this->lang."_product_basic.*,user.id as id_user, user.username";
        $this->product->where( $this->lang."_product_basic.status",1);
        $this->product->join('user', 'user.id = '.$this->lang.'_product_basic.create_author', 'LEFT');
        $this->product->orderBy('rand()');
        if ($start == null && $limit == null) {
            $result = $this->product->get(null, null, $select);
        } else {
            $result = $this->product->get(null, array($start, $limit), $select);
        }
        // dd($result);
        return $result;
    }
    public function getAllProduct($start,$limit){
    	$select = $this->lang."_product_basic.id,".$this->lang."_product_basic.name,".$this->lang."_product_basic.alias,".$this->lang."_product_basic.image,".$this->lang."_product_basic.create_time, user.id as id_user, user.username";
    	$this->product->where( $this->lang."_product_basic.status",1);
    	$this->product->join('user', 'user.id = '.$this->lang.'_product_basic.create_author', 'LEFT');
    	$result = $this->product->get(null,array($start,$limit),$select);
    	return $result;
    }
    public function getAllProduct1($start = null, $limit = null){
        $select = $this->lang."_product_basic.*,user.id as id_user, user.username";
        $this->product->where( $this->lang."_product_basic.status",1);
        $this->product->join('user', 'user.id = '.$this->lang.'_product_basic.create_author', 'LEFT');
        $this->product->orderBy('create_time', 'DESC');
        if ($start == null && $limit == null) {
            $result = $this->product->get(null, null, $select);
        } else {
            $result = $this->product->get(null, array($start, $limit), $select);
        }
        // dd($result);
        return $result;
    }
    public function getCateHienTai($id){
        $this->cate->where("id",$id);
        $category = $this->cate->getOne();
        return $category;
    }
    public function getAllCate(){
        $this->cate->where("status",1);
        $category = $this->cate->get();
        return $category;
    }
    public function getAllCateRelate($parent_id,$id){
        $this->cate->where("status",1);
        $this->cate->where("parent_id",$id);
        $category = $this->cate->get();
        return $category;
    }
    public function getDetail($id){
        $select = $this->lang."_product_basic.*, user.id as id_user, user.username, ";
        $select .= $this->lang."_product_image.image as image_list, ".$this->lang."_product_detail.full_info,".$this->lang."_product_detail.tags,".$this->lang."_product_detail.meta_title,".$this->lang."_product_detail.meta_keyword,".$this->lang."_product_detail.meta_description,".$this->lang."_product_detail.related_product";
        $this->product->where( $this->lang."_product_basic.status",1);
        $this->product->where( $this->lang."_product_basic.id",$id);
        $this->product->join('user', 'user.id = '.$this->lang.'_product_basic.create_author', 'LEFT');
        $this->product->join($this->lang.'_product_image', $this->lang.'_product_image.id_product = '.$this->lang.'_product_basic.id', 'LEFT');
        $this->product->join($this->lang.'_product_detail', $this->lang.'_product_detail.id_product = '.$this->lang.'_product_basic.id', 'LEFT');
        // $this->product->join($this->lang.'_category', $this->lang.'_category.id = '.$this->lang.'_product_basic.category', 'LEFT');
        $result = $this->product->getOne(null,$select);
        return $result;
    }
    public function insertRate($data){
        $this->productRate->insert($data);
    }
    public function getRateProductById($id){
        $this->productRate->where("status",1);
        $this->productRate->where("id_product",$id);
        return $this->productRate->get(null,null,"*");
    }
    public function getCountMediumRateById($id){
        $this->productRate->where("status",1);
        $this->productRate->where("id_product",$id);
        return $this->productRate->get(null,null,"*");
    }
    public function getThumbnailAddCart($id){
        $select = $this->lang."_product_basic.id,".$this->lang."_product_basic.image";
        $this->product->where($this->lang."_product_basic.id",$id);
        return $this->product->getOne(null,$select);
    }
    public function getProductLienQuan($category,$id){
        $sql = "SELECT * FROM "
        .$this->lang."_product_basic WHERE ".$this->lang."_product_basic.category like '%".$category."%' AND ".$this->lang."_product_basic.id != '".$id."' ORDER BY rand() LIMIT 0,10";
        $result = $this->product->rawQuery($sql);
        return $result;
    }
}