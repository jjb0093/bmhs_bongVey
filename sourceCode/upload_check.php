<?php
    include $_SERVER['DOCUMENT_ROOT'].'/databaseConnection_howtoProgram.php';

    $topic = $_POST['topic'];
    $name = $_POST['name'];
    $link = $_POST['link'];
    $pass = '1234';

      $sql = "INSERT INTO bongVey(topic, name, pass, link) VALUES
      ('$topic','$name','$pass','$link')";
      $result = mysqli_query($dbConnect5, $sql);
      if($result){
        echo "<script> alert('정상적으로 업로드 되었습니다.'); </script>";
        echo "<script>location.href='index';</script>";
      }
      else{
        echo "<script> alert('데이터베이스 오류. 미르에 문의해주세요.'); </script>";
        //echo $sql; echo '<br>';
        echo mysqli_error($dbConnect5);
      }

    //echo '<script>history.back();</script>';
?>
<!DOCTYPE HTML>
<html lang="KO">
    <head>
        <meta charset="utf-8">
    </head>
    <body></body>
</html>
