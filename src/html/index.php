<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Don</title>
</head>

<body>

    <?php
    

      $poulies=array();
      $taquets=array();
      $voiles=array();

      function addObject($name,$description,$count){
        $object= new stdClass();
        $object->name=$name;
        $object->description=$description;
        $object->count=$count;
        $object->image="https://bulma.io/images/placeholders/1280x960.png";
        return $object;
      }
      
      for($i=0;$i<5;$i++){
        $poulies[]=addObject("Poulie ".$i,"P Lorem ipsum dolor sit amet.",-($i-3)*($i-3)+10);
        $taquets[]=addObject("Taquet ".$i,"T Lorem ipsum dolor sit amet.",-($i-3)*($i-3)+10);
        $voiles[]=addObject("Voile ".$i,"V Lorem ipsum dolor sit amet.",-($i-3)*($i-3)+10);
      }
      
      $familles=[$poulies,$taquets,$voiles];
     

    for($i=0;$i<count($familles);$i++){
        $objets=$familles[$i];
        echo "

        <table 
        class='
            table 
            is-bordered 
            is-striped
            is-narrow'
        >
            <tr class='ignore'>
                <th>Object</th>
                <th>Count</th>
            </tr>";
        for($j=0;$j<count($objets);$j++){
            $objet=$objets[$j];
            echo "
            <tr 
                class='more-info' 
                data-description='".$objet->description." '
                data-image='".$objet->image."'
            >
                <td class=''>".$objet->name."</td>
                <td>".$objet->count."</td>    
            </tr>";
        }
        echo "</table>";
    }
    
    ?>



    <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title" id="modal-title"></p>
                <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <img src="" alt="Image" id="modal-image">
                <p id="modal-content"></p>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" id="donate">Faire un don</button>
                <button class="button" id="cancel">Annuler</button>
            </footer>
        </div>
    </div>


    <script src='../js/main.js'></script>


</body>

</html>