<?php
		include_once('../model/bigModelForMe.php');
		$nom_user = $_POST['nom_user'];
		$id_card = $_POST['id_card'];
		
		$tab = array();
		$id_user = $manager->selectionUnique2('users',array('num_user'),"name = '$nom_user'");
		$id_user = $id_user[0]->num_user;
		$info = $manager->selectionUnique2('card',array('*'),"num_card = $id_card");
		
		foreach($info as $key=>$val){
			foreach($val as $key2=>$val2){
				$tab[$key2] = $val2;
			}
		}
		$tab['user_num'] = $id_user;
		$envoi = $manager->insertion('card',$tab);
?>