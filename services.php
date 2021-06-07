
<?php include('connection.php');
 session_start();
 $users= $_SESSION['monlogin'];
 if (!$_SESSION['monlogin']){
 
  header('location:prices.php');
 }

?><?php include("includes/header.php"); ?>

<section id="content">
					<div class="wrapper">
						<article class="col-1">
							<div class="indent-left">
								<h3 class="prev-indent-bot">Gestion des annonces</h3>
								
<?php if (strcmp($_SESSION['monlogin'], "admin")==0) {
                   echo ' <li><a href="" class="nav-link px-2 text-white">Administrer les comptes utilisateurs </a></li>';
                }
                
          ?><?php

            session_start(); 
            if ($_SESSION['monlogin']) {
              echo "";
              echo'<div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="images/Bleach2020_10_26_16_57_28.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              '.$_SESSION['monlogin'].'
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
              <li><a class="dropdown-item" href="modifierprofil.php">Edit Profile</a></li> 
              <li><a class="dropdown-item" href="deconnecter.php">Sign out</a></li>
              </ul>
            </div>' ;
            }else { 
              echo '<div class="text-end">
          <a href="login.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a  href="inscription.php"><button type="button" class="btn btn-warning">Sign-up</button></a>
        </div>
         ';
         }?>

        
      </div>

    </div>
  </header>

<main>


<div class="container">
<p><h4><b>Listes annonces </b></h4>
<?php
        $requete="SELECT * from appartement where Caractéristiques='offre' and login_createur='$users' ";
        $resultat=mysqli_query($conn,$requete);
         
        $nbr=mysqli_num_rows($resultat);
        echo "<p> Total <b>".$nbr."</b> annonces ...";


    ?></p>
    <p> <a href="Ajouter.php"><img src="images/61183.png"  width="50px" height="50px"> </a><br><b>Ajouter</b></p>
  <div class="row">
    <div class="col-12">
		<table class="table table-image table-bordered ">
		  <thead>
		    <tr>
            <th background-color="#e66262">id</th>
            <th>Titre</th>
            <th>Localisation</th>
            <th>prix</th>
            <th>photo</th>
            <th>Date</th>
           
            
            <th>Caractéristiques</th>
            <th>Modifier</th>
            
            <th>Activer/<br>Désactiver</th>
            <th>Supprimer</th>
		    </tr>
		  </thead>
		  <tbody>
          <?php
    while($ligne=mysqli_fetch_assoc($resultat)){
        ?>
		<tr>
		    <th scope="row"><?php echo $ligne['id']?></th>
            <td><?php echo $ligne['titre']?></td>
            <td><?php echo $ligne['adresse']?></td>
            <td><?php echo $ligne['prix']?></td>
		    <td class="w-25">
			      <img src="<?php echo $ligne['photo']?> "class="img-fluid img-thumbnail" alt="Sheep">
		    </td>
            <td><?php echo $ligne['date']?></td>
            
            
            <td><?php echo $ligne['Caractéristiques']?></td>
            <td class="w-25">
            <a href="Modifier.php?modifanon=<?php echo $ligne['id']?>"><img src="images/pngtree-black-edit-icon-png-image_4422168.jpg" width="100px" height="100px" alt="Sheep"></a>
		    </td>
            <td class="w-25">
                <?php 
            if ($ligne['status']) {
                echo '<a href="activation.php?fermeranon='.$ligne['id'].'"><img src="images/images.jpg" width="100px" height="100px"  ></a>' ;
            }
            else {
                echo '<a href="activation.php?fermeranon='.$ligne['id'].'"><img src="images/téléchargement (1).png" width="100px" height="100px" ></a>' ;
            }
            ?>
		    </td>
            <td class="w-25">
            <a href="Supprimerdemande.php?suprimanno=<?php echo $ligne['id']?>"><img src="images/téléchargement.png" width="100px" height="100px" alt="Sheep"></a>
		    </td>
		</tr>
            <?php }?>  
		  </tbody>
		</table>   
    </div>
  </div>
</div>


<div class="container">
<p><h4><b>Listes demandes </b></h4>
<?php
        $requete="SELECT * from Logement where categorie='demande' and login_createur='$users' ";
        $resultat=mysqli_query($conn,$requete);
         
        $nbr=mysqli_num_rows($resultat);
        echo "<p> Total <b>".$nbr."</b> annonces ...";


    ?></p>
    <p> <a href="Ajouterdemande.php"><img src="images/61183.png"  width="50px" height="50px"> </a><br><b>Ajouter</b></p>
  <div class="row">
    <div class="col-12">
		<table class="table table-image table-bordered ">
		  <thead>
		    <tr>
            <th background-color="#e66262">id</th>
            <th>Titre</th>
            
            <th>prix</th>
            
            <th>Date</th>
            
            
            <th>Caractéristiques</th>
            <th>Modifier</th>
            
            <th>Activer/<br>Désactiver</th>
            <th>Supprimer</th>
		    </tr>
		  </thead>
		  <tbody>
          <?php
    while($ligne=mysqli_fetch_assoc($resultat)){
        ?>
		<tr>
		    <th scope="row"><?php echo $ligne['id']?></th>
            <td><?php echo $ligne['titre']?></td>
            
            <td><?php echo $ligne['prix']?></td>
		   
            <td><?php echo $ligne['date']?></td>
            
            
            <td><?php echo $ligne['Caractéristiques']?></td>
            <td class="w-25">
            <a href="Modifierdemande.php?modifanon=<?php echo $ligne['id']?>"><img src="images/pngtree-black-edit-icon-png-image_4422168.jpg" width="100px" height="100px" alt="Sheep"></a>
		    </td>
            <td class="w-25">
               
		    </td>
            <td class="w-25">
            <a href="Supprimerdemande.php?suprimanno=<?php echo $ligne['id']?>"><img src="images/téléchargement.png" width="100px" height="100px" alt="Sheep"></a>
		    </td>
		</tr>
            <?php }?>  
		  </tbody>
		</table>   
    </div>
  </div>
</div>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>



</main>
					<div class="block"></div>
				</aside>
			</div>
		</div>

		<?php include("includes/footer.php"); ?>
