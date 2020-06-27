<!Doctype html>
<html>
    <head>
        <title>Cari Mean</title>
    </head>
    <body>
        <h1>Cari Mean</h1>
        <?php
            function cari_mean($arr){
                //kode di sini
                $sum = 0;
                $n = count($arr);
                foreach($arr as $i){
                    $sum += $i;
                }
                $mean = round($sum/$n);
                return $mean;
            }
            
            // TEST CASE 
            $A = [1, 2, 3, 4, 5]; 
            $B = [3, 5, 7, 5, 3]; 
            $C = [6, 5, 4, 7, 3]; 
            $D = [1, 3, 3]; 
            $E = [7, 7, 7, 7, 7]; 
            
            // $TEST = [14, 12, 52, 76, 85, 23, 46, 91];
            
            echo print_r($A) ." : Mean = ". cari_mean($A) ."<br>"; // 3
            echo print_r($B) ." : Mean = ". cari_mean($B) ."<br>"; // 5
            echo print_r($C) ." : Mean = ". cari_mean($C) ."<br>"; // 5
            echo print_r($D) ." : Mean = ". cari_mean($D) ."<br>"; // 2
            echo print_r($E) ." : Mean = ". cari_mean($E) ."<br>"; // 7
            echo "<br>";
            // echo "TEST ". print_r($TEST) ." : Mean = ". cari_mean($TEST) ."<br>";
        ?>
    </body>
</html>
