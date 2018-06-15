$(document).ready(function() {
    var flag = 0;
    var limit = 3;
    $('.v-add').click(function() {
        var id = 1;
        flag += 5;
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: baseUrl + 'posts/posts/addVoucher',
            data: {
                start: flag,
                limit: limit,
                id: id
            },
            success: function(data) {
                if (data.check == "ok") {
                    $('#add_voucher').append(data.html);
                } else {
                    $('.v-add').addClass('hide');
                }
            }
        });
    });
    $('.care').click(function() {
        flag += 4;
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: baseUrl + 'posts/posts/addCare',
            data: {
                start: flag,
                limit: limit,
            },
            success: function(data) {
                if (data.check == "ok") {
                    $('#care_t').append(data.html);
                } else {
                    $('.care').addClass('hide');
                }
            }
        });
    })
    $('#conment').click(function() {
        var name = $('#name').val();
        var phone = $('#phone').val();
        var email = $('#phone').val();
        var conment = $('#noidung').val();
        if (name != "" && phone != "" && email != "" && conment != "") {
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: baseUrl + 'posts/posts/conment',
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    conment: conment
                },
                success: function(data) {
                    if (data.html == "success") {
                        location.reload();
                    }
                }
            });
        } else {
            toastr["error"]("Bạn hãy điền đủ thông tin");
        }

    })
});