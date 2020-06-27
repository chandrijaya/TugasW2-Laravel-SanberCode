<!Doctype html>
<html>
    <head>
        <title>Ubah Huruf</title>
    </head>
    <body>
        <h1>Ubah Huruf</h1>
        <?php
            function ubah_huruf($string){
                $temp = "";
                for ($i = 0; $i < strlen($string); $i++) { 
                    # code...
                    if ($string[$i] == 'z'){
                        $temp .= 'a';
                    }
                    else {
                        $temp .= chr(ord($string[$i])+1);
                    }
                }
                return $temp;
            }

            // TEST CASES
            $A = "wow"; $B = "developer"; $C = "laravel"; $D = "keren"; $E = "semangat"; 
            
            // $TEST = "zimbabwe";
            
            echo $A ." : ". ubah_huruf($A) ."<br>"; // xpx
            echo $B ." : ". ubah_huruf($B) ."<br>"; // efwfmpqfs
            echo $C ." : ". ubah_huruf($C) ."<br>"; // mbsbwfm
            echo $D ." : ". ubah_huruf($D) ."<br>"; // lfsfo
            echo $E ." : ". ubah_huruf($E) ."<br>"; // tfnbohbu
            echo "<br>";
            // echo "TEST ". $TEST ." : ". ubah_huruf($TEST) ."<br>";
        ?>
    </body>
</html>
