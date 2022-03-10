<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="social-diaries/images/favicon.svg">
    <!-- Animation from animate.css -->
    <link rel="stylesheet" href="stylesheet/animate.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/be7129407a.js" crossorigin="anonymous"></script>
    <!-- Local CSS -->
    <link rel="stylesheet" href="stylesheet/social-diaries.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Social Diaries</title>
</head>

<body style="background-color: #f3a58f;">

    <!-- navbar starts here -->
        <?php include 'stylesheet/navbar.php'; ?>
    <!-- navbar ends here -->

     <!-- social media icons start here -->
        <?php include 'stylesheet/socmed.php'; ?>
     <!-- social media icons end here -->

    <!--book n movie recos start here-->
    <section class="book-movie" id="book-movie">
        <div>
            <img class="book-movie-bg  z-index-1" src="social-diaries/images/books-movies-img.png">

            <div class="containerr z-index-2">
                <p class="main-txt wow bounce z-index-2">
                    books, <br>
                    movies &amp; <br>
                    chill with me
                </p>

                <button class="cta-btn z-index-2">
                    <a href="books-movies.php">alohomora</a>
                </button>

            </div>
        </div>
    </section>
    <!--book n movie recos end here-->

    <!--univ life starts here-->
    <section class="univ-life" id="univ-life">
        <div class="container">
            <video class="univ-bg-gif" autoplay loop muted>
                <source src="social-diaries/images/vector-updt.mp4" type="video/mp4" />
            </video>
        </div>
    </section>
    <!--univ life ends here-->

    <!--study tips starts here -->
    <section class="study-tips" id="study-tips">
        <div>
            <img class="study-tips-bg img-fluid z-index-1" src="social-diaries/images/tips-img1.png">

            <div class="containerr">
                <p class="main-txt wow bounce">
                    productivity <br>
                    &amp; <br>
                    study tips
                </p>

                <button class="cta-btn">
                    <a href="study-tips.php">hello</a>
                </button>
            </div>
        </div>
    </section>
    <!--study tips ends here -->

    <!-- bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


    <!--    <script src="src/js/index.js"></script> -->
    <!-- wow.js javascript -->
    <script src="src/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>