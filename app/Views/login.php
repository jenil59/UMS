
<?php
// var_dump(session()->get('role'));
$validation = \Config\Services::validation();


?>

<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

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

    <style>
         .field-icon{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #SuccessLoginMsg{
            position: absolute;
            right: 10px;
            top: 10px;
            width: 40%;
            z-index: 1;
            
        }
        
        #ErrorLoginMsg{
            position: absolute;
            right: 10px;
            top: 10px;
            width: 40%;
            z-index: 1;
        }

        .teacher_login{
        filter: hue-rotate(270deg);    
        }
        .admin_login{
            filter: hue-rotate(45deg);    

        }

    </style>
</head>

<body class="utility-page sb-l-c sb-r-c">



<!-- -------------- Body Wrap  -------------- -->
<div id="main" class="animated fadeIn  <?= $role ?>">
    <?php if(session()->getFlashdata('status')==1) {?>
        <div id="SuccessLoginMsg" class="alert alert-sm alert-primary bg-gradient dark alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="fa fa-cubes pr10 hidden"></i>
            Claritas est etiam processus dynamicus and chive on.
        </div>
    <?php }
     elseif(session()->getFlashdata('faildStatus')==1)
     {
        ?>
        <div class="alert alert-danger light alert-dismissable" id="ErrorLoginMsg" style="display: block;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Invalid Username Or Password ! Try again 
        </div>
       <script>
          $('#ErrorLoginMsg').fadeToggle();
       </script>
        <?php
     }
     ?>
    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">

        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- -------------- Content -------------- -->
        <section id="content">

            <!-- -------------- Login Form -------------- -->
            <div class="allcp-form theme-primary mw320" id="login">
                <div class="text-center mb20"><img src="assets/img/logo_login_form.png" class="img-responsive"
                                                   alt="Logo"/></div>
                <div class="panel mw320">
                <?= form_open("/{$role}","id='form-login'") ?>

                    <!-- <form method="post" action="/login" id="form-login"> -->
                        <div class="panel-body pn mv10">

                            <div class="section">
                                <label for="username" class="field prepend-icon <?= $validation->hasError('username') ? "state-error":"" ?>">
                                    <input type="text" name="username" id="username" class="gui-input"
                                           placeholder="Email">
                                    <label for="username" class="field-icon">
                                        <i class="fa fa-envelope"></i>
                                    </label>
                                </label>
                                <em for="" class="state-error">
                                    <?=  $validation->hasError('username') ? $validation->getError('username'):"" ?>
                                </em> 
                            </div>
                            <!-- -------------- /section -------------- -->

                            <div class="section">
                                <label for="password" class="field prepend-icon <?= $validation->hasError('password') ? "state-error":"" ?>">
                                    <input type="text" name="password" id="password" class="gui-input"
                                           placeholder="Password">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    
                                </label>
                                <em for="" class="state-error">
                                    <?=  $validation->hasError('password') ? $validation->getError('password'):"" ?>
                                </em> 
                            </div>
                            <!-- -------------- /section -------------- -->

                            <div class="section">
                                <div class="pull-left pt5">
                                    <div class="radio-custom radio-primary mb5 lh25">
                                        <input type="radio" id="remember" name="remember">
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-bordered btn-primary pull-right" name="loginSubmit" value="Log in">
                            </div>
                            <!-- -------------- /section -------------- --> 

                        </div>
                        <!-- -------------- /Form -------------- -->
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

<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery -------------- -->
<script src="assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- -------------- CanvasBG JS -------------- -->
<script src="assets/js/plugins/canvasbg/canvasbg.js"></script>

<!-- -------------- Theme Scripts -------------- -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>

<!-- -------------- Page JS -------------- -->
<script type="text/javascript">
    jQuery(document).ready(function () {

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
</script>

<!-- -------------- /Scripts -------------- -->

</body>

</html>
