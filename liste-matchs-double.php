<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            


          
            <title>Matchs Double</title>
			
			<link rel="stylesheet" href="./css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
		
	    <li><a href="liste-matchs-simple.php">Simple</a></li>
	   
        <li><a href="liste-match-double.php">Double</a></li>
        <li class="hidden-space">hola<li>

	   <li>
          <a href="landing.php" class="desktop-item">Espace Perso</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Espace Perso</label>
          <ul class="drop-menu">
            <!-- afficher mon espace et deconnexion si connecté sinon afficher connexion et inscription -->
            <li><a href="mon_espace.php">Mon espace</a></li>

            <li><a href="deconnexion.php">Deconnexion</a></li>
          </ul>
        </li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  <div class="choix-match-content">
    <div class="choix-match-left">

        <form action="match-double-traitement.php" method="post" class="filtre-matchs">

            <div class="filtre-match-element">
                <select name="joueur" id="select-joueur" class="match-select"> <!-- remplir choix avec ceux de la BD -->
                    <option value="">Choisir Equipe</option>
                    <option value="2">2</option>
                    <option value="2">3</option>
                    <option value="4">4</option>           
                </select>
            </div>

            <div class="filtre-match-element">

                <select name="date" id="select-date" class="match-select"> <!-- remplir choix avec ceux de la BD -->
                    <option value="">Choisir un jour</option>
                    <option value="2">2</option>
                    <option value="2">3</option>
                    <option value="4">4</option>          
                </select>
            </div>

            <div class="filtre-match-element">
                <select name="tour" id="select-tour" class="match-select"> <!-- Pas besoin ici ??? -->
                    <option value="">Choisir un tour</option>
                    <option value="Q">Qualification</option>
                    <option value="1tour">1er tour</option>
                    <option value="1/8">1/8E de finale</option>
                    <option value="1/4">1/4 de finale</option>  
                    <option value="1/2">DEMI-FINALE</option> 
                    <option value="F">FINALE</option>      
                </select>
            </div>

            <div class="filtre-match-button filtre-match-element">
                <button type="submit" class="slide" onclick="window.location.href = 'match-categ.php';">FILTRER</button>
            </div>

        </form>
    </div>

    <div class="choix-match-right">
        <div class="choix-match-title">
            <h2> Liste des matchs du tournoi Double </h2>
        </div>

        <div class="choix-match-liste"> 

            <!-- foreach de tout les matchs simple de la BD -->

            <a href="match-categ.php"><!-- Lien à relier au match choisis-->
                <div class="liste-match-element">
                    <header>Joueur 1/Joueur 2 vs Joueur3/joueur4 <header> <!---afficher informations à partir de la BD -->
                    <h2> A tel date </h2>
                    <h2> Tour </h2>
                </div>
            </a>

            <a href="match-categ.php"><!-- Lien à relier au match choisis-->
                <div class="liste-match-element">
                    <header>Joueur 1/Joueur 2 vs Joueur3/joueur4 <header>
                    <h2> A tel date </h2>
                    <h2> Tour </h2>
                </div>
            </a>

            
            <a href="match-categ.php"><!-- Lien à relier au match choisis-->
                <div class="liste-match-element">
                    <header>Joueur 1/Joueur 2 vs Joueur3/joueur4 <header>
                    <h2> A tel date </h2>
                    <h2> Tour </h2>
                </div>
            </a>

             
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