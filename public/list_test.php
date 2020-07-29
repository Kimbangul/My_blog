<?php
$dbConn = mysqli_connect("localhost", "root", "", "site", 3306) or die("DB CONNECTION ERROR");

//  3	Bangul
//  2	Illust
//  1	Web Design

$cateItemId = $_GET['cateItemId'];

$sql = "
  SELECT `name`
  FROM cateItem
  WHERE id = {$cateItemId};
";

$rs = mysqli_query($dbConn, $sql); 
//   쿼리 실행
 $row = mysqli_fetch_assoc($rs);
//   압축 해....제?
$cateItemName = $row['name'];
 
$sql = "
    SELECT *
    FROM article
    WHERE cateItemId = {$cateItemId}
    ORDER BY ID DESC    
";

$rs = mysqli_query($dbConn, $sql);

$articleRows = [];
while (true){
    $row = mysqli_fetch_assoc($rs);
    if ($row == null){
        break;
    }
    $articleRows[] = $row;
}





// http://localhost:8021/list_test.php?cateItemId=1
?>
<div class="con"><h1>카테고리 : <?=$cateItemName?></h1></div>


<div class="con">
<?php foreach ($articleRows as $article){?>
    <div>
    <img src="<?=$article['thumbImgUrl']?>" alt="thumb"><br>
   <a href="./detail.php?id=<?=$article['id']?>">
   번호 : <?=$article['id']?>, 
   제목 : <?=$article['title']?>, 
   작성날짜 : <?=$article['regDate']?>   
   </a> 
</div>

<?php
}    
?> 

</div>
