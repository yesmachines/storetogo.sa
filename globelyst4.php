<!--***************************************-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!--***************************************-->

  





  <section id="newsfeeds">
    <div class="container-fluid">

      <div class="row">


<div class="col-md-12 centet-all">

<div class="sortimo-component carousel-component comp_00002HKF ASFvdsead " id="comp_00002HKF">

<div class="owl-slider ">
<div id="carousel" class="owl-carousel">

<div class="item">
   <div class="container">
         <div class="sortimo-dark-hover carousel-item sortimo-blue-link">
          <div class="image">
            <img src="images/product/2019-11-04-MB-Sprinter-Globelyst-4-SBL-mit-mySortimo-inlay.jpg" class="carousel-image
              
              ">
            </div>
          <div class="arrow-container">
                <div class="carousel-arrow">
                </div>
              </div>
              <div class="text text-arrow" style="background-color: rgb(255, 255, 255); color: rgb(84, 99, 115); fill: rgb(84, 99, 115); height: 270.4px;">
            <span class="item-headline">
            Wide range of Accessories  </span>
            <p style="margin-bottom:0px;"> A wide range of accessories can be adjusted according to the van requirements,
               allowing customization, while staying compliant to the industrial safety standards.  </p></div>
        </div>
    </div>
  </div>


 
  
<div class="item">
   <div class="container">
         <div class="sortimo-dark-hover carousel-item sortimo-blue-link">
          <div class="image">
            <img src="images/product/globelyst4-carousel-lasi-340x340.jpg" class="carousel-image
              
              ">
            </div>
          <div class="arrow-container">
                <div class="carousel-arrow">
                </div>
              </div>
            <div class="text text-arrow" style="background-color: rgb(255, 255, 255); color: rgb(84, 99, 115); fill: rgb(84, 99, 115); height: 270.4px;">
            <span class="item-headline">
            Customization  </span>
            <p style="margin-bottom:0px;"> The standout feature of this van racking system. It can be customized according to the requirements of the businesses. </p></div>
        </div>
    </div>
  </div>

   
<div class="item">
   <div class="container">
         <div class="sortimo-dark-hover carousel-item sortimo-blue-link">
          <div class="image">
            <img src="images/product/2019-11-04-MB-Sprinter-Globelyst-4-Werkbank-klappbar-1000000628.jpg" class="carousel-image
              
              ">
            </div>
          <div class="arrow-container">
                <div class="carousel-arrow">
                </div>
              </div>
             <div class="text text-arrow" style="background-color: rgb(255, 255, 255); color: rgb(84, 99, 115); fill: rgb(84, 99, 115); height: 270.4px;">
            <span class="item-headline">
            Quality and Safety </span>
            <p style="margin-bottom:0px;"> The van racking system has undergone rigorous crash tests and are proven to be crush proof and durable.  </p></div>
        </div>
    </div>
  </div>

  <div class="item">
   <div class="container">
         <div class="sortimo-dark-hover carousel-item sortimo-blue-link">
          <div class="image">
            <img src="images/product/globelyst-crashtest-340x340.jpg" class="carousel-image
              
              ">
            </div>
          <div class="arrow-container">
                <div class="carousel-arrow">
                </div>
              </div>
              <div class="text text-arrow" style="background-color: rgb(255, 255, 255); color: rgb(84, 99, 115); fill: rgb(84, 99, 115); height: 270.4px;">
            <span class="item-headline">
            Material mix </span>
            <p style="margin-bottom:0px;"> The racking system is made from a combination of plastic, metal and fire, ensuring sturdy support for the loads. </p></div>
        </div>
    </div>
  </div>

  <div class="item">
   <div class="container">
         <div class="sortimo-dark-hover carousel-item sortimo-blue-link">
          <div class="image">
            <img src="images/product/2019-11-04-MB-Sprinter-Globelyst-4-SR-BOXXen.jpg" class="carousel-image
              
              ">
            </div>
          <div class="arrow-container">
                <div class="carousel-arrow">
                </div>
              </div>
           <div class="text text-arrow" style="background-color: rgb(255, 255, 255); color: rgb(84, 99, 115); fill: rgb(84, 99, 115); height: 270.4px;">
            <span class="item-headline">
            Integrated Load Securing </span>
            <p style="margin-bottom:0px;"> The addition of the ProSafe load securing system can be fixed directly onto the metal frame inside the van,
               which helps the operators to quickly tie down the load and prevent it from sliding.  </p></div>
        </div>
    </div>
  </div>

</div>
</div>

  
  
</div>


</div>
</div>



    </div>
  </section>


<input type="hidden" value="2" id="plus">


<script type="text/javascript">

    
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
     $('#plus').val("2");
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {


 var plus=$('#plus').val();

 var plus = parseInt(plus);

 $('#plus').val(plus+1);

  if(plus>6){


   /* window.location.href = "https://www.yesmachinery.ae/news.php";*/

  }

  else{

  showSlides(slideIndex += n);

}

}
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
  
</script>


<!--***************************************-->

<script type="text/javascript">
  // Instantiate the Bootstrap carousel
  //$('.multi-item-carousel').carousel();
$('.multi-item-carousel').carousel({
  interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){

  var next = $(this).next();

  if (!next.length) {
    next = $(this).siblings(':first');

  }
  next.children(':first-child').clone().appendTo($(this));
  
 if (next.next().length>0) {


    next.next().children(':first-child').clone().appendTo($(this));
    
  } 
  else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }

   
});
 
</script>




<script>
 
   $(document).ready(function(){

   $('#ne').click(function(){

     var rightCount = $('#pic_count_right').val();
      if(rightCount>5)
       {
            $('#ne').click(function(){
                //alert('end');
                $('#theCarousel').carousel({
         pause: true,
            interval: false
        });
         //window.location.replace("https://www.yesmachinery.ae/news.php");
         window.location.href = "https://www.yesmachinery.ae/news.php";
         
            });
       }
      else
       {
         rightCount++;
    
        $('#pic_count_right').val(rightCount);
       }
    
     });
    $('#pre').click(function(){

     var leftCount = $('#pic_count_left').val();
      if(leftCount>5)
       {
              $('#pre').click(function(){
                   $('#theCarousel').carousel({
         pause: true,
            interval: false
        });
         //window.location.replace("http://localhost/yes-l/news.php");
         window.location.href = "https://www.yesmachinery.ae/news.php";
              });
       }
      else
       {
         leftCount++;
    
        $('#pic_count_left').val(leftCount);
       }
    
     });
  });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript">
  jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    700: {
      items: 1
    },

    1024: {
      items: 3
    },

    1200: {
      items: 3
    },

    1366: {
      items: 3
    }
  }
});
</script>
