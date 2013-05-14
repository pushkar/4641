<?php
$page = "reading";
include "header.php";
include "menu.php";
include "data.php";
?>

<div class="container-fluid">
<h4>Course Material</h4>
<p>Required Text:</p>
<?php list_other($textbook_req_list); ?>

<p>Optional Text:</p>
<?php list_other($textbook_opt_list); ?>

<h4>Reading List</h4>
<?php list_reading($reading_list); ?>
</div>

<?
include "footer.php";
?>
