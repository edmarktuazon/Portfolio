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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <!-- contact section -->
        <section class="bg-backupSecondary" style="background-color:#161719;">
            <div class="px-8 xl:px-48 flex items-center">
                <div class="my-52 animate__animated animate__fadeInDown">
                    <h3 class="font-bold text-[44px] lg:text-6xl xl:text-6xl tracking-wider text-white pb-4">Shoot me a
                        Message</h3>
                    <a href="../index.php"
                        class="text-md text-highLight hover:text-white ease-out duration-300">Home</a>
                </div>
            </div>
        </section>

        <?php include "../includes/contact.php"; ?>

        <!-- line hr break -->
        <hr style="background: rgba(255, 255, 255, 0.2); opacity: .10; color: inherit;">
        <!-- primary footer -->
        <?php include "../includes/footer.php"; ?>
    </main>
    <!-------------------- source js scripts  -------------------->

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
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