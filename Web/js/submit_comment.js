$(document).ready(function() {








});
var badge=1;
var array = "";
function submit_comment(id_post,id_user,comment){


    $.ajax({
        type : 'POST',
        data: {'comment':comment,'id_post':id_post,'iduser':id_user},
        url : '../../Metier/Metier_submit_comment.php',
        success : function(data){
            console.log('submit comment  success.');
            console.log("/------------------------    loadData(); comments  -----------------------/ ");
           //loadData();
            //window.top.location.reload(false);
           // location.reload();
            window.top.location.reload(false);
//-------- return all coment and update //



        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }


    });

}
function test_submit(id_post,id_user){
    var  commment='';
    var checker=0 ;
    var inp=$('.comment_value');
    for(var i = 0; i < inp.length; i++){
        if($.trim($(inp[i]).val())){
            commment=$(inp[i]).val();
            console.log($(inp[i]).val());
            checker=1;
        }


    }
    if(checker == 1){
        checker=0 ;
        submit_comment(id_post,id_user,commment);

    }
}


function chunk(str, n) {
    var ret = [];
    var i;
    var len;
    console.log("/--------------------------- INSIDE CHRUNK ------------------------------------------------------/");
    for(i = 0, len = str.length; i < len; i += n) {
        ret.push(str.substr(i, n))
    }

    return ret;
}


(function worker() {



        $.ajax({
            url: '../../Metier/Metier_get_notification.php',

            success: function(data) {
                console.log('request my notication  success.');
                // location.reload();
                console.log(data);

                if(data.length > 0){
                     array = JSON.parse(data);



                }

                if(array.length > 0){
                    $('#generique > ul').empty();
                    for (var i=array.length -1;i>=0;i--) {

                        var noti_title="" +array[i][4] +"";
                        var noti_img="" +array[i][3] +"";
                        var noti_msg="" +array[i][1] +"";
                        var check=array[i][0];
                        $("#generique > ul").append(' <li class="left clearfix">\n' +
                            '                    \t<span class="chat-img pull-left">\n' +
                            '                    \t\t<img src='+array[i][3]+' alt="">\n' +
                            '                    \t</span>\n' +
                            '                                <div class="chat-body clearfix">\n' +
                            '                                    <div class="header">\n' +
                            '                                        <strong class="primary-font">'+array[i][4]+'</strong>\n' +
                            '                                        <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>'+array[i][2]+'</small>\n' +
                            '                                    </div>\n' +
                            '                                    <p class="">\n' +
                            '                                  ' +array[i][1]+
                            '                                    </p>\n' +
                            '                                </div>\n' +
                            '                            </li>');


                        console.log("checker /!**********   "+check+"   *************!/");

                        switch (check) {
                            case "unread":
                                console.log("/------------------------   INSIDE UNREAD  -----------------------/ ");

                                console.log(" before   notiftitel /!**********   "+noti_title+"   *************!/");
                                console.log("before img /!**********   "+noti_img+"   *************!/");
                                console.log("before msg /!**********   "+noti_msg+"   *************!/");
                                   $(".badge").html(badge);
                                   badge++;
                                call_notif(noti_img,noti_msg,noti_title);

//----------------update to  unread ----------------/

                                $.ajax({
                                    type : 'POST',
                                    data: {'id_notif':array[i][5]},
                                    url : '../../Metier/Metier_update_notification_statuts.php',
                                    success : function(data){
                                        console.log('update notif to unread  success.');
                                        // location.reload();
                                    },
                                    error: function (data) {
                                        console.log('An error occurred update notif to unread .');
                                        console.log(data);
                                    }


                                });

                                break;
                            case "read":

                                break;

                        }



                    }





                }else{
                    console.log("array empty");
                }
            },
            complete: function() {
                // Schedule the next request when the current one's


                setTimeout(worker, 5000);
            }
        });



function call_notif(noti_img,noti_msg,noti_title){
    console.log(" inside   notiftitel /!**********   "+noti_title+"   *************!/");
    console.log("inside img /!**********   "+noti_img+"   *************!/");
    console.log("inside msg /!**********   "+noti_msg+"   *************!/");
    Notification.requestPermission().then(function(result){
        notify();
    });

    function notify() {
        var notification = new Notification(noti_title, {
            icon: noti_img,
            body: noti_msg

        });
        var s="<audio autoplay='true'> <source src='../notification_sound/notification.mp3'></audio>";
        $('body').append(s);
        notification.onclick = function () {
            //  window.open("");
        };
        // setTimeout(notification.close.bind(notification), (61 - new Date().getSeconds()) * 1000);

    }
    }



})();


function clear_badge_0() {
    $(".badge").html("");
    //$(".badge").html("");
   // window.top.location.reload(true);
    //loadData();
   // document.location.reload(false);
    if("" !=$(".badge").html() ){
        $(".badge").html("");
      //  document.location.reload(false);

       //loadData();

      //  window.top.location.reload(false);

    }
    console.log("click li ");


}
function loadData() {
    $('#load_me').load('../views/profil.php', function() {
        // if (window.reloadData != 0) {
        //   window.clearTimeout(window.reloadData);
        //   console.log("inside if ");
        // }
        // window.reloadData = window.setTimeout(loadData, 1000);
        console.log("/------------------------   inside    -----------------------/ ");

    }).fadeIn("show");
}


$(document).ready(function() {
   /* function loadData() {
        $('#load_me').load('../views/profil.php', function() {
           // if (window.reloadData != 0) {
             //   window.clearTimeout(window.reloadData);
             //   console.log("inside if ");
           // }
           // window.reloadData = window.setTimeout(loadData, 1000);
        }).fadeIn("slow");
    }
    //window.reloadData = 0; // store timer load data on page load, which sets timeout to reload again
   // console.log("/------------------------    loadData();  -----------------------/ ");
    //loadData();*/

});