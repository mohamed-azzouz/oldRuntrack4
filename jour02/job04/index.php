<!DOCTYPE html>
<html>
<head>
	<title>Runtrack4/Jour02</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header>
		<nav class="blue darken-1 nav-wrapper">
			<ul id=" nav-mobile" class=" right hide-on-med-and-down">
				<li><a href="index.php">Accueil</a></li>
				<li><a href="index.php">Inscription</a></li>
				<li><a href="index.php">Connexion</a></li>
				<li><a href="index.php">Rechercher</a></li>
			</ul>
		</nav>

		 
	</header>

	<main >
		<section class="row">
			<form action="#" class="col s12">
				Civilité :
				<label>
					
					<input name="group1" type="radio" />
					<span>Mr</span>

				</label>
				
				<label>
					<input name="group1" type="radio" />
					<span>Mme</span>
				</label>
				<br />

				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">person</i>
						<input id="first_name" type="text" class="validate">
						<label for="first_name">Prenom</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons prefix">person</i>
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Nom</label>
					</div>
				</div>

				<div class="row">
					
					<div class="input-field col s12">
						<i class="material-icons prefix">location_on</i>
						<input id="adresse" type="text" class="validate">
						<label for="adresse">Adresse</label>
					</div>



					<div class="input-field col s12">
						<i class="material-icons prefix">mail</i>
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
					
					
				</div>

				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons prefix">remove_red_eye</i>
						<input id="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>




					<div class="input-field col s6">
						<i class="material-icons prefix">remove_red_eye</i>
						<input id="password" type="password" class="validate">
						<label for="password">Confirm Password</label>
					</div>
				</div>
				
				HOBBIES :<br />
				<label>
					<input type="checkbox" />
					<span>Informatique</span>
				</label>
				<br />

				<label>
					<input type="checkbox" />
					<span>Voyages</span>
				</label>
				<br />

				<label>
					<input type="checkbox" />
					<span>Sport</span>
				</label>
				<br />

				<label>
					<input type="checkbox" />
					<span>Sport</span>
				</label>
				<br />
				
			
				<button class="btn waves-effect waves-light" type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>

				
			</form>
		</section>
		
	</main>

	<footer class="blue darken-1 page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					
				</div>
				
				<ul class="col l4 offset-l2 s12">
					<li><a class="grey-text text-lighten-3" href="index.php">Accueil</a></li>
					<li><a class="grey-text text-lighten-3" href="index.php">Inscription</a></li>
					<li><a class="grey-text text-lighten-3" href="index.php">Connexion</a></li>
					<li><a class="grey-text text-lighten-3" href="index.php">Rechercher</a></li>
				</ul>
			</div>
		</div>
	</footer>

	


</body>
</html>