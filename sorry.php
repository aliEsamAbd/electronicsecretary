<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نعتذر</title>
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
            text-align: center;
            flex-wrap: wrap;
            flex-direction: column;
        }
        h1 {
            color: #007bff;
        }
        h2 {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['yes'])!=null){
        echo'
        <h1>نعتذر لعدم حجز طلبك</h1><br>
        <h2>الحجوزات لهذا اليوم فاقت العدد المسموح به</h2>';
    }else{
        header('Location:booking.php');
    }
    ?>
</body>
</html>
