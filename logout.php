<?php
//  logout 하기 위해서 session 을 unset 해서 페이지 저장공간 에서 삭제한다
session_start();

unset($_SESSION['email']);
unset($_SESSION['username']);
unset($_SESSION['gender']);
unset($_SESSION['age']);
unset($_SESSION['nomalsize']);
unset($_SESSION['footarea']);
unset($_SESSION['brand']);
unset($_SESSION['likeshoes']);
unset($_SESSION['nomalbuysize']);

session_destroy();

header("Location: mainsign.php");
exit;
?>