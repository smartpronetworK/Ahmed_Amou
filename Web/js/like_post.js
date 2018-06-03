

function post_like (id_user, id_post,number_of_like){

    $.ajax({
        type : 'POST',
        data: {'id_user':id_user ,'id_post':id_post,'number_of_like':number_of_like},
        url : '../../Metier/Metier_like_post.php',
        success : function(data){

                //loadData();
            window.top.location.reload(false);


        },
        error: function (data) {
            console.log('An error occurred like post  .');
            console.log(data);
        }


    });



}
