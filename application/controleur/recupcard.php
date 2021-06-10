<?php
		include_once('../model/bigModelForMe.php');
		$id= $_POST['id'];
		$envoi = $manager->selectionUnique2('card',array('*'),"user_num = $id");
		echo json_encode($envoi);
?>