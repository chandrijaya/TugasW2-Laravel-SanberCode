<!Doctype html>
<html>
    <head>
        <title>Score Terbesar</title>
    </head>
    <body>
        <h1>Score Terbesar</h1>
        <?php
            function skor_terbesar($arr){
                //kode di sini
                $temp = [];
                foreach ($arr as $data) {
                    # code...
                    echo print_r($data). "<br>";
                    echo $data['kelas']. "<br>";
                    if (array_key_exists($data['kelas'], $temp)){
                        if ($data['nilai'] > $temp[$data['kelas']]['nilai']){
                            echo $temp[$data['kelas']]['nilai']. "<br>";
                            $arr_result[$data['kelas']] = $data;
                        }
                    }
                    else {
                        
                        $temp[$data['kelas']] = $data;
                        echo print_r($temp[$data['kelas']]). "<br>";
                    }
                }
                return $temp;
            }

            // TEST CASES
            $skor = [
            [
                "nama" => "Bobby",
                "kelas" => "Laravel",
                "nilai" => 78
            ],
            [
                "nama" => "Regi",
                "kelas" => "React Native",
                "nilai" => 86
            ],
            [
                "nama" => "Aghnat",
                "kelas" => "Laravel",
                "nilai" => 90
            ],
            [
                "nama" => "Indra",
                "kelas" => "React JS",
                "nilai" => 85
            ],
            [
                "nama" => "Yoga",
                "kelas" => "React Native",
                "nilai" => 77
            ],
            ];

            print("<pre>". print_r(skor_terbesar($skor), true) ."</pre>");
            /* OUTPUT
            Array (
                [Laravel] => Array
                        (
                            [nama] => Aghnat
                            [kelas] => Laravel
                            [nilai] => 90
                        )
                [React Native] => Array
                            (
                                [nama] => Regi
                                [kelas] => React Native
                                [nilai] => 86
                            )
                [React JS] => Array
                            (
                            [nama] => Indra
                            [kelas] => React JS
                            [nilai] => 85
                            )
            )
            */
            ?>
    </body>
</html>
