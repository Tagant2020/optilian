<?php
if(isset($_POST)){
	include_once('../model/bigModelForMe.php');
			foreach($_POST as $key => $val){
				$_POST[$key] = htmlspecialchars(addslashes($val));
			}
			$envoi = $manager->insertion('card',$_POST);
			$id = $manager->dernierIdInserer();
			$envoi2 = $manager->selectionUnique('card',array('*'),$id,'num_card');
			if(count($envoi2) == 0){
				echo json_encode('');
			}else{
				echo json_encode($envoi2);
			}
			
 }
?>