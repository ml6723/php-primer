<?php 
    $title = "Index";
    include 'includes/header.php';
?>

    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php
        // Printing to HTML using echo
        echo 'Hello PHP!';
        // echo HTML tags
        echo '<br/>';
        echo 'Second line';
        echo '<br/>';

        // Declare variable
        $name = 'Matea';
        $age = 28;

        // echo variable
        echo $name;

        // echo concatinated string with variable
        echo '<h1>My name is: '.$name.'</h1>';
        echo '<h1>My age is: '.$age.'</h1>';

        // echo using double quotes and interpolation
        echo "<h1>My name is: $name</h1>"

    ?>

    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>



<?php require 'includes/footer.php' ?>