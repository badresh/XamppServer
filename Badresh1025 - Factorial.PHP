<!DOCTYPE html>
<html>
<head>
    <title>Factorial Program</title>
    <link rel="stylesheet" href="php4.css">
    <style>
        .headr{
            font-size: 30px;
            font-weight: 700;
        }
        .num{
            font-size: 30px;
            font-weight: 700;
        }
        table {
            border-collapse: collapse;
            width: 30%;
            margin: auto;
            color: black;
            background-color: transparent;
            
            
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            
        }
    </style>
</head>
<body>
    <center>
    <div class="headr">
        <h2>Badresh B - 211211101025</h2>
        <h2>Factorial number</h2>
    </div>
    <video class="videobackground" src="jetty.mp4" autoplay muted loop plays-inline></video>
    <form method="POST">
    <div class="head1">
        <label class="num">Enter a number:</label>
        <input type="number" name="Factorial">
        <input type="submit" value="Submit" name="submitForm"><br><br>
    </div>
        
    </form>
    <?php
    // example to demonstrate factorial of a number using form
    if(isset($_POST["submitForm"])) {
        $input = $_POST["Factorial"];
        if(is_numeric($input) && $input >= 0) {
            echo '<table>';
            echo '<tr><th>Number</th><th>Factorial</th></tr>';
            for($i = $input; $i >= 1; $i--) {
                $fact = 1;
                for($j = $i; $j >= 1; $j--) {
                    $fact *= $j;
                }
                echo '<tr><td>' . $i . '</td><td>' . $fact . '</td></tr>';
            }
            echo '</table>';
        } else {
            echo '<br> Please enter a valid non-negative number.';
        }
    }
    ?>
    <input type="reset"> <button class="backbtn" onclick="history.back()"> Back to Home </button>
    </center>
</body>
</html>
