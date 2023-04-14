<?php
require "proses.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <form method="post">
        Nilai Pertama <input type="text" name="nilai1">
        <br>
        Nilai Kedua <input type="text" name="nilai2">
        <br>
        <select name="attributes[]" multiple>
            <option value="pill1">Pilih 1</option>
            <option value="pill2">Pilih 2</option>
            <option value="pill3">Pilih 3</option>
            <option value="pill4">Pilih 4</option>
        </select>
        <input type="submit" name="submitform"><input type="reset">
    </form>
</body>
</html>