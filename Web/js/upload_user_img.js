document.getElementById("fileToUpload").onchange = function () {
    // document.getElementsByClassName("filename").html(this.files[0].name);

    var file_data = $("#fileToUpload").prop("files")[0];   // Getting the properties of file from file field
    var form_img = new FormData();                  // Creating object of FormData class
    form_img.append("file", file_data)  ;
    $.ajax({
        type: "POST",
        data: form_img,
        url: "../../Metier/Metier_update_user_img.php",
        processData: false,
        contentType: false,
        dataType: 'script',
        cache: false,

        success: function (data) {
            var data_return_img = JSON.parse(data);
           // alert(data_return_img[0]);
            if(data_return_img[0]){
                window.top.location.reload(false);


            }

        },
        error: function (jXHR, textStatus, errorThrown) {
            console.log(errorThrown);
            alert(errorThrown);
        }
    }); // AJAX Get Jquery statment
};
