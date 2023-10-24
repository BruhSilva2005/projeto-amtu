<?php
class Cadastro{

    public $nome;
    public $sobrenome;
    public $email;
    public $cpf;
    public $RG;
    public $telefone;

    public function __construct($nome,$sobrenome,$email,$cpf,$RG,$telefone){

    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->email = $email;
    $this->cpf = $cpf;
    $this->RG = $RG;
    $this->telefone = $telefone;
    }
    public function getNome(){
        return $this -> nome;
    }
    public function getsobrenome() {
        return $this->sobrenome;
    }
    public function getemail() {
        return $this->email;
    }
    public function getcpf() {
        return $this->cpf;
    }
    public function getRg() {
        return $this->RG;
    }
    public function getTelefone() {
        return $this->telefone;
    }
}
$cadastro = null;

if($_SERVER['REQUEST_METHOD']==='POST'){

    if(isset($_POST['email'])&& isset($_POST['senha'])){

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cadastro = new $cadastro($nome,$sobrenome,$email,$cpf,$RG,$telefone);
    }

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

<div class="p-7 mb-5 bg-danger text-white">AMTU</div>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <style>
            body{
            font-family: Arial, sans-serif;
            margin: 5px;
            padding: 20px;
            background-color:#fff ;
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
        <h1>Cadastro</h1>

        <form method = "post">
        <label for="text">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>
        <label for="text">Sobrenome:</label><br>
            <input type="text" id="sobrenome" name="sobrenome" required><br>
        <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
        <label for="number">CPF:</label><br>
            <input type="number" id="cpf" name="cpf" required><br>
        <label for="number">RG:</label><br>
            <input type="number" id="rg" name="rg" required><br>
        <label for="telephone">Telefone:</label><br>
            <input type="telephone" id="telefone" name="telefone" required><br>

            <button type="submit">Opções</button>
            <button type="submit">Cadastrar</button>

        </form>

    </div>

    <script>
  document.getElementById("opções").addEventListener("click", function() {
    window.location.href = "formulario.php";
  });
  document.getElementById("cadastrar").addEventListener("click", function() {
    window.location.href = "futuro_menu.php";
  });

  </script>
 
    <?php if($cadastro):?>

    <div class = "form-container">
        <!-- Conteúdo do formulário aqui -->
        <h2>Dados do Cadastrado:</h2>
        <p><strong>nome:</strong> <?= $cadastro->getNome() ?></p>
        <p><strong>sobrenome:</strong> <?= $cadastro->getsobrenome() ?></p>
        <p><strong>Email:</strong> <?= $cadastro->getemail() ?></p>
        <p><strong>CPF:</strong> <?= $cadastro->getcpf() ?></p>
        <p><strong>RG:</strong> <?= $cadastro->getRg() ?></p>
        <p><strong>telefone:</strong> <?= $cadastro->getTelefone() ?></p>
    </div>
    <?php endif; ?>
</body>
</html>