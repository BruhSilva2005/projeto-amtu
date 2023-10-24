<!--
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMTU</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="page">
        <form method="POST" class="formLogin">
            <h1>AMTU</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite seu e-mail" />
            <a href="/">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>

</body>
</html>

-->
<?php




class usuario{

    public $email;
    public $senha;

    public function __construct($email,$senha){

    $this->email = $email;
    $this->senha = $senha;
    }
    public function getEmail(){
        return $this -> email;
    }
    public function getsenha() {
        return $this->senha;
    }
}
$usuario = null;

if($_SERVER['REQUEST_METHOD']==='POST'){

    if(isset($_POST['email'])&& isset($_POST['senha'])){

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = new Usuario($email,$senha);
    }

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

<div class="p-5 mb-4 bg-danger text-white">Sistema AMTU</div>
<center><img src="a.png.jpg" width="315" height="200"/ ></center>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>

    <style>
            body{
            font-family: Arial, sans-serif;
            margin: 5px;
            padding: 20px;
            background-color: #F5FFFA;

       }

       .form-container {
            max-width: 200px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);


}

       </style>
</head>

<body>
</div>
    <div class = "form-container">
        <h1>Cadastro de Usuario</h1>

        <form method = "post">
        <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
        <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br>

            <button type="submit" id="logar">Login</button>
            <button type="submit">Cadastrar</button>

        </form>

    </div>
    <script>
  document.getElementById("logar").addEventListener("click", function() {
    window.location.href = "menu.php";
  });

  document.getElementById("cadastrar").addEventListener("click", function() {
    window.location.href = "cadastrar.php";
  });

  document.getElementById("esqueci a senha").addEventListener("click", function() {
    window.location.href = "gerador_senha.php";
  });
</script>

    <?php if($usuario):?>

    <div class = "form-container">
        <!-- Conteúdo do formulário aqui -->
        <h2>Dados do Cadastrado:</h2>
        <p><strong>email:</strong> <?= $usuario->getEmail() ?></p>
        <p><strong>senha:</strong> <?= $usuario->getsenha() ?></p>
    </div>
    <?php endif; ?>
</body>
</html>