<?php include('includes/init.php');
$current_page_id="submitted";

$db = open_or_init_sqlite_db('cornellbuds.sqlite', "init/init.sql");

$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];
$fullname = $firstname . " " . $lastname;
$subject = $_SESSION["subject"];
$email = $_SESSION["email"];


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

  <article id="submission">
    <h1 id="message_sent">Message Sent!</h1>
    <p class="message_submitted">Thank you,<div class="message_input"><?php echo htmlspecialchars($fullname); ?> </div>.
    <p class="message_submitted">Your message,<div class="message_input"><?php echo htmlspecialchars($subject);?></div> has been received and we will
        respond to <div class="message_input"><?php echo($email); ?> </div> as soon as possible!
  </article>

      <?php include('includes/footer.php')?>
</body>
</html>
