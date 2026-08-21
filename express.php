<?php

if (isset($_POST['subc'])) {

  //print_r($_POST);exit;

  $name = $_POST['firstname'];

  $mail = $_POST['email'];

  $phone = $_POST['mobile'];



  $msg = $_POST['msg'];

  $subject = $_POST['subject'];

  $header = 'MIME-Version: 1.0' . "\r\n";

  $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";

  //$header .= 'To: Abdul anas <abdulanas386@gmail.com>' . "\r\n";

  $header .= 'From: STORETOGO ' . "\r\n";



  $message = '

<div style="background:#e5e5e5; padding:2% 6%">





<div style="padding:15px; background:#e7e7e7;text-align: center;  border-bottom:solid 5px #9dc33b">

<div><img src="https://www.STORETOGO.ae/images/logo.png"  alt="STORETOGO" /></div>

</div>











<div style="margin-top: -6%;">

<div style="padding:15px 15px 35px 15px; background:white;text-align: center; ">

<H1>Enquiry from STORETOGO Website</H1>

<div style="padding-bottom:5px; height: 30px; border-top:dashed 1px #e5e5e5; padding-top:20px;">

<div > Name:  <a style="color:#999">' . $name . '</a></div>





</div>

<div style="padding-bottom:5px; height: 30px;">

<div > Mail:  <a style="color:#999">' . $mail . '</a></div>



 

  

</div>



<div style="padding-bottom:5px; height: 30px;">

<div > Phone:  <a style="color:#999">' . $phone . '</a></div>



 

  

</div>





<div style="padding-bottom:5px; height: 30px;">

<div > Subject:  <a style="color:#999">' . $subject . '</a></div>





  

</div>



<div style="padding-bottom:5px; height: 30px;">

<div > Message:  <a style="color:#999">' . $msg . '</a></div>

  

</div>



</div>



';

  //echo '<pre>';print_r($message);exit;

  $result = mail('sales@storetogo.ae,', 'Enquiry From STORETOGO website', $message, $header);

  //mail($email,'Thanks for your feedback' , $feedback,$header);

  if ($result) {

    echo "<script>alert('Mail Sent Successfully')</script>";

    echo "<script>window.location='index.php'</script>";
  } else {

    echo "<script>alert('Something Wrong.......')</script>";
  }
}



?>







<div class="sortimo_Slider hidden-xs">

  <div class="pullSlider">

    <span class="slider_open" style="cursor: pointer;">

      <a href="mailto:sales@storetogo.ae">

      <img src="./images/e-mail.png" alt="mail">
      
      </a>



      <div id="popup1" class="popup">

        <a href="#" class="close">&times;</a>

        <form action="" method="post">



          <div class="row">





            <div class="col-md-12">

              <input type="email" id="lname" name="email" placeholder="Your E-mail.." required>

            </div>





            <div class="col-md-12">

              <input type="text" id="lname" name="mobile" placeholder="Your Mobile.." required>

            </div>





            <div class="col-md-12">



              <textarea id="subject" name="msg" placeholder="Your Message" style="height:80px" required></textarea>

            </div>

            <div class="col-md-12">

              <input type="submit" value="Send mail" name="subc" class="subbb">

            </div>

        </form>

      </div>

  </div>

  <a href="#" class="close-popup"></a>

  </span>








 

    <!--==============================
             Whats app-area-start 
 ===============================-->
 <span class="col-img-inr">
    <a href="https://api.whatsapp.com/send?phone=+971542791581&amp;text=Hello Store To Go!." target="_blank">
        <img class="whatsapp" src="./images/whatsapp.png" alt="whatsapp">
    </a> 
    
</span>

  <!--==============================
             Whats app-area-end 
 ===============================-->

  <!-- ========= Phone ======== -->
  <span>

    <a href="tel:+971542791581">
      <img src="./images/phone-call.png" alt="phone">

    </a>

  </span>
  <!-- ========= Phone ======== -->

</div>























</div>







<style type="text/css">
  .popup {

    position: fixed;

    padding: 30px;

    max-width: 350px;

    border-radius: 0px;

    top: 50%;

    right: 0%;

    transform: translate(0%, -50%);

    background: #fff;

    visibility: hidden;

    opacity: 0;

    /* "delay" the visibility transition */

    -webkit-transition: opacity .5s, visibility 0s linear .5s;

    transition: opacity .5s, visibility 0s linear .5s;

    z-index: 999;
    color: #000
  }

  .popup:target {

    visibility: visible;

    opacity: 1;

    /* cancel visibility transition delay */

    -webkit-transition-delay: 0s;

    transition-delay: 0s;

  }

  .popup-close {

    position: absolute;

    padding: 10px;

    max-width: 350px;

    border-radius: 10px;

    top: 50%;

    left: 50%;

    transform: translate(-50%, -50%);

    background: rgba(255, 255, 255, .9);

  }

  .popup .close {

    position: absolute;

    right: 5px;

    top: -40px;

    padding: 10px 5px 5px 5px;

    color: #fff;

    transition: color .3s;

    font-size: 2em;

    line-height: .6em;

    font-weight: bold;
    background: #006cb4;

  }

  .popup .close:hover {

    color: #006cb4;
    background: #fff;

  }



  .close-popup {

    background: rgba(0, 0, 0, .7);

    cursor: default;

    position: fixed;

    top: 0;

    left: 0;

    right: 0;

    bottom: 0;

    opacity: 0;

    visibility: hidden;

    /* "delay" the visibility transition */

    -webkit-transition: opacity .5s, visibility 0s linear .5s;

    transition: opacity .5s, visibility 0s linear .5s;

  }

  .popup:target+.close-popup {

    opacity: 1;

    visibility: visible;

    /* cancel visibility transition delay */

    -webkit-transition-delay: 0s;

    transition-delay: 0s;

  }
</style>