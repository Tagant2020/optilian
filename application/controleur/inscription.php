<?php
if(isset($_POST)){
	include_once('../model/bigModelForMe.php');
			foreach($_POST as $key => $val){
				if($key =='mdp'){
					$_POST[$key] = sha1(htmlspecialchars(addslashes($val)));
				}else{
					$_POST[$key] = htmlspecialchars(addslashes($val));
				}
			}
			$envoi = $manager->insertion('users',$_POST);
			$id = $manager->dernierIdInserer();
			$envoi2 = $manager->selectionUnique('users',array('*'),$id,'num_user');
			if(count($envoi2) == 0){
				echo json_encode('');
			}else{
				echo json_encode($envoi2);
			}
			
 }
?>