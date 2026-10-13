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
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: #fff5fa;
            color: #593052;
            margin: 0;
        }

        header {
            background: linear-gradient(135deg, #f8b8d5, #e9b9f5, #ffdce9);
            color: #74345f;
            text-align: center;
            padding: 45px 20px;
            border-bottom: 5px solid #f5c6df;
        }

        header h1 {
            margin: 0 0 12px;
            font-size: 36px;
            font-weight: 800;
        }

        header p {
            margin: 0;
            font-size: 15px;
        }

        main {
            max-width: 1200px;
            margin: auto;
            padding: 35px 20px;
        }

        .judul {
            text-align: center;
            margin-bottom: 30px;
        }

        .judul h2 {
            color: #c52d79;
            font-size: 27px;
            margin-bottom: 8px;
        }

        .judul p {
            color: #98728e;
            font-size: 14px;
        }

        .info {
            background: #ffe3f0;
            border: 1px solid #f6c4dc;
            border-radius: 16px;
            padding: 18px 22px;
            margin-bottom: 28px;
            color: #a52d73;
            font-weight: 600;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .buku {
            background: #ffffff;
            padding: 22px;
            border-radius: 18px;
            box-shadow: 0 5px 18px #e9a8cc30;
            border: 1px solid #f5c6df;
            border-top: 5px solid #e83e8c;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .buku:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px #d96ba533;
        }

        .buku h2 {
            color: #b52e78;
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 20px;
        }

        .sampul {
            background: #fff0f7;
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 18px;
        }

        .sampul img {
            width: 100%;
            max-width: 180px;
            height: 240px;
            object-fit: contain;
            display: block;
            margin: auto;
            border-radius: 6px;
        }

        .buku p {
            line-height: 1.7;
            margin: 10px 0;
            font-size: 13px;
            text-align: left;
            color: #765e73;
        }

        .buku strong {
            color: #a04482;
        }

        .kategori {
            display: inline-block;
            background: #ffe0ef;
            color: #c52d79;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .tombol {
            display: inline-block;
            background: #e83e8c;
            color: white;
            padding: 12px 22px;
            border-radius: 25px;
            text-decoration: none;
            margin-top: 18px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s;
            box-shadow: 0 4px 12px #e83e8c30;
        }

        .tombol:hover {
            background: #c72572;
            transform: translateY(-2px);
        }

        .kembali {
            text-align: center;
            margin-top: 35px;
        }

        footer {
            background: #ffe0ef;
            color: #986b88;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            font-size: 13px;
            border-top: 1px solid #f5c6df;
        }

        @media (max-width: 800px) {
            .container {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 550px) {
            header h1 {
                font-size: 28px;
            }

            .container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>♡ Katalog Buku ♡</h1>
    <p>Temukan buku favoritmu dan jelajahi berbagai bacaan menarik.</p>
</header>

<main>

    <div class="judul">
        <h2>🌸 Daftar Buku Pilihan 🌸</h2>
        <p>Setiap buku menyimpan cerita dan pengetahuan baru.</p>
    </div>

    <div class="info">
        📚 Tersedia 6 buku pilihan untuk menemani waktu membacamu!
    </div>

    <div class="container">

        @foreach ($buku as $item)
            <div class="buku">

                <h2>{{ $item['judul'] }}</h2>

                <div class="sampul">
                    <img src="{{ asset($item['gambar']) }}"
                         alt="Sampul buku {{ $item['judul'] }}">
                </div>

                <span class="kategori">{{ $item['kategori'] }}</span>

                <p>
                    <strong>Penulis:</strong>
                    {{ $item['penulis'] }}
                </p>

                <p>
                    <strong>Tahun Terbit:</strong>
                    {{ $item['tahun'] }}
                </p>

                <p>
                    <strong>Deskripsi:</strong>
                    {{ $item['deskripsi'] }}
                </p>

                <a href="{{ url('/buku/' . $item['id']) }}" class="tombol">
                    Lihat Detail →
                </a>

            </div>
        @endforeach

    </div>

    <div class="kembali">
        <a href="/" class="tombol">♡ Kembali ke Halaman Utama</a>
    </div>

</main>

<footer>
    <p>&copy; 2026 Katalog Buku. Membaca Membuka Jendela Dunia ♡</p>
</footer>

</body>
</html>

