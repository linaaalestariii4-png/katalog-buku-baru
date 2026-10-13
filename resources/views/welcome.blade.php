<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: #fff7fb;
            color: #593052;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 8%;
            background: white;
            border-bottom: 1px solid #f8d8e8;
        }

        .logo {
            color: #d63384;
            font-size: 25px;
            font-weight: 800;
        }

        nav a {
            color: #9d3477;
            text-decoration: none;
            font-weight: 600;
        }

        .hero {
            margin: 35px auto;
            width: 84%;
            padding: 55px 45px;
            border-radius: 25px;
            background: linear-gradient(120deg, #ffe0ef, #f5e5ff, #fff0f6);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            box-shadow: 0 10px 30px #e9a8cc30;
        }

        .hero-text {
            max-width: 560px;
        }

        .label {
            display: inline-block;
            background: white;
            color: #d63384;
            padding: 8px 16px;
            border-radius: 30px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        h1 {
            font-size: clamp(32px, 4vw, 48px);
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .hero p {
            color: #79556f;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        .button {
            display: inline-block;
            padding: 14px 25px;
            border-radius: 30px;
            background: #e83e8c;
            color: white;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 5px 15px #e83e8c35;
            transition: 0.3s;
        }

        .button:hover {
            background: #c72572;
            transform: translateY(-3px);
        }

        .hero-art {
            font-size: 110px;
            text-align: center;
            min-width: 180px;
        }

        .hero-art p {
            font-size: 16px;
            font-weight: 600;
            margin: 8px 0 0;
        }

        .features {
            width: 84%;
            margin: 30px auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .feature {
            background: white;
            border: 1px solid #f7d6e7;
            padding: 24px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 5px 15px #e9a8cc20;
        }

        .feature span {
            font-size: 32px;
        }

        .feature h3 {
            margin: 10px 0;
            color: #d63384;
        }

        .feature p {
            color: #886c82;
            font-size: 14px;
        }

        .quote {
            width: 84%;
            margin: 40px auto;
            text-align: center;
            background: white;
            border-radius: 18px;
            padding: 25px;
            color: #a04482;
            font-style: italic;
        }

        footer {
            background: #ffe5f0;
            padding: 25px;
            text-align: center;
            color: #986b88;
            font-size: 13px;
            margin-top: 45px;
        }

        @media (max-width: 700px) {
            nav {
                padding: 18px 6%;
                flex-wrap: wrap;
                gap: 12px;
            }

            .hero {
                width: 90%;
                padding: 30px 22px;
                flex-direction: column;
                text-align: center;
            }

            .hero-art {
                font-size: 75px;
            }

            .features {
                width: 90%;
                grid-template-columns: 1fr;
            }

            .quote {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">♡ Katalog Buku</div>
        <a href="/buku">Data Buku ↗</a>
    </nav>

    <section class="hero">
        <div class="hero-text">
            <span class="label">✿ Selamat Datang di Katalog Buku</span>
            <h1>Temukan Cerita Favoritmu ♡</h1>
            <p>
                Jelajahi berbagai koleksi buku menarik, temukan
                inspirasi baru, dan jadikan membaca sebagai
                kebiasaan yang menyenangkan.
            </p>
            <a href="/buku" class="button">Jelajahi Koleksi Buku →</a>
        </div>

        <div class="hero-art">
            📚
            <p>Setiap buku punya cerita!</p>
            <span style="font-size: 35px;">🌷 ✨ 💗</span>
        </div>
    </section>

    <section class="features">
        <div class="feature">
            <span>📚</span>
            <h3>6 Buku Pilihan</h3>
            <p>Koleksi bacaan untuk menemani harimu.</p>
        </div>

        <div class="feature">
            <span>🌸</span>
            <h3>Beragam Kategori</h3>
            <p>Novel, fantasi, inspirasi, dan lainnya.</p>
        </div>

        <div class="feature">
            <span>💗</span>
            <h3>Temukan Favoritmu</h3>
            <p>Pilih buku dan baca informasi lengkapnya.</p>
        </div>
    </section>

    <section class="quote">
        <h2>“Satu buku, seribu cerita.”</h2>
        <p>Luangkan waktu untuk membaca dan membuka wawasan baru.</p>
    </section>

    <footer>
        © 2026 Katalog Buku | Membaca membuka jendela dunia ♡
    </footer>

</body>
</html>
