
<?php
$validation = \Config\Services::validation();

?>

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
        .field-icon{
            display: flex;
            justify-content: center;
            align-items: center;
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

                        <?= form_open('/register',"id='form-register'") ?>
                        <!-- <form method="post" action="/register" id="form-register"> -->
                            <div class="panel-body pn">
                                <div class="section row">
                                    <div class="col-md-6 ph10">
                                        <label for="firstname" class="field prepend-icon <?= $validation->hasError('firstname') ? "state-error":"" ?>">
                                            <input type="text" name="firstname" id="firstname" value="<?= set_value('firstname')?>" class="gui-input" placeholder="First name...">
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                        <em for="" class="state-error">
                                            <?=  $validation->hasError('firstname') ? $validation->getError('firstname'):"" ?>
                                        </em> 
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10">
                                        <label for="lastname" class="field prepend-icon <?= $validation->hasError('lastname') ? "state-error":"" ?>">
                                            <input type="text" name="lastname" id="lastname" value="<?= set_value('lastname')?>" class="gui-input" placeholder="Last name...">
                                            <label for="lastname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                        
                                        <em for="" class="state-error">
                                            <?= $validation->hasError('lastname') ? $validation->getError('lastname'):"" ?>
                                        </em> 
                                    </div>
                                    <!-- -------------- /section -------------- -->
                                </div>
                                <!-- -------------- /section -------------- -->
                                <!-- date picker section -->
                                <div class="section row">
                                    <div class="col-md-6 ph10">
                                        <label for="dob" class="field prepend-icon <?= $validation->hasError('dob') ? "state-error":"" ?>">
                                            <input type="text" id="dob" name="dob" value="<?= set_value('dob')?>" class="gui-input" placeholder="Datepicker Popup">
                                            <label class="field-icon">
                                                <i class="fa fa-calendar"></i>
                                            </label>
                                        </label>
                                        <em for="" class="state-error">
                                            <?= $validation->hasError('dob') ? $validation->getError('dob'):"" ?>
                                        </em> 
                                    </div>
                                    <div class="col-md-6 ph10">
                                        <label for="mobile" class="field prepend-icon <?= $validation->hasError('mobile') ? "state-error":"" ?>">
                                            <input type="tel" name="mobile" id="mobile" value="<?= set_value('mobile')?>" class="gui-input" placeholder="Telephone / moble number">
                                            <label for="mobile" class="field-icon">
                                                <i class="fa fa-phone-square"></i>
                                            </label>
                                        </label>
                                        <em for="" class="state-error">
                                            <?= $validation->hasError('mobile') ? $validation->getError('mobile'):"" ?>
                                        </em> 
                                    </div>
                                </div>
                                <div class="section row">
                                    <div class="col-md-6 ph10">
                                        <label for="" class="feild select <?= $validation->hasError('branch') ? "state-error":"" ?>">
                                        <select class="select2-single form-control"  value="<?= set_value('branch')?>" name="branch">
                                            <option value="">Select Your Branch</option>
                                            <option value="16" <?= set_value('branch')==16 ? "selected":"" ?> >16 -  INFORMATION TECHNOLOGY</option>
                                            <option value="9" <?= set_value('branch')==9 ? "selected":"" ?> >09 -  ELECTRICAL ENGINEERING</option>
                                            <option value="31" <?= set_value('branch')==31 ? "selected":"" ?> >31 -  COMPUTER SCIENCE & ENGINEERING</option>
                                        </select></label>
                                        <em for="" class="state-error">
                                            <?= $validation->hasError('branch') ? $validation->getError('branch'):"" ?>
                                        </em> 
                                    </div>
                                    <div class="col-md-6 ph10">
                                    <label for="" class="feild select <?= $validation->hasError('semester') ? "state-error":"" ?>">

                                    <select class="form-control" name="semester">
                                                <option value>Select Your Semester</option>
                                                <option value="1" <?= set_value('semester')==1 ? "selected":"" ?>>sem 1</option>
                                                <option value="2" <?= set_value('semester')==2 ? "selected":"" ?>>sem 2</option>
                                                <option value="3" <?= set_value('semester')==3 ? "selected":"" ?>>sem 3</option>
                                                <option value="4" <?= set_value('semester')==4 ? "selected":"" ?>>sem 4</option>
                                                <option value="5" <?= set_value('semester')==5 ? "selected":"" ?>>sem 5</option>
                                                <option value="6" <?= set_value('semester')==6 ? "selected":"" ?>>sem 6</option>
                                                <option value="7" <?= set_value('semester')==7 ? "selected":"" ?>>sem 7</option>
                                                <option value="8" <?= set_value('semester')==8 ? "selected":"" ?>>sem 8</option>
                                            </select>
                                    </label>
                                    <em for="" class="state-error">
                                            <?= $validation->hasError('semester') ? $validation->getError('semester'):"" ?>
                                        </em> 
                                    </div>
                                </div>
                                <div class="section row">
                                        <div class="col-md-12 ph10">
                                    <label for="" class="feild select <?= $validation->hasError('gender') ? "state-error":"" ?>">
                                            
                                            <select class="form-control" aria-placeholder="Gender" name="gender">
                                                    <option value>Select Gender</option>
                                                    <option value="m" <?= set_value('gender')=='m' ? "selected":"" ?> >male</option>
                                                    <option value="f" <?= set_value('gender')=='f' ? "selected":"" ?> >female</option>
                                            </select>
                                    </label>
                                    <em for="" class="state-error">
                                            <?= $validation->hasError('gender') ? $validation->getError('gender'):"" ?>
                                        </em> 
                                        </div>
                                </div>
                                <!-- /section -->
                                <div class="section">
                                    <label for="email" class="field prepend-icon <?= $validation->hasError('email') ? "state-error":"" ?>">
                                        <input type="email" name="email" id="email"  value="<?= set_value('email')?>"  class="gui-input" placeholder="Email address">
                                        <label for="email" class="field-icon">
                                            <i class="fa fa-envelope"></i>
                                        </label>
                                    </label>
                                    <em for="" class="state-error">
                                            <?= $validation->hasError('email') ? $validation->getError('email'):"" ?>
                                        </em> 
                                </div>

                                <!-- -------------- /section -------------- -->


                                <div class="section">
                                    <label for="password" class="field prepend-icon <?= $validation->hasError('password') ? "state-error":"" ?>">
                                        <input type="text" name="password" id="password" class="gui-input" placeholder="Create a password">
                                        <label for="password" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                    <em for="" class="state-error">
                                            <?= $validation->hasError('password') ? $validation->getError('password'):"" ?>
                                        </em> 
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <label for="confirmPassword" class="field prepend-icon <?= $validation->hasError('confirmPassword') ? "state-error":"" ?>">
                                        <input type="text" name="confirmPassword" id="confirmPassword" class="gui-input" placeholder="Retype your password">
                                        <label for="confirmPassword" class="field-icon">
                                            <i class="fa fa-unlock-alt"></i>
                                        </label>
                                    </label>
                                    <em for="" class="state-error">
                                            <?= $validation->hasError('confirmPassword') ? $validation->getError('confirmPassword'):"" ?>
                                        </em> 
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <div class="pull-left mt10">
                                        <div class="checkbox-custom checkbox-primary mb5">
                                            <input type="checkbox"  name="agree" id="agree">
                                            <label for="agree">I agree to the
                                                <a href="#"> terms of use. </a></label>
                                        </div>
                                        <em for="" class="state-error text-danger">
                                            <?= $validation->hasError('agree') ? $validation->getError('agree'):"" ?>
                                        </em> 
                                    </div>
                                    <div class="pull-right">
                                        <input type="submit" class="btn btn-bordered btn-primary" value="I Accept - Create Account" name="registerSubmit">
                                        
                                    </div>
                                </div>
                                <!-- -------------- /section -------------- -->

                            </div>
                            <!-- -------------- /Form -------------- -->
                            <div class="panel-footer">

                            </div>
                            <!-- -------------- /Panel Footer -------------- -->
                        <?= form_close() ?>
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