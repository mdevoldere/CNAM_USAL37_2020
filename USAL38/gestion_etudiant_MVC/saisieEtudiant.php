<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisie d'un étudiant</title>
</head>

<body>
    <form action="ajoutEtudiant.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Photo :</td>
                <td><input type="file" name="photo"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enregistrer"></td>
            </tr>
        </table>
    </form>
</body>

</html>