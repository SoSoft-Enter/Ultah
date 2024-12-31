<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucapan Ulang Tahun</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('bg.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            width: 350px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            position: relative;
        }
        .container h1 {
            font-size: 28px;
            color: #FF4081;
            margin-bottom: 20px;
        }
        .photo-frame {
            border: 5px solid #FF4081;
            border-radius: 10px;
            overflow: hidden;
            width: 250px;
            height: 250px;
            margin: 0 auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .leaf-left, .leaf-right {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background-size: contain;
            animation: moveLeaves 4s infinite alternate;
        }
        .leaf-left {
            left: -40px;
            background: url('images/daun1.png') no-repeat center center;
        }
        .leaf-right {
            right: -40px;
            background: url('images/daun2.png') no-repeat center center;
        }
        .name {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }
        .button {
            text-decoration: none;
            background: #FF4081;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
        }
        .button:hover {
            background: #e6376f;
        }
        @keyframes moveLeaves {
            0% {
                transform: translateY(-50%) translateX(-10px);
            }
            100% {
                transform: translateY(-50%) translateX(10px);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Happy Birthday!</h1>
        <div class="photo-frame">
            <img src="photo.jpg" alt="Foto Ulang Tahun">
            <!-- Animasi Daun -->
            <div class="leaf-left"></div>
            <div class="leaf-right"></div>
        </div>
        <p class="name">❤️Aninda Celina❤️</p>
        <a href="letter.php" class="button">Lihat Surat</a>
    </div>
    <!-- Elemen Audio -->
    <audio id="background-music" autoplay loop>
        <source src="music.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <script src="music.js"></script> <!-- Memuat script musik -->
</body>
</html>
