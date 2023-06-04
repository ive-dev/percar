<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar meu ambiente</title>
</head>
<body>
    <script>
        function alertaLogin(){
            alert('Lembre de anotar seu login e senha! Serão usados para acessar seu ambiente');
            }
        </script>
    <div>
        <h2>Criar meu ambiente</h2>
        <h3>Preencha os dados do ambiente</h3>
        <label>Nome</label>
        <input>
        <label>CEP</label>
        <input>
        <label>Estado</label>
        <input>
        <label for="">Cidade</label>
        <input>
        <label for="">Bairro</label>
        <input>
        <label>Numero</label>
        <input>
        <label>Complemento</label>
        <input><br> <br>
        <h3>Preencha os dados do administrador</h3>
        <label>Nome</label>
        <input>
        <label>Login</label>
        <input>
        <label>Senha</label>
        <input>
        <label>Confirme senha</label>
        <button  onclick="alertaLogin()"  >Criar ambiente</button>
        <button><a href="../php/loginAcesso.php">Acessar ambiente</a></button>
    </div>     
</body>
</html>