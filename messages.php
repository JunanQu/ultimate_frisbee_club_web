<?php include('includes/init.php');

$current_page_id="messages";
$db = open_or_init_sqlite_db('cornellbuds.sqlite', "init/init.sql");

function print_results($record) {
  ?>
  <tr>
    <td><?php echo $record["first_name"];?></td>
    <td><?php echo $record["last_name"];?></td>
    <td><?php echo $record["email"];?></td>
    <td><?php echo $record["listserv"];?></td>
    <td><?php echo $record["subject"];?></td>
    <td><?php echo $record["message"];?></td>
  </tr><?php
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <script src="scripts/dropdown.js"></script>

  <title>Cornell Buds</title>
</head>
<body>
  <?php include("includes/header.php");?>

  <h1 id="all_messages"> All Messages </h1>
  <?php
  $messagessql = "SELECT * FROM contact";
  $params = array();
  $records = exec_sql_query($db, $messagessql, $params);
  if (isset($records) && !empty($records)){
    ?>
    <table id="messages_display">
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Listserv</th>
        <th>Subject</th>
        <th>Message</th>
      </tr>
      
      <?php
      foreach($records as $record){
        print_results($record);
      }
    } else {
      echo "<h2> No Messages </h2>";
    }
    ?>
  </table>

  <?php include('includes/footer.php')?>
</body>
</html>
