<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        /* border: 1px solid white; */
        font-family: 'Poppins';
    }

    :root {
        --main_color: #EEEEEE;
        --main_color-2: black;
        --main_color-3: #3F979B;
        --main_color-4: #52D3D8;
        --text-color: #D9D9D9;
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

    .wrapperModal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
        animation: biarModalnyaKeren 0.7s;
    }

    .modalnya {
        width: 30rem;
        background: var(--main_color-2);
        padding: 0.5rem 1rem 2rem 1rem;
        color: white;
        border-radius: 10px;
    }

    .modalnya #likes {
        text-align: center;
        font-size: 1.2rem;
        margin-left: 2.2rem;
        font-weight: 600;
    }

    .containerWrapper {
        margin-top: 20px;
    }
    .containerWrapper i{
        font-size: 1.2rem;
        margin-top: 7px;
    }

    .wrapperModal {
        z-index: 9999;
    }

    .listFollowers {
        margin-bottom: -25px;
        max-height: 20rem;
        overflow: auto;
    }

    .listFollowers a {
        margin-top: 8px;
        margin-left: 10px;
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
</style>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <title>Document</title>
    </head>

    <body>
        <div class="container-fluid">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A sunt expedita natus laborum minus aliquid
                deserunt quidem cumque voluptatum, harum in perspiciatis eligendi quisquam hic? Maiores laboriosam
                debitis maxime porro, nemo veniam consectetur molestias, velit ducimus accusamus omnis iusto quos ex
                officiis earum harum blanditiis, deserunt ullam qui itaque quasi modi! Officiis ex laudantium porro sint
                aliquam totam, officia ut, fugit quisquam quasi laboriosam libero quod, aspernatur ducimus. Voluptate,
                excepturi expedita. Eius eveniet, illo exercitationem fuga in, vero neque placeat reprehenderit adipisci
                eos quos deserunt amet commodi fugiat maiores a doloribus alias quo natus, impedit nulla totam quam cum.
                Nihil.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A sunt expedita natus laborum minus aliquid
                deserunt quidem cumque voluptatum, harum in perspiciatis eligendi quisquam hic? Maiores laboriosam
                debitis maxime porro, nemo veniam consectetur molestias, velit ducimus accusamus omnis iusto quos ex
                officiis earum harum blanditiis, deserunt ullam qui itaque quasi modi! Officiis ex laudantium porro sint
                aliquam totam, officia ut, fugit quisquam quasi laboriosam libero quod, aspernatur ducimus. Voluptate,
                excepturi expedita. Eius eveniet, illo exercitationem fuga in, vero neque placeat reprehenderit adipisci
                eos quos deserunt amet commodi fugiat maiores a doloribus alias quo natus, impedit nulla totam quam cum.
                Nihil.</p>
        </div>
        <i class="fa-solid fa-xmark" id="tombol-muncul"></i>

        <div class="container-fluid">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A sunt expedita natus laborum minus aliquid
                deserunt quidem cumque voluptatum, harum in perspiciatis eligendi quisquam hic? Maiores laboriosam
                debitis maxime porro, nemo veniam consectetur molestias, velit ducimus accusamus omnis iusto quos ex
                officiis earum harum blanditiis, deserunt ullam qui itaque quasi modi! Officiis ex laudantium porro
                sint
                aliquam totam, officia ut, fugit quisquam quasi laboriosam libero quod, aspernatur ducimus.
                Voluptate,
                excepturi expedita. Eius eveniet, illo exercitationem fuga in, vero neque placeat reprehenderit
                adipisci
                eos quos deserunt amet commodi fugiat maiores a doloribus alias quo natus, impedit nulla totam quam
                cum.
                Nihil.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A sunt expedita natus laborum minus aliquid
                deserunt quidem cumque voluptatum, harum in perspiciatis eligendi quisquam hic? Maiores laboriosam
                debitis maxime porro, nemo veniam consectetur molestias, velit ducimus accusamus omnis iusto quos ex
                officiis earum harum blanditiis, deserunt ullam qui itaque quasi modi! Officiis ex laudantium porro
                sint
                aliquam totam, officia ut, fugit quisquam quasi laboriosam libero quod, aspernatur ducimus.
                Voluptate,
                excepturi expedita. Eius eveniet, illo exercitationem fuga in, vero neque placeat reprehenderit
                adipisci
                eos quos deserunt amet commodi fugiat maiores a doloribus alias quo natus, impedit nulla totam quam
                cum.
                Nihil.</p>
        </div>
        <div class="wrapperModal">
            <div class="modalnya">
                <div class="container containerWrapper">
                    <div class="row">
                        <div class="col-11">
                            <p id="likes">Likes</p>
                        </div>
                        <div class="col-1">
                            <i class="fa-solid fa-xmark" id="tutupModal"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 listFollowers">
                            <a href="profile.php" style="display: flex;">
                                <i><img src="images/sambut_pagi.jpg" alt="gambar postingan"></i>
                                <div class="container-fluid">
                                    <div class="row">
                                        <span class="usernameFollowers">jangandifollow_74</span>
                                    </div>
                                    <div class="row">
                                        <span class="namaFollowers">jangandifollow_74</span>
                                    </div>
                                </div>
                                <form action="" method="POST">
                                    <p>
                                        <input type="submit" class="btn" name="follow" id="follow" value="Follow">
                                    </p>
                                </form>
                            </a>
                            <a href="profile.php" style="display: flex;">
                                <i><img src="images/sambut_pagi.jpg" alt="gambar postingan"></i>
                                <div class="container-fluid">
                                    <div class="row">
                                        <span class="usernameFollowers">jangandifollow_74</span>
                                    </div>
                                    <div class="row">
                                        <span class="namaFollowers">jangandifollow_74</span>
                                    </div>
                                </div>
                                <form action="" method="POST">
                                    <p>
                                        <input type="submit" class="btn" name="follow" id="follow" value="Follow">
                                    </p>
                                </form>
                            </a>
                            <a href="profile.php" style="display: flex;">
                                <i><img src="images/sambut_pagi.jpg" alt="gambar postingan"></i>
                                <div class="container-fluid">
                                    <div class="row">
                                        <span class="usernameFollowers">jangandifollow_74</span>
                                    </div>
                                    <div class="row">
                                        <span class="namaFollowers">jangandifollow_74</span>
                                    </div>
                                </div>
                                <form action="" method="POST">
                                    <p>
                                        <input type="submit" class="btn" name="follow" id="follow" value="Follow">
                                    </p>
                                </form>
                            </a>
                            <a href="profile.php" style="display: flex;">
                                <i><img src="images/sambut_pagi.jpg" alt="gambar postingan"></i>
                                <div class="container-fluid">
                                    <div class="row">
                                        <span class="usernameFollowers">jangandifollow_74</span>
                                    </div>
                                    <div class="row">
                                        <span class="namaFollowers">jangandifollow_74</span>
                                    </div>
                                </div>
                                <form action="" method="POST">
                                    <p>
                                        <input type="submit" class="btn" name="follow" id="follow" value="Follow">
                                    </p>
                                </form>
                            </a>
                            <a href="profile.php" style="display: flex;">
                                <i><img src="images/sambut_pagi.jpg" alt="gambar postingan"></i>
                                <div class="container-fluid">
                                    <div class="row">
                                        <span class="usernameFollowers">jangandifollow_74</span>
                                    </div>
                                    <div class="row">
                                        <span class="namaFollowers">jangandifollow_74</span>
                                    </div>
                                </div>
                                <form action="" method="POST">
                                    <p>
                                        <input type="submit" class="btn" name="follow" id="follow" value="Follow">
                                    </p>
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
<script>
    $(document).ready(function () {
        $('#tombol-muncul').on('click', function () {
            $('.wrapperModal').toggle();
            $('body').toggleClass('body');
        });
        $('#tutupModal').on('click', function () {
            $('.body').toggleClass('body');
            $('.wrapperModal').toggle();
        });

        //kenapa ini tidak berfungsi?
        $('.body').on('click', function () {
            $('.wrapperModal').toggle();
            $('body').toggleClass('body');
        });

    })
</script>