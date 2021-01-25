<?php
    session_start();
    error_reporting(0);

    
    
    $detid=$_REQUEST["detid"];
    $uphn1 =$_REQUEST["uphn1"];
    $uphn2 =$_REQUEST["uphn2"];
    
    $ufname =$_REQUEST["ufname"];
    $ufocc=$_REQUEST["ufocc"];
    $ufphn=$_REQUEST["ufphn"];
    
    $umname=$_REQUEST["umname"];
    $umocc=$_REQUEST["umocc"];
    $umphn=$_REQUEST["umphn"];
    
    $inc=$_REQUEST["inc"];
    $gen=$_REQUEST["gen"];
    
    $cadr=$_REQUEST["cadr"];
    $cast=$_REQUEST["cast"];
    $capin=$_REQUEST["capin"];
    $camob=$_REQUEST["camob"];
    
    $padr=$_REQUEST["padr"];
    $past=$_REQUEST["past"];
    $papin=$_REQUEST["papin"];
    $pamob=$_REQUEST["pamob"];
    
    $rur=$_REQUEST["rur"];
    $natn=$_REQUEST["natn"];
    $relg=$_REQUEST["relg"];
    $cat=$_REQUEST["cat"];
    $oaco=$_REQUEST["oaco"];
    $oarank=$_REQUEST["oarank"];
    $oaroll=$_REQUEST["oaroll"];
    $oabrn=$_REQUEST["oabrn"];
    $brnc=$_REQUEST["brnc"];
    $col=$_REQUEST["col"];
    $cen=$_REQUEST["cen"];
    $crsty=$_REQUEST["crsty"];
    $pcm=$_REQUEST["pcm"];
    
    $nob1=$_REQUEST["nob1"];
    $yop1=$_REQUEST["yop1"];
    $tm1=$_REQUEST["tm1"];
    $mo1 =$_REQUEST["mo1"];
    $divs1=$_REQUEST["divs1"];
    $pom1  =$_REQUEST["pom1"];
    
    $nob2  =$_REQUEST["nob2"];
    $yop2=$_REQUEST["yop2"];
    $tm2=$_REQUEST["tm2"];
    $mo2  =$_REQUEST["mo2"];
    $divs2  =$_REQUEST["divs2"];
    $pom2  =$_REQUEST["pom2"];
   
    
    $moi  = $_REQUEST["moi"];
    $pay= $_REQUEST["pay"];
    
    $con=mysqli_connect("localhost","root","","portal2021");
    
    
    if(!isset($con))
    {
        die("Database Not Found");
    }
    
    
    if(isset($_REQUEST["frmnext"]))
    {
        if($detid== "")
        $detid = DetCode();
        $sql  = "insert into t_user values(";
        $sql .= "'" . $detid . "',";
        $sql .= "'" . $_SESSION['user'] ."',";
        $sql .= "'" . $uphn1 . "',";
        $sql .= "'" . $uphn2 . "',";
        $sql .= "'" . $ufname . "',";
        $sql .= "'" . $ufocc . "',";
        $sql .= "'" . $ufphn . "',";
        $sql .= "'" . $umname . "',";
        $sql .= "'" . $umocc . "',";
        $sql .= "'" . $umphn . "',";
        $sql .= "'" . $inc . "',";
        $sql .= "'" . $gen . "',";
        $sql .= "'" . $cadr . "',";
        $sql .= "'" . $cast . "',";
        $sql .= "'" . $capin . "',";
        $sql .= "'" . $camob . "',";
        $sql .= "'" . $padr . "',";
        $sql .= "'" . $past . "',";
        $sql .= "'" . $papin . "',";
        $sql .= "'" . $pamob . "',";
        $sql .= "'" . $rur . "',";
        $sql .= "'" . $natn . "',";
        $sql .= "'" . $relg . "',";
        $sql .= "'" . $cat . "',";
        $sql .= "'" . $oaco . "',";
        $sql .= "'" . $oarank . "',";
        $sql .= "'" . $oaroll . "',";
        $sql .= "'" . $oabrn . "',";
        $sql .= "'" . $brnc . "',";
        $sql .= "'" . $col . "',";
        $sql .= "'" . $cen . "',";
        $sql .= "'" . $crsty . "',";
        $sql .= "'" . $pcm . "',";
        $sql .= "'" . $nob1 . "',";
        $sql .= "'" . $yop1 . "',";
        $sql .= "'" . $tm1 . "',";
        $sql .= "'" . $mo1 . "',";
        $sql .= "'" . $divs1 . "',";
        $sql .= "'" . $pom1 . "',";
        $sql .= "'" . $nob2 . "',";
        $sql .= "'" . $yop2 . "',";
        $sql .= "'" . $tm2 . "',";
        $sql .= "'" . $mo2 . "',";
        $sql .= "'" . $divs2 . "',";
        $sql .= "'" . $pom2 . "',";
        $sql .= "'" . $moi . "',";
        $sql .= "'" . $pay . "')";

      
        mysqli_query($con, $sql);
        
        $sql1  = "insert into t_status values(";
        $sql1 .= "'" . $_SESSION['user'] ."',";
        $sql1 .= "'Applied')";
        
         mysqli_query($con, $sql1);
         
        header('location:documents.php');
        echo "<script type='text/javascript'>alert('Details Uploaded !!');</script>";
        
        
    }
    
    
    function DetCode()
{
      $con = mysqli_connect("localhost", "root", "", "portal2021");
      $rs  = mysqli_query($con,"select CONCAT('DE',LPAD(RIGHT(ifnull(max(s_detid),'DE00000000'),8) + 1,8,'0')) from t_user");
      return mysqli_fetch_array($rs)[0];
}

$q=mysqli_query($con,"select s_name from t_user_data where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];


 if (!isset($_SESSION['user']))
{
        echo "<br><h2>You are not Logged On Please Login to Access this Page</div></h2>";
        echo "<a href=index.php><h3 align=center>Click Here to Login</h3></a>";
        exit();
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Admission | Connak Foundation ICT Portal</title>
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

    <!-- select2 CSS -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker CSS -->
    <link href="vendors/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
	 <script type="text/javascript">
        function validate()
        {
            $('#adform input[type="text"]').each(function() {
                if(this.required)
                {
                    if(this.value=="")
                        $(this).addClass("inpterr");
                    else
                        $(this).addClass("inpterrc");
                }
              
                if($(this).attr("VT")=="NM")
                {
                    if((!isAlpha(this.value)) && this.value!="")
                    {
                       alert("Only Aplhabets Are Allowed . . .");
                       $(this).focus();
                    }
                }

                        if($(this).attr("VT")=="PH")
                        {
                                if((!isPhone(this.value)) && this.value!="")
                                {
                                        alert("Check the phone number format . . .");
                                        $(this).focus();
                                }
                        }

                        if($(this).attr("VT")=="EML")
                        {
                                if(!IsEmail($(this).val()) && this.value!="")
                                {
                                        alert("Invalid Email . . . .");
                                        $(this).focus();
                                }
                        }	

                        if($(this).attr("VT")=="PIN")
                        {
                                if((!IsPin(this.value)) && this.value!="")
                                {
                                        alert("Invalid Pin Code . . . .");
                                        $(this).focus();
                                }
                        }

            });
        }
        
                function isAlpha(x)
                {
                    var re = new RegExp(/^[a-zA-Z\s]+$/);
                    return re.test(x);
                }
        
		function isPhone(x)
		{
			
			var ph = new RegExp (/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/);  
			//if(!ph.length<10)
			return ph.test(x);
		}
                
                
		
		function IsEmail(x) 
		{
  			var em = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
  			return em.test(x);
		}
		
		function IsPin(x) 
		{
  			var pin = new RegExp (/^\d{6}$/);
			
  			return pin.test(x);
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
	<div class="hk-wrapper hk-alt-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
            <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="dashboard1.html">
                <img class="brand-img d-inline-block align-top" src="dist/img/logo-light.png" alt="brand" />
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapseAlt">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./logout" >Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /Top Navbar -->

        

        

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Admission Form</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container-fluid">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Admission Form</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Welcome, <?php echo $stname;?></h5>
                            <p class="mb-25" style="color:red;">Please fill all fields correctly with your valid details. All details will be thoroughly verified.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <form id="adform" action="admsnform.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Choose your Centre <text style="color:red;">*</text></label>
                                                <select class="form-control custom-select d-block w-100" id="country">
                                                    <option value="">Choose...</option>
                                                    <option>Aba, Abia State</option>
                                                    <option>Umuahia, Abia State</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="lastName">Full name (As in your documents) <text style="color:red;">*</text></label>
                                                <input class="form-control" id="lastName" placeholder="" value="" type="text">
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Age <text style="color:red;">*</text></label>
                                                <select class="form-control custom-select d-block w-100" id="country">
                                                    <option value="">Choose...</option>
                                                    <option>Aba, Abia State</option>
                                                    <option>Umuahia, Abia State</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Sex <text style="color:red;">*</text></label>
                                                <select class="form-control custom-select d-block w-100" id="country">
                                                    <option value="">Choose...</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Address</label>
                                            <div class="input-group">
                                                <input class="form-control" id="username" placeholder="Username" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">State of Origin <text style="color:red;">*</text></label>
                                                <select
                  onchange="toggleLGA(this);"
                  name="state"
                  id="state"
                  class="form-control"
                >
                  <option value="" selected="selected">- Select -</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamafara</option>
                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Local Government <text style="color:red;">*</text></label>
                                                 <select name="lga" id="lga" class="form-control select-lga" required > </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Highest Level of Qualification <text style="color:red;">*</text></label>
                                                <select class="form-control custom-select d-block w-100" id="country">
                                                    <option value="">Choose...</option>
                                                    <option>Primary School Leaving Certificate</option>
                                                    <option>West African Secondary School Certificate Examination (WASCE)</option>
                                                    <option>National Examination Council (NECO)</option>
                                                    <option>Ordinary National Diploma (OND)</option>
                                                    <option>Higher National Diploma (HND)</option>
                                                    <option>Bachelor's degree</option>
                                                    <option>Post Graduate Diploma (PGD)</option>
                                                    <option>Masters</option>
                                                    <option>Doctor of Philosophy (PH.D)</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Occupation <text style="color:red;">*</text></label>
                                                <input class="form-control" id="lastName" placeholder="" value="" type="text">
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Referee's Full Name <text style="color:red;">*</text></label>
                                                   <input class="form-control" id="lastName" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Referee's Phone No <text style="color:red;">*</text></label>
                                                  <input class="form-control" id="lastName" placeholder="" value="" type="text">
                                            </div>
                                        </div>
										
										<div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Are you Computer Literate ?<text style="color:red;">*</text></label>
                                                  <select class="form-control custom-select d-block w-100" id="country">
                                                    <option value="">Choose...</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
											<div class="col-md-6 form-group">
                                                <label for="firstName">Why do you want this training ? <text style="color:red;">*</text></label>
                                                  <input class="form-control" id="lastName" placeholder="" value="" type="text">
                                            </div>
                                        </div>
										
                                      <div class="row">
                                            <div class="col-md-4 mb-10">
                                                <label for="country">Why should we consider shortlisting you for this training ?<text style="color:red;">*</text></label>
                                               <input class="form-control" id="lastName" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-4 mb-10">
                                                <label for="state">What are you interested in ? <text style="color:red;">*</text></label>
                                                <select class="form-control custom-select d-block w-100" id="state">
                                                    <option value="">Choose...</option>
                                                    <option>Programming (Web Development, App Development)</option>
                                                    <option>Computer Engineering- CompTIA A+ (Repairs & Maintenance, Networking (N+), CCTV Installation, Operations and maintenance)</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-10">
                                                <label for="zip">Why did you choose that choice of profession ? <text style="color:red;">*</text></label>
                                                <input class="form-control" id="zip" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="save-info" type="checkbox">
                                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                        </div>
                                        <hr>
										
                                        <div class="form-group">
                                            <label for="username">Are you IT driven YES/NO. If Yes, what is your driving force ? <text style="color:red;">*</text></label>
                                            <div class="input-group">
                                                <input class="form-control" id="username" placeholder="What is yout driving force" type="text">
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <label for="username">Where do you see yourself with the skill you will be impacted with in the next 5 years? <text style="color:red;">*</text></label>
                                            <div class="input-group">
                                                <input class="form-control" id="username" placeholder="" type="text">
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <label for="username">If you are finally selected as one of our trainees what will be your choice of Profession in the future? <text style="color:red;">*</text></label>
                                            <div class="input-group">
                                                <input class="form-control" id="username" placeholder="" type="text">
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <label for="username">Why did you choose that Profession ? <text style="color:red;">*</text></label>
                                            <div class="input-group">
                                                <input class="form-control" id="username" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit" onclick="validate();" id="frmnext" name="frmnext">Next</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                       
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container-fluid">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
   <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Jasny-bootstrap  JavaScript -->
    <script src="vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Ion JavaScript -->
    <script src="vendors/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="dist/js/rangeslider-data.js"></script>

    <!-- Select2 JavaScript -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="dist/js/select2-data.js"></script>

    <!-- Bootstrap Tagsinput JavaScript -->
    <script src="vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

    <!-- Daterangepicker JavaScript -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/daterangepicker/daterangepicker.js"></script>
    <script src="dist/js/daterangepicker-data.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
	
	<!-- States JavaScript -->
    <script src="dist/js/lga.min.js"></script>
</body>

</html>