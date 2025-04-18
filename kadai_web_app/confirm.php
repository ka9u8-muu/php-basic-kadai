<?php
session_start();

$name = $_POST["employee_name"];
$age = $_POST["employee_age"];
$part = $_POST["department"];
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>社員情報入力フォームを作成しよう</title>
    </head>
    <body>
        <h2>入力内容をご確認ください。</h2>
        <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

        <table border="1">
        <tr>
                <th>項目</th>
                <th>入力内容</th>
            </tr>
            <tr>
                <td>社員名</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td><?php echo $part; ?></td>
            </tr>
        </table>
        <p>
            <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
            
            <button id="cansel-btn" onclick="history.back();">キャンセル</button>
        </p>
    </body>
</html>