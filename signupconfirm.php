<?php
error_reporting(0);
if(isset($_REQUEST["u_sub"]))
header('location:index.php');

?>


<?php

extract($_POST);
$stid=$_REQUEST["stid"];
$stpw=$_REQUEST["stpw"];
$name=$_REQUEST["in_name"];
$dob=$_REQUEST["in_dob"];
$eml=$_REQUEST["in_eml"];
$mob=$_REQUEST["in_mob"];

$con=mysqli_connect("localhost","root","","portal2021");
if(!isset($con))
{
    die("Database Not Found");
}
            $rs1=mysqli_query($con,"select * from t_user_data where s_email='$eml'");
if (mysqli_num_rows($rs1)>0)
{
	echo '
    <font style="color:red; margin-center:520px; font-family: Poppins; width:100%; font-size:30px;">
                                        <h5>Email Already Exists</h5></font>
                            ';
	exit;
}
if(isset($_REQUEST["in_sub"]))
{
    if($stid == "")
    $stid = StudentCode();
    if($stpw == "")
    $stpw = StudentPsw();
    
    $sql  = "insert into t_user_data values(";
    $sql .= "'" . $stid . "',";
    $sql .= "'" . $stpw . "',";
    $sql .= "'" . $dob . "',";
    $sql .= "'" . $name . "',";
    $sql .= "'" . $eml . "',";
    $sql .= "'" . $mob . "',";
    $sql .= "sysdate())";
    
    
        mysqli_query($con, $sql);
    

 
//     header('location:signupconfirm.php');
     
     
      
}
  function StudentCode()
  {
      $con = mysqli_connect("localhost", "root", "", "oas");
      $rs  = mysqli_query($con,"select CONCAT('CUTM',LPAD(RIGHT(ifnull(max(s_id),'CUTM00000'),5) + 1,5,'0')) from t_user_data");
      return mysqli_fetch_array($rs)[0];
  }
  
  function StudentPsw()
  {
      $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
      $pass = array();
      $alphaLength = strlen($alphabet) - 1;
      for($i=0;$i<8;$i++)
      {
          $n=rand(0,$alphaLength);
          $pass[]=$alphabet[$n];
      }
      return implode($pass);
  }


  
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>ConfirmApplication | Connak Foundation ICT Portal</title>
    <meta name="description" content="CONNAK Foundation is a private not-for-profit organization
established in 2012 with a vision to tackle youth unemployment, that
has resulted in social malice and redundancy, by creating
opportunities for economic empowerment and growth in the eastern
part of Nigeria."/>
		<meta name="keywords" content="NGO, Connak, Foundation, Connak Foundation, Abia, Charity, Scholarship, Healthcare, Technology, Education, Programming, Job Creation, Vocational Training"/>
		<meta name="theme-color" content="#3a55b1" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
	<script>
    function valid(inputtxt)  
    {  
      var phoneno = /^\d{10}$/;  
      if(inputtxt.value.match(phoneno))  
      {  
          return true;  
      }  
      else  
      {  
         alert("Your Phone Number is not Valid!");  
         return false;  
      }  
      }  
  </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
    
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-end align-items-center">
                <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-outline-secondary">Help</a>
                    <a href="#" class="btn btn-outline-secondary">About Us</a>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-30 w-sm-50 w-100">
                                <a class="auth-brand text-center d-block mb-20" href="#">
                                    <img class="brand-img" src="dist/img/logo-light.png" alt="brand" />
                                </a>
                                 <form id="signupconfirm" action="signupconfirm.php" method="post">
								 <?php
                        
                    ?>
                                    <h6 class="display-5 mb-30 text-center">
									<?php  //require_once("mail-content.php");  ?>
									<?php echo "Your Application ID is $stid and Password is $stpw" ; ?><br>
                    Registration successful. Please check your email for a copy of your Login details.
									
									
									</h6>
                                    <button class="btn btn-primary btn-block mb-20" type="submit" id="u_sub" name="u_sub" value="Login">Login</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
</body>

</html>