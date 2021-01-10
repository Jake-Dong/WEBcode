
<?php
// getinfophp.php 에서 받은 정보를 DB 컬럼에 저장
// password_hash 함수를 이용해 DB 작업자가 개인정보를 보지못하게하는 작업이 추가적으로 필요하다고 느낌.
$username = $_POST['username'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$nomalsize = $_POST['nomalsize'];
$footarea = $_POST['footarea'];
$brand = $_POST['brand'];
$likeshoes = $_POST['likeshoes'];
$nomalbuysize = $_POST['nomalbuysize'];
$userpw = $_POST['userpw'];

$host = '35.185.210.97';
$user = 'footfootbig';
$pw = 'footbigmaria!';
$dbName = 'footfoot';
$port = '3306';
$conn = new mysqli($host, $user, $pw, $dbName, $port);
    $result_set = mysqli_query($conn, "
        INSERT INTO userinfo(
            username,   
            email,
            gender,
            age,
            userpw
        ) VALUES (
            '$username',
            '$email',
            '$gender',
            '$age',
            '$userpw' 
            )");
        
    if($result_set === false)   
        echo mysqli_error($conn);
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html</title>
</head>
<body>
    <a href="mainsign.php">돌아가기</a>
</body>
</html>