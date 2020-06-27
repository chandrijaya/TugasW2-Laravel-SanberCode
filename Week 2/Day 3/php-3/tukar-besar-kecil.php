<!Doctype html>
<html>
    <head>
        <title>Tukar Besar Kecil</title>
    </head>
    <body>
        <h1>Tukar Besar Kecil</h1>
        <?php
            function tukar_besar_kecil($string){
                //kode di sini
                $temp = "";
                for($i = 0; $i < strlen($string); $i++){
                    if (ctype_upper($string[$i])){
                        $temp .= strtolower($string[$i]);
                    }
                    else {
                        $temp .= strtoupper($string[$i]);
                    }
                }
                return $temp;
            }

            // TEST CASES
            $A = "Hello World"; $B = "I aM aLAY"; $C = "My Name is Bond!!"; $D = "IT sHOULD bE me"; $E = "001-A-3-5TrdYW"; 
            
            // $TEST = "?LJD:lNSdc;oHSD:X>c,mZL.l.,ckal>?zxcZJKXHZm/c.?";
            
            echo $A ." : ". tukar_besar_kecil($A) ."<br>"; // "hELLO wORLD"
            echo $B ." : ". tukar_besar_kecil($B) ."<br>"; // "i Am Alay"
            echo $C ." : ". tukar_besar_kecil($C) ."<br>"; // "mY nAME IS bOND!!"
            echo $D ." : ". tukar_besar_kecil($D) ."<br>"; // "it Should Be ME"
            echo $E ." : ". tukar_besar_kecil($E) ."<br>"; // "001-a-3-5tRDyw"
            echo "<br>";
            // echo "TEST ". $TEST ." : ". tukar_besar_kecil($TEST) ."<br>";
        ?>
    </body>
</html>
