<?php
$email = $_POST['email'];
$search = $_POST['search']


$conn = mysqli_connect(
  '35.185.210.97',
  'footfootbig',
  'footbigmaria!',
  'footfoot',
  '3306'
);
echo$search;
if($_POST['search'] == ""){
  echo '<script> alert("찾으시는 신발의 정보가 없습니다. 이름을 다시 확인해주세요."); location.href="./main.php"; </script>';
}else {
  $result_set = mysqli_query($conn,"SELECT * FROM userinfo WHERE username='".$search."'");
  $row = mysqli_fetch_array($result_set);

    return;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html</title>
</head>
<body>
    <a href="main.php">돌아가기</a>
</body>
</html>