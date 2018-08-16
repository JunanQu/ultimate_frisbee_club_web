<?php
if (isset($current_user)){
$tabs = array(
  "index" => "Home",
  "about" => "About",
  "roster"=> "Roster",
  "schedule"=>"Schedule",
  "photos"=>"Moments",
  "log_out"=>"Log Out",
  "contact"=>"Contact",
);

if($current_page_id=="submitted"){
  $tabs = array(
    "index" => "Home",
    "about" => "About",
    "roster"=> "Roster",
    "schedule"=>"Schedule",
    "photos"=>"Moments",
    "log_out"=>"Log Out",
    "contact"=>"Contact",
    "submitted"=>"Thank you",
  );
}

if($current_user=="captain"){
  $tabs = array(
    "index" => "Home",
    "about" => "About",
    "roster"=> "Roster",
    "schedule"=>"Schedule",
    "photos"=>"Moments",
    "log_out"=>"Log Out",
    "contact"=>"Contact",
    "messages"=>"Feed Back",
  );
}

} else {
  if($current_page_id=="submitted"){
    $tabs = array(
      "index" => "Home",
      "about" => "About",
      "roster"=> "Roster",
      "schedule"=>"Schedule",
      "photos"=>"Moments",
      "log_in"=>"Log In",
      "contact"=>"Contact",
      "submitted"=>"Thank you",
    );
  } else {
  $tabs = array(
    "index" => "Home",
    "about" => "About",
    "roster"=> "Roster",
    "schedule"=>"Schedule",
    "photos"=>"Moments",
    "log_in"=>"Log In",
    "contact"=>"Contact",
  );
  }
}
?>
  <div class="index-banner1">
    <div class="header-top">
      <div class="wrap">
        <div class="logo">
          <a href="index.php"><img src="images/logo.png" alt=""/></a>
          <h2 id="header_title">Cornell Buds</h2>
          <h3>Mens' Ultimate Frisbee Team at Cornell University Since 1973</h3>
          <?php
          if (isset($_POST['login'])) {
          } if (isset($current_user)) {
            echo "<h1 class='user_greetinhg'>Hello, $current_user!</h1>";
          }
          ?>
        </div>
        <div class="menu">
          <div class="box" id="box">
            <div class="box_content_center1">
              <div class="menu_box_list1">
                <div class="tab_wrap">
                  <button onclick="myFunction()" class="dropbtn"><img src="images/nav_icon.png" alt="">
                    <?php
                    foreach($tabs as $page_id => $page_name) {
                      if ($page_id == $current_page_id) {
                      $css_id = "class='nav'";
                      echo $page_name;
                      }
                    }
                    ?>
                </button>
                </div>
                <div id="drop_down_menu" class="dropdown-content">
                <?php
                foreach($tabs as $page_id => $page_name) {
                  if ($page_id == $current_page_id) {
                    $css_id = "class='current_page'";
                  } else {
                    $css_id = "class='current_page_alt'";
                  }
                    echo "<a " . $css_id . " href='" . $page_id. ".php'>$page_name</a>";
                }
                ?>
                </div>
               </div>
              </div>
            </div>
          </div>
          <div class="clear">
          </div>
        </div>
      </div>
    </div>
