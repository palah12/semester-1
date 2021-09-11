<?php

$hobi = [
    [
        'artikel' => 'detik.com',
        'berita' => [
            [ 'jenis' => 'olahraga',
               'jenisol' => [
                   ['jenisnya' => 'sepakbola',
                    'cabang' => [
                        ['cabangnya' =>'sepakbola nasional'],
                        ['cabangnya' => 'sepaakbola internasional'],
                    ]
                    ],
                    ['jenisnya'=> 'bulu tangkis',
                       'cabang'=> [
                           ['cabangnya'=>'bulu tangkis nasional'],
                           ['cabangnya'=>'bulu tangkis internasional'],
                       ]
                       ],
                       ['jenisnya'=>'atletik',
                           'cabang'=>[
                               ['cabangnya'=>'atletik nasional'],
                               ['cabangnya'=>'atletik internasional'],
                           ]
                       ]
               ]
                           ],
                           [ 'jenis' => 'ekonomi',
               'jenisol' => [
                   ['jenisnya' => 'saham',
                    'cabang' => [
                        ['cabangnya' =>'saham minyak pertamina'],
                        ['cabangnya' => 'saham minyak sawit'],
                    ]
                    ],
                    ['jenisnya'=> 'bank',
                       'cabang'=> [
                           ['cabangnya'=>'bank central asia'],
                           ['cabangnya'=>'bank negara indonesia'],
                       ]
                       ],
                       
               ]
                           ],
                           [ 'jenis' => 'politik',
               'jenisol' => [
                   ['jenisnya' => 'polisi',
                    'cabang' => [
                        ['cabangnya' =>'bunuh anak sendiri'],
                        ['cabangnya' => 'polisi suka judi'],
                    ]
                    ],
                    ['jenisnya'=> 'kpk',
                       'cabang'=> [
                           ['cabangnya'=>'kpk ko korupsi'],
                           ['cabangnya'=>'gampang di suap'],
                       ]
                       ],
                       
               ]
                           ],
                           
        ]
    ]
                        ];
     foreach ($hobi as $detail){
         echo "artikel :".$detail['artikel']. "<br>";
         echo "jenis berita:";
         echo "<ul>";
         foreach ($detail['berita'] as $jenis) {
             echo "<li>".$jenis['jenis']. "</li>";
             echo "</ul>";
             foreach($jenis['jenisol'] as $jenisnya){
                 echo "<ul>";
                 echo "<ul>";
                 echo "<li>" .$jenisnya['jenisnya']. "</li>";
                 echo "</ul>";
                 echo "</ul>";
                 foreach($jenisnya['cabang'] as $cabangnya){
                     echo "<ul>";
                     echo "<ul>";
                     echo "<ul>";
                     echo "<li>".$cabangnya['cabangnya']. "</li>";
                     echo "</ul>";
                     echo "</ul>";
                     echo "</ul>";
                 }
             }
         }
     }