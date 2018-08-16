<?php include('includes/init.php');

$current_page_id="schedule";
$unique_tag = exec_sql_query($db, "SELECT * FROM schedule", NULL)->fetchAll(PDO::FETCH_COLUMN);

if (isset($_POST["submit"]) ) {
  $db->beginTransaction();
  $eventDate=filter_input(INPUT_POST, 'eventDate', FILTER_SANITIZE_STRING);
  $name=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $location=filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
  $sql = "INSERT INTO Schedule (eventDate, location, note) VALUES (:eventDate, :location, :note);";
  $params = array(
  ':eventDate' => $eventDate,
  ':location' => $name,
  ':note' => $location,
  );
  $result = exec_sql_query($db, $sql, $params);
  if ($result) {
    $file_id = $db->lastInsertId("id");}
  $db->commit();
}
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
    <script src="scripts/dropdown.js"></script>

    <title>Schedule</title>
  </head>

  <body>

  <?php include("includes/header.php");?>


  <?php  if ($current_user!="captain") {


  $records = exec_sql_query($db, "SELECT * FROM schedule")->fetchAll(PDO::FETCH_ASSOC);
  foreach($records as $record){

    echo("<div class='card'> ");
    echo("<div class='header'>");
    echo("<h3>".$record['location']."</h3>");
    echo("</div> ");
    echo("<div class='container'>");
    echo("<p class = 'cardSpace'>".$record['note']."</p>");
    echo("<p class = 'date'>".$record['eventdate']."</p></div></div>");
  }
}


  if ($current_user=="captain") {


  $records = exec_sql_query($db, "SELECT * FROM schedule")->fetchAll(PDO::FETCH_ASSOC);
  foreach($records as $record){

    echo("<div class='card'> ");
    echo("<a href=\"delete.php?id=$record[id]\" onClick=\"return confirm('Are you sure you want to delete this event?')\"> Delete Event </a>");
    echo("<div class='header'>");
    echo("<h3>".$record['location']."</h3>");
    echo("</div> ");
    echo("<div class='container'>");
    echo("<p class = 'cardSpace'>".$record['note']."</p>");
    echo("<p class = 'date'>".$record['eventdate']."</p></div></div>");
  }
}

if ($current_user=="captain") {
    echo ("<div class = 'infoBox'>");
    echo ("<h2 class = 'left'> Add Event </h2>");
    echo ('<form id="upload_photo" action="schedule.php" method="post" >');
    echo ('<label>Add Event Date:</label> <input type="text" name="eventDate" required>');
    echo ('<label>Add Event Name:</label> <input type="text" name="name" required>');
    echo ('<label>Add Event Location:</label> <input type="text" name="location" required>');
    echo ("<input id = 'submit' type='submit' value='submit' name='submit'/></input>");
    echo ("</form>
          </div>");

}
  else{
    echo("<p class = 'margin'> Interested in adding an event to the scheudle? Contact a team contact to get more information. </p> ");

      }
     ?>
  </div>


  <?php include("includes/footer.php");?>
  </body>
</html>
