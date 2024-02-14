<?php

class Product {
    public $name;
    public $quantity;
    public $unitCost;
    public $sellingPrice;

    public function __construct($name, $quantity, $unitCost, $sellingPrice) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->unitCost = $unitCost;
        $this->sellingPrice = $sellingPrice;
    }

    public function calculateValue() {
        return $this->quantity * $this->unitCost;
    }

    public function calculateProfitLoss() {
        return ($this->quantity * $this->sellingPrice) - ($this->quantity * $this->unitCost);
    }
}

class InventorySystem {
    private $products = [];

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function getProduct($productName) {
        foreach ($this->products as $product) {
            if ($product->name === $productName) {
                return $product;
            }
        }
        return null;
    }

    public function getInventoryValue() {
        $totalValue = 0;
        foreach ($this->products as $product) {
            $totalValue += $product->calculateValue();
        }
        return $totalValue;
    }

    public function getProfitLoss() {
        $totalProfitLoss = 0;
        foreach ($this->products as $product) {
            $totalProfitLoss += $product->calculateProfitLoss();
        }
        return $totalProfitLoss;
    }

    public function getDashboard() {
        $dashboard = "Inventory Dashboard\n";
        $dashboard .= "-------------------\n";
        $dashboard .= "Product Name | Quantity | Unit Cost | Selling Price | Total Value\n";
        foreach ($this->products as $product) {
            $dashboard .= sprintf("%-12s | %-8d | %-9.2f | %-13.2f | %-11.2f\n",
                $product->name, $product->quantity, $product->unitCost, $product->sellingPrice,
                $product->quantity * $product->unitCost);
        }
        $dashboard .= "\nTotal Inventory Value: " . $this->getInventoryValue() . "\n";
        $dashboard .= "Total Profit/Loss: " . $this->getProfitLoss() . "\n";
        return $dashboard;
    }
}

// Create inventory system
$inventorySystem = new InventorySystem();

// Add products to inventory
$inventorySystem->addProduct(new Product("Product A", 100, 5, 10));
$inventorySystem->addProduct(new Product("Product B", 50, 8, 15));

// Display inventory dashboard
echo $inventorySystem->getDashboard();
?>
