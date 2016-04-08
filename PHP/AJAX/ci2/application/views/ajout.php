<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--3-col"></div>

  		<div class="mdl-cell mdl-cell--6-col">
  			<div class="div0">
  				<h2><?=$titre?></h2>  					
  			</div>
  			<hr />
  			
      <div class="divform">

  <form id="form1">

        <div class="label">Titre</div>
        <div><input class="textBox" type="text" name="titre" id="titre" placeholder="Entrez le titre"/></div>
        <br>

        <div class="label">Description</div>
        <div><textarea class="textArea" name="description"  id="description" placeholder="Description du site"></textarea></div>
        <br>

        <div class="label">URL</div>
        <div><input class="textBox" type="text" name="url" id="url" placeholder="Entrez l'adresse URL du site"/></div>
        <br>

        <div class="label">Thème</div>
        <div>
          <select name="theme" class="select" id="choix">
            <option value="actualite">Actualité</option>
            <option value="musique">Musique</option>
            <option value="sport">Sport</option>
            <option valu="sciences">Sciences</option>
            <option value="cinema">Cinéma</option>
            <option value="divers">Divers</option>
          </select>
        </div>
        <br>

        <div class="label">Webmaster</div>
        <div><input class="textBox" type="text" name="webmaster" id="webmaster" placeholder="Entrez une adresse mail"/></div>
        <br>

        <div>
          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
          <input type="hidden" name="affichage"  value="non" >  
          <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="affichage"  value="oui" />
          <span class="mdl-checkbox__label label">Visible</span>
          </label>        
        </div>
        <br>

  </form>

          <div>
            <button class="mdl-button mdl-js-button mdl-button--raised btn" id="btn_valid">VALIDER</button>
          </div>

      </div>
  			
			<hr />
      <div id="retour">Retour à la liste</div>
      
      <hr />
          
      </div>

      <div class="mdl-cell mdl-cell--3-col"></div>
  </div>


<script>
$(document).ready(function() {

    $("#btn_valid").click(function() {
      
      $.post(
        "<?=site_url("liens/script_ajout")?>", 
        $("#form1").serialize(), 
        function () {
          $("#div1").load("<?=site_url("liens/liste")?>");
        }
      
      );
    });

    $("#retour").click(function() {

      $("#div1").load("<?=site_url("liens/liste")?>");
      
    });
  

});
</script>
