<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-3">

        <form method="POST">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" class="form-control">
            <label for="classe">classe</label>
            <input type="text" name="classe" class="form-control">
            <input type="submit" name="submit" value="add" class="btn btn-danger">           
        </form>
    </div>
</body>
</html>