<!--***************************************-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!--***************************************-->


  <section id="newsfeeds">
    <div class="container-fluid">

      <div class="row">


<div class="col-md-12 centet-all">

<div class="sortimo-component carousel-component boaskj comp_00002HKF " id="comp_00002HKF">

<div class="owl-slider bg">
<div id="carousel" class="owl-carousel">

<div class="item">
   <div class="container">
    <div class="sortimo-dark-hover carousel-item sortimo-blue-link">
          <div class="image">
            <img src="images/product/sContainer-kacheln-baustelle-340x340.jpg" class="carousel-image
              
              ">
            </div>
          <div class="arrow-container">
                <div class="carousel-arrow">
                </div>
              </div>
              <div class="text text-arrow" style="background-color: rgb(255, 255, 255); color: rgb(84, 99, 115); fill: rgb(84, 99, 115); height: 481.6px;">
            <span class="item-headline">
                Mobile depot with optional racking system</span>
            <p style="text-align: left">The sContainer serves as a mobile depot on construction sites or during service operations - on request also with an order system. Thus, the tool and consumables are available directly on site. A big advantage for permanent construction sites or inner city operations, where the approach with the commercial vehicle is not always possible to the place of use.</p></div>
        </div>     
    </div>
  </div>
  
<div class="item">
   <div class="container">
      <div class="sortimo-dark-hover carousel-item sortimo-blue-link">
          <div class="image">
            <img src="images/product/sContainer-kacheln-raumnutzen-340x340.jpg" class="carousel-image
              
              ">
            </div>
          <div class="arrow-container">
                <div class="carousel-arrow">
                </div>
              </div>
              <div class="text text-arrow" style="background-color: rgb(255, 255, 255); color: rgb(84, 99, 115); fill: rgb(84, 99, 115); height: 481.6px;">
            <span class="item-headline">
                Minimal footprint, maximum space utilization</span>
            <p style="text-align: left">The footprint of all sContainers is no more than one euro pallet. Thus, the service container on the narrowest construction sites or service assignments is a slim depot with a lot of interior space. Because the integration of a SR5 shelving system creates space in various levels and therefore room for tools, consumables and, if necessary, even for a workplace.</p></div>
        </div> 
    </div>
  </div>

   
<div class="item">
   <div class="container">
        <div class="sortimo-dark-hover carousel-item sortimo-blue-link">
          <div class="image">
            <img src="images/product/sContainer-kacheln-logistik-340x340.jpg" class="carousel-image
              
              ">
            </div>
          <div class="arrow-container">
                <div class="carousel-arrow">
                </div>
              </div>
              <div class="text text-arrow" style="background-color: rgb(255, 255, 255); color: rgb(84, 99, 115); fill: rgb(84, 99, 115); height: 481.6px;">
            <span class="item-headline">
                Seamless integration in transport and logistics chains</span>
            <p style="text-align: left">Due to the basic size of the euro pallet, the sContainer can be integrated cost-effectively into every logistics process. It can be transported with industrial trucks as well as inexpensively transported by truck, ship or plane. Thus, you can have the sContainer delivered directly to the place of work and simply let your service or construction team leave behind you.</p></div>
        </div>
  </div>
  </div>

  <div class="item">
   <div class="container">
       <div class="sortimo-dark-hover carousel-item sortimo-blue-link">
          <div class="image">
            <img src="images/product/sContainer-kacheln-kosten-340x340.jpg" class="carousel-image
              
              ">
            </div>
          <div class="arrow-container">
                <div class="carousel-arrow">
                </div>
              </div>
              <div class="text text-arrow" style="background-color: rgb(255, 255, 255); color: rgb(84, 99, 115); fill: rgb(84, 99, 115); height: 481.6px;">
            <span class="item-headline">
                Low acquisition and maintenance costs</span>
            <p style="text-align: left">The sContainer is not only much cheaper to buy than, for example, a commercial vehicle, but also in terms of upkeep. Because motor insurance and taxes are eliminated. Use the mobile depot so you do not have to drive your tools, machines and consumables every day - saving a lot of fuel costs and making sure that no equipment is forgotten.</p></div>
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
         window.location.href = "";
         
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
         window.location.href = "";
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
