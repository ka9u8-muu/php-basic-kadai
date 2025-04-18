<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>社員情報入力フォームを作成しよう</title>
    </head>
    <body>
        <h2>登録が完了しました。</h2>
        <P>社員情報がデータベースに保存されました。</P>
        <button id="back-btn" onclick="location.href='form.php';">戻る</button>

        <?php
        // セッション変数を初期化
        $_SESSION = array();
        ?>
    </body>
</html>