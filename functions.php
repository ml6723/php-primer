<?php 
    $title = "Functions";
    include 'includes/header.php';
?>

<h1><?php echo $title ?></h1>

    <?php 
        // defining a function

        function writeMessage(){
            echo "You're a really nice person, have a nice time! <br/>";
        }

        // calling a function

        writeMessage();
        echo "<hr/>";
        writeMessage();

        echo "<hr/>";

        // functions with parameters

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum. <br/>";
        }

        // pass by reference - use '&' in parameter

        function changeNum(&$num){
            $num += 10;
        }

        function returnProduct($num1, $num2){
            return $num1 * $num2;
        }

        $num = 500;
        addFunction(5,3);
        addFunction(10, $num);
        addFunction('10', "50");

        echo "<hr/>";

        changeNum($num);
        echo $num . '<br/>';

        echo "<hr/>";

        //$return_value = returnProduct(10, 200);
        echo returnProduct(10, 200) . '<br/>'

    ?>
<?php require 'includes/footer.php' ?>
