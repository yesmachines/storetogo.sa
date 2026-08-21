<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_POST['subc'])) {
    header('Content-Type: application/json'); // important for AJAX
    $response = [];

    $userInput = trim($_POST['cpatchatxtbox']);
    $captcha = trim($_POST['captcha']);

    if ($userInput !== $captcha) {
        $response = ['status' => 'error', 'message' => 'Captcha validation failed. Please try again.'];
        echo json_encode($response);
        exit;
    }

    $name = trim($_POST['firstname']);
    $mail = trim($_POST['email']);
    $phone = trim($_POST['mobile']);
    $msg = trim($_POST['msg']);
    $subject = trim($_POST['subject']);

    // Validate form fields

    // $errors = [];

    // if (empty($_POST['name'])) {
    //     $errors['name'] = 'Name is required.';
    // }
    // if (empty($_POST['email'])) {
    //     $errors['email'] = 'Email is required.';
    // }
    // if (empty($name) || empty($mail) || empty($phone) || empty($msg) || empty($subject)) {
    //     $response = ['status' => 'error', 'message' => 'All fields are required.'];
    //     echo json_encode($response);
    //     exit;
    // }

    // if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    //     $response = ['status' => 'error', 'message' => 'Invalid email address.'];
    //     echo json_encode($response);
    //     exit;
    // }

    // if (!preg_match('/^[0-9]{7,15}$/', $phone)) {
    //     $response = ['status' => 'error', 'message' => 'Invalid phone number. Only digits allowed (7-15 digits).'];
    //     echo json_encode($response);
    //     exit;
    // }

    // Prepare the HTML message
    $message = '
    <div style="background:#e5e5e5; padding:2% 6%">
        <div style="padding:15px; background:#e7e7e7;text-align: center;  border-bottom:solid 5px #9dc33b">
            <div><img src="https://www.STORETOGO.ae/images/logo.png"  alt="StoreToGo Dubai UAE" /></div>
        </div>
        <div style="padding:15px 15px 35px 15px; background:white;text-align: center;">
            <h1>Enquiry from STORETOGO Website</h1>
            <div style="padding-bottom:5px; border-top:dashed 1px #e5e5e5; padding-top:20px;">
                <div>Name: <a style="color:#999">' . htmlspecialchars($name) . '</a></div>
                <div>Mail: <a style="color:#999">' . htmlspecialchars($mail) . '</a></div>
                <div>Phone: <a style="color:#999">' . htmlspecialchars($phone) . '</a></div>
                <div>Subject: <a style="color:#999">' . htmlspecialchars($subject) . '</a></div>
                <div>Message: <a style="color:#999">' . nl2br(htmlspecialchars($msg)) . '</a></div>
            </div>
        </div>
    </div>';

    $to = 'sales@storetogo.ae';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $mail\r\n";
    $headers .= "Reply-To: $mail\r\n";

    if (mail($to, 'Enquiry From STORETOGO Website', $message, $headers)) {
        $response = ['status' => 'success', 'message' => 'Mail Sent Successfully'];
    } else {
        $response = ['status' => 'error', 'message' => 'Mail sending failed.'];
    }

    echo json_encode($response);
    exit;
}
?>

 
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <!--***************************************-->
   <script src="js/bootstrap.min.js"></script>
   <!--***************************************-->


   <title>Contact Us | StoreToGoo Saudi Arabia – Get in Touch Today</title>
   <meta name="description" content="Reach out to StoreToGoo KSA for enquiries, support, or partnership. Fill out the contact form, call us or email our team – we’re ready to help.">
   <link rel="shortcut icon" href="images/favicon.png">
   <meta charset="utf-8">
   <meta name="keywords" content="Store To Go, Storetogo uae, Store togo dubai">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="canonical" href="" />


   <!--***************************************-->
   <!-- FONT -->

   <link href='https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
   <!--***************************************-->



   <!-- CSS  ***************************************-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/prod-style.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="css/testim.css">
   <link rel="stylesheet" href="css/contact.css">
   <!--***************************************-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<style>
.text-danger {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}

</style>

 </head>

 <body>


   <?php $page = 'contact';
    include 'header.php'; ?>

   <!-- EMAIL -->
   <?php $page = '';
    include 'express.php'; ?>
   <!-- EMAIL -->

   <section id="stroetogo-banner">
     <div class="slider">
       <div class="slide_viewer">
         <div class="slide_group">

           <div class="slide">
             <div class="slide__text fadeInDown animated">
               <h2>Contact Us</h2>
             </div>
             <img class="hiden" src="images/contact.jpg" alt="StoreToGo Dubai UAE">
             <img class="show" src="images/contact.jpg" alt="StoreToGo Dubai UAE">
           </div>





         </div>
       </div>
     </div><!-- End // .slider -->




     <div class="scroll"><a href="#thanks"><span></span></a></div>


     <div class="pattern pattern--lines"></div>
     <div class="sli__text"></div>
   </section>




   <section id="contact-content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
           <h3> Contact Us  </h3>
           <p> Ready to create a custom smart storage solution for your business needs? Then get in touch with StoreToGo
             today and upgrade your van to the next level. Our team of experts will design a storage solution that suits your van model,
              that too at competitive pricing. Whether it's a single installation or even a full van set up,
               we help you to make the most of your vehicle space.
              </p>

         </div>

<div class="col-md-12 up">
           <h4>StoreToGo Saudi Arabia</h4> 
           <p>Building No: 7446 - King Abdulaziz Rd <br>
              Madinat Al Ummal Dist. <br>
              Al Khobar 34441 <br>
              Kingdom of Saudi Arabia <br>
              Short Address: EKJC7446</p>
            <h5><span>TEL :</span> +966 55 422 2379 </h5> 
           <p>Mail : <a href="mailto:sales@storetogo.ae"><span>sales@storetogo.ae</span></a></p>


         </div>



       </div>
     </div>

   </section>



   <section id="contact-form">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
           <h2>Quick Enquiry</h2>
           <p>Brief us your requirements below, and let's connect</p>

         </div>
       </div>

        <form  method="post" id="contactForm">
              <div class="row">
                  <div class="col-md-6">
                      <input type="text"  id="fname" name="firstname" placeholder="Firstname.." required>
                     
                  </div>

                  <div class="col-md-6">
                      <input type="email" id="email" name="email" placeholder="E-mail.." required>
                  </div>

                  <div class="col-md-6">
                      <input type="text" id="mobile" name="mobile" placeholder="Mobile.." required>
                  </div>

                  <div class="col-md-6">
                      <input type="text" id="subject" name="subject" placeholder="Subject.." required>
                  </div>

                  <div class="col-md-12">
                      <textarea id="message" name="msg" placeholder="Message" style="height:200px" ></textarea>
                  </div>

                  <!-- Captcha here -->
                  <!-- Captcha Display -->
                  <div class="col-md-12 d-flex mb-3">
                    <div id="captcha_1" class="captcha-div"></div>
                    <a href="javascript:void(0);" onclick="refreshCaptcha(1);" class="ml-2" style="color:#999;" title="Refresh Captcha">
                    <i class="fa fa-refresh" aria-hidden="true" style="font-size: 19px; padding-top: 13px;"></i>
                    </a>
                  </div>
                  <!-- Captcha Input -->
                  <div class="col-md-12 d-flex mb-3">
                    <input type="text" class="form-control" placeholder="Captcha" name="cpatchatxtbox" id="cpatchaTextBox_1" required />
                    <div class="error_contact_msg" style="color: red;"></div>
                    <input type="hidden" name="captcha" id="captchaInput" />
                  </div>


                  <div class="col-md-12 mt-2">
                    <!-- <input type="submit" data-id="1" class="btn5" value="Send mail" name="subc"> -->
                    <input type="submit" value="Send mail" class="btn5" data-id="1" name="subc" />
                    <span id="spinner" style="display:none; margin-top:10px;margin-left:5px; transform: translateY(-50%);">
                      <i class="fa fa-spinner fa-spin fa-2x"></i>
                    </span>
                  </div>

              </div>
        </form>

     </div>
   </section>


 



   <?php include 'footer.php'; ?>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script type="text/javascript" src="js/storetogoModules.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

   <script>
     let captchaCodes = {}; // Store generated CAPTCHA codes

     // Generate a new CAPTCHA and render it in the given div
     function createCaptcha(id) {
       const captchaDiv = document.getElementById(`captcha_${id}`);
       captchaDiv.innerHTML = ""; // Clear previous CAPTCHA (if any)

       const randomCode = generateCaptchaCode();
       captchaCodes[id] = randomCode; // Store CAPTCHA code for validation
       document.getElementById("captchaInput").value = captchaCodes[id];

       const canvas = document.createElement("canvas");
       canvas.width = 150; // Width of the CAPTCHA canvas
       canvas.height = 50; // Height of the CAPTCHA canvas

       const ctx = canvas.getContext("2d");

       // Add a simple shaded background
       const gradient = ctx.createLinearGradient(0, 0, canvas.width, canvas.height);
       gradient.addColorStop(0, "#f0f0f0"); // Light gray
       gradient.addColorStop(1, "#d0d0d0"); // Slightly darker gray
       ctx.fillStyle = gradient;
       ctx.fillRect(0, 0, canvas.width, canvas.height);

       // Draw the CAPTCHA text
       ctx.font = "25px Arial"; // Font style and size
       ctx.fillStyle = "#333"; // Text color (dark gray)
       ctx.textAlign = "center";
       ctx.textBaseline = "middle";
       ctx.fillText(randomCode, canvas.width / 2, canvas.height / 2); // Center the text

       captchaDiv.appendChild(canvas); // Append the canvas to the div
     }

     // Generate a random CAPTCHA code (e.g., 4 alphanumeric characters)
     function generateCaptchaCode() {
       const charsArray = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
       const lengthOtp = 4; // Length of the CAPTCHA code
       let captcha = "";
       for (let i = 0; i < lengthOtp; i++) {
         const index = Math.floor(Math.random() * charsArray.length);
         captcha += charsArray[index];
       }
       return captcha;
     }

     // Refresh the CAPTCHA
     function refreshCaptcha(id) {
       createCaptcha(id); // Recreate the CAPTCHA
     }

     $(document).ready(function () {

  createCaptcha(1);
  $(".btn5").click(function (e) {
    
    e.preventDefault();
    $(".error_contact_msg").text("");

    const $btn = $(this);
    const originalText = $btn.val();
    const dataId = $btn.attr("data-id");
    const captchaInput = $(`#cpatchaTextBox_${dataId}`).val();

    if (!captchaInput) {
        $(".error_contact_msg").text("Please enter the CAPTCHA.");
        return;
    }


    if (captchaCodes[dataId] !== captchaInput) {
        $(".error_contact_msg").text("Captcha is invalid. Please try again.");
        createCaptcha(dataId);
        $(`#cpatchaTextBox_${dataId}`).val("");
        return;
    }
    // Form field validation using jquery.validate
    var form = $("#contactForm");

    form.validate({
        rules: {
            firstname: "required",
            email: {
                required: true,
                email: true
            },
            mobile: "required",
            subject: "required",

            // message: "required"
        },
        messages: {
            firstname: "Please enter your name",
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            mobile: "Please enter your mobile number",
            subject: "Please enter your subject",

            // message: "Please enter your message"
        },
        errorElement: "div",
        errorClass: "text-danger", // you can style this class in CSS
    });

    if (!form.valid()) {
        return; // stop if form is invalid
    }

    var data = $("#contactForm");
    const formData = $("#contactForm").serialize();

    // Disable button and show sending text
    $btn.prop("disabled", true).val("Sending...");
    $("#spinner").show();
        $.ajax({
          type: "POST",
          url: "",
          data: formData + '&subc=1',
          dataType: "json",
          success: function (response) {
              if (response.status === 'success') {
                  toastr.success(response.message);
                  $("#contactForm")[0].reset();
                  createCaptcha(dataId);
              } else {
                  toastr.error(response.message);
              }
              $("#spinner").hide();
              $btn.prop("disabled", false).val(originalText);
          },
          error: function () {
              toastr.error('AJAX request failed.');
              $btn.prop("disabled", false).val(originalText);
              $("#spinner").hide();
          }
      });
   });

});

   </script>





   <!-- <script>
     $(document).ready(function() {
       createCaptcha();
     });
   </script> -->

   <script type="text/javascript">
     // vars
     'use strict'
     var testim = document.getElementById("testim"),
       testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
       testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
       testimLeftArrow = document.getElementById("left-arrow"),
       testimRightArrow = document.getElementById("right-arrow"),
       testimSpeed = 4500,
       currentSlide = 0,
       currentActive = 0,
       testimTimer,
       touchStartPos,
       touchEndPos,
       touchPosDiff,
       ignoreTouch = 30;;

     window.onload = function() {

       // Testim Script
       function playSlide(slide) {
         for (var k = 0; k < testimDots.length; k++) {
           testimContent[k].classList.remove("active");
           testimContent[k].classList.remove("inactive");
           testimDots[k].classList.remove("active");
         }

         if (slide < 0) {
           slide = currentSlide = testimContent.length - 1;
         }

         if (slide > testimContent.length - 1) {
           slide = currentSlide = 0;
         }

         if (currentActive != currentSlide) {
           testimContent[currentActive].classList.add("inactive");
         }
         testimContent[slide].classList.add("active");
         testimDots[slide].classList.add("active");

         currentActive = currentSlide;

         clearTimeout(testimTimer);
         testimTimer = setTimeout(function() {
           playSlide(currentSlide += 1);
         }, testimSpeed)
       }

       testimLeftArrow.addEventListener("click", function() {
         playSlide(currentSlide -= 1);
       })

       testimRightArrow.addEventListener("click", function() {
         playSlide(currentSlide += 1);
       })

       for (var l = 0; l < testimDots.length; l++) {
         testimDots[l].addEventListener("click", function() {
           playSlide(currentSlide = testimDots.indexOf(this));
         })
       }

       playSlide(currentSlide);

       // keyboard shortcuts
       document.addEventListener("keyup", function(e) {
         switch (e.keyCode) {
           case 37:
             testimLeftArrow.click();
             break;

           case 39:
             testimRightArrow.click();
             break;

           case 39:
             testimRightArrow.click();
             break;

           default:
             break;
         }
       })

       testim.addEventListener("touchstart", function(e) {
         touchStartPos = e.changedTouches[0].clientX;
       })

       testim.addEventListener("touchend", function(e) {
         touchEndPos = e.changedTouches[0].clientX;

         touchPosDiff = touchStartPos - touchEndPos;

         console.log(touchPosDiff);
         console.log(touchStartPos);
         console.log(touchEndPos);


         if (touchPosDiff > 0 + ignoreTouch) {
           testimLeftArrow.click();
         } else if (touchPosDiff < 0 - ignoreTouch) {
           testimRightArrow.click();
         } else {
           return;
         }

       })
     }
   </script>






   <script src="js/custom.js"></script>
   <script type="text/javascript">
     var _gaq = _gaq || [];
     _gaq.push(['_setAccount', 'UA-36251023-1']);
     _gaq.push(['_setDomainName', 'jqueryscript.net']);
     _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script');
       ga.type = 'text/javascript';
       ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0];
       s.parentNode.insertBefore(ga, s);
     })();
   </script>


 </body>

 </html>

 <script>
   $('.slider').each(function() {
     var $this = $(this);
     var $group = $this.find('.slide_group');
     var $slides = $this.find('.slide');
     var bulletArray = [];
     var currentIndex = 0;
     var timeout;

     function move(newIndex) {
       var animateLeft, slideLeft;

       advance();

       if ($group.is(':animated') || currentIndex === newIndex) {
         return;
       }

       bulletArray[currentIndex].removeClass('active');
       bulletArray[newIndex].addClass('active');

       if (newIndex > currentIndex) {
         slideLeft = '100%';
         animateLeft = '-100%';
       } else {
         slideLeft = '-100%';
         animateLeft = '100%';
       }

       $slides.eq(newIndex).css({
         display: 'block',
         left: slideLeft
       });
       $group.animate({
         left: animateLeft
       }, function() {
         $slides.eq(currentIndex).css({
           display: 'none'
         });
         $slides.eq(newIndex).css({
           left: 0
         });
         $group.css({
           left: 0
         });
         currentIndex = newIndex;
       });
     }

     function advance() {
       clearTimeout(timeout);
       timeout = setTimeout(function() {
         if (currentIndex < ($slides.length - 1)) {
           move(currentIndex + 1);
         } else {
           move(0);
         }
       }, 8000);
     }

     $('.next_btn').on('click', function() {
       if (currentIndex < ($slides.length - 1)) {
         move(currentIndex + 1);
       } else {
         move(0);
       }
     });

     $('.previous_btn').on('click', function() {
       if (currentIndex !== 0) {
         move(currentIndex - 1);
       } else {
         move(3);
       }
     });

     $.each($slides, function(index) {
       var $button = $('<a class="slide_btn">&bull;</a>');

       if (index === currentIndex) {
         $button.addClass('active');
       }
       $button.on('click', function() {
         move(index);
       }).appendTo('.slide_buttons');
       bulletArray.push($button);
     });

     advance();
   });
 </script>