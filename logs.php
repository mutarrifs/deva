<?php
// Kullanıcı adı ve parola alınır
$username = $_POST['email'];
$password = $_POST['password'];

// Kullanıcı adı ve parolayı kontrol eder (örneğin sadece "admin" ve "1234" kabul edilir)
if ($username == 'admin' && $password == '1234') {
    // Doğru kullanıcı adı ve parola, yönlendirme yapılır
    header('Location: https://suite.boomsonar.com/Account/Login');
    exit(); // Yönlendirme işleminden sonra betik sonlandırılır
} else {
    // Hatalı kullanıcı adı veya parola
    echo "Hatalı kullanıcı adı veya parola.";
}
?>
