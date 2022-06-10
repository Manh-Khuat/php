<?php
$mau_sac = 'Nâu';
$so_chan = '4';

$mau_sac_2 = 'Xanh';
$so_chan_2 = '3';
function intro($mau_sac, $so_chan) {
    echo "Bàn có màu {$mau_sac} và có {$so_chan} chân";
}

class Table {
    public $mau_sac;
    public $so_chan;
    public function __construct($mau_sac, $so_chan) {
        $this->mau_sac = $mau_sac;
        $this->so_chan = $so_chan;
    }
    public function intro($mau_sac, $so_chan) {
        echo "Bàn có màu {$mau_sac} và có {$so_chan} chân <br/>";
    }
}

$table = new Table('Trắng', 4);

echo '<pre>';
var_dump($table);
echo '</pre>';
echo $table->intro('Trắng', 4);

// private, protected không thể truy cấp biến từ bên ngoài. 
// Có thể truy xuất bằng cách gián tiếp (tạo các hàm truy xuất bên trong)
class Table2 {
    public $mau_sac;
    public $so_chan;
    public function __construct($mau_sac, $so_chan) {
        $this->mau_sac = $mau_sac;
        $this->so_chan = $so_chan;
    }
    public function intro() {
        echo "Bàn có màu {$this->mau_sac} và có {$this->so_chan} chân ";
    }
    public function get_mau_sac() {
        return $this->mau_sac;
    }
    public function tang_so_chan() {
        $this->so_chan++;
    }
    public function get_so_chan() {
        return $this->so_chan;
    }
}

$table2 = new Table2('Xanh ', 4);
echo $table2->get_mau_sac();
$table2->tang_so_chan();
echo $table2->get_so_chan();

// Kế thừa

class Table3 extends Table2 {
    protected $chat_lieu;
    public function __construct($mau_sac, $so_chan, $chat_lieu) {
        $this->mau_sac = $mau_sac;
        $this->so_chan = $so_chan;
        $this->chat_lieu = $chat_lieu;
    }
    public function intro() {
        echo "Bàn có màu {$this->mau_sac} và có {$this->so_chan} chân, làm bằng {$this->chat_lieu} <hr />";
        parent:: intro();
    }
    public function get_chat_lieu() {
        return $this->chat_lieu;
    }
} 
$table3 = new Table3("Đỏ", 4, 'Gỗ');
var_dump($table3);
echo '<br />';
echo $table3->get_chat_lieu();
echo $table3->get_mau_sac();
echo '<br />';
echo $table3->intro();

// Stattic: hàm tĩnh không cần khởi tạo đối tượng có thể gọi trực tiếp

class Static_Table {
    public static $vi_tri = 'Ngoài trời';
    public static function intro() {
        echo "Bàn để ngoài trời nắng ";
    }
}
echo '<hr />';
Static_Table::intro();
echo '<br />';

// abstract: dùng phát triển các class có tính nhất quán thông qua thừa kế. không viết đc hàm xử lý trong abstract
abstract class Abs_Table {
    public $so_chan;
    public $mau_sac;
    public function intro(){

    }
}
class Table_4 extends Abs_Table {
    public function intro() {
        echo "HelloWorld";
    }
}
echo '<hr />';
$table4 = new Table_4();
$table4->intro();

// interface : chỉ khai báo đc method, bắt buộc viế lại khi sử dụng kế thừa

interface In_Table {
    public function intro();
    public function destroy();
}

echo '<hr />';

class Table_5 implements In_Table {
    public function intro() {
        echo "Đặt bàn";
    }
    public function destroy() {
        echo "Hủy bàn";
    }
}
$table5 = new Table_5();
$table5->intro();
$table5->intro();
?>