<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo Admin Cantik Produk Skincare</title>
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
        .product-card {
            background: #fff5f8;
            padding: 15px;
            border: 1px solid #ff69b4;
            border-radius: 10px;
            width: 30%;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .product-card img {
            max-width: 100%;
            height: 120px;
            object-fit: contain;
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
            border: none;
            cursor: pointer;
            margin: 2px;
        }
        .btn-outline-secondary {
            background: transparent;
            color: #6c757d;
            border: 1px solid #6c757d;
        }
        .btn-outline-danger {
            background: transparent;
            color: #dc3545;
            border: 1px solid #dc3545;
        }
        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
        }
        h1, h2, h4, h5 {
            color: #d63384;
        }
        .fw-bold {
            font-weight: bold;
        }
        .mb-4 {
            margin-bottom: 1.5rem;
        }
        .me-1 {
            margin-right: 0.25rem;
        }
        @media (max-width: 768px) {
            .product-card {
                width: 45%;
            }
        }
        @media (max-width: 480px) {
            .product-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('landing.page') }}">Lullaskin Store</a>
        <div>
            <a href="{{ route("admin") }}">Home</a>
            <a href="{{ route("produk") }}">Produk</a>
            <a href="{{ route("index") }}">Data Pesan</a>
        </div>
    </nav>
    
    <div class="container">
        <h2 class="fw-bold mb-4">Kelola Produk Skincare</h2>

        <a href="{{ route('products.create') }}" class="btn mb-4">
            + Tambah Produk Skincare
        </a>

        <div class="row">
            @foreach ($products as $product)
            <div class="product-card">
                <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
                <h4>{{ $product->name }}</h4>
                <p>Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-secondary btn-sm me-1">✏ Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm">🗑</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>