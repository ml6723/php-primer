<?php 
    $title = "While Loop";
    include 'includes/header.php';
?>
    <h1><?php echo $title ?></h1>

    <?php 
        $grade = 0;

        // Pre-condition loop
        while($grade < 10){
            echo '<p>I am less than 10!</p>';
            $grade++;
        }

        echo '<p>Exit loop</p>';
    ?>

    <h1>Do-While Loop</h1>
    <?php 
        // Post-condition Loop
        $grade = 0;
        do {
            echo '<p>I am do-while loop!</p>';
            $grade++;
        } while($grade < 10);

        echo '<p>Exit loop</p>';
    ?>

<?php require 'includes/footer.php' ?>
