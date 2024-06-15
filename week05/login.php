<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>login.php</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
            echo "<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">";
            echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>"
        ?>

    </head>

    <body>
        <div class="container h-100">
            <div class="row
            justify-content-center">
                <form name="login" method="POST" action="check.php" enctype="MIME">

                    <div class="col-12">
                        <label class="col-form-label">Account</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="account"  value="" required>
                        </div>
                    </div>


                    <div class="col-12">
                        <label class="col-form-label">Password</label>
                        <div class="col-10">
                            <input type="password" class="form-control" name="password" value="" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" required>
                            <label class="form-check-label" for="invalidCheck">
                                同意且接受使用條款
                            </label>
                        </div>
                    </div>


                    <div class="col-12">
                        <input class="btn btn-primary" type="submit" ><!--送出按鈕-->
                    </div>
                </form>

                <?php
                if(isset($_COOKIE["userName"])){
                    echo "晚安 " . $_COOKIE["userName"] ;
                }
                ?>
            </div>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>