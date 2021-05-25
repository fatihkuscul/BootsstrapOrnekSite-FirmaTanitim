<?php 
session_start();
?>

<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap" rel="stylesheet">

    <!-- CSS Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>İletişim | Zorlu Translate</title>
</head>

<body>

    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="./">
            <img src="./img/logo.png" alt="" style="width: 150px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-font" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-5" id="menu-link">

                <li class="nav-item">
                    <a class="nav-link" href="./contact">İletişim</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./#advantageImg">Avantajlarımız</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hizmetlerimiz
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./service#yaziliTercume"> <i class="fas fa-language mr-3"></i>Yazılı Tercüme</a>
                        <a class="dropdown-item" href="./service#sozluTercume"><i class="fas fa-chalkboard-teacher mr-3"></i>Sözlü Tercüme</a>
                        <a class="dropdown-item" href="./service#ticariTercume"><i class="fas fa-money-check-alt mr-3"></i>Ticari Tercüme</a>
                        <a class="dropdown-item" href="./service#hukukiTercume"><i class="fas fa-gavel mr-3"></i>Hukuki Tercüme</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./service#altYaziTercume"><i class="fas fa-video mr-3"></i>Altyazı Tercüme</a>
                        <a class="dropdown-item" href="./service#webIcerikTercume"><i class="fab fa-wordpress mr-3"></i>Web içerik Tercüme</a>
                    </div>
                </li>

            </ul>

            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-3">

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>

                </ul>

            </form>
            <form action="https://web.whatsapp.com/send?" method="get" target="_blank" class="mb-2">
                <input type="text" name="phone" value="905057462404" hidden>
                <button class="btn btn-outline-info my-3 my-sm-0" type="submit" style="font-size: x-large;">
                    Teklif Al
                </button>
            </form>
        </div>
    </nav> <!-- Navbar End-->

    <br>
    <header class="container mt-5">

        <!-- iletişim Formu Başı-->

        <div class="row mt-5">
            <h1 class="h1color1 col-12 text-center mt-3" id="advantage">İLETİŞİM</h1>

            <div class="col-12 col-md-6 iletisim-form mt-3">
                <img src="img/translate11.jpg" class="float-right" alt=" translate image" style="width: 100%;">
                <p class="text-center">
                    Alanında uzman tercüman ekibimize iletmek istediğiniz konular 
                    için iletişim formunu doldurabilirsiniz 
                </p>
            </div>

<!-- phpMailer İle Mail Gönderimi  -->
            <div class="col-12 col-md-6">
                <?php if(isset($_SESSION["alert"])){ ?>
                    <div class="alert alert-<?php echo $_SESSION["alert"]["type"]; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION["alert"]["message"]; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php unset($_SESSION["alert"]); ?>
                <?php } ?>

                <form class="form-style-9" action="gonderMail.php" method="POST">
                    <ul>
                        <li>
                            <input type="text" name="isim" class="field-style field-full form-control"
                            placeholder="Ad - Soyad" required/>    
                        </li>
                        <li>
                            <input type="email" name="email" class="field-style field-full form-control"
                            placeholder="Email" required/>
    
                        </li>
                        <li>
                            <input type="text" name="konu" class="field-style field-full form-control" 
                            placeholder="Konu" required/>
                        </li>
                        <li>
                            <textarea name="mesaj" class="field-style form-control" maxlength="500"
                            placeholder="Mesaj" required></textarea>
                        </li>

                        <button class="btn yeniBtn2 my-3 my-sm-0" type="submit" style="font-size: x-large;">
                            Gönder
                        </button>
                        <button class="btn yeniBtn my-3 my-sm-0 float-right" type="reset" style="font-size: x-large;">
                            Temizle
                        </button>
                        
                    </ul>
                </form>
            </div>
        </div>
        
        <!-- iletişim Formu Sonu -->

        <!-- İletişim Başlangıç  -->
        <div class="row mt-5" id="contact2">
            <div class="order-md-first order-last col-12 col-md-6 mt-5 contact">
                <h1 class="font-weight-bold h1color2 mb-3">
                    Tercümeleriniz İçin İletişim Kanallarımız
                </h1>
                <p class="metin mt-2">
                    Arayınız:
                    <a href="tel:+905057462404">(+90)505-746-24-04</a>

                </p>

                <p class="metin">
                    Mail Atınız:
                    <a href="mailto:info@zorlutranslate.com">info@zorlutranslate.com</a>
                </p>

                <p class="metin">
                    Mesaj Atınız:
                    <a href="https://api.whatsapp.com/send?phone=905057462404&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
                        class="" target="_blank">
                        Whatsapp İletişim
                    </a>
                </p>

                <ul class="d-flex mr-3">

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-twitter fa-3x"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-linkedin-in fa-3x"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-facebook-f fa-3x"></i>
                        </a>
                    </li>

                </ul>

                <form action="https://web.whatsapp.com/send?" method="get" target="_blank" class="mb-2">
                    <input type="text" name="phone" value="905057462404" hidden>
                    <button class="btn yeniBtn my-3 my-sm-0" type="submit" style="font-size: x-large;">
                        Teklif Al
                    </button>
                </form>

            </div>

            <div class="order-md-last order-first col-12 col-md-6 my-5">
                <img src="img/translate11.jpg" class="float-right" alt=" translate image" style="width: 100%;">
            </div>
        </div> <!-- İletişim Bitiş  -->


    </header>

    <!-- Whatsapp başı-->
    <div class="trwpwhatsappall">
        <div class="trwpwhatsappballon">
            <span id="kapatac" class="kapat">X</span>
            <div class="trwpwhatsapptitle">
                WhatsApp destek ekibimiz sorularınızı cevaplıyor.
            </div>
            <div class="trwpwhatsappmessage">
                Merhaba, nasıl yardımcı olabilirim?
            </div>
            <div class="trwpwhatsappinput">
                <form action="https://web.whatsapp.com/send?" method="get" target="_blank" class="mb-2">
                    <input type="text" name="phone" value="905057462404" hidden>
                    <input type="text" name="text" placeholder="Buradan cevap verebilirsiniz." autocomplete="off"
                        style="width: 230px;">
                    <button class="trwpwhatsappsendbutton" type="submit">
                        <i class="far fa-paper-plane "></i>
                    </button>
                </form>
            </div>
        </div>


        <div id="ackapa" class="trwpwhatsappbutton">
            <i class="fab fa-whatsapp mx-2"></i>
            <span class="mx-auto">WhasApp Destek Hattı</span>
        </div>
    </div>
    <!--Whatsapp bitiş -->

    <!-- footer başı-->
    <footer class="mt-5 border-top">
        <div class="container mt-5">
            <div class="row ">
                <div class="col-12 col-md-4">
                    <h3>
                        Zorlu Translate
                    </h3>
                    <ul>
                        <li><a href="./about">Hakkımızda</a></li>
                        <li><a href="./#referans">Referanslar</a></li>
                        <li><a href="./contact">İletişim</a></li>
                        <li><a href="./blog">Blog</a></li>
                        <li>
                            <ul class="d-flex mt-2">

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fab fa-twitter fa-2x"></i>
                                    </a>
                                </li>
            
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fab fa-linkedin-in fa-2x"></i>
                                    </a>
                                </li>
            
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fab fa-facebook-f fa-2x"></i>
                                    </a>
                                </li>
            
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <h3>
                        Hizmetlerimiz
                    </h3>
                    <ul>
                        <li><a href="./service#yaziliTercume">Yazılı Tercüme</a></li>
                        <li><a href="./service#sozluTercume">Sözlü Tercüme</a></li>
                        <li><a href="./service#ticariTercume">Ticari Tercüme</a></li>
                        <li><a href="./service#hukukiTercume">Hukuki Tercüme</a></li>
                        <li><a href="./service#altYaziTercume">Altyazı Tercüme</a></li>
                        <li><a href="./service#webIcerikTercume">Web İçerik Tercüme</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <h3>
                        Yükümlülükler
                    </h3>
                    <ul>
                        <li><a href="./agreement">Gizlilik Sözleşmesi</a></li>
                        <li><a href="./sss"> Sıkça Sorulan Sorular</a></li>
                    </ul>
                    <p class="adres">
                        Armağan Mah. Sevilay Sok. <br>
                        No:15 K:2 D:3 <br>
                        Meram / Konya
                    </p>
                    <span class="trx_addons_accent">
                        <a href="https://www.google.com/maps/@37.8741592,32.4847748,20z?hl=tr" target="_blank">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Yol Tarifi
                        </a>
                    </span>
                </div>

                <hr>


            </div>
        </div>

        <div class="text-center align-items-center copyRight pt-2">
            <img class="" style="height: 30px; color: rgb(247, 88, 59);"
                src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGRhdGEtbmFtZT0iTGF5ZXIgMSI+PHBhdGggZD0ibTg5LjM0OSAxMDcuODc5YTM5IDM5IDAgMCAwIDEzLjczNC0yOS43MTJ2LTQuMTcyYTM0LjQyOSAzNC40MjkgMCAwIDAgNS4xODgtMTguMDggMzUuNjIzIDM1LjYyMyAwIDAgMCAtMTAuOTkzLTI1LjQyMmM3LjQwOC03LjMgNy41MTEtMTcuODU3IDcuNTExLTE4YTEuNzcyIDEuNzcyIDAgMCAwIC0xLjU4MS0xLjc2OCAxLjcyNSAxLjcyNSAwIDAgMCAtMS44NzYgMS4zODdjLS4wMTUuMDU3LTEuNTE4IDUuMjEzLTE1LjA0NiAxMC41MDlhNDkuOTIzIDQ5LjkyMyAwIDAgMCAtNDQuNTcyIDBjLTEzLjUyOS01LjMtMTUuMDMtMTAuNDQ3LTE1LjAzNS0xMC40NTNhMS43NSAxLjc1IDAgMCAwIC0zLjQ2OS4zMjRjMCAuMTM4LjEgMTAuNjkyIDcuNTEgMThhMzUuNjI1IDM1LjYyNSAwIDAgMCAtMTAuOTkxIDI1LjQyMyAzNC40MjkgMzQuNDI5IDAgMCAwIDUuMTg4IDE4LjA4djQuMTcyYTM5IDM5IDAgMCAwIDEzLjczNCAyOS43MTIgMS43MjUgMS43MjUgMCAwIDAgLjIzMS4yIDM5LjE2OCAzOS4xNjggMCAwIDAgOC45ODMgNS42NzFoLTEwLjg2NWExLjc1IDEuNzUgMCAwIDAgMCAzLjVoNTRhMS43NSAxLjc1IDAgMCAwIDAtMy41aC0xMC44NjZhMzkuMTY4IDM5LjE2OCAwIDAgMCA4Ljk4My01LjY3MSAxLjcyNSAxLjcyNSAwIDAgMCAuMjMyLS4yem0tMS4yOS0zLjUyM2MtNC42ODktNC4yMzktNS43MjctMTAuNjc4LTUuOTU2LTEzLjI4MmE0My45NTkgNDMuOTU5IDAgMCAwIDE3LjQ2My0xMi4yMzggMzUuNDkxIDM1LjQ5MSAwIDAgMSAtMTEuNTA3IDI1LjUxOXptMTIuMS04NS40Yy0xLjQ5IDQuODIyLTQuOTUgMTEuMDA2LTEyLjk3OSAxMy41OTRhOTIuMDM2IDkyLjAzNiAwIDAgMCAtMjAuODE4IDkuNTIzYzEuMjYzLTQuMTI1IDUuMS0xMC43NDEgMTYuNzI0LTE0LjU4MiA4LjczMi0yLjg4MSAxMy45NTUtNS45NDcgMTcuMDc1LTguNTMxem0tNTkuODA4IDE3LjEzNWE4NSA4NSAwIDAgMSAyMS4zNzQgMTAuMjU1IDE1LjU4MSAxNS41ODEgMCAxIDEgLTIxLjM3NC0xMC4yNTV6bTIzLjY0OSAyMi4xNzdhMTkuMTc2IDE5LjE3NiAwIDAgMCA1LjQ1NCA2Ljk3NGwtNS40NTQgNi45My01LjQ1Ni02LjkyNmExOS4xNzYgMTkuMTc2IDAgMCAwIDUuNDU2LTYuOTc4em0xLjc1LTcuOTM1YTE1LjYxOCAxNS42MTggMCAwIDEgLjUyNS0zLjk4NyA4NSA4NSAwIDAgMSAyMS4zNy0xMC4yNTMgMTUuNTgxIDE1LjU4MSAwIDEgMSAtMjEuODk1IDE0LjI0em0xNS44MjgtMjYuMDE2Yy0xMC42MjggMy42MjEtMTUuNDI0IDkuNDExLTE3LjU3OCAxNC4wOTEtMi4xNTQtNC42OC02Ljk1LTEwLjQ3LTE3LjU3OC0xNC4wOTFhNDYuNjExIDQ2LjYxMSAwIDAgMSAzNS4xNTYgMHptLTUzLjgtNS40MDZjMy4xMTQgMi41OTQgOC4zNDcgNS42ODEgMTcuMTM1IDguNTg0IDExLjcxNyAzLjg3MiAxNS41MjQgMTAuNDgxIDE2Ljc1NiAxNC42MDVhOTIuMDU3IDkyLjA1NyAwIDAgMCAtMjAuODUyLTkuNTQ0IDE5LjY1MiAxOS42NTIgMCAwIDEgLTEzLjA0LTEzLjY0NnptNS42NDMgMTMuODQ0YTIyLjI2NyAyMi4yNjcgMCAwIDAgMi43NDggMS42NTEgMTkuMDc0IDE5LjA3NCAwIDAgMCAxOS40NDEgMzIuNzc0bDcuMDE0IDguOWExLjc1IDEuNzUgMCAwIDAgMi43NSAwbDcuMDEtOC45YTE5LjA3OCAxOS4wNzggMCAwIDAgMTkuNDU0LTMyLjc4IDIyLjI2OCAyMi4yNjggMCAwIDAgMi43NDEtMS42NDcgMzIuMjE5IDMyLjIxOSAwIDAgMSAxMC4xOTMgMjMuMTZjMCAxOS4zMjEtMTguMjkgMzUuMDQxLTQwLjc3MSAzNS4wNDFzLTQwLjc3Mi0xNS43MTgtNDAuNzcyLTM1LjAzOWEzMi4yMjEgMzIuMjIxIDAgMCAxIDEwLjE5Mi0yMy4xNjF6bS00Ljk4NyA0Ni4wODFhNDMuOTU5IDQzLjk1OSAwIDAgMCAxNy40NjYgMTIuMjM3Yy0uMjI5IDIuNjA3LTEuMjY4IDkuMDQ0LTUuOTU2IDEzLjI4M2EzNS40OTEgMzUuNDkxIDAgMCAxIC0xMS41MS0yNS41MnptMTQuMjE4IDI3Ljc3OWM0Ljg0OC00LjYxNSA2LjI0OC0xMC45NTMgNi42NDgtMTQuMzUyYTUwLjM2NSA1MC4zNjUgMCAwIDAgMjkuNCAwYy40IDMuNCAxLjggOS43MzggNi42NDkgMTQuMzUyYTM1LjUgMzUuNSAwIDAgMSAtNDIuNyAweiIvPjxwYXRoIGQ9Im00Ni42NjcgNTUuMzc5YTUuMDQ2IDUuMDQ2IDAgMSAwIC01LjA0Ni01LjA0NiA1LjA1MiA1LjA1MiAwIDAgMCA1LjA0NiA1LjA0NnptMC02LjU5MmExLjU0NiAxLjU0NiAwIDEgMSAtMS41NDYgMS41NDYgMS41NDcgMS41NDcgMCAwIDEgMS41NDYtMS41NDZ6Ii8+PHBhdGggZD0ibTg2LjM3OSA1MC4zMzNhNS4wNDYgNS4wNDYgMCAxIDAgLTUuMDQ2IDUuMDQ2IDUuMDUyIDUuMDUyIDAgMCAwIDUuMDQ2LTUuMDQ2em0tNi41OTIgMGExLjU0NiAxLjU0NiAwIDEgMSAxLjU0NiAxLjU0NiAxLjU0NyAxLjU0NyAwIDAgMSAtMS41NDYtMS41NDZ6Ii8+PC9zdmc+" />
            <span class=" align-items-center">
                Copyright 2021 - Tüm Hakları Saklıdır
                <strong style="color: rgb(247, 88, 59);">
                    BayKuşCul</strong> Tarafından Tasarlanmıştır.
            </span>
        </div>
    </footer>
    <!--footer bitiş -->


    <script src="script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>