<?php 
// session start
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<head>
    <?php
    include 'head.php';
    ?>
</head>

<body class="bg-secondary">
    <section>
        <?php 
        include 'header.php';
        ?>
    </section>
<section class="container-fluid col-12">
<div class="row col-12">
    <!-- coté gauche -->
    <div class="col-3">
    <a style="width : 250px" class= "btn btn-dark btn-sm" href="index.php?" role="button"> Home </a>
    <?php
        if (isset($_SESSION['Table'])){
            include 'ul.php';
        }
    ?>
    </div>
    <!-- coté droit -->
    <div class="col-9">
    <a class="col-5 btn btn-dark btn-sm" href="index.php?form" role="button">Ajouter des données</a>
    <a class="col-4 btn btn-dark btn-sm" href="index.php?form2" role="button"> Toujours plus de données</a>

    <?php
    // POST côté droit
 if (isset($_GET['form'])){
       include 'form.php';
    };
    
if (isset($_GET['form2'])){
        include 'form2.php';
     };

    if (isset($_POST['submit'])){
        if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['age']) && !empty($_POST['age']) && isset($_POST['taille']) && !empty($_POST['taille']) && isset($_POST['type']) && !empty($_POST['type'])) {
            $_SESSION['Table']=[
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'age' => $_POST['age'],
                'taille' => $_POST['taille'],
                'classe' => $_POST['type'],
                'html' => $_POST['html'],
                'css' => $_POST['css'],
                'bootstrap' => $_POST['bootstrap'],
                'php' => $_POST['php'],
                'mysql' => $_POST['mysql'],
                'javascript' => $_POST['javascript'],
                'symfony' => $_POST['symfony'],
                'color' => $_POST['color'],
                'dob' => $_POST['birthday'],
                'avatar' => $_POST['avatar']
            ];
            echo '<div class=" col-12 alert alert-success" role="alert"><strong> Les Données ont bien été enregistrées.</div>';
            // var_dump($_SESSION['Table']);
}   
    }
    // Message d'erreur
    if (isset($_POST['submit'])){
        if (empty($_POST['prenom'])){
            echo '<label for="">Prenom</label>
            <input type="text" class="form-control bg-dark text-white is-invalid" id="validation1" aria-describedby="" required>
            <div id="validation1" class="invalid-feedback">
              T\'es qui ?
            </div>';
        }
        if (empty($_POST['nom'])){
            echo '<label for="">Nom</label>
            <input type="text" class="form-control bg-dark text-white is-invalid" id="validation1" aria-describedby="" required>
            <div id="validation1" class="invalid-feedback">
              T\'es qui ?
            </div>';
        }
        if (empty($_POST['age'])){
            echo '<label for="">Age</label>
            <input type="number" min="10" max="60" class="form-control bg-dark text-white is-invalid" id="validation1" aria-describedby="" required>
            <div id="validation1" class="invalid-feedback">
              Quel âge as-tu ?
            </div>';
        }
        if (empty($_POST['taille'])){
            echo '<label for="">Taille</label>
            <input type="number" min="1.60" max="2" class="form-control bg-dark text-white is-invalid" id="validation1" aria-describedby="" required>
            <div id="validation1" class="invalid-feedback">
            Taille ?
            </div>';
        }
        if (empty($_POST['type'])){
            echo '  <div class="form-check">
            <input class="form-check-input is-invalid" type="radio" name="type" id="apprenants" value="apprenant">
            <label class="form-check-label" for="apprenants">
              Apprenants
            </label>
          </div>
          
          <div class="form-check">
            <input class="form-check-input is-invalid" type="radio" name="type" id="formateur" value="formateur">
            <label class="form-check-label" for="formateur">
              Formateur
            </label>
            <div  id="invalidCheck3Feedback" class="invalid-feedback">
            Qu\'est-tu ?.
          </div>
          </div>';
        }
//     // IMAGE
//         $target_dir = "testastos/";
//         $target_file = $target_dir . basename($_FILES["avatar"]["Avatar"]);
//         $uploadOk = 1;
//         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//         // Verifier si l'image est réel ou non
//         $check = getimagesize($_FILES["avatar"]["tmp_name"]);
//         if ($check == false){
//             echo "Ceci n'est pas une image";
//             $uploadOk = 0;
//         }
//         // PNG OU JPG
//     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
//         echo "JPG ou PNG Uniquement.";
//     $uploadOk = 0;
// }
    }
    
// DEBOGAGE
    if (isset($_SESSION['Table'])){

    if (isset($_GET['debogage'])){
        echo '<br>';
        ?>
        <pre>
        <?php 
        print_r($_SESSION['Table']) ; 
        ?>
        </pre>
        <?php

// CONCATENATION
    }   if (isset($_GET['concatenation'])){
        $nom = $_SESSION['Table']['nom'];
        $prenom = $_SESSION['Table']['prenom'];
        $age = $_SESSION['Table']['age'];
        $taille = $_SESSION['Table']['taille'];
        $classe = $_SESSION['Table']['classe'];
        echo '<br>';
        echo "$prenom $nom";
        echo '<br>' ;
        echo "j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI";
        echo '<br>';
        echo strtoupper($prenom ) . ' ';
        echo strtoupper($nom);
        echo '<br>';
        echo "j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI";
        echo '<br>';
        echo strtoupper($prenom ) . ' ';
        echo strtoupper($nom);
        echo '<br>';
        echo str_replace(".",",","j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI");

// BOUCLE
    }   if (isset($_GET['boucle'])){
        $nom = $_SESSION['Table']['nom'];
        $prenom = $_SESSION['Table']['prenom'];
        $age = $_SESSION['Table']['age'];
        $taille = $_SESSION['Table']['taille'];
        $classe = $_SESSION['Table']['classe'];

        $k = 0;
        while ($k < 10) {
            echo '<br>' . "$prenom $nom" . '<br>' . "j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI";
            $k++;
        };

// FONCTION
    }   if (isset($_GET['fonction'])){
        foreach($_SESSION['Table'] as $clef => $valeur){
            echo " <br> Cette ligne correspond à la clé $clef et contient $valeur. <br> ";
        }

// ULTI DE VEIGAR
    }   if (isset($_GET['supprimer'])){
        session_destroy();
    }
};
?>
</div>
</div>

</section>

</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>