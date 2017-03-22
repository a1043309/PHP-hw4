<?php

$username=$_GET["username"];
$userpwd=$_GET["userpwd"];
$gender=$_GET["gender"];
$date=$_GET["date"];
$ID=$_GET["ID"];
$email=$_GET["email"];
$tel=$_GET["tel"];
$emergency=$_GET["emergency"];
$relationship=$_GET["relationship"];
$tel2=$_GET["tel2"];
$add=$_GET["add"];
$eat=$_GET["eat"];
$disease=$_GET["disease"];
$list=$_GET["list"];
$text=$_GET["text"];

echo "姓名：".$username."<br>";
echo "密碼：".$userpwd."<br>";
echo "性別：".$gender."<br>";
echo "生日：".$date."<br>";
echo "身分證字號：".$ID."<br>";
echo "信箱：".$email."<br>";
echo "電話：".$tel."<br>";
echo "緊急聯絡人姓名：".$emergency."<br>";
echo "緊急連絡人關係：".$relationship."<br>";
echo "緊急連絡人電話：".$tel2."<br>";
echo "地址：".$add."<br>";
echo "吃葷還是吃素：".$eat."<br>";
echo "有無特殊疾病：".$disease."<br>";
echo "尺寸：".$list."<br>";
echo "您的訊息：".$text."<br>";


?>