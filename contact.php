<?php include('includes/init.php');


$current_page_id="contact";
$db = open_or_init_sqlite_db('cornellbuds.sqlite', "init/init.sql");
//For message submitted page

//to add to message to database
if (isset($_POST['submit']) && isset($_POST['listserv'])){
  $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
  $firstname = trim($firstname);
  $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
  $lastname = trim($lastname);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $email = trim($email);
  $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
  $subject = trim($subject);
  $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
  //insert into 'contact' table with listserv =1
  $contactsql = "INSERT INTO contact (first_name, last_name, email, listserv, subject, message) VALUES (:firstname, :lastname, :email, 1, :subject, :message)";
  $contactparams = array(
    ':firstname' => $firstname,
    ':lastname' => $lastname,
    ':email' => $email,
    ':subject' => $subject,
    ':message' => $message
  );
  $add_message = exec_sql_query($db, $contactsql, $contactparams);
  //redirect to message submitted page
  $firstName = $_REQUEST["firstname"];
  $lastName = $_REQUEST["lastname"];
  $email = $_REQUEST["email"];
  $subject = $_REQUEST["subject"];
  $message = $_REQUEST["message"];
  session_start();
  $_SESSION['firstname'] = $firstName;
  $_SESSION['lastname'] = $lastName;
  $_SESSION['email'] = $email;
  $_SESSION['subject'] = $subject;


  // redirect to to submit page
  header("Location: message-submitted.php");
  return;
} elseif (isset($_POST['submit'])){
  $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
  $firstname = trim($firstname);
  $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
  $lastname = trim($lastname);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $email = trim($email);
  $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
  $subject = trim($subject);
  $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
  //insert into 'contact' table with listserv = NULL
  $contactsql = "INSERT INTO contact (first_name, last_name, email, listserv, subject, message) VALUES (:firstname, :lastname, :email, NULL, :subject, :message)";
  $contactparams = array(
    ':firstname' => $firstname,
    ':lastname' => $lastname,
    ':email' => $email,
    ':subject' => $subject,
    ':message' => $message
  );
  $add_message = exec_sql_query($db, $contactsql, $contactparams);

  $firstName = $_REQUEST["firstname"];
  $lastName = $_REQUEST["lastname"];
  $email = $_REQUEST["email"];
  $subject = $_REQUEST["subject"];
  $message = $_REQUEST["message"];
  session_start();
  $_SESSION['firstname'] = $firstName;
  $_SESSION['lastname'] = $lastName;
  $_SESSION['email'] = $email;
  $_SESSION['subject'] = $subject;


  // redirect to to submit page
  header("Location: message-submitted.php");
  return;
} else {
$isFirstNameValid = true;
$isLastNameValid = true;
$isEmailValid = true;
$isSubjectValid = true;
$isMessageValid = true;
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
  <!-- Contact Info -->
  <div id="pagecontainer">
    <div id="contactinfocontainer">
      <h1 class="contact"> Contact Information</h1>
      <p class="contact_info"> E-mail: buds@cornell.edu</p>
      <h3 class="contact_info_heading"> Captains 2017-2018</h3>
      <p class="contact_info"> -Lito Avila</p>
      <p class="contact_info"> -Elie Lehman</p>
      <p class="contact_info"> -Pat Voorhees</p>
      <h3 class="contact_info_heading"> Officers </h3>
      <p class="contact_info"> President: Binli Huang</p>
      <p class="contact_info"> Treasurer: Plato Deliyannis</p>
      <p class="contact_info"> Website: Spencer DeRoos, Vinny Calderon</p>
      <p class="contact_info"> Digital Content Creator: Lucas Bulger</p>
    </div>

  <!-- Contact form -->
    <div id="contactcontainer">
      <h1 class="contact"> Contact Us </h1>
      <form id="contact_form" action="contact.php" method="post" name="contact">
      <div>
        <label for="firstname"> First Name*: </label>
        <input type="text" id="firstname" name="firstname" required>
      </div>
      <div>
        <label for="lastname"> Last Name*: </label>
        <input type="text" id="lastname" name="lastname" required>
      </div>
      <div>
        <label for="email"> E-mail*: </label>
        <input type="email" id="email" name="email" required>
      </div>
      <div id="listservgrid">
        <label for="listserv" id="listservlabel"> Join our Listserv: </label>
        <input type="checkbox" name="listserv" value="1" id="listserv" checked>
      </div>
      <div>
        <label for="subject"> Subject*: </label>
        <input type="text" id="subject" name="subject" required>
      </div>
      <div>
        <label for="message"> Message: </label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <button type="submit" id="submit" name="submit">Send</button>
      </form>
    </div>
  </div>

    <?php include('includes/footer.php')?>
  </body>
</html>
