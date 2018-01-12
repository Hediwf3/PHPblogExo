<head>
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
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