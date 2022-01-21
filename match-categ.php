


<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Choix catégories</title>

<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
  <body>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="index.php">Open Parc Lyon Billeterie</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
		
        <li><a href="index.php">Accueil</a></li>
		
        <li><a href="liste-matchs-simple.php">Simple</a></li>
	   
        <li><a href="liste-matchs-double.php">Double</a></li>
        <li class="hidden-space">hola<li>

	   <li>
          <a href="mon_espace.php" class="desktop-item">Espace Perso</a>
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

  <div class="main-content">
        <div class="match-top">

            <div class="match-info">
               <header> <h2 class="match-title"> Match <?php /* echo getidmatch()." - ".gettour()." - ".getnomjoueur1()." vs ".getnomjoueur2()*/ ?> </h2> </header>
            

            
                <img class="image-stade" src="./asset/open-stade.png" alt="image 3D du stade">
            </div>

        </div>

        <div class="match-bottom">
            <div class="categorie loge">
                    <header> Loges </header>
                    <h3> <?php /* getnbplaceRestante() */?> places restantes </h3>
                    <button class="slide" onclick="window.location.href = 'match-billets.php?cat=loge';">ACCES >></button>
                     <!--- Rediriger vers le billet correspondant au match--->
            </div>

            <div class="categorie cat1">
                    <header> Catégorie 1 </header>
                    <h3> <?php /* getnbplaceRestante() */?> places restantes </h3>
                    <button class="slide" onclick="window.location.href = 'match-billets.php?cat=1';">ACCES >></button>
                    <!--- Rediriger vers le billet correspondant au match--->
            </div>

            <div class="categorie cat2">
                    <header> Catégorie 2 </header>
                    <h3> <?php /* getnbplaceRestante() */?> places restantes </h3>
                    <button class="slide" onclick="window.location.href = 'match-billets.php?cat=2';">ACCES >></button>
                     <!--- Rediriger vers le billet correspondant au match--->
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