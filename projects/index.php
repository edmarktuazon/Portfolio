<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmark - Portfolios</title>
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
    <!-- owl carousel -->
    <link rel="stylesheet" href="../bower_components/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" />
    <link rel="stylesheet" href="../bower_components/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- styling -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-primary">
    <!-- navigation  -->
    <?php include '../includes/nav.php'; ?>
    <!-- projects primary title -->
    <main>
        <section class="bg-backupSecondary" style="background-color:#161719;">
            <div class="px-8 lg:px-48 flex items-center">
                <div class="my-52 animate__animated animate__fadeInDown">
                    <h2 class="font-bold text-[44px] lg:text-6xl xl:text-6xl tracking-wider text-white pb-4">Stuffs that
                        i Worked on</h2>
                    <a href="../index.php"
                        class="text-md text-highLight hover:text-white ease-out duration-300">Home</a>
                </div>
            </div>
        </section>
        <!-- portfolios -->
        <section class="my-32">
            <div class="px-8 xl:px-48">
                <div class="pb-16">
                    <h5 class="primary-section-title uppercase  text-secondary text-sm pb-4 tracking-widest">projects
                    </h5>
                    <h2 class="capitalize font-bold text-4xl text-white">meet my portfolios</h2>
                </div>
                <!-- items menus -->
                <div class="item-menus">
                    <div class="grid place-items-start md:flex md:justify-center pb-16" id="filters">
                        <button data-filter="*"
                            class="all-btn capitalize  
          hover:bg-highLight p-2 hover:text-white 
          text-secondary  cursor-pointer mr-4 mb-4 lg:mb-0 rounded-sm ease-out duration-300 tracking-wide active">all</button>
                        <button data-filter=".client-projects"
                            class="client-btn capitalize text-secondary hover:bg-highLight  p-2  hover:text-white  cursor-pointer mr-4 mb-4 lg:mb-0 rounded-sm ease-out duration-300 tracking-wide">client
                            projects</button>
                        <button data-filter=".internship-projects"
                            class="capitalize text-secondary hover:bg-highLight  p-2  hover:text-white  cursor-pointer mr-4 mb-4 lg:mb-0  rounded-sm ease-out duration-300 tracking-wide">internship
                            projects</button>
                        <button data-filter=".web-competition-project"
                            class="capitalize text-secondary  hover:bg-highLight  p-2  hover:text-white  cursor-pointer mr-4 mb-4 lg:mb-0 rounded-sm ease-out duration-300 tracking-wide">web
                            competition project</button>
                        <button data-filter=".personal-project"
                            class="capitalize text-secondary  hover:bg-highLight  p-2  hover:text-white  cursor-pointer mr-4 mb-4 lg:mb-0 rounded-sm ease-out duration-300 tracking-wide">personal
                            project</button>
                    </div>
                </div>
                <!-- filtered all items -->
                <div class="filtered-items">
                    <!-- first projects -->
                    <div
                        class="grid md:grid-cols-1 lg:grid-cols-2 mb-16 lg:mb-24 place-items-center item internship-projects gap-6 lg:gap-12 ">
                        <figure>
                            <img src="../assets/img/project-05.PNG" alt="free bible">
                        </figure>
                        <!-- project details -->
                        <div class="w-full">
                            <p class="text-secondary pb-4 ">Free Bible is a bible source that the user can request
                                his/her desired bible verse, also included the languages, country, quantity and bible
                                version.
                            </p>
                            <hr style="background: rgba(255,255,255,.3); opacity: .10; color: inherit;">
                            <h6 class="text-white capitalize text-3xl pt-4">technologies used</h6>
                            <ul>
                                <li class="text-secondary">HTML</li>
                                <li class="text-secondary">CSS</li>
                                <li class="text-secondary">JavaScript</li>
                                <li class="text-secondary">Form Backend API (Formspree)</li>
                            </ul>
                            <a href="http://www.freebibleph.com/"
                                class="bg-backupSecondary capitalize tracking-wide text-white hover:bg-highLight ease-out duration-300 focus:bg-highLight cursor-pointer p-2  w-36 text-center text-sm  rounded-sm flex items-center justify-center mt-4 mr-4 mb-4 lg:mb-0"><i
                                    class="fa-solid fa-play mr-2"></i>live preview</a>
                        </div>
                    </div>
                    <!-- second project -->
                    <div
                        class="grid  grid-cols-1 lg:grid-cols-2 mb-16 lg:mb-24  place-items-center item internship-projects gap-6 lg:gap-12">
                        <!-- project details -->
                        <div class="grid row-end-3 lg:row-end-auto">
                            <p class="text-secondary pb-4 ">TaskPlace is a rental place for individuals or groups, this
                                site user can book through google form or may user fill out the form on this site, and
                                rent a place they want.
                            </p>
                            <hr style="background: rgba(255,255,255,.3); opacity: .10; color: inherit;">
                            <h4 class="text-white capitalize text-3xl pt-4">technologies used</h4>
                            <ul>
                                <li class="text-secondary">HTML</li>
                                <li class="text-secondary">SCSS</li>
                                <li class="text-secondary">JavaScript</li>
                                <li class="text-secondary">Form Backend API (Formspree)</li>
                            </ul>
                            <a href="https://task-place.vercel.app/"
                                class="bg-backupSecondary capitalize tracking-wide text-white hover:bg-highLight ease-out duration-300 focus:bg-highLight cursor-pointer p-2  w-36 text-center text-sm  rounded-sm flex items-center justify-center mt-4 mr-4 mb-4 lg:mb-0"><i
                                    class="fa-solid fa-play mr-2"></i>live preview</a>
                        </div>
                        <figure>
                            <img src="../assets/img/project-06.PNG" alt="taskplace">
                        </figure>
                    </div>
                    <!-- third projects -->
                    <div
                        class="grid md:grid-cols-1 lg:grid-cols-2 mb-16 lg:mb-24  place-items-center item web-competition-project gap-6 lg:gap-12">
                        <figure>
                            <img src="../assets/img/project-07.PNG" alt="icc">
                        </figure>
                        <!-- project details -->
                        <div class="w-full">
                            <p class="text-secondary pb-4 ">Imus Computer College is a fully responsive Landing Page,
                                this site user can view the courses offered by the school, and also user may register
                                for the courses using direct link to the official site of ICC, this site is my entry for
                                Website Competition for our school sportfest.
                            </p>
                            <hr style="background: rgba(255,255,255,.3); opacity: .10; color: inherit;">
                            <h4 class="text-white capitalize text-3xl pt-4">technologies used</h4>
                            <ul>
                                <li class="text-secondary">HTML</li>
                                <li class="text-secondary">Bootstrap 5</li>
                                <li class="text-secondary">JavaScript</li>
                            </ul>
                            <div class="block lg:flex">
                                <a href="https://icc-tmc-branch-2022.vercel.app/"
                                    class="bg-backupSecondary capitalize tracking-wide text-white hover:bg-highLight ease-out duration-300 focus:bg-highLight cursor-pointer p-2  w-36 text-center text-sm  rounded-sm flex items-center justify-center mt-4 mr-4 mb-4 lg:mb-0"><i
                                        class="fa-solid fa-play mr-2"></i>live preview</a>
                                <a href="" id="cert"
                                    class="capitalize  text-white border-backupSecondary  border hover:bg-highLight ease-out duration-300 focus:bg-highLight cursor-pointer p-2 w-40 text-center text-sm  rounded-sm flex items-center justify-center mt-4 mr-4 mb-4 lg:mb-0"><i
                                        class="fa-solid fa-file mr-2"></i>view certificate</a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="grid md:grid-cols-1 lg:grid-cols-2 mb-16 lg:mb-24  place-items-center item personal-project gap-6 lg:gap-12">
                        <!-- project details -->
                        <div class="w-full grid row-end-3 lg:row-end-auto">
                            <p class="text-secondary pb-4 ">A Dynamic Landing Page built in Vite + Vue.js 3 and Tailwind
                                CSS
                            </p>
                            <hr style="background: rgba(255, 255, 255, 0.2);; opacity: .10; color: inherit;">
                            <h4 class="text-white capitalize text-3xl pt-4">technologies used</h4>
                            <ul>
                                <li class="text-secondary">Vite + Vue 3</li>
                                <li class="text-secondary">Tailwind CSS</li>
                            </ul>
                            <div class="block lg:flex">
                                <a href="https://olivia-rodrigo-site-cloned.vercel.app/"
                                    class="bg-backupSecondary capitalize tracking-wide text-white hover:bg-highLight ease-out duration-300 focus:bg-highLight cursor-pointer p-2  w-36 text-center text-sm  rounded-sm flex items-center justify-center mt-4 mr-4 mb-4 lg:mb-0"><i
                                        class="fa-solid fa-play mr-2"></i>live preview</a>
                            </div>
                        </div>
                        <figure>
                            <img src="../assets/img/sour-project.PNG" alt="sour-site">
                        </figure>
                    </div>
                    <!-- client projects -->
                    <div class="client-projects w-full hidden">
                        <h5 class="text-secondary font-light">It's Confidential</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- hr line break -->
        <hr style="background: rgba(255,255,255,.3);
 opacity: .10; color: inherit;">
        <!-- feedbacks -->
        <section class="my-32 ">
            <div class="pb-16 px-8 xl:px-48 w-full lg:w-3/5 xl:w-3/5">
                <h5 class="primary-section-title-02  uppercase text-secondary text-sm pb-4 tracking-widest">testimonials
                </h5>
                <h2 class="font-bold text-4xl text-white">Great experience with awesome people</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 px-8 lg:px-36">
                <div class="owl-carousel owl-theme"></div>
                <div class="owl-carousel owl-theme">
                    <!-- first feedback -->
                    <div class="item">
                        <i class="fa-solid fa-quote-right text-white text-4xl pb-4"></i>
                        <p class="text-secondary pb-4">Edmark is such a good developer. He has knowledge on HTML, CSS
                            and database management. Easy to work with, you just have to be clear with what you expect
                            on a website. He is able to easily integrate new website development ideas into what is
                            expected by the client. He has a potential on advanced development and design platforms.
                        </p>
                        <h4 class="text-white capitalize text-3xl pb-2">racquel peña</h4>
                        <h6 class="text-secondary capitalize text-sm">linkHelpers international inc. | project manager
                        </h6>
                    </div>
                    <!-- second feedback -->
                    <div class="item">
                        <i class="fa-solid fa-quote-right text-white text-4xl pb-4"></i>
                        <p class="text-secondary pb-4">Edmark is great at communicating and doing his work. He provided
                            the service as I wanted even though he didn't know that technology that much. Will be coming
                            back to him as he is a good frontend developer.
                        </p>
                        <div class="group flex items-center">
                            <img class="shrink-0 h-12 w-12 rounded-full" src="../assets/img/client-feedback-02.png"
                                alt="client-02-img" />
                            <div class="block">
                                <h4 class="text-white capitalize text-3xl ml-4 pb-2">shayan nadeem</h4>
                                <p class="text-secondary capitalize text-sm ml-4">fiverr client | web developer</p>
                            </div>
                        </div>
                    </div>
                    <!-- third feedback -->
                    <div class="item">
                        <i class="fa-solid fa-quote-right text-white text-4xl pb-4"></i>
                        <p class="text-secondary pb-4">Edmark did a great job on my website! He manually adjusted and
                            added a section to my website using html, css and javascript code. I believe he has a good
                            knowledge and is good in what he does. Thank you.
                        </p>
                        <div class="group flex items-center">
                            <!-- <img class="shrink-0 h-12 w-12 rounded-full" src="./assets/img/client-feedback-02.png" alt="client-02-img" /> -->
                            <div class="block">
                                <h4 class="text-white capitalize text-3xl pb-2">dakyanddena</h4>
                                <p class="text-secondary capitalize text-sm">fiverr client</p>
                            </div>
                        </div>
                    </div>
                    <!-- fourth feedback -->
                    <div class="item">
                        <i class="fa-solid fa-quote-right text-white text-4xl pb-4"></i>
                        <p class="text-secondary pb-4">Edmark really did a great job in finding solutions to my website
                            issues. He has a set of skills and is a good communicator. He works round the clock and
                            delivers on time. I will order his gig again and would recommend it to anyone. Awesome job!
                        </p>
                        <div class="group flex items-center">
                            <!-- <img class="shrink-0 h-12 w-12 rounded-full" src="./assets/img/client-feedback-02.png" alt="client-02-img" /> -->
                            <div class="block">
                                <h4 class="text-white capitalize text-3xl pb-2">tygerjed</h4>
                                <p class="text-secondary capitalize text-sm">fiverr client | multimedia specialist</p>
                            </div>
                        </div>
                    </div>
                    <!-- fifth feedback -->
                    <!-- <div class="item">
          <i class="fa-solid fa-quote-right text-white text-4xl pb-4"></i>
          <p class="text-secondary pb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta sed, dolores eligendi, quia deleniti iste alias ea esse ipsum id accusamus? Eius voluptatibus, iste nihil quasi harum unde facilis nemo?
          </p>
          <div class="group flex items-center">
            <div class="block">
              <h4 class="text-white capitalize text-3xl pb-2">johan cerrada</h4>
              <p class="text-secondary capitalize text-sm">web designer - developer - team lead | teamholix communication design inc.</p>
            </div>
          </div>
        </div> -->
                    <!-- sixth feedback -->
                    <!-- <div class="item">
          <i class="fa-solid fa-quote-right text-white text-4xl pb-4"></i>
          <p class="text-secondary pb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta sed, dolores eligendi, quia deleniti iste alias ea esse ipsum id accusamus? Eius voluptatibus, iste nihil quasi harum unde facilis nemo?
          </p>
          <div class="group flex items-center">
            <div class="block">
              <h4 class="text-white capitalize text-3xl pb-2">karen cerrada</h4>
              <p class="text-secondary capitalize text-sm">web designer - team lead | teamholix communication design inc.</p>
            </div>
          </div>
        </div> -->
                </div>
            </div>
        </section>


        <!-- hr line break-->
        <hr style="background: rgba(255, 255, 255, 0.2);
 opacity: .25; color: inherit;">
        <!-- primary footer -->
        <?php include '../includes/footer.php'; ?>
    </main>

    <!-------------------- source js scripts  -------------------->
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
    <script src="../js/index.js"></script>
    <!-- owl carousel -->
    <script src="../bower_components/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="../bower_components/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <!-- isotope JS -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <!-- (editable) js script  -->
    <script src="../js/nav.js"></script>
    <script src="../js/isotope.js"></script>
    <script src="../js/owl-carousel.js"></script>
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