<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

:root {
    --main_color: #3F979B;
}

* {
    /* border: 1px solid black; */
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.sidebar {
    position: fixed;
    height: 100%;
    width: 220px;
    background: var(--main_color);
    transition: all 0.5s ease;
}

.sidebar.active {
    width: 60px;
}

.sidebar .detail_logo {
    height: 80px;
    display: flex;
    align-items: center;
}

.sidebar .detail_logo a {
    text-decoration: none;
}

.sidebar .detail_logo i {
    font-size: 28px;
    font-weight: 500;
    color: #fff;
    min-width: 60px;
    text-align: center
}

.sidebar .detail_logo .nama_logo {
    color: #fff;
    font-size: 24px;
    font-weight: 500;
}

.detail_logo .rowUsername {
    margin: 0px 0px 0px -15px;
}

.rowUsername span {
    margin-top: -2px;
}

.sidebar .link-navigasi {
    margin-top: -8px;
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
    color: #fff;
}

.sidebar .link-navigasi li a .links_name {
    color: #fff;
    font-size: 13px;
    font-weight: 400;
    white-space: nowrap;
}

.sidebar .link-navigasi .log_out {
    position: absolute;
    bottom: 0;
    width: 100%;
}
.sidebar .link-navigasi .log_out p{
    margin-top: 40px;
}

.home-section,
.nav-section {
    z-index: -100;
    position: relative;
    background: #f5f5f5;
    width: calc(100% - 240px);
    left: 240px;
    transition: all 0.5s ease;
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
    z-index: 100;
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

.navigasi .navigasi-item a {
    text-align: center;
    margin-right: 100px;
    text-decoration: none;
    color: black;
}


.navigasi-link::after {
    content: '';
    display: block;
    /* width: 0; */
    margin: -5px 0px 0px 25px;
    margin-left: 0.2rem;
    height: 2px;
    background: var(--main_color);
    transition: width 0.3s;
}

.navigasi {
    font-family: 'DM Sans', sans-serif;
    list-style-type: none;
    display: flex;
    justify-content: center;
    width: 100%;
}

.navigasi a {
    color: black;
}

.konten-home .overview-boxes {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-left: -20px;
    margin-right: 15px;
    margin-bottom: 26px;
}

.overview-boxes .box {
    margin-right: 15px;
    margin-left: 15px;
    justify-content: space-between;
    display: flex;
    background: #fff;
    padding: 35px 4px 30px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
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

@media (max-width: 400px) {
    .sidebar {
        height: 100%;
    }

    .sidebar.active {
        width: 60px;
    }

    .home-section {
        width: 100%;
    }

    .nav-section {
        width: 100%;
        left: 70px;
    }

    .navigasi-item {
        width: 100%;
        font-size: 0.5rem;
    }

    .sidebar.active~.home-section {
        left: 50px;
    }

    .home-section nav {
        width: 100%;
        left: 70px;
    }

    .sidebar.active~.home-section nav {
        left: 50px;
        width: calc(100% - 60px);
    }
}

.sidebar .detail_logo .nama_logo, .suggestedFollowing {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link rel="icon" href="images/pt_amanah_karya_indonesia_logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Edu+NSW+ACT+Foundation:wght@700&family=Kanit:wght@500&family=Mochiy+Pop+One&family=Montserrat:wght@200;600;800&family=Poppins:ital,wght@0,700;1,900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>
    <div class="sidebar">
        <div class="detail_logo">
            <a href="#" style="display: flex;">
                <i><img src="images/default_profile.png" alt="gambar postingan" style="width: 30px; background-color: white; padding: 2px; border-radius: 20px;"></i>
                <div class="container-fluid rowUsername">
                    <div class="row">
                        <span class="nama_logo" style="font-size: 1.1rem; font-family: 'Poppins'; font-weight: 600;">Naufal Fadhilah F</span>
                    </div>
                    <div class="row">
                        <span class="nama_logo" style="font-size: 0.5rem; font-family: 'Poppins'; font-weight: 300;">Naufal Fadhilah F</span>
                    </div>
                </div>
            </a>
        </div>
        <hr style="color: white; width: 100%; margin-top: -0px; height: 2px; justify-content: center;">
        <ul class="link-navigasi">
            <li>
                <a href="dashboard_admin.php">
                    <i class="fa-solid fa-house aktif"></i>
                    <p class="links_name" class="aktif">Beranda</p>
                </a>
            </li>
            <li>
                <a href="dashboard_user.php">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <p class="links_name">Explore</p>
                </a>
            </li>
            <li>
                <a href="dashboard_madding.php">
                    <i class="fa-solid fa-bell"></i>
                    <p class="links_name">Notifikasi</p>
                </a>
            </li>
            <li>
                <a href="dashboard_madding.php">
                    <i class="fa-solid fa-bookmark"></i>
                    <p class="links_name">Bookmarks</p>
                </a>
            </li>
            <li class="log_out">
                <a href="../session/logout.php">
                    <i class="fa-solid fa-arrow-left"></i>
                    <p class="links_name">Log out</p>
                </a>
            </li>
        </ul>
    </div>
    <section class="nav-section" style="z-index: -100; display: fixed;">
        <div class="container-fluid nav" style="background-color: white; ">
            <div class="container">
                <table>
                    <nav class="justify-content-center">
                        <div class="row">
                            <ul class="navigasi" style="margin-top: 20px; ">
                                <li class="navigasi-item">
                                    <a class="navigasi-link" href="#" onclick="loadContent('forYou')">
                                        <p>Untuk kamu</p>
                                    </a>
                                </li>
                                <li class="navigasi-item">
                                    <a class="navigasi-link" href="#" onclick="loadContent('Following')">
                                        <p>Following</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </table>
            </div>
        </div>
    </section>
    <section class="home-section">
        <div class="container-fluid nav" style="background-color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="container">
                            <!-- Foreach card dimulai dari sini -->
                            <div class="row" style="margin-bottom: 2rem;">
                                <div class="col-12">
                                    <div class="konten-home">
                                        <div class="container-fluid">
                                            <div class="card mx-auto" style="min-width: 5rem;">
                                                <img src="images/peringatan-hari-guru-2021_1640300572_hari-guru-21-thumb.jpg" class="card-img-top" alt="Gambar Postingan">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 2rem;">
                                <div class="col-12">
                                    <div class="konten-home">
                                        <div class="container-fluid">
                                            <div class="card mx-auto" style="max-width: 43rem;">
                                                <img src="images/peringatan-hari-guru-2021_1640300572_hari-guru-21-thumb.jpg" class="card-img-top" alt="Gambar Postingan">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-12" id="SuggestFollowing">
                                    <div class="container" style="height: 50rem; margin-left: -1.5rem; ">
                                        <div class="row">
                                            <div class="col-12">
                                                <p style="font-size: 0.7rem; font-family: 'Poppins'; font-weight: 600; color: grey; margin-top: -2px;">
                                                    Orang yang mungkin anda kenal
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Foreach Suggest Following dari sini -->
                                        <div class="row" style="max-height: 7rem; overflow: auto; margin-bottom: 0.7rem;">
                                            <div class="row">
                                                <a href="" style="text-decoration: none; display:flex; color: black;">
                                                    <div class="col-1">
                                                        <i><img src="images/sambut_pagi.jpg" alt="gambar postingan" style="width: 2.8rem; aspect-ratio: 1/1; background-color: white; border-radius: 50%;"></i>
                                                    </div>
                                                    <div class="col-8" style="margin-top: 4px;">
                                                        <div class="container" style="margin-left: 1rem;">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="font-weight: 700; margin-bottom: 2px; font-size: 0.8rem;" class="suggestedFollowing">
                                                                        nozzents
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="font-weight: 400; margin-top: -2px; font-size: 0.5rem;" class="suggestedFollowing">
                                                                        Naufal Fadhilah X PPLG 1
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <form action="" method="POST">
                                                            <p>
                                                                <input type="submit" class="btn" name="follow" id="follow" value="Follow" style="font-weight: 700; margin-top: 7px; font-size: 0.7rem; color: var(--main_color); ">
                                                            </p>
                                                        </form>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row" style="max-height: 7rem; overflow: auto; margin-bottom: 0.7rem;">
                                            <div class="row">
                                                <a href="" style="text-decoration: none; display:flex; color: black;">
                                                    <div class="col-1">
                                                        <i><img src="images/sambut_pagi.jpg" alt="gambar postingan" style="width: 2.8rem; aspect-ratio: 1/1; background-color: white; border-radius: 50%;"></i>
                                                    </div>
                                                    <div class="col-8" style="margin-top: 4px;">
                                                        <div class="container" style="margin-left: 1rem;">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="font-weight: 700; margin-bottom: 2px; font-size: 0.8rem;" class="suggestedFollowing">
                                                                        nozzents
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="font-weight: 400; margin-top: -2px; font-size: 0.5rem;" class="suggestedFollowing">
                                                                        Naufal Fadhilah X PPLG 1
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <form action="" method="POST">
                                                            <p>
                                                                <input type="submit" class="btn" name="follow" id="follow" value="Follow" style="font-weight: 700; margin-top: 7px; font-size: 0.7rem; color: var(--main_color); ">
                                                            </p>
                                                        </form>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row" style="max-height: 7rem; overflow: auto; margin-bottom: 0.7rem;">
                                            <div class="row">
                                                <a href="" style="text-decoration: none; display:flex; color: black;">
                                                    <div class="col-1">
                                                        <i><img src="images/sambut_pagi.jpg" alt="gambar postingan" style="width: 2.8rem; aspect-ratio: 1/1; background-color: white; border-radius: 50%;"></i>
                                                    </div>
                                                    <div class="col-8" style="margin-top: 4px;">
                                                        <div class="container" style="margin-left: 1rem;">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="font-weight: 700; margin-bottom: 2px; font-size: 0.8rem;" class="suggestedFollowing">
                                                                        nozzents
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="font-weight: 400; margin-top: -2px; font-size: 0.5rem;" class="suggestedFollowing">
                                                                        Naufal Fadhilah X PPLG 1
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <form action="" method="POST">
                                                            <p>
                                                                <input type="submit" class="btn" name="follow" id="follow" value="Follow" style="font-weight: 700; margin-top: 7px; font-size: 0.7rem; color: var(--main_color); ">
                                                            </p>
                                                        </form>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row" style="max-height: 7rem; overflow: auto; margin-bottom: 0.7rem;">
                                            <div class="row">
                                                <a href="" style="text-decoration: none; display:flex; color: black;">
                                                    <div class="col-1">
                                                        <i><img src="images/sambut_pagi.jpg" alt="gambar postingan" style="width: 2.8rem; aspect-ratio: 1/1; background-color: white; border-radius: 50%;"></i>
                                                    </div>
                                                    <div class="col-8" style="margin-top: 4px;">
                                                        <div class="container" style="margin-left: 1rem;">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="font-weight: 700; margin-bottom: 2px; font-size: 0.8rem;" class="suggestedFollowing">
                                                                        nozzents
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p style="font-weight: 400; margin-top: -2px; font-size: 0.5rem;" class="suggestedFollowing">
                                                                        Naufal Fadhilah X PPLG 1
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <form action="" method="POST">
                                                            <p>
                                                                <input type="submit" class="btn" name="follow" id="follow" value="Follow" style="font-weight: 700; margin-top: 7px; font-size: 0.7rem; color: var(--main_color); ">
                                                            </p>
                                                        </form>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <p style="font-size:0.6rem; margin-top: 1rem;">
                                                    Terms of Service
                                                    Privacy Policy
                                                    Cookie Policy
                                                    Accessibility
                                                    Ads info
                                                    More
                                                    © 2024 X Corp.
                                                </p>
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
    </section>
</body>

</html>
<!-- <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }   
</script> -->