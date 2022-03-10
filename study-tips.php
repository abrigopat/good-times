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
    <link rel="stylesheet" href="stylesheet/study-tips.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Study Tips</title>
</head>

<body style="background-color: #f3a58f;">

    <!-- ito yung updated na study tips -->

    <!-- navbar starts here -->
    <div class="nav-bar  fixed-top z-index-2">
        <div class="navbar container-fluid">
            <img class="logo img-fluid" src="study-tips/images/logo.png">
            <nav>
                <ul>
                    <li><a href="index.php" class="nav-a">Home</a></li>
                    <li><a href="social-diaries.php" class="nav-b">Social Diaries</a></li>
                    <li><a href="lokal.php" class="nav-c">Lokal Adventure</a></li>
                    <li class="contact"><a href="contact.php" id="contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- navbar ends here -->

    <!-- social media icons start here -->
    <?php include 'stylesheet/socmed.php'; ?>
    <!-- social media icons end here -->


    <!-- study tips header starts here-->
    <section class="tips-header">
        <video class="img-fluid z-index-1" autoplay loop muted>
            <source src="study-tips/images/tips-header.mp4" type="video/mp4" />
        </video>
    </section>

    <!-- study tips header ends here-->

    <!-- tips starts here-->
    <section class="tips wow fadeIn" id="study-tips">
        <ul class="tips-list container-fluid row">
            <li class="tip-container row">
                <div class="col">
                    <div>
                        <img class="mx-auto d-block" src="study-tips/images/tip1.png">
                    </div>

                    <div class="tip-txt">
                        <div class="col">
                            <h3>Time Your Coffee Wisely</h3>
                        </div>

                        <div class="col">
                            <p>
                                Charge up between 9:30 a.m. and 11:30 a.m., and
                                between 2 p.m. and 5 p.m. This goes for coffee or
                                your caffeine of choice. Why not early in the morning?
                                The body naturally produces cortisol in the morning,
                                which helps us wake up. Caffeine messes with our cortisol
                                production, making us MORE dependent on caffeine.
                                Make the most of your day by timing your caffeine to complete
                                your goals.
                            </p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="tip-container row">
                <div class="col">
                    <div class="col">
                        <img class="mx-auto d-block" src="study-tips/images/tip2.png">
                    </div>

                    <div class="tip-txt">
                        <div class="col">
                            <h3>Take Down Notes</h3>
                        </div>

                        <div class="col">
                            <p>You're presumably watching the lecture
                                on your computer as an online student.
                                Don't let the ease of rewinding and replaying
                                the video deter you from taking notes. In fact,
                                put down your laptop and pick up a pen and paper. <br><br>
                                Taking notes by hand might help you focus and think
                                critically, instead of typing everything out on a
                                computer.
                            </p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="tip-container row">
                <div class="col">
                    <div class="col">
                        <img class="mx-auto d-block" src="study-tips/images/tip3.png">
                    </div>

                    <div class="tip-txt">
                        <div class="col">
                            <h3>Don't Multitask</h3>
                        </div>

                        <div class="col">
                            <p>Focus on one assignment at a time and
                                focus on the task at hanD. Arrange your
                                projects in priority order, and focus on the most
                                important things that demand the most work.
                                <br><br>
                                If you're having trouble keeping focused, consider
                                making to-do lists using a project management
                                application like Notion.
                                <br><br><br>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <!-- tips ends here-->


    <!-- gentle reminder starts here-->
    <section>
        <video class="tips-quote img-fluid z-index-1" autoplay loop muted>
            <source src="study-tips/images/tips-quote.mp4" type="video/mp4" />
        </video>
    </section>
    <!-- gentle reminder ends here-->

    <!-- tips starts here-->
    <section class="tips wow fadeIn" id="study-tips">
        <ul class="tips-list container-fluid row">
            <li class="tip-container row">
                <div class="col">
                    <div>
                        <img class="mx-auto d-block" src="study-tips/images/tip4.png">
                    </div>

                    <div class="tip-txt">
                        <div class="col">
                            <h3>Organize Your Area</h3>
                        </div>

                        <div class="col">
                            <p>Find a study area and a regular study time that
                                works for you and stick with it. It should be peaceful,
                                and comfortable.
                                It should make you feel excited and motivated. Decorate
                                it with pictures or items that you like. <br><br>
                                Find your most
                                productive time and determine
                                when you are most productive and prepare to study at that time.
                            </p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="tip-container row">
                <div class="col">
                    <div class="col">
                        <img class="mx-auto d-block" src="study-tips/images/tip5.png">
                    </div>

                    <div class="tip-txt">
                        <div class="col">
                            <h3>Take a Rest</h3>
                        </div>

                        <div class="col">
                            <p>You read that right! Take a rest, sweetheart.
                                Academic tasks often tire us out, and can lead
                                to burnout so it is important to relax once in a
                                while. I know rest seems to be a reproachful
                                activity when we are overloaded with backlogs
                                but it is never a bad thing to take a break, and
                                allow yourself to reset.
                                <br><br>
                            </p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="tip-container row">
                <div class="col">
                    <div class="col">
                        <img class="mx-auto d-block" src="study-tips/images/tip6.png">
                    </div>

                    <div class="tip-txt">
                        <div class="col">
                            <h3>Try Review Techniques</h3>
                        </div>

                        <div class="col">
                            <p>Try review techniques like the Pomodoro Method where you
                                deep study for 25 minutes without distractions
                                then rest for the next 5 minutes. This could help
                                preventing burnout!
                                <br><br>
                                Best to use your 5 minute
                                break after each task by stretching, or drinking
                                water instead of scrolling in your social media account.
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <!-- tips ends here-->

    <!-- footer starts here -->
        <?php include 'stylesheet/footer.php'; ?>
    <!-- footer ends here -->



    <!-- booststrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- local js -->
    <script src="study-tips/src/js/index.js"></script>

    <!-- typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
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

    <!-- wow.js -->
    <script src="src/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>