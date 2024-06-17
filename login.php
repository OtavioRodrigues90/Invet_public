<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <title>Login</title>
  </head>
  <body>
    <?php
   try {
    include("connection.php");
  
    if ($_POST) {
      $password = $_POST["password"];
      if ($password == "") {
        $mensagem = "";
      } 
      elseif ($password == $password) { 
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
  
        $sql1 = "SELECT email from logins where email = '{$email}'"; 
        $select = mysqli_query($conn, $sql1);
        
        //se ja existir algum correspondente
        if (mysqli_num_rows($select) > 0){
          $linha = mysqli_fetch_assoc($select);
          //se for o msm usuario
          if ($linha['user'] == $user){
            $errorUserJaExiste = true;
            
          }
          //senao, se for o msm email
          else if ($linha['email'] == $email){
            $errorEmailJaUtilizado = true;
            
          }
        }
        else{
          $hash = password_hash($password, PASSWORD_DEFAULT);
  
          $sql = "INSERT INTO logins (email, senha ) VALUES ('$email', '$password')";
  
          mysqli_query($conn, $sql);
          
          header("location: index.php");
        }
      }
      else{
        $errorSenhasDiferentes = true;
  
      }
    }
    mysqli_close($conn);
  } 
  catch (Exception $e) {
    $errorConn = true;
    echo $e;
  }
    ?>
    <div class="logo"></div>
    <div class="page">
      <div class="card">
        <form method="POST" class="formLogin">
          <h2>Invet</h2>
          <p>Digite seus dados para acesso:</p>
          <label for="email">E-mail</label>
          <input name="email" type="email" placeholder="Digite seu email" />
          <label for="password">Senha</label>
          <input name="password" type="password" placeholder="Digite sua senha" />
          <input  type="submit" value="Acessar" />
          <a href="#"> Crie uma conta.</a>
        </form>
      </div>
    </div>
  </body>
</html>