<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Skincare Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
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
        .container {
            max-width: 1400px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
        }
        h2 {
            color: #d63384;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        .about-image {
            width: 100%;
            max-width: 400px;
            margin: 20px auto;
            display: block;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#">Skincare Store</a>
        <div>
            <a href="{{ route("home") }}">Home</a>
            <a href="{{ route("skincare") }}">Produk</a>
            <a href="{{ route("about.us") }}">Tentang Kami</a>
            <a href="{{ route("ingredients") }}">Kandungan Skincare</a>
        </div>
    </nav>
    
    <div class="container">
        <h2>Tentang Kami</h2>
        <p>Selamat datang di Lullaskin Store, tempat di mana perawatan kulit bukan hanya tentang kecantikan, tetapi juga tentang mencintai dan merawat diri sendiri. Kami percaya bahwa setiap kulit punya cerita unik dan pantas mendapatkan perhatian terbaik. Oleh karena itu, di Lullaskin Store, kami hadir dengan rangkaian produk yang dibuat dengan bahan alami, aman, dan teruji, yang dirancang khusus untuk memberikan manfaat maksimal tanpa khawatir akan bahan berbahaya.
Kami memahami bahwa memilih produk skincare yang tepat bisa menjadi tantangan. Itu sebabnya kami di sini untuk memberikanmu referensi dan informasi yang jelas mengenai setiap produk, agar kamu bisa menemukan skincare yang cocok untuk kulitmu. Baik itu untuk kulit kering, berminyak, sensitif, atau kombinasi, kami punya solusi yang dirancang dengan formula lembut yang cocok untuk setiap kebutuhan kulit.
        </p>