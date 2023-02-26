<?php
session_start();
if (isset($_REQUEST["submit"])) {
	if (isset($_FILES["profilepicture"]) && !empty($_FILES["profilepicture"]["name"])) {
		$target_file = basename($_FILES["profilepicture"]["name"]);
        $_SESSION['profilepicture'] = $target_file;
	} 
}
header('Location: changeprofilepicture.php');
?>