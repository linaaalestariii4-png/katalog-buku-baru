<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku - Katalog Buku</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background: #fff5fa;
            color: #593052;
        }

        header {
            background: linear-gradient(135deg, #f8b8d5, #e9b9f5, #ffdce9);
            padding: 35px 20px;
            text-align: center;
            color: #74345f;
        }

        header h1 {
            margin: 0 0 10px;
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .kartu {
            display: flex;
            gap: 30px;
            align-items: flex-start;
            background: white;
            border: 1px solid #f5c6df;
            border-top: 5px solid #e83e8c;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 5px 18px #e9a8cc30;
        }

        .sampul {
            flex: 0 0 230px;
            background: #fff0f7;
            padding: 15px;
            border-radius: 15px;
            text-align: center;
        }

        .sampul img {
            width: 100%;
            height: 300px;
            object-fit: contain;
        }

        .informasi {
            flex: 1;
            min-width: 0;
        }

        .informasi h2 {
            color: #b52e78;
            margin-top: 0;
        }

        .kategori {
            display: inline-block;
            background: #ffe0ef;
            color: #c52d79;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
        }

        .informasi p {
            line-height: 1.8;
            overflow-wrap: anywhere;
        }

        .informasi strong {
            color: #a04482;
        }

        .tombol {
            display: inline-block;
            background: #e83e8c;
            color: white;
            padding: 12px 22px;
            border-radius: 25px;
            text-decoration: none;
            margin-top: 15px;
            font-weight: 600;
        }

        .tombol:hover {
            background: #c72572;
        }

        footer {
            margin-top: 40px;
            background: #ffe0ef;
            color: #986b88;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 650px) {
            .kartu {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            .sampul {
                width: 100%;
                max-width: 260px;
                flex-basis: auto;
            }

            .informasi {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>♡ Detail Buku ♡</h1>
    <p>Kenali buku pilihanmu lebih dekat.</p>
</header>

<main>
    <div class="kartu">

        <div class="sampul">
            <img src="{{ asset($buku['gambar']) }}"
                 alt="Sampul {{ $buku['judul'] }}">
        </div>

        <div class="informasi">
            <h2>{{ $buku['judul'] }}</h2>

            <span class="kategori">
                {{ $buku['kategori'] }}
            </span>

            <p>
                <strong>Penulis:</strong>
                {{ $buku['penulis'] }}
            </p>

            <p>
                <strong>Tahun Terbit:</strong>
                {{ $buku['tahun'] }}
            </p>

            <p>
                <strong>Deskripsi Buku:</strong><br>
                {{ $buku['deskripsi'] }}
            </p>

            <a href="{{ url('/buku') }}" class="tombol">
                ← Kembali ke Daftar Buku
            </a>
        </div>

    </div>
</main>

<footer>
    <p>&copy; 2026 Katalog Buku. Membaca Membuka Jendela Dunia ♡</p>
</footer>

</body>
</html>

