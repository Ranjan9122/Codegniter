<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Gentallela Alela! | </title>

  <!-- Bootstrap core CSS -->
  <?= link_tag("Assets/css/bootstrap.min.css"); ?>


  <?= link_tag("Assets/fonts/css/font-awesome.min.css"); ?>
 
  <?= link_tag("Assets/css/animate.min.css"); ?>
  <!-- Custom styling plus plugins -->

  <?= link_tag("Assets/css/custom.css"); ?>
  <?= link_tag("Assets/css/icheck/flat/green.css"); ?>
 
  <?= link_tag("Assets/js/jquery.min.js"); ?>
  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toforget"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <?php echo form_open('Admin/admin_login'); ?>
            <h1>Login Form</h1>

            <div>
              <?php echo form_input(['name'=>'email','type'=>'email','class'=>'form-control','placeholder'=>'Email','required'=>'']); ?>
            </div>

            <div>
              <?php echo form_input(['name'=>'password','type'=>'password','class'=>'form-control','placeholder'=>'Password','required'=>'']); ?>
            </div>
            <div>
              <?php echo form_submit(['class'=>'btn btn-default submit','value'=>'Log in']); ?>
           <a href="#toforget" class="to_register"> Forget Password ? </a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                <p>©2015 All Rights Reserved. Gentelella Alela! </p>
              </div>
            </div>
          <?php echo form_close(); ?>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      <div id="forget" class="animate form">
        <section class="login_content">
         <?php echo form_open(); ?>
            <h1>Forget Password</h1>
           
            <div>
               <?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Email','required'=>'']); ?>
            </div>
            <div>
             <?php echo form_submit(['class'=>'btn btn-default submit','value'=>'Submit']); ?>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Already a member ?
                <a href="#tologin" class="to_register"> Log in </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                <p>©2015 All Rights Reserved. Gentelella Alela! </p>
              </div>
            </div>
         <?php echo form_close(); ?>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>
