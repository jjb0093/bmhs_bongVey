<?php
  include $_SERVER['DOCUMENT_ROOT'].'/databaseConnection_howtoProgram.php';

  $id = $_GET['id'];
  $sql = "select link FROM bongVey WHERE surveyID = {$id}";
  $result = mysqli_query($dbConnect5, $sql);
  $row = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html lang="ko">
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>JO'S SURVEY STORE</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Gugi&family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" media="(min-width: 1024px)" href="css/survey_PC.css">
  <link rel="stylesheet" media="(max-width: 1023px)" href="css/survey_MB.css">
</head>
<body>
  <div id="header">
    <span>JO'S SURVEY STORE</span>
    <input type="button" value="설문 끝!" onclick="window.close();">
  </div>
  <div id="main">
    <div id="main_container">
      <iframe src="<?echo $row['link'];?>" frameborder="0" scrolling=“no” ></iframe>
    </div>
  </div>
</body>
</html>
