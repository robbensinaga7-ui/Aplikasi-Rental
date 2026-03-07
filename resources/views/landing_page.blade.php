<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Camping Rental</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family: 'Segoe UI', sans-serif;
}

body{
background: linear-gradient(135deg,#2f80ed,#56ccf2);
color:white;
min-height:100vh;
}

/* NAVBAR */

nav{
display:flex;
justify-content:space-between;
align-items:center;
padding:20px 60px;
background: rgba(0,0,0,0.15);
backdrop-filter: blur(6px);
}

.logo{
font-size:26px;
font-weight:bold;
}

.menu a{
color:white;
text-decoration:none;
margin-left:25px;
font-size:16px;
transition:0.3s;
}

.menu a:hover{
color:#ffd166;
}

/* HERO */

.hero{
display:flex;
align-items:center;
justify-content:space-between;
padding:100px 80px;
}

.hero-text{
max-width:500px;
}

.hero-text h1{
font-size:54px;
margin-bottom:20px;
line-height:1.2;
}

.hero-text p{
font-size:18px;
margin-bottom:35px;
opacity:0.9;
}

/* BUTTON */

.btn{
background:#ffd166;
color:#333;
padding:14px 30px;
border-radius:30px;
text-decoration:none;
font-weight:bold;
transition:0.3s;
}

.btn:hover{
background:white;
transform:scale(1.05);
}

/* IMAGE */

.hero-img img{
width:350px;
filter: drop-shadow(0 15px 20px rgba(0,0,0,0.4));
}

/* FEATURES */

.features{
display:flex;
justify-content:center;
gap:30px;
padding:40px 80px 80px;
}

.card{
background: rgba(255,255,255,0.15);
padding:25px;
border-radius:15px;
width:220px;
text-align:center;
backdrop-filter: blur(10px);
transition:0.3s;
}

.card:hover{
transform:translateY(-10px);
background: rgba(255,255,255,0.25);
}

.card h3{
margin-bottom:10px;
}

.card p{
font-size:14px;
}

</style>
</head>

<body>

<nav>
<div class="logo">🏕 Camping Rental</div>

<div class="menu">
<a href="#">Catalog</a>
<a href="#">Login</a>
<a href="#">Daftar</a>
</div>
</nav>

<section class="hero">

<div class="hero-text">
<h1>Petualangan Dimulai dari Sini!</h1>

<p>
Sewa peralatan camping berkualitas untuk petualangan Anda.
Mudah, cepat, dan terpercaya!
</p>

<a href="#" class="btn">Jelajahi Katalog</a>
</div>

<div class="hero-img">
<img src="https://cdn-icons-png.flaticon.com/512/201/201623.png">
</div>

</section>

<section class="features">

<div class="card">
<h3>⛺ Peralatan Lengkap</h3>
<p>Tenda, carrier, kompor, dan perlengkapan lainnya.</p>
</div>

<div class="card">
<h3>⚡ Cepat & Mudah</h3>
<p>Pemesanan alat camping hanya dalam beberapa klik.</p>
</div>

<div class="card">
<h3>⭐ Terpercaya</h3>
<p>Peralatan berkualitas dan siap digunakan.</p>
</div>

</section>

</body>
</html>