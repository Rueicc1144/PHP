<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ch11-2-1.php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <?php
    
        $link = mysqli_connect("localhhost", "root", "1144opdbb8", "myschool");

        if(!$link){
            die("無法開啟資料庫!<br/>");
        }else{
            echo "資料庫:開啟成功";
        }

        $sql = "SELECT * FROM students";

        //送出查詢指令的SQL指令
        if($result = mysqli_query($link, $sql)){
            echo "<b>學生資料:</b><br/>"; //顯示查詢結果
            while($row = mysqli_fetch_assoc($result)){
                echo $row["sno"] . "-" . $row["name"] . "<br/>";
            }

            mysqli_free_result($result); //釋放占用記憶體
        }

        mysqli_close($link);
        ?>
    </body>
</html>