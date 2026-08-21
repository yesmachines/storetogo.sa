
<!DOCTYPE html>
<html lang="en">
<head>
<!--***************************************-->
<script src="js/bootstrap.min.js" ></script>
<!--***************************************-->


  <title>StoreToGo Dubai UAE</title>
  <!-- <meta name="description" content="Floors born tough, our floor tiles are Strong, Durable & Aesthetic.  Our product applications can be used in diverse segment from Industries, Warehouses to Stables, from Gymnasiums, Hospitals, Swimming pool, Garage, Exhibitions to Events the list goes on. Our portfolio includes PVC tiles, Heavy Duty Tiles, Work-Station Mats, Ergonomic Anti-Fatigue mats, Entrance floor matting, Outdoor tiles and Sports tiles. Contact stroetogofloor.ae Sharjah, UAE for more information."> -->
  <link rel="shortcut icon" href="images/favicon.png">
  <meta charset="utf-8">
  <meta name="keywords" content="">
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
  <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/prod-style.css" >
  <link rel="stylesheet" href="css/layout.css" >
  <link rel="stylesheet" href="css/home.css" >
  <link rel="stylesheet" href="css/testim.css" >
  <link rel="stylesheet" href="css/news.css" >
<!--***************************************-->




</head>
<body>


<?php $page ='';  include'header.php';?>

<!-- EMAIL -->
<?php $page ='';  include'express.php';?>
<!-- EMAIL -->

<section id="stroetogo-banner">
  <div class="slider">
  <div class="slide_viewer">
    <div class="slide_group">

      <div class="slide">
        <div class="slide__text fadeInDown animated">
        <h2>News & Resources</h2>
      </div>
      <img class="hiden" src="images/news.jpg" alt="slider1">
       <img class="show" src="images/news.jpg"> 
      </div>

     

      

    </div>
  </div>
</div><!-- End // .slider -->
  



<div class="scroll"><a href="#thanks"><span></span></a></div>


<div class="pattern pattern--lines"></div>
<div class="sli__text"></div>
</section>




<section id="newsfeeds">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       
<!-- 


<a href="#" target="blank"><div class="item">
   <div class="container">
          <div class="column">
            <div class="min">
              <div class="ico">
                <img src="images/news/icon.png">
              </div>
              <div class="hed">
                <h3>Store.To.Go <span class="date">09th July 2020</span></h3>
                <p>Dubai, United Arab Emirates - UAE</p>
              </div>
          </div>          
          <img src="images/news/news-3.png">
          <div class="min">
            <img src="images/news/insta.png" class="lov">
            <div class="li">
                <h3 class="like">10 likes</h3>
              </div>
            <div class="hedsc">
                <h3>Store.To.Go</h3>
                <p>The Globelyst4 van racking offers a wealth of customization options. Globelyst4 is highly resilient and permits perfect intuitive handling. The intelligent organization system allows a focused workflow and thus contributes to an increase in efficiency in daily routine.</p>
                <p class="red">Read more on <img class="linked" src="images/linked-in.png"></p>
               
            </div>

          </div>

         </div>
        
    </div>
  </div>
</a>

 
<a href="#" target="blank"><div class="item">
    <div class="container">
          <div class="column">
            <div class="min">
              <div class="ico">
                <img src="images/news/icon.png">
              </div>
              <div class="hed">
                <h3>Store.To.Go <span class="date">02th July 2020</span></h3>
                <p>Dubai, United Arab Emirates - UAE</p>
              </div>
          </div>          
          <img src="images/news/news-2.png">
          <div class="min">
            <img src="images/news/insta.png" class="lov">
            <div class="li">
                <h3 class="like">13 likes</h3>
              </div>
            <div class="hedsc">
                <h3>Store.To.Go</h3>
                <p>The Globelyst4 van racking offers a wealth of customization options. Globelyst4 is highly resilient and permits perfect intuitive handling. The intelligent organization system allows a focused workflow and thus contributes to an increase in efficiency in daily routine.</p>
                <p class="red">Read more on <img class="linked" src="images/linked-in.png"></p>

            </div>

          </div>

         </div>
         
    </div>
  </div>
</a>


<a href="#" target="blank"><div class="item">
    <div class="container">
        <div class="column">
            <div class="min">
              <div class="ico">
                <img src="images/news/icon.png">
              </div>
              <div class="hed">
                <h3>Store.To.Go <span class="date">25th June 2020</span></h3>
                <p>Dubai, United Arab Emirates - UAE</p>
              </div>
          </div>          
          <img src="images/news/news-1.png">
          <div class="min">
            <img src="images/news/insta.png" class="lov">
            <div class="li">
                <h3 class="like">15 likes</h3>
              </div>
            <div class="hedsc">
                <h3>Store.To.Go</h3>
                <p>The Globelyst4 van racking offers a wealth of customization options. Globelyst4 is highly resilient and permits perfect intuitive handling. The intelligent organization system allows a focused workflow and thus contributes to an increase in efficiency in daily routine.</p>
                <p class="red">Read more on <img class="linked" src="images/linked-in.png"></p>
                
            </div>

          </div>

         </div>

        
    </div>
  </div>
</a>
 -->


 

<?php 

include 'config.php';
$sql ="select  *, news.id as newsid from news join news_image ON news.id=news_image.nid group by news.id ORDER BY news.tstamp desc ";
$result = mysqli_query($con,$sql);

$i=0;

    foreach($result as $value){
    

                 $t= substr($value['tstamp'], 0, 10);
                 $date = date("d-m-Y", strtotime($t));
                 
                 $day =date("d", strtotime($t)); 
                 $month_num =date("m", strtotime($t)); 
                 $year =date("Y", strtotime($t)); 
                 $month_name = date("F", mktime(0, 0, 0, $month_num, 10)); 
                
                 
               $des = substr($value['description'], 0, 300);

            $arr[$i] = array('image'=>UPLOADS ."/news/".$value['file'],'date'=>$date,
              'title'=>$value['title'],'desc'=>$value['description']);
                 $i++;
?>



  


<a href="<?php echo $value['linkedin']; ?>" target="blank"><div class="item">
   <div class="container">
          <div class="column">
            <div class="min">
              <div class="ico">
                <img src="images/news/icon.png">
              </div>
              <div class="hed">
                <h3>Store.To.Go <span class="date"><?php echo $day." ".$month_name." ".$year;?></span></h3>
                <p>Dubai, United Arab Emirates - UAE</p>
              </div>
          </div>          
          <!-- <img src="images/news/news-3.png"> -->
            <img src="<?php echo UPLOADS ."/news/".$value['file'];?>">
          <div class="min">
            <img src="images/news/insta.png" class="lov">
            <div class="li">
                <h3 class="like"><?php echo $value['likes']; ?>  likes</h3>
              </div>
            <div class="hedsc">
                <h3><?php echo $value['title'];?></h3>
                <p> <?php echo $des;?></p>
                <p class="red">Read more on <img class="linked" src="images/linked-in.png"></p>
               
            </div>

          </div>

         </div>
        
    </div>
  </div>
</a>
<?php } ?>
      </div>


    

      

    </div>
  </div>

</section>




    
    <?php include'footer.php';?>


    
   
    <script type="text/javascript" src="js/storetogoModules.js"></script>
    
    
    

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
    ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
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


  



<script src="js/custom.js"></script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</body>
</html>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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