<!DOCTYPE html>
<html>
<head>
    <title>Array Sorting Program</title>
</head>
<body>
    <center>
<h1>BADRESH B - 211211101025</h1>
    <h2>Array Sorting Program</h2>
    <form method="post">
        <label for="array">Enter array values (comma separated): </label><br>
        <input type="text" id="array" name="array"><br><br>
        <input type="radio" id="bubble" name="sort_method" value="bubble">
        <label for="bubble">Bubble Sort</label><br>
        <input type="radio" id="selection" name="sort_method" value="selection">
        <label for="selection">Selection Sort</label><br>
        <input type="radio" id="insertion" name="sort_method" value="insertion">
        <label for="insertion">Insertion Sort</label><br><br>
        <input type="submit" value="Sort">
    </form>

    <?php

    function bubbleSort($arr) {
        $n = count($arr);
        for ($i = 0; $i < $n-1; $i++) {
            for ($j = 0; $j < $n-$i-1; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        return $arr;
    }

    function selectionSort($arr) {
        $n = count($arr);
        for ($i = 0; $i < $n-1; $i++) {
            $min_index = $i;
            for ($j = $i+1; $j < $n; $j++) {
                if ($arr[$j] < $arr[$min_index]) {
                    $min_index = $j;
                }
            }
            $temp = $arr[$i];
            $arr[$i] = $arr[$min_index];
            $arr[$min_index] = $temp;
        }
        return $arr;
    }

    function insertionSort($arr) {
        $n = count($arr);
        for ($i = 1; $i < $n; $i++) {
            $key = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] > $key) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $key;
        }
        return $arr;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $array = explode(',', $_POST["array"]);
        $sort_method = $_POST["sort_method"];
        
        $array = array_map('trim', $array);
        
        $array = array_filter($array);

        $array = array_map('intval', $array);

        switch ($sort_method) {
            case 'bubble':
                $sorted_array = bubbleSort($array);
                break;
            case 'selection':
                $sorted_array = selectionSort($array);
                break;
            case 'insertion':
                $sorted_array = insertionSort($array);
                break;
            default:
                echo "Invalid sorting method selected.";
                break;
        }

        echo "<h3>Sorted Array:</h3>";
        echo implode(', ', $sorted_array);
    }
    ?>
</body>
</html>