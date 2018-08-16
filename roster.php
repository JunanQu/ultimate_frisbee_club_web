<?php include('includes/init.php');

$current_page_id="roster";

$db = open_or_init_sqlite_db('cornellbuds.sqlite', "init/init.sql");

const SEARCH_FIELDS = [
  "num" => "By Team Number",
  "name" => "By Name",
  "year" => "By School Year",
  "major" => "By Major"
];

$sql = "SELECT num, name, year, major FROM roster;";
$record = exec_sql_query($db, $sql, NULL)->fetchALL();

$notification = array();

if (isset($_GET['search']) and isset($_GET['category'])) {
    $valid_search = TRUE;
    $category = filter_input(INPUT_GET, 'category', FILTER_SANITIZE_STRING);
    if (in_array($category, array_keys(SEARCH_FIELDS))) {
    $search_field = $category;
    } else {
    array_push($notification, "Invalid category.");
    $valid_search = FALSE;
    }
} else {
  $valid_search = FALSE;
  $category = NULL;
  $search = NULL;
}

$search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
$trimmed_search = trim($search);

function print_record($record) {
  ?>
  <tr>
    <td><?php echo $record["num"];?></td>
    <td><?php echo $record["name"];?></td>
    <td><?php echo $record["year"];?></td>
    <td><?php echo $record["major"];?></td>
  </tr>
  <?php
}
 ?>

<?php
if (isset($_POST["submit"]) ) {
  $db->beginTransaction();
  $new_number=filter_input(INPUT_POST, 'member_number', FILTER_SANITIZE_STRING);
  $new_name=filter_input(INPUT_POST, 'member_name', FILTER_SANITIZE_STRING);
  $new_year=filter_input(INPUT_POST, 'member_year', FILTER_SANITIZE_STRING);
  $new_major=filter_input(INPUT_POST, 'member_major', FILTER_SANITIZE_STRING);
  $sql = "INSERT INTO roster (num, name, year, major) VALUES (:new_number, :new_name, :new_year, :new_major);";
  $params = array(
  ':new_number' => $new_number,
  ':new_name' => $new_name,
  ':new_year' => $new_year,
  ':new_major' => $new_major,
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
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <script src="scripts/dropdown.js"></script>

  <title>Cornell Buds</title>
</head>
<body>

<?php include("includes/header.php");?>

<form id="search" action="roster.php" method="get">
  <select id="category_button" name="category">
    <option value="" selected disabled>Search By...</option>
    <?php
    foreach(SEARCH_FIELDS as $field_name => $category){
      ?>
      <option value="<?php echo $field_name;?>"><?php echo $category;?></option>
      <?php
    }
    ?>
  </select>
  <input id="search_input" type="text" name="search"/>
  <p id="Note">Note: You must select a category for search. Otherwise all entries will be displayed below.</p>
  <button id="search_button" type="submit">Search!</button>
</form>


<?php
if ($valid_search) {
?>
  <hr />
  <h2 class="searchTitle">Search Results</h2>
  <hr />
  <?php
  $sql = "SELECT * FROM roster WHERE " . $search_field . " LIKE '%' || :search || '%';";
  $params = array(':search' => $search);
} else {
  ?>
  <hr />
  <h2 class="searchTitle">Full Roster</h2>
  <hr />
  <?php
  $sql = "SELECT * FROM roster";
  $params = array();
}

$records = exec_sql_query($db, $sql, $params)->fetchAll();
if (isset($records) and !empty($records)) {
  ?>
  <table>
    <tr>
      <th>Number</th>
      <th>Name</th>
      <th>Year</th>
      <th>Major</th>
    </tr>
    <?php
    foreach($records as $r) {
      print_record($r);
    }
    ?>
  </table>
  <?php
} else {
  echo "<p id='no_results'>No results for '" . $search . "'.</p>";
}
?>
<?php

if ($current_user == "captain") {
        echo'
        <div id="upload_frame">
        <h2 class="uploaded-message">';
        print_messages();
        echo '</h2>
        <form id="upload_form" action="roster.php"  method="post">
            <h2>Add New Team Member:</h2>';
        echo '<label class="form-lable">New Member\'s Number</lable>
              <input type="text" name="member_number" id="member_number" required>';
        echo '<label class="form-lable">New Member\'s Name</lable>
              <input type="text" name="member_name" id="member_name" required>';
        echo '<label class="form-lable">New Member\'s Year</lable>
              <input type="text" name="member_year" id="member_year" required>';
        echo '<label class="form-lable">New Member\'s Major</lable>
              <input type="text" name="member_major" id="member_major" required>';
        echo' <Button type="submit" name="submit">Submit</Button>
          </form>
        </div>';

}
?>

<?php include("includes/footer.php");?>
</body>
</html>
