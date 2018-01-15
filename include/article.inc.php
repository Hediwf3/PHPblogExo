
<?php
if(isset($_POST["formulaireArticle"])) {
    $tabErreur = array();

    $titre = $_POST['titre'];
    $sousTitre = $_POST['sousTitre'];
    $contenu = addslashes($_POST['contenu']);








    if($_POST["titre"] == "")
        array_push($tabErreur, "Veuillez saisir un titre");

    if($_POST["sousTitre"] == "")
        array_push($tabErreur, "Veuillez saisir un sous titre");

    if($_POST["contenu"] == "")
        array_push($tabErreur, "Veuillez saisir un contenu");



    if(count($tabErreur) != 0) {
        $message = "<ul>";

        for($i = 0 ; $i < count($tabErreur) ; $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }

        $message .= "</ul>";
        echo($message);

        include("./include/formArticle.inc.php");
    }

    else {
        $connexion = mysqli_connect("localhost", "root", "", "nfactoryblog");

        if (!$connexion) {
            die("Erreur MySQL " . mysqli_connect_errno() . " : " . mysqli_connect_error());
        }

        else {



            $requete = "INSERT INTO t_articles (ID_ARTICLE, ARTTITRE, ARTCHAPO,
                        ARTCONTENU, ARTDATE)
                        VALUES (NULL, '$titre', '$sousTitre', '$contenu', NULL);";

            mysqli_query($connexion, $requete);
            mysqli_close($connexion);

            echo('Article Poster');
            echo  $contenu;
        }



    }
}

else {

    include("./include/formArticle.inc.php");
}
