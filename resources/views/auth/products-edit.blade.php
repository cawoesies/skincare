<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - Lullaskin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0;
            padding: 0;
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
            max-width: 700px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #d63384;
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #d63384;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #d63384;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #bd296e;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #6c757d;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        img.preview {
            max-width: 200px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="{{ route('landing.page') }}">Lullaskin Store</a>
        <div>
            <a href="{{ route("admin") }}">Home</a>
            <a href="{{ route("produk") }}">Produk</a>
            <a href="{{ route("about.us") }}">Data User</a>
            <a href="{{ route("ingredients") }}">Data Pesan</a>
        </div>
    </nav>

    <div class="container">
        <a href="{{ route('produk') }}" class="back-link">← Kembali ke Daftar Produk</a>
        <h2>Edit Produk Skincare</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="name">Nama Produk</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>

            <label for="price">Harga</label>
            <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}" required>

            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" rows="4">{{ old('description', $product->description) }}</textarea>

            <label for="image">Gambar Produk</label>
            @if ($product->image)
                <img src="{{ asset('img/' . $product->image) }}" alt="Gambar Produk" class="preview">
            @endif
            <input type="file" id="image" name="image">

            <button type="submit" class="btn">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
