<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon projet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
   <header>
     <img class="logo" alt="echec" src="image/Logo.png">

   <div class="titre">
        <h1>Mon projet</h1>
        <h2>By Houssam chama</h2>
      </div>
     </header> 


 <section class="element">
    <?php foreach($projects as $information):?>


       <?php  $technologies = " " ;?>

     
       
  <div class="cartes">
        <div class="carte-info">
            <img class="img-cartes" src="<?=$information['image']; ?>" alt="echec">
   
            <h2 class="titer-carte"><?=$information['title']; ?></h2>
            <p><?=$information['description']; ?> </p>

            <?php foreach($information['technologies'] as $tech):?>
               
                    <?php  $technologies .= $tech . " " ;?>
                
            <?php endforeach ;?>
             <p ><?=$technologies ?></p>


              <?php
               if ($information['status'] === 'Terminé') {
                $status = "termine";
              }
              elseif($information['status'] === 'En cours') {
                $status = "encours";
              }
            ?>
                 
                    
            <div class="badge">
            <span class="badge1"><?=$information['category']; ?> </span>
            <span class="badge2 <?=  $status ?>"><?=$information['status']; ?> </span>
            </div>
            
      
        </div>
    </div>
    <?php endforeach ;?>
</section>
<footer>



</footer>
 
</body>
</html>