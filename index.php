<?php



include 'class.php';

$animal = [
    new Animal("Canide", 10, "Preto",),
    new Animal("Canide2", 10, "Preto",),

];

if (isset($_POST['raca']) && isset($_POST['idade']) && isset($_POST['cor_pele']) && isset($_POST['name']) && isset($_POST['comestivel'])) {
    $raca = $_POST['raca'];
    $idade = $_POST['idade'];
    $cor_pele = $_POST['cor_pele'];
    $name = $_POST['name'];
    $comestivel = $_POST['comestivel'];

    $animal = [new Animal($raca, $idade, $cor_pele, $name, $comestivel)];
} else if (isset($_POST['namenew']) && isset($_POST['comestivelnew'])) {
    $name = $_POST['namenew'];
    $comestivel = $_POST['comestivelnew'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Degustas esses animais?</title>
</head>

<body>

    <header>
        <h1>Degustas esse animal?</h1>
    </header>

    <main>
        <form action="index.php" method="post">
            <h2>Cadastre seu animal em nosso cardapio...</h2>
            <div class="campo">
                <label for="raca">Qual a raça do seu animal?</label>
                <input type="text" name="raca">
            </div>
            <div class="campo">
                <label for="idade">Quantos aninhos ele tem?</label>
                <input type="number" name="idade">
            </div>
            <div class="campo">
                <label for="cor_pele">Qual a cor do tecido flacido que ele chama de pele?</label>
                <input type="text" name="cor_pele">
            </div>
            <div class="campo">
                <label for="name">Qual o nome desse animalzinho?</label>
                <input type="text" name="name">
            </div>
            <div class="campo">
                <label for="comestivel">Mandava um bife dele para dentro?</label>
                <select name="comestivel">
                    <option value="">Sim</option>
                    <option value="">Não</option>
                </select>
            </div>






            <label for="">De qual de seus animais estamos falando?</label>
            <select name="cadastrado">
                <?php
                foreach ($animal as $animal) {
                    echo  "<option value=''>$animal->name</option>";
                }
                ?>
            </select>

            <div class="campo">
                <label for="racaver">Raça: </label>
                <input type="text" name="racaver">
            </div>
            <div class="campo">
                <label for="idadever">Idade: </label>
                <input type="text" name="idadever">
            </div>
            <div class="campo">
                <label for="cor_pelever">Cor da pele: </label>
                <input type="text" name="cor_pelever">
            </div>
            <div class="campo">
                <label for="namever">Nome: </label>
                <input type="text" name="namever">
            </div>
            <div class="campo">
                <label for="comestiverver">Voce o degusta? </label>
                <input type="text" name="comestiverver">
            </div>




            <h1>Mudou o nome do seu animal?, mudou de ideia sobre come-lo?</h1>
            <div class="campo">
                <label for="namenew">Novo nome?</label>
                <input type="text" name="namenew">
                <label for="comestivelnew">Vai come-lo?</label>
                <select name="comestivelnew">
                    <option value="">Sim</option>
                    <option value="">Não</option>
                </select>
            </div>

            <button>Informar</button>

        </form>

    </main>

    <footer>
        <p>&copy; Luiz Miguel e Victor Hugo</p>
    </footer>

</body>


</html>