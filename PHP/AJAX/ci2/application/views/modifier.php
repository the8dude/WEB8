	<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--3-col"></div>

  		<div class="mdl-cell mdl-cell--6-col">
  			<div class="div0">
  				<h2><?=$titre?></h2>  					
  			</div>
  			<hr />
  			
      <div class="divform">

        <form id="form2">

          <!-- cacher l'ID appelé -->
          <input type="hidden" name="id" value="<?=$ligne->id?>">
          
          <div class="label">Titre</div>
          <div><input class="textBox" type="text" name="titre" id="titre" value="<?=$ligne->titre?>" /></div>
          <br>

          <div class="label">Description</div>
          <div><textarea class="textArea" name="description"  id="description" value="<?=$ligne->description?>"></textarea></div>
          <br>

          <div class="label">URL</div>
          <div><input class="textBox" type="text" name="url" id="url" value="<?= $ligne->url ?>" /></div>
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
          <div><input class="textBox" type="text" name="webmaster" id="webmaster" value="<?=$ligne->webmaster?>"/></div>
          <br>

          <div>
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
            <input type="hidden" name="affichage"  value="non" >  
            <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="affichage"  value="oui" 
            <?php if ($ligne->affichage == "oui") echo "checked"; ?>
            />
            <span class="mdl-checkbox__label label">Visible</span>
            </label>        
          </div>
          <br>

         
        
        </form>

           <div>
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised btn" id="btn_valid2" data-id="<?= $ligne->id ?>">VALIDER</button>
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

    $("#btn_valid2").click(function() {
    
    console.log("test");

      var id = $(this).data("id");
      $.post(
        "<?=site_url("liens/script_modifier")?>",
        $("#form2").serialize(),
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