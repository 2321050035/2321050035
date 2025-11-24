<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>

<body>
    <?php
    //1. In ra màn hình
    echo "Hello world! <br>";

    echo "Hi ";

    //2. Biến
    // Cú pháp: $ + tên biến = giá trị của biến
    $ten = "Ngoc Anh";
    $tuoi = 28;

    echo $ten . " " . $tuoi . " tuổi <br>";

    //3. Hằng
    define("soPi", "3.14");
    echo soPi . "<br>";

    //4. Phân biệt ' ' và " "
    echo '$ten' . "<br>"; // in ra $ten
    echo "$ten" . "<br>"; // in ra giá trị của biến $ten

    //5. Chuỗi
    #5.1 Kiểm tra độ dài của chuỗi
    echo strlen($ten) . "<br>";
    #5.2 Đếm số từ trong chuỗi
    echo str_word_count($ten) . "<br>";
    #5.3 Tìm kiếm ký tự trong chuỗi
    echo strpos($ten, "A") . "<br>";
    #5.4 Thay thế ký tự trong chuỗi
    echo str_replace("Anh", "An", $ten) . "<br>";

    //6. Toán tử
    $soThuNhat = 10;
    $soThuHai = 5;
    # + - * /
    # += -= *= /= %=
    # so sánh == != > < >= <=
    echo $soThuNhat + $soThuHai . "<br>";

    //7. Câu điều kiện
    if ($soThuNhat + $soThuHai < 15) {
        echo "Tổng nhỏ hơn 15 <br>";
    } else if( $soThuNhat + $soThuHai == 15) {
        echo "Tổng bằng 15 <br>";
    } else {
        echo "Tổng lớn hơn 15 <br>";
    }

    //8. switch case
    $color = "red";
    switch ($color) {
        case "red":
            echo "is red <br>";
            break;
        case "blue":
            echo "is blue <br>";
            break;
        default:
            echo "no color <br>";
            break;
    }

    //9. for
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }

    //10. Mảng
    $mang = ["Anh", "Nhat Anh", "Vu Anh"];

    // Đếm phần tử
    echo count($mang) . "<br>";
    echo $mang[1] . "<br>";
    print_r($mang);
    $mang[0] = "Hai Anh";
    print_r($mang);
    $mang[] = "Tam";
    print_r($mang);
    #xóa
    unset($mang[3]);
    print_r($mang);

    #Sắp xếp mảng
    $mang = ["C","B","D","A"];
    print_r($mang);
    echo "<br>";
    #sắp xếp tăng
    sort($mang);
    print_r($mang);
    #sắp xếp giảm
    echo "<br>";
    rsort($mang);
    print_r($mang);

    //11. Kiểm tra xem biến có tồn tại hay ko
    $bienA = "hello";
    isset($bienA); // true
    isset($bienB); // false

    if(isset($bienA)) {
        echo "<br> Biến A tồn tại";
    } else {
        echo "<br> Biến A không tồn tại";
    }

    //check empty
    $check = "a";
    if(empty($check)) {
        echo "empty";
    } else {
        echo "not empty";
    }

    //12. Hàm
    #không tham số
        function xinchao(){
            return"hello";
        }
        echo xinchao();

        #có tham số
        echo "<br>";
        function xinchao2($ten){
            return"hello". $ten;
        }
        echo xinchao2("Anh");
    ?>
</body>

</html>