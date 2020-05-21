<?php
  extract($_GET);
  if(isset($c))
  {
    if($c)
    {
      echo "<p style=\"color: green\">Formulaire envoyer avec succé</p>";
    }
    else
    {
      echo "<div style=\"color: red\">";
      if(!$r){ echo "<p>Problème avec la référence, peut être existe-t-elle déjà?</p>";}
      if(!$m){ echo "<p>Marque incorrect</p>";}
      if(!$n){ echo "<p>nom incorrect</p>";}
      if(!$t){ echo "<p>Type incorrect</p>";}
      if(!$p){ echo "<p>Puissance incorrect</p>";}
      if(!$e){ echo "<p>Déscription incorrect</p>";}
      if(!$f){ echo "<p>Problème avec le fichier envoyer</p>";}
      echo "</div>";
    }
  }
?>

<form action="../controller/verif_add.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Référence</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="reference" value="<?= $re?>" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Marque</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="mark" value="<?= $ma?>" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nom</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?= $na?>" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Type de composant</label>
    <select class="form-control" id="exampleFormControlSelect1" name="type" required>
      <option <?php if($ty == 1)echo "selected";?>>Carte mère</option>
      <option <?php if($ty == 2)echo "selected";?>>Carte graphique</option>
      <option <?php if($ty == 3)echo "selected";?>>Processeur</option>
      <option <?php if($ty == 4)echo "selected";?>>Ram</option>
      <option <?php if($ty == 5)echo "selected";?>>Disque dur</option>
      <option <?php if($ty == 6)echo "selected";?>>Alimentation</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Puissance</label>
    <input type="number" min="0" class="form-control" id="exampleFormControlInput1" name="power" value="<?= $po?>" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Déscription</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="feature" required><?= $fe?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Insérez une image(500Ko max)</label>
    <input type="file" accept=".jpg, .jpeg, .jpg, .png" class="form-control-file" id="exampleFormControlFile1" name="fileToUpload" required>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>