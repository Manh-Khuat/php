<?php 
function HelloWorld() {
    echo "Hello World <br />";
};

HelloWorld();

function Parame($tham_so = 'giá trị tham số mặc định') {
    echo 'Đây là ' .$tham_so .'<br />';
}

Parame('tham số');
Parame();

// tham trị
$du_lieu_goc = 5;
function ham_tham_tri($tham_tri) {
    $tham_tri++;
    echo $tham_tri;
}
ham_tham_tri($du_lieu_goc);
echo $du_lieu_goc, '<br />';

// tham chiếu
function ham_tham_chieu(&$tham_chieu) {
    $tham_chieu++;
    echo $tham_chieu;
}

ham_tham_chieu($du_lieu_goc);
echo $du_lieu_goc;

$ham_ano = function() {
    echo 'Hàm ano', '<br />';
};

$ham_ano();

$so = 10;
$arr_func = [
    'func1' => function() {
        echo 'Hàm 1' .'<br />';
    },
    'func2' => function($tham_so = 1) {
        $tham_so++;
        echo 'Hàm 2' .$tham_so .'<br />';
    }, 
    'func3' => function(&$tham_so = 1) {
        $tham_so++;
        echo 'Hàm 3' .$tham_so .'<br />';
    }
];

$arr_func['func1']();
$arr_func['func2']($so);
$arr_func['func3']($so);
echo $so;

//Duyệt mảng

$mang = [1,5,10,15,20];
$arr = [
    'key1' => 1,
    'key2' => 2
];

array_walk($mang, function($value, $key) {
    echo 'Phần tử thứ ' .$key .' có giá trị là' .$value .'<br />';
});

array_walk($arr, function($value, $key) {
    echo 'Phần tử thứ ' .$key .' có giá trị là' .$value .'<br />';
});

// closure
$message = 'Đây là thông báo';
$in_thong_bao = function() use ($message) {
    echo $message;
};

$in_thong_bao();





?>