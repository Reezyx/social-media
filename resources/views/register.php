<style>
    /* * {
        border: 1px solid black;
    } */

    :root {
        --main_color: #3F979B;
    }
    .HomeLogoImages img{
            transition: 0.3s;
        }
    @media (max-width: 992px) {
        .HomeLogoImages img{
            transform: translateY(-2.6rem);
            transition: 0.3s;
        }
    }
    @media (max-width: 768px) {
        .namaRegist h6 {
            margin-top: 20px;
        }
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="icon" href="images/pt_amanah_karya_indonesia_logo.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Edu+NSW+ACT+Foundation:wght@700&family=Kanit:wght@500&family=Mochiy+Pop+One&family=Montserrat:wght@200;600;800&family=Poppins:ital,wght@0,700;1,900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<body>
    <div class="container-fluid" style="background-color: var(--main_color); min-height: 100%; margin-bottom: 10vh; ">
        <form action="" method="POST">
            <div class="container-fluid" style="padding: 5% 10%;">
                <div class="row" style="margin-top: 1%; margin-bottom: 3vh;">
                    <div class="col-12">
                        <h4 style="text-align: center; color: white; font-family: 'Poppins'; letter-spacing: 2;">
                            Register</h4>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row d-flex">
                        <div class="col-lg-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center HomeLogoImages">
                                        <img src="images/pt_amanah_karya_indonesia_logo.jpg" alt="image-login-container" style="margin-top: 5.62rem; box-shadow: 2px 5px 25px rgba(0, 0, 0, 0.2); background-color: white; border-radius: 50%; padding: 20px; width: 12rem;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row" style="margin-top: 3rem;">
                                            <div class="col-md-6">
                                                <h6 style="color: white; font-family: 'Poppins'; margin-left: -10px; letter-spacing: 1;">Username</h6>
                                                <input type="text" name="usernameRegist" id="usernameRegist" placeholder="Masukkan username" style="margin-left: -10px; border-radius: 10px; width: 105%; font-size: 0.8rem; padding: 8px 20px 8px 15px; letter-spacing: 0.7; box-shadow: 2px 5px 25px rgba(0, 0, 0, 0.2); border: transparent;">
                                            </div>
                                            <div class="col-md-6 namaRegist">
                                                <h6 style="color: white; font-family: 'Poppins'; margin-left: -10px; letter-spacing: 1;">Nama</h6>
                                                <input type="text" name="namaRegist" id="namaRegist" placeholder="Masukkan nama lengkap" style="margin-left: -10px; border-radius: 10px; width: 105%; font-size: 0.8rem; padding: 8px 20px 8px 15px; letter-spacing: 0.7; box-shadow: 2px 5px 25px rgba(0, 0, 0, 0.2); border: transparent;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h6 style="color: white; font-family: 'Poppins'; margin-left: -10px; margin-top: 20px; letter-spacing: 1;">E - Mail</h6>
                                            <input type="text" name="emailRegist" id="emailRegist" placeholder="Masukkan akun e-mail" style="border-radius: 10px; width: 100%; font-size: 0.8rem; padding: 8px 20px 8px 15px; letter-spacing: 0.7; box-shadow: 2px 5px 25px rgba(0, 0, 0, 0.2); border: transparent;">
                                        </div>
                                        <div class="row">
                                            <h6 style="color: white; font-family: 'Poppins'; margin-left: -10px; margin-top: 20px; letter-spacing: 1;">
                                                Password
                                            </h6>
                                            <input type="password" name="passwordRegist" id="passwordRegist" placeholder="Masukkan password" style="border-radius: 10px; width: 100%; font-size: 0.8rem; padding: 8px 20px 8px 15px; letter-spacing: 0.7; box-shadow: 2px 5px 25px rgba(0, 0, 0, 0.2); border: transparent;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" name="Regist" value="Register" id="submit" style="border-radius: 5px; margin-top: 30px; background-color: white; color: var(--main_color); border: 2px; font-family: 'Poppins'; float: right; box-shadow: 2px 5px 25px rgba(0, 0, 0, 0.2); width: 20%; font-size: 0.8rem; margin-right: -15px; padding: 8px 20px 8px 15px;">
                                    </div>
                                </div>
                                <div class="row" style=" margin-top: 3rem;">
                                    <div class="col-12 d-flex" style="justify-content: center; ">
                                        <p style="font-size: 0.8rem; color: white; margin-right: 5px; font-weight: 600;">Sudah punya akun?</p>
                                        <p style="font-size: 0.8rem; color: white;"><a href="#" class="btnRegist" style="color: white; border: 2px; font-family: 'Poppins';">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row" style="justify-content: space-between;">
                        <div class="col-md-9">
                            <div class="row" style="display: flex; align-items: center;">
                                <div class="col-md-1" style="justify-content: center; margin:auto; text-align: center;">
                                    <img src="images/pt_amanah_karya_indonesia_logo.jpg" alt="image-logo" style="width: 50px;">
                                </div>
                                <div class="col-md-11" id="informasi">
                                    <h6 style="font-family: 'Poppins'; margin-top: 10px; margin-left: 15px;">Tentang Kami</h6>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <p style="font-size: 0.7rem; ">
                                    PT. Amanah Karya Indonesia (Amanah Corp) merupakan perusahaan rintisan yang bergerak di bidang IT yang berfokus pada Software Development serta konsultan IT. Amanah Corp berdiri pada tanggal 25 Agustus 2016 didirikan oleh Muammar Khadafi sebagai CEO dan Firmansyah Asnawi sebagai COO.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row" style="justify-content: space-between;">
                                <div class="col-md-12">
                                    <h6 style="font-family: 'Poppins'; margin-top: 10px; margin-left: 15px; text-align: center;">
                                        Kontak
                                    </h6>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12" style="color: black; display: flex;">
                                    <i class="fa-solid fa-house" style="margin-right: 20px; font-size: 0.7rem;"></i>
                                    <p style="margin-top: -4px; font-size: 0.7rem;">Jl. Raya Ragunan No.1 10, RT.2/RW.7, Jati Padang, Pasar Minggu, South Jakarta City, Jakarta 12540</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px;">
                                <div class="col-md-12" style="color: black; display: flex;">
                                    <i class="fa-solid fa-envelope" style="margin-right: 20px; font-size: 0.7rem;"></i>
                                    <p style="margin-top: -5px; font-size: 0.7rem;">AmanahKarya@gmail.com</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-md-12" style="color: black; display: flex;">
                                    <i class="fa-solid fa-phone" style="margin-right: 20px; font-size: 0.7rem;"></i>
                                    <p style="margin-top: -5px; font-size: 0.7rem;">(021) 22785123</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" id="kontak">
                        <div class="row">
                            <h6 style="font-family: 'Poppins'; margin-top: 10px; text-align: center; ">Our Products
                            </h6>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-2 col-md-3">
                                <p style="font-weight: 500; font-size: 0.7rem;">- Bisa TopUp</p>
                                <p style="font-weight: 500; font-size: 0.7rem;">- MutasiBank</p>
                                <p style="font-weight: 500; font-size: 0.7rem;">- BisaKasir</p>
                            </div>
                            <div class="col-lg-2 col-md-3" style="text-align: left;">
                                <p style="font-weight: 500; font-size: 0.7rem;">- Berbagi.link</p>
                                <p style="font-weight: 500; font-size: 0.7rem;">- BisaBerbagi</p>
                                <p style="font-weight: 500; font-size: 0.7rem;">- Jualanku</p>
                            </div>
                            <div class="col-lg-2 col-md-3" style="text-align: left;">
                                <p style="font-weight: 500; font-size: 0.7rem;">- Amandemy</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <hr style="color: var(--main_color); width: 100%; margin-top: 2%;">
                </div>
                <div class="row" style="margin: 1% 0% 0.7% 0%;">
                    <div class="col-9" style="display: flex;">
                        <div class="col-2">
                            <p style="color: grey; font-size: 0.6rem;">Sitemap</p>
                        </div>
                        <div class="col-3">
                            <p style="color: grey; font-size: 0.6rem;">Privacy Policy</p>
                        </div>
                        <div class="col-4">
                            <p style="color: grey; font-size: 0.6rem;">Terms & Condition</p>
                        </div>
                        <div class="col-2">
                            <p style="color: grey; font-size: 0.6rem;">Contact Us</p>
                        </div>
                        <div class="col-1">
                            <p style="color: grey; font-size: 0.6rem;">Forums</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 style="color: grey; font-size: 0.6rem;">PT.Amanah Karya Indonesia 2023</h6>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>