<?php //**************    FONCTIONS  ***************\\

//initialisation des variables 
$oeuvre=[];
$id=0;
// *************    Fonction AfficherToutOeuvres    *************\\ 
// Parcours $oeuvres et cree un article contenant les attribut de chaques oeuvres pour chacune\\
function AfficherToutOeuvres(array $oeuvres){
    $id=1;
    foreach($oeuvres as $oeuvres){?>
       
        <article class="oeuvre">
        <?php
        echo'<a href=oeuvre.php?id='.$id.'>';
        echo'<img src="'.$oeuvres["img"].'">';
        echo'<h2>'.$oeuvres["titre"];  
        echo'<p class="description">'.$oeuvres["artiste"]; 
            ?>
        </a>
        </article>
        <?php $id++;
    }
}
// *************    Fonction AfficherOeuvre    *************\\ 
// Parcours $oeuvres et affiche tout le contenu de chaques oeuvres \\
function AfficherOeuvre(array $oeuvres, $id){
    $oeuvre=[];
    foreach($oeuvres as $oeuvres){
        if($oeuvres["id"]==$id){
            
            $oeuvre= [
                "img" => $oeuvres["img"],
                "titre" => $oeuvres["titre"],
                "artiste" => $oeuvres["artiste"],
                "description"=> $oeuvres["description"],
            ];
        }
       
        
    }
    ?>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
    <?php echo '<img src="'.$oeuvre["img"].'"alt="Aashaaheen Baadal">';?>
        </div>
        <div id="contenu-oeuvre">
            <h1>
                <?php echo $oeuvre["titre"];?>
            </h1>  
            <p class="description"><?php echo $oeuvre["artiste"];?>
            <p class="description-complete"><?php echo $oeuvre["description"]; ?>
        </div>

    <?php return $oeuvre;
}
?>