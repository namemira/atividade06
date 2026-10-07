<form method="post">
    <input name="nome" placeholder="digite seu nome">
    <button>enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    echo "Olá $nome";
}
?>