$(document).ready(function() {

   var check_li=true;
   var li_value="";
    function valudator(){
        var test = 0 ;

        $('#form_become_user input').each(function() {
            var $this = $(this);

            if (!$this.val()) {
                test = 1 ;
                var inputid = $this.attr('id');
                if(inputid == "file"){
                    inputid="lable_file";
                }
                console.log("id :"+inputid);

                var el = document.getElementById(inputid);

                el.style.borderBottomColor="#e80000";

                $("#alert_signup").html("tapez s'il vous plaît votre "+inputid);
                $("#alert_signup").show();
                console.log("empty");
                return false ;
            }else{

                var inputid = $this.attr('id');
                       if(inputid == "file"){
                           inputid="lable_file";
                       }
                var el = document.getElementById(inputid);

                el.style.borderBottomColor="#337ab7";
                console.log("full");
                $("#alert").hide();


            }
        });

        if(test == 0){
            console.log("call sub");
            if(check_li){
                var els = document.getElementById("äccount_type_ul");
                els.style.borderBottomColor="#e80000";
            }else{
                var els = document.getElementById("äccount_type_ul");
                els.style.borderBottomColor="#337ab7";

                if(document.getElementById("i10").checked)
                {
                    // checked
                    // Appending parameter named file with properties of file_field to form_data_user
                    form_data_user.append("tel", document.getElementById('U_tel').value);
                    form_data_user.append("email", document.getElementById('U_email').value);
                    form_data_user.append("name", document.getElementById('full_name').value);
                    form_data_user.append("account_type", li_value);
                    submit();
                }else{
                    $('.md-checkbox label').append('<style>.md-checkbox label:before{ border:2px solid #e80000; }</style>');
                }

            }

        }
        test=0;
    }


    var form_data_user ;
    form_data_user = new FormData();
    document.getElementById("file").onchange = function () {
        // document.getElementsByClassName("filename").html(this.files[0].name);
        $("#lable_file").html(this.files[0].name);
        var file_data = $("#file").prop("files")[0];   // Getting the properties of file from file field
                        // Creating object of FormData class
        form_data_user.append("cv", file_data)  ;

    };



    $(".select li").click(function() {
       li_value=$(this).text();
        //alert($(this).text());
        if($(this).text() == "Choose account type"){
            check_li=true ;
        }else{
            check_li=false ;
        }
    });
    function submit(){
        $.ajax({
            type: "POST",
            data: form_data_user,
            url: '../../Metier/Metier_become_user.php',
            processData: false,
            contentType: false,
            dataType: 'script',
            cache: false,

            success: function (data) {
                $("#signup-Modal").modal('hide');
                $("#primary").modal('show');
             /*   var data_return = JSON.parse(data);
                 alert(data_return[0]);
                if(data_return[0]){

                    $("#signup-Modal").modal('hide');
                    $("#primary").modal('show');


                }*/

            },
            error: function (jXHR, textStatus, errorThrown) {
                console.log(errorThrown);
                alert(errorThrown);
            }
        }); // AJAX Get Jquery statment
    }
    $('#submit_become_user').on('click', function() {
        valudator();
    });

});

