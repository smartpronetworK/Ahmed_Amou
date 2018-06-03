
var form_data ;
document.getElementById("cv").onchange = function () {
    // document.getElementsByClassName("filename").html(this.files[0].name);
    $(".filename").html(this.files[0].name);
    var file_data = $("#cv").prop("files")[0];   // Getting the properties of file from file field
    form_data = new FormData();                  // Creating object of FormData class
    form_data.append("file", file_data)  ;
    // Appending parameter named file with properties of file_field to form_data
    form_data.append("tel", document.getElementById('TEL').value);
    form_data.append("email", document.getElementById('EMAIL').value);
};



    $("#buttton_sub").click(function () {
       // alert("clicked");
var test = 0;

        $('#form_update  input').each(function() {
            var $this = $(this);
            if (!$this.val()) {
                test = 1 ;
                var inputid = $this.attr('id');
                var el = document.getElementById(inputid);
                el.style.borderBottomColor="#e80000";
                $("#alert").html("tapez s'il vous plaît votre "+inputid);
                $("#alert").show();
                console.log("empty");
                return false ;
            }else{

                var inputid = $this.attr('id');

                var el = document.getElementById(inputid);
                el.style.borderBottomColor="#5fbae9";
                console.log("full");
                $("#alert").hide();


            }
        });

        if(test == 0){

            var val = $('#cv').val().toLowerCase();
            var regex = new RegExp("(.*?)\.(docx|doc)$");
            if(!(regex.test(val))) {
                $("#alert").html("votre cv doit être un document Word");
                $('#alert').show();
                event.preventDefault();
            }else{
                submit_info();
            }

        }
        test=0;

    }); // Click effect

function submit_info(){
    $('#form_update').submit(function (e) {
        var data = {
            'file':form_data ,
            'tel':document.getElementById('TEL').value,
            'email':document.getElementById('EMAIL').value
        };
        $.ajax({
            type: "POST",
            data: form_data,
            url: "../../Metier/Metier_update_user_info.php",
            processData: false,
            contentType: false,
            dataType: 'script',
            cache: false,

            success: function (data) {
                var data_return = JSON.parse(data);
              //  alert(data_return[0]);
                if(data_return[0]){

                    $("#primary").modal('hide');
                    //
                    // loadData();
                    window.top.location.reload(false);


                }

            },
            error: function (jXHR, textStatus, errorThrown) {
                console.log(errorThrown);
                alert(errorThrown);
            }
        }); // AJAX Get Jquery statment
        e.preventDefault();
    });
    $('#form_update').submit();
}