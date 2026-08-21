<?php include('db_connect.php');

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Assuming $conn is your MySQLi connection
$sql = "SELECT blogs.*, locations.*, websites.*, blogs.created_at as created_at
        FROM blogs
        JOIN websites ON blogs.website_id = websites.id
        JOIN locations ON blogs.location_id = locations.id
        WHERE blogs.status = 1
          AND blogs.deleted_at IS NULL
          AND websites.title LIKE '%Storetogo%'
          AND locations.location_name LIKE '%sa%'
        ORDER BY blogs.created_at DESC";

$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!--***************************************-->
  <script src="js/bootstrap.min.js"></script>
  <!--***************************************-->


  <title>Van Storage & Organisation Blog | Insights from StoreToGoo KSA</title>
  <meta name="description" content="Read expert articles on van organisation, efficient workspace setups, 5S methodology, load-securing tips, and mobile workshop optimisation on the StoreToGoo blog.">
  <link rel="shortcut icon" href="images/favicon.png">
  <meta charset="utf-8">
  <meta name="keywords" content="van racking, van racking in uae, van racking in dubai, van roofing in uae, van roofing in Dubai, van wall and cladding in uae">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="http://storetogo.ae/blog.php" />


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
  <link rel="stylesheet" href="css/blog.css">
  <!--***************************************-->

</head>

<body>


  <?php $page = 'blog';
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
              <h2>Blog</h2>
            </div>
            <img class="hiden" src="images/blog.png" alt="Store to go uae">
            <img class="show" src="images/blog.png" alt="van racking in uae">
          </div>





        </div>
      </div>
    </div><!-- End // .slider -->




    <div class="scroll"><a href="#thanks"><span></span></a></div>


    <div class="pattern pattern--lines"></div>
    <div class="sli__text"></div>
  </section>




  <section id="blog">
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-9 col-sm-12 col-xs-12">

          <div class="row">

                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <a href="blog/<?php echo $row['slug']; ?>" target="_blank"> 
                            <figure>
                              <img src="https://bigleap.tech/cms/storage/app/public/<?php echo $row['default_image']; ?>" 
                                   alt="<?php echo $row['image_alt']; ?>">
                            </figure>
                            <h3><?php echo $row['blog_title']; ?></h3>
                          </a>
                        </div>
                <?php 
                    }
                } else {
                ?>
                    <h3>No Blogs Found!</h3>
                <?php 
                }
                ?>


          </div>

        </div>

        <div class="col-md-3 col-sm-12 col-xs-12">
          <div class="ren">Products</div>
          <ul>
            <li><a href='../sa/van-racking.php'>Van Racking </a></li>
            <li><a href="../sa/vehicle-lettering-graphics.php">Vehicle Decals</a></li>
            <li><a href="../sa/roof-rack-topsystem.php">Roof Racks</a></li>
            <li><a href="../sa/cargo-bike-procargo-ct1.php">Cargo Bike</a></li>
            <li><a href="../sa/mobile-working.php">Mobile Working</a></li>
            <li><a href="../sa/boxxes-cases.php">BOXXes & Cases</a></li>
            <li><a href="../sa/workplace-organisation.php">Workplace Organisation</a></li>
            <li><a href="../sa/load-securing-prosafe.php">Load Securing</a></li>
            <li><a href="../sa/accessories.php">Accessories</a></li>
            <li><a href="../sa/floor-wall-cladding.php">Floor And Wall Cladding</a></li>
            <li><a href="./sa/vehicle-manufacturers.php">Vechicle Manufacturers</a></li>

          </ul>
        </div>

      </div>

    </div>

  </section>





  <?php include 'footer.php'; ?>




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