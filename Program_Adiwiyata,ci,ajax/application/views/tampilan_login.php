<!-- <?php
echo form_open('login/getlogin');
 ?> -->
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Login Adiwiyata</title>
     <style type="text/css">
	.kotak{
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
	}
	</style>
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />

     <!-- Animation library for notifications   -->
     <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet"/>

     <!--  Light Bootstrap Table core CSS    -->
     <link href="<?php echo base_url(); ?>/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


     <!--  CSS for Demo Purpose, don't include it in your project     -->
     <link href="<?php echo base_url(); ?>/assets/css/demo.css" rel="stylesheet" />


     <!--     Fonts and icons     -->
     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
     <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
     <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

     <script type="text/javascript">
        function cekform(){
          if (!$("#username").val()) {
            alert('maaf username tidak boleh kosong');
            $("#username").focus();
            return false;
          }
          if (!$("#password").val()) {
            alert('maaf pasword tidak boleh kosong');
            $("#password").focus();
            return false;
          }
        }
     </script>
     </head>
   <body>
     <div class="container">
				<div class="panel panel-default">
				<div class="col-md-4 col-md-offset-4 kotak">
					<center><h3>Silakan Login</h3></center>
          <?php
            $info = $this->session->flashdata('info');
            if (!empty($info)) {
              echo $info;
            }
           ?>
          <form method="post" action="<?php echo base_url(); ?>login/getlogin" onsubmit="return cekform();">
					<div class="input-group">
						<span class="input-group-addon"><span class="pe-7s-users"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="username" id="username">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="pe-7s-door-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="password" id="password">
					</div>
          <div class="input-group">
						<input type="submit" class="btn btn-primary" value="Login" name="submit">
					</div>

         </div>
       </div>
       </div>
     </form>
     <!--   Core JS Files   -->
      <script src="<?php echo base_url(); ?>/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

    	<!--  Charts Plugin -->
    	<script src="<?php echo base_url(); ?>/assets/js/chartist.min.js"></script>

        <!--  Notifications Plugin    -->
        <script src="<?php echo base_url(); ?>/assets/js/bootstrap-notify.js"></script>

        <!--  Google Maps Plugin    -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

        <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    	<script src="<?php echo base_url(); ?>/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    	<script src="<?php echo base_url(); ?>/assets/js/demo.js"></script>

   </body>
 </html>
