$(document).ready(function() {
    function loadData() {
        $('#load_me').load('../views/profil.php', function() {
            // if (window.reloadData != 0) {
            //   window.clearTimeout(window.reloadData);
            //   console.log("inside if ");
            // }
            // window.reloadData = window.setTimeout(loadData, 1000);
        }).fadeIn("slow");
    }




    function submit_post(){


        $.ajax({
            type : 'POST',
            data: {'post':$("#mytextera").val()},
            url : '../../Metier/Metier_submit_post.php',
            success : function(data){
                console.log('submit success.');
                //location.reload();
                console.log("/------------------------    loadData();  posts  -----------------------/ ");
                //loadData();
                window.top.location.reload(false);
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }


        });

    }
    $('#submit_post').on('click', function() {

        if (!$.trim($("#mytextera").val())) {

        }else{
            submit_post();
            //console.log($("#mytextera").val());
        }
    });

});