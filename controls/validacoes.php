<?php
 
session_start();
 
if(isset($_GET['logout'])){    
     
    //Simple exit message
    $logout_message = "<div class='msgln'><span class='left-info'>Usuario <b class='user-name-left'>". $_SESSION['name'] ."</b> abandonou o weedchat :(.</span><br></div>";
    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);
     
    session_destroy();
    header("Location: index.php"); //Redirect the user
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<span class="error">DIGITE UM NOME CORRETO!</span>';
    }
}
 
function loginForm(){
    echo
    '<div id="loginform">
    <p>POR FAVOR INSIRA UM NOME PARA CONTINUAR!</p>
    <form action="index.php" method="post">
      <label for="name">SEU NOME →</label>
      <input type="text" name="name" id="name" />
      <input type="submit" name="enter" id="enter" value="ENTRAR" />
    </form>
  </div>';
}
 
?>
 