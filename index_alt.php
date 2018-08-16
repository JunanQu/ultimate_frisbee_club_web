<?php include('includes/init.php');

$current_page_id="index";

 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <script src="scripts/dropdown.js"></script>
  <script src="scripts/jquery-3.2.1.js"></script>
  <script src="scripts/slide.js"></script>

  <!-- Adds the carousel to this file -->
    <link type="text/css" rel="stylesheet" href="styles/all.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <title>Cornell Buds</title>
</head>

<body>
<?php include("includes/header.php");?>
<!-- CSS on Slide.js -->
<div id="slideshow"></div>

<!-- Large/grey -->
<div class="carouselContainer">

<!-- medium/black -->
  <div id="carousel" class="row" >

  <!-- first half -->
    <div class="feature col-lg-6">

      <div id="feature-wrap">
        <h3 id="feat">Featured</h3>
      </div>
      </div>

    <!-- second half -->
     <div class="item col-lg-6" id="img-0">
       <img src="images/gamePlay.jpg" alt="" class="images" />
       <div class="overlay">
           <div class="text123">Congrats to our All Region and All Freshman....</div>
         </div>
     </div>
     <div class="item col-lg-6" id="img-1">
       <img src="images/gamePlay1.jpg" alt="" class="images" />
       <div class="overlay">
           <div class="text123">2017-2018 Buds Captains.....</div>
         </div>
     </div>
     <div class="item col-lg-6" id="img-2">
       <img src="images/gamePlay2.jpg" alt="" class="images" />
       <div class="overlay">
           <div class="text123"> Fall 2016 Tryouts....</div>
         </div>
     </div>
     <div class="item col-lg-6" id="img-3">
       <img src="images/gamePlay3.jpg" alt="" class="images" />
       <div class="overlay">
           <div class="text123">2016-2017 Season.....</div>
         </div>
     </div>
    </div>

<!-- Adds text box for each element clicked
    fix css-->
  <div class="click" id="text-img-0" hidden style="position:absolute;z-index:100">
    <h2> Congrats to our All Region and All Freshman Award Winners</h2>
    <h5> June 17, 2017 </h5>
    <p>
      USA Ultimate recently published the results of the All Region and All Freshmen voting for the 2017 season,
      and we are proud to announce that the Buds are well represented on these lists. Captain Robert Rickert '17
      was named as a First Team All Region player, while Frank Wang '18, Spencer DeRoos '19, and Lucas Bulger '19 were
      all announced as Second Team All Region Players. Additionally, freshman Vinny Calderon was named to the All Freshmen team!
      A great season for the Buds ends with some well deserved recognition for these players efforts! Congrats to all of these players!

      <br/>As every one of these players except for Robert Rickert will be returning to the Buds in the 2017-2018 season,
      we are excited for what next season has in store for the Buds. The future looks bright for the Buds!

      <br/>Here is a link to the All Region Teams: http://collegechampionships.usaultimate.org/2017/06/2017-d-region-teams/
      <br/>Here is a link to the All Freshmen Teams: http://collegechampionships.usaultimate.org/2017/06/2017-freshmen-teams/
    </p>
  </div>

  <div class="click" id="text-img-1" hidden style="height:300px; width:300px; position:absolute;z-index:100">
    <h2> 2017-2018 Buds Captains</h2>
    <h5> June 15, 2017 </h5>
    <p>
      We're pleased to announce the three captains who will be leading the Buds in the 2017-2018 season: Lito Avila, Pat Voorhees,<br/>
      and Elie Lehmann. These three will do a fantastic job in leading the Buds to another fantastic and successful season, and we <br/>
      are looking forward to big things in the following years.
    </p>
  </div>

  <div class="click" id="text-img-2" hidden style="height:300px; width:300px; position:absolute;z-index:100">
    <h2> Fall 2016 Tryouts</h2>
    <h5> August 17, 2016 </h5>
    <p>
      The fall 2016 season is almost here! Returning Buds players will be on North Campus throwing around throughout
      Orientation Week, so if you see us, please come and say hi!

      There will be pickup games open to all throughout the first several weeks of school, through ClubFest. The games
      will be held at Appel Fields, right next to the Appel Commons Dining Hall, and take place from 5-7pm on the following dates:
      <br/>
      August 22, 24, 28, 31
      <br/>
      September 2, 5, 7, 9
      <br/>
      No playing experience necessary! The pickup games simply serve as an opportunity for you to meet the returning members
      of the program and get introduced to the sport of ultimate.Tryouts for the 2016-2017 Buds team will begin on September 12th,
      and continue through September. Tryouts are tentatively scheduled for the following dates, from 5-7pm at locations to be announced:
      <br/>
      September 12, 14, 16, 19, 21, 23<br/>
      <br/>The Buds look forward to meeting all prospective players! If you have any questions, please email the captains at
      buds@cornell.edu, and fill out this form if you would like to be added to our email list.
    </p>
  </div>

  <div class="click" id="text-img-3" hidden style="height:300px; width:300px; position:absolute;z-index:100">
    <h2> 2016-2017 Season</h2>
    <h5> June 11, 2016 </h5>
    <p>

      Congratulations to the new captains for the 2016-2017 season. We are pleased to announce that Robert Rickert, Frank Wang,
      and Mike Hammer will be serving as captains for the upcoming season. You can contact the captains at buds@cornell.edu or
      check out our contact us page to contact them individually.<br/>
      <br/>A big thank you to the departing captains, Joe Thompson and Austin Hartley, for all their hard work over the
      past few years. They each left a big impact on the Buds program.
    </p>
  </div>
<script src="scripts/carousel.js"></script>
</div>
</body>
<?php include('includes/footer.php')?>
</html>
