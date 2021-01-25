<?php 
    $title = "Date and Time Manipulation";
    include 'includes/header.php';
?>

    <h1><?php echo $title ?></h1>
    <?php 
        $datenow = getdate();
        echo "Today's date: <br/>";
        echo $datenow['mday'] . '<br/>'; // day of month
        echo $datenow['mon'] . '<br/>'; // month
        echo $datenow['year'] . '<br/>'; // year

        echo "Today's date: " . $datenow['mday'] . '/' .$datenow['mon'] . '/' . $datenow['year'] .'<br/>';

        echo time().'<br/>'; // unix value

        print date("m/d/z G.i:s<br>", time()) . '<br/>';
        print 'Today is ';
        print date("j of F Y, \a\\t g.i a", time()) . '<br/>';

    ?>
<?php require 'includes/footer.php' ?>
