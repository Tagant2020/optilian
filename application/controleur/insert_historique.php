<?php
if(isset($_POST)){
	include_once('../model/bigModelForMe.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	$_POST['ip'] = $ip;
	$envoi0 = $manager->selectionUnique2('historique',array('*'),"ip = '$ip'");
	if(count($envoi0) > 0){
		$envoi1 = $manager->modifier('historique',$_POST,"ip = '$ip'");
		echo json_encode('Modification bien éffectuée');
	}else{
		$envoi = $manager->insertion('historique',$_POST,'');
		$id = $manager->dernierIdInserer();
		echo json_encode("insertion bien éffectuée");
	}
}	
?>