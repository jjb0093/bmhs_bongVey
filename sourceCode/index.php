<?php
  include $_SERVER['DOCUMENT_ROOT'].'/databaseConnection_howtoProgram.php';
  $sql = "select * FROM bongVey ORDER BY surveyID";
  $result = mysqli_query($dbConnect5, $sql);
?>
<!DOCTYPE HTML>
<html lang="ko">
<head>
  <title>JO'S SURVEY STORE</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Gugi&family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" media="(min-width: 1024px)" href="css/index_PC.css">
  <link rel="stylesheet" media="(max-width: 1023px)" href="css/index_MB.css">
</head>
<body>
  <div id="header">
    <span>JO'S SURVEY STORE</span>
  </div>
  <div id="main">
    <div id="main_container">
      <div id="intro">
        <div style="background-color: rgba(255, 214, 170, 0.8); border-radius: 10px; width: 30px; height: 30px;"></div>
        <span>참여 미완료</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div style="background-color: rgba(190, 234, 200, 0.7); border-radius: 10px; width: 30px; height: 30px;"></div>
        <span>참여 완료</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span>(새로고침 시 초기화)</span>
      </div><br>
      <?while($row = mysqli_fetch_array($result)){?>
      <div class="surveyBox" id="surveryBox_<?echo $row['surveyID'];?>" onclick='moveSurvey(<?echo $row['surveyID'];?>);'>
        <span id="title"><?echo $row['topic'];?> (<?echo $row['name'];?>)</span><br>
      </div>
      <? } ?>
    </div>
  </div>
  <script>
    function moveSurvey(id){
      //alert('설문은 07/21 00:00 부터 가능합니다.');
      document.getElementById('surveryBox_'+id).style.backgroundColor = "rgba(190, 234, 200, 0.7)";
      window.open('survey?id='+id);
    }
  </script>
</body>
</html>
