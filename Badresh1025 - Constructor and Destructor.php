<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Shop</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    label{
        font-weight: bold;
      
        
    }

    .box {
        display: flex;
        flex-direction: column;
        
    }
   
    
</style>
<body>
 
    <h2>BADRESH B - 211211101025</h2>  
    <h2>Welcome to our Ice Cream Shop!</h2>
    <div class="box">
    <form method="POST" action="">
        <label>Select Flavor:</label><br>   
        
            <input type="radio" name="flavor" value="Pumpkin">Pumpkin<br>
            <input type="radio" name="flavor" value="London Fog">London Fog<br>
            <input type="radio" name="flavor" value="Chunky Banana">Chunky Fruit<br>   
            <input type="radio" name="flavor" value="Cream Cheese">Cream Cheese<br>
            <input type="radio" name="flavor" value="Cinnamon-Basil">Cinnamon-Basil<br>
            <input type="radio" name="flavor" value="Toasted Hazelnuts">Toasted Hazelnuts<br>
            <input type="radio" name="flavor" value="Lavender Peach Gelato">Lavender Peach Gelato<br>
            <input type="radio" name="flavor" value="Triple Chocolate Ricotta">Triple Chocolate Ricotta<br><br>
        </ul> 
        <label>Number of Scoops: </label>
        <input type="number" name="quantity" min="1" max="10" required>
        <input type="submit" name="submit" value="Place Order"><br><br>     
    </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $flavor = $_POST['flavor'];
        $quantity = $_POST['quantity'];

        interface OrderInterface {
            public function placeOrder();
        }

        class IcecreamShop implements OrderInterface {
            public $flavor;
            public $quantity;

            public function __construct($flavor, $quantity) {
                $this->flavor = $flavor;
                $this->quantity = $quantity;
                echo "<center>You have selected $quantity scoop(s) of $flavor ice cream</center>.<br><br>";
            }

            public function __destruct() {
                echo "Thank you for visiting our ice cream shop!<br>";
            }

            // public function displayOrder() {
            //     echo "Your order: $this->quantity scoop(s) of $this->flavor ice cream<br><br>";
            // }

            public function placeOrder() {
                echo "<center>Your order has been successfully placed!</center><br><br>";
            }
        }

        $icecreamOrder = new IcecreamShop($flavor, $quantity);
        // $icecreamOrder->displayOrder();
        $icecreamOrder->placeOrder();
    }
?>

</body>
</html>
