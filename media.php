if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST["numero"];

    foreach (range(1, 10) as $i) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado <br>";
    }
}
