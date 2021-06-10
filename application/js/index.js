$(function(){ //doliprane,ixprim,ventoline,pivalone
	
	$('body').on('click','button#efface',function(e){
		e.preventDefault();
		$('body input.reseteur').trigger('click');
	})
	$('body').on('click','button#encrypter,button#decrypter',function(e){
		e.preventDefault();
		var th = $(this);
		var nom = th.attr('name');
		if(nom == 'clair'){
			var texte_clair = $('body textarea#texte_clair').val();
			var clef = $('body input#clef').val();
			var date1 = new Date();
			var datess = ((date1.getMonth() + 1) + '/' + (date1.getDate()) + '/' + date1.getFullYear() + " " + date1.getHours() + ':'
                     + ((date1.getMinutes() < 10) ? (date1) : (date1.getMinutes())) + ':' + ((date1) ? ("0" + date1
                     .getSeconds()) : (date1.getSeconds())));
			var clef= $('body input#clef').val();
			var action= 'c';
			var statut = 1;
			if(texte_clair != undefined || texte_clair != ''){
				if(clef != ''){
					var encrypted = CryptoJS.AES.encrypt(JSON.stringify({ texte_clair }),clef);
					$('body textarea#texte_crypte').text(encrypted);
					var statut = '1';
					$.ajax({
						url:'controleur/insert_historique.php',
						type:'post',
						dataType:'json',
						data:'clef='+clef+'&date='+datess2+'&action='+action+'&statut='+statut,
						success:function(data){
							alert(data);	
						}
					})
				}else{
					$('body div#error_clef').removeAttr('style');
				}
			}else{
					$('body div#error_texte').removeAttr('style');
			}
			
			
			//U2FsdGVkX1+xCGXPASAzxr1HwKx2a0R50i/dULvZKtmOx3sNq+8H2llgH6SHWePR
		}
		else{
			var texte_crypte = $('body textarea#texte_crypte').val();
			
			var clef = $('body input#clef').val();
			
			var decrypted = CryptoJS.AES.decrypt(texte_crypte,clef);
			alert(decrypted);
			$('body textarea#texte_clair').text(decrypted).toString(CryptoJS.enc.Utf8);
		}
    });
	
})
 