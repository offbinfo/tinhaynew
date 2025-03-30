<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$is_facebook_bot = preg_match('/facebookexternalhit|Facebot/i', $user_agent);

// URL đích cuối cùng (Shopee)
$shopee_url = 'https://s.shopee.vn/3Ath6KSW2o';

// Xử lý cho bot Facebook: Ẩn preview
if ($is_facebook_bot) {
    echo '<!DOCTYPE html>
    <html>
    <head>
        <meta property="og:title" content=" ">
        <meta property="og:description" content=" ">
        <!-- Không có og:image -->
    </head>
    <body></body>
    </html>';
    exit();
}

// Xử lý cho người dùng thật: Chuyển hướng trực tiếp đến Shopee (không qua Facebook)
header("Location: $shopee_url");
exit();
?>