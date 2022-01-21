


<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Choix billets</title>

<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<script type="text/javascript" src="./js/match-billets.js"></script>
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




<div class="billets-page-content">

    <div class="billets-form-content">
    
        <div class="billets-top">

            <div class="billets-image">
                <img src="./asset/openparc-logo.png" alt="logo open parc">
            </div>

            <div class="billets-info">
                <header><strong> {{ MATCH }}</strong></header>
                <h2> {{ date }}</h2>
                <h2> {{ lieu }}</h2>
                <h2> {{ CATEGORIE }} </h2>
            </div>
            
        </div>

        <div class="billets-bottom">
            <form action="./php/match-billets-traitement.php" class="billets-form" method="post">

                <div class="billets-form-element element-borderbottom">
                    <label for="type-select">Types de billets</label>
                


                    <select onchange="reduce_check(this);">

                        <option value="GP">Grand public</option>
                        <option value="L">Licencié</option>
                        <option value="JDS">Journée de la solidarité</option>
                    </select>

                    <div  id="ifL" style="display: none;">
                        <label for="reduce_code"> Ajoutez votre n°Licence  </label> <input type="text" id="reduce_code" name="reduce_code" /><br/>
                
                    </div>

                    <div  id="ifJDS" style="display: none;">
                        <label for="reduce_code"> Ajoutez votre n°Associatif  </label> <input type="text" id="reduce_code" name="reduce_code" /><br/>
                
                    </div>
                </div>

                <div class="billets-form-element element-borderbottom" id="ifReduce" style="display:none;">
                    <label for="reduce_code"> Ajoutez votre n°Licence : </label> <input type="text" id="reduce_code" name="reduce_code" /><br/>
                
                </div>

                <div class="billets-form-element element-borderbottom">
                    <label> {{ prix unitaire }} </label>
                </div>

                <div class="billets-form-element element-borderbottom">
                    <label for="nb-select">Nombre de place</label>

                    <select name="nbplace" id="nb-select" class="billets-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="billets-form-element element-borderbottom">
                    <label> TOTAL : {{ prix x nbplace }} </label>
                </div>   
                

                <div class="billets-form-button">
                    <button type="submit" class="billets-submit">
                        Payer les places
                    </button>
                </div>   

            </form>
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

<script>
</script>

</html>
