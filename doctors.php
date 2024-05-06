<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        .doctor-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .doctor-card p {
            margin-bottom: 5px;
        }
        .book-btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .book-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            session_start();
            $con = mysqli_connect('localhost','root','','patient');
            $cmd = 'SELECT * FROM `doctors`';
            $q = mysqli_query($con, $cmd);
            while ($row = mysqli_fetch_array($q)) {
                echo '
                <div class="col-md-6">
                    <div class="doctor-card">
                        <p>'. $row['name'] .'</p>
                        <p>'. $row['specialty'] .'</p>
                        <p>'. $row['location'] .'</p>
                        <p>'. $row['time'] .'</p>
                        <a href="booking.php?name='.$row['name'].'" class="book-btn">احجز موعد</a>
                    </div>
                </div>
                ';
            }
            $_SESSION['doc'] = 'doc';
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
