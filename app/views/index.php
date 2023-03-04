<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <a href="add.php" class="btn btn-primary">AJOUTER</a>

        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>CLASSE</th>
                <th>ACTION</th>
            </thead>
            <tbody>
                <?php
                    foreach($data as $etudiant){
                ?>
                 <tr>
                    <td><?=$etudiant['id']?></td>
                    <td><?=$etudiant['nom']?></td>
                    <td><?=$etudiant['prenom']?></td>
                    <td><?=$etudiant['classe']?></td>
                    <td>
                        <a href="index.php?controllers=etudiant&action=delete&id=<?=$etudiant['id']?>" class="btn btn-danger">Delete</a>
                        <a href="index.php?controllers=etudiant&action=edit&id=<?=$etudiant['id']?>" class="btn btn-warning">edit</a>
                    </td>
                </tr>
                <?php

                    }

                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>