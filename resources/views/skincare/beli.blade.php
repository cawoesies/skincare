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

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            font-weight: 500;
        }

        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .alert-error {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
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

            <!-- Alert untuk notifikasi -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="product-section">
                <div class="product-image">
                    <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
                <div class="product-details">
                    <h2>{{ $product->name }}</h2>
                    <div class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                    @if(isset($product->description))
                        <div class="product-description">{{ $product->description }}</div>
                    @endif
                </div>
            </div>

            <!-- Form dengan method POST dan route yang benar -->
            <form class="purchase-form" method="POST" action="{{ route('pesan.store') }}">
                @csrf
                
                <!-- Hidden input untuk product_id -->
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                
                <!-- Hidden inputs untuk total dan ongkir yang akan diupdate via JavaScript -->
                <input type="hidden" name="total" id="totalInput" value="">
                <input type="hidden" name="ongkir" id="ongkirInput" value="">

                <div class="form-group">
                    <label for="nama">Nama Lengkap *</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="telepon">Nomor Telepon *</label>
                    <input type="tel" id="telepon" name="telepon" value="{{ old('telepon') }}" required>
                </div>

                <div class="quantity-section">
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <select id="jumlah" name="jumlah" onchange="updateTotal()">
                            <option value="1" {{ old('jumlah') == '1' ? 'selected' : '' }}>1 Botol</option>
                            <option value="2" {{ old('jumlah') == '2' ? 'selected' : '' }}>2 Botol</option>
                            <option value="3" {{ old('jumlah') == '3' ? 'selected' : '' }}>3 Botol</option>
                            <option value="4" {{ old('jumlah') == '4' ? 'selected' : '' }}>4 Botol</option>
                            <option value="5" {{ old('jumlah') == '5' ? 'selected' : '' }}>5 Botol</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="metode_pengiriman">Metode Pengiriman</label>
                        <select id="metode_pengiriman" name="metode_pengiriman" onchange="updateTotal()">
                            <option value="Regular" data-cost="15000" {{ old('metode_pengiriman') == 'Regular' ? 'selected' : '' }}>Regular (3-5 hari) - Rp 15.000</option>
                            <option value="Express" data-cost="25000" {{ old('metode_pengiriman') == 'Express' ? 'selected' : '' }}>Express (1-2 hari) - Rp 25.000</option>
                            <option value="Same Day" data-cost="35000" {{ old('metode_pengiriman') == 'Same Day' ? 'selected' : '' }}>Same Day - Rp 35.000</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Lengkap *</label>
                    <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat lengkap untuk pengiriman" required>{{ old('alamat') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="metode_pembayaran">Metode Pembayaran</label>
                    <select id="metode_pembayaran" name="metode_pembayaran">
                        <option value="Transfer Bank" {{ old('metode_pembayaran') == 'Transfer Bank' ? 'selected' : '' }}>Transfer Bank</option>
                        <option value="E-Wallet" {{ old('metode_pembayaran') == 'E-Wallet' ? 'selected' : '' }}>E-Wallet (OVO, GoPay, DANA)</option>
                        <option value="COD" {{ old('metode_pembayaran') == 'COD' ? 'selected' : '' }}>Cash on Delivery (COD)</option>
                        <option value="Kartu Kredit" {{ old('metode_pembayaran') == 'Kartu Kredit' ? 'selected' : '' }}>Kartu Kredit/Debit</option>
                    </select>
                </div>

                <div class="total-section">
                    <div>Total Pembayaran:</div>
                    <div class="total-price" id="totalPrice">Rp 0</div>
                </div>

                <button type="submit" class="btn-primary">Beli Sekarang</button>
                <a href="{{ route('skincare') }}" class="btn-secondary" style="display: inline-block; text-align: center; text-decoration: none;">Kembali ke Produk</a>

            </form>
        </div>
    </div>

    <script>
        // Ambil harga produk dari PHP
        const productPrice = {{ $product->price }};
        
        function updateTotal() {
            const quantity = parseInt(document.getElementById('jumlah').value);
            const shippingSelect = document.getElementById('metode_pengiriman');
            const selectedOption = shippingSelect.options[shippingSelect.selectedIndex];
            const shipping = parseInt(selectedOption.getAttribute('data-cost'));
            
            const total = (productPrice * quantity) + shipping;
            
            // Update tampilan total di halaman
            document.getElementById('totalPrice').textContent = 
                'Rp ' + total.toLocaleString('id-ID');

            // Update hidden input values untuk dikirim ke server
            document.getElementById('totalInput').value = total;
            document.getElementById('ongkirInput').value = shipping;
        }

        // Jalankan updateTotal saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            updateTotal();
        });
    </script>
</body>
</html>