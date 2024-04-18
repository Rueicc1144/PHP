<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require("include.inc");
    ?>
    <title>index</title>
</head>
<body>
    <header class="main-header"> 
        <div class="container">
            <a href="party2.php" class="logo">
                <img class="rounded" src="cat-cat-jam.gif" alt="catcatjam">
            </a>
            <nav class="main-nav">
            <?php
            echo "<a href='index.php'>登入畫面</a>";
            echo "<a href='intro.php'>網頁介紹</a>";
            ?>  
            </nav>
        </div>
    </header>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="content">
                        <h1>高大資管論文投稿系統</h1>

                        <h3>歡迎來到資管論文投稿系統，這裡可以做很多事情(才怪)!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>