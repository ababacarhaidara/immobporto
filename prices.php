
<?php include("connexion.php");
include("includes/header.php"); ?>
<section id="content">
					<div class="indent-left">
						
						<div class="wrapper">
							
							<div class="col-2">
								
        <form action="" method="POST" class="formulaire">
            <h3>Connection</h3>
            
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="txtlogin" required="required" autocomplete="off" class="zonetext"> <br><br>

            
            <input type="password" placeholder="Entrer le mot de passe" name="txtpw" required="required" autocomplete="off" class="zonetext"><br><br>

            <input type="submit" name="btlogin" value="Se connecter" id="submit" class="submit"><br><br>

            
            <?php
            if (isset($_POST['btlogin'])) {
                
                $requete="SELECT * from administration where login='".$_POST['txtlogin']."' and motdepasse='".$_POST['txtpw']."'";
               
               
               if($resultat=mysqli_query($conn,$requete)) {
                   
                   $ligne=mysqli_fetch_assoc($resultat);
                   
                   if($ligne!=0){
                       
                       session_start();
                       $_SESSION['monlogin']=$_POST['txtlogin'];
                       header("location:index.php");
                      
                   }
                   else{
                    
                        echo "<font color='red'>Login ou mot de passe est invalide </font> ";
                }
               } 
            }
            ?>
        </form>

    </div>
		</div>
			</div>
				</div>
				  </section>

					<div class="block"></div>
				</aside>
			</div>
		</div>

		<?php include("includes/footer.php"); ?>