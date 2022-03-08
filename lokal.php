<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="lokal/images/favicon.svg">
    <!-- Animation from animate.css -->
    <link rel="stylesheet" href="stylesheet/animate.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/be7129407a.js" crossorigin="anonymous"></script>
    <!-- Local CSS -->
    <link rel="stylesheet" href="stylesheet/lokal.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lokal Adventure</title>
</head>

<body style="background-color: #ffc5c4;">


    <!-- navbar starts here -->
        <?php include 'stylesheet/navbar.php'; ?>
    <!-- navbar ends here -->

    <!-- social media icons start here -->
        <?php include 'stylesheet/socmed.php'; ?>
    <!-- social media icons end here -->


    <!-- lokal adventure landing starts here -->
    <section class="lokal-landing" id="lokal-landing">
        <div class="lokal-panel container">
            <div>
                <h1 class="title">#<span class="type"></span></h1>
            </div>

            <div class="pictures" id="pictures">
                <ul class="picture d-flex">
                    <li class="polaroid1 col"><img src="lokal/images/pic1.png" alt="" class="pol1"></li>
                    <li class="polaroid2 col"><img src="lokal/images/pic2.png" alt="" class="pol2"></li>
                    <li class="polaroid3 col"><img src="lokal/images/pic3.png" alt="" class="pol3"></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- lokal adventure landing ends here -->

    <!-- lokal-ad header starts here -->
    <section class="lokal-ad-gif">
        <video class="img-fluid z-index-1" autoplay loop muted>
            <source src="lokal/images/lok-ad-gif.mp4" type="video/mp4" />
        </video>
    </section>
    <!-- lokal-ad header ends here -->

    <!-- contents starts here -->
    <section class="lokal-content" id="lokal-content">

        <div class="itinerary container">
            <div class="accomodation wow fadeIn">

                <div class="row">
                    <div class="col">
                        <img class="acco-pic" id="pic1" src="lokal/images/accomodation-pic.png" alt="">
                    </div>

                    <div class="lokal-txt col">
                        <h2>Accomodation</h2>
                        <p>The town of General Luna is the best spot on Siargao Island to book your accommodation.
                            One that is a must to try is Lampara Siargao Boutique Hostel. It is an oceanfront boutique
                            hostel conveniently situated on the exotic island of Siargao. The lounge area has a calm
                            atmosphere where guests can chill and enjoy the cool island breeze. With its air-conditioned
                            glamping, guests will be assured to have comfort and convenience.</p>
                    </div>
                </div>
            </div>

            <div class="food-reco wow fadeIn">
                <div class="row">

                    <div class="lokal-txt col">
                        <h2> Food Recos</h2>
                        <p>Isla Cabana is a fancy beachfront resort along General Luna. Not only is it one of the
                            best choices of accommodation for your stay in Siargao, it also has one of the best
                            restaurants on the island! The restaurant has garnered popularity as a romantic restaurant
                            because of its view of the sea, making it the perfect place to share a meal with a
                            significant other,
                            especially during sundown and moonrise. Its also nice to enjoy and eat your tropical fruits
                            here.</p>

                    </div>

                    <div class="col">
                        <img class="food-pic" id="pic2" src="lokal/images/food-reco.png" alt="">
                    </div>
                </div>

            </div>

            <div class="siargao-adv">
                <div class="to-try-header">
                    <h1>#<span class="type1"></span></h1>
                </div>

                <!-- adventure 1 -->
                <div class="adventure1 wow fadeIn">
                    <div class="row">
                        <div class="col">
                            <img class="adventure-pic" id="pic3" src="lokal/images/adventure1.png" alt="">
                        </div>

                        <div class="lokal-txt col">
                            <h2>Rope Swinging</h2>
                            <p>
                                On the side of a red bridge in Maasin village is
                                a coconut tree hanging over the water. It is used 
                                as a Rope Swing. Local kids will be waving and ask you 
                                to take a swing. It is
                                one of the most picturesque places in Siargao. Spend
                                the morning swinging, take the boat on the river and
                                be amazed by their rope swing skills. Please leave
                                these guys a tip as well.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- adventure 2 -->
                <div class="adventure2 wow fadeIn">
                    <div class="row">

                        <div class="lokal-txt col">
                            <h2> Drive in the Coconut Roads</h2>
                            <p>There is a reason Siargao got the title Most Beautiful Island in Asia. 
                                The scenic road along the coastline filled with white beaches and 
                                coconut trees getting more and more impressive after each corner. 
                                Simply driving around for hours, talking to locals and how they live 
                                was our absolute favorite thing to do in Siargao.</p>
    
                        </div>
    
                        <div class="col">
                            <img class="adventure-pic" src="lokal/images/adventure2.png" alt="">
                        </div>
                    </div>
                </div>

                <!-- adventure 3 -->
                <div class="adventure3 wow fadeIn">
                    <div class="row">
                        <div class="col">
                            <img class="adventure-pic" id="pic1" src="lokal/images/adventure3.png" alt="">
                        </div>

                        <div class="lokal-txt col">
                            <h2>Do Island Hopping</h2>
                            <p>
                                Siargao is surrounded by one of the biggest mangrove forests 
                                in the Philippines and numerous stunning islands. Take a day trip 
                                to Sugba Lagoon, do the 3 islands tour or go even further and 
                                overnight at Sohoton Cove. Due to the bad weather condition, we 
                                weren't able to do any of these activities.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <br><br><br>
    <br><br><br>

    <!-- footer starts here -->
        <?php include 'stylesheet/footer.php'; ?>
    <!-- footer ends here -->




    <!-- bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!--    <script src="src/js/index.js"></script> -->

    <!-- typed.js javascript -->
    <script src="src/js/typed.js"></script>
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

    <script>
        var typed = new Typed('.type1', {
            strings: ['Things to Do in Siargao'
            ],

            typeSpeed: 60,
            backSpeed: 60,
            smartBackspace: true,// Default value
            loop: true
        });
    </script>

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

    <!-- wow.js javascript -->
    <script src="src/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>