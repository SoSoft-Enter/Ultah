<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Ulang Tahun</title>
    <style>
        /* Style umum untuk body */
        body {
            margin: 0;
            padding: 0;
            background: url('bg.png') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden; /* Menjaga agar scroll tidak muncul */
        }

        .content {
            display: none;
            opacity: 0;
            transition: opacity 1s ease-in-out; /* Transisi untuk perubahan opasitas */
        }

        /* Menampilkan konten */
        .content.show {
            display: block;
            opacity: 1;
        }

        /* Frame pertama (home) */
        .frame {
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid #4CAF50;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            margin: auto;
        }
        .frame h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #4CAF50;
        }
        .frame p {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }
        .icon-button {
            display: inline-block;
            cursor: pointer;
            animation: pulse 1.5s infinite;
        }
        .icon-button img {
            width: 80px;
            transition: transform 0.2s;
        }
        .icon-button:hover img {
            transform: scale(1.2);
        }

        /* Animasi Pulse */
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        /* Frame kedua (greeting) */
        .container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            width: 350px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            position: relative;
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
        }
        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        /* Frame ketiga (letter) */
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
            overflow: auto; /* Pastikan konten dapat discroll */
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Menjaga teks di atas */
            z-index: 1;
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
            z-index: -1; /* Pastikan elemen grid berada di belakang */
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
            word-wrap: break-word; /* Agar teks tidak terpotong */
            max-height: 400px; /* Menjamin teks dapat ditampilkan sepenuhnya */
            overflow-y: auto;
        }
    </style>
</head>
<body>

    <!-- Audio background -->
    <audio id="background-music" autoplay loop>
        <source src="music.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <!-- Konten -->
    <div id="home" class="content">
        <div class="frame">
            <h1>Ada pesan buat kamu!</h1>
            <p>Tekan pesan untuk membuka</p>
            <a href="#" class="icon-button" onclick="showContent('greeting')">
                <img src="icon.png" alt="Icon">
            </a>
        </div>
    </div>

    <div id="greeting" class="content">
        <div class="container">
            <h1>Happy Birthday!</h1>
            <div class="photo-frame">
                <img src="photo.jpg" alt="Foto Ulang Tahun">
            </div>
            <p class="name">❤️Aninda Celina❤️</p>
            <a href="#" class="button" onclick="showContent('letter')">Lihat Surat</a>
        </div>
    </div>

    <div id="letter" class="content">
        <div class="letter-frame">
            <div class="message">
                Happy Birthday! 🎉<br>
                Semoga hari ini membawa kebahagiaan luar biasa, cinta yang mendalam, dan semua impianmu menjadi kenyataan. Kamu adalah seseorang yang luar biasa, dan dunia menjadi lebih cerah karena kehadiranmu.<br><br>
                Jangan pernah berhenti mengejar impianmu, karena kamu pantas mendapatkan yang terbaik. Selamat menikmati hari spesialmu!
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk menampilkan konten dengan animasi transisi
        function showContent(contentId) {
            // Sembunyikan semua konten dengan efek fade out
            const contents = document.querySelectorAll('.content');
            contents.forEach(content => {
                content.classList.remove('show');
            });

            // Tampilkan konten yang dipilih dengan efek fade in
            const content = document.getElementById(contentId);
            content.classList.add('show');
        }

        // Tampilkan halaman utama secara default
        showContent('home');
    </script>
</body>
</html>
