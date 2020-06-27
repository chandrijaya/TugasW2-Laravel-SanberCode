<!Doctype html>
<html>
    <head>
        <title>Tentukan Deret Geometri</title>
    </head>
    <body>
        <h1>Tentukan Deret Geometri</h1>
        <?php
            function tentukan_deret_geometri($arr) {
                // kode di sini
                $i = count($arr)-1;
                $ratio = $arr[$i]/$arr[$i-1];
                $check = true;

                $i--;
                do {
                    $check = ($arr[$i]/$arr[$i-1]) == $ratio;
                    $i--;
                }
                while($i>1 & $check);

                return $check;
            }
            
            //TEST CASES
            $A = [1, 3, 9, 27, 81]; 
            $B = [2, 4, 8, 16, 32]; 
            $C = [2, 4, 6, 8]; 
            $D = [2, 6, 18, 54]; 
            $E = [1, 2, 3, 4, 7, 9]; 
            
            // $TEST = [256, 128, 64, 32, 16, 8, 4, 2];
            
            echo print_r($A) ." : Geometri = ". (tentukan_deret_geometri($A)? 'true':'false') ."<br>"; // true
            echo print_r($B) ." : Geometri = ". (tentukan_deret_geometri($B)? 'true':'false') ."<br>"; // true
            echo print_r($C) ." : Geometri = ". (tentukan_deret_geometri($C)? 'true':'false') ."<br>"; // false
            echo print_r($D) ." : Geometri = ". (tentukan_deret_geometri($D)? 'true':'false') ."<br>"; // true
            echo print_r($E) ." : Geometri = ". (tentukan_deret_geometri($E)? 'true':'false') ."<br>"; // false
            echo "<br>";
            // echo "TEST ". print_r($TEST) ." : Geometri = ". (tentukan_deret_geometri($TEST)? 'true':'false') ."<br>";
        ?>
    </body>
</html>