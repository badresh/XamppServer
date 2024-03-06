<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INHERITANCE</title>
</head>
<body>
    <center>
        <script>
            function showCheckboxes() {
                var radioValue = document.querySelector('input[name="option"]:checked').value;
                var checkboxesContainer = document.getElementById('checkboxes-container');
                checkboxesContainer.innerHTML = '';
                if (radioValue === 'BMW') {
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="BMW1"> G310RR</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="BMW2"> F850GS</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="BMW3"> S1000RR</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="BMW4"> R nineT</label><br>';
                } else if (radioValue === 'JAWA') {
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="JAWA1"> 350</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="JAWA2"> PERAK</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="JAWA3"> BOBBER 42</label><br>';
                }
                else if (radioValue === 'YAMAHA') {
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="YAMA1"> MT-15</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="YAMA2"> RX100</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="YAMA3"> RAY ZR</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="YAMA4"> R15 M</label><br>';
                }
                else if (radioValue === 'ROYAL ENFIELD') {
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="RE1"> GT650</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="RE2"> METEOR 350</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="RE3"> CLASSIC 350</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="RE4"> ELECTRA</label>   <br>';
                }
                else if (radioValue === 'HARLEY DAVIDSON') {
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="HD1"> SPORTSTER</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="HD2"> PAN AMERICA</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="HD3"> ROAD GLIDE</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="HD4"> NIGHSTER</label><br>';
                }
                else if (radioValue === 'INDIAN MOTORCYCLES') {
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="IM1"> FTR</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="IM2"> CHIEF DARK HORSE</label><br>';
                    checkboxesContainer.innerHTML += '<label><input type="checkbox" name="checkbox[]" value="IM3"> PURSUIT</label><br>';
                }
            }
        </script>
    <center><h1> BADRESH B - 211211101025 </h1><br>
    <h2> INHERITANCE </h2></center>
    <form method="post" action="">
    <input type="radio" name="option" value="BMW" onclick="showCheckboxes()"> BMW
    <input type="radio" name="option" value="JAWA" onclick="showCheckboxes()"> JAWA
    <input type="radio" name="option" value="YAMAHA" onclick="showCheckboxes()"> YAMAHA
    <input type="radio" name="option" value="ROYAL ENFIELD" onclick="showCheckboxes()"> ROYAL ENFIELD
    <input type="radio" name="option" value="HARLEY DAVIDSON" onclick="showCheckboxes()"> HARLEY DAVIDSON
    <input type="radio" name="option" value="INDIAN MOTORCYCLES" onclick="showCheckboxes()"> INDIAN MOTORCYCLES
    <div id="checkboxes-container">   
    </div>
    <br>
    <input type="submit" value="Submit">
</form>
</center>
<center>
    <br>
    <?php
class Motorcycle {
    protected $price;

    public function __construct($price) {
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }
}
class BMW extends Motorcycle {
    public function __construct($price) {
        parent::__construct($price);
    }
}
class Jawa extends Motorcycle {
    public function __construct($price) {
        parent::__construct($price);
    }
}
class Yamaha extends Motorcycle {
    public function __construct($price) {
        parent::__construct($price);
    }
}
class RoyalEnfield extends Motorcycle {
    public function __construct($price) {
        parent::__construct($price);
    }
}
class HarleyDavidson extends Motorcycle {
    public function __construct($price) {
        parent::__construct($price);
    }
}
class IndianMotorcycles extends Motorcycle {
    public function __construct($price) {
        parent::__construct($price);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['checkbox'])) {
        $checkboxes = $_POST['checkbox'];
        $totalCost = 0;
        $prices = array(
            "BMW1" => 310000,
            "BMW2" => 850000,
            "BMW3" => 2000000,
            "JAWA1" => 180000,
            "JAWA2" => 190000,
            "JAWA3" => 200000,
            "YAMA1" => 150000,
            "YAMA2" => 40000,
            "YAMA3" => 76000,
            "YAMA4" => 180000,
            "RE1" => 400000,
            "RE2" => 240000,
            "RE3" => 250000,
            "RE4" => 220000,
            "HD1" => 1020000,
            "HD2" => 1900000,
            "HD3" => 3000000,
            "HD4" => 1200000,
            "IM1" => 1800000,
            "IM2" => 2500000,
            "IM3" => 3000000
        );
        foreach ($checkboxes as $bikeModel) {
            $totalCost += $prices[$bikeModel];
        }
        echo "Total Cost: " . $totalCost;
    }
}