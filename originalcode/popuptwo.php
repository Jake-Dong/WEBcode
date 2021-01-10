<html>
<head>
  <title>Document</title>
</head>
<body>
<?php

 $nomalsize = $_POST['nomalsize'];
 $footarea = $_POST['footarea'];
 $nomalbuysize = $_POST['nomalbuysize'];
 $brand = $_POST['brand'];
 $likeshoes = $_POST['likeshoes'];
 
 echo($nomalsize);
 echo($footarea);
 echo($nomalbuysize);
 echo($brand);
 echo($likeshoes);

 $host = '35.185.210.97';
 $user = 'footfootbig';
 $pw = 'footbigmaria!';
 $dbName = 'footfoot';
 $port = '3306';
 $conn =mysqli_connect($host, $user, $pw, $dbName, $port);

    $result_set = mysqli_query($conn, "
      SELECT *from musinsa_shoes ms where footarea ='".$footarea."'
                                      and brand ='".$brand."'
                                      and likeshoes ='".$likeshoes."';
      ");
    $row = mysqli_fetch_array($result_set);
    $total_rows = mysqli_num_rows($result_set);
    if($total_rows == 0) {
      echo'없어';
      return;
    }
    echo $row['0'];
    echo $row['1'];
    echo $row['2'];
    echo $row['3'];  
    echo $row['4'];

?>
</body>
</html>