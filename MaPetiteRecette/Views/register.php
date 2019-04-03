<?php require('../Templates/header.php'); ?>

<content>
	<div class="row">
		<div class="col-md-1 bg-margin-page"></div>
		<div class="col-md-10 bg-page">
			<div class="registerPage">
				<form action="">
					<div class="containerForm">
					  	<h1>Inscription</h1>
					  	<p>S'il vous plaît, merci de remplir complètement ce formulaire.</p>
					  	<hr>
					  	<label for="pseudo"><b>Pseudo</b></label>
					  	<input class="inputText" type="text" placeholder="Votre pseudo" name="pseudo" required>
					  	<label for="psw"><b>Mot de passe</b></label>
					  	<input class="inputText" type="password" placeholder="Votre mot de passe" name="psw" required>
				    	<label for="psw-repeat"><b>Confirmer votre mot de passe</b></label>
				    	<input class="inputText" type="password" placeholder="Votre mot de passe " name="psw-repeat" required>
					    <label>
					    	<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Se souvenir de moi
					    </label>
				    	<p>En créant votre compte, vous accepter nos <a href="#" style="color:dodgerblue">CG et Déclaration de confidentialité</a>.</p>
				    	<div class="clearfix">
				      		<button type="button" class="cancelbtn formBtn">Retour</button>
				      		<button type="submit" class="signupbtn formBtn">S'inscrire</button>
				    	</div>
				  	</div>
				</form>
			</div>
		</div>
		<div class="col-md-1 bg-margin-page"></div>
	</div>
</content>

<?php require('../Templates/footer.php'); ?>