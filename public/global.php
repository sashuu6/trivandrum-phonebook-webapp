<?php

require '../init.php';

function site_header() {
    echo '<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <base href="' . PUBLIC_URL . '">
    <meta charset="utf-8">
    <meta name="author" content="Tharun P Karun (tharun.me)">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="' . PUBLIC_URL . 'images/favicon.png">
    <!-- Page Title  -->
    <title>';
    if(defined('PAGE_TITLE'))
        echo PAGE_TITLE . ' | ';
    echo APP_NAME;
echo '</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="' . PUBLIC_URL . 'assets/css/dashlite.css?ver=1.4.0">
    <link id="skin-default" rel="stylesheet" href="' . PUBLIC_URL . 'assets/css/theme.css?ver=1.4.0">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img mr-1" src="http://gisalpha.techwithus.com/assets/img/keralagov.png" srcset="http://gisalpha.techwithus.com/assets/img/keralagov.png 2x" alt="logo"> Trivandrum Phonebook</a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Data View</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item">
                                    <a href="' . PUBLIC_URL . 'sections_list.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-mobile"></em></span>
                                        <span class="nk-menu-text">Section List</span>
                                    </a>
                                    <a href="' . PUBLIC_URL . 'phonebooks_list.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-mobile"></em></span>
                                        <span class="nk-menu-text">Phonebook List</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Data Add</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item">
                                    <a href="' . PUBLIC_URL . 'section_add.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-mobile"></em></span>
                                        <span class="nk-menu-text">Add Section</span>
                                    </a>
                                    <a href="' . PUBLIC_URL . 'phonebook_add.php" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-mobile"></em></span>
                                        <span class="nk-menu-text">Add Phonebook</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                    <a class="nk-news-item">
                                        <div class="nk-news-icon">
                                            <em class="icon ni ni-card-view"></em>
                                        </div>
                                        <div class="nk-news-text">
                                            <p>Trivandrum Phonebook <span> An encrypted application that consist of phone numbers</span></p>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar">
                                                        <span>TPK</span>
                                                    </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status">Administrator</div>
                                                    <div class="user-name dropdown-indicator">Tharun P Karun</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>TPK</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Tharun P Karun</span>
                                                        <span class="sub-text">tpk@tharun.me</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/general/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/general/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/general/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                </ul>
                                            </div>-->
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown notification-dropdown mr-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell-off"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Your Notifications</span>
                                            </div>
                                            <div class="dropdown-foot center">
                                                <span>No New Notifications</span>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->';
}

function site_footer() {
    echo '<!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2020<img src="http://gisalpha.techwithus.com/assets/img/keralagov.png" height="20" class="ml-1"> Government of Kerala.
                            </div>
                            <div class="text-right">Powered by<a target="_blank" href="https://www.techwithus.com"><img src="https://beta.techwithus.com/wp-content/uploads/techwithus_logo_black.png" height="18" class="ml-1"></a></div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="' . PUBLIC_URL . 'assets/js/bundle.js?ver=1.4.0"></script>
    <script src="' . PUBLIC_URL . 'assets/js/scripts.js?ver=1.4.0"></script>
    <script src="' . PUBLIC_URL . 'assets/js/crypt.js?ver=1.4.0"></script>
    <script src="' . PUBLIC_URL . 'assets/js/cities.js?ver=1.4.0"></script>
</body>

</html>';
}