
<?php include('connexion.php');
      include("includes/header.php"); ?>

<section id="content">
					<div class="wrapper">
						<article class="col-1">
							<div class="indent-left">
								<h3 class="p1">Inscription</h3>
								<form id="contact-form" method="post" enctype="multipart/form-data">  
            
                
                <div>
                    <input type="text" name="pseudo"  placeholder="Pseudo" required="required" autocomplete="off"> <br>

                </div>

                <div><br>
                    <input type="text" name="nom"  placeholder="Nom" required="required" autocomplete="off"> <br>
                </div>

                <div ><br>
                    <input type="text" name="prenom"  placeholder="Prénom" required="required" autocomplete="off"> <br>
                </div>

                <div ><br>
                    <input type="email" name="email"  placeholder="Email" required="required" autocomplete="off"> <br>
                </div>

                <div ><br>
                    <input type="password" name="password"  placeholder="Mot de passe" required="required" autocomplete="off"> <br>
                </div>

                <div ><br>
                    <input type="password" name="password_retype"  placeholder="Re-tapez le mot de passe" required="required" autocomplete="off"> <br>
                </div>

                <div ><br>
                    <input type="tel" name="tel"  placeholder="Numéro de téléphone" required="required" autocomplete="off" > <br>
                </div>

                <div ><br>
                <input type="submit" name="btadd" value="S'inscrire" id="submit">
                </div> 
					</form>
							</div>

						</article>
						<article class="col-2">
							<h3 class="p1">Modifier profil</h3>
							<form action="modifierprofil_traitement.php" method="post">
                
                <?php
                session_start();
                $user= $_SESSION['monlogin'];  
                $requete="SELECT *from administration WHERE login='$user'"; 
                $resultat=mysqli_query($conn,$requete);
                
                if ($ligne=mysqli_fetch_assoc($resultat)) {
                    $pseudo = $ligne['login'];
                    $email = $ligne['email'];
                    $password = $ligne['motdepassee'];
                    $nom=$ligne['nom'];
                    $prenom=$ligne['prenom'];
                    $tel=$ligne['telephone'];
                }
                ?>
                
                <div>
                    <label><b>Nom d'utilisateur :</b></label>
                    <input type="text" name="pseudo"  value="<?php echo $pseudo ?>" required="required" autocomplete="off">
                </div>
                <div >
                <label><b>Nom  :</b></label>
                    <input type="text" name="nom" value="<?php echo $nom ?>" required="required" autocomplete="off">
                </div>
                <div >
                <label><b>Prénom :</b></label>
                    <input type="text" name="prenom"  value="<?php echo $prenom ?>" required="required" autocomplete="off">
                </div>
                <div >
                <label><b>Email :</b></label>
                    <input type="email" name="email"  value="<?php echo $email ?>" required="required" autocomplete="off">
                </div>
                <div >
                <label><b>Mot de passe :</b></label>
                    <input type="password" name="password"  value="<?php echo $password ?>" required="required" autocomplete="off">
                </div>
                <div >
                <label><b>Re-tapez le mot de passe:</b></label>
                    <input type="password" name="password_retype"  value="<?php echo $password ?>" required="required" autocomplete="off">
                </div>
                <div >
                <label><b>Téléphone :</b></label>
                    <input type="tel" name="tel"  value="<?php echo $tel ?>" required="required" autocomplete="off" >
                </div>
                <div>
                
                <div >
                <input type="submit" name="btadd" value="Modifier" id="submit">
                </div>   
          
</div>
<?php

if(isset($_GET['reg_err'])) {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> Modification réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;
                        case 'sql':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur sql </strong> 
                                </div>
                            <?php
                            break;
                        case 'email_already':
                                ?>
                                    <div class="alert alert-danger">
                                    <strong>Erreur</strong> email existe déjà
                                    </div>
                                <?php
                            break;
                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                
?>

</form>
			</div>
						</article>
					</div>
					<div class="block"></div>
				</section>
			</div>
		</div>
		<?php include("includes/footer.php"); ?>
		