<?php
include "../part/head.php";

// 전화 연결
$dbConn = mysqli_connect("localhost", "root", "", "site", 3306) or die("DB CONNECTION ERROR");

//  3	Bangul
//  2	Illust
//  1	Web Design

// 전화연결이 성공했다면 이 부분 싱행

if ( isset($_GET['cateItemId']) == false){
    $_GET['cateItemId'] = 1;
}
$cateItemId = $_GET['cateItemId'];



// 상대방에게 할말 적기
$sql = "
  SELECT `name`
  FROM cateItem
  WHERE id = '{$cateItemId}';
";

$rs = mysqli_query($dbConn, $sql); 
//   쿼리 실행
 $row = mysqli_fetch_assoc($rs);
//   압축 해....제?
$cateItemName = $row['name'];
 
$sql = "
    SELECT *
    FROM article
    WHERE cateItemId = '{$cateItemId}'
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


<style>
    .list-box-1 > ul > li > a > div > img{
        width: 150px;
    }

    .list-box-1 > ul > li{
        margin-top: 15px;
    }
</style>


<div class="con">
    <h1>카테고리 : <?=$cateItemName?></h1>
</div>

<?php
    if(empty($articleRows)){
        
?>
    <div class="con">
        게시물이 존재하지 않습니다.
    </div>
<?php
  }  else{ ?>


<div class="list-box-1 con">

    <ul>
        <?php foreach ($articleRows as $article){?>
        <li>
            <a class="flex" href="./detail.php?id=<?=$article['id']?>">
                <div><img src="<?=$article['thumbImgUrl']?>" alt="thumb"><br></div>

                <div>
                번호 : <?=$article['id']?> <br>
                제목 : <?=$article['title']?> <br>
                작성날짜 : <?=$article['regDate']?> <br>
                <?=$article['summary']?>
                </div>
            </a>
        </li>

        <?php
}    
?>

    </ul>


</div>

<?php }
?>

<?php
    include "../part/foot.php"
?>