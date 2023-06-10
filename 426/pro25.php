<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
             //0123456789012345678901234567890
        $ip = "welcome to world of PHP Strings";
        echo "<hr> $ip";
        echo "<hr> ".base64_encode($ip);
        echo "<hr> ".md5($ip);
        echo "<hr> ".sha1($ip);
        echo "<hr> ".openssl_encrypt($ip, "AES-128-CTR", "surat", 0, "1122334455667788");
        $data = "uX+npki8cbMFWisu/qRMk9o1Ex2mMrZB3GNsM4uTJw==";
        echo "<hr>".openssl_decrypt($data, "AES-128-CTR", "surat", 0, "1122334455667788");
    ?>
</body>
</html>