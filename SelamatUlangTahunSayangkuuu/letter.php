<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Ucapan</title>
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
            font-family: 'Georgia', serif;
        }
        .letter-frame {
            background: rgba(255, 255, 255, 0.9);
            border: 5px solid #d4af37;
            border-radius: 10px;
            width: 400px;
            height: 500px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            padding: 20px 30px;
            text-align: left;
            position: relative;
            overflow: hidden;
        }
        .letter-frame::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 100%;
            background-image: radial-gradient(circle, black 1px, transparent 1px);
            background-size: 10px 10px;
            z-index: 0;
        }
        .letter-frame .content {
            position: relative;
            z-index: 1;
        }
        .letter-frame::after {
            content: '';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 10px;
            background: #d4af37;
            border-radius: 5px;
        }
        .message {
            font-size: 18px;
            color: #333;
            margin-top: 10px;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <div class="letter-frame">
        <div class="content">
            <div class="message">
                Happy Birthday! 🎉<br>
                Semoga hari ini membawa kebahagiaan luar biasa, cinta yang mendalam, dan semua impianmu menjadi kenyataan. Kamu adalah seseorang yang luar biasa, dan dunia menjadi lebih cerah karena kehadiranmu.<br><br>
                Jangan pernah berhenti mengejar impianmu, karena kamu pantas mendapatkan yang terbaik. Selamat menikmati hari spesialmu!
            </div>
        </div>
    </div>

    <!-- Elemen Audio -->
    <audio id="background-music" autoplay loop>
        <source src="music.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <script src="music.js"></script> <!-- Memuat script musik -->
</body>
</html>
