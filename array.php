<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php';
?>

    <h1><?php echo $title ?></h1>
    <?php 
        // variable
        $num = 3;

        // array
        // only one datatype - homogenous array
        $numbers = array(1,2,3,4,5,6,7,8,9,10,345,12,22,34,56,77,87,123,456,234);
        
        // access the value using index
        echo "<p>$numbers[5]</p>";

        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";

        for($count=0; $count<$size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
    
<?php require 'includes/footer.php' ?>
