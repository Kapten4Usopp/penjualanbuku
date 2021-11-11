<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan buku yang laris terjual di Indonesia</title>

    <link rel="stylesheet" href="<?= base_url("") ?>/assets/css/https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="<?= base_url("") ?>/assets/css/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
	<link rel="stylesheet" href="<?= base_url("") ?>/assets/css/style.css">


    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="index.html" class="logo"> <i class="fas fa-book"></i> LAquora Fantasy Store </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#featured">featured</a>
            <a href="#arrivals">arrivals</a>
            <a href="#reviews">reviews</a>
            <a href="#blogs">blogs</a>
        </nav>
    </div>

</header>
</head>

<!-- header section ends -->

<body>
<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Diskon 25%</h3>
            <p>Jika ingin mendapatkan diskon harus membeli minimal 2 buku</p>
            <a href="#" class="btn">beli sekarang</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="<?= base_url("") ?>/assets/image/book-1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="<?= base_url("") ?>/assets/image/book-2.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="<?= base_url("") ?>/assets/image/book-3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="<?= base_url("") ?>/assets/image/book-4.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="<?= base_url("") ?>/assets/image/book-5.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="<?= base_url("") ?>/assets/image/book-6.png" alt=""></a>
            </div>
            <img src="<?= base_url("") ?>/assets/image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>Gratis Pengantaran</h3>
            <p>Membeli diatas Rp.500.000</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>Pembayaran Aman</h3>
            <p>100% pembayaran dijamin aman</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>Pengembalian Mudah</h3>
            <p>8 hari pengembalian</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 bantuan</h3>
            <p>bisa dihubungi kapan saja</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/dilan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Dilan</h3>
                    <div class="price">Rp.232.600 <span>Rp.300.000</span></div>
                    <a href="#" class="btn">masuk keranjang</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/5cm.jfif" alt="">
                </div>
                <div class="content">
                    <h3>5cm</h3>
                    <div class="price">Rp.289.000 <span>Rp.312.000</span></div>
                    <a href="#" class="btn">masuk keranjang</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/negeri-5-menara.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Negeri 5 Menara</h3>
                    <div class="price">Rp.300.000 <span>Rp.390.500</span></div>
                    <a href="#" class="btn">masuk keranjang</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/Laskar_pelangi_sampul.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Laskar Pelangi</h3>
                    <div class="price">Rp.230.850 <span>Rp.322.000</span></div>
                    <a href="#" class="btn">masuk keranjang</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/Ayatayatcinta.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ayat Ayat Cinta</h3>
                    <div class="price">Rp.287.000 <span>Rp.330.000</span></div>
                    <a href="#" class="btn">masuk keranjang</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/Perahu_Kertas_Sampul.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Perahu Kertas</h3>
                    <div class="price">Rp.339.000 <span>Rp.390.000</span></div>
                    <a href="#" class="btn">masuk keranjang</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/sang pemimpi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Sang Pemimpi</h3>
                    <div class="price">Rp.258.000 <span>Rp.287.000</span></div>
                    <a href="#" class="btn">masuk keranjang</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/bumi-manusia.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bumi Manusia</h3>
                    <div class="price">Rp.308.600 <span>Rp.348.000</span></div>
                    <a href="#" class="btn">masuk keranjang</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/para priyayi.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Para Priyayi</h3>
                    <div class="price">Rp.217.000 <span>Rp.290.000</span></div>
                    <a href="#" class="btn">masuk keranjang</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/220px-Edensor_sampul.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Edensor</h3>
                    <div class="price">Rp.200.000 <span>Rp.300.500</span></div>
                    <a href="#" class="btn">masuk keranjang</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <h3>Masukkan Keluhan Anda</h3>
        <input type="text" name="" placeholder="keluhan" id="" class="box">
        <input type="submit" value="kirim" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>new arrivals</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/aku-ini-binatang-jalang.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Aku Ini Binatang Jalal</h3>
                    <div class="price">Rp.220.000 <span>Rp.300.200</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/lelaki-harimau-eka-kurniawan.png" alt="">
                </div>
                <div class="content">
                    <h3>Lelaki Harimau</h3>
                    <div class="price">Rp.290.000 <span>Rp.380.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/Anak-Bajang-Menggiring-Angin-depan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Anak Bajang Menggiring Angin Depan</h3>
                    <div class="price">Rp.200.000 <span>Rp.266.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/olenka.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Olenka</h3>
                    <div class="price">Rp.290.500 <span>Rp.380.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/robohnya surau kami.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Robohnya Surau Kami</h3>
                    <div class="price">Rp.257.900 <span>Rp.298.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/cantik-itu-luka-depan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Cantik Itu Luka</h3>
                    <div class="price">Rp.298.000 <span>Rp.370.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/burung-burung manyar.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Burung-Burung Manyar</h3>
                    <div class="price">Rp.222.000 <span>Rp.290.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/saman.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Saman</h3>
                    <div class="price">Rp.280.500 <span>Rp.341.900</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/220px-Ronggeng_Dukuh_Paruk.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ronggeng Dukuh Paruk</h3>
                    <div class="price">Rp.299.900 <span>Rp.350.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/ziarah.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Ziarah</h3>
                    <div class="price">Rp.216.00 <span>Rp.279.000</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- arrivals section ends -->

<!-- deal section starts  -->

<!-- deal section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>client's reviews</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="<?= base_url("") ?>/assets/image/Naruto_Uzumaki.png" alt="">
                <h3>Naruto Uzumaki</h3>
                <p>Pelayanan sangat mudah dan cepat tanggap</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="<?= base_url("") ?>/assets/image/sasuke.jpg" alt="">
                <h3>Uchiha Sasuke</h3>
                <p>Buku yang saya cari-cari selama ini ada disini!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="<?= base_url("") ?>/assets/image/sakura.jfif" alt="">
                <h3>Haruno Sakura</h3>
                <p>Harga Terjangkau Kualitas Bagus dan memadai</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="<?= base_url("") ?>/assets/image/KakashiHatake.png" alt="">
                <h3>Hatake Kakashi</h3>
                <p>Bisa memesan buku yang saya inginkan dengan pre-order, itu luar biasa!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="<?= base_url("") ?>/assets/image/asuma.jfif" alt="">
                <h3>Sarutobi Asuma</h3>
                <p>Website nya yang memudahkan customer gampang mengerti dan tidak belibet</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="<?= base_url("") ?>/assets/image/Might_Guy.png" alt="">
                <h3>Might Guy</h3>
                <p>Saya sangat semangat dengan pengembangan website ini kedepannya!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>
    
</section>

<!-- reviews section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>our blogs</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/hutan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Fenomena kebakaran Hutan Luar Biasa</h3>
                    <p>Kebakaran yang melanda hutan di kalimantan semakin parah banyak sebab-akibat yang ditimbulkan. berikut berita terbarunya</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/badan.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Mempermudah Membentuk Badan</h3>
                    <p>Perbanyak Olahraga adalah salah satu cara yang bagus untuk membentuk badan. Simak caranya</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Aplikasi Memudahkan Tugas</h3>
                    <p>Dijaman seperti ini banyak aplikasi yang mempermudahkan kita mengerjakan tugas dengan berbagai cara agar mendapat nilai yang bagus</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/hang.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Cara mengatasi Hang Pada HP</h3>
                    <p>HandPhone Terkadang mengalami gangguan internal salah satunya adalah Hang. Berikut Solusinya.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="<?= base_url("") ?>/assets/image/makanan sehat.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Makanan Yang Bagus Untuk Kesehatan</h3>
                    <p>Selain Olahraga kita juga harus mengelola pola makan yang 4 sehat 5 sempurna berikut makanan sehat yang pas untuk dikonsumsi</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </div>

</section>
</body>
<!-- footer section starts  -->

<section class="footer">

  

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

 

</section>

<!-- footer section ends -->

<!-- loader  -->

<div class="loader-container">
    <img src="<?= base_url("") ?>/assets/image/loader-img.gif" alt="">
</div>
















<script src="<?= base_url("") ?>/assets/https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="<?= base_url("") ?>/assets/js/script.js"></script>

</footer>
</html>