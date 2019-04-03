<?php require('../Templates/header.php'); ?>

<content>
	<div class="row">
		<div class="col-md-1 bg-margin-page"></div>
		<div class="col-md-10 bg-page">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form class="formAddRecipe" action="">
						<div class="row">
							<div class="col-md-3">
								<h3 class="textCenter h3Style">Image pour votre recette</h3>
								<img id="imgUser" class="imgUser" src="../Templates/Images/Page/templateRecette.jpg" width="250px" height="250px" alt="Votre image">
							</div>
							<div class="col-md-9">
								<h3 class="h3Style">Informations sur la recette</h3>
								<div class="row">
									<div class="col-md-6">
										<label class="labelFormRecette">Nom de la recette :</label>
										<input class="inputFormRecette" type="" name="">
									</div>
									<div class="col-md-6">
										<label class="labelFormRecette">Nb de personnes :</label>
										<input class="inputFormRecette" type="" name="">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label class="labelFormRecette">Difficultée :</label>
										<input class="inputFormRecette" type="" name="">
									</div>
									<div class="col-md-6">
										<label class="labelFormRecette">Prix :</label>
										<input class="inputFormRecette" type="" name="">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label class="labelFormRecette">Image de la recette :</label>
										<input class="inputFormRecette" type="file" onchange="readURL(this);">
									</div>
									<div class="col-md-6">
										<label class="labelFormRecette">Ingrédients :</label>
										<input class="inputFormRecette" type="" name="">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label class="labelFormRecette">Etapes de la recette :</label>
										<textarea class="textareaFormRecette"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							
						</div>
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<div class="col-md-1 bg-margin-page"></div>
	</div>
</content>

<?php require('../Templates/footer.php'); ?>