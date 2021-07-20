<!DOCTYPE HTML>
<html lang="ko">
<head>
  <title>JO'S SURVEY STORE</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Gugi&family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" media="(min-width: 1024px)" href="css/upload_PC.css">
  <link rel="stylesheet" media="(max-width: 1023px)" href="css/upload_MB.css">
</head>
<body>
  <div id="header">
    <span>JO'S SURVEY STORE</span>
  </div>
  <div id="main">
    <div id="main_container">
      <div id="title"><span>설문 등록</span></div>
      <form action="upload_check" method="post">
        <div class="container" id="con_1">
          <span>설문 주제</span><br>
          <input type="text" name="topic" placeholder="내 답변" required>
        </div>
        <div class="container" id="con_1">
          <span>설문 링크</span><br>
          <input type="text" name="link" placeholder="내 답변" required>
        </div>
        <div class="container" id="con_1">
          <span>참여 인원 (모두)</span><br>
          <input type="text" name="name" placeholder="내 답변" required>
        </div>
        <input type="submit">
      </form>
    </div>
  </div>
</body>
</html>
