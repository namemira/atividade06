<form method="post">
    <input name="nome" placeholder="digite seu o numero">
    <button>enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST["numero"];

    foreach (range(1, 10) as $i) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado <br>";
    }
}

?>