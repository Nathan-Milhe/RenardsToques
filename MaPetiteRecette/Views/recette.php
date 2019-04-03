<?php require('../Templates/header.php'); ?>

<content>
	<div class="row">
		<div class="col-md-1 bg-margin-page"></div>
		<div class="col-md-10 bg-page">
			<div class="row" style="margin-top: 30px;">
				<div class="col-md-6 textCenter">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 borderElement">
							<h3 class="h3Style">Rechercher une recette par nom</h3>
							<form class="formSearch" action="">
								<label class="labelFormInput" for="nameRecipe">Nom de la recette</label>
								<input class="inputForm" type="text" name="nameRecipe">
								<label class="labelFormInput" for="nameAuthor">Nom de l'auteur</label>
								<input class="inputForm" type="text" name="nameAuthor">
								<label class="labelFormInput" for="categorie">Catégorie</label>
								<select class="inputForm" name="categorie">
									<option value="none"> --- </option>
									<option value="none">Apétitifs</option>
									<option value="none">Boissons</option>
									<option value="none">Entrées</option>
									<option value="none">Plats</option>
									<option value="none">Viandes</option>
									<option value="none">Poissons</option>
									<option value="none">Légumes</option>
									<option value="none">Desserts</option>
									<option value="none">Glaces</option>
									<option value="none">Pâtisseries</option>
									<option value="none">Fromages</option>
									<option value="none">Fruits</option>
								</select>
								<button class="searchBtnForm">Rechercher</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6 textCenter">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 borderElement">
							<h3 class="h3Style">Rechercher une recette par ingrédient</h3>
							<form class="formSearch" action="">
								<label class="labelFormInput" for="ingredient1">Ingrédient 1</label>
								<input class="inputForm" type="text" name="ingredient1">
								<label class="labelFormInput" for="ingredient2">Ingrédient 2</label>
								<input class="inputForm" type="text" name="ingredient2">
								<label class="labelFormInput" for="ingredient3">Ingrédient 3</label>
								<input class="inputForm" type="text" name="ingredient3">
								<button class="searchBtnForm">Rechercher</button>
							</form>
						</div>
						<div class="col-md-1"></div>
					</div>
					
				</div>
			</div>
			<div class="row" style="margin: 50px 0;">
				<div class="col-md-1"></div>
				<div class="col-md-10 borderElement">
					<h3 class="textCenter h3Style" style="width: 100%;">Recette aléatoire</h3>
					<hr>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="row padding10">
									<div class="col-md-6">
										<img class="borderImg" src="../Templates/Images/Recette/patisseries.jpg" width="100%">
									</div>
									<div class="col-md-6">
										<h5>Nom de la recette</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row padding10">
									<div class="col-md-6">
										<img class="borderImg" src="../Templates/Images/Recette/viandes.jpg" width="100%">
									</div>
									<div class="col-md-6">
										<h5>Nom de la recette</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="row padding10">
									<div class="col-md-6">
										<img class="borderImg" src="../Templates/Images/Recette/poissons.jpg" width="100%">
									</div>
									<div class="col-md-6">
										<h5>Nom de la recette</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row padding10">
									<div class="col-md-6">
										<img class="borderImg" src="../Templates/Images/Recette/boissons.jpg" width="100%">
									</div>
									<div class="col-md-6">
										<h5>Nom de la recette</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="row padding10">
									<div class="col-md-6">
										<img class="borderImg" src="../Templates/Images/Recette/gateau_chocolat.jpg" width="100%">
									</div>
									<div class="col-md-6">
										<h5>Nom de la recette</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row padding10">
									<div class="col-md-6">
										<img class="borderImg" src="../Templates/Images/Recette/glaces.jpg" width="100%">
									</div>
									<div class="col-md-6">
										<h5>Nom de la recette</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<div class="col-md-1 bg-margin-page"></div>
	</div>
</content>

<?php require('../Templates/footer.php'); ?>