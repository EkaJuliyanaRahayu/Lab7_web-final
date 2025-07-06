<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'My Website' ?></title>
   <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }

        #container {
            max-width: 1100px;
            margin: auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        header {
            background-color: #2196F3;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #1976D2;
        }

        nav a {
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        nav a:hover, nav a.active {
            background-color: #1565C0;
        }

        #wrapper {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }

        #main {
            flex: 3;
            min-width: 300px;
            padding-right: 20px;
        }

        #sidebar {
            flex: 1;
            min-width: 250px;
        }

        .widget-box {
            background-color: #f1f1f1;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .widget-box h3 {
            margin-top: 0;
            border-bottom: 2px solid #2196F3;
            padding-bottom: 5px;
        }

        footer {
            text-align: center;
            background-color: #2196F3;
            color: white;
            padding: 15px;
            font-size: 14px;
        }

        a {
            color: #2196F3;
        }

        a:hover {
            text-decoration: underline;
        }

        @media screen and (max-width: 768px) {
            #wrapper {
                flex-direction: column;
            }

            #main {
                padding-right: 0;
            }
        }
    </style>
</head>
<body>
    <div id="container">
        <header>
            <h1><i class="fas fa-feather-alt"></i> Portal Artikel Menarik</h1>
        </header>

        <nav>
            <a href="<?= base_url('/home'); ?>" class="active"><i class="fas fa-home"></i> Home</a>
            <a href="<?= base_url('/artikel'); ?>"><i class="fas fa-newspaper"></i> Artikel</a>
            <a href="<?= base_url('/about'); ?>"><i class="fas fa-user"></i> About</a>
            <a href="<?= base_url('/contact'); ?>"><i class="fas fa-envelope"></i> Kontak</a>
        </nav>

        <section id="wrapper">
            <section id="main">
                <?= $this->renderSection('content') ?>
            </section>

            <aside id="sidebar">
                <?= view_cell('App\\Cells\\ArtikelTerkini::render') ?>

                <div class="widget-box">
                    <h3 class="title">Widget Header</h3>
                    <ul>
                        <li><a href="#">Widget Link</a></li>
                        <li><a href="#">Widget Link</a></li>
                    </ul>
                </div>

                <div class="widget-box">
                    <h3 class="title">Widget Text</h3>
                    <p>
                        Dapatkan informasi dan referensi menarik seputar teknologi,
                        pengembangan diri, serta tips belajar yang bermanfaat.
                    </p>
                </div>
            </aside>
        </section>

        <footer>
            <p>&copy; 2025 — Teknik Informatika | Eka Juliyana Rahayu | Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>
</html>
