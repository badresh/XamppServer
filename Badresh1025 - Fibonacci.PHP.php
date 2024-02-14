<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            color: black;
            font-size: 20px;
            font-weight: 700;
        }
       
        table {
            border-collapse: collapse;
            width: 20%;
            margin: 20px auto;
            background-color: transparent;
            text: 
            
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: transparent;
        }
    </style>
   <center><h1>BADRESH B - 211211101025</h1>
    <title>Fibonacci Series</title></center>
    <link rel="stylesheet" href="php3.css">
</head>
<body>

    <video class="videobackground" src="girl.mp4" autoplay muted loop plays-inline ></video>
    <form><center>
    <label class="text">Enter the fibonacci number</label>
    <input type="number" name="Fibonacci">
    <input type="submit" value="submit" name="submitForm"></br></br>
    </form></center>
</body>
</html>
<?php
if(isset($_GET["submitForm"]))
{
    $num=$_GET['Fibonacci'];
    $a=0;
    $b=1;
    echo "<center><h2>Fibonacci series for $num elements:</h2></center>";
    echo "<center><table>";
    echo "<tr><th>Index</th><th>Fibonacci Number</th></tr>";
    echo "<tr><td>1</td><td>$a</td></tr>";
    echo "<tr><td>2</td><td>$b</td></tr>";
    $i=2;
    while($i<$num)
    {
        $next=$a+$b;
        echo "<tr><td>".($i+1)."</td><td>$next</td></tr>";
        $a=$b;
        $b=$next;
        $i++;
    }
    echo "</table></center>";
}
?>

<center><input type="reset"> <button class="backbtn" onclick="history.back()"> Back to Home </button></center>
</body>
</html>

