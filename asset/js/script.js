
$(document).ready(function () {
    var request;
    $("#form-login").submit(function (event) {
        event.preventDefault();
		if(request) {
            request.abort();
        }

        var $form = $(this);
        var $inputs = $form.find("input, select, button, textarea");

        var serializedData = $form.serializeArray();
        serializedData.push({name: csfr_token_name, value: $.cookie(csfr_cookie_name)});

        request = $.ajax({
            url: base_url + "auth/login_ajax_post",
            type: "POST",
            data: serializedData,
        });
        request.done(function (response) {
            $inputs.prop("disabled", false);

            if (response == 'success'){
				Swal({
				// icon: 'error',
				icon: 'success',
				title: 'Login Success.',
				text: 'success',
				showConfirmButton: false,
				timer: 2000
				});
                setTimeout(function(){
					location.href=base_url+"dashboard";
				},2000);
            } else {
				
                document.getElementById("result-login").innerHTML = response;
				
				Swal({
				icon: 'error',
				title: 'Error...',
				text: 'Something went wrong!',
				showConfirmButton: false,
				timer: 2000
				});
            }
        }); 
    });
});

