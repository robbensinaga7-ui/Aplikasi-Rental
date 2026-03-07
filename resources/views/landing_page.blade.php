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
font-family: Arial, Helvetica, sans-serif;
}

body{
background: linear-gradient(120deg,#2f80ed,#56ccf2);
color:white;
}

/* Navbar */

nav{
display:flex;
justify-content:space-between;
align-items:center;
padding:20px 60px;
}

.logo{
font-size:24px;
font-weight:bold;
}

.menu a{
color:white;
text-decoration:none;
margin-left:20px;
font-size:16px;
}

/* Hero */

.hero{
display:flex;
align-items:center;
justify-content:space-between;
padding:80px 60px;
}

.hero-text{
max-width:500px;
}

.hero-text h1{
font-size:48px;
margin-bottom:20px;
}

.hero-text p{
font-size:18px;
margin-bottom:30px;
opacity:0.9;
}

.btn{
background:white;
color:#2f80ed;
padding:14px 28px;
border-radius:30px;
text-decoration:none;
font-weight:bold;
}

/* Image */

.hero-img img{
width:320px;
}

</style>
</head>

<body>

<nav>
<div class="logo">Camping Rental</div>

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

</body>
</html>