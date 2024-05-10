<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-image: url('background-image.jpg'); /* Ganti dengan URL gambar latar belakang Anda */
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background-color: rgba(255, 255, 255, 0.8); /* Transparansi putih untuk kotak login */
    padding: 20px;
    border-radius: 10px;
}

form {
    max-width: 300px;
    margin: 0 auto;
}

h1 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); /* Menambahkan efek bayangan */
    transition: background-color 0.3s, color 0.3s, transform 0.2s, box-shadow 0.3s;
}

button[type="submit"]:hover {
    background-color: #0056b3;
    transform: translateY(-2px); /* Efek naik sedikit saat dihover */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Meningkatkan intensitas efek bayangan */
}

.error-message {
    color: red;
    margin-top: 10px;
    text-align: center;
}
    </style>
</head>

<?php
if(isset($_POST['submit'])){
    require_once 'dbkoneksi.php';

    $user = $dbh->prepare("SELECT*FROM users WHERE email = ? AND password = ?");
    $user->execute([
        $_POST['email'], $_POST['password']
    ]);

    $count = $user->rowCount();  // untuk memastikan apakah user tersedia atau tidak

    if($count > 0){
        session_start();

        $_SESSION['user'] = $user->fetch();
        header("location:index_admin.php");
    } else { // jika login gagal
        header("location:login.php");
    }
}
?>
<body>
    <div>
        <form action="" method="POST">
            <h1>Login</h1>
            <div>
            <label for="">Email</label>
            <input type="email" name="email" required>
            </div>
            <br>
            <div>
            <label for="">Password</label>
            <input type="password" name="password" required>
            </div>
            <br>
            <div>
            <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>