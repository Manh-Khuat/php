<?php

// $stt_nguoi = 1;
// for ($i = 0; $i < 3; $i++) {
//     echo "<h2>Hello Word</h2>";
// }

// for (; $stt_nguoi < 3; $stt_nguoi++) {
//     echo "Chào người thứ " . $stt_nguoi, "<br />";
// };
// for (; $stt_nguoi < 5;) {
//     $stt_nguoi++;
//     echo "Chào người thứ " . $stt_nguoi, "<br />";
// }

// for (;;) {
//     if ($stt_nguoi < 7) {
//         echo "Chào người thứ " . $stt_nguoi, "<br />";
//         $stt_nguoi++;
//     } else {
//         break;
//     }
// }

// Contiunue, break
// for ($i = 0; $i < 11; $i++) {
//     if ($i === 5) {
//         continue;
//     }
//     if ($i === 9) {
//         break;
//     }
//     echo "Người thứ ".$i;
// }

//while
// $stt = 0;
// while ($stt < 11) {
//     echo "Người thứ ".$stt;
//     $stt++;
// }


// do-while 
// $stt = 1;
// do {
//     echo "Người thứ " .$stt;
//     $stt++;
// } while($stt < 1);

//array
$mang = array('phan tu 1', 'phan tu 2', 3);
echo $mang[0];
var_dump($mang);

$mang2 = array(
    'key1' => 'phan tu1',
    'key2' => 'phan tu 2',
    'key3' => 3
);
echo $mang2['key1'];

$arr = [
    'toan' => 10,
    'ly' => 9
];

echo '<pre>';
var_dump($arr);
echo '</pre>';

foreach($arr as $key => $value) {
    echo "$key = $value";
}


?>