<header>
    <div class="col-md-7">
        <nav class="navbar-default pull-left">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </nav>
        <div class="search hidden-xs hidden-sm">

        </div>
    </div>
    <div class="col-md-5">
        <div class="header-rightside">
            <ul class="list-inline header-top pull-right">

                <li class="dropdown" id="generique" onclick="clear_badge_0()">
                    <a href="#" class="icon-info dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        <span class=" badge label label-primary"></span>

                    </a>
                    <ul class="dropdown-menu   col-xs-8 scroll_notif chats" style="width: 280px; height: calc(50vh - 9px);
 overflow: hidden;
    outline: none;     border-radius: 5px;
    margin-top: 7px; margin-left: -86px;">

                        <li> <div class="jumbotron" style="    border-radius: 1px;
    background-color: #F4F4FE;
    color: #3c5eb5;
    height: 118px;
    margin-top: 72px;">
                                    <span style="font-size: larger;
    font-weight: bold;"> no notifiction </span>

                            </div> </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php   echo $user_info[0][1]  ;?>" alt="user">
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-content">
                                <span><?php   echo $user_info[0][0]  ;?></span>
                                <p class="text-muted small">
                                    <?php  /* echo $user_info[0][2]  ;*/?>
                                </p>
                                <div class="divider">
                                </div>
                                <a href="#" class="view btn-sm active" onclick="logout('<?php echo $_SESSION["id"] ;?>')"><i class="fa fa-1x fa-sign-out" style="    color: #ffffff;
    width: 89px;
    font-size: large;"></i></a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>