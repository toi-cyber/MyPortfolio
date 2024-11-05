<?php
// Email configuration
$to = 'tamuratoitoi1001@gmail.com';
$subject = 'お問い合わせフォームからのメッセージ';

// Retrieve form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Email body
$body = "お名前: $name\n";
$body .= "メールアドレス: $email\n\n";
$body .= "メッセージ:\n$message\n";

// Email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "メッセージが送信されました。";
} else {
    echo "メッセージの送信に失敗しました。";
}
?>
