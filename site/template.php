<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="HomeCss.css">
    <link rel="stylesheet" href="PV.css">
    <link rel="stylesheet" href="AffichePV.css">
    <link rel="stylesheet" href="templatePT.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr@4.6.6/dist/l10n/ar.js"></script>
    <script src="https://kit.fontawesome.com/b188ac9816.js" crossorigin="anonymous"></script>
    <script defer>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</head>
<header class="cont bg-gradient">
    <div class="container-fluid">
        <div><img src="public/images/11.png" class="img1 rounded-1 "></div>
    </div>
</header>

<body>
    <section>

        <div class=" container-fluid ">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark bg-gradient rounded-1 ">
                <div class="mx-2">
                    <form class="d-flex ">
                        <input class="form-control form-control-sm me-sm-2 " type="search" placeholder="...بحث">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">البحث</button>
                    </form>

                </div>
                <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container ">

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav text-end">
                            <li class="nav-item  "><a class="nav-link " href="Droits.php">حقوق الوصول</a></li>
                            <li class="nav-item "><a class="nav-link " href="Personnels.php">الموظفون</a></li>
                            <li class="nav-item "><a class="nav-link " href="Directions.php">الإدارات</a></li>
                            <li class="nav-item "><a class="nav-link " href="Delais.php">الأجال</a></li>
                            <li class="nav-item "><a class="nav-link " href="Suivi.php">المتابعة</a></li>
                            <li class="nav-item "><a class="nav-link " href="PointsAugmentes.php">النقاط المثارة</a></li>
                            <li class="nav-item "><a class="nav-link " href="Participants.php">الحضور</a></li>
                            <li class="nav-item">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <div class="btn-group text-end" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle text-end" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#9ba19d;"></button>
                                        <div class="dropdown-menu my-3 bg-dark" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item " href="PV.php" style="color: #9ba19d;">إضافة محضر جلسة</a>
                                            <a class="dropdown-item" href="AffichePV.php" style="color: #9ba19d;"> محاضر الجلسات</a>
                                        </div>
                                    </div>
                                    <a href="PVHome.php"><button type="button" class="btn btn-dark" style="color: #9ba19d;">محضر جلسة</button></a>
                                </div>
                            </li>
                            <li class="nav-item  mx-2"><a class="nav-link " href="Home.php"><i class="fa-solid fa-house fa-sm" style="color: #e6e6e6;"></i></a></li>


                        </ul>
                    </div>



                </div>

            </nav>

        </div>

    </section>
    <div class="container" style="margin-top: 100px;"><?= $content ?></div>
    <footer class="containerfluid d-flex justify-content-center text-end bg-dark bg-gradient mx-2 p-1 rounded-1">
        <div class="row w-100">
            <div class=" col-12 col-md-3 copyright-text copyright-text-second m-2 d-flex" style="color:azure;" id="translation">&nbsp;&nbsp;&nbsp;
                <i class="fa fa-phone" aria-hidden="true" id="translation1"></i>&nbsp;:&nbsp;71.563.006&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
            <div class=" col-12 col-md-3 copyright-text copyright-text-second m-2 d-flex" style="color:azure;" id="translation">&nbsp;&nbsp;&nbsp;

                <i class="fa fa-envelope" aria-hidden="true" id="translation1"></i>&nbsp;:&nbsp;contact.culture@mac.gov.tn
            </div>
            <div class="col-12 col-md-3 mx-2">
                <ul class=" social-icons d-flex justify-content-center" style="list-style-type: none;" id="translation">
                    <li class="social-icons-item m-2">
                        <a class="social-link facebook-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.facebook.com/M.AFFAIRES.CULTURELLES?locale=fr_FR" style="text-decoration: none;">
                            <span class="fa fa-facebook"></span>

                        </a>
                    </li>
                    <li class="social-icons-item m-2">
                        <a class="social-link twitter-social-icon" rel="external noopener nofollow" target="_blank" href="https://twitter.com/Culture_Gov_TN" style="text-decoration: none;">
                            <span class="fa fa-twitter"></span>

                        </a>
                    </li>
                    <li class="social-icons-item m-2">
                        <a class="social-link youtube-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.youtube.com/channel/UCjz8VGAcAvOJqOtXFcq2YfA" style="text-decoration: none;">
                            <span class="fa fa-youtube"></span>

                        </a>
                    </li>
                    <li class="social-icons-item m-2">
                        <a class="social-link instagram-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.instagram.com/culture.gov.tn/" style="text-decoration: none;">
                            <span class="fa fa-instagram"></span>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="col copyright-text copyright-text-first m-2 " style="color:azure;">
                <img src="https://www.culture.gov.tn/wp-content/uploads/2023/10/flagTunisia.png" width="20" height="10">&nbsp;وزارة الشؤون الثقافية | ©2024&nbsp;جميع الحقوق محفوظة
            </div>
        </div>
    </footer>







    <script>
        $('#menuItem1').on('click', function() {
            $('#sub_menu').toggleClass("visible");
        })
    </script>
    <script>
        flatpickr("#dt", {
            "locale": "ar" // Utiliser l'option de localisation en arabe
        });
    </script>
    <script>
        flatpickr("#dl", {
            "locale": "ar"
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>