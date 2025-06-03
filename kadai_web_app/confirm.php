<?php
$name = $_POST['user_name'];
$age = $_POST['age'];
$category = $_POST['category'];

//エラーメッセージを格納する配列
$errors = []; //最初はエラーなし
//お名前のバリデーション
if(empty($name) ) {
$errors[] = 'お名前を入力してください';
}
//年齢のバリデーション
if(empty($age)) {
    $errors[] = '年齢を入力してください';
} elseif($age = '/[^0-9]/') {
    $errors[] = '数字で入力してください';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <td><?php echo $category; ?></td>
        </tr>
    </table>
    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
    <?php
    //入力項目にエラーがある場合の処理
    if (!empty($errors)) {
        //配列内のエラーメッセージを順番に出力
        foreach ($errors as $error) {
            echo '<font color="red">' . $error . '</font>' . '<br>';
        }
        //確定ボタンを無効化するjavascriptコードをブラウザ側に送信
        echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';
    } 
    ?>
</body>
</html>