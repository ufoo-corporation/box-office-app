<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            


          
            <title>Connexion</title>
			
			<link rel="stylesheet" href="./css/style.css">
   
        </head>

        <body>
        <nav>
    <div class="wrapper">
      <div class="logo"><a href="index.php">Atp Lyon Billeterie</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
		
        <li><a href="index.php">Accueil</a></li>
		
	    <li><a href="simple.php">Simple</a></li>
	   
        <li><a href="double.php">Double</a></li>
        <li class="hidden-space">hola<li>

	   <li>
          <a href="landing.php" class="desktop-item">Espace Perso</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Espace Perso</label>
          <ul class="drop-menu">
            <li><a href="mon_espace.php">Mon espace</a></li>

            <li><a href="deconnexion.php">Deconnexion</a></li>
          </ul>
        </li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  <div class="register-content">

        <div class="register-form">
        <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div>
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div>
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div>
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'pseudo_length':
                        ?>
                            <div>
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div>
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            <form action="register-traitement.php" method="post">
                <h2 class="form-title">CONNEXION</h2>       
                <div class="form-element">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="on">
                </div>
                <div class="form-element">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="on">
                </div>
                <div class="form-element">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-element">
                <input type="password" name="password_retype" class="form-control" placeholder="Confirmation du mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-element">
                    <button type="submit" class="form-btn ">VALIDER</button>
                </div>   
            </form>
            <div class="text-redirect">
            <p> Vous avez déja un compte ? <a href="login.php">Se connecter</a></p>
            </div>
        </div>
		
</div>	



		<footer class="footer">
         <div class="footer-top">
            <div class="footer-about">
                <h3> A PROPOS </h3>
                <p> Le tournoi de tennis de Lyon est un tournoi international de tennis masculin et féminin des circuits professionnels de l'ATP World Tour et de la WTA. Organisé par Sport Plus Conseil, le tournoi regroupe 28 joueurs et joueuse en simple et 16 équipe en binôme.
                </p>
            </div>

            <div class="footer-links">
                <h3> LIENS UTILES </h3>
                <ul>
                    <li><a href="https://openparc.com/" target="_blank"> Site web </a></li>
                    <li><a href="https://twitter.com/OpenParcARA" target="_blank"> Twitter </a></li>
                    <li><a href="https://www.facebook.com/openparcauvergnerhonealpes/" target="_blank"> Facebook </a></li>
                <ul>
            </div>
    </div>

    <div class="footer-bottom">
    <p>Copyright © 2021 IUT info Lyon 1 </p>
    </div>
</footer>
       
        </body>
</html>