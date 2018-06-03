<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 06/04/2018
 * Time: 12:28
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


require('../../Metier/Metier_session_checker.php');
require('../../Metier/Metier_get_all_users.php');
require('../../Metier/Metier_get_user_info.php');
$all_users=Metier_get_all_users();


if(!empty($all_users)) {
    $user_info = Metier_get_user_info();
    $all_users = array_reverse(Metier_get_all_users());
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/online_user.css" rel="stylesheet">
    <link href="../css/avatar.css" rel="stylesheet">
    <link href="../css/profil_user.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../css/admin_page_css.css" rel="stylesheet">
    <link href="../css/card.css" rel="stylesheet">
    <link href="../css/comment.css" rel="stylesheet">
    <link href="../css/my_custom_font_icon.css" rel="stylesheet">

    <!-- Custom Fonts -->


    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            margin: 30px auto;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .table-wrapper .btn {
            float: right;
            color: #333;
            background-color: #fff;
            border-radius: 3px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }
        .table-wrapper .btn:hover {
            color: #333;
            background: #f2f2f2;
        }
        .table-wrapper .btn.btn-primary {
            color: #fff;
            background: #03A9F4;
        }
        .table-wrapper .btn.btn-primary:hover {
            background: #03a3e7;
        }
        .table-title .btn {
            font-size: 13px;
            border: none;
        }
        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }
        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }
        .table-title {
            color: #fff;
            background: #4b5366;
            padding: 16px 25px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }
        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }
        .show-entries select.form-control {
            width: 60px;
            margin: 0 5px;
        }
        .table-filter .filter-group {
            float: right;
            margin-left: 15px;
        }
        .table-filter input, .table-filter select {
            height: 34px;
            border-radius: 3px;
            border-color: #ddd;
            box-shadow: none;
        }
        .table-filter {
            padding: 5px 0 15px;
            border-bottom: 1px solid #e9e9e9;
            margin-bottom: 5px;
        }
        .table-filter .btn {
            height: 34px;
        }
        .table-filter label {
            font-weight: normal;
            margin-left: 10px;
        }
        .table-filter select, .table-filter input {
            display: inline-block;
            margin-left: 5px;
        }
        .table-filter input {
            width: 200px;
            display: inline-block;
        }
        .filter-group select.form-control {
            width: 110px;
        }
        .filter-icon {
            float: right;
            margin-top: 7px;
        }
        .filter-icon i {
            font-size: 18px;
            opacity: 0.7;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }
        table.table tr th:first-child {
            width: 60px;
        }
        table.table tr th:last-child {
            width: 80px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }
        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }
        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
        }
        table.table td a:hover {
            color: #2196F3;
        }
        table.table td a.view {
            width: 30px;
            height: 30px;
            color: #2196F3;
            border: 2px solid;
            border-radius: 30px;
            text-align: center;
        }
        table.table td a.view i {
            font-size: 22px;
            margin: 2px 0 0 1px;
        }
        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }
        .status {
            font-size: 30px;
            margin: 2px 2px 0 0;
            display: inline-block;
            vertical-align: middle;
            line-height: 10px;
        }
        .text-success {
            color: #10c469;
        }
        .text-info {
            color: #62c9e8;
        }
        .text-warning {
            color: #FFC107;
        }
        .text-danger {
            color: #ff5b5b;
        }
        .pagination {
            float: right;
            margin: 0 0 5px;
        }
        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }
        .pagination li a:hover {
            color: #666;
        }
        .pagination li.active a {
            background: #03A9F4;
        }
        .pagination li.active a:hover {
            background: #0397d6;
        }
        .pagination li.disabled i {
            color: #ccc;
        }
        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }
        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }
    </style>
</head>
<body class="home" id="load_me">
<style>
    img {
        max-width: 200%;
    }
</style>
<div class="container-fluid display-table">
    <div class="row display-table-row">

        <?php include 'navigation_side_admin_page.php';?>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">

            <div class="row">


                <?php include 'header_admin_page.php';?>
            </div>
            <div class="user-dashboard">
                <br>
                <div class="row">
                           <div class="col-xs-12   col-lg-12  " style="    ">






                                   <div class="row "  >
                                       <div class="col-xs-10 col-xs-push-1 col-lg-8 col-lg-push-2" style=" background: white;">
                                           <div class="box-header"  >

                                               <div class="row">
                                                   <div class="col-xs-5 col-xs-push-5">
                                                       <a href="#" style="    margin-top: 12px;" class="btn   btn-primary"><i class="material-icons">&#xE863;</i> <span>add new user</span></a>
                                                   </div>
                                               </div>
                                           </div><!-- /.box-header -->
                                           <div class="box-body col-xs-11 col-xs-pull-0 col-lg-11 col-lg-push-1">
                                               <table  id="example" class="   table display responsive" width="100%" cellspacing="0" >
                                                   <thead>
                                                   <tr>

                                                       <th>#</th>
                                                       <th>users</th>
                                                       <th>name</th>
                                                       <th>tel</th>
                                                       <th>email</th>
                                                       <th>cv</th>
                                                       <th>ID_card</th>

                                                   </tr>
                                                   </thead>
                                                   <tbody>
                                                   <?php   for($r=0;$r<count($all_users);$r++) {
                                                       // $t=;

                                                       ?>
                                                       <tr>
                                                           <td> </td>

                                                           <td>


                                                               <div class="col-xs-12">
                                                                   <img src="<?php   echo $all_users[$r][1]  ;?>" class="avatar" style="width: 44px;" alt="Avatar">

                                                               </div>

                                                           </td>
                                                           <td>
                                                               <div class="col-xs-6">
                                                                   <div class="name" style="    font-size: small;">  <?php   echo $all_users[$r][0]  ;?></div>

                                                                   <div class="mood" style="    font-size: small;"> <?php   echo $all_users[$r][3]  ;?></div>


                                                               </div>
                                                           </td>
                                                           <td><?php   echo $all_users[$r][4]  ;?></td>
                                                           <td><?php   echo $all_users[$r][5]  ;?></td>
                                                           <td>

                                                               <span> <a href="<?php   echo  $all_users[$r][2]  ;?>"  class="user_info_1" target="_blank" ><i class="fa fa-download fa-1x" aria-hidden="true" style="color: #3c5eb5;"></i></a></span>

                                                           </td>
                                                           <td><?php   echo $all_users[$r][6]  ;?></td>
                                                       </tr>
                                                   <?php  }?>

                                                   </tbody>
                                               </table>

                                           </div><!-- /.box-body -->

                                       </div>


                                   </div><!-- /.box -->








                           </div>
                    </div>
                    <!--end info table user   -->
                </div>


            </div>
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

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="offcanvas"]').click(function(){
            $("#navigation").toggleClass("hidden-xs");
        });
   /*     $(document).ready(function() {

            var table = $('#display_user').DataTable();

           // table.css( 'display', 'table' );

          //  table.responsive.recalc();
            $( table.column( 2 ).header() ).addClass( 'never' );

            table.responsive.rebuild();
            table.responsive.recalc();
            table.DataTable()
                .columns.adjust()
                .responsive.recalc();
        } );*/

        $(document).ready( function () {
            var table = $('#example').DataTable({
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                columnDefs: [ {
                    className: 'control',
                    orderable: false,
                    targets:   0
                } ],
                order: [ 1, 'asc' ]
            });
            table.DataTable()
                .columns.adjust()
                .responsive.recalc();

        } );

    });

</script>


</body>
</html>