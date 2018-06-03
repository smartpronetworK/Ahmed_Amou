<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 06/04/2018
 * Time: 12:29
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


require('../../Metier/Metier_session_checker.php');
require('../../Metier/Metier_get_All_posts.php');
require('../../Metier/Metier_get_user_info.php');






$all_posts=Metier_get_All_posts();


if(!empty($all_posts)){
    $user_info=Metier_get_user_info();
    $all_posts=array_reverse(Metier_get_All_posts());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>


    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/online_user.css" rel="stylesheet">
    <link href="../css/user_post_component.css" rel="stylesheet">
    <link href="../css/post_design.css" rel="stylesheet">
    <link href="../css/comment.css" rel="stylesheet">
    <link href="../css/ripple_button.css" rel="stylesheet">
    <link href="../css/avatar.css" rel="stylesheet">
    <link href="../css/upload_file.css" rel="stylesheet">
    <link href="../css/input_material_design.css" rel="stylesheet">


    <link href="../css/profil_user.css" rel="stylesheet">
    <!-- Custom Fonts -->

    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="load_me" style="">
<!-- Modal -->
<div class="   modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1><i class="fa fa-2x fa-pencil-square-o"></i> Update Info</h1>
            </div>
            <div class="modal-body">
<br>
                <form class="row" id="form_update">

                    <div class="group   col-xs-12 col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2">
                        <input type="text" class=""   name="tel" id="TEL" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>TEl</label>
                    </div>

                    <div class="group  col-xs-12  col-lg-8 col-lg-push-2  col-md-8 col-md-push-2 col-sm-8 col-sm-push-2">
                        <input type="text"  class=""  name="email" id="EMAIL" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
<div class="clearfix"></div>
                    <div class="group   col-lg-8 col-lg-push-2  col-md-8 col-md-push-2 col-sm-8 col-sm-push-2">
                        <a href="#" title="#" class="editImage">
                            <input  type="file"  name="cv" class="upfile" id="cv"  accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                            <i class="fa  fa-2x fa-upload"></i>
                        </a>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <span class="filename"> file name</span>
                    </div>

                </form>

                <div class="alert alert-danger" role="alert" style="display:none;" id="alert"></div>
            </div>
            <div class="modal-footer">
                <button  ripple class="btn  pull-left my_btn" data-dismiss="modal">Close</button>
                <button  ripple class="btn  pull-right my_btn" id="buttton_sub">submit </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->




<nav class="navbar navbar-default ">
    <div class="container">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand   " href="#">SmartProNetwork</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav ">
                <li class="active" style="height: 52px;"><a href="#" style="height: 53px;">Home</a></li>


            </ul>

                <ul class=" col-xs-1  nav navbar-nav navbar-right">
                    <!-- <li class="active"><a href="../">Default <span class="sr-only">(current)</span></a></li>
                     <li><a href="../navbar-static-top/">Static top</a></li>
                     <li><a href="#"  data-toggle="modal" data-target="#login-Modal">Fixed top</a></li>-->
                    <li  id="generique" onclick="clear_badge_0()"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa  fa-2x fa-bell-o"></i><span class="badge" style="
background-color: #fdfdfd;color: #d00909;"></span></a>
                        <ul class="dropdown-menu   col-xs-8 scroll_notif chats" style="width: 280px; height: calc(50vh - 9px);
 overflow: hidden;
    outline: none;     border-radius: 5px;
    margin-top: 7px;     background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0.176) 0px 6px 12px;
    border: medium none;">

                            <li> <div class="jumbotron" style="    border-radius: 1px;
    background-color: #F4F4FE;
    color: #3c5eb5;
    height: 118px;
    margin-top: 72px;">
                                    <span style="font-size: xx-large;
    font-weight: bold;"> no notifiction </span>

                                </div> </li>

                        </ul>
                    </li>


                </ul>


        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-3 col-lg-3">

            <div class="userProfileInfo">
                <div class="image text-center">
                    <img  alt="user img"  src="<?php   echo $user_info[0][1]  ;?>" class="img-responsive image" >

                    <a href="#" title="#" class="editImage">
                        <input  type="file"  class="upload" id="fileToUpload">
                        <i class="fa fa-camera">

                        </i>
                    </a>
                </div>
                <div class="box">
                    <div class="name"><strong><?php   echo $user_info[0][0]  ;?></strong></div>
                    <div class="info">
                        <span ><i class="fa fa-phone-square fa-1x" aria-hidden="true" style="color: #3c5eb5;"></i> <a href="#" title="#" class="user_info_1"><?php   echo $user_info[0][4]  ;?></a></span>
                        <span><i class="fa fa-envelope fa-1x" aria-hidden="true" style="color: #3c5eb5;"></i> <a href="#" title="#" class="user_info_1" style="    font-size: 11px;"><?php   echo $user_info[0][2]  ;?></a></span>
                        <span><i class="fa fa-download fa-1x" aria-hidden="true" style="color: #3c5eb5;"></i> <a href="<?php   echo $user_info[0][3]  ;?>"  class="user_info_1" target="_blank" >CV</a></span>
                    </div>
                    <div class="socialIcons clearfix">
                        <div class="row">
                            <div class="col-xs-4">
                                <button id="logout"  onclick="logout('<?php echo $_SESSION["id"] ;?>')" type="submit" ripple><i class="fa fa-1x fa-sign-out"></i> </button>
                            </div>
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-4">
                                <button id="update_info_user" type="submit" ripple data-toggle="modal" data-target="#primary" > <i class="fa fa-1x fa-edit"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--user info -->
        <div class=" col-xs-12 col-md-2 col-md-push-7  col-lg-2 ">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-xs-12 col-lg-pull-5">
                    <div class="col-inside-lg decor-default chat" style="overflow: hidden; min-width: 250px; outline: none;" tabindex="5000">
                        <div class="chat-users" id="users">
                            <h6>Online</h6>
                            <ul style="display: contents;list-style-type: none;">

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
<div class="clearfix"></div>
        </div>
        <!--user  online user  -->

        <div class="col-xs-12 col-md-7  col-md-pull-2 col-lg-6 col-lg-pull-2">
            <div class="row activity" style="    margin-top: 7px;">

                <div class="col-md-12">
                    <div class="timeline-panel panel fade in panel-default panel-fill" data-fill-color="true" data-init-panel="true">
                        <div class="panel-body">
                            <ul class="nav nav-tabs nav-contrast-red">
                                <li class="active"><a data-toggle="tab" href="#" aria-expanded="false">Status</a></li>
                            </ul>
                            <div class="tab-content pt-1x">
                                <textarea name="post"  id="mytextera" rows="2" class="form-control autogrow no-border no-resize" placeholder="Write in timeline" style="overflow: hidden; min-height: 6em; height: 52px;"></textarea><div class="autogrow-textarea-mirror" style="display: none; word-wrap: break-word; white-space: normal; padding: 6px 12px; width: 461px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">.<br>.</div>
                            </div>
                        </div><!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="btn-group">
                                <button type="button" class="btn btn-link"><i class="fa fa-user"></i></button>
                                <button type="button" class="btn btn-link"><i class="fa fa-map-marker"></i></button>
                                <button type="button" class="btn btn-link"><i class="fa fa-camera"></i></button>
                                <button type="button" class="btn btn-link"><i class="fa fa-smile-o"></i></button>
                            </div>
                            <div class="pull-right">
                                <button  id="submit_post"  ripple class="btn  my_btn">Post</button>
                            </div>
                        </div><!-- /.panel-footer -->
                    </div><!-- /.timeline-panel.panel -->
<!-- end post -->

                    <?php  if (empty($all_posts)) {
                        goto a;
                    }  for($r=0;$r<count($all_posts);$r++) {
                      // $t=;

                    ?>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <img src="<?php   echo $all_posts[$r][4]  ; $id_post= $all_posts[$r][5] ;?>" class="img-rounded">
                            <div class="pull-right text-right">
                                <i class="fa fa-calendar"></i><br><?php echo $all_posts[$r][1]; ?>
                            </div>
                            <div><strong><?php echo $all_posts[$r][3]; ?></strong></div>
                            <div class="small"><i class="fa fa-anchor"></i>  <?php echo $all_posts[$r][6]; ?> </div>
                        </div>
                        <div class="panel-body">
                            <?php if(str_word_count($all_posts[$r][0])>180) { ?>
                            <div class="chat">
                                <?php echo $all_posts[$r][0] ; ?>
                            </div>
                            <?php } else{?>

                                    <?php echo $all_posts[$r][0] ; ?>

                             <?php } ?>
                            <div class="actions">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-link" onclick="post_like('<?php echo  $_SESSION["id"]; ?>','<?php echo $id_post  ; ?>','<?php   echo $all_posts[$r][2]; ?>')"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                    <button type="button" class="btn btn-link"><i class="fa fa-share"></i> Share</button>
                                </div>
                                <div class="pull-right"><strong id="increment_like"><?php   echo $all_posts[$r][2]; ?></strong> <span style="color:rgb(60, 94, 181);">liked this</span>  </div>
                            </div>
                            <?php if (empty($all_posts[$r][7])) {?>
                            <div class="" >
                                <?php   }else{

                            if(count($all_posts[$r][7])>2) {?>
                            <div class="scrollable" style="height: calc(30vh - 9px);">
                            <?php   }else{ ?>
                                <div class="" >
                            <?php   } }?>

                         <?php  $counter=7 ;while(true){
                             if (empty($all_posts[$r][$counter])) {
                                 break;
                             }
                             ?>
                            <!--<div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-rounded" src="<?php /*echo $all_posts[$r][$counter][3]; */?>">
                                </a>
                                <div class="media-body">
                                    <div class="pull-right small"><?php /*echo $all_posts[$r][$counter][1]; */?></div>
                                    <h4 class="media-heading"><?php /*echo $all_posts[$r][$counter][2]; */?></h4>
                                    <p ><?php /*echo $all_posts[$r][$counter][0]; */?></p>
                                </div>
                            </div>-->

                            <div class="media">
                                <div class="media-body  ">
                                    <ul class=" chats ">

                                            <li class="left clearfix">
                    	                    <span class="chat-img pull-left">
                    		                      <img src="<?php echo $all_posts[$r][$counter][3]; ?>" alt="User Avatar">
                                            </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <strong class="primary-font"><?php echo $all_posts[$r][$counter][2]; ?></strong>
                                                        <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> <?php echo $all_posts[$r][$counter][1]; ?></small>
                                                    </div>
                                                    <p>


                                                        <?php if(str_word_count($all_posts[$r][$counter][0])>180) { ?>
                                                    <div class="chat_scrable">
                                                        <?php echo  $all_posts[$r][$counter][0] ; ?>
                                                    </div>
                                                    <?php } else{?>

                                                        <?php echo  $all_posts[$r][$counter][0] ; ?>

                                                    <?php } ?>

                                                </div>
                                            </li>


                                    </ul>
                                </div>
                            </div>


                         <?php  $counter++; if (empty($all_posts[$r][$counter])) {
                                 break;
                             }} ?>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-xs-12">

                                        <a class="kit-avatar kit-avatar-28 no-border pull-left" href="#">
                                            <img class="media-object" src="<?php   echo $user_info[0][1];?>">
                                        </a>
                                        <div class="input-group input-group-in no-border">
                                            <input class="form-control comment_value" id="" placeholder="write comment...">
                                            <div class="input-group-btn">
                                                <button  class="btn  my_btn" ripple style="color:#ffffff;" onclick="test_submit('<?php echo $id_post; ?>','<?php echo $_SESSION["id"] ; ?>')">
                                                    <i class="fa fa-2x fa-chevron-circle-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                </div>


                            </div>

                        </div>
                    </div>

                    <?php }  ?>
                </div>

            </div>
<?php a: $d=0;?>
        </div>
        <!-- user post -->
    </div><!-- end row -->
</div>

        <!-- end container-->
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/nicescroll.js"></script>
<script src="../js/submit_post.js"></script>
<script src="../js/submit_comment.js"></script>
<script src="../js/online_user.js"></script>
<script src="../js/ripple_event.js"></script>
<script src="../js/logout.js"></script>
<script src="../js/like_post.js"></script>
<script src="../js/avatar.js"></script>
<script src="../js/submit_update_info.js"></script>
<script src="../js/upload_user_img.js"></script>



</body>

<style>

  /*  .card .card-content {
        padding: 16px;
        border-radius: 0 0 2px 2px;
        background-clip: padding-box;
        box-sizing: border-box;
    }
    .card .card-content p {
        margin: 0;
        color: inherit;
    }
    .card .card-content span.card-title {
        line-height: 48px;
    }

    .card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
*/



  .modal-header-primary {
      color:#fff;
      padding:9px 15px;
      border-bottom:1px solid #eee;
      background-color: #428bca;
      -webkit-border-top-left-radius: 5px;
      -webkit-border-top-right-radius: 5px;
      -moz-border-radius-topleft: 5px;
      -moz-border-radius-topright: 5px;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
  }
  .modal-backdrop.in {
      opacity: 0.9;
  }



  .navbar-default {
      background-color: #3C5EB5;
      border-color: #3C5EB5;

      border-radius: 0px;
      border-top-color: #fff;
      border-top-width: 6px;
  }
  .navbar-default .navbar-nav>li>a {
      color: #fff;
  }
  .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
      color: #3C5EB5;
      font-weight: bolder;
      background-color: #ffffff;
      height: unset;
      border-bottom: #F4F4FE;
      border-bottom-style: inset;

  }
  .navbar-default .navbar-nav>li>a {
      color: #fff;
      font-weight: 800;

  }
  .chat-users h6 {
      font-size: 24px;
      margin: 0 0 20px;
      /* background-color: #3C5EB5; */
      color: #3C5EB5;
      border-bottom-color: #3C5EB5;
      border-bottom-style: inset;
      /* width: -webkit-fill-available; */
  }
  .navbar-default .navbar-brand {
      color: #fff;
      font-weight: 900;
  }


</style>

<script>
    // button ripple effect from @ShawnSauce 's pen https://codepen.io/ShawnSauce/full/huLEH

  

</script>
</html>
