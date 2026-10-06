<?php
// Nested pages set this before including shared components (for example, '../').
$siteRootPath = isset($siteRootPath) ? $siteRootPath : './';
?>

 
 <link rel="stylesheet" href="<?php echo $siteRootPath; ?>css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

 <!-- ================
        TOP HEADER
     ================ -->
 <section class="top-header-area">
   <div class="container-fluid">
     <div class="row">
       <div class="col-xl-4">
       </div>
       <div class="col-xl-8 top-contact">
         <a href="mailto:sales@storetogoo.com"> <i class="fas fa-envelope"></i> sales@storetogoo.com </a>
         <a href="tel:966554222379"> <i class="fas fa-mobile-android-alt"></i> +966 55 422 2379 </a>

       </div>
     </div>
   </div>
 </section>
 <!-- ================
        TOP HEADER
     ================ -->

 <section id="header" class="navbar-fixed-top">
   <div class="container-fluid">
     <div class="row">
       <div class="col-md-4 col-sm-4 col-xs-8">
         <!--<a class="des" href="http://storetogo.ae/sa"><img src="<?php echo $siteRootPath; ?>images/logo.png" class="logo"></a>-->
         <!--<a class="mob" href="http://storetogo.ae/sa"><img src="<?php echo $siteRootPath; ?>images/logo.png" class="logo"></a>-->
            <a class="des" href="https://www.storetogoo.com/sa"><img src="<?php echo $siteRootPath; ?>images/logo.png" class="logo"></a>
            <a class="mob" href="https://www.storetogoo.com/sa"><img src="<?php echo $siteRootPath; ?>images/logo.png" class="logo"></a>
         
       </div>
       <div class="col-md-8 col-sm-8 col-xs-4 high">

         <div class="col-md-12 col-sm-9 right">

           <a href="#" target="blank" class="le"><i class="demo-icon icon-instagram">&#xe812;</i></a>
           <a class="le" target="blank" href="#"><i class="demo-icon icon-linkedin">&#xf0e1;</i></a>

           <a href="#" class="le" target="blank"><i class="demo-icon icon-003-facebook">&#xe808;</i></a>





         </div>



         <div class="col-md-12 col-sm-12">

           <div id='cssmenu' class="righ">

             <ul>

               <li class="underline-from-left"><a <?php if ($page == "product") { ?>class="active" <?php } ?>href="#">Products </a>
                 <ul>





                   <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>van-racking.php'>Van Racking </a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>sr5.php">Van Racking SR5</a>
                         <ul class="ind">
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>van-racking-sr5.php">Product Information</a></li>
                           <li class="underline-from-left"><a target="blank" href="https://www.mysortimo.de/en/configurator?confi=3138">Configure</a></li>
                         </ul>
                       </li>

                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>flexible-folding-rack-FR5.php"> Flexible Folding Rack FR5</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>globelyst4-van-racking.php">Van Racking Globelyst4</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>xl-drawer.php">XL Drawer</a></li>
                     </ul>
                   </li>


                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>loading-ramps.php"> Loading Ramps </a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>heavy-loading-ramps.php"> Heavy Loading Ramps </a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>light-loading-ramps.php"> Light Loading Ramps </a></li>
                     </ul>
                   </li>

                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>vehicle-lettering-graphics.php">Vehicle Decals</a></li>
                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>safety-steps.php"> Safety Steps </a></li>
                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>shoulder-sink.php"> Shoulder Sink </a></li>


                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>roof-rack-topsystem.php">Roof Racks</a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>TopSystem-ProSafe.php">TopSystem ProSafe</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Accessories-TopSystem.php">TopSystem Accessories</a></li>
                     </ul>
                   </li>

                   <!-- <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>cargo-bike-procargo-ct1.php">Cargo Bike</a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>ProCargo-CT1.php">ProCargo CT1</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Body-system-ProCargo-CT1.php">Add-On Solutions ProCargo CT1</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>ProCargo-CT1-accessories.php">Accessories ProCargo CT1</a></li>
                     </ul>
                   </li> -->

                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>mobile-working.php">Mobile Working</a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>mobile-workplace-workmo.php">Mobile Workstation</a>
                         <ul class="ind">
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>mobile-workplace-workmo.php">Discover WorkMo</a></li>
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>mobile-see-workmo.php">See WorkMo</a></li>
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Accessories-WorkMo.php">See WorkMo Accessories</a></li>
                         </ul>
                       </li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>scontainer.php">Service Depot sContainer</a>
                         <ul class="ind">
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>scontainer-pallet-format-service-depot.php">Discover SContainer</a></li>
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>See-sContainer.php">See SContainer</a></li>
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Accessories-sContainer.php">See SContainer Accessories</a></li>
                         </ul>
                       </li>
                     </ul>
                   </li>

                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>boxxes-cases.php">BOXXes & Cases</a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>L-BOXX-family.php">L-BOXX G And L-BOXX G4</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>LS-BOXX-306-G.php">LS-BOXX G</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>LT-BOXX-G.php">LT-BOXX G</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>T-BOXX-G.php">T-BOXX G</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>SR-BOXX.php">SR-BOXX</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>S-BOXX.php">S-BOXX G</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>E-BOXX.php">E-BOXX</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>i-BOXX-G.php">I-BOXX G</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>C-BOXX.php">C-BOXX</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Small-components-case.php">Cases</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Inset-boxes.php">Inset Boxes</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>MultiPack.php">Tool Rucksack</a></li>
                     </ul>
                   </li>



                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>workplace-organisation.php">Workplace Organisation</a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>discover-labels.php">Labels </a>
                         <ul class="ind">
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>discover-labels.php">Discover Labels</a></li>
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Labelling-stickers.php">Labelling Stickers</a></li>
                         </ul>
                       </li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>individual-tool-tray-inlays.php">Tool Tray Inlays</a>
                         <ul class="ind">
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>individual-tool-tray-inlays.php">Discover Inlays</a></li>
                           <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Storetogo-inlay-foam-inserts.php">See Inlays</a></li>
                         </ul>
                       </li>
                     </ul>
                   </li>

                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>load-securing-prosafe.php">Load Securing</a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Lashing-straps.php">Lashing Straps</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Load-safety-nets.php">Load Safety Nets</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Accessories-Load-Securing.php">Accessories Load Securing</a></li>
                     </ul>
                   </li>

                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>accessories.php">Accessories</a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Original-Accessories.php">Original Accessories</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Electrical-accessories.php">Electrical Accessories</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Passenger-cabin.php">Organisation At The Wheel</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>MultiPack.php">Tool Rucksack</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Partner-area.php">Partner Products</a></li>
                     </ul>
                   </li>

                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>floor-wall-cladding.php">Floor And Wall Cladding</a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>installation-and-load-securing-floor.php">Floor</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Optimum-protection-with-Sortimo-side-walls.php">Side Wall Cladding</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>Double-floor-solutions.php">Double Floor Solutions</a></li>
                     </ul>
                   </li>



                   <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>vehicle-manufacturers.php">Vechicle Manufacturers</a>
                     <ul>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>citroen.php">Citoen</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>fiat-professional.php">Fiat Professional</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>ford.php">Ford</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>iveco.php">Iveco</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>man.php">MAN</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>mercedes-benz.php">Mercedes-Benz</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>nissan.php">Nissan</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>opel.php">Opel</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>peugeot.php">Peugeot</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>renault.php">Renault</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>toyota.php">Toyota</a></li>
                       <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>volkswagen-commercial-vehicles.php">Volkswagen Commercial Vehicles</a></li>
                     </ul>
                   </li>










                 </ul>
               </li>



               <li class="underline-from-left"><a <?php if ($page == "about") { ?>class="active" <?php } ?>href="<?php echo $siteRootPath; ?>about.php">About Us</a></li>
               <li class="underline-from-left"><a <?php if ($page == "installation") { ?>class="active" <?php } ?> href="<?php echo $siteRootPath; ?>installation.php">Installations </a></li>

               <li class="underline-from-left"><a target="blank" <?php if ($page == "blog") { ?> class="active" <?php } ?>href="<?php echo $siteRootPath; ?>blogs.php">Blog </a>
                 <!--  <li class="underline-from-left"><a <?php if ($page == "news") { ?>class="active" <?php } ?>href="<?php echo $siteRootPath; ?>news.php">News & Resources </a> -->

                 <!-- <ul>
             <li class="underline-from-left"><a href="<?php echo $siteRootPath; ?>industrial-sectors.php">Industrial Sectors</a></li>         
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>warehouses.php'>Warehouses</a></li>
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>garages.php'>Garages</a></li>
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>gymnasiums.php'>Gymnasiums</a></li>
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>commercial-buildings.php'>Commercial Buildings</a></li>
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>exhibition-centers.php'>Exhibition Centers</a></li>
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>business-area.php'>Business Area</a></li>
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>sports.php'>Sports</a></li>
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>schools.php'>School & Nursery</a></li>
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>hospitals.php'>Hospitals</a></li>
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>stables.php'>Stables</a></li>
             <li class="underline-from-left"><a href='<?php echo $siteRootPath; ?>events.php'>Events</a></li>
            </ul> -->



               </li>




               <li class="underline-from-left"><a <?php if ($page == "contact") { ?>class="active" <?php } ?>href="<?php echo $siteRootPath; ?>contact.php"> Contact Us</a></li>








               <li class="underline-from-left ne"><a class="active2" <?php if ($page == "home") { ?>class="" <?php } ?>href="<?php echo $siteRootPath; ?>index.php"><i class="demo-icon icon-house-black-silhouette-without-door">&#xe810;</i></a></li>

             </ul>
           </div>























         </div>
       </div>
     </div>
 </section>

 <script src="<?php echo $siteRootPath; ?>js/jquery-latest.min.js" type="text/javascript"></script>
 <script src="<?php echo $siteRootPath; ?>js/script.js"></script>