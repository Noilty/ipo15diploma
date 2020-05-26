<?php
$system_name = $LANGUAGE_SITE['auth']['system_name'];
$type = $LANGUAGE_SITE['auth']['full_type'];
$organization = $LANGUAGE_SITE['auth']['organization'];
$organization_name = $LANGUAGE_SITE['auth']['organization_name'];
$NAVBAR_HEADER=<<<HTML
<nav class="navbar navbar-expand-lg bg-white fixed-top">
    <a class="navbar-brand" href="location.php" title="$system_name $type">$CORE_system_name_type</a>
    <name title="$organization &laquo;$organization_name&raquo;">$CORE_organization</name>
    <button class="navbar-toggler" style="background: currentColor;margin: 13px;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-right-top"><!--
            <li class="nav-item">
                <div id="custom-search" class="top-search-bar">
                    <input class="form-control" type="text" placeholder="Search..">
                </div>
            </li>-->
            <li class="nav-item dropdown notification">
                <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-th" style="width: 32px;"></i> <span class="indicator"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                    <li>
                        <div class="notification-title"> NaN</div><!--
                        <div class="notification-list">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action NOactive">
                                    <div class="notification-info">
                                        <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                        <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                            <div class="notification-date">2 min ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="notification-info">
                                        <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                        <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham</span>is now following you
                                            <div class="notification-date">2 days ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="notification-info">
                                        <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                        <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                            <div class="notification-date">2 min ago</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="notification-info">
                                        <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                        <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                            <div class="notification-date">2 min ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>-->
                    </li>
                    <li>
                        <div class="conntection-footer"><a href="$address/pages/system-sheet.php">ЛИСТ ВОЗМОЖНОСТЕЙ СИСТЕМЫ</a></div>
                    </li>
                </ul>
            </li><!--
            <li class="nav-item dropdown connection">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                    <li class="connection-list">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="$address/assets/images/github.png" alt="" > <span>NaN</span></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="$address/assets/images/dribbble.png" alt="" > <span>NaN</span></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="$address/assets/images/dropbox.png" alt="" > <span>NaN</span></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="$address/assets/images/bitbucket.png" alt=""> <span>NaN</span></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="$address/assets/images/mail_chimp.png" alt="" ><span>NaN</span></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="$address/assets/images/slack.png" alt="" > <span>NaN</span></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="conntection-footer"><a href="$address/pages/system-sheet.php">ЛИСТ ВОЗМОЖНОСТЕЙ СИСТЕМЫ</a></div>
                    </li>
                </ul>
            </li>-->
            <li class="nav-item dropdown nav-user">
                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <!--<img src="$address/assets/images/avatars/no_avatar.png" alt="" class="user-avatar-md rounded-circle">-->
                  <img src="https://pp.userapi.com/c622524/v622524033/29280/MgpMjXu2mWU.jpg" alt="" class="user-avatar-md rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                    <div class="nav-user-info">
                        <h5 class="mb-0 text-white nav-user-name">$CORE_user_surname $CORE__user_name.$CORE__user_patronymic.</h5>
                    </div>
                    <a class="dropdown-item" href="$address/pages/profile.php"><i class="fas fa-user mr-2"></i>Персональная информация</a>
                    <a class="dropdown-item" href="$address/logout.php"><i class="fas fa-power-off mr-2"></i>Выйти</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
HTML;
?>
