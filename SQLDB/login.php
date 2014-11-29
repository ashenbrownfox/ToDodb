<?
	include('dbconnect.php');
	
	
	$email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);
	$strSQL = mysqli_query($connection,"select email from users where email='".$email."' and password='".password."'");
    $Results = mysqli_fetch_array($strSQL, MYSQLI_NUM);
    
    if(count($Results)>=1){
            echo(" Logado ");
            session_start();
            $_SESSION['email'] = $Results[0];

            header("Location: ./index.php");
            
        }
        else
        {
			header("Location: ./login.html");
			
        }   
	

?>
<html>	
<head><title>Blerghh</title></head><body></body></html>
