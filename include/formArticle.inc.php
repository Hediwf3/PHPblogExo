<head>
    <link href="./assets/css/screen.css" type="text/css" rel="stylesheet" />

    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="./tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>

</head>

<form method="post" action ="#">

    <div>
        <label for="titre">Titre : </label>
        <input type="text" name="titre" />
    </div>
    <div>
        <label for="sousTitre">Sous-titre : </label>
        <input type="text" name="sousTitre" />
    </div>
    <div>
        <label for="contenu">contenu</label>
        <textarea type="textarea" name="contenu"/> </textarea>
    </div>
    <div>
        <select id="interet" multiple>
            <option value="musique">Musique</option>
            <option value="cinema">Cinema</option>
            <option value="sport">Sport</option>
            <option value="jeuvideo">Jeu-Vidéo</option>
            <option value="lecture">Lecture</option>
        </select>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Clique-moi !" name="formulaireArticle" />
    </div>


</form>

