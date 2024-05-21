<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Website</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <?php include 'db_connect.php'; ?>

    <!-- Navbar -->
    <header>
        <a href="#" class="logo">Nasya Tubuon</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Blog</a></li>
            <li><a href="#portfolio">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header>
    <!-- Home -->
    <section class="home" id="home">
        <div class="social"></div>
        <div class="home-img">
            <img src="diri.jpg" alt="">
        </div>
        <div class="home-text">
            <span>Hello, I'm</span>
            <h1>Nasya Tubuon</h1>
            <h2>220211060262</h2>
            <p>Informatika <br> Universitas Sam Ratulangi <br></p>
            <a href="#contact" class="btn">Contact Me</a>
        </div>
    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="heading">
            <h2>About Me</h2>
            <span>Introduction</span>
        </div>
        <!-- About Content -->
        <div class="about-container">
            <div class="about-img">
                <img src="caca.jpg" alt="">
            </div>
            <div class="about-text">
                <h2>Saya adalah mahasiswa Prodi Teknik Informatika semester 4. Saat ini saya sedang menempuh pendidikan S1 di Universitas Sam Ratulangi.</h2>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services" id="services">
        <div class="heading">
            <h2>Blog</h2>
        </div>
        <div class="services-content">
            <?php
            // Query untuk mengambil data artikel dari database
            $sql = "SELECT judul, konten, url FROM artikel LIMIT 3";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="services-box">';
                    echo '<i class="bx bx-code-alt"></i>';
                    echo '<h3>' . htmlspecialchars($row["judul"]) . '</h3>';
                    echo '<a href="' . htmlspecialchars($row["url"]) . '">Baca Disini</a>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="heading">
            <h2>Gallery</h2>
        </div>
        <div class="portfolio-content">
            <div class="portfolio-img">
                <img src="lalisa5.jpg" alt="">
            </div>
            <div class="portfolio-img">
                <img src="lalisa4.jpg" alt="">
            </div>
            <div class="portfolio-img">
                <img src="lalisa1.jpg" alt="">
            </div>
            <div class="portfolio-img">
                <img src="lalisa6.jpg" alt="">
            </div>
            <div class="portfolio-img">
                <img src="lalisa7.jpg" alt="">
            </div>
            <div class="portfolio-img">
                <img src="lalisa2.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact</h2>
        </div>
        <div class="information">
            <!-- Box 1 -->
            <div class="info-box">
                <i class='bx bxs-user'></i>
                <span>Nasya Tubuon</span>
            </div>
            <!-- Box 2 -->
            <div class="info-box">
                <i class='bx bxs-phone'></i>
                <span>089603987457</span>
            </div>
            <!-- Box 3 -->
            <div class="info-box">
                <i class='bx bxs-envelope'></i>
                <span>nasyatubuon03@gmail.com</span>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <div class="footer">
        <h2>Social media</h2>
        <div class="footer-social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
        </div>
    </div>
    <!-- Link to JS -->
    <script src="js/script.js"></script>
</body>
</html>
<?php $conn->close(); ?>