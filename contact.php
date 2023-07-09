<?php
$error='';
// Form Sending to Mail 
    if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$messages=$_POST['message'];
	

		$to='jyothisafetynets404@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Contact Form Submission';
		$message="Name :".$name."\n"."Email :".$email."\n"."Message :".$messages;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
		
          $error="Sent Successfully!We will contact you shortly!";
         
		}
		else{
			$error="Something went wrong!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en-US">


<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>Contact</title>
   <!-- Fav Icon -->
   <!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
   <!-- Fav Icon -->
   <!-- Google Fonts -->
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
   <!-- Google Fonts -->
   <!-- Style -->
   <link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/owl.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/swiper.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/jquery.fancybox.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/icomoon.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/scss/elements/theme-css.css' type='text/css' media='all' />
   <link rel='stylesheet' id="creote-color-switcher-css" href='assets/css/scss/elements/color-switcher/color.css' type='text/css' media='all' />
   <!-- Style-->
   <!----woocommerce---->
   <link rel='stylesheet' href='assets/css/woocommerce-layout.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/woocommerce.css' type='text/css' media='all' />
   <!----woocommerce---->
</head>
<body class="theme-creote left-sidebar">
   <div id="page" class="page_wapper hfeed site">

      <!---============== wrapper_full =================-->
      <div id="wrapper_full" class="content_all_warpper">

         <!----preloader----->
         <div class="preloader-wrap">
            <div class="preloader" style="background-image:url(assets/images/preloader.gif)">
            </div>
            <div class="overlay"></div>
         </div>
         <!----preloader----->
         <div class="preloader-wrap">
            <div class="preloader" style="background-image:url(assets/images/preloader.gif)">
            </div>
            <div class="overlay"></div>
         </div>
         <!----preloader----->
         <!----header----->
          <?php
    include('header.php');
    ?>
         <!----header end----->
         <div class="page_header_default style_one ">
            <div class="parallax_cover">
               <div class="simpleParallax"><img src="assets/images/net.jpg" alt="bg_image"
                     class="cover-parallax"></div>
            </div>
            <div class="page_header_content">
               <div class="auto-container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="banner_title_inner">
                           <div class="title_page">
                              Contact
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                           <ul class="breadcrumb m-auto">
                              <li><a href="index.php">Home</a></li>
                              <li class="active">Contact</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!----header----->
         <!----page-CONTENT----->
         <?php if($error!=''){?>
      <div class="container">
         <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php  echo "$error";  ?>
         </div>
      </div>
    <?php } ?>
         <div id="content" class="site-content ">

            <section class="contact-section">
               <!--===============spacing==============-->
               <div class="pd_top_90"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                        <div class="contact_form_box_all type_one">
                           <div class="contact_form_box_inner">
                              <div class="contact_form_shortcode">
                                 <form id="Enquire" method="POST" action="https://themepanthers.com/html/creote-html/contact.php" role="form">

                                    <div class="messages"></div>

                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Your Name<br /></label>
                                                    <input type="text" name="name" placeholder="Your Name *" required="required" data-error="Enter Your Name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Your Email<br /></label>
                                                    <input type="text" name="email" required="required" placeholder="Email *" data-error="Enter Your Email Id">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Your Subject<br /></label>
                                                    <input type="text" name="subject" required="required" placeholder=" Subject  (Optional)">
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <label> Your Message<br /></label>
                                                    <textarea name="message" placeholder="Additional Information... (Optional) " rows="3" required="required" data-error="Please, leave us a message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12">
                                                <div class="form-group mg_top apbtn">
                                                    <button class="theme_btn" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                    
                      

                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 pd_left_30">
                        <div class="title_all_box style_one dark_color">
                           <div class="title_sections left">
                              <div class="before_title">Contact Info to</div>
                              <h2>Reach Our Expert Team</h2>
                              <p>Send a message through given form, If your enquiry is time sensitive please use below
                                 contact details.</p>
                           </div>
                        </div>

                        <div class="contact_box_content style_one">
                           <div class="contact_box_inner icon_yes">
                              <div class="icon_bx">
                                 <span class=" icon-placeholder"></span>
                              </div>
                              <div class="contnet">
                                 <h3>Address </h3>
                                 <p>
                                    <a href="https://goo.gl/maps/KbkFh5w3iUS5eVcL6" target="_blank">Plot No-95&amp;96,second FL Sri ram nagar colony,roadSaroor nagar,Hyderabad-500035</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                        <div class="contact_box_content style_one">
                           <div class="contact_box_inner icon_yes">
                              <div class="icon_bx">
                                 <span class="icon-phone-call"></span>
                              </div>
                              <div class="contnet">
                                 <h3> General Enquires </h3>
                                 <p>
                                    Phone: <a href="tel:+917013570133">+917013570133</a> &amp;<br/> Email: <a href="mailto:jyothisafetynets404@gmail.com">jyothisafetynets404@gmail.com</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_15"></div>
                        <!--===============spacing==============-->
                        <div class="contact_box_content style_one">
                           <div class="contact_box_inner icon_yes">
                              <div class="icon_bx">
                                 <span class="fa fa-clock-o"></span>
                              </div>
                              <div class="contnet">
                                 <h3> Operation Hours </h3>
                                 <p>
                                    Monday-Saturday: 09.00AM to 07.00PM (Sunday: Closed)
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_40"></div>
                        <!--===============spacing==============-->
                        <div class="social_media_v_one style_two">
                           <ul>
                              <li>
                                 <a href="#"> <span class="fa fa-facebook"></span>
                                    <small>facebook</small>
                                 </a>
                              </li>
                              <li>
                                 <a href="#"> <span class="fa fa-twitter"></span>
                                    <small>twitter</small>
                                 </a>
                              </li>
                              <li>
                                 <a href="#"> <span class="fa fa-skype"></span>
                                    <small>skype</small>
                                 </a>
                              </li>
                              <li>
                                 <a href="#"> <span class="fa fa-instagram"></span>
                                    <small>instagram</small>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_70"></div>
               <!--===============spacing==============-->
            </section>
            <section class="contact-map-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <section class="map-section">
                           <!--Map Outer-->
                           <div class="map-outer">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.3691904000602!2d78.52835665!3d17.345959099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb98844c7ef931%3A0x1deba60ac6090606!2sSriram%20Nagar%20Colony%2C%20Sai%20Nagar%2C%20Saroor%20Nagar%20East%2C%20Saroornagar%2C%20Telangana%20500035!5e0!3m2!1sen!2sin!4v1688875007663!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                      </section>
                        
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_90"></div>
               <!--===============spacing==============-->
            </section>
         </div>
      </div>
     <!---==============footer start =================-->
  <?php
    include('footer.php');
    ?>
<!-- Back to top with progress indicator-->
<div class="prgoress_indicator">
   <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
   </svg>
</div>
<div class="sticky1-container1">
    <ul class="sticky1">
      <li>
         <a href="tel:7013570133" target="_blank"> <img src="./assets/images/phone.png" width="42" height="42">
         </a>
      </li>
      <li>
         <a href="https://api.whatsapp.com/send?phone=+919182399109&amp;text=Can you let us know the pricing of your safety nets" target="_blank"> <img src="./assets/images/Whatsapp.png" width="42" height="42">
        </a>
      </li>
      <li>
         <a href="mailto:jyothisafetynets404@gmail.com" target="_blank"><img src="./assets/images/mail-icon.png" width="42" height="42">
        </a>
      </li>
     </ul>
   </div>
   <!---========================== javascript ==========================-->
   <script type='text/javascript' src='assets/js/jquery-3.6.0.min.js'></script>
   <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
   <script type='text/javascript' src='assets/js/jquery.fancybox.js'></script>
   <script type='text/javascript' src='assets/js/jQuery.style.switcher.min.js'></script>
   <script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script>
   <script type='text/javascript' src='assets/js/color-scheme.js'></script>
   <script type='text/javascript' src='assets/js/owl.js'></script>
   <script type='text/javascript' src='assets/js/swiper.min.js'></script>
   <script type='text/javascript' src='assets/js/isotope.min.js'></script>
   <script type='text/javascript' src='assets/js/countdown.js'></script>
   <script type='text/javascript' src='assets/js/simpleParallax.min.js'></script>
   <script type='text/javascript' src='assets/js/appear.js'></script>
   <script type='text/javascript' src='assets/js/jquery.countTo.js'></script>
   <script type='text/javascript' src='assets/js/sharer.js'></script>
   <script type='text/javascript' src='include/validator.min.js'></script>
   <script type='text/javascript' src='include/contact.js'></script>
   <!-- map script -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
   <script src="assets/js/gmaps.js"></script>
   <script src="assets/js/map-helper.js"></script>
   <!-- main-js -->
   <script type='text/javascript' src='assets/js/creote-extension.js'></script>
   <!---========================== javascript ==========================-->
      <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64a8f426cc26a871b0271429/1h4pvjdqs';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>


</html>