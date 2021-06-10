<?php
		include_once('../model/bigModelForMe.php');
		$envoi = $manager->selection('users',array('name'));
		echo json_encode($envoi);
?>