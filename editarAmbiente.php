<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ambiente</title>
</head>
<script>
    function confirmDelete() {
        if (confirm("Tem certeza que deseja excluir?")) {
            // Lógica para excluir o item
            var itemId = ; // ID do item que você deseja excluir
            // Exemplo de código para remover o item da lista
            var itemElement = document.getElementById(itemId);
            itemElement.parentNode.removeChild(itemElement);
            alert("Excluído com sucesso!");

        } else {
            alert("Exclusão cancelada.");
        }
    }
</script>

<body>
    <fieldset>
        <form>
            <ul class="">
                <li><a class="" href="../php/ambiente.php">Pagina inicial</a></li>
                <li><a class="" href="">Ver minhas solicitações</a></li>
            </ul>
        </form>
    </fieldset>
    <div style="align-items:center ;">
        <h1>Editar meu ambiente</h1>
        <label>Nome</label>
        <input><br>
        <label>CEP</label>
        <input><br>
        <label>Estado</label>
        <input><br>
        <label>Cidade</label>
        <input><br>
        <label>Bairro</label>
        <input><br>
        <label>Numero</label>
        <input><br>
        <label>Complemento</label>
        <input><br>
        <label>Descricao</label>
        <input><br>
        <button>Editar</button><br>
        <button click="confirmDelete()">Excluir</button>
    </div>
</body>

</html>