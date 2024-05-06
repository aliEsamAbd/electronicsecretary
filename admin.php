<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة المسؤول</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="admin">اسم المسؤول</label>
        <input type="text" name="admin" id="admin" placeholder="ادخل اسمك">
        <label for="pass">كلمة المرور</label>
        <input type="password" name="pass" id="pass" placeholder="ادخل كلمة المرور">
        <input type="submit" value="تسجيل الدخول" name="login">
        <?php
        session_start();
        if(isset($_POST["login"])){
            if(($_POST["admin"]=="Ali") && ($_POST["pass"]=="admin123")){
                $_SESSION['name']= $_POST['admin'];
                header("Location:adminDashboard.php");
            }else{
                echo "<p class='error-message'>اسم المستخدم أو كلمة المرور خاطئة!</p>";
            }
        }
        ?>
    </form>
</body>
</html>
