<div class="mdl-grid">
  		<div class="mdl-cell mdl-cell--3-col"></div>

  		<div class="mdl-cell mdl-cell--6-col">
  			<div class="div0">
  				<h2><?=$titre?></h2>  					
  			</div>
  			<hr />
  			
  			<table class="mdl-data-table mdl-shadow--2dp  mdl-js-data-table table">
				
				<tbody>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte2">Titre</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="label"><?=$ligne->titre?></div>
						</td>
					</tr>				

					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte2">Description</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="label"><?=$ligne->description?></div>
						</td>
					</tr>

					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte2">URL</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div><a class="label" href="<?=$ligne->url?>"><?= $ligne->url ?></a></div>
						</td>
					</tr>	

					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte2">Webmaster</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="label"><?=$ligne->webmaster?></div>
						</td>
					</tr>	

					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte2">Thème</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="label"><?=$ligne->theme?></div>
						</td>
					</tr>	

					<tr>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="texte2">Date</div>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<div class="label"><?=$ligne->date?></div>
						</td>
					</tr>

					<tr>
						<td>

								<button class="mdl-button mdl-js-button mdl-button--raised btn" id="btn_modif" data-id="<?= $ligne->id ?>">
									MODIFIER  							
								</button>
							
						</td>
						<td class="mdl-data-table__cell--non-numeric">
								<button class="mdl-button mdl-js-button mdl-button--raised btn" id="btn_supp" data-id="<?= $ligne->id ?>">
									SUPPRIMER
								</button>
							
						</td>
					</tr>		

				</tbody>

			</table>
        	
      
  			
			<hr />
      <div id="retour">Retour à la liste</div>
			
			<hr />
  				
  		</div>

  		<div class="mdl-cell mdl-cell--3-col"></div>
	</div>


<script>
$(document).ready(function() {


	$("#btn_modif").click(function() {

		var id = $(this).data("id");
		$("#div1").load("<?=site_url("liens/modifier")?>" + "/" + id);
			
	});
	


	$("#btn_supp").click(function() {
		console.log("test");
    	var id = $(this).data("id");
	    $.post(
	      "<?=site_url("liens/script_supprimer")?>" + "/" + id, 
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
