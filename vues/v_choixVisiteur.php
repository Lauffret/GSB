 <div id="contenu">
      <h2>Liste des fiches de frais</h2>
      <h3>Visiteur à sélectionner : </h3>
      <form action="index.php?uc=valideFrais&action=voirFiche" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="visiteur" accesskey="n">Visiteur : </label>
        <select id="visiteur" name="visiteur">
            <?php
                foreach ($lesVisiteur as $unVisiteur)
                {
                    $id = $unVisiteur['id'];
                    $visiteur = $unVisiteur['nom'];
                    if($visiteur == $visiteurASelectionner){
                    ?>
                    <option selected name="id" value="<?php $id?>"><?php echo $visiteur?></option>
                            <?php 
                            }
                            else{ ?>
                             <option name="id" value="<?php $id?>"><?php echo $visiteur?></option>
                            <?php 
                            }
                                
				
			}
           
		   ?>    
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>