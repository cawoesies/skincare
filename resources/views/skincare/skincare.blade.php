<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Store</title>
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
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .card {
            background: #fff5f8;
            padding: 15px;
            border: 1px solid #ff69b4;
            border-radius: 10px;
            width: 30%;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
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
        h1, h5 {
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
        <h1 class="text-center">Selamat Datang di Skincare Store</h1>
        <p class="text-center">Temukan produk skincare terbaik untuk kulit sehat dan bercahaya.</p>
        <div class="row">
            @foreach($products as $product)
            <div class="card">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                <h5>{{ $product->name }}</h5>
                <p>Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                <a href="#" class="btn">Beli Sekarang</a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
