<?php
    include "../part/head.php";
    // ../ -> 부모(상위) 폴더로
?>


<h1 class="con">리스트</h1>
<div class="list-box-1 con">
<ul>
    <?php for ($i = 4; $i >= 1; $i--){ ?>
       <li><a href="/detail.php?id=<?=$i?>"><?=$i?>번글</a></li>
    <?php } ?>
</ul>

</div> 




<?php
    include "../part/foot.php";
?>
