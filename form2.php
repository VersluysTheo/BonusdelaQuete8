
<form action="index.php" method="POST">
    <div class="row">
    <div class="col-6">
            <!-- NOM ET PRENOM -->
      <label for="prenom">Prenom</label>
      <input type="text" class="form-control bg-dark text-white" id="prenom" name="prenom" placeholder="Nyugga">

    <label for="nom">Nom</label>
    <input type="text" class="form-control bg-dark text-white" id="nom" name="nom" placeholder="Nyugga">

  <!-- AGE -->
    <label for="age">Age ( 10 à 60 ans )</label>
    <input type="number" min="10" max="60" class="form-control bg-dark text-white" id="age" name="age" placeholder="42">
  <!-- Taille -->

  <div class="mb-3">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text bg-dark text-white" id="validatedInputGroupPrepend">Taille ( Entre 1.6 et 2m )</span>
      </div>
      <input type="number" class="form-control" aria-describedby="validatedInputGroupPrepend" step="0.01" min="1.6" max="2" name="taille">
      <div class="input-group-prepend">
        <span class="input-group-text bg-dark text-white" id="validatedInputGroupPrepend">m</span>
      </div>
    </div>
  </div>
<!-- Bouton -->
  <div class="form-check">
  <input class="form-check-input" type="radio" name="type" id="apprenants" value="apprenant">
  <label class="form-check-label" for="apprenants">
    Apprenants
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="type" id="formateur" value="formateur">
  <label class="form-check-label" for="formateur">
    Formateur
  </label>
</div>
<!-- Bouton2 -->

  <button type="submit" class="btn btn-dark text-align-right" name="submit" >Enregistre les Données</button>
    </div>
    <div class="col-3">
    <div>
        <label for="Connaissances" method="POST"> Connaissances :
        <br>
        <div>
    <input type="checkbox" id="html" name="html">
    <label for="html">HTML</label>
        </div>
        <div>      
    <input type="checkbox" id="css" name="css">
    <label for="css">CSS</label>
        </div>
        <div>      
    <input type="checkbox" id="bootstrap" name="bootstrap">
    <label for="bootstrap">Bootstrap</label>
        </div>
        <div>      
    <input type="checkbox" id="php" name="php">
    <label for="php">PHP</label>
        </div>
        <div>      
    <input type="checkbox" id="mysql" name="mysql">
    <label for="mysql">MySQL</label>
        </div>
        <div>      
    <input type="checkbox" id="javascript" name="javascript">
    <label for="javascript">Javascript</label>
        </div>
        <div>      
    <input type="checkbox" id="symfony" name="symfony">
    <label for="symfony">Symfony</label>
        </div>
        <div>
    <input type="color" id="color" name="color"
           value="#040a58">
    <label for="color">Couleur préférée ?</label>
        </div>
      <div>  
        <label for="birthday">Date d'anniversaire ?</label>
        <input type="date" id="birthday" name="birthday"></div>
      </div>
    </div>
    </label>
    <div class="col-12 bg-white">
    <form action="index.php">
    <label for="avatar">Joindre une image (jpg ou png)</label>
    <br>
      <input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">
    </form>
    </div>
    </div>
</form>