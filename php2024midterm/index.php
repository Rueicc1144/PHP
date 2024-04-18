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

                        <form name="index" method="POST" action="check.php" enctype="MIME">
                            <div class="col-12">
                            <label class="label">請選擇您的角色:</label>
                                <select  class="form-select" aria-label="Characters" name="account">
                                    <option value="chair">Chair</option>
                                    <option value="reviewer">Reviewer</option>
                                    <option value="author">Author</option>
                                </select>
                            </div>


                            <!--帳號-->
                            <div class="col-12">
                                <label for="email" class="label">帳號:</label>
                                <?php 
                                setcookie("acc", " ", strtotime("+7 days", time()));
                                $email = htmlspecialchars($_COOKIE['acc']);
                                echo '<input type="email" class="form-control" id="email" name="email" placeholder="' . $email . '" />';
                                ?>

                            </div>
                                


                            <!--密碼-->
                            <div class="col-12">
                                <label class="label">密碼:</label>
                                <input type="password" class="form-control" name="password" value="" required>
                            </div>

                            <div class="submit mb-3 ">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>