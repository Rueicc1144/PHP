<<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ch11-2-2.php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
    //建立連接
    $link = mysqli_connect("localhost", "root", "1144opdbb8", "myschool");

    $sql = "SELECT * FROM students";

    if($result = mysqli_query($link ,$sql)){
        $total_fields = mysqli_num_fields($result);//參數查詢結果欄位數
        echo "欄位數: $total_fields 個<br/>";

        $total_records = mysqli_num_rows($result);
        echo "記錄數: $total_records 筆<br/>";
    }
    ?>
    <table border="1">
        <tr>
            <td>欄位名稱</td>
            <td>資料表</td>
            <td>最大長度</td>
            <td>資料類型</td>
        </tr>


    <?php
    while($meta = mysqli_fetch_field($result)){
        echo "<tr><td>" . $meta["name"] . "</td><td>" . $meta["table"] . "</td><td>" . $meta["max.length"] . "</td><td>" . $meta["type"] ."</td></tr>";
    }
    ?>
    </table>

    <?php
    mysqli_close($link);
    ?>

    </body>
</html>