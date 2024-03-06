<!DOCTYPE html>
<html>
<head>
    <title>Matrix Multiplication</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
<h1>BADRESH B - 211211101025</h1>
<form method="post">
    Enter dimensions of Matrix A:
    <input type="number" name="rowsA" placeholder="Rows" >
    x
    <input type="number" name="colsA" placeholder="Columns" >
    <br><br>
    Enter dimensions of Matrix B:
    <input type="number" name="rowsB" placeholder="Rows" >
    x
    <input type="number" name="colsB" placeholder="Columns">
    <input type='submit' name='submit' value='Submit'>
    <br><br>
    <?php
    if (isset($_POST['submit'])) {
        $rowsA = $_POST['rowsA'];
        $colsA = $_POST['colsA'];
        $rowsB = $_POST['rowsB'];
        $colsB = $_POST['colsB'];
        if ($colsA != $rowsB) {
            echo "<p>Error: Columns of Matrix A must be equal to rows of Matrix B for multiplication!</p>";
        } else {
            echo "<input type='hidden' name='rowsA' value='$rowsA'>";
            echo "<input type='hidden' name='colsA' value='$colsA'>";
            echo "<input type='hidden' name='rowsB' value='$rowsB'>";
            echo "<input type='hidden' name='colsB' value='$colsB'>";

            echo "<table border='1'>";
            for ($i = 0; $i < $rowsA; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $colsB; $j++) {
                    echo "<td><input type='number' name='matrixA[$i][$j]' required></td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            echo "<br>";

            echo "<table border='1'>";
            for ($i = 0; $i < $rowsB; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $colsB; $j++) {
                    echo "<td><input type='number' name='matrixB[$i][$j]' required></td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            echo "<br>";

            echo "<input type='submit' name='calculate' value='Calculate'>";
        }
    } else {
        echo "<input type='submit' name='submit' value='Submit'>";
    }
    ?>
</form>

<?php
if (isset($_POST['calculate'])) {
    $rowsA = $_POST['rowsA'];
    $colsA = $_POST['colsA'];
    $rowsB = $_POST['rowsB'];
    $colsB = $_POST['colsB'];
    $matrixA = $_POST['matrixA'];
    $matrixB = $_POST['matrixB'];

    echo "<h2>Matrix A</h2>";
    echo "<table border='1'>";
    for ($i = 0; $i < $rowsA; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $colsA; $j++) {
            echo "<td style='background-color: #" . dechex(rand(0x000000, 0xFFFFFF)) . ";'>" . $matrixA[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<h2>Matrix B</h2>";
    echo "<table border='1'>";
    for ($i = 0; $i < $rowsB; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $colsB; $j++) {
            echo "<td style='background-color: #" . dechex(rand(0x000000, 0xFFFFFF)) . ";'>" . $matrixB[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<h2>Result (Matrix C)</h2>";
    echo "<table border='1'>";
    for ($i = 0; $i < $rowsA; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $colsB; $j++) {
            $result = 0;
            for ($k = 0; $k < $colsA; $k++) {
                $result += $matrixA[$i][$k] * $matrixB[$k][$j];
            }
            echo "<td style='background-color: #" . dechex(rand(0x000000, 0xFFFFFF)) . ";'>$result</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>