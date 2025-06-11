<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Skincare Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fdeff2;
            color: #333;
        }
        .navbar {
            background-color: #ffebf0;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar a {
            text-decoration: none;
            color: #d63384;
            margin: 0 10px;
            font-weight: bold;
        }
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 90vh;
            background: linear-gradient(to bottom, #ffccd5, #fdeff2);
            padding: 20px;
        }
        .hero h2 {
            font-size: 40px;
            color: #d63384;
        }
        .hero p {
            font-size: 18px;
            color: #555;
            max-width: 600px;
        }
        .btn {
            background-color: #d63384;
            color: white;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            font-size: 18px;
            border-radius: 8px;
            margin-top: 15px;
            text-decoration: none;
        }
        .hero img {
            width: 300px;
            margin-top: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('landing.page') }}">Lullaskin Store</a>
        <div>
            <a href="{{ route("home") }}">Home</a>
            <a href="{{ route("skincare") }}">Produk</a>
            <a href="{{ route("ingredients") }}">Kandungan Skincare</a>
            <a href="{{ route("about.us") }}">Tentang Kami</a>
        </div>
    </nav>
    
    <section class="hero">
        <h2>Selamat Datang di Lullaskin Store</h2>
        <p>Perawatan kulit terbaik untuk semua jenis kulit, memberikan kelembapan dan perlindungan maksimal.</p>
        <a href="{{ route('skincare') }}" class="btn">Jelajahi Produk</a>
    </section>
</body>
</html>
