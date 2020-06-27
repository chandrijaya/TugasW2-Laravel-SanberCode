<!-- Chandra Aldiwijaya -->
<!-- chandra.aldiwijaya.694@gmail.com -->

<!Doctype html>
<html>
    <head>
        <title>Palindrome Angka</title>
    </head>
        <body>
        <h1>Palindrome Angka</h1>
        <?php
            function palindrome_angka($angka) {
                // tulis kode di sini
                $temp = strval($angka); 
                //Untuk mencegah kasus input palindrome, terutama angka 9. Misal: 9, 99, 999, 9999, dst
                if($temp == strrev($temp)){
                    $angka++;
                    $temp = strval($angka);
                }
                //Jika hanya satu digit, langsung return nilai
                $n = strlen($temp);
                if ($n == 1){
                    return $angka;
                }

                for($i = 0; $i < floor($n/2); $i++){
                    $a = intval($temp[$i]); //Sayap kiri ke-i dari pertama
                    $b = intval($temp[($n - $i) - 1]); //Sayap kanan ke-i dari terakhir
                    if ($a > $b){
                        //Sayap kanan akan ditambah sampai nilainya sama dengan sayap kiri, per digitmmya (satuan, puluhan, dst)
                        $angka += (($a - $b)*pow(10, $i)); 
                        $temp = strval($angka);
                    }
                    else if (intval($temp[$i] < intval($temp[$n - ($i+1)]))){
                        //Sayap kanan akan ditambah sampai nilainya sama dengan sayap kiri, per digitmmya (satuan, puluhan, dst)
                        //Kasus ini akan membuat digit selanjutnya bertambah satu
                        $angka += (10 - ($b-$a))*pow(10, $i);
                        $temp = strval($angka);
                        
                        //Karena penambahan satu ini akan merubah nilai sayap kiri, jika ada angka 9 di sayap kiri
                        //ini akan mengecek jika kedua sayap masih sama atau tidak nilainya
                        //jika tidak, looping akan mengulang selangkah lagi
                        $a_ = intval($temp[$i]);
                        $b_ = intval($temp[($n - $i) - 1]);
                        if($a_ != $b_){
                            $i--;
                        }

                    }
                    else{
                        //Kasus dimana sayap kanan dan kiri masih sama, berlaku juga jika hanya satu digit input angka
                        $temp = strval($angka);
                    }
                }
                return $angka;
            }

            // TEST CASES
            $A = 8; $B = 10; $C = 117; $D = 175; $E = 1000; 
            
            //$TEST = 99279830975;
            
            echo $A ." : ". palindrome_angka($A) ."<br>"; // 9
            echo $B ." : ". palindrome_angka($B) ."<br>"; // 11
            echo $C ." : ". palindrome_angka($C) ."<br>"; // 121
            echo $D ." : ". palindrome_angka($D) ."<br>"; // 181
            echo $E ." : ". palindrome_angka($E) ."<br>"; // 1001
            echo "<br>";
            //echo "TEST ". $TEST ." : ". palindrome_angka($TEST) ."<br>";
        ?>
    </body>
</html>

<!-- Chandra Aldiwijaya -->
<!-- chandra.aldiwijaya.694@gmail.com -->