$("#loginForm").validate({
    rules: {
    },
    messages: {},
    submitHandler: function (form, event) {
        event.preventDefault();
        let method = $('#method').val();
        let url = $('#url').val();
        let btn = $('#btnName').val();
        $.ajax({
            url: url,
            type: method,
            data: new FormData(form),
            dataType: "JSON",
            processData: false,
            contentType: false,
            beforeSend: function (data) {
                $("#btn").html("Please Wait");
                $("#btn").attr("disabled", true);
            },
            success: function (data) {
                $("#btn").html(btn);
                $("#btn").attr("disabled", false);
                swal({
                    icon: data.icon,
                    title: data.title,
                });
                if (data.status) {
                    setTimeout(() => {
                        window.location = "admin/dashboard";
                    }, 2000);
                }
            },
        });
    },
});


$("#form").validate({
    rules: {
        confirm_password:{
            equalTo:"#password",
        }
    },
    messages: {},
    submitHandler: function (form, event) {
        event.preventDefault();
        let method = $('#method').val();
        let url = $('#url').val();
        let btn = $('#btnName').val();
        $.ajax({
            url: url,
            type: method,
            data: new FormData(form),
            dataType: "JSON",
            processData: false,
            contentType: false,
            beforeSend: function (data) {
                $("#btn").html("Please Wait");
                $("#btn").attr("disabled", true);
            },
            success: function (data) {
                $("#btn").html(btn);
                $("#btn").attr("disabled", false);
                swal({
                    icon: data.icon,
                    title: data.title,
                });
                if(data.status){
                $('#form').trigger('reset');
                }
            },
            error:function(){
                swal({
                    icon: "error",
                    title: "Technical Issue.!",
                });
            }
        });
    },
});