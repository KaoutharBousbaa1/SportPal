<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset = "utf-8" />
        <link rel = "stylesheet", href = "Signup.css" />
        <title>formulaire</title>
    </head>
    <body>
        <div class = "sectionone">
            <div class = "sect">
                <image src = "pic.png" width = "250" height = "190", id = "pic"/>
                <h2 style = "font-family: Poppins; color: white; font-size: 25px; text-align: center;">Find your sport partners nearby !</h2>
                <p style = "font-family: Avenir; letter-spacing: 0.5px; margin-top: 80px; line-height: 0.6cm; color: white; font-size: 15px; text-align: center;">
                    <strong>You like running? But you can't find a buddy to join you? Or maybe you like playing tennis or basketball? You can barely reach out to someone to play with? Find your favourite sport partners near to you!</strong>
                </p>
            </div>
        </div>
        <div class = "sectiontwo">
            <form action = "addproduct.php" method = "post" enctype = "multipart/form-data">
                Designation:
                <input type = "text" name = "designation" placeholder = "Designation" size = "30" maxlengh = "30" autofocus required/>
            <br/>
            <label for = desciption>Description: </label><br/>
            <textarea name = "description" id = "description" rows  = "10" cols = "30" required></textarea>
            <br/>
            <label for = "prix">Prix: </label>
            <input type = "number" min = "0" name = "prix" id = "prix" placeholder = "Prix" size = "30" maxlengh = "30" required/>
            <br/>
            <label for = "date">Date de fabrication: </label>
            <input type = "date" name = "dateFabrication" id = "date" size = "30" maxlengh = "30" required/>
            Type: <br/>
            <p>
                <label class = "poids">
                    <input type = "radio" name = "type" value = "P" />À poids
                    <span class = "checkmark2"></span>
                </label>
                <label class = "unite">
                    <input type = "radio" name = "type" value = "U" />À unité
                    <span class = "checkmark2"></span>
                </label>
            </p>
            Photo:<br/>
            <div class = "uploadfile">
                <input type = "file" name = "photo" id = "image" required hidden/>
                <label for = "image" id = "photo">Choose File</label>
            </div>
            <br/>
            <label for = "categorie">Catégorie: </label>
            
            <select name = "numCat" id = "categorie">
                <option value = "1">Électronique</option>
                <option value = "2">Alimentation</option>
                <option value = "3">Habillement</option>
                <option value = "4">Livres</option>
            </select>
            <br/>
            <input type = "submit" value = "Valider" />
            <input type = "reset" value = "Annuler" />
            </form>
        </div>
    </body>
</HTML>





