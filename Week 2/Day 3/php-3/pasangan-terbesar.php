<!Doctype html>
<html>
    <head>
        <title>Pasangan Terbesar</title>
    </head>
    <body>
        <h1>Pasangan Terbesar</h1>
        <?php
            function pasangan_terbesar($angka){
                // kode di sini
                if (strlen(strval($angka)) < 3){
                    die ("Angka harus 3 digit atau lebih besar");
                }
                
                $temp = array_fill(0, strlen(strval($angka)-1), 0);
                for ($i = 0; $i < strlen(strval($angka)-1); $i++){
                    $temp[$i] = intval(substr(strval($angka),$i, 2));
                }
                return max($temp);
            }
            
            // TEST CASES
            $A = 641573; $B = 12783456; $C = 910233; $D = 71856421; $E = 79918293; 
            
            // $TEST = 593787673506;
            
            echo $A ." : ". pasangan_terbesar($A). "<br>"; // 73
            echo $B ." : ". pasangan_terbesar($B). "<br>"; // 83
            echo $C ." : ". pasangan_terbesar($C). "<br>"; // 91
            echo $D ." : ". pasangan_terbesar($D). "<br>"; // 85
            echo $E ." : ". pasangan_terbesar($E). "<br>"; // 99
            echo "<br>";
            // echo "TEST ". $TEST ." : ". pasangan_terbesar($TEST). "<br>";
        ?>
    </body>
</html>