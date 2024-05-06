<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>اسم الطبيب</th>
                <th>اسم المريض</th>
                <th>عمر المريض</th>
                <th>وصف الحالة المرضية</th>
            </tr>
        </thead>
        <tbody>
            <?php
            session_start();
            if(isset($_SESSION['name'])!=null){
            $con = mysqli_connect('localhost','root','','patient');
            $cmd = 'SELECT * FROM `booking`';
            $q = mysqli_query($con, $cmd);
            while ($row = mysqli_fetch_array($q)) {
                echo
                '<tr><td>'.$row['doc_name'].'</td>',
                '<td>'.$row['p_name'].'</td>',
                '<td>'.$row['p_age'].'</td>',
                '<td>'.$row['p_description'].'</td></tr>';
            }}
            else{header("Location:admin.php");}
            ?>
        </tbody>
    </table>
</body>
</html>
