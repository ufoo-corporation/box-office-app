<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Acceuil</title>

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
		
	    <li><a href="simple.php">Simple</a></li>
	   
        <li><a href="double.php">Double</a></li>
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
    <div class="main-presentation">
      <div class="main-text">
       <h1> Bienvenue sur la Billeterie de l'ATP de Lyon ! </h1>
       <h2> Rendez-vous au parc de la tête d'or pour la 5e édition de l'open parc du 15 au 21 mai 2022</h2>
      </div> 
    </div>
    <div id="tournoi-simple" class="main-tournoi">
        <h1> TOURNOI SIMPLE</h1>
        
        <div class="tournament-link">
                <button class="slide" onclick="window.location.href = 'simple.php';">ACCES >></button>
        </div>
    </div>
    <div id="tournoi-double" class="main-tournoi">
        <h1> TOURNOI DOUBLE</h1>
        <div class="tournament-link">
                <button class="slide" onclick="window.location.href = 'double.php';">ACCES >></button>
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


  