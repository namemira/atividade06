<form method="post">
    <input name="nota1" placeholder="Digite a primeira nota">
    <input name="nota2" placeholder="Digite a segunda nota">
    <button>Calcular</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    echo "Média: $media <br>";
    echo "Situação: $situacao";
}

?>