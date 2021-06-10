<?php
		if(isset($_POST)){
			include_once('../model/bigModelForMe.php');
			$t = sha1($_POST['mdp']);
			$tab = array(
				'name'=>$_POST['name'],
				'mdp'=>sha1($_POST['mdp'])
			);
			$envoi = $manager->exists('users',$tab);
			if($envoi != false){
				echo json_encode('exist');
			}else{
				echo json_encode('no_exist');
			}
			
		}
		
?>