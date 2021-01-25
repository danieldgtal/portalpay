<?php

error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Apply | Connak Foundation ICT Portal</title>
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
	 <script type="text/javascript">
        function validate()
        {
            $('#signup input[type="text"]').each(function() {
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
                                        alert("Check the format . . .");
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
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex auth-brand" href="#">
                    <img class="brand-img" src="dist/img/logo-dark.png" alt="brand" />
                </a>
                <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-outline-secondary">Help</a>
                    <a href="#" class="btn btn-outline-secondary">About Us</a>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div class="auth-cover-img overlay-wrap" style="background-image:url(dist/img/bg1.jpg);">
                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content w-xxl-75 w-sm-90 w-100">
                                    <h1 class="display-3 text-white mb-20">Enjoy unlimited beautiful display content area</h1>
                                    <p class="text-white">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.</p>
                                    <div class="play-wrap">
                                        <a class="play-btn" href="#"></a>
                                        <span>How it works ?</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                               <form id="signup" action="signupconfirm.php" method="post">
							   <div id="dvlogin" style="box-shadow: 0px 5px 10px #999999">
													<?php
														
													?>
											</div>
                                    <h1 class="display-4 mb-10">Enroll for free</h1>
                                    <p class="mb-30">Create your account and start your application today</p>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="Name *" id="in_name" name="in_name" VT="NM" required="true" type="text">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="Date of Birth *" id="in_dob" name="in_dob"  required="true" type="text">
											 <script type="text/javascript">
                            $(function() {
                            $("#in_dob").datepicker({ dateFormat: 'yy-mm-dd', yearRange:'-25:+0', changeYear:true, changeMonth:true});
                        });
                         </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Valid Email" type="email" id="in_eml" name="in_eml" VT="EML" required="true">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Enter your mobile number" type="number" id="in_mob" name="in_mob" VT="PH" required="true" maxlength="11">
                                    </div>
                                    <div class="form-group">
									<img src="captcha.php" style="height: 5.8em;height: 2.0em;margin-left:1px;" />
                                        <div class="input-group">
										<input class="form-control" placeholder="Enter the code above" type='text' id='txt_captcha' name='txt_captcha' required="true">
                                      
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">I have read and agree to the <a href=""><u>term and conditions</u></a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit" id="in_sub" name="in_sub" onclick="validate();">Register</button>
                                    <div class="option-sep">or</div>
                                    <div class="form-row">
                                        <div class="col-sm-6 mb-20">
                                            <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>
                                        </div>
                                        <div class="col-sm-6 mb-20">
                                            <button class="btn btn-sky btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button>
                                        </div>
                                    </div>
                                    <p class="text-center">Already have an account? <a href="./">Sign In</a></p>
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