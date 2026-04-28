<!DOCTYPE html>
<html lang="id">
<head>
  <title>5026241011</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #b3b3b3;
            padding: 40px 0;
        }

        /*-- KOTAK UTAMA --*/
        .linktree-container {
            background-color: #ffffff;
            width: 100%;
            max-width: 570px;
            min-height: 750px;
            margin: 0 auto;
            border-radius: 23px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        /*-- (HEADER) --*/
        .top-nav {
            padding: 24px;
            height: 80px;
        }

        .icon-left {
            float: left;
            width: 30px;
            height: 30px;
            object-fit: contain;
        }

        .icon-right {
            float: right;
            width: 30px;
            height: 30px;
            object-fit: contain;
        }

        /*-- PROFIL --*/
        .profile-section {
            text-align: center;
            margin-top: 10px;
        }

        .profile-image img {
            width: 96px;
            height: 96px;
            border-radius: 50px;
            border: 2px solid #fff;
        }

        .username {
            margin-top: 16px;
            font-size: 25px;
            font-weight: bold;
        }

        /*-- TOMBOL LINK --*/
        .links-section {
            padding: 30px 24px;
        }

        .link-card {
            display: block;
            background-color: #39e05b;
            padding: 20px;
            border-radius: 12px;
            text-decoration: none;
            color: #000;
            margin-bottom: 16px;
            font-weight: bold;
            font-size: 17px;
            text-align: center;
            position: relative;
        }

        .link-icon {
            position: absolute;
            left: 16px;
            top: 15px;
        }

        .link-icon img {
            width: 40px;
            height: 45px;
            object-fit: contain;
        }

        .link-menu {
            position: absolute;
            right: 20px;
            top: 24px;
        }

        /*-- AREA BAWAH (FOOTER) --*/
        .footer-section {
            position: absolute;
            bottom: 70px;
            width: 100%;
            text-align: center;
            z-index: 2;
        }

        .join-badge {
            background-color: #ffffff;
            color: #000;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            display: inline-block;
        }

        .footer-links {
            margin-top: 20px;
            margin-bottom: 15px;
        }

        .footer-links a {
            color: #000;
            font-size: 11px;
            text-decoration: none;
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <main class="linktree-container">

        <header class="top-nav">
            <img class="icon-left" src="Screenshot 2026-04-07 231730.png" alt="Icon Bintang">
            <img class="icon-right" src="image.png" alt="Icon Share">
        </header>

        <section class="profile-section">
            <div class="profile-image">
                <img src="fmDQSvMWRd24fuvpq2I8_4b264c6998b83f0813d7572a5d5594649.webp" alt="Profile Logo">
            </div>
            <h1 class="username">@gamecentral.id</h1>
        </section>

        <section class="links-section">
            <a href="#" class="link-card">
                <div class="link-icon">
                    <img src="5588a9a9-c3da-44f7-b6d6-1d8bd42b261a_f256x256.webp" alt="Shield Icon">
                </div>
                <span class="link-text">Gamecentral Consign</span>
                <div class="link-menu">⋮</div>
            </a>

            <a href="#" class="link-card">
                <div class="link-icon empty"></div>
                <span class="link-text">Gamecentral Order</span>
                <div class="link-menu">⋮</div>
            </a>

            <a href="#" class="link-card">
                <div class="link-icon empty"></div>
                <span class="link-text">Gamecentral Whatsapp (Gaming & Digital Stuff)</span>
                <div class="link-menu">⋮</div>
            </a>
        </section>

        <footer class="footer-section">
            <div class="join-badge">Bergabung dengan gamecentral.id di Linktree</div>

            <div class="footer-links">
                <a href="#">Cookie Preferences</a> •
                <a href="#">Report</a> •
                <a href="#">Privacy</a> •
                <a href="#">Explore</a>
            </div>
        </footer>

    </main>
</body>
</html>
