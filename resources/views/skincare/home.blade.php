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
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
        }
        .banner {
            background: #fff5f8;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #d63384;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        h1, h2 {
            color: #d63384;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#">Skincare Store</a>
        <div>
            <a href="home.blade.php">Home</a>
            <a href="skincare.blade.php">Produk</a>
            <a href="about-us.blade.php">Tentang Kami</a>
            <a href="ingredients.blade.php">Kandungan Skincare</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="banner">
            <h1>Selamat Datang di Skincare Store</h1>
            <p>Temukan produk skincare terbaik untuk kulit sehat dan bercahaya.</p>
            <a href="skincare.blade.php" class="btn">Lihat Produk</a>
        </div>
        <h2>Kenapa Memilih Kami?</h2>
        <p>Kami menyediakan produk skincare terbaik dengan bahan alami dan terpercaya.</p>
    </div>
</body>
</html>