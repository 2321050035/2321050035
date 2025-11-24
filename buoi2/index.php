<?php

//cookie
# lưu ở phía người dùng
# dùng cho những thông tin ít quan trọng
$cookieName = "user";
$cookieValue = "NgocAnh";

// 86400 = 30 ngay
setcookie($cookieName, $cookieValue, time()+(86400 * 30), "/");

if(isset($_COOKIE[$cookieName])) {
    echo "cookie đã tồn tại";
}
else {
    echo "cookie chưa tồn tại";
}

//session
# Thông tin đăng nhập, giỏ hàng,...
session_start();

$_SESSION["name"] = "Ngoc Anh 123";

echo $_SESSION["name"];

?>