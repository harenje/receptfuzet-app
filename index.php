<?php

session_start();
$error="";

if(array_key_exists("logout",$_GET)){
    unset($_SESSION);
    setcookie("id","",time() - 60*60);
    $_COOKIE["id"] = "";
}else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])){
    
    header("Location: loggedinpage.php");

}


if(array_key_exists("submit",$_POST)){
    
    include("connection.php");
    
    

    if(!$_POST['email']){
        $error .= "<strong>Email cím szükséges!</strong>";
    }
    if(!$_POST['password']){
        $error .= "<strong>Jelszó szükséges!</strong>";
    }
    if($error!=""){
        $error = "<strong>Probléma adódott:</strong>".$error;
    }
    else{
        if($_POST['signUp']=='1'){

            $email = mysqli_real_escape_string($link,$_POST['email']);
            $password = mysqli_real_escape_string($link,$_POST['password']);

            $query ="SELECT id FROM `felhasznalok` WHERE email = '$email'";
            $result = mysqli_query($link,$query);

            if(mysqli_num_rows($result)>0){
                $error ="Az email cím már foglalt.";
            }else{
                $query ="INSERT INTO `felhasznalok` (`email`,`jelszo`) VALUES ('$email','$password')";
                if(!mysqli_query($link,$query)){
                    $error = "<p>Nem sikerült feldolgozni az adatokat</p>";
                }else{
                    $query ="UPDATE `felhasznalok` SET jelszo = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)."";
                    mysqli_query($link,$query);

                    $_SESSION['id'] = mysqli_insert_id($link);
                    if($_POST['stayLoggedIn']=='1'){
                        setcookie("id",mysqli_insert_id($link),time()+ 60*60*24*365);
                    }
                    header("Location: loggedinpage.php");
                }
            }
        }else{
			
			$email = mysqli_real_escape_string($link,$_POST['email']);
			$query = "SELECT * FROM felhasznalok WHERE email = '$email'";
			$result = mysqli_query($link,$query);
			$row = mysqli_fetch_array($result);
			
			if (isset($row)){
					$hashedPw = md5(md5($row['id']).$_POST['password']);
					$hashedPwsub = substr($hashedPw,0, -2);
					
					if ($hashedPwsub == $row['jelszo']){
						$_SESSION['id'] = $row['id'];
						if($_POST['stayLoggedIn']=='1'){
                        setcookie("id",$row['id'],time()+ 60*60*24*365);
                    }
                   
						header("Location: loggedinpage.php");
						
					}else{
						$error = "Ez az email/jelszó kombináció nem létezik!";
					}
				}else{
						$error = "Ez az email/jelszó kombináció nem létezik!";
					}
					
					
				
			}
			
			
			
			
			
		}
			

	   }	


?>

<?php include("header.php");?>
    <div class="container"id="homePageContainer">
    <h1>Receptes füzet</h1>
        <p><strong>Bárhol bármikor!</strong></p>
        <div id="error"><?php if($error!=""){
            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
        };?></div>
    <form method="post" id = "signUpForm">
    
    <p>Regisztráljon most</p>
    
    <fieldset class="form-group">

        <input class="form-control" type="email" name="email" placeholder="Email cím">
        
    </fieldset>
    
    <fieldset class="form-group">
    
        <input class="form-control" type="password" name="password" placeholder="Jelszó">
        
    </fieldset>
    
    <div class="checkbox">
    
        <label>
    
        <input type="checkbox" name="stayLoggedIn" value=1> Bejelentkezve maradok!
            
        </label>
        
    </div>
    
    <fieldset class="form-group">
    
        <input type="hidden" name="signUp" value="1">
        
        <input class="btn btn-success" type="submit" name="submit" value="Regisztráció">
        
    </fieldset>
    
    <p><a class="toggleForms">Bejelentkezés</a></p>

</form>

<form method="post" id = "logInForm">
    
    <p>Írja be az adatait..</p>
    
    <fieldset class="form-group">

        <input class="form-control" type="email" name="email" placeholder="Email cím">
        
    </fieldset>
    
    <fieldset class="form-group">
    
        <input class="form-control"type="password" name="password" placeholder="Jelszó">
        
    </fieldset>
    
    <div class="checkbox">
    
        <label>
    
            <input type="checkbox" name="stayLoggedIn" value=1> Bejelentkezve maradok!
            
        </label>
        
    </div>
        
        <input type="hidden" name="signUp" value="0">
    
    <fieldset class="form-group">
        
        <input class="btn btn-success" type="submit" name="submit" value="Bejelentkezés!">
        
    </fieldset>
    
    <p><a class="toggleForms">Regisztráció</a></p>

</form>
          
      </div>


<?php include("footer.php");?>