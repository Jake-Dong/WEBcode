<?php
// DB 서버에 접속하는 php 코드
$email = $_POST['email'];
$conn = mysqli_connect(
  '35.185.210.97',
  'footfootbig',
  'footbigmaria!',
  'footfoot',
  '3306'
);
// mainsign.php 파일에서 전송받은 id,pw 정보를 DB에 정보와 비교하는 코드
if($_POST['email'] == "" ||  $_POST['userpw'] == ""){
  echo '<script> alert("email or pw 없음"); location.href="./mainsign.php"; </script>';
}else {
  $email = $_POST['email'];
  $password = $_POST['userpw'];
  
  $result_set = mysqli_query($conn,"SELECT * FROM userinfo WHERE email='".$email."'");
  $row = mysqli_fetch_array($result_set);
  
  if($row['userpw'] != $password) {
    echo '<script> alert("패스워드를 다시입력해주세요"); location.href="./mainsign.php"; </script>';
    return;
  }
  // 기존에 저장되어있던 고객정보를 session을 활용해 페이지에 저장
  session_start();
  $_SESSION[ 'email' ] = $row['email'];
  $_SESSION[ 'username' ] = $row['username'];
  $_SESSION[ 'gender' ] = $row['gender'];
  $_SESSION[ 'age' ] = $row['age'];
  $_SESSION[ 'nomalsize' ] = $row['nomalsize'];
  $_SESSION[ 'footarea' ] = $row['footarea'];
  $_SESSION[ 'brand' ] = $row['brand'];
  $_SESSION[ 'likeshoes' ] = $row['likeshoes'];
  $_SESSION[ 'nomalbuysize' ] = $row['nomalbuysize'];
  // script를 써서 작은 ok 창을 생성
  echo '<script> alert("OK"); location.href="./main.php"; </script>';

}
?>