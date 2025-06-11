<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pesanan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff0f5;
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
            font-size: medium;
        }
        h2 {
            color: #d63384;
            text-align: center;
            margin-top: 20px;
        }

        .success-message {
            background-color: #ffe3ec;
            color: #842029;
            padding: 10px;
            margin: 20px auto;
            width: 80%;
            border: 1px solid #f5c2c7;
            border-radius: 5px;
            text-align: center;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(214, 51, 132, 0.1);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #f3d6e0;
            text-align: left;
        }

        th {
            background-color: #f8d7da;
            color: #721c24;
        }

        tr:nth-child(even) {
            background-color: #fff5f8;
        }

        button {
            background-color: #ff69b4;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e7549a;
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

    <h2>Daftar Pesanan</h2>

    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanans as $pesan)
            <tr>
                <td>{{ $pesan->nama }}</td>
                <td>{{ $pesan->email }}</td>
                <td>{{ $pesan->telepon }}</td>
                <td>{{ $pesan->alamat }}</td>
                <td>{{ $pesan->jumlah }}</td>
                <td>Rp{{ number_format($pesan->total) }}</td>
                <td>{{ $pesan->product->name ?? '-' }}</td>
                <td>
                    <form action="{{ route('pesan.destroy', $pesan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
