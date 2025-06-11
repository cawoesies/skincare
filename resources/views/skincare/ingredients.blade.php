<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kandungan Skincare</title>
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
        h2 {
            color: #d63384;
            text-align: center;
        }
        h3 {
            color: #ff69b4;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background: #fff5f8;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border-left: 5px solid #ff69b4;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('landing.page') }}">Lullaskin Store</a>
        <div>
        <a href="{{ route("landing.page") }}">Home</a>
            <a href="{{ route("skincare") }}">Produk</a>
            <a href="{{ route("about.us") }}">Tentang Kami</a>
            <a href="{{ route("ingredients") }}">Kandungan Skincare</a>
        </div>
    </nav>
    
    <div class="container" id="ingredients">
        <h2 class="text-center">Kandungan Skincare Berdasarkan Jenis Kulit</h2>
        
        <h3>Kulit Kering</h3>
        <ul>
            <li><strong>Hyaluronic Acid</strong> - Melembapkan secara mendalam dan menjaga elastisitas kulit.</li>
            <li><strong>Glycerin</strong> - Menarik air ke lapisan kulit untuk kelembapan ekstra.</li>
            <li><strong>Ceramide</strong> - Memperkuat skin barrier dan menjaga kelembapan.</li>
            <li><strong>Squalane</strong> - Menjaga hidrasi tanpa terasa berat di kulit.</li>
            <li><strong>Panthenol (Vitamin B5)</strong> - Menenangkan dan membantu regenerasi kulit.</li>
            <li><strong>Shea Butter</strong> - Memberikan kelembapan intens dan menenangkan kulit.</li>
            <li><strong>Argan Oil</strong> - Kaya akan vitamin E untuk hidrasi ekstra.</li>
        </ul>
        
        <h3>Kulit Berminyak</h3>
        <ul>
            <li><strong>Niacinamide</strong> - Mengontrol produksi minyak dan mengecilkan pori-pori.</li>
            <li><strong>Green Tea Extract</strong> - Mengandung antioksidan untuk mengurangi produksi minyak.</li>
            <li><strong>Zinc Oxide</strong> - Mengontrol sebum dan membantu meredakan jerawat.</li>
            <li><strong>Aloe Vera</strong> - Melembapkan tanpa membuat kulit berminyak.</li>
            <li><strong>Licorice Extract</strong> - Mencerahkan dan mengurangi noda hitam.</li>
            <li><strong>Salicylic Acid</strong> - Membersihkan pori-pori dan mengurangi jerawat.</li>
            <li><strong>Tea Tree Oil</strong> - Memiliki sifat antibakteri untuk melawan jerawat.</li>
        </ul>
        
        <h3>Kulit Sensitif</h3>
        <ul>
            <li><strong>Centella Asiatica</strong> - Menenangkan kemerahan dan peradangan.</li>
            <li><strong>Allantoin</strong> - Melembutkan dan membantu regenerasi kulit.</li>
            <li><strong>Beta Glucan</strong> - Menghidrasi dan mengurangi iritasi.</li>
            <li><strong>Panthenol (Vitamin B5)</strong> - Menenangkan dan merawat kulit yang iritasi.</li>
            <li><strong>Zinc Oxide</strong> - Melindungi kulit dari iritasi akibat sinar UV.</li>
            <li><strong>Chamomile Extract</strong> - Menenangkan kulit sensitif dan kemerahan.</li>
            <li><strong>Oat Extract</strong> - Menghidrasi dan meredakan iritasi kulit.</li>
        </ul>
        
        <h3>Kulit Kombinasi</h3>
        <ul>
            <li><strong>Niacinamide</strong> - Menyeimbangkan produksi minyak dan hidrasi.</li>
            <li><strong>Hyaluronic Acid</strong> - Melembapkan tanpa membuat kulit berminyak.</li>
            <li><strong>Green Tea Extract</strong> - Mengurangi peradangan di area berminyak.</li>
            <li><strong>Peptide</strong> - Menjaga elastisitas dan kesehatan kulit.</li>
            <li><strong>Jojoba Oil</strong> - Menyesuaikan hidrasi alami kulit tanpa menyumbat pori-pori.</li>
        </ul>
        
        <h3>Kulit Normal</h3>
        <ul>
            <li><strong>Vitamin C</strong> - Menjaga kulit tetap cerah dan sehat.</li>
            <li><strong>Hyaluronic Acid</strong> - Memberikan kelembapan yang seimbang.</li>
            <li><strong>Peptide</strong> - Mencegah tanda penuaan dini.</li>
            <li><strong>Squalane</strong> - Memberikan hidrasi yang cukup tanpa terasa berat.</li>
            <li><strong>Coenzyme Q10</strong> - Menjaga elastisitas kulit dan mencegah penuaan.</li>
            <li><strong>Vitamin E</strong> - Menutrisi kulit dan memberikan perlindungan antioksidan.</li>
        </ul>
    </div>
</body>
</html>
