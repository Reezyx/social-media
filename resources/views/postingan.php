<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    :root {
        --main_color: #EEEEEE;
        --main_color-2: black;
        --main_color-3: #3F979B;
        --main_color-4: #52D3D8;
        --text-color: #D9D9D9;
    }

    * {
        /* border: 1px solid white; */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
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
        max-width: 30rem;
        color: white;
        background-color: black;
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        border-radius: 15px;
        padding: 0.7rem 1.5rem 1.5rem 1.5rem;
        margin-bottom: -1.3rem;
        transition: all 0.5s ease;
    }

    .card .card-text {
        font-size: 0.8rem;
        color: white;
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
        color: var(--main_color-4);
    }

    .sidebar .link-navigasi .sidebarActive .links_name {
        color: var(--main_color-4);
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

    .nav-section {
        position: relative;
        width: calc(100% - 240px);
        left: 280px;
        transition: all 0.5s ease;
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
        background-color: black;
        position: relative;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
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

    .konten-home h3 {
        font-weight: 800;
        margin-bottom: 20px;
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
        border-bottom: 2px solid var(--main_color);
        transition: all ease 0.3s;
    }

    .navigasi-item p {
        color: white;
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
        width: 60px;
        height: 60px;
        aspect-ratio: 1/1;
        margin-left: -10px;
        padding: 10px;
        border-radius: 50%;
        margin-top: -1rem;
    }

    .profileAuthor #usernamePosting {
        margin-top: -3px;
        font-size: 0.7rem;
        font-weight: 700;
        color: var(--main_color);
    }

    .profileAuthor #timePosting {
        color: var(--main_color);
        margin-top: -18px;
        font-size: 0.7rem;
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
        margin: 2px 0px 10px 8px;
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

        footer .row{
            margin-left: 0.5rem;
        }
    }
    @media (max-width: 560px) {
        .card-postingan {
            width: 110%;
            transition: all 0.5s ease;
        }

        .profileAuthor .namaProfileAuthorPost p {
            font-size: 0.7rem;
        }

        #column-konten-postingan #teks-deskripsi-postingan {
            color: var(--text-color);
            letter-spacing: 0.3;
            font-size: 0.6rem;
            margin: 1rem 0rem 1rem 0rem
        }
    }

    @media(max-width: 462px) {
        .card-postingan {
            width: 120%;
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

        #column-konten-postingan .profile-author img {
            width: 1.7rem;
            height: 1.7rem;
            transition: all ease 0.3s;
        }

        #column-konten-postingan .profile-author p {
            font-size: 0.8rem;
            transition: all ease 0.3s;
        }

        #column-konten-postingan #teks-deskripsi-postingan {
            color: var(--text-color);
            letter-spacing: 0.3;
            font-size: 0.5rem;
            margin: 1rem 0rem 1rem 0rem
        }
    }

    @media (max-width: 400px) {
        .card-postingan {
            width: 135%;
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

    .logoHomepage {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logoHomepage img {
        padding-top: 1rem;
        width: 2rem;
    }

    .navigasi {
        margin-bottom: -10px;
        justify-content: center;
        display: flex;
        list-style-type: none;
    }

    .navigasi .navigasi-item a {
        margin-right: 100px;
        text-decoration: none;
        color: black;
        font-size: 0.7rem;
        text-align: center;
    }

    .navigasi-item .active p {
        font-weight: 600;
        letter-spacing: 1;
        padding-bottom: 5px;
        border-bottom: 2px solid var(--main_color-3);
        transition: all ease 0.3s;
    }

    .konten-postingan .card-postingan {
        margin-top: 6.5rem;
        background-color: black;
        border: 2px solid black;
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        border-radius: 10px;
        padding: 1.5rem 2rem 2rem 0.7rem;
    }

    .card-postingan .profile-author img {
        border-radius: 50%;
        width: 2rem;
        height: 2rem;
    }

    .card-postingan .profile-author {
        display: flex;
    }

    .card-postingan .profile-author p {
        color: white;
        margin: 5px 0px 0px 10px;
        font-weight: 600;
        font-size: 1rem;
    }

    #teks-deskripsi-postingan {
        color: var(--text-color);
        letter-spacing: 0.3;
        font-size: 0.7rem;
        margin: 1rem 0rem 1rem 0rem
    }

    .input-komentar .saveToBookmark {
        margin-top: -1.5rem;
        float: right;
        font-size: 1.3rem;
        color: var(--main_color-3);
        background-color: unset;
        border: unset;
    }

    .card-postingan #gambarKontenPostingan img {
        width: 100%;
    }

    .card-postingan #header-komentar {
        color: white;
        position: absolute;
        font-weight: 700;
        margin: 5px 0px 0px -10px;
        font-size: 1rem;
    }

    .card-postingan #column-konten-postingan {
        overflow: auto;
        max-height: 100%;
    }

    .card-postingan #fiturKontenPostingan {
        display: flex;
    }

    .card-postingan #fiturKontenPostingan i {
        color: var(--main_color-3);
        padding: 10px 10px 0px 0px;
        font-size: 1.5rem;
    }

    .card-postingan #fiturKontenPostingan p {
        font-weight: 500;
        padding: 10px 10px 0px 0px;
        font-size: 1rem;
    }

    .card-postingan #isi-komentar {
        overflow: auto;
        max-height: 50%;
        margin-bottom: 5px;
    }

    #isi-komentar {
        color: white;
        margin: 3rem 0rem 2rem 0rem;
    }

    #isi-komentar #komentar {
        color: var(--text-color);
        font-size: 0.7rem;
    }

    #isi-komentar #reply {
        float: right;
        margin: -10px 0px 10px 0px;
        color: var(--main_color-3);
        font-size: 0.7rem;
    }

    .input-komentar #btnKirimKomentar {
        color: var(--main_color-3);
        border: none;
        margin: -0.7rem -0.5rem 0rem 1.2rem;
        font-size: 2rem;
        background: transparent;
    }

    .input-komentar .form-control {
        color: white;
        background-color: black;
        width: 90%;
        border: none;
        font-size: 0.6rem;
        border-radius: 5px;
        height: 1.7rem;
        padding: 0px 0px 0px -50px;
    }

    .input-komentar .form-control:focus {
        color: white;
        border: unset;
        background-color: black;
    }

    .input-komentar .fitur {
        margin: -5px 15px 0px 0px;
    }

    .input-komentar .fitur i {
        color: var(--main_color-3);
        margin: 5px 0px 0px 0px;
        font-size: 1.4rem;
    }

    .input-komentar p {
        color: white;
        font-weight: 600;
        margin: 7px 0px 0px 0px;
        font-size: 0.6rem;
    }

    .input-komentar .text-1 {
        color: white;
        font-weight: 600;
        font-size: 0.6rem;
    }

    .input-komentar .text-1:hover {
        cursor: pointer;
    }

    .body {
        background-color: rgba(0, 0, 0, 0.5);
        transition: all 0.5s ease;
    }

    @keyframes biarModalnyaKeren {
        from {
            transform: translate(-20%, -50%);
        }

        to {
            transform: translate(-50%, -50%);
        }
    }

    @keyframes biarBayangannyaKeren {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .coverAll {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 99;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        animation: biarBayangannyaKeren 0.5s;
    }

    .wrapperModal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999;
        animation: biarModalnyaKeren 0.7s;
    }

    .modalnya {
        width: 30rem;
        background: var(--main_color-2);
        padding: 0.5rem 1rem 3rem 1rem;
        color: var(--main_color);
        border-radius: 13px;
    }

    .modalnya #likes {
        text-align: center;
        font-size: 1.2rem;
        margin-left: 2.2rem;
        margin-bottom: 0.8rem;
        font-weight: 600;
    }

    .modalnya #tutupModal {
        margin-top: 15px;
    }

    .modalnya #tutupModal:hover {
        cursor: pointer;
    }

    .containerWrapper {
        margin-top: 10px;
    }

    .containerWrapper i {
        font-size: 1.2rem;
    }

    .wrapperModal {
        z-index: 9999;
    }

    .listFollowers {
        margin: 0px 0px -15px 0px;
        max-height: 20rem;
        overflow: auto;
    }

    .listFollowers a {
        margin-bottom: 20px;
        text-decoration: none;
    }

    .listFollowers img {
        aspect-ratio: 1/1;
        width: 2.7rem;
        height: 2.7rem;
        padding: 2px;
        border-radius: 50%;
    }

    .listFollowers .usernameFollowers {
        font-size: 0.9rem;
        margin: 5px 0px 0px -10px;
        font-family: 'Poppins';
        font-weight: 600;
        color: var(--text-color);
    }

    .listFollowers .namaFollowers {
        font-size: 0.5rem;
        margin: 0px 0px 0px -10px;
        font-family: 'Poppins';
        font-weight: 300;
        color: var(--text-color);
    }

    #follow {
        font-weight: 600;
        color: var(--main_color-4);
        font-size: 0.7rem;
    }

    .input-komentar #text-2 {
        color: white;
        font-weight: 400;
        margin: 0px 0px 10px 0px;
        font-size: 0.5rem;
    }

    #profile-komentar p {
        font-size: 0.7rem;
        margin: 5px 0px 10px 10px;
        font-weight: 650;
    }

    #profile-komentar img {
        border-radius: 50%;
        width: 1.5rem;
        height: 1.5rem;
        aspect-ratio: 1/1;
    }

    .footer p {
        font-size: 0.6rem;
        color: white;
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
        <title>Postingan</title>
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
            document.addEventListener('DOMContentLoaded', function () {
                document.documentElement.style.backgroundColor = '#fff';
                document.documentElement.style.color = '#fff';
            });
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
                <li class="sidebarActive">
                    <a href="home.php">
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
                <li>
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
        <section class="nav-section" style="z-index: 99; position: fixed; background-color: black;">
            <div class="container-fluid nav" style="background-color: black;">
                <div class="container" style="background-color: black; transform: translateX(-1rem); ">
                    <nav class="justify-content-center">
                        <div class="logoHomepage">
                            <img src="images/logo-medsos.png" alt="logo homepage">
                        </div>
                        <div class="row">
                            <ul class="navigasi" style="margin-top: 10px; margin-bottom: 0;">
                                <li class="navigasi-item NavFilter">
                                    <a class="navigasi-link pilihKategoriPostingan active" href="#">
                                        <p>For You</p>
                                    </a>
                                </li>
                                <li class="navigasi-item">
                                    <a class="navigasi-link pilihKategoriPostingan" href="#">
                                        <p>Following</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
        <section class="home-section">
            <div class="container-fluid nav" style="background-color: black;">
                <div class="container-fluid container-xl">
                    <div class="row">
                        <div class="container-fluid konten-postingan">
                            <div class="container">
                                <div class="col-12">
                                    <div class="row card-postingan">
                                        <div class="col-md-7" id="column-konten-postingan">
                                            <div class="row">
                                                <div class="col-12 profile-author">
                                                    <img src="images/smk1.jpg" alt="ImageProfilePostingan">
                                                    <p>Nozzents</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p id="teks-deskripsi-postingan">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing elit. Expedita atque repudiandae eligendi
                                                        ducimus
                                                        corrupti? Dolore harum natus maiores, pariatur laudantium
                                                        doloremque
                                                        ab quis, iure asperiores fuga aspernatur, adipisci placeat
                                                        illum.
                                                        Minus, omnis magnam. Ea, illo! Distinctio velit soluta nisi
                                                        ut
                                                        accusantium accusamus labore doloribus laboriosam reiciendis
                                                        repudiandae possimus, quam sequi aut quidem et hic vero
                                                        magnam a
                                                        commodi enim. Nesciunt autem ipsam suscipit ipsum fuga amet
                                                        fugit
                                                        magnam et minima harum delectus totam ipsa, adipisci esse
                                                        quod
                                                        sapiente necessitatibus libero debitis. Aliquid fugiat nisi
                                                        necessitatibus voluptate laudantium nihil adipisci placeat
                                                        sunt.
                                                        Sequi inventore aut recusandae laboriosam veniam velit modi
                                                        fugiat.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row" id="gambarKontenPostingan">
                                                <img src="images/sambut_pagi.jpg" alt="gambar postingan">
                                            </div>
                                        </div>
                                        <div class="col-md-5" id="column-komentar-postingan">
                                            <div class="row" id="header-komentar">
                                                <div class="col-12">
                                                    <p>komentar</p>
                                                    <hr style="margin-top: -15px; color: var(--main_color-3);">
                                                </div>
                                            </div>
                                            <div class="row" id="isi-komentar">
                                                <div class="col-12">
                                                    <div class="row" id="profile-komentar">
                                                        <div class="col-12 d-flex">
                                                            <img src="images/smk1.jpg" alt="ImageProfilKomentar">
                                                            <p>Naufal Fadhilah XI PPLG 1</p>
                                                        </div>
                                                    </div>
                                                    <p id="komentar">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit. Autem cumque exercitationem nobis mollitia, soluta
                                                        architecto
                                                        enim, voluptatem velit eius fugiat alias est magnam tempore.
                                                        Earum
                                                        corrupti voluptatum architecto eaque odit.</p>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p id="reply">Reply</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row" id="profile-komentar">
                                                        <div class="col-12 d-flex">
                                                            <img src="images/smk1.jpg" alt="ImageProfilKomentar">
                                                            <p>Naufal Fadhilah XI PPLG 1</p>
                                                        </div>
                                                    </div>
                                                    <p id="komentar">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit. Autem cumque exercitationem nobis mollitia, soluta
                                                        architecto
                                                        enim, voluptatem velit eius fugiat alias est magnam tempore.
                                                        Earum
                                                        corrupti voluptatum architecto eaque odit.</p>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p id="reply">Reply</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row" id="profile-komentar">
                                                        <div class="col-12 d-flex">
                                                            <img src="images/smk1.jpg" alt="ImageProfilKomentar">
                                                            <p>Naufal Fadhilah XI PPLG 1</p>
                                                        </div>
                                                    </div>
                                                    <p id="komentar">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit. Autem cumque exercitationem nobis mollitia, soluta
                                                        architecto
                                                        enim, voluptatem velit eius fugiat alias est magnam tempore.
                                                        Earum
                                                        corrupti voluptatum architecto eaque odit.</p>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p id="reply">Reply</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row" id="profile-komentar">
                                                        <div class="col-12 d-flex">
                                                            <img src="images/smk1.jpg" alt="ImageProfilKomentar">
                                                            <p>Naufal Fadhilah XI PPLG 1</p>
                                                        </div>
                                                    </div>
                                                    <p id="komentar">Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing
                                                        elit. Autem cumque exercitationem nobis mollitia, soluta
                                                        architecto
                                                        enim, voluptatem velit eius fugiat alias est magnam tempore.
                                                        Earum
                                                        corrupti voluptatum architecto eaque odit.</p>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p id="reply">Reply</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <hr style="width: 100%; color: white; margin-left: 22px;">
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-komentar">
                                                        <div class="row">
                                                            <form action="" method="POST">
                                                                <div class="col-12 d-flex">
                                                                    <div class="fitur d-flex">
                                                                        <i class="fa-regular fa-heart"></i>
                                                                    </div>
                                                                    <div class="fitur d-flex">
                                                                        <i class="fa-regular fa-comment"></i>
                                                                    </div>
                                                                    <div class="fitur d-flex">
                                                                        <i class="fa-regular fa-paper-plane"></i>
                                                                    </div>
                                                                </div>
                                                                <button class="saveToBookmark" type="submit"
                                                                    name="saveToBookmark">
                                                                    <i class="fa-regular fa-bookmark"></i>
                                                                </button>
                                                                <p class="text-1" id="tombol-muncul">20 Likes</p>
                                                                <div class="coverAll">
                                                                    <div class="wrapperModal">
                                                                        <div class="modalnya">
                                                                            <div class="container containerWrapper">
                                                                                <div class="row">
                                                                                    <div class="col-11">
                                                                                        <p id="likes">Likes</p>
                                                                                    </div>
                                                                                    <div class="col-1">
                                                                                        <i class="fa-solid fa-xmark"
                                                                                            id="tutupModal"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-12 listFollowers">
                                                                                        <a href="profile.php"
                                                                                            style="display: flex;">
                                                                                            <i><img src="images/sambut_pagi.jpg"
                                                                                                    alt="gambar postingan"></i>
                                                                                            <div
                                                                                                class="container-fluid">
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="usernameFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="namaFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <form action=""
                                                                                                method="POST">
                                                                                                <p>
                                                                                                    <input type="submit"
                                                                                                        class="btn"
                                                                                                        name="follow"
                                                                                                        id="follow"
                                                                                                        value="Follow">
                                                                                                </p>
                                                                                            </form>
                                                                                        </a>
                                                                                        <a href="profile.php"
                                                                                            style="display: flex;">
                                                                                            <i><img src="images/sambut_pagi.jpg"
                                                                                                    alt="gambar postingan"></i>
                                                                                            <div
                                                                                                class="container-fluid">
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="usernameFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="namaFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <form action=""
                                                                                                method="POST">
                                                                                                <p>
                                                                                                    <input type="submit"
                                                                                                        class="btn"
                                                                                                        name="follow"
                                                                                                        id="follow"
                                                                                                        value="Follow">
                                                                                                </p>
                                                                                            </form>
                                                                                        </a>
                                                                                        <a href="profile.php"
                                                                                            style="display: flex;">
                                                                                            <i><img src="images/sambut_pagi.jpg"
                                                                                                    alt="gambar postingan"></i>
                                                                                            <div
                                                                                                class="container-fluid">
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="usernameFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="namaFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <form action=""
                                                                                                method="POST">
                                                                                                <p>
                                                                                                    <input type="submit"
                                                                                                        class="btn"
                                                                                                        name="follow"
                                                                                                        id="follow"
                                                                                                        value="Follow">
                                                                                                </p>
                                                                                            </form>
                                                                                        </a>
                                                                                        <a href="profile.php"
                                                                                            style="display: flex;">
                                                                                            <i><img src="images/sambut_pagi.jpg"
                                                                                                    alt="gambar postingan"></i>
                                                                                            <div
                                                                                                class="container-fluid">
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="usernameFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="namaFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <form action=""
                                                                                                method="POST">
                                                                                                <p>
                                                                                                    <input type="submit"
                                                                                                        class="btn"
                                                                                                        name="follow"
                                                                                                        id="follow"
                                                                                                        value="Follow">
                                                                                                </p>
                                                                                            </form>
                                                                                        </a>
                                                                                        <a href="profile.php"
                                                                                            style="display: flex;">
                                                                                            <i><img src="images/sambut_pagi.jpg"
                                                                                                    alt="gambar postingan"></i>
                                                                                            <div
                                                                                                class="container-fluid">
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="usernameFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="namaFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <form action=""
                                                                                                method="POST">
                                                                                                <p>
                                                                                                    <input type="submit"
                                                                                                        class="btn"
                                                                                                        name="follow"
                                                                                                        id="follow"
                                                                                                        value="Follow">
                                                                                                </p>
                                                                                            </form>
                                                                                        </a>
                                                                                        <a href="profile.php"
                                                                                            style="display: flex;">
                                                                                            <i><img src="images/sambut_pagi.jpg"
                                                                                                    alt="gambar postingan"></i>
                                                                                            <div
                                                                                                class="container-fluid">
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="usernameFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <span
                                                                                                        class="namaFollowers">jangandifollow_74</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <form action=""
                                                                                                method="POST">
                                                                                                <p>
                                                                                                    <input type="submit"
                                                                                                        class="btn"
                                                                                                        name="follow"
                                                                                                        id="follow"
                                                                                                        value="Follow">
                                                                                                </p>
                                                                                            </form>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p id="text-2">2 hours ago</p>
                                                            </form>
                                                        </div>
                                                        <form action="" method="POST">
                                                            <div class="row">
                                                                <div class="col-12 d-flex">
                                                                    <input type="text" class="form-control"
                                                                        name="isiKomentar" id="isiKomentar"
                                                                        placeholder="Tambahkan komentar">
                                                                    <button type="submit" name="kirimKomentar"
                                                                        id="btnKirimKomentar">
                                                                        <p>kirim</p>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center footer">
                        <p>Naufal</p>
                        <p>Fadhilah</p>
                        <p>Fitrah</p>
                        <p>Naufal</p>
                        <p>Fadhilah</p>
                        <p>Fitrah</p>
                        <p>Naufal</p>
                        <p>Fadhilah</p>
                        <p>Fitrah</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center footer">
                        <p id="copyright">Copyright 2023</p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 column-text-footer">
                        <p id="text-1">Jangan ketinggalan berita terbaru</p>
                        <p id="text-2">login, untuk pengalaman yang baru</p>
                    </div>
                    <div class="col-lg-4 col-12 d-flex column-btn">
                        <a href="login" class="btn btn-login-footer">Login</a>
                        <a href="login" class="btn btn-regist-footer">Register</a>
                    </div>
                </div>
        </footer>
        </div>
    </body>

</html>
<script>
    $(document).ready(function () {
        $('#tombol-muncul').on('click', function () {
            $('.coverAll').toggle();
            $('.wrapperModal').toggle();
        });
        $('.coverAll').on('click', function () {
            $('.coverAll').toggle();
            $('.wrapperModal').toggle();
        });
        $('#tutupModal').on('click', function () {
            $('.coverAll').toggle();
            $('.wrapperModal').toggle();
        });
        $('.pilihKategoriPostingan').on('click', function () {
            $('.pilihKategoriPostingan').removeClass('active');
            $(this).addClass('active');
        });
        $('.sidebarActive').on('click', function () {
            $('.sidebarActive').removeClass('sidebarActive').$(this).addClass('sidebarActive');
        });
    })
</script>