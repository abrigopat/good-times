<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="home/images/favicon.svg">
    <!-- Animation from animate.css -->
    <link rel="stylesheet" href="stylesheet/animate.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/be7129407a.js" crossorigin="anonymous"></script>
    <!-- Local CSS -->
    <link rel="stylesheet" href="stylesheet/home.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Good Times</title>
    
</head>

<body style="background-color: #ffc5c4;">

    <!-- navbar starts here -->
        <?php include 'stylesheet/navbar.php'; ?>
    <!-- navbar ends here -->

    <!-- social media icons start here -->
        <?php include 'stylesheet/socmed.php'; ?>
    <!-- social media icons end here -->


    <!-- landing gif starts here -->
    <section class="home-gif">
        <video class="img-fluid z-index-1" autoplay loop muted>
            <source src="home/images/home-bg-gif.mp4" type="video/mp4" />
        </video>
    </section>
    <!-- landing gif ends here -->

    <!-- home section 2 starts here -->
    <section class="home-soc-landing" id="home-soc-landing">
        <div>
            <div>
                <img class="bg-pic z-index-1" src="home/images/main-bg.png">
            </div>

            <div class="main-txt wow bounce container-fluid z-index-3">
                <ul class="row">
                    <div class="col">
                        <li class="txt1 row">Productivity</li>
                    </div>
                    <div class="col-12">
                        <li class="txt2 row">Books</li>
                    </div>
                    <div class="col">
                        <li class="txt3 row">Movies</li>
                    </div>
                </ul>
            </div>
        </div>
    </section>
    <!-- home section 2 ends here -->


    <!-- lokal adventure landing starts here -->
    <section class="lokal-landing" id="lokal-landing">
        <div class="lokal-panel container">
            <div>
                <h1 class="title">#<span class="type"></span></h1>
            </div>

            <div class="pictures" id="pictures">
                <ul class="picture container d-flex">
                    <li class="polaroid1 img-fluid col"><img src="home/images/pol1.png" alt="" class="pol1"></li>
                    <li class="polaroid2 img-fluid col"><img src="home/images/pol2.png" alt="" class="pol2"></li>
                    <li class="polaroid3 img-fluid col"><img src="home/images/pol3.png" alt="" class="pol3"></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- lokal adventure landing ends here -->

    <br><br><br><br><br>

    <!-- footer starts here -->
        <?php include 'stylesheet/footer.php'; ?>
    <!-- footer ends here -->


    <!-- booststrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- typed.js -->
    <script src="src/js/typed.js"></script>
    <script>
        var typed = new Typed('.typing', {
            strings: ['Get In Touch'
            ],

            typeSpeed: 60,
            backSpeed: 60,
            smartBackspace: true,// Default value
            loop: true,
            backDelay: 800
        });
    </script>

    <script>
        var typed = new Typed('.type', {
            strings: ['travelgoals',
                'supportlocal',
                'foodies',
                'goodtimes',
                'lokaladventure'
            ],

            typeSpeed: 60,
            backSpeed: 60,
            smartBackspace: true,// Default value
            loop: true
        });
    </script>


    <!-- wow.js -->
    <script src="src/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>