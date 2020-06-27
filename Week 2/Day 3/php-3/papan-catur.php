<!Doctype html>
<html>
    <head>
        <title>Papan Catur</title>
    </head>
    <body>
        <h1>Papan Catur</h1>
        <?php
            function papan_catur($angka) {
            // tulis kode di sini
            $temp = "";
            for($i = 0; $i < $angka; $i++){
                if ($i%2 == 0){
                    for ($j = 0; $j < $angka; $j++){
                        $temp .= "#&nbsp;";
                    }
                }
                else {
                    for ($j = 0; $j < $angka-1; $j++){
                        $temp .= "&nbsp;#";
                    }
                }
                $temp .= "<br>";
            }
            return $temp;
        }
        
        // TEST CASES
        $A = 4; $B = 8; $C = 5; 
        
        // $TEST = 20;
        
        echo "n = ". $A .": <br>". papan_catur($A). "<br>";
        /*
        # # # #
         # # #
        # # # #
         # # #
        */
        
        echo "n = ". $B .": <br>". papan_catur($B). "<br>";
        /* 
        # # # # # # # #
         # # # # # # # 
        # # # # # # # #
         # # # # # # # 
        # # # # # # # #
         # # # # # # #
        # # # # # # # #
         # # # # # # #
        */
        echo "n = ". $C .": <br>". papan_catur($C). "<br>";
        /*
        # # # # #
         # # # #
        # # # # #
         # # # # 
        # # # # #
        */
        echo "<br>";
        // echo "TEST n = ". $TEST .": <br>". papan_catur($TEST). "<br>";
    
        ?>
    </body>
</html>
