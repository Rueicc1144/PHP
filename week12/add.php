<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增學生資料</title>
</head>
<body>
    <form action="add_process.php" method="post" enctype="multipart/form-data">
        <label for="name">姓名:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="department">系所:</label>
        <input type="text" name="department" id="department" required><br>
        <label for="image">圖片:</label>
        <input type="file" name="image" id="image" accept="image/*"><br>
        <input type="submit" value="提交">
    </form>
</body>
</html>
