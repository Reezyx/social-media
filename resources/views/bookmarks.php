<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    :root {
        --main_color: #EEEEEE;
        --main_color-2: black;
        --main_color-3: #3F979B;
        --text-color: #D9D9D9;
    }

    * {
        /* border: 1px solid white; */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    ::-webkit-scrollbar {
        width: 0px;
    }

    ::-webkit-scrollbar-thumb {
        background: black;
    }

    .sidebar {
        position: fixed;
        z-index: 100;
        overflow: auto;
        overflow-x: hidden;
        height: 100%;
        width: 16rem;
        /* background: var(--main_color); */
        box-shadow: 1px 2px 1px rgba(256, 256, 256, 0.3);
        transition: all 0.5s ease;
    }

    .sidebar .detail_logo {
        height: 80px;
        display: flex;
        align-items: center;
    }

    .sidebar .detail_logo #usernameProfileAuthor {
        margin-top: 2px;
        font-size: 0.9rem;
        color: white;
        font-weight: 500;
    }

    .sidebar .detail_logo #namaProfileAuthor {
        font-size: 0.6rem;
        font-family: 'Poppins';
        font-weight: 300;
        color: var(--main_color);
    }

    .sidebar .detail_logo img {
        width: 37px;
        aspect-ratio: 1/1;
        padding: 2px;
        border-radius: 20px;
    }

    .sidebar .detail_logo a {
        text-decoration: none;
    }

    .sidebar .detail_logo i {
        font-size: 28px;
        font-weight: 500;
        color: white;
        min-width: 60px;
        text-align: center
    }

    .detail_logo .rowUsername {
        margin: 0px 0px 0px -15px;
    }

    .konten-home .card {
        width: 11.2rem;
        color: white;
        background-color: black;
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        border-radius: 8px;
        padding: 0.2rem 0.2rem 1rem 1rem;
        margin-bottom: -1.3rem;
        transition: all 0.5s ease;
    }

    .card .card-text {
        font-size: 0.8rem;
        color: var(--text-color);
        margin-top: -0.7rem;
    }

    .rowUsername span {
        margin-top: -2px;
    }

    .sidebar .link-navigasi {
        margin-top: -8px;
    }

    .sidebar .link-navigasi .links_name {
        margin-top: 42px;
    }

    .sidebar .link-navigasi .sidebarActive i {
        color: #52D3D8;
    }

    .sidebar .link-navigasi .sidebarActive .links_name {
        color: #52D3D8;
        font-weight: 600;
        letter-spacing: 1;
    }

    .sidebar .link-navigasi li {
        position: relative;
        list-style: none;
        height: 45px;
    }

    .sidebar .link-navigasi li a {
        height: 100%;
        width: 10%;
        margin-left: -32px;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
    }

    .sidebar .link-navigasi li a p {
        height: 100%;
        width: 10%;
        margin-top: 45px;
        transition: all 0.4s ease;
    }

    .sidebar .link-navigasi li i {
        min-width: 60px;
        text-align: center;
        font-size: 14px;
        color: var(--main_color-3);
    }

    .sidebar .link-navigasi li a .links_name {
        color: white;
        font-size: 13px;
        font-weight: 400;
        white-space: nowrap;
    }

    .sidebar .link-navigasi .log_out {
        width: 100%;
    }

    .sidebar .link-navigasi .log_out p {
        margin-top: 40px;
    }

    .sidebar .link-navigasi .SidebarBottomText {
        margin-left: -1rem;
        margin-right: 1rem;
        position: absolute;
        bottom: 10;
        font-size: 0.7rem;
    }

    .sidebar .link-navigasi .SidebarBottomText p {
        font-size: 0.2rem;
    }

    .logoHomepage {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logoHomepage img {
        padding-top: 1rem;
        width: 2rem;
    }

    .navFilter {
        margin-left: -15rem;
    }

    .home-section {
        position: relative;
        width: calc(100% - 240px);
        left: 240px;
        top: 7rem;
        transition: all 0.5s ease;
    }

    .nav-section {
        position: relative;
        width: calc(100% - 240px);
        left: 280px;
        transition: all 0.5s ease;
    }

    .nav-section h1 {
        color: var(--main_color);
        font-size: 0.9rem;
        margin: 1.6rem 0rem 1rem 2rem;
    }

    .logoHomepage {
        margin-left: -15rem;
    }

    .sidebar.active~.home-section {
        width: calc(100% - 60px);
        left: 60px;
    }

    .home-section nav {
        display: flex;
        justify-content: space-between;
        height: 80px;
        background: #fff;
        display: flex;
        align-items: center;
        position: fixed;
        width: calc(100% - 240px);
        left: 240px;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
    }

    .sidebar.active~.home-section nav {
        left: 60px;
        width: calc(100% - 60px);
    }

    .home-section .konten-home {
        position: relative;
        margin: 0rem 2rem 0rem 2rem;
    }

    .konten-home img {
        aspect-ratio: 1/1;
        height: 9rem;
        width: 9rem;
        margin-top: -1rem;
    }

    .navigasi {
        margin-right: 10rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .navigasi .navigasi-item a {
        font-size: 0.7rem;
        text-align: center;
        margin-right: 100px;
        text-decoration: none;
        color: white;
    }

    .navigasi-item .active p {
        font-weight: 600;
        letter-spacing: 1;
        padding-bottom: 5px;
        border-bottom: 2px solid var(--main_color-3);
        transition: all ease 0.3s;
    }

    .navigasi {
        font-family: 'DM Sans', sans-serif;
        list-style-type: none;
        display: flex;
        justify-content: center;
    }

    .navigasi a {
        color: black;
    }

    .profileAuthor {
        margin-left: -17px;
        display: flex;
    }

    .profileAuthor img {
        width: 50px;
        height: 50px;
        aspect-ratio: 1/1;
        margin-left: -10px;
        padding: 10px;
        border-radius: 50%;
        margin-top: -1rem;
    }

    .profileAuthor #usernamePosting {
        width: 7rem;
        margin-top: -3px;
        font-weight: 700;
        font-size: 0.5rem;
        color: var(--main_color);
    }

    .profileAuthor #timePosting {
        width: 7rem;
        color: var(--main_color);
        margin-top: -18px;
        font-size: 0.5rem;
    }

    .profileAuthor span {
        margin: 10px 0px 0px 5px;
    }

    .saveToBookmark {
        float: right;
        margin-right: -1rem;
        font-size: 1.3rem;
        color: var(--main_color);
        margin-top: -3rem;
        background-color: unset;
        border: unset;
    }

    .fiturPostingan p {
        margin: -2px 0px 10px 8px;
        color: var(--main_color);
        font-size: 0.9rem;
    }

    .fiturPostingan i {
        margin-left: 45px;
        color: var(--main_color);
        font-size: 1.2rem;
    }

    .home-section #SuggestFollowing #header-suggested {
        font-size: 1rem;
        font-family: 'Poppins';
        font-weight: 600;
        color: white;
    }

    .home-section #SuggestFollowing #child-header-suggested {
        font-size: 0.6rem;
        font-family: 'Poppins';
        font-weight: 600;
        color: grey;
        margin-top: 0.2rem;
    }

    @media (max-width: 991px) {

        .home-section #SuggestFollowing {
            display: none;
        }


        .sidebar {
            width: 60px;
        }

        .rowUsername {
            display: none;
        }

        .link-navigasi p {
            display: none;
        }

        .sidebar.active {
            width: 220px;
        }

        .home-section,
        .nav-section {
            width: calc(100% - 60px);
            left: 60px;
        }

        .nav-section {
            width: calc(100% - 60px);
            left: 60px;
        }

        .logoHomepage {
            margin-left: 0rem;
        }

        .navFilter {
            margin-left: 0rem;
        }

        .sidebar.active~.home-section {
            overflow: hidden;
            left: 220px;
        }

        .home-section nav {
            width: calc(100% - 60px);
            left: 60px;
        }

        .sidebar.active~.home-section nav {
            width: calc(100% - 220px);
            left: 220px;
        }
    }

    @media (max-width: 576px) {

        footer .row {
            margin-left: 0.5rem;
        }
    }

    @media (max-width: 560px) {
        .card {
            transform: translateX(-12%);
            width: 130%;
            transition: all 0.5s ease;
        }

        .profileAuthor .namaProfileAuthorPost p {
            font-size: 0.7rem;
        }
    }

    @media(max-width: 462px) {
        .konten-home .card {
            padding: 0.6rem 1.2rem 1.2rem 1.2rem;
            transition: all 0.5s ease;
        }

        .card .card-text {
            margin-top: -1rem;
            font-size: 0.7rem;
        }

        .profileAuthor .container p {
            margin-top: -5px;
        }

        .profileAuthor img {
            width: 50px;
            height: 50px;
        }

        .profileAuthor #usernamePosting {
            font-size: 0.7rem;
        }

        .profileAuthor #timePosting {
            font-size: 0.6rem;
        }

        .fiturPostingan p {
            display: none;
        }

        .fiturPostingan i {
            margin-right: -2rem;
            font-size: 1rem;
        }

        .saveToBookmark {
            font-size: 1.3rem;
            transform: translateY(0.5rem);
        }
    }

    @media (max-width: 400px) {
        .card {
            transform: translateX(-12%);
            width: 180%;
            transition: all 0.5s ease;
        }

        .navigasi-item {
            width: 60%;
            font-size: 0.7rem;
        }

        .home-section nav {
            width: 100%;
            left: 70px;
        }
    }

    .sidebar .detail_logo #namaProfileAuthor,
    .suggestedFollowing,
    #timePosting,
    #usernamePosting {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    footer {
        background-color: var(--main_color-3);
        bottom: 0;
        z-index: 101;
        position: fixed;
        width: 100%;
    }

    footer .column-text-footer {
        margin-top: 10px;
        justify-content: center;
    }

    footer #text-1 {
        padding-top: 10px;
        font-size: 1rem;
        font-weight: 600;
        color: white;
    }

    footer #text-2 {
        font-size: 0.7rem;
        font-weight: 500;
        color: white;
        margin-top: -10px;
    }

    footer .btn-login-footer {
        font-size: 0.9rem;
        margin-bottom: 24px;
        background-color: none;
        border: 1px solid white;
        margin-top: 20px;
        color: white;
        font-weight: 600;
        padding: 10px 30px 10px 30px;
        border-radius: 15px;
        margin-right: 20px;
    }

    footer .btn-login-footer:hover {
        color: white;
        box-shadow: 2px 1px 5px rgba(0, 0, 0, 0.4);
        transition: all ease 0.2s;
    }

    footer .btn-regist-footer:hover {
        box-shadow: 2px 1px 5px rgba(0, 0, 0, 0.4);
        transition: all ease 0.2s;
    }

    footer .btn-regist-footer {
        font-size: 0.9rem;
        margin-bottom: 24px;
        background-color: white;
        margin-top: 20px;
        color: black;
        font-weight: 600;
        padding: 10px 20px 10px 20px;
        border-radius: 15px;
    }

    .footer p {
        font-size: 0.6rem;
        color: grey;
        margin: 20px 20px 0px 0px;
    }

    .footer #copyright {
        margin: 20px 0px 20px 0px;
    }
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <title>Beranda</title>
        <link rel="icon" href="images/logo-medsos.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link
            href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Edu+NSW+ACT+Foundation:wght@700&family=Kanit:wght@500&family=Mochiy+Pop+One&family=Montserrat:wght@200;600;800&family=Poppins:ital,wght@0,700;1,900&family=Ubuntu:wght@300&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </head>

    <body style="background-color: black;">
        <div class="sidebar">
            <div class="detail_logo">
                <a href="profile.php" style="display: flex;">
                    <i><img src="images/smk1.jpg" alt="gambar postingan"></i>
                    <div class="container-fluid rowUsername">
                        <div class="row">
                            <span id="usernameProfileAuthor">Naufal Fadhilah F</span>
                        </div>
                        <div class="row">
                            <span id="namaProfileAuthor">Naufal Fadhilah F</span>
                        </div>
                    </div>
                </a>
            </div>
            <hr
                style="color: var(--main_color); opacity: 0.3; width: 100%; margin-top: -0px; height: 1.6px; justify-content: center;">
            <ul class="link-navigasi">
                <li>
                    <a href="index.php">
                        <i class="fa-solid fa-house aktif"></i>
                        <p class="links_name" id="beranda">Beranda</p>
                    </a>
                </li>
                <li>
                    <a href="search.php">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <p class="links_name" id="explore">Explore</p>
                    </a>
                </li>
                <li>
                    <a href="postingan.css">
                        <i class="fa-solid fa-bell"></i>
                        <p class="links_name" id="notifikasi">Notifikasi</p>
                    </a>
                </li>
                <li>
                    <a href="home.php">
                        <i class="fa-solid fa-plus"></i>
                        <p class="links_name" id="posting">Posting</p>
                    </a>
                </li>
                <li class="sidebarActive">
                    <a href="bookmarks.php">
                        <i class="fa-solid fa-bookmark"></i>
                        <p class="links_name" id="bookmarks">Bookmarks</p>
                    </a>
                </li>
                <li>
                    <a href="dashboard_user.php">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <p class="links_name">Explore</p>
                    </a>
                </li>
                <li>
                    <a href="dashboard_postingan.css">
                        <i class="fa-solid fa-bell"></i>
                        <p class="links_name">Notifikasi</p>
                    </a>
                </li>
                <li class="log_out">
                    <a href="../session/logout.php">
                        <i class="fa-solid fa-arrow-left"></i>
                        <p class="links_name">Log out</p>
                    </a>
                </li>
                <li class="SidebarBottomText">
                    <p style="font-size: 0.48rem; width: 100%; color: grey; margin-top: 1rem;">
                        Terms of Service
                        Privacy Policy
                        Cookie Policy
                        Accessibility
                        Ads info
                        More
                        © 2024 Amanah Corp.
                    </p>
                </li>
            </ul>
        </div>
        <!-- <h1 style="transform: translateX(5rem); padding-top: 20px; margin-bottom: -0.4rem; letter-spacing: 3; color: var(--main_color-2); font-weight: 800;">Sosmed</h1> -->
        <section class="nav-section" style="z-index: 99; position: fixed; background-color: black;">
            <div class="container-fluid nav" style="background-color: black;">
                <div class="container" style="background-color: black; transform: translateX(-1rem);">
                    <nav class="justify-content-center">
                        <div class="logoHomepage">
                            <img src="images/logo-medsos.png" alt="logo homepage">
                        </div>
                        <div class="row">
                            <h1>All Bookmarks</h1>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
        <section class="home-section" style="background-color: black;">
            <div class="container-fluid nav" style="background-color: black;">
                <div class="container-fluid container-xl">
                    <!-- Foreach card dimulai dari sini -->
                    <div class="row" style="margin-bottom: 2rem;"> <a href="postingan.php"
                            style="text-decoration: none; color: black;">
                            <div class="konten-home">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3 col-md-4 col-6" style="margin-bottom: 3rem;">
                                            <a href="postingan.php">
                                                <div class="card mx-auto">
                                                    <div class="card-body cardContent">
                                                        <div class="profileAuthor">
                                                            <a href="profile.php"
                                                                style="display: flex; text-decoration: none;">
                                                                <img class="imagesProfileAuthorPost"
                                                                    src="images/ldks-hari--1_1640302800_ldks-11-hari-1-thumb.jpg"
                                                                    alt="gambar profile">
                                                                <div class="container"
                                                                    style="margin: 0rem 0rem 0rem -1.2rem;">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p id="UsernamePosting">
                                                                                Naufal
                                                                                Fadhilah F</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p id="timePosting">15 jam
                                                                                yang lalu
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <a href="postingan.php">
                                                        <img style="border-radius: 8px;"
                                                            src="images/default_profile.png" class="card-img-top"
                                                            alt="Gambar Postingan">
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3 col-md-4 col-6" style="margin-bottom: 3rem;">
                                            <a href="postingan.php">
                                                <div class="card mx-auto">
                                                    <div class="card-body cardContent">
                                                        <div class="profileAuthor">
                                                            <a href="profile.php"
                                                                style="display: flex; text-decoration: none;">
                                                                <img class="imagesProfileAuthorPost"
                                                                    src="images/ldks-hari--1_1640302800_ldks-11-hari-1-thumb.jpg"
                                                                    alt="gambar profile">
                                                                <div class="container"
                                                                    style="margin: 0rem 0rem 0rem -1.2rem;">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p id="UsernamePosting">
                                                                                Naufal
                                                                                Fadhilah F</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p id="timePosting">15 jam
                                                                                yang lalu
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <a href="postingan.php">
                                                        <img style="border-radius: 8px;"
                                                            src="images/default_profile.png" class="card-img-top"
                                                            alt="Gambar Postingan">
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3 col-md-4 col-6" style="margin-bottom: 3rem;">
                                            <a href="postingan.php">
                                                <div class="card mx-auto">
                                                    <div class="card-body cardContent">
                                                        <div class="profileAuthor">
                                                            <a href="profile.php"
                                                                style="display: flex; text-decoration: none;">
                                                                <img class="imagesProfileAuthorPost"
                                                                    src="images/ldks-hari--1_1640302800_ldks-11-hari-1-thumb.jpg"
                                                                    alt="gambar profile">
                                                                <div class="container"
                                                                    style="margin: 0rem 0rem 0rem -1.2rem;">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p id="UsernamePosting">
                                                                                Naufal
                                                                                Fadhilah F</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p id="timePosting">15 jam
                                                                                yang lalu
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <a href="postingan.php">
                                                        <img style="border-radius: 8px;"
                                                            src="images/default_profile.png" class="card-img-top"
                                                            alt="Gambar Postingan">
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3 col-md-4 col-6" style="margin-bottom: 3rem;">
                                            <a href="postingan.php">
                                                <div class="card mx-auto">
                                                    <div class="card-body cardContent">
                                                        <div class="profileAuthor">
                                                            <a href="profile.php"
                                                                style="display: flex; text-decoration: none;">
                                                                <img class="imagesProfileAuthorPost"
                                                                    src="images/ldks-hari--1_1640302800_ldks-11-hari-1-thumb.jpg"
                                                                    alt="gambar profile">
                                                                <div class="container"
                                                                    style="margin: 0rem 0rem 0rem -1.2rem;">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p id="UsernamePosting">
                                                                                Naufal
                                                                                Fadhilah F</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p id="timePosting">15 jam
                                                                                yang lalu
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <a href="postingan.php">
                                                        <img style="border-radius: 8px;"
                                                            src="images/default_profile.png" class="card-img-top"
                                                            alt="Gambar Postingan">
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3 col-md-4 col-6" style="margin-bottom: 3rem;">
                                            <a href="postingan.php">
                                                <div class="card mx-auto">
                                                    <div class="card-body cardContent">
                                                        <div class="profileAuthor">
                                                            <a href="profile.php"
                                                                style="display: flex; text-decoration: none;">
                                                                <img class="imagesProfileAuthorPost"
                                                                    src="images/ldks-hari--1_1640302800_ldks-11-hari-1-thumb.jpg"
                                                                    alt="gambar profile">
                                                                <div class="container"
                                                                    style="margin: 0rem 0rem 0rem -1.2rem;">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p id="UsernamePosting">
                                                                                Naufal
                                                                                Fadhilah F</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <p id="timePosting">15 jam
                                                                                yang lalu
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <a href="postingan.php">
                                                        <img style="border-radius: 8px;"
                                                            src="images/default_profile.png" class="card-img-top"
                                                            alt="Gambar Postingan">
                                                    </a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 column-text-footer">
                    <p id="text-1">Jangan ketinggalan berita terbaru</p>
                    <p id="text-2">login, untuk pengalaman yang baru</p>
                </div>
                <div class="col-lg-4 col-12 d-flex column-btn">
                    <a href="login.php" class="btn btn-login-footer">Login</a>
                    <a href="register.php" class="btn btn-regist-footer">Register</a>
                </div>
            </div>
    </footer>
    </div>

</html>
<script>
    // let sidebar = document.querySelector(".sidebar");
    // let sidebarBtn = document.querySelector(".sidebarBtn");
    // sidebarBtn.onclick = function () {
    //     sidebar.classList.toggle("active");
    //     if (sidebar.classList.contains("active")) {
    //         sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    //     } else
    //         sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    // }   
    // $('.nav-link').on('click', function () {
    // $('.nav-link').removeClass('active');
    // $(this).addClass('active');

    // let kategori = $(this).html();
    // $('#namaKategori').html(kategori);
    // $('.nav-link').on('click', function () {
    // $('.nav-link').removeClass('active');
    // $(this).addClass('active');

    // let kategori = $(this).html();
    // $('#namaKategori').html(kategori);

    $('.pilihKategoriPostingan').on('click', function () {
        $('.pilihKategoriPostingan').removeClass('active');
        $(this).addClass('active');
    });

    $('.sidebarActive').on('click', function () {
        $('.sidebarActive').removeClass('sidebarActive').$(this).addClass('sidebarActive');
    })
</script>