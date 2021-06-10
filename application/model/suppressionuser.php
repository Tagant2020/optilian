<?php
	if(isset($_POST['id'])){
		include_once('../model/bigModelForMe.php');
		$id = $_POST['id'];
		$envoi = $manager->supprimer('users','num_users='.$id);
		echo json_encode($envoi);
	}
?>