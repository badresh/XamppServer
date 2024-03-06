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
        <input type="radio" id="merge" name="sort_method" value="merge">
        <label for="merge">Merge Sort</label><br>
        <input type="radio" id="quick" name="sort_method" value="quick">
        <label for="quick">Quick Sort</label><br>
        <input type="radio" id="insertion" name="sort_method" value="insertion">
        <label for="insertion">Insertion Sort</label><br><br>
        <input type="submit" value="Sort">
    </form>

    <?php
    function mergeSort($arr) {
        $n = count($arr);
        if ($n <= 1) {
            return $arr;
        }
        $mid = (int)($n / 2);
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);
        $left = mergeSort($left);
        $right = mergeSort($right);
        return merge($left, $right);
    }

    function merge($left, $right) {
        $result = [];
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] <= $right[0]) {
                array_push($result, array_shift($left));
            } else {
                array_push($result, array_shift($right));
            }
        }
        while (count($left) > 0) {
            array_push($result, array_shift($left));
        }
        while (count($right) > 0) {
            array_push($result, array_shift($right));
        }
        return $result;
    }

    function quickSort($arr) {
        $n = count($arr);
        if ($n <= 1) {
            return $arr;
        }
        $pivot = $arr[0];
        $left = $right = [];
        for ($i = 1; $i < $n; $i++) {
            if ($arr[$i] < $pivot) {
                $left[] = $arr[$i];
            } else {
                $right[] = $arr[$i];
            }
        }
        return array_merge(quickSort($left), [$pivot], quickSort($right));
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
            case 'merge':
                $sorted_array = mergeSort($array);
                break;
            case 'quick':
                $sorted_array = quickSort($array);
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
