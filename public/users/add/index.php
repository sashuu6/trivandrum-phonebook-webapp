<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<script>
    /*
     *  Add sidebar classes (sidebar-mini sidebar-collapse sidebar-expanded-on-hover) in body tag
     *  you can remove this script tag and add classes directly to body
     *  this is only for demo
     */
    document.body.className += ' sidebar-mini' + ' sidebar-collapse' + ' sidebar-expanded-on-hover' + ' sidebar-top-offset';
</script>
<aside class="main-sidebar fixed offcanvas b-r" data-toggle='offcanvas'>
    <section class="sidebar">
        <ul class="sidebar-menu mt-4">
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water s-24"></i> <span>Dashboard</span> <i
                    class=" icon-angle-left  pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li><a href="../../index.html"><i class="icon icon-folder5"></i>Panel Dashboard 1</a>
                    </li>
                    <li><a href="../../panel-page-dashboard1-rtl.html"><i class="icon icon-folder5"></i>Panel Dashboard 1 - RTL</a>
                    </li>
                    <li><a href="../../panel-page-dashboard2.html"><i class="icon icon-folder5"></i>Panel Dashboard 2</a>
                    </li>
                    <li><a href="../../panel-page-dashboard3.html"><i class="icon icon-folder5"></i>Panel Dashboard 3</a>
                    </li>
                    <li><a href="../../panel-page-dashboard4.html"><i class="icon icon-folder5"></i>Panel Dashboard 4</a>
                    </li>
                    <li><a href="../../panel-page-dashboard5.html"><i class="icon icon-folder5"></i>Panel Dashboard 5</a>
                    </li>
                    <li><a href="../../panel-page-dashboard6.html"><i class="icon icon-folder5"></i>Panel Dashboard 6</a>
                    </li>
                    <li><a href="../../panel-page-dashboard7.html"><i class="icon icon-folder5"></i>Panel Dashboard 7</a>
                    </li>
                    <li><a href="../../panel-page-dashboard8.html"><i class="icon icon-folder5"></i>Panel Dashboard 8</a>
                    </li>
                    <li><a href="../../panel-page-dashboard9.html"><i class="icon icon-folder5"></i>Panel Dashboard 9</a>
                    </li>
                    <li><a href="../../panel-page-dashboard10.html"><i class="icon icon-folder5"></i>Panel Dashboard 10</a></li>
                    <li><a href="../../panel-page-dashboard11.html"><i class="icon icon-folder5"></i>Panel Dashboard 11</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package s-24"></i>
                <span>Products</span>
                <span class="badge r-3 badge-primary pull-right">4</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="../../panel-page-products.html"><i class="icon icon-circle-o"></i>All Products</a>
                    </li>
                    <li><a href="../../panel-page-products-create.html"><i class="icon icon-add"></i>Add
                        New </a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box s-24"></i>Users<i
                    class=" icon-angle-left  pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="../../panel-page-users.html"><i class="icon icon-circle-o"></i>All Users</a>
                    </li>
                    <li><a href="../../panel-page-users-create.html"><i class="icon icon-add"></i>Add User</a>
                    </li>
                    <li><a href="../../panel-page-profile.html"><i class="icon icon-user"></i>User Profile </a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon-package s-24"></i>
                <i class=" icon-angle-left  pull-right"></i>
                <span>Inbox</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="../../panel-page-inbox.html"><i class="icon icon-circle-o"></i>All Messages</a>
                    </li>
                    <li><a href="../../panel7-inbox.html"><i class="icon icon-circle-o"></i>Panel7 - Inbox</a>
                    </li>
                    <li><a href="../../panel8-inbox.html"><i class="icon icon-circle-o"></i>Panel8 - Inbox</a>
                    </li>
                    <li><a href="../../panel-page-inbox-create.html"><i class="icon icon-add"></i>Compose</a>
                    </li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="icon icon-package  s-24"></i> <span>Apps</span>
                    <i class=" icon-angle-left  pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../../panel-page-chat.html"><i class="icon icon-circle-o"></i>Chat</a>
                    </li>
                    <li><a href="../../panel7-tasks.html"><i class="icon icon-circle-o"></i>Tasks / Todo</a>
                    </li>
                    <li><a href="../../panel-page-calendar.html"><i class="icon icon-date_range"></i>Calender</a>
                    </li>
                    <li><a href="../../panel-page-calendar2.html"><i class="icon icon-date_range"></i>Calender 2</a>
                    </li>
                    <li><a href="../../panel-page-contacts.html"><i class="icon icon-circle-o"></i>Contacts</a>
                    </li>
                    <li><a href="../../panel1-projects.html"><i class="icon icon-circle-o"></i>Panel1 - Projects</a>
                    </li>
                    <li><a href="../../panel7-projects-list.html"><i class="icon icon-circle-o"></i>Panel7 - Projects List</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-documents3 s-24"></i> <span>Pages</span>
                    <i class=" icon-angle-left  pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="icon icon-documents3"></i>Blank Pages<i
                            class=" icon-angle-left  pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="../../panel-page-blank.html"><i class="icon icon-document"></i>Simple Blank</a>
                            </li>
                            <li><a href="../../panel-page-blank-tabs.html"><i class="icon icon-document"></i>Tabs Blank <i
                                    class=" icon-angle-left  pull-right"></i></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon icon-fingerprint text-green"></i>Auth Pages<i
                            class=" icon-angle-left  pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="../../login.html"><i class="icon icon-document"></i>Login Page 1</a>
                            </li>
                            <li><a href="../../login-2.html"><i class="icon icon-document"></i>Login Page 2</a>
                            </li>
                            <li><a href="../../login-3.html"><i class="icon icon-document"></i>Login Page 3</a>
                            </li>
                            <li><a href="../../login-4.html"><i class="icon icon-document"></i>Login Page 4</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon icon-bug text-red"></i>Error Pages<i
                            class=" icon-angle-left  pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="../../panel-page-404.html"><i class="icon icon-document"></i>404 Page</a>
                            </li>
                            <li><a href="../../panel-page-500.html"><i class="icon icon-document"></i>500 Page<i
                                    class=" icon-angle-left  pull-right"></i></a>
                            </li>
                            <li><a href="../../panel-page-error.html"><i class="icon icon-document"></i>420 Page<i
                                    class=" icon-angle-left  pull-right"></i></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon icon-documents3"></i>Other Pages<i
                            class=" icon-angle-left  pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="../../panel-page-invoice.html"><i class="icon icon-document"></i>Invoice Page</a>
                            </li>
                            <li><a href="../../panel-page-no-posts.html"><i class="icon icon-document"></i>No Post Page</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-goals-1  s-24"></i> <span>Elements</span>
                    <i class=" icon-angle-left  pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../../panel-element-widgets.html">
                        <i class="icon icon-widgets amber-text s-14"></i> <span>Widgets</span>
                    </a>
                    </li>
                    <li><a href="../../panel-element-counters.html">
                        <i class="icon icon-filter_9_plus amber-text s-14"></i> <span>Counters</span>
                    </a>
                    <li><a href="../../panel-element-buttons.html">
                        <i class="icon icon-touch_app amber-text s-14"></i> <span>Buttons</span>
                    </a>
                    </li>
                    <li>
                        <a href="../../panel-element-typography.html">
                            <i class="icon icon-text-width amber-text s-14"></i> <span>Typography</span>
                        </a>
                    </li>
                    <li><a href="../../panel-element-tabels.html">
                        <i class="icon icon-table amber-text s-14"></i> <span>Tables</span>
                    </a>
                    </li>
                    <li><a href="../../panel-element-alerts.html">
                        <i class="icon icon-exclamation-circle amber-text s-14"></i> <span>Alerts</span>
                    </a>
                    </li>
                    <li><a href="../../panel-element-slider.html"><i class="icon icon-view_carousel amber-text s-14"></i>
                        <span>Slider</span></a></li>
                    <li><a href="../../panel-element-tabs.html"><i class="icon icon-folders2 amber-text s-14"></i>
                        <span>Tabs</span></a></li>
                    <li><a href="../../panel-element-progress-bars.html"><i class="icon icon-folders2 amber-text s-14"></i>
                        <span>Progress Bars</span></a></li>
                    <li><a href="../../panel-element-badges.html"><i class="icon icon-flag7 amber-text s-14"></i>
                        <span>Badges</span></a></li>
                    <li><a href="../../panel-element-preloaders.html"><i class="icon icon-data_usage amber-text s-14"></i>
                        <span>Preloaders</span></a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="icon icon-wpforms  s-24 "></i> <span>Forms & Plugins</span>
                    <i class=" icon-angle-left  pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../../panel-element-forms.html"><i class="icon icon-wpforms light-green-text"></i>Bootstrap
                        Inputs</a>
                    </li>
                    <li><a href="../../form-jquery-validations.html"><i class="icon icon-note-important light-green-text"></i>
                        Form Validation (Jquery)</a>
                    </li>
                    <li><a href="../../form-bootstrap-validations.html"><i class="icon icon-note-important light-green-text"></i>
                        Form Validation (Bootstrap)</a>
                    </li>
                    <li><a href="../../panel-element-editor.html"><i class="icon icon-pen2 light-green-text"></i>Editor</a>
                    </li>
                    <li><a href="../../panel-element-toast.html"><i
                            class="icon icon-notifications_active light-green-text"></i>Toasts</a>
                    </li>
                    <li><a href="../../panel-element-stepper.html"><i class="icon icon-burst_mode light-green-text"></i>Stepper</a>
                    </li>
                    <li><a href="../../panel-element-date-time-picker.html"><i
                            class="icon icon-date_range light-green-text"></i>Date Time Picker</a>
                    </li>
                    <li><a href="../../panel-element-color-picker.html"><i class="icon icon-adjust light-green-text"></i>Color
                        Picker</a>
                    </li>
                    <li><a href="../../panel-element-range-slider.html"><i class="icon icon-space_bar light-green-text"></i>Range
                        Slider</a>
                    </li>
                    <li><a href="../../panel-element-select2.html"><i
                            class="icon  icon-one-finger-click light-green-text"></i>Select 2</a>
                    </li>
                    <li><a href="../../panel-element-tags.html"><i class="icon  icon-tags3 light-green-text"></i>Tags</a>
                    </li>
                    <li><a href="../../panel-element-data-tables.html"><i class="icon icon-table light-green-text"></i>Data
                        Tables</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon-bar-chart2  s-24"></i>
                <span>Charts</span>
                <i class=" icon-angle-left  pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="../../panel-element-charts-js.html"><i class="icon icon-area-chart pink-text s-14"></i><span>Charts.Js</span></a>
                    </li>
                    <li>
                        <a href="../../panel-element-morris.html"><i class="icon icon-bubble_chart pink-text s-14"></i>Morris
                            Charts</a>
                    </li>
                    <li>
                        <a href="../../panel-element-echarts.html">
                            <i class="icon icon-bar-chart-o pink-text s-14"></i>Echarts</a>
                    </li>
                    <li>
                        <a href="../../panel-element-easy-pie-charts.html">
                            <i class="icon icon-area-chart pink-text s-14"></i>Easy Pie Charts</a>
                    </li>
                    <li>
                        <a href="../../panel-element-jqvmap.html">
                            <i class="icon icon-map pink-text s-14"></i>Jqvmap</a>
                    </li>
                    <li>
                        <a href="../../panel-element-sparklines.html">
                            <i class="icon icon-line-chart2 pink-text s-14"></i>Sparklines</a>
                    </li>
                    <li>
                        <a href="../../panel-element-float.html">
                            <i class="icon icon-pie-chart pink-text s-14"></i>Float Charts</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon-dialpad  s-24"></i>
                <span>Extra</span>
                <i class=" icon-angle-left  pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="../../panel-element-letters.html">
                            <i class="icon icon-brightness_auto light-blue-text s-14"></i>
                            <span>Avatar Placeholders</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../panel-element-icons.html">
                            <i class="icon icon-camera2 light-blue-text s-14"></i> <span>Icons</span>
                        </a>
                    </li>
                    <li><a href="../../panel-element-colors.html">
                        <i class="icon icon-palette light-blue-text s-14"></i> <span>Colors</span>
                    </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="relative pt-5">
            <div class="user-panel p-4 mb-2">
                <div>
                    <div class="image">
                        <img width="40" src="../../assets/img/dummy/u7.png" alt="User Image">
                    </div>
                    <div class="info">
                        <h5 class="mt-2 mb-1">Alexander Pierce</h5>
                        <span class="s-12">Team Leader</span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="../../index.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>
<!--Sidebar End-->
<div class="sticky">
    <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white b-b">
        <div class="relative">
            <div class="d-flex">
                <div>
                    <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                        <i></i>
                    </a>
                </div>
                <ul class="nav responsive-tab nav-material nav-material-white mt-1 ml-3" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="mr-3 icon-code2"></i>Trivandrum Phone Book</a>
                    </li><!--
                    <li>
                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"><i
                                class="icon icon-plus-circle mb-3"></i>Yesterday</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"><i
                                class="icon icon-calendar"></i>By Date</a>
                    </li>-->
                </ul>
            </div>
        </div>
        <!--Top Menu Start -->
        <div class="navbar-custom-menu d-flex align-items-center">
            <ul class="nav navbar-nav">
                <!-- Messages-->
                <li class="dropdown custom-dropdown messages-menu">
                    <a href="#" class="nav-link pl-lg-3 pr-lg-3 b-l" data-toggle="dropdown">
                        <i class="icon-message "></i>
                        <span class="badge badge-success badge-mini rounded-circle">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu pl-2 pr-2">
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="../../assets/img/dummy/u4.png" alt="">
                                            <span class="avatar-badge busy"></span>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="../../assets/img/dummy/u1.png" alt="">
                                            <span class="avatar-badge online"></span>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="../../assets/img/dummy/u2.png" alt="">
                                            <span class="avatar-badge idle"></span>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <!-- start message -->
                                <li>
                                    <a href="#">
                                        <div class="avatar float-left">
                                            <img src="../../assets/img/dummy/u3.png" alt="">
                                            <span class="avatar-badge busy"></span>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                        </li>
                        <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- Notifications -->
                <li class="dropdown custom-dropdown notifications-menu">
                    <a href="#" class="nav-link  b-r b-l pl-lg-3 pr-lg-3" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-notifications "></i>
                        <span class="badge badge-danger badge-mini rounded-circle">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer p-2 text-center"><a href="#">View all</a></li>
                    </ul>
                </li>

            </ul>
            <!-- Button -->
            <div>
                <a href="#" class="btn btn-primary btn-sm ml-3 d-none d-sm-block">Add New Project</a>
            </div>
        </div>

    </div>
</div>
<div class="page has-sidebar-left height-full">
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="row mb-5">
            <div class="col-md-8 offset-lg-5">
                <div class="pt-5 relative">
                    <h3>
                        Add Phonebook
                    </h3>
                    <strong>Add a new phonebook entry</strong>
                </div>
                <!--<div class="row">
                    <div class="col-md-4 my-3">
                        <div class="d-flex">
                            <img class="mr-3  r-3" src="../../assets/img/demo/portfolio/p8.jpg"
                                 alt="Generic placeholder image" width="50" height="50">
                            <div>
                                <h6 class="mt-0 mb-1">Project Name</h6>
                                <div class="mt-1 text-dark-heading">Food Application Development</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="d-flex">
                            <img class="mr-3 r-3" src="../../assets/img/dummy/bootstrap.png" alt="" width="50" height="50">
                            <div>
                                <h6 class="mt-0 mb-1">Company</h6>
                                <h5 class="mt-1 text-dark-heading">Bootstrap Paper Co</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="d-flex">
                            <img class="mr-3 r-3 circle" src="../../assets/img/dummy/u12.png" alt="" width="50" height="50">
                            <div>
                                <h6 class="mt-0 mb-1">Team Leader</h6>
                                <div class="mt-1 text-dark-heading">Salman Khan</div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
            <!--<div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                         <span class="easy-pie-chart" data-percent="55"
                                               data-options='{"lineWidth": 10, "barColor": "#7dc855"}'>
                                    <span class="percent">55%</span>
                                     </span>
                            </div>
                            <div>
                                <h6> Your Progress <br>
                                    <small>Where you stand in project</small>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="icon icon-schedule text-yellow"></i>Design New Layout
                            <div class="float-right">
                                <span class="badge badge-warning">Incomplete</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>-->
        </div>
        <div class="animated fadeInUpShort go">
            <div class="row my-3">
                <div class="col-md-7  offset-md-2">
                    <form action="#">
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title">Section Selection</h5>
                                <div class="form-row">
                                    <div class="form-group col-5 m-0">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select A parent</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control r-0 light s-12" id="inlineFormCustomSelectPref">
                                            <option selected="">Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">User Information</h5>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">STUDENT NAME</label>
                                            <input id="name" placeholder="Enter User Name" class="form-control r-0 light s-12 " type="text">
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-6 m-0">
                                                <label for="cnic" class="col-form-label s-12"><i class="icon-fingerprint"></i>CNIC / FORM B</label>
                                                <input id="cnic" placeholder="Enter Form B or CNIC Number" class="form-control r-0 light s-12 date-picker" type="text">
                                            </div>
                                            <div class="form-group col-6 m-0">
                                                <label for="dob" class="col-form-label s-12"><i class="icon-calendar mr-2"></i>DATE OF BIRTH</label>
                                                <input id="dob" placeholder="Select Date of Birth" class="form-control r-0 light s-12 datePicker" data-time-picker="false" data-format-date="Y/m/d" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group m-0">
                                            <label for="dob" class="col-form-label s-12">GENDER</label>
                                            <br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="male" name="gender" class="custom-control-input">
                                                <label class="custom-control-label m-0" for="male">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="female" name="gender" class="custom-control-input">
                                                <label class="custom-control-label m-0" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 offset-md-1">
                                        <input hidden="" id="file" name="file">
                                        <div class="dropzone dropzone-file-area pt-4 pb-4 dz-clickable" id="fileUpload">
                                            <div class="dz-default dz-message">
                                                <span>Drop A passport size image of user</span>
                                                <div>You can also click to open file browser</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-row mt-1">
                                    <div class="form-group col-4 m-0">
                                        <label for="email" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Email</label>
                                        <input id="email" placeholder="user@email.com" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                    <div class="form-group col-4 m-0">
                                        <label for="phone" class="col-form-label s-12"><i class="icon-phone mr-2"></i>Phone</label>
                                        <input id="phone" placeholder="05112345678" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col-4 m-0">
                                        <label for="mobile" class="col-form-label s-12"><i class="icon-mobile-phone mr-2"></i>Mobile</label>
                                        <input id="mobile" placeholder="eg: 3334709643" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-9 m-0">
                                        <label for="address" class="col-form-label s-12">Address</label>
                                        <input type="text" class="form-control r-0 light s-12" id="address" placeholder="Enter Address">
                                    </div>

                                    <div class="form-group col-3 m-0">
                                        <label for="inputCity" class="col-form-label s-12">City</label>
                                        <input type="text" class="form-control r-0 light s-12" id="inputCity">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Save Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Right Sidebar -->
<aside class="control-sidebar fixed white ">
    <div class="slimScroll">
        <div class="sidebar-header">
            <h4>Activity List</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <div>
                <div class="my-3">
                    <small>25% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>45% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>60% Complete</small>
                    `
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>75% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>100% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 bg-primary text-white">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-normal s-14">Sodium</h5>
                    <span class="font-weight-lighter text-primary">Spark Bar</span>
                    <div> Oxygen
                        <span class="text-primary">
                                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <canvas width="100" height="70" data-chart="spark" data-chart-type="bar"
                            data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                            data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                    </canvas>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                <tbody>
                <tr>
                    <td>
                        <a href="#">INV-281281</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 1228.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="sidebar-header">
            <h4>Activity</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-4">
            <div class="activity-item activity-primary">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 5 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-danger">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 8 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-success">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 10 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-warning">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 12 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="../../assets/js/app.js"></script>




<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>