<?php
$conn = new mysqli("localhost", "root", "", "tourism");
if ($conn->connect_error) {
  die("خطأ في الاتصال بقاعدة البيانات");
}
?>
