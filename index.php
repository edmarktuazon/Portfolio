<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edmark - Web Developer</title>
  <!-- main css -->
  <link rel="stylesheet" href="./dist/output.css">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <!-- regular font  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- font medium 500 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <!-- font bold 700 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <!-- link css AOS  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- owl carousel -->
  <link rel="stylesheet" href="./bower_components/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" />
  <link rel="stylesheet" href="./bower_components/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
  <!-- boxicons (separated icon) -->
  <!-- for tailwind css icon -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!-- animate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- styling -->
  <link rel="stylesheet" href="./css/style.css">

</head>

<body class="bg-primary">
  <!-- navigation  -->
  <nav class="px-8 xl:px-48" id="navigation">
    <div class="nav-wrapper flex justify-between py-8  lg:mx-0">
      <!-- logo-->
      <a href="./index.php">
        <img src="./assets/img/logo.png" alt="logo-web">
      </a>
      <!-- nav links -->
      <ul class="hidden md:flex items-center">
        <li><a href="./index.php" class="text-secondary mr-8 hover:text-white ease-out duration-300">Home</a></li>
        <li><a href="./about/" class="text-secondary mr-8 hover:text-white ease-out duration-300">About</a></li>
        <li><a href="./projects/" class="text-secondary mr-8 hover:text-white ease-out duration-300">Portfolios</a></li>
        <li><a href="./docs/OJT-Cert_Tuazon-Edmark.png" class="text-secondary mr-8 hover:text-white ease-out duration-300">Certificates</a></li>
        <li><a href="./contact/" class="text-secondary hover:text-white ease-out duration-300 mr-8">Contact</a></li>
      </ul>
      <!-- hamburger-->
      <div class="md:hidden hamburger-menu">
        <div class="menu-bar">
          <button class="bar mobile-menu-button "></button>
        </div>
      </div>
    </div>
    <!-- mobile menu -->
    <section class="mobile-menu mx-0">
      <ul class="mt-8 mb-16">
        <li>
          <i class="fa-solid fa-house pl-2 text-white "></i>
          <a href="./index.php" class="text-secondary  hover:text-white ease-out duration-300">Home</a>
        </li>
        <hr style="border: 1px solid rgba(255, 255, 255, 0.2); opacity: 0.1;">
        <li>
          <i class="fa-solid fa-address-card pl-2 text-white "></i>
          <a href="./about/" class="text-secondary mr-8  hover:text-white ease-out duration-300">About</a>
        </li>
        <hr style="border: 1px solid rgba(255, 255, 255, 0.2); opacity: 0.1;">
        <li>
          <i class="fa-solid fa-diagram-project pl-2 text-white "></i>
          <a href="./projects/" class="text-secondary mr-8  hover:text-white ease-out duration-300">Portfolios</a>
        </li>
        <hr style="border: 1px solid rgba(255, 255, 255, 0.2); opacity: 0.1;">
        <li>
          <i class="fa-solid fa-award pl-2 text-white "></i>
          <a href="./docs/OJT-Cert_Tuazon-Edmark.png" class="text-secondary mr-8  hover:text-white ease-out duration-300">Certificate</a>
        </li>
        <hr style="border: 1px solid rgba(255, 255, 255, 0.2); opacity: 0.1;">
        <li>
          <i class="fa-solid fa-phone-flip pl-2 text-white "></i>
          <a href="./contact/" class="text-secondary mr-8 hover:text-white ease-out duration-300">Contact</a>
        </li>
        <hr style="border: 1px solid rgba(255, 255, 255, 0.2); opacity: 0.1;">
      </ul>
    </section>
  </nav>
  <!-- end navigation -->
  <!-- hero -->
  <main>
    <section class="bg-backupPrimary">
      <div class="w-full xl:w-9/12 mx-auto">
        <div class="py-40">
          <div class="md:block lg:flex lg:items-center">
            <div class="mx-auto grid place-items-center pb-4 lg:mb-0">
              <div class="has-tooltip">
                <div class='tooltip -mt-6 ml-[170px] lg:ml-[170px] xl:ml-[280px] rounded-sm p-2 flex text-sm text-white bg-backupSecondary text-center '>Hello there <img src="./assets/img/icons8-waving-hand-emoji-20.png" alt="wave to visitor"></div>
                <img src="./assets/img/edmark-circle-img.png" onmouseover="this.src='./assets/img/edmark-circle-colored-img.png'" onmouseout="this.src='./assets/img/edmark-circle-img.png'" class="ml-0  lg:ml-0 xl:ml-28" />
              </div>
            </div>
            <div class="mx-auto">
              <div class="home-title animate__animated animate__fadeInDown mx-auto grid place-items-center  lg:mx-0 lg:grid lg:place-items-start  mt-4 lg:mt-0 lg:ml-0 xl:mr-24">
                <h1 class="title  text-white text-center lg:text-left text-4xl md:text-6xl mt-8 md:mt-0 w-full tracking-wider" style="font-weight: 700 !important; ">
                  Edmark Tuazon
                </h1>
                <h3 class="text-highLight font-[500] text-xl md:text-3xl text-center lg:text-left lg:text-2xl my-4 lg:my-4 ">Frontend Web Developer</h3>
                <!-- resume btn -->
                <a href="./docs/Dev_Ed.pdf" class="bg-backupSecondary capitalize text-white hover:bg-highLight ease-out duration-300 focus:bg-highLight cursor-pointer p-2  w-36 text-center text-sm  rounded-sm flex items-center justify-center  mt-4 lg:mt-0 tracking-widest">view resume</a>
              </div>
              <!-- social med icons -->
              <div class="animate__animated animate__fadeIn flex justify-center lg:hidden lg:place-items-start  my-8 lg:mb-0 ">
                <div class="flex m-8">
                  <div class="pr-4">
                    <a href="https://www.facebook.com/edmarktuazon.fb/">
                      <img src="./assets/img/akar-icons_facebook-fill.png" alt="facebook" title="facebook">
                    </a>
                  </div>
                  <div class="pr-4">
                    <a href="https://www.instagram.com/edmark.ig/">
                      <img src="./assets/img/akar-icons_instagram-fill.png" alt="instagram" title="instagram">
                    </a>
                  </div>
                  <div class="pr-4">
                    <a href="https://www.linkedin.com/in/edmarktuazon/">
                      <img src="./assets/img/akar-icons_linkedin-box-fill.png" alt="linkedin" title="linkedin">
                    </a>
                  </div>
                  <a href="https://github.com/edmarktuazon">
                    <img src="./assets/img/akar-icons_github-fill.png" alt="linkedin" title="github">
                  </a>
                </div>
              </div>
              <!-- <ion-icon name="arrow-forward-outline" class=" text-white text-sm"></ion-icon> -->
            </div>
          </div>
          <ul class="hidden lg:flex lg:justify-center  animate__animated animate__fadeIn pt-24">
            <li class="mb-2 md:mb-0">
              <a href="https://www.facebook.com/edmarktuazon.fb/" class="text-secondary hover:text-white tracking-widest ease-out duration-300">Facebook</a>
              <span class=" ml-6 mr-6 text-secondary">/</span>
            </li>
            <li class="mb-2 md:mb-0"><a href="https://www.instagram.com/edmark.ig/" class="text-secondary  hover:text-white tracking-widest ease-out duration-300">Instagram</a>
              <span class="ml-6 mr-6 text-secondary">/</span>
            </li>
            <li class="mb-2 md:mb-0"><a href="https://www.linkedin.com/in/edmarktuazon/" class="text-secondary  hover:text-white tracking-widest ease-out duration-300">Linkedin</a>
              <span class="ml-6 mr-6 text-secondary">/</span>
            </li>
            <li><a href="https://github.com/edmarktuazon" class="text-secondary mr-8 hover:text-white tracking-widest ease-out duration-300 flip">GitHub</a></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end hero -->
    <!-- about section -->
    <section class="my-32">
      <div class="px-8 xl:px-48">
        <div class="pb-16">
          <h5 class="primary-section-title uppercase text-secondary text-sm tracking-widest pb-4">about me</h5>
          <h2 class=" capitalize font-bold text-4xl text-white">meet my skills</h2>
        </div>
        <div class="w-11/12 lg:w-9/12 mx-auto">
          <p class="text-2xl lg:text-4xl text-justify text-secondary " style="line-height: 1.3">A self taught Frontend Developer with more than a year of experience. I'am based in the province of Cavite Philippines, I can do stuffs about Frontend such as converting UI/UX Design into latest Frontend Technologies, editing existing Websites, maintaining Websites of my clients, and also minimal working with database <i>(Formspree and PHP MySQL).</i>
            <br>
            <br>
            I 'am actively learning about Latest Technologies especially in Frontend, and I'm always looking for new opportunities to learn and grow.
          </p>
        </div>
        <!-- skills -->
        <div class="w-full lg:w-11/12 mx-auto  mt-12 grid grid-cols-3 lg:grid-cols-4 place-items-center item internship-projects gap-12 lg:gap-y-8 lg:gap-x-2">
          <figure>
            <img src="./assets/img/icons8-html-5-78.png" alt="html-5">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              html
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-css3-78.png" alt="css-3">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              css
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-bootstrap-a-free-and-open-source-css-framework-78.png" alt="bootstrap">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              bootstrap
            </figcaption>
          </figure>
          <figure>
            <i class='bx bxl-tailwind-css text-8xl' style='color:#ffffff; height: 78px; width:78px;'></i>
            <figcaption class="text-white capitalize text-center" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              tailwind css
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-javascript-78.png" alt="javascript">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              javascript
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-vuejs-78.png" alt="vuejs">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              vuejs
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-jquery-78.png" alt="jquery">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              jquery
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-php-logo-78.png" alt="php">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              php
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-mysql-logo-78.png" alt="mysql">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              mysql
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-github-78.png" alt="github">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              github
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-git-78.png" alt="git">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              git <br>
              version
              <br>
              control
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-figma-78.png" alt="figma">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              figma
            </figcaption>
          </figure>
          <figure>
            <img src="./assets/img/icons8-adobe-xd-78.png" alt="adobe xd">
            <figcaption class="text-white capitalize text-center pt-4" data-aos-delay="300" data-aos-duration="1000" data-aos="flip-down">
              adobe xd
            </figcaption>
          </figure>
        </div>
      </div>
    </section>
    <!-- end of skills -->
    <!-- hr line break -->
    <hr class="my-32" style="background: rgba(255, 255, 255, 0.2);;
 opacity: .10; color: inherit;">
    <!-- portfolios -->
    <section class="my-32">
      <div class="px-8 xl:px-48">
        <div class="pb-16">
          <h5 class="primary-section-title uppercase  text-secondary text-sm pb-4 tracking-widest">projects</h5>
          <h2 class="capitalize font-bold text-4xl text-white">meet my portfolios</h2>
        </div>
        <!-- items menus -->
        <div class="item-menus">
          <div class="grid place-items-start md:flex md:justify-center pb-16" id="filters">
            <button data-filter="*" class="all-btn capitalize  
          hover:bg-highLight p-2 hover:text-white 
          text-secondary  cursor-pointer mr-4 mb-4 lg:mb-0 rounded-sm ease-out duration-300 tracking-wide active">all</button>
            <button data-filter=".client-projects" class="client-btn capitalize text-secondary hover:bg-highLight  p-2  hover:text-white  cursor-pointer mr-4 mb-4 lg:mb-0 rounded-sm ease-out duration-300 tracking-wide">client projects</button>
            <button data-filter=".internship-projects" class="capitalize text-secondary hover:bg-highLight  p-2  hover:text-white  cursor-pointer mr-4 mb-4 lg:mb-0  rounded-sm ease-out duration-300 tracking-wide">internship projects</button>
            <button data-filter=".personal-projects" class="capitalize text-secondary  hover:bg-highLight  p-2  hover:text-white  cursor-pointer mr-4 mb-4 lg:mb-0 rounded-sm ease-out duration-300 tracking-wide">web competition project</button>
          </div>
        </div>
        <!-- filtered all items -->
        <div class="filtered-items">
          <!-- first projects -->
          <div class="grid md:grid-cols-1 lg:grid-cols-2 mb-16 lg:mb-24 place-items-center item internship-projects gap-6 lg:gap-12">
            <figure>
              <img src="./assets/img/project-05.PNG" alt="free bible">
            </figure>
            <!-- project details -->
            <div class="w-full">
              <p class="text-secondary pb-4 ">Free Bible is a bible source that the user can request his/her desired bible verse, also included the languages, country, quantity and bible version.
              </p>
              <hr style="background: rgba(255, 255, 255, 0.2);; opacity: .10; color: inherit;">
              <h6 class="text-white capitalize text-3xl pt-4">technologies used</h6>
              <ul>
                <li class="text-secondary">HTML</li>
                <li class="text-secondary">CSS</li>
                <li class="text-secondary">JavaScript</li>
                <li class="text-secondary">Form Backend API (Formspree)</li>
              </ul>
              <a href="http://www.freebibleph.com/" class="bg-backupSecondary capitalize tracking-wide text-white hover:bg-highLight ease-out duration-300 focus:bg-highLight cursor-pointer p-2  w-36 text-center text-sm  rounded-sm flex items-center justify-center mt-4 mr-4 mb-4 lg:mb-0"><i class="fa-solid fa-play mr-2"></i>live preview</a>
            </div>
          </div>
          <!-- second project -->
          <div class="grid  grid-cols-1 lg:grid-cols-2 mb-16 lg:mb-24  place-items-center item internship-projects gap-6 lg:gap-12">
            <!-- project details -->
            <div class="grid row-end-3 lg:row-end-auto">
              <p class="text-secondary pb-4 ">TaskPlace is a rental place for individuals or groups, this site user can book through google form or may user fill out the form on this site, and rent a place they want.
              </p>
              <hr style="background: rgba(255, 255, 255, 0.2);; opacity: .10; color: inherit;">
              <h4 class="text-white capitalize text-3xl pt-4">technologies used</h4>
              <ul>
                <li class="text-secondary">HTML</li>
                <li class="text-secondary">SCSS</li>
                <li class="text-secondary">JavaScript</li>
                <li class="text-secondary">Form Backend API (Formspree)</li>
              </ul>
              <a href="https://task-place.vercel.app/" class="bg-backupSecondary capitalize tracking-wide text-white hover:bg-highLight ease-out duration-300 focus:bg-highLight cursor-pointer p-2  w-36 text-center text-sm  rounded-sm flex items-center justify-center mt-4 mr-4 mb-4 lg:mb-0"><i class="fa-solid fa-play mr-2"></i>live preview</a>
            </div>
            <figure>
              <img src="./assets/img/project-06.PNG" alt="taskplace">
            </figure>
          </div>
          <!-- third projects -->
          <div class="grid md:grid-cols-1 lg:grid-cols-2 mb-16 lg:mb-24  place-items-center item personal-projects gap-6 lg:gap-12">
            <figure>
              <img src="./assets/img/project-07.PNG" alt="icc">
            </figure>
            <!-- project details -->
            <div class="w-full">
              <p class="text-secondary pb-4 ">Imus Computer College is a fully responsive Landing Page, this site user can view the courses offered by the school, and also user may register for the courses using direct link to the official site of ICC, this site is my entry for Website Competition for our school sportfest.
              </p>
              <hr style="background: rgba(255, 255, 255, 0.2);; opacity: .10; color: inherit;">
              <h4 class="text-white capitalize text-3xl pt-4">technologies used</h4>
              <ul>
                <li class="text-secondary">HTML</li>
                <li class="text-secondary">Bootstrap 5</li>
                <li class="text-secondary">JavaScript</li>
              </ul>
              <div class="block lg:flex">
                <a href="https://icc-tmc-branch-2022.vercel.app/" class="bg-backupSecondary capitalize tracking-wide text-white hover:bg-highLight ease-out duration-300 focus:bg-highLight cursor-pointer p-2  w-36 text-center text-sm  rounded-sm flex items-center justify-center mt-4 mr-4 mb-4 lg:mb-0"><i class="fa-solid fa-play mr-2"></i>live preview</a>
                <a href="#" class="capitalize  text-white border-backupSecondary  border hover:bg-highLight ease-out duration-300 focus:bg-highLight cursor-pointer p-2 w-40 text-center text-sm  rounded-sm flex items-center justify-center mt-4 mr-4 mb-4 lg:mb-0"><i class="fa-solid fa-file mr-2"></i>view certificate</a>
              </div>
            </div>
          </div>
          <!-- client projects -->
          <div class="client-projects w-full hidden">
            <h5 class="text-secondary font-light">It's Confidential</h5>
          </div>
        </div>
      </div>
    </section>
    <!-- end of projects -->
    <!-- hr line break -->
    <hr style="background: rgba(255, 255, 255, 0.2);;
 opacity: .10; color: inherit;">
    <!-- feedbacks -->
    <section class="my-32 ">
      <div class="pb-16 px-8 xl:px-48 w-full lg:w-3/5 xl:w-3/5">
        <h5 class="primary-section-title-02  uppercase text-secondary text-sm pb-4 tracking-widest">testimonials</h5>
        <h2 class="font-bold text-4xl text-white">Great experience with awesome people</h2>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 px-8 lg:px-36">
        <div class="owl-carousel owl-theme"></div>
        <div class="owl-carousel owl-theme">
          <!-- first feedback -->
          <div class="item">
            <i class="fa-solid fa-quote-right text-white text-4xl pb-4"></i>
            <p class="text-secondary pb-4">Edmark is such a good developer. He has knowledge on HTML, CSS and database management. Easy to work with, you just have to be clear with what you expect on a website. He is able to easily integrate new website development ideas into what is expected by the client. He has a potential on advanced development and design platforms.
            </p>
            <h4 class="text-white capitalize text-3xl pb-2">racquel peña</h4>
            <h6 class="text-secondary capitalize text-sm">linkHelpers international inc. | project manager</h6>
          </div>
          <!-- second feedback -->
          <div class="item">
            <i class="fa-solid fa-quote-right text-white text-4xl pb-4"></i>
            <p class="text-secondary pb-4">Edmark is great at communicating and doing his work. He provided the service as I wanted even though he didn't know that technology that much. Will be coming back to him as he is a good frontend developer.
            </p>
            <div class="group flex items-center">
              <img class="shrink-0 h-12 w-12 rounded-full" src="./assets/img/client-feedback-02.png" alt="client-02-img" />
              <div class="block">
                <h4 class="text-white capitalize text-3xl ml-4 pb-2">shayan nadeem</h4>
                <p class="text-secondary capitalize text-sm ml-4">fiverr client | web developer</p>
              </div>
            </div>
          </div>
          <!-- third feedback -->
          <div class="item">
            <i class="fa-solid fa-quote-right text-white text-4xl pb-4"></i>
            <p class="text-secondary pb-4">Edmark did a great job on my website! He manually adjusted and added a section to my website using html, css and javascript code. I believe he has a good knowledge and is good in what he does. Thank you.
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
            <p class="text-secondary pb-4">Edmark really did a great job in finding solutions to my website issues. He has a set of skills and is a good communicator. He works round the clock and delivers on time. I will order his gig again and would recommend it to anyone. Awesome job!
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
    <!-- end of feedback section -->
    <!-- hr line break -->
    <hr style="background: rgba(255, 255, 255, 0.2);;
 opacity: .10; color: inherit;">
    <!-- primary footer -->
    <footer class="grid grid-cols-1 lg:grid-cols-4 gap-5  px-8 xl:px-48 my-32 ">
      <figure>
        <img src="./assets/img/logo.png" alt="logo">
        <figcaption class="mt-8 text-secondary">
          Let's connect together and make your desire come true.
        </figcaption>
        <div class="flex mt-4">
          <div class="pr-2">
            <div class="flex items-center justify-center bg-backupPrimary rounded-full h-14 w-14 hover:bg-highLight ease-out duration-300 ">
              <a href="https://www.facebook.com/edmarktuazon.fb/">
                <img src="./assets/img/akar-icons_facebook-fill.png" alt="facebook" title="facebook">
              </a>
            </div>
          </div>
          <div class="pr-2">
            <div class="flex items-center justify-center bg-backupPrimary rounded-full h-14 w-14 hover:bg-highLight ease-out duration-300">
              <a href="https://www.instagram.com/edmark.ig/">
                <img src="./assets/img/akar-icons_instagram-fill.png" alt="instagram" title="instagram">
              </a>
            </div>
          </div>
          <div class="pr-2">
            <div class="flex items-center justify-center bg-backupPrimary rounded-full h-14 w-14 hover:bg-highLight ease-out duration-300">
              <a href="https://www.linkedin.com/in/edmarktuazon/">
                <img src="./assets/img/akar-icons_linkedin-box-fill.png" alt="linkedin" title="linkedin">
              </a>
            </div>
          </div>
          <div>
            <a href="https://github.com/edmarktuazon" class="flex items-center justify-center bg-backupPrimary rounded-full h-14 w-14 hover:bg-highLight ease-out duration-300">
              <img src="./assets/img/akar-icons_github-fill.png" alt="linkedin" title="github">
            </a>
          </div>
        </div>
      </figure>
      <div class="mt-8 lg:mt-0 mx-0 lg:mx-auto">
        <h4 class=" text-white tracking-widest uppercase font-bold">explore</h4>
        <ul class="mt-8">
          <div class="flex">
            <p class="mb-2"> <i class="fa-solid fa-angle-right pr-2 text-white hover:text-white"></i><a href="./about/" class="text-secondary mr-8 underline hover:text-white ease-out duration-300">About</a></p>
          </div>
          <div class="flex">
            <p class="mb-2"> <i class="fa-solid fa-angle-right pr-2 text-white hover:text-white"></i><a href="./contact/" class="text-secondary mr-8 underline hover:text-white ease-out duration-300">Contact</a></p>
          </div>
          <div class="flex">
            <p class="mb-2"> <i class="fa-solid fa-angle-right pr-2 text-white hover:text-white"></i><a href="./projects/" class="text-secondary mr-8 underline hover:text-white ease-out duration-300">Portfolios</a></p>
          </div>
        </ul>
      </div>
      <div class="mt-8 lg:mt-0">
        <h4 class="text-white tracking-widest uppercase font-bold">quick links</h4>
        <ul class="mt-8">
          <div class="flex">
            <p class="mb-2"> <i class="fa-solid fa-angle-right pr-2 text-white hover:text-white"></i><a href="./docs/OJT-Cert_Tuazon-Edmark.png" class="text-secondary mr-8 underline hover:text-white ease-out duration-300">Certificates</a></p>
          </div>
          <div class="flex">
            <p class="mb-2"> <i class="fa-solid fa-angle-right pr-2 text-white hover:text-white"></i><a href="./docs/Dev_Ed.pdf" class="text-secondary mr-8 underline hover:text-white ease-out duration-300">Resume</a></p>
          </div>
        </ul>
      </div>
      <div class="mt-8 lg:mt-0 ">
        <h4 class=" text-white tracking-widest uppercase font-bold">Contacts</h4>
        <ul class="mt-8">
          <div class="flex">
            <i class="fa-solid fa-paper-plane text-white pr-4"></i>
            <p class="mb-2"><a href="mailto:edmarktuazon03@gmail.com" class="text-secondary underline hover:text-white ease-out duration-300 ">edmarktuazon03@gmail.com</a></p>
          </div>
          <div class="flex">
            <i class="fa-solid fa-phone text-white pr-4 "></i>
            <p class="mb-2 text-secondary">(+63) 970 768 8781 <br> (+63) 967 510 9949 </p>
          </div>
        </ul>
      </div>
    </footer>
    <!-- end of primary footer -->
    <!-- secondary footer -->
    <footer class="h-20 bg-backupSecondary flex items-center justify-center" style="background-color:#161719; height: 80px;">
      <div class="flex justify-center">
        <div class="flex items-center">
          <p class="text-secondary text-sm flex items-center ">Copyright &copy;2022 Edmark Tuazon</p>
        </div>
      </div>
    </footer>
  </main>
  <!-- end of secondary footer -->

  <!-------------------- source js scripts  -------------------->

  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
  <!-- isotope JS -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <!-- owl carousel -->
  <script src="./bower_components/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
  <script src="./bower_components/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
  <!-- (editable) js script  -->
  <script src="./js/isotope.js"></script>
  <script src="./js/nav.js"></script>
  <script src="./js/owl-carousel.js"></script>
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/88c511bfd2.js" crossorigin="anonymous"></script>
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