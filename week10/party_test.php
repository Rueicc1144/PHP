<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        require ("party.inc");
        echo "<link rel='stylesheet'  type='text/css' href='party-test4.css'>";
        echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>";
        ?>
    </head>
    <body>
        <header class="main-header"> 
            <div class="container">
                <a href="party2.php" class="logo">
                    <img class="rounded" src="assets/cat-cat-jam.gif" alt="catcatjam">
                </a>
                <nav class="main-nav">
                <?php
                echo "<a href='party2.php'>報名表單</a>";
                echo "<a href='intro.php'>活動介紹</a>";
                ?>  
                </nav>
                <div class="profile-dropdown">
                    <div class="profile-dropdown-btn" onclick="toggle()">
                        <div class="profile-img">
                        </div>
                        <span>
                            馬卡巴卡
                            <i class="fa-solid fa-angle-down"></i>
                        </span>
                    </div>
                </div>
            </div>
        </header>

        <!-- 漢堡菜單內容區塊 -->
        <div class="profile-dropdown-list">
            <div class="profile-dropdown-list-item">
                <a href="#services">服務</a>
            </div>

            <div class="profile-dropdown-list-item">
                <a href="#about">關於</a>
            </div>

            <div class="profile-dropdown-list-item">
                <a href="#contact">聯絡</a>
            </div>

            <hr/>

            <div class="profile-dropdown-list-item">
                <a href="party_logout.php">登出</a>
            </div>
        </div>


        
        <div class="content">
            <div class="container">
                <div class="row
                    justify-content-center
                    align-items-center">
                    <div class="col-12 col-sm-8">
                        <div class="main-content">
                            <?php
                            if(isset($_SESSION["check"])){
                                if($_SESSION["check"] == "Yes"){
                                    
                                }
                            }
                            ?>
                            <h1 class="title">資管晚會報名表單</h1>
                            <div class="mx-3">
                                <form name="register" method="POST" action="party_check.php" enctype="MIME">
                                    <!--name-->
                                    <div class="mb-3">
                                        <label for="name" class="label">姓名</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>

                                    <!--Stdid-->
                                    <div class="mb-3">
                                        <label for="stdId" class="label">學號</label>
                                        <input type="text" class="form-control" id="stdId" name="stdId" placeholder="(英文字請大寫Ex:Axx..)">
                                    </div>

                                    <!--email-->
                                    <div class="mb-3">
                                        <label for="email" class="label">電子信箱</label>
                                        <input type="   il" class="form-control" id="email" name="email" placeholder="123SPants@gmail.com">
                                    </div>
        
                                    <!--wm-->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="男">
                                        <label class="ratio-label" for="male">
                                            男
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="女">
                                        <label class="ratio-label" for="female">
                                            女
                                        </label>
                                    </div>

                                    <!--打勾-->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" required>
                                        <label class="check-label" for="invalidCheck">
                                            同意我們根本就沒有的使用條款
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">報名</button>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script>
            // 切換內容區塊的顯示與隱藏
            let profileDropdownList = document.querySelector(".profile-dropdown-list");
            let btnt = document.querySelector(".profile-dropdown-btn");

            const toggle = ()=>profileDropdownList.classList.toggle("active");
             
            window.addEventListener('click', function(e){
                
                if(!btn.contains(e.target))profileDropdownList.classList.remove("active")
            });
        </script>
    </body>
</html>