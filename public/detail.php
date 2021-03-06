<?php
    include "../part/head.php";
    // ../ -> 부모(상위) 폴더로
?>
<?php
  $conn = mysqli_connect("localhost", "root", "", "site", 3306);

  mysqli_query($conn, "SET NAMES utf8mb4;");
  // 인코딩
  
  $id = $_GET['id'];
  $sql = "
    SELECT *
    FROM article
    WHERE id = {$id}
  ";

  $rs = mysqli_query($conn, $sql); 
//   쿼리 실행
   $row = mysqli_fetch_assoc($rs);
//   압축 해....제?

?>



<!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/styles/default.min.css">

<!-- 하이라이트 라이브러리, 언어 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php-template.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/sql.min.js"></script>

<!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/codemirror.min.css" />

<!-- 토스트 UI 에디터, 자바스크립트 코어 -->
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-viewer.min.js"></script>

<!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
<script src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight-all.min.js"></script>

<!-- 토스트 UI 에디터, CSS 코어 -->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

<div class="con">
    <a href="#" onclick="history.back();">뒤로가기</a>
    <a href="/list.php">리스트로</a>
</div>

<h1 class="con">제목 : <?=$row['title']?></h1>
<div class="con">
    등록날짜 : <?=$row['regDate']?>    
</div>
<div class="con">
    수정날짜 : <?=$row['updateDate']?>
</div>
<div class="con">
    작성자 : 김방울
</div>
<script type="text/x-template" style="display:none;" id="origin1"><?=$row['body']?></script>
<div class="con" id ="viewer1"> 
       
</div>


<script>
      var editor1__initialValue = $('#origin1').html();
      var editor1 = new toastui.Editor({
        el: document.querySelector("#viewer1"),
        viewer:true,
        initialValue: editor1__initialValue,
        plugins: [toastui.Editor.plugin.codeSyntaxHighlight, youtubePlugin, replPlugin, codepenPlugin]
      });
</script>





<?php
    include "../part/foot.php";
?>
