<?php
 //checks to see if there is something in the select 
if (isset($_POST['pizza'])) {
    //captures the select field as a variable.
    $pizzaSize = $_POST['pizza'];
 
    $pizzaPrice = 0;
    $toppingPrice = 0;
    $orderTotal = 0;

    if ($pizzaSize == 'small pizza') {
        $pizzaPrice = 9.00;
        echo "You have selected a small pizza which costs $9.00 ";
        echo"<br>";
        
    }

    if ($pizzaSize == 'medium pizza') {
        $pizzaPrice = 12.50;
        echo "You have selected a medium pizza which costs $12.50 ";
        echo"<br>";
    }

    if ($pizzaSize == 'large pizza') {
        $pizzaPrice = 15.00;
        echo "You have selected a large pizza which costs $15.00 ";
        echo"<br>";
    }

    if ($pizzaSize == 'extra large pizza') {
        $pizzaPrice = 17.50;
        echo "You have selected a large pizza which costs $17.50 ";
        echo"<br>";
    }

    $orderTotal = $pizzaPrice + $orderTotal;

    //Checks to see if the checkbox has something in it and checks if the value is 1 which means its clicked.
    if(isset($_POST['cheese'] ) && $_POST['cheese']==1) {
        echo "Cheese was added to your order! Free of charge! ";
        echo"<br>";
    }         

    if(isset($_POST['pepperoni'] ) && $_POST['pepperoni']==1) {
        $toppingPrice = 1.00;
        $orderTotal = $toppingPrice + $orderTotal;
        echo "Pepperoni was added to your order! For $1 ";
        echo"<br>";
    }

    if(isset($_POST['olive'] ) && $_POST['olive']==1) {
        $toppingPrice = 1.00;
        $orderTotal = $toppingPrice + $orderTotal;
        echo "Olives were added to your order! For $1 ";
        echo"<br>";
    }

    if(isset($_POST['pineapple'] ) && $_POST['pineapple']==1) {
        $toppingPrice = 1.00;
        $orderTotal = $toppingPrice + $orderTotal;
        echo "Pineapple was added to your order! For $1 ";
        echo"<br>";
    }

    if(isset($_POST['ham'] ) && $_POST['ham']==1) {
        $toppingPrice = 1.00;
        $orderTotal = $toppingPrice + $orderTotal;
        echo "Ham was added to your order! For $1 ";
        echo"<br>";
    }

    //Displays the total prices
    echo "Your total order comes to $", $orderTotal;

}
?>