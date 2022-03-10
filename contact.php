<?php
  include 'src/db/connect.php';
?>

<?php
  if(isset($_POST['cta-btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $addMessageQuery = "INSERT INTO `messages` (`name`, `email`, `message`) VALUES ('".$name."', '".$email."', '".$message."')";
    echo "form submitted successfully";
    if(execute($addMessageQuery)){
      header('Location: http://localhost/ZZZ-FINALSV2/contact.php');
      //echo "form submitted successfully";
    } else {
      echo "ERROR!";
    }
  }
?>

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
    <link rel="stylesheet" href="stylesheet/contact.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contact</title>
</head>

<body style="background-color: #ffc5c4;">

  <!-- navbar starts here -->
    <?php include 'stylesheet/navbar.php'; ?>
  <!-- navbar ends here -->

  <!-- social media icons start here -->
    <?php include 'stylesheet/socmed.php'; ?>
  <!-- social media icons end here -->

    <section class="contact container z-index-3">
        <div class="row">
            <div class="col-lg-6">
                <h1>Get In Touch</h1>

                <p class="">Hi, Love! <br>
                    Hope you had fun exploring, and reading my what-nots in life.<br>
                    If ever you want to collaborate, create something magical or <br>
                    just simply wants to say hi, hit me up and I'll try my best to get back to you!
                </p>
            </div>

            <form class="contact-form col-lg-6" id="contactForm" action="src/db/connect.php" method="post">

                <div class="col mb-3">
                    <input type="text" class="name form-control form-control-lg" id="name" aria-describedby="emailHelp"
                        placeholder="Name" name="name">
                </div>

                <div class="col mb-3">
                    <input type="email" class="form-control form-control-lg" id="email" placeholder="Email" name="email">
                </div>

                <div class="col mb-3">
                    <textarea class="form-control form-control-lg" id="message" rows="10"
                        placeholder="Message" name="message"></textarea>
                </div>

                <div class="d-grid gap-2 col-3 mx-auto">
                    <!-- <div id="alertNote"></div> -->
                    <button class="cta-btn" type="submit" name="cta-btn"><a>Send Message</a></button>
                </div>
            </form>

            <!-- <div>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="cta-btn" type="submit"><a>Send Message</a></button>
                </div>
            </div> 
        </div> -->
    </section>

    <!-- booststrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- local js 
        <script src="src/js/index.js"></script> 
    -->
</body>

</html>