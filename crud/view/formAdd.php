<form class="col-md-8 col-sm-6 col-lg-4 col-xs-12 form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Civilité">civilite</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Civilité-0">
      <input type="radio" name="Civilité" id="Civilité-0" value="monsieur"
             checked="checked">
      Monsieur
    </label>
	</div>
  <div class="radio">
    <label for="Civilité-1">
      <input type="radio" name="Civilité" id="Civilité-1" value="madame">
      Madame
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prenom">Prénom *</label>
  <div class="col-md-5">
  <input id="prenom" name="prenom" type="text" placeholder="Kevin"
         class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom *</label>
  <div class="col-md-5">
  <input id="nom" name="nom" type="text" placeholder="Martin"
        class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailOne">Email *</label>
  <div class="col-md-8">
  <input id="emailOne" name="emailOne" type="text" placeholder="Email"
         class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="EmailTwo">Email *</label>
  <div class="col-md-8">
  <input id="EmailTwo" name="EmailTwo" type="text"
         placeholder="Veuillez confirmer votre Email"
         class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="adresse">adresse *</label>
  <div class="col-md-6">
  <input id="adresse" name="adresse" type="text"
         placeholder="N°, rue" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ville">Ville *</label>
  <div class="col-md-6">
  <input id="ville" name="ville" type="text" placeholder="Lille"
         class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="codePostal">Code Postal *</label>
  <div class="col-md-4">
  <input id="codePostal" name="codePostal" type="text" placeholder="CP"
         class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Téléphone</label>
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="0612345678"
         class="form-control input-md" required="">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Valider</button>
  </div>
</div>

</fieldset>
</form>
