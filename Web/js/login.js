$(document).ready(function() {
    function login(){
        var test = 0 ;

        $('#login-form  input').each(function() {
            var $this = $(this);

            if (!$this.val()) {
                test = 1 ;
                var inputid = $this.attr('id');
                console.log("id :"+inputid);
                var el = document.getElementById(inputid);

                el.style.borderBottomColor="#e80000";

                $("#alert").html("tapez s'il vous plaît votre "+inputid);
                $("#alert").show();
                console.log("empty");
                return false ;
            }else{

                var inputid = $this.attr('id');

                var el = document.getElementById(inputid);
                el.style.borderBottomColor="#337ab7";
                console.log("full");
                $("#alert").hide();


            }
        });

        if(test == 0){
            console.log("call sub");
             submit();
        }
        test=0;
    }




    function submit(){

        console.log("inside sub");

        $.ajax({
            type : 'POST',
            data: $("#login-form").serialize(),
            url : '../../Metier/Metier_login.php',
            success : function(data){
                console.log('submit success.');
                console.log(data);
               var array = JSON.parse(data);
                var user="";
                for (var i=0;i<array.length;i++) {
                    user = array[i][0];
                }
                if( user == "admin"){
                    location.href="admin.php";

                }else if(user == "user"){
                    location.href="profil.php";
                }else{
                    $("#alert").html("");
                    $("#alert").html("L'identifiant ou le mot de passe est incorrect ");
                    $("#alert").show();

                }
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }


        });

    }
    $('#input-submit-form').on('click', function() {
        login();
    });

});

