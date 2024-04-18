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
            echo "<a href='logout.php'>登出畫面</a>";
            echo "<a href='intro.php'>網頁介紹</a>";
            ?>  
            </nav>  
        </div>
    </header>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="content">
                        <?php
                        if(isset($_SESSION["check"])){
                            if($_SESSION["check"] == "Yes"){
                        ?>
                        <h1>Author您好，歡迎進入論文評論網頁</h1>
                        <form name="judge" method="POST" action="showpaper.php" enctype="MIME">
                            <div class="mx-3">


                                <div class="mb-3">
                                    <label class="label">論文標題:</label>
                                    <input type="text" class="form-control" name="title" value="">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="label">作者姓名:</label>
                                    <input type="text" class="form-control" name="name" value="">
                                </div>

                                <div class="mb-3">
                                    <label class="label">作者Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="123SPants@gmail.com">
                                </div>

                            <div class="col-12">
                                    <label class="label">論文摘要:</label>
                                    <textarea name="comment" rows="10" cols="50" value="">
                                        我不知道人生的意義是什麼     
                                    </textarea>
                            </div>

                            <div class="mb-3">
                                <div class="submit">
                                    <button type="submit" class="btn btn-primary">提交</button>
                                    <input type="reset" class="btn btn-primary" value="重來">
                                </div>
                            </div>
                        </form>

                        <?php
                            }else{
                                echo "<h1 class='title'>錯誤</h1>";
                            }
                        }
                        ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>