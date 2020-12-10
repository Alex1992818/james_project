//update token
$("form").submit(function () {
    $("input[name='" + csfr_token_name + "']").val($.cookie(csfr_cookie_name));
});


//datatable
$(function () {
    $(document).ready(function () {
        $('#cs_datatable').DataTable({
            "order": [[0, "desc"]],
            "aLengthMenu": [[15, 30, 60, 100], [15, 30, 60, 100, "All"]]
        });
    });
});


//Flat red color scheme for iCheck
$('input[type="checkbox"].flat-orange, input[type="radio"].flat-orange').iCheck({
    checkboxClass: 'icheckbox_flat-orange',
    radioClass: 'iradio_flat-orange'
});
$('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
});
$('input[type="checkbox"].square-purple, input[type="radio"].square-purple').iCheck({
    checkboxClass: 'icheckbox_square-purple',
    radioClass: 'iradio_square-purple',
    increaseArea: '20%' // optional
});

//color picker with addon
$(".my-colorpicker").colorpicker();


//function delete post image
function deletePostImage(id) {
    if (confirm("Are you sure you want to delete this image?")) {
        var data = {
            "id": id
        };
        data[csfr_token_name] = $.cookie(csfr_cookie_name);

        $.ajax
        ({
            type: 'POST',
            url: base_url + "post/delete_post_image_post",
            data: data,
            success: function (response) {
                document.getElementById("delete-image-response").innerHTML = response;
            }
        });
    } else {
        return false;
    }
}


function get_sub_categories(val) {
    var data = {
        "parent_id": val
    };
    data[csfr_token_name] = $.cookie(csfr_cookie_name);

    $.ajax({
        type: "POST",
        url: base_url + "category/get_sub_categories",
        data: data,
        success: function (response) {
            $("#subcategories").html(response);
        }
    });
}

//Multi Image Previev
window.onload = function () {
    var MultifileUpload = document.getElementById("Multifileupload");

    if (MultifileUpload) {
        MultifileUpload.onchange = function () {
            if (typeof (FileReader) != "undefined") {
                var MultidvPreview = document.getElementById("MultidvPreview");
                MultidvPreview.innerHTML = "";
                var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                for (var i = 0; i < MultifileUpload.files.length; i++) {
                    var file = MultifileUpload.files[i];
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        img.height = "100";
                        img.width = "100";
                        img.src = e.target.result;
                        MultidvPreview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                }
            } else {
                alert("This browser does not support HTML5 FileReader.");
            }
        }
    }
};


//Multi Image Previev
Multifileupload1.onchange = function () {
    var MultifileUpload = document.getElementById("Multifileupload1");

    if (MultifileUpload) {
        if (typeof (FileReader) != "undefined") {
            var MultidvPreview = document.getElementById("MultidvPreview1");
            MultidvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            for (var i = 0; i < MultifileUpload.files.length; i++) {
                var file = MultifileUpload.files[i];

                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = document.createElement("IMG");
                    img.height = "100";
                    img.width = "100";
                    img.src = e.target.result;
                    MultidvPreview.appendChild(img);
                }
                reader.readAsDataURL(file);

            }
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    }
};









