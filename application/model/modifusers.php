<?php
if(isset($_POST)){
	include_once('../model/bigModelForMe.php');
	$id = $_POST['id'];
	unset($_POST['id']);
	$envoi1 = $manager->modifier('users',$_POST,'num_users='.$id);
	$envoi2 = $manager->selectionUnique('users',array('*'),$id,'num_users');
	echo json_encode($envoi2);
}
		
?>