<?php
require '../../../init.php';
if($_POST) {
    section_public_form($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Add Section</title>
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
    <script src="../../assets/js/cities.js"></script>
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
            </li>
        </ul>
        <div class="relative pt-5">
            <div class="user-panel p-4 mb-2">
                <div>
                    <div class="image">
                        <img width="40" src="../../assets/img/dummy/u7.png" alt="User Image">
                    </div>
                    <div class="info">
                        <h5 class="mt-2 mb-1">Tharun P Karun</h5>
                        <span class="s-12">Team Leader</span>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
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

            </ul>
            <!-- Button -->
            <div>
                <a href="#" class="btn btn-primary btn-sm ml-3 d-none d-sm-block">List Phonebook</a>
            </div>
        </div>

    </div>
</div>
<div class="page has-sidebar-left height-full">
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="row mb-5">
            <div class="col-md-12 offset-sm-2 offset-lg-5">
                <div class="pt-5 relative">
                    <h3>
                        Add Section
                    </h3>
                    <strong>Add a new section for phonebook.</strong>
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
                <div class="col-md-6 offset-md-3">
                    <form method="POST" id="registerSubmit">
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <h5 class="card-title">Section Information</h5>
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">Name</label>
                                            <input name="name" id="name" placeholder="Enter Name" class="form-control r-0 light s-12 name" type="text" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <button id="submit" type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Save Data</button>
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
<script src="../../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="../../assets/js/app.js"></script>
<script src="../../assets/js/crypt.js"></script>
<script>
    $(document).ready(function(){
        $('#name').keyup(function(event) {
            var textBox = event.target;
            var start = textBox.selectionStart;
            var end = textBox.selectionEnd;
            textBox.value = textBox.value.charAt(0).toUpperCase() + textBox.value.slice(1).toLowerCase();
            textBox.setSelectionRange(start, end);
        });
        $(':input[type="submit"]').prop('disabled', true);
        $('input[type="text"]').keyup(function(){
            if($(this).val().length !=0)
                $(':input[type="submit"]').prop('disabled', false);
            else
                $(':input[type="submit"]').prop('disabled', true);
        })
    });

    $(':input[type="submit"]').on('click',function(e) {
        e.preventDefault();
        //var encrypted = CryptoJS.AES.encrypt(JSON.stringify("value to encrypt"), "my passphrase", {format: CryptoJSAesJson}).toString();
        //var decrypted = JSON.parse(CryptoJS.AES.decrypt(encrypted, "my passphrase", {format: CryptoJSAesJson}).toString(CryptoJS.enc.Utf8));
        // convert form data to array
        Swal.fire(
            {
                title: 'Encrypting',
                text: 'Please wait while we are encrypting all data before sending it to our server.',
                hideOnOverlayClick: false,
                hideOnContentClick: false,
                closeClick: false,
                showCancelButton: false, // There won't be any cancel button
                showConfirmButton: false // There won't be any confirm button
            }
        );
        var values, index;
        values = $('form').serializeArray();
        for (index = 0; index < values.length; ++index) {
            values[index].name = CryptoJS.AES.encrypt(JSON.stringify(values[index].name), getCookie('web'), {format: CryptoJSAesJson}).toString();
            if(values[index].value !== '')
                values[index].value = CryptoJS.AES.encrypt(JSON.stringify(values[index].value), getCookie('web'), {format: CryptoJSAesJson}).toString();
        }
        setTimeout(function () {
            Swal.fire(
                {
                    title: 'Sending',
                    text: 'Data encrypted successfully, Sending it to server!',
                    allowOutsideClick: false,
                    showCancelButton: false, // There won't be any cancel button
                    showConfirmButton: false // There won't be any confirm button
                }
            );
        }, 350);
        values = jQuery.param(values);
        setTimeout(function () {
            $.ajax(
                {
                    type: "POST",
                    url: "",
                    data: values,
                    beforeSend: function() {
                        $(':input[type="submit"]').prop('disabled', true);
                    },
                    success: function (data) {
                        if (data.status == true)
                            Swal.fire("Success!", data.message, "success");
                        else
                            Swal.fire("Oops", data.message, "error");
                        $("form").trigger("reset");
                    },
                    error: function (data) {
                        Swal.fire("Oops", "We couldn't connect to the server!", "error");
                        $(':input[type="submit"]').prop('disabled', false);
                    }
                }
            );
        }, 800);
    });
</script>

<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>