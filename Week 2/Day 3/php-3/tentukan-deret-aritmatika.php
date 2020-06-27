<!Doctype html>
<html>
    <head>
        <title>Tentukan Deret Aritmatika</title>
    </head>
    <body>
        <h1>Tentukan Deret Aritmatika</h1>
        <?php
            function tentukan_deret_aritmatika($arr) {
                // kode di sini
                $i = count($arr)-1;
                $range = $arr[$i]-$arr[$i-1];
                $check = true;
                $i--;

                do {
                    $check = $arr[$i]-$arr[$i-1] == $range;
                    $i--;
                }
                while($i>1 & $check);
                return $check;
            }
            
            // TEST CASES
            $A = [1, 2, 3, 4, 5, 6]; 
            $B = [2, 4, 6, 12, 24]; 
            $C = [2, 4, 6, 8]; 
            $D = [2, 6, 18, 54]; 
            $E = [1, 2, 3, 4, 7, 9]; 
            
            // $TEST = [13, 24, 35, 46, 57, 68, 79, 90, 101];
            
            echo print_r($A) ." : Aritmatika = ". (tentukan_deret_aritmatika($A)? 'true':'false') ."<br>"; // true
            echo print_r($B) ." : Aritmatika = ". (tentukan_deret_aritmatika($B)? 'true':'false') ."<br>"; // false
            echo print_r($C) ." : Aritmatika = ". (tentukan_deret_aritmatika($C)? 'true':'false') ."<br>"; // true
            echo print_r($D) ." : Aritmatika = ". (tentukan_deret_aritmatika($D)? 'true':'false') ."<br>"; // false
            echo print_r($E) ." : Aritmatika = ". (tentukan_deret_aritmatika($E)? 'true':'false') ."<br>"; // false
            echo "<br>";
            // echo "TEST ". print_r($TEST) ." : Aritmatika = ". tentukan_deret_aritmatika($TEST)? 'true':'false' ."<br>";
        ?>
    </body>
</html>