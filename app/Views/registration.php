<!-- <pre>
    <?php print_r($_REQUEST); ?>
</pre> -->

<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>Alliance - A Responsive Bootstrap 3 Admin Dashboard Template</title>
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
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/select2/css/core.css">


    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <style>
        .select2-container--default .select2-selection--single{
            background: #ffffff;
        }
    </style>

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
            <section id="content" class="">

                <!-- -------------- Registration -------------- -->
                <div class="allcp-form theme-primary mw600 mtn" id="register">
                    <div class="bg-primary mw600 text-center mb20 br3 pv15">
                        <img src="assets/img/logo.png" alt="" />
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading pn">
                            <span class="panel-title fs-20  ">
                                Registration form
                            </span>
                        </div>
                        <!-- -------------- /Panel Heading -------------- -->

                        <form method="post" action="/register" id="form-register">
                            <div class="panel-body pn">
                                <div class="section row">
                                    <div class="col-md-6 ph10">
                                        <label for="firstname" class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="First name...">
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10">
                                        <label for="lastname" class="field prepend-icon">
                                            <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                                            <label for="lastname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->
                                </div>
                                <!-- -------------- /section -------------- -->
                                <!-- date picker section -->
                                <div class="section row">
                                    <div class="col-md-6 ph10">
                                        <label for="datepicker1" class="field prepend-icon">
                                            <input type="text" id="datepicker1" name="datepicker1" class="gui-input" placeholder="Datepicker Popup">
                                            <label class="field-icon">
                                                <i class="fa fa-calendar"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="col-md-6 ph10">
                                        <label for="mobile" class="field prepend-icon">
                                            <input type="tel" name="mobile" id="mobile" class="gui-input" placeholder="Telephone / moble number">
                                            <label for="mobile" class="field-icon">
                                                <i class="fa fa-phone-square"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row">
                                    <div class="col-md-6 ph10">
                                        <select class="select2-single form-control">
                                            <option value="">Select Your Branch</option>
                                            <option value="16">16 -  INFORMATION TECHNOLOGY</option>
                                            <option value="09">09 -  ELECTRICAL ENGINEERING</option>
                                            <option value="31">31 -  COMPUTER SCIENCE & ENGINEERING</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 ph10">
                                    <select class="form-control" name="semester">
                                                <option value>Select Your Semester</option>
                                                <option value="1">sem 1</option>
                                                <option value="2">sem 2</option>
                                                <option value="3">sem 3</option>
                                                <option value="4">sem 4</option>
                                                <option value="5">sem 5</option>
                                                <option value="6">sem 6</option>
                                                <option value="7">sem 7</option>
                                                <option value="8">sem 8</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="section row">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gender : </label>

                                        <div class="col-md-9">
                                            <div class="bs-component">
                                                <label class="radio-inline mr10">
                                                    <input type="radio" name="gender" id="inlineRadio1" value="male">male
                                                </label>
                                                <label class="radio-inline mr10">
                                                    <input type="radio" name="gender" id="inlineRadio2" value="female">female
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /section -->
                                <div class="section">
                                    <label for="email" class="field prepend-icon">
                                        <input type="email" name="email" id="email" class="gui-input" placeholder="Email address">
                                        <label for="email" class="field-icon">
                                            <i class="fa fa-envelope"></i>
                                        </label>
                                    </label>
                                </div>

                                <!-- -------------- /section -------------- -->


                                <div class="section">
                                    <label for="password" class="field prepend-icon">
                                        <input type="text" name="password" id="password" class="gui-input" placeholder="Create a password">
                                        <label for="password" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <label for="confirmPassword" class="field prepend-icon">
                                        <input type="text" name="confirmPassword" id="confirmPassword" class="gui-input" placeholder="Retype your password">
                                        <label for="confirmPassword" class="field-icon">
                                            <i class="fa fa-unlock-alt"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <div class="pull-left mt10">
                                        <div class="checkbox-custom checkbox-primary mb5">
                                            <input type="checkbox" checked="" id="agree">
                                            <label for="agree">I agree to the
                                                <a href="#"> terms of use. </a></label>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-bordered btn-primary">I Accept - Create Account
                                        </button>
                                    </div>
                                </div>
                                <!-- -------------- /section -------------- -->

                            </div>
                            <!-- -------------- /Form -------------- -->
                            <div class="panel-footer">

                            </div>
                            <!-- -------------- /Panel Footer -------------- -->
                        </form>
                    </div>
                </div>
                <!-- -------------- /Spec Form -------------- -->

            </section>
            <!-- -------------- /Content -------------- -->

        </section>
        <!-- -------------- /Main Wrapper -------------- -->

    </div>
    <!-- -------------- /Body Wrap  -------------- -->

    <!-- -------------- Scripts -------------- -->

    <!-- -------------- jQuery -------------- -->
    <script src="assets/js/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- -------------- CanvasBG JS -------------- -->
    <script src="assets/js/plugins/canvasbg/canvasbg.js"></script>


<script src="assets/js/plugins/select2/select2.min.js"></script>

    <!--  -->

    <script src="assets/allcp/forms/js/jquery-ui-monthpicker.min.js"></script>
    <script src="assets/allcp/forms/js/jquery-ui-datepicker.min.js"></script>
    <script src="assets/allcp/forms/js/jquery.spectrum.min.js"></script>
    <script src="assets/allcp/forms/js/jquery.stepper.min.js"></script>

    <!-- -------------- Theme Scripts -------------- -->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- <script src="assets/js/demo/widgets_sidebar.js"></script> -->
    <script src="assets/js/pages/forms-widgets.js"></script>
    <!-- <script src="assets/js/pages/user-forms-additional-inputs.js"></script> -->


    <!-- -------------- Page JS -------------- -->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            "use strict";
            // Init Theme Core
            // Core.init();s

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
    </script>

    <!-- -------------- /Scripts -------------- -->

</body>

</html>