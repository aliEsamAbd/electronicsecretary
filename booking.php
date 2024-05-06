<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حجز موعد</title>
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
            max-width: 400px;
            width: 100%;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        input[type="submit"] {
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
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="docName"><?php echo $_GET['name']?>اسم الدكتور:</label><br>
        <input type="hidden" name="doc_name" value="<?php echo $_GET['name']?>">
        <label for ="name">اسم المريض</label>
        <input type="text" name="p_name" required>
        <label for ="age">عمر المريض</label>
        <input type="number" name="p_age" required>
        <label for ="description">وصف المرض</label>
        <input type="text" name="p_description" required>
        <input type="submit" value="تأكيد الحجز" name="ok">
    </form>
    <?php
    session_start();
    if (isset($_SESSION['doc'])!=null) {
        if (isset($_POST['ok'])) {
            $con = mysqli_connect('localhost','root','','patient');
            $dname = $_POST['doc_name'];
            $cmdd="SELECT `doc_name` FROM `booking` WHERE `doc_name` LIKE '$dname'";
            $result = mysqli_query($con,$cmdd);
            $res = mysqli_fetch_array($result);
            $count=1;
            while($row = mysqli_fetch_array($result)) {
                $count +=1;
            };
            if ($count < 25) {
                $cmd = "INSERT INTO `booking` (`id`, `doc_name`, `p_name`, `p_age`, `p_description`) VALUES (NULL,'".$_POST['doc_name']."','".$_POST['p_name']."','".$_POST['p_age']."','".$_POST['p_description']."');";
                if (mysqli_query($con,$cmd)) {
                    $_SESSION['yes']="yes";
                    header("Location: thanks.php?dname= ".$dname."");
                }
            }else{
                $_SESSION['no']="no";
                header("Location:sorry.php");
            };
        };
    }else{header("Location:doctors.php");}
    ?>
    <button><?php session_destroy()?>des</button>
</body>
</html>
