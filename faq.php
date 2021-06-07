<?php include('connexion.php');
 include("includes/header.php"); ?>

<section id="content">
					<div class="wrapper">
						<article class="col-1">
							<div class="indent-right">
								
<form name="formAdd" action="" method="POST" class="formulaire" enctype="multipart/form-data">
            <h2 align="center">Ajouter une annonce</h2>

            
             <table>
            <label><b>Titre :</b></label>      
            <input type="text" name="txttr"  placeholder="Entrer le titre de l'annonce" required> <br><br>

            <label><b>Adresse :</b></label>      
            <input type="text" name="txtAdr"  placeholder="Entrer l'adresse" required> <br><br>

            <label><b>Prix :</b></label>      
            <input type="number" name="txtPrix"  placeholder="Entrer le prix" required> <br><br>

            <label><b>Image :</b></label>      
            <input type="file" name="txtIma"  placeholder="Choisir une image" required> <br><br>
            </table>
            <!--<label><b>Caractéristiques :</b></label>  -->
            <fieldset>
                <legend><b>Caractéristiques :</b></legend>
                <table>
                <tr>
                <td><input type="number" name="ncham"  placeholder="Nombre de chambre" required ></td><br>
                <td><input type="number" name="nsalon"  placeholder="Nombre de salon" required ></td>
                </tr>
                
                
                </table>
            </fieldset>    
         
            
                <table>  
                 <tr><br><br>
                    <td >
                        <input type="submit" name="btadd" value="Ajouter" id="submit">
                    </td>
                    <td >
                        <input type="reset"  name="btaddreset" value="Annuler">
                    </td>
                </tr>
            </table>
			</div>
					</article>


						<article class="col-2">
							
				<form name="formupda" method="POST" class="formulaire" enctype="multipart/form-data">
             <h2 align="center">Mettre à jour une annonce</h2>

            <label><b>Titre :</b></label>      
            <input type="text" name="txttr"  placeholder="Entrer la titre de l'offre" required><br><br>
            
            <label><b>Localisation :</b></label>      
            <input type="text" name="txtAdr"  placeholder="Entrer la localisation du bien" required><br><br>

            <label><b>Prix :</b></label>      
            <input type="number" name="txtPrix"  placeholder="Entrer le prix" required><br><br>

            <label><b>Image :</b></label>      
            <input type="file" name="txtIma"  placeholder="Choisir une image" required><br><br>

            <fieldset>
                <legend><b>Caractéristiques :</b></legend>
                <table><br>
                <tr>
                <td><input type="number" name="ncham"  placeholder="Nombre de chambre" required ></td>

                <td><input type="number" name="nsalon"  placeholder="Nombre de salon" required ></td>
                </tr>
                
            
                </table>
            </fieldset>    
            
            
                <table> 

                	<tr><br><br>
                    <td >
                        <input type="submit" name="btmod" value="Mettre à jour" id="submit">
                    </td>
                    <td >
                        <input type="reset"  name="btmodreset" value="Annuler">
                    </td>
                </tr>
            </table>
							
						</article>
					</div>
					<div class="block"></div>
				</section>
			</div>
		</div>
		<?php include("includes/footer.php"); ?>