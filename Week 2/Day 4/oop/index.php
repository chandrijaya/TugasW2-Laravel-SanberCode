<!Doctype html>
<html>
    <head>
        <title>OOP PHP</title>
    </head>
    <body>
        <h1>OOP PHP</h1>
        <?php
            require_once 'animal.php'; 
            require_once 'Ape.php'; 
            require_once 'Frog.php'; 
            
            $sheep = new Animal("shaun");
            echo $sheep->get_name(). "<br>"; // "shaun"
            echo $sheep->get_legs(). "<br>"; // 2
            echo $sheep->get_cold_blooded()? 'true':'false'; // false        
            echo "<br><br>";

            $sungokong = new Ape("kera sakti");
            $sungokong->yell();// "Auooo"
            
            $kodok = new Frog("buduk");
            $kodok->jump(); // "hop hop"
            echo "<br>";
            //TESTING KAKI

            echo $sheep->get_name(). " The Sheep kakinya ada ".$sheep->get_legs(). "<br>";
            echo "Kodok ". $kodok->get_name() ." kakinya ada ".$kodok->get_legs(). "<br>";
        ?>
    </body>
</html>
