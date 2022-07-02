<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>Registration</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme" />
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">

    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="utility-page sb-l-c sb-r-c">

    <!-- -------------- Body Wrap  -------------- -->
    <div id="main" class="animated fadeIn">

        <!-- -------------- Main Wrapper -------------- -->
        <section id="content_wrapper">

            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- -------------- Content -------------- -->
            <section id="content">

                <!-- -------------- Login Form -------------- -->
                <div class="allcp-form theme-primary mtn" id="login">
                    <div class="text-center mb20">
                        <img src="assets/img/logo_login_form.png" class="img-responsive" alt="Logo" />
                    </div>
                    <div class="panel mw1000">

                        <form method="post" action="/" id="allcp-form">

                            <div class="panel-heading">
                                <div class="panel-title fs35">
                                    Student Registration
                                </div>
                            </div>
                            <div class="panel-body">

                                <h6 class="mb20" id="spy1">Personal Information</h6>
                                    <!-- personal information section -->
                                <div class="section row mbn">
                                    <div class="col-md-6 ph10 mb5">
                                        <label for="firstname" class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="First name...">
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10 mb5">
                                        <label for="lastname" class="field prepend-icon">
                                            <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                                            <label for="lastname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>

                                    <div class="col-md-6 ph10 mb5">
                                    <label for="datepicker1" class="field prepend-icon">
                                                <input type="text" id="datepicker1" name="datepicker1" class="gui-input hasDatepicker" placeholder="Datepicker Popup">
                                                <label class="field-icon">
                                                    <i class="fa fa-calendar"></i>
                                                </label>
                                            </label>
                                    </div>
                                    <div class="col-md-6 ph10 mb5">
                                        <label for="home_phone" class="field prepend-icon">
                                            <input type="tel" name="home_phone" id="home_phone" class="gui-input phone-group" placeholder="Phone number">
                                            <label for="home_phone" class="field-icon">
                                                <i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>

                                </div>
                                <!-- -------------- /section -------------- -->
                                    <!-- User identification  section -->

                                <div class="section row mbn">
                                    <h6 class="mb20 mt20 ml10">User Identification</h6>

                                    <div class="col-md-12 ph10 mb5">
                                        <label for="useremail" class="field prepend-icon">
                                            <input type="email" name="useremail" id="useremail" class="gui-input" placeholder="Email address">
                                            <label for="useremail" class="field-icon">
                                                <i class="fa fa-envelope"></i>
                                            </label>
                                        </label>

                                    </div>


                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10 mb5">
                                        <label for="password" class="field prepend-icon">
                                            <input type="password" name="password" id="password" class="gui-input" placeholder="Create password">
                                            <label for="password" class="field-icon">
                                                <i class="fa fa-lock"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10 mb5">
                                        <label for="repeatPassword" class="field prepend-icon">
                                            <input type="password" name="repeatPassword" id="repeatPassword" class="gui-input" placeholder="Repeat password">
                                            <label for="repeatPassword" class="field-icon">
                                                <i class="fa fa-unlock"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <!-- -------------- /Section -------------- -->

                                <div class="section row mbn">
                                <h6 class="mb20 mt20 ml10">Academic Background</h6>

                                    <div class="col-md-6 ph10 mb5">
                                    <label class="field select">
                                        <select id="branch_select" name="branch_select">
                                            <option value="">Select your branch...</option>
                                            <option value="EN">English</option>
                                            <option value="FR">French</option>
                                            <option value="SP">Spanish</option>
                                            <option value="CH">Chinese</option>
                                            <option value="RU">Russian</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                    </div>
                                    <div class="col-md-6 ph10 mb5">
                                    <label class="field select">
                                        <select id="sem_select" name="sem_select">
                                            <option value="">Select your sem...</option>
                                            <option value="EN">English</option>
                                            <option value="FR">French</option>
                                            <option value="SP">Spanish</option>
                                            <option value="CH">Chinese</option>
                                            <option value="RU">Russian</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                    </div>
                                </div>


                                <hr class="alt short">

                                <div class="section">
                                    <div class="option-group field">

                                        <label class="option block">
                                            <input type="checkbox" name="parents" id="parents" value="parents">
                                            <span class="checkbox"></span> I have a child
                                        </label>

                                    </div>
                                    <!-- -------------- /section -------------- -->
                                </div>
                            </div>


                            <!-- -------------- /Form -------------- -->
                            <div class="panel-footer text-right">
                                <button type="submit" class="btn btn-bordered btn-primary mb5"> Validate Form</button>
                                <button type="reset" class="btn btn-bordered mb5"> Cancel</button>
                            </div>
                    </div>
                    <!-- -------------- /Panel Footer -------------- -->
                    </form>

                </div>
                <!-- -------------- /Panel -------------- -->
    </div>
    <!-- -------------- /Spec Form -------------- -->

    </section>
    <!-- -------------- /Content -------------- -->

    </section>
    <!-- -------------- /Main Wrapper -------------- -->

    </div>
    <!-- -------------- /Body Wrap  -------------- -->
<!-- -------------- jQuery -------------- -->
    <script src="assets/js/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>
    <!-- -------------- Scripts -------------- -->
    <!-- <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core
            Core.init();

            // Init Demo JS
            Demo.init();

            // Init CanvasBG
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 5,
                    y: window.innerHeight / 10
                }
            });

        });
    </script> -->

    

    <!-- -------------- CanvasBG JS -------------- -->
    <!-- <script src="assets/js/plugins/canvasbg/canvasbg.js"></script> -->


    <!-- -------------- MonthPicker JS -------------- -->
<script src="assets/allcp/forms/js/jquery-ui-datepicker.min.js"></script>



    <!-- -------------- Validate JS -------------- -->
    <!-- <script src="assets/allcp/forms/js/jquery.validate.min.js"></script> -->
    <!-- <script src="assets/allcp/forms/js/additional-methods.min.js"></script> -->
    <!-- -------------- Theme Scripts -------------- -->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demo/widgets_sidebar.js"></script>
    <script src="assets/js/pages/forms-widgets.js"></script>

    <!-- -------------- Page JS -------------- -->

    <!-- -------------- /Scripts -------------- -->


</body>

</html>