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
        echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>";
        ?>
    </head>
    <body>
        <header class="main-header"> 
        <div class="container">
            <a href="party_login.php" class="logo">
                <img class="rounded" src="assets/cat-cat-jam.gif" alt="catcatjam">
            </a>
            <nav class="main-nav">  
            <?php
            echo "<a href='intro.php'>活動介紹</a>";
            ?>  
            </nav>
        </div>
        </header>


        <div class="content">
            <div class="container">
                <div class="row
                    justify-content-center
                    align-items-center">
                    <div class="col-12 col-sm-6">
                        <div class="main-content">
                            <h1 class="title">資管晚會</h1>
                            <div class="mx-3">
                                <form name="loginparty" method="POST" action="party_login_check.php" enctype="MIME">

                                    <div class="mb-3">
                                        <label class="label">帳號</label>
                                        <input type="text" class="form-control" name="account"  value="" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="label">密碼</label>
                                        <input type="password" class="form-control" name="password" value="" required>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" required>
                                        <label class="check-label" for="invalidCheck">
                                            我是機器人才怪
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">登入</button>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer mt-auto">

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>