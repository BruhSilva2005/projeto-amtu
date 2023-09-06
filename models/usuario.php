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

            <button type="submit">Login</button>
            <button type="submit">Cadastrar</button>

        </form>

    </div>
 
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