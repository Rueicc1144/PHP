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
            echo "<a href='intro.php'>介紹</a>";
            ?>  
            </nav>
        </div>
    </header>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="content">
                        <h1>請確認</h1>
                        <?php
                        if(isset($_SESSION["check"])){
                            if($_SESSION["check"] == "Yes"){
                                $judge = $_POST["judge"];
                                $comment = $_POST["comment"];

                                echo "<div class='col-7'>". 
                                
                                "論文評審:" . $judge . "<br>" . 
                                "評論:" . nl2br($comment) . "<br>" .
                                "</div>" .
                                "<a href='logout.php'>審閱完畢，    登出</a>" . "<br>" . 
                                "<a href='reviewer.php'>我要重寫</a>" . "<br>" ;
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