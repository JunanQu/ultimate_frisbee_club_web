<?php

include('includes/init.php');
$current_page_id="delete";

// declare the current location, utilized in header.php but have it not show up :)
//get because post will have it in the url which is gross
$id = $_GET['id'];
global $id;

//select all the images and delete them from the file system
$records = exec_sql_query($db, "SELECT * FROM schedule WHERE id = $id")->fetchAll(PDO::FETCH_ASSOC);
foreach($records as $record){

delete_event($id);
header("Location:schedule.php");

}


?>
<!DOCTYPE html>
<html>


</html>
