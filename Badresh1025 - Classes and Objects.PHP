<!DOCTYPE html>
<?php
$url = "800.jpg";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
</head>
<style>
	body{
			background-image:url('<?php echo $url;?>');
			background-size:cover;
			background-position:fixed;
			background-repeat:no-repeat;
		}
</style>
<body>
	<center><p><center><h1> BADRESH - 211211101025 <br><br> Inventory System</h1></center></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter the product quantity <input type="number" name="num1"> <br><br>
        Enter the manufacture cost per product <input type="number" name="num2"> <br> <br>
		Enter the damaged product <input type="number" name="num3">  <input type="submit" value="Submit"> <br> <br>
		<br><br>
    </form> 
		<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantity = $_POST["num1"];
        $manufactureCost = $_POST["num2"];
		$dpq = $_POST["num3"];

    class Product {	
        private $quantity;
        private $manufactureCost;
		private $dpq;
		
        public function __construct($quantity, $manufactureCost,$dpq) {
            $this->quantity = $quantity;
            $this->manufactureCost = $manufactureCost;
			$this->damage = $dpq;
            }
        public function getTotalCost() {
            return $this->quantity * $this->manufactureCost;
            }
		public function getAvgBenefit() {
			return (($this->manufactureCost)*0.10);

			}
		public function getInclCGST() {
			return ($this->manufactureCost)*0.09;
			}
		public function getInclSGST() {
			return ($this->manufactureCost)*0.09;
			}
		public function getMarBenefit() {
			return ($this->manufactureCost)*0.20;
			}

		public function getDamagedproduct(){
			return($this->damage);
		}	
	}
        $product = new Product($quantity, $manufactureCost,$dpq);
        $totalCost = $product->getTotalCost();
		$avgbenefit = $product->getAvgBenefit();
		$cgst = $product->getInclCGST();
		$sgst = $product->getInclSGST();
		$margin = $product->getMarBenefit();
		$dam = $product->getDamagedproduct();
		echo "MANUFACTURER PHASE<br>";
        echo "Total manufacture Cost: ₹" . $totalCost . "<br>";
		echo "Average Benefit : ₹" . $avgbenefit . "<br>";
		echo " CGST 9%: ₹" . $cgst . "<br>";
		echo " SGST 9%: ₹" . $sgst . "<br>";
		echo "Total GST Cost: ₹" .$sgst + $cgst . "<br>";
		echo "Marginal Benefit: ₹" . $margin . "<br>";
		echo " Actual Dealer Price: ₹" .$manufactureCost + $cgst + $sgst + $margin . "<br>";
		echo " Total Deal Cost: ₹" . ($manufactureCost + $cgst + $sgst + $margin)*$quantity . "<br>";
		echo "<br><br>DEALER PHASE<br>";
		echo "Selling price per product: ₹" .intval(($manufactureCost + $cgst + $sgst + $margin)*0.40) + ($manufactureCost + $cgst + $sgst + $margin) . "<br>";
		echo "Total Selling Cost: ₹" .intval((($manufactureCost + $cgst + $sgst + $margin)*0.40) + ($manufactureCost + $cgst + $sgst + $margin)) * $quantity . "<br>";
		echo "<br><br>DAMAGED PRODUCT PHASE<br>";
		echo "Damaged product quantity : " . $dam . "<br>";
		echo "Each damaged product selling price : ₹" .intval((($manufactureCost + $cgst + $sgst + $margin)*0.40) + ($manufactureCost + $cgst + $sgst + $margin)/2). "<br>";
		echo "Total damaged product selling price : ₹" .intval(((($manufactureCost + $cgst + $sgst + $margin)*0.40) + ($manufactureCost + $cgst + $sgst + $margin)/2)*$dam) . "<br>"."<br>";
    }	
?>
</center>
</body>
</html>