<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk Skincare</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 105, 180, 0.3);
        }

        h2 {
            text-align: center;
            color: #d63384;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            color: #d63384;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ffb6c1;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #d63384;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
        }

        .btn:hover {
            background-color: #c2185b;
        }

        .back-link {
            display: inline-block;
            margin-top: 15px;
            text-align: center;
            width: 100%;
            color: #d63384;
            text-decoration: none;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: -15px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Produk Skincare</h2>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="name">Nama Produk</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama produk" value="{{ old('name') }}" required>

            <label for="price">Harga Produk</label>
            <input type="number" name="price" id="price" placeholder="Masukkan harga produk" value="{{ old('price') }}" required>

            <label for="image">Gambar Produk</label>
            <input type="file" name="image" id="image" required>

            <button type="submit" class="btn">Simpan Produk</button>
        </form>

        <a href="{{ route('produk') }}" class="back-link">← Kembali ke Daftar Produk</a>
    </div>
</body>
</html>
