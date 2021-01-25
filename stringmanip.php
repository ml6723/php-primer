<?php 
    $title = "String Manipulation";
    include 'includes/header.php';
?>

    <h1><?php echo $title ?></h1>
    
    <?php 
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "matea lencek";

        // concatination
        echo $phrase1.", named Tiffany, ".$phrase2."<br/>";

        echo '<hr/>';

        // string transformation
        echo 'Uppercase first letter: '.ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: '.ucwords($name).'<br/>';
        echo 'Uppercase: '.strtoupper($name).'<br/>';
        echo 'Lowercase: '.strtolower("THIS WAS ALL UPPER CASE.").'<br/>';

        echo '<hr/>';

        echo 'Repeat string: '.str_repeat('a', 10).'<br/>';
        echo 'Repeat string: '.strtoupper(str_repeat('a', 10)).'<br/>';

        echo 'Get a Substring: '.substr($name, 3, 6).'<br/>';

        echo 'Get position of string: '.strpos($name, 't').'<br/>';

        echo 'Find Character "T": ' . strchr($name, 'T').'<br/>';
        echo 'Find Character "t": ' . strchr($name, 't').'<br/>';

        echo 'Find length of string: ' . strlen($name).'<br/>';

        echo 'Without trim: ' . 'A' . ' B C D ' . 'E' . '<br/>';
        echo 'Trim spaces on both sides: ' . 'A' . trim(' B C D ') . 'E' . '<br/>';
        echo 'Trim spaces on left side: ' . 'A' . ltrim(' B C D ') . 'E' . '<br/>';
        echo 'Trim spaces on right side: ' . 'A' . rtrim(' B C D ') . 'E' . '<br/>';

        echo 'Replace string with another: ' . str_replace('stand', 'sit', $phrase2).'<br/>';

    ?>
<?php require 'includes/footer.php' ?>
