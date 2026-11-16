<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice-10</title>
</head>
<body>
   

<?php foreach ($informations as $info):?>
    <h1><?= $info['Nom'] ?></h1>
    <h1><?= $info['Prenom'] ?></h1>
    <h1><?= $info['Age'] ?></h1>
    <h1><?= $info['Ville'] ?></h1>
<?php endforeach;?> 
    
</body>
</html>