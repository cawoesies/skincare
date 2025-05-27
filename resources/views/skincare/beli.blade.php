<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Produk - Skincare Store</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #FFC1CC, #FFB6C1, #FFCCCB, #F8BBD9);
            min-height: 100vh;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #E91E63;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #E91E63;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #C2185B;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .purchase-section {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .page-title {
            color: #E91E63;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .page-subtitle {
            color: #666;
            font-size: 16px;
            text-align: center;
            margin-bottom: 40px;
        }

        .product-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .product-image {
            text-align: center;
        }

        .product-image img {
            max-width: 100%;
            height: 300px;
            object-fit: contain;
            border-radius: 10px;
            border: 2px solid #E91E63;
            padding: 20px;
        }

        .product-details h2 {
            color: #E91E63;
            font-size: 28px;
            margin-bottom: 15px;
        }

        .product-price {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .product-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .purchase-form {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            border: 2px solid #F8BBD9;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #E91E63;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #C2185B;
        }

        .quantity-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .total-section {
            background: #E91E63;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            text-align: center;
        }

        .total-price {
            font-size: 24px;
            font-weight: bold;
        }

        .btn-primary {
            background: #E91E63;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background: #C2185B;
        }

        .btn-secondary {
            background: transparent;
            color: #E91E63;
            padding: 12px 25px;
            border: 2px solid #E91E63;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s;
            margin-top: 10px;
        }

        .btn-secondary:hover {
            background: #E91E63;
            color: white;
        }

        @media (max-width: 768px) {
            .product-section {
                grid-template-columns: 1fr;
            }
            
            .quantity-section {
                grid-template-columns: 1fr;
            }
            
            .nav-menu {
                display: none;
            }
            
            .purchase-section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="purchase-section">
            <h1 class="page-title">Beli Produk Skincare</h1>
            <p class="page-subtitle">Lengkapi data pembelian Anda untuk mendapatkan produk skincare terbaik</p>

            <div class="product-section">
                <div class="product-image">
                    <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">

                </div>
                <div class="product-details">
                    <h2>{{ $product->name }}</h2>
                    <div class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                </div>
            </div>

            <form class="purchase-form">
                <div class="form-group">
                    <label for="nama">Nama Lengkap *</label>
                    <input type="text" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="telepon">Nomor Telepon *</label>
                    <input type="tel" id="telepon" name="telepon" required>
                </div>

                <div class="quantity-section">
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <select id="jumlah" name="jumlah" onchange="updateTotal()">
                            <option value="1">1 Botol</option>
                            <option value="2">2 Botol</option>
                            <option value="3">3 Botol</option>
                            <option value="4">4 Botol</option>
                            <option value="5">5 Botol</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pengiriman">Metode Pengiriman</label>
                        <select id="pengiriman" name="pengiriman" onchange="updateTotal()">
                            <option value="15000">Regular (3-5 hari) - Rp 15.000</option>
                            <option value="25000">Express (1-2 hari) - Rp 25.000</option>
                            <option value="35000">Same Day - Rp 35.000</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Lengkap *</label>
                    <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat lengkap untuk pengiriman" required></textarea>
                </div>

                <div class="form-group">
                    <label for="pembayaran">Metode Pembayaran</label>
                    <select id="pembayaran" name="pembayaran">
                        <option value="transfer">Transfer Bank</option>
                        <option value="ewallet">E-Wallet (OVO, GoPay, DANA)</option>
                        <option value="cod">Cash on Delivery (COD)</option>
                        <option value="kartu">Kartu Kredit/Debit</option>
                    </select>
                </div>

                <div class="total-section">
                    <div>Total Pembayaran:</div>
                    <div class="total-price" id="totalPrice">Rp 165.000</div>
                </div>

                <button type="submit" class="btn-primary">Beli Sekarang</button>
                <button type="button" class="btn-secondary" onclick="history.back()">Kembali ke Produk</button>
            </form>
        </div>
    </div>

    <script>
    function updateTotal() {
        const quantity = parseInt(document.getElementById('jumlah').value);
        const shipping = parseInt(document.getElementById('pengiriman').value);
        const productPrice =  $product-price ;
        
        const total = (productPrice * quantity) + shipping;
        
        // Update teks total di halaman
        document.getElementById('totalPrice').textContent = 
            'Rp ' + total.toLocaleString('id-ID');

        // Update hidden input value
        document.getElementById('totalInput').value = total;
        document.getElementById('ongkirInput').value = shipping;
    }

    updateTotal();
</script>

</body>
</html>