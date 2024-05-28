<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polman Dashboard</title>
    <link rel="stylesheet" href="productreg.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Polman Logo">
            </div>
            <div class="user-info">
                <p><?php echo $_SESSION['username']; ?></p>
                <p>NIP. <?php echo $_SESSION['nip']; ?></p>
            </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li class="dropdown">
                    <a href="#">Master Data</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Komponen</a></li>
                        <li><a href="#">Moulding (Cetakan Plastik)</a></li>
                        <li><a href="#">Assembly</a></li>
                        <li><a href="#">Pola dan Produk</a></li>
                        <li><a href="#">Pengecoran Logam</a></li>
                        <li><a href="#">Casting Elektrik</a></li>
                    </ul>
                </li>
                <li><a href="#">Registrasi</a></li>
                <li><a href="#">Monitoring</a></li>
                <li><a href="#">Record</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container">
            <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
            <p>Which request that you will choose?</p>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Politeknik Manufaktur Bandung</p>
        </div>
    </footer>
</body>
</html>