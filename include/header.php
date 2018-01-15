<head>
<link href="./assets/css/screen.css" type="text/css" rel="stylesheet" />
</head>
    <header>
<ul>
    <li><a href="index.php?page=accueil">Accueil</a></li>


<?php
    if (!isset($_SESSION['login'])){
        echo ("<li><a href=\"index.php?page=login\">Login</a></li>");
        echo ("<li><a href=\"index.php?page=inscription\">Inscription</a></li>");
    }

    else{
        echo ("<li><a href=\"index.php?page=logout\">Logout</a></li>");
        echo ("<li><a href=\"index.php?page=article\">Poster</a></li>");
    }
?>


</ul>
</header>