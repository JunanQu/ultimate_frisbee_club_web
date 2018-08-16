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
  <script src="scripts/scroll.js"></script>

  <!-- Adds the carousel to this file -->
  <link type="text/css" rel="stylesheet" href="styles/all.css" />
  <title>Cornell Buds</title>
</head>

<body>
  <?php include("includes/header.php");?>
  <div id="parallax_container">
    <!-- CSS on Slide.js -->

    <section id="section">
      <a href="#" class="scroll-down" ></a>
    </section>

    <div id="recent_news">
      <h1 id="recent_news_heading"> Recent News</h1>
    </div>
    <div class="parallax_element" id="article1">
      <h2 class="title_style"> Congrats to our All Region and All Freshman Award Winners</h2>
      <h5 class="news_date"> June 17, 2017 </h5>
      <p class="news_content">
        USA Ultimate recently published the results of the All Region and All Freshmen voting for the 2017 season,
        and we are proud to announce that the Buds are well represented on these lists. Captain Robert Rickert '17
        was named as a First Team All Region player, while Frank Wang '18, Spencer DeRoos '19, and Lucas Bulger '19 were
        all announced as Second Team All Region Players. Additionally, freshman Vinny Calderon was named to the All Freshmen team!
        A great season for the Buds ends with some well deserved recognition for these players efforts! Congrats to all of these players!
      </p>
      <p class="news_content">
        As every one of these players except for Robert Rickert will be returning to the Buds in the 2017-2018 season,
        we are excited for what next season has in store for the Buds. The future looks bright for the Buds!
      </p>
      <p class="news_content">
        <a href="http://collegechampionships.usaultimate.org/2017/06/2017-d-region-teams/" target="_blank">Here is a link to the All Region Teams</a>
      </p>
      <p class="news_content">
        <a href="http://collegechampionships.usaultimate.org/2017/06/2017-freshmen-teams/" target="_blank">Here is a link to the All Freshmen Teams</a>
      </p>
    </div>
    <div class="parallax_element" id="article2">
      <h2 class="title_style"> 2017-2018 Buds Captains</h2>
      <h5 class="news_date"> June 15, 2017 </h5>
      <p class="news_content">
        We're pleased to announce the three captains who will be leading the Buds in the 2017-2018 season: Lito Avila, Pat Voorhees,
        and Elie Lehmann. These three will do a fantastic job in leading the Buds to another fantastic and successful season, and we
        are looking forward to big things in the following years.
      </p>
    </div>
    <div class="parallax_element" id="article3">
      <h2 class="title_style"> Fall 2016 Tryouts</h2>
      <h5 class="news_date"> August 17, 2016 </h5>
      <p class="news_content">
        The fall 2016 season is almost here! Returning Buds players will be on North Campus throwing around throughout
        Orientation Week, so if you see us, please come and say hi!
      </p>
      <p class="news_content">
        There will be pickup games open to all throughout the first several weeks of school, through ClubFest. The games
        will be held at Appel Fields, right next to the Appel Commons Dining Hall, and take place from 5-7pm on the following dates:
      </p>
      <p class="news_content">
        August 22, 24, 28, 31 and
        September 2, 5, 7, 9
      </p>
      <p class="news_content">
        No playing experience necessary! The pickup games simply serve as an opportunity for you to meet the returning members
        of the program and get introduced to the sport of ultimate.Tryouts for the 2016-2017 Buds team will begin on September 12th,
        and continue through September. Tryouts are tentatively scheduled for the following dates, from 5-7pm at locations to be announced:
      </p>
      <p class="news_content">
        September 12, 14, 16, 19, 21, 23
      </p>
      <p class="news_content">
        The Buds look forward to meeting all prospective players! If you have any questions, please email the captains at
        buds@cornell.edu, and fill out this form if you would like to be added to our email list.
      </p>
    </div>
    <div class="parallax_element" id="article4">
      <h2 class="title_style"> 2016-2017 Season</h2>
      <h5 class="news_date"> June 11, 2016 </h5>
      <p class="news_content">
        Congratulations to the new captains for the 2016-2017 season. We are pleased to announce that Robert Rickert, Frank Wang,
        and Mike Hammer will be serving as captains for the upcoming season. You can contact the captains at buds@cornell.edu or
        check out our contact us page to contact them individually.
      </p>
      <p class="news_content">
        A big thank you to the departing captains, Joe Thompson and Austin Hartley, for all their hard work over the
        past few years. They each left a big impact on the Buds program.
      </p>
    </div>
  </div>
  <!-- End of parallax container -->

  <?php include('includes/footer.php')?>
</body>
</html>
