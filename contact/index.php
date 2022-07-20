<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmark - Contact</title>
    <!-- main css -->
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <!-- google fonts -->
    <!-- regular font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- font medium 500 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!-- font bold 700 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link css AOS  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- styling -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-primary">
    <!-- navigation  -->
    <?php include "../includes/nav.php"; ?>
    <!-- about primary title -->
    <main>
        <section class="bg-backupSecondary" style="background-color:#161719;">
            <div class="px-8 xl:px-48 flex items-center">
                <div class="my-52 animate__animated animate__fadeInDown">
                    <h3 class="font-bold text-[44px] lg:text-6xl xl:text-6xl tracking-wider text-white pb-4">Shoot me a Message</h3>
                    <a href="../index.php" class="text-md text-highLight hover:text-white ease-out duration-300">Home</a>
                </div>
            </div>
        </section>
        <!-- contact section -->
        <section class="my-32">
            <div class="pb-16 px-8 xl:px-48">
                <!-- <h5 class="uppercase text-secondary text-sm pb-4"></h5> -->
                <h2 class="capitalize font-bold text-4xl text-white">get in touch</h2>
                <h4 class="text-secondary pt-4 w-full lg:w-4/12">I' am open for new projects, if you want to hire me feel free to send me a message.</h4>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 px-8 xl:px-48">
                <div class="grid">
                    <div>
                        <h5 class="text-white font-bold uppercase tracking-widest">address</h5>
                        <p class="text-secondary mb-8 address">Trece Martires City 4109 Cavite, Philippines</p>
                        <h5 class="text-white font-bold uppercase tracking-widest">email</h5>
                        <p class="text-secondary mb-8 underline email"><a href="mailto:edmarktuazon03@gmail.com" class="ease-out duration-300 hover:text-white">edmarktuazon03@gmail.com</a></p>
                        <h5 class="text-white font-bold uppercase tracking-widest">phone</h5>
                        <p class="text-secondary phone1">(+63) 970 768 8781</p>
                        <p class="text-secondary mb-8 lg:mb-0 phone2">(+63) 967 510 9949</p>
                    </div>
                </div>
                <div class="grid">
                    <?php
                    if (isset($_POST['send'])) {
                        //access user entered data
                        $email = $_POST['email'];
                        $name = $_POST['name'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                        if (empty($name) || empty($subject) || empty($message) || empty($email)) {
                    ?>
                            <p class="bg-highLight mb-6 flex text-white p-4">
                                <?php echo "All fields must be filled out" ?>
                            </p>
                            <?php
                        } else {
                            if (mail($email, $subject, $message, "Hello my name is $name")) { ?>
                                <p class="bg-green-400 mb-6 flex text-white p-4">
                                    <?php echo "Thanks for your interest, your mail was successfully sent." ?>
                                    <a href="../index.php" class="text-white underline ml-1 ease-out duration-100 hover:text-backupPrimary">Back to Home</a>
                                </p>
                            <?php
                            } else {
                            ?>
                                <p class="bg-highLight mb-6 text-white p-4">
                                    <?php echo "There was a problem while sending your mail, please contact developer via email instead. Thanks!" ?>
                                </p>
                    <?php
                            }
                        }
                    }
                    ?>
                    <form action="../contact/" method="POST">
                        <div class="form-group">
                            <input type="email" name="email" class="w-full p-4 text-white bg-transparent border-backupSecondary border mb-4 focus:outline-none focus:border-white form-email" placeholder="Email Address" />
                        </div>
                        <div class="form-group">
                            <input type="name" name="name" class="w-full p-4 text-white bg-transparent border-backupSecondary  border mb-4 focus:outline-none focus:border-white form-name" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="w-full p-4 text-white bg-transparent  border mb-4 border-backupSecondary focus:outline-none focus:border-white form-subject" placeholder="Subject" />
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="4" class="w-full p-4 bg-transparent text-white border-backupSecondary border mb-4  focus:outline-none focus:border-white form-textarea" type="text" name="message" placeholder="Write your Message here.."></textarea>
                        </div>
                        <div class="form-group">
                            <button class="bg-white hover:bg-highLight hover:text-white ease-out duration-300 focus:bg-highLight focus:text-white capitalize  cursor-pointer w-40 p-3 text-center text-sm  rounded-sm font-bold tracking-widest flex items-center justify-center mr-4" id="form-btn" type="submit" name="send">send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>


        <!-- line hr break -->
        <hr style="background: rgba(255, 255, 255, 0.2);
 opacity: .10; color: inherit;">
        <!-- primary footer -->
        <?php include "../includes/footer.php"; ?>
    </main>
    <!-------------------- source js scripts  -------------------->

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- (editable) js script  -->
    <script src="../js/nav.js"></script>
    <script src="../js/scroll-reveal.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- initialize AOS -->
    <script>
        AOS.init({
            once: true,
        });
    </script>
</body>

</html>