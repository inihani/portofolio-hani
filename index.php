<?php include('admin/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- css -->
  <link rel="stylesheet" href="./style.css" />
  <!-- unicon -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <!-- swiper css -->
  <link rel="stylesheet" href="./swiper-bundle.min.css" />
  <!--  -->
  <link rel="stylesheet" href="" />

  <title>Portofolio</title>
</head>

<body>
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#" class="nav-logo" style="text-decoration: none">Hani</a>

      <div class="nav-menu" id="nav-menu">
        <ul class="nav-list grid">
          <li class="nav-item">
            <a href="#home" class="nav-link active-link"> <i class="uil uil-estate nav-icon"></i> Home </a>
          </li>

          <li class="nav-item">
            <a href="#about" class="nav-link"> <i class="uil uil-user nav-icon"></i> About </a>
          </li>

          <li class="nav-item">
            <a href="#skills" class="nav-link"> <i class="uil uil-file nav-icon"></i> Skills </a>
          </li>

          <li class="nav-item">
            <a href="#qualification" class="nav-link"> <i class="uil uil-graduation-cap nav-icon"></i> Qualification </a>
          </li>

          <li class="nav-item">
            <a href="#portofolio" class="nav-link"> <i class="uil uil-scenery nav-icon"></i> Portofolio </a>
          </li>

          <li class="nav-item">
            <a href="#contact" class="nav-link"> <i class="uil uil-chat nav-icon"></i> Contact Me </a>
          </li>
        </ul>
        <i class="uil uil-times nav-close" id="nav-close" style="color: rgb(125, 34, 178);"></i>
      </div>

      <div class="nav-btns">
        <!-- theme change -->
        <i class="uil uil-moon change-theme" id="theme-button" style="color: rgb(125, 34, 178);"></i>

        <div class="nav-toggles" id="nav-toggles">
          <i class="uil uil-apps"></i>
        </div>
      </div>
    </nav>
  </header>

  <main class="main">
    <section class="home section" id="home">
      <div class="home-container container grid">
        <div class="home-content grid">
          <div class="home-social">
            <a target="_blank" href="https://www.linkedin.com/in/hani-dwp" class="homeicon">
              <i class="uil uil-linkedin" style="color: rgb(125, 34, 178);"></i>
            </a>
            <a target="_blank" href="https://instagram.com/hnnputt?igshid=MzRlODBiNWFlZA==" class="homeicon">
              <i class="uil uil-instagram" style="color: rgb(125, 34, 178);"></i>
            </a>
            <a target="_blank" href="https://github.com/inihani/20ha" class="homeicon">
              <i class="uil uil-github" style="color: rgb(125, 34, 178);"></i>
            </a>
          </div>

          <div class="home-img">
            <img src="./Hani Formal.JPG" alt="" class="home-blob" style="border-radius: 40%" />
          </div>

          <div class="home-data">
            <h1 class="home-title">Hi ! My name is Hani, thanks for visiting my online portfolio.</h1>
            <h3 class="home-subtitle">Student</h3>
            <a href="#contact" class="home-contact button button--flex"> Contact Me <i class="uil uil-message button-icon"></i> </a>
          </div>
        </div>

        <div class="home-scroll">
          <a href="#about" class="home-scrollbtn button--flex">
            <i class="uil uil-mouse-alt-2 home-scroll-mouse" style="color: rgb(125, 34, 178);"></i>
            <span class="home-scroll-name">Scroll Down</span>
            <i class="uil uil-arrow-down" style="color: rgb(125, 34, 178);"></i>
          </a>
        </div>
      </div>
    </section>

    <section class="about section" id="about">
      <h2 class="section-title">About Me</h2>
      <span class="section-subtitle">My Introduction</span>

      <div class="about-container container grid">
        <img src="./IMG_20231003_160513.jpg" alt="" class="about-img" />
        <div class="about-data">
          <p class="about-desc">
            I am Hani, a student from SMK Negeri 2 Bangkalan, majoring in software engineering.
          </p>
          <p class="about-desc">
            I have some skills in several languages namely, HTML, CSS, Java script, Kotlin, and others. I also have the ability to design and write.
          </p>
          <div class="about-buttons">
            <!-- cv -->
            <a download="" href="./CV_Hani Dwi Yulinda Putri.pdf" class="button button--flex"> Download CV <i class="uil uil-download-alt button-icon"></i> </a>
          </div>
        </div>
      </div>
    </section>
    <!-- TAMBAHKAN SKILL  -->
    <section class="skills section" id="skills">
      <h2 class="section-title">My Skills</h2>
      <span class="section-subtitle">My Technical Level</span>

      <!-- skill 1 -->
      <div class="skills-container container grid">
        <div class="skills-content skills-open">
          <div class="skills-header">
            <i class="uil uil-brackets-curly skills-icon" style="color: rgb(125, 34, 178);"></i>
            <div>
              <h1 class="skills-title">Frontend</h1>
              <span class="skills-subtitle"> </span>
            </div>

            <i class="uil uil-angle-down arrow" style="color: rgb(125, 34, 178);"></i>
          </div>

          <div class="skills-list grid">
            <div class="skills-data">
              <div class="skills-titles">
                <h3 class="skills-name">HTML</h3>
              </div>
            </div>

            <div class="skills-data">
              <div class="skills-titles">
                <h3 class="skills-name">CSS</h3>
              </div>
            </div>

            <div class="skills-data">
              <div class="skills-titles">
                <h3 class="skills-name">Javascript</h3>
              </div>
            </div>
          </div>
        </div>
        <!-- end skill 1 -->

        <!-- skill 2 -->

        <div class="skills-content skills-close">
          <div class="skills-header">
            <i class="uil uil-server-network skills-icon" style="color: rgb(125, 34, 178);"></i>
            <div>
              <h1 class="skills-title">Backend</h1>
              <span class="skills-subtitle"></span>
            </div>

            <i class="uil uil-angle-down arrow" style="color: rgb(125, 34, 178);"></i>
          </div>

          <div class="skills-list grid">
            <div class="skills-data">
              <div class="skills-titles">
                <h3 class="skills-name">PHP (Laravel)</h3>
              </div>
            </div>
            <div class="skills-data">
              <div class="skills-titles">
                <h3 class="skills-name">Android Studio</h3>
              </div>
            </div>
          </div>
        </div>

        <!-- end skill 2 -->

        <!-- skill 3 -->

        <div class="skills-content skills-close">
          <div class="skills-header">
            <i class="uil uil-swatchbook skills-icon" style="color: rgb(125, 34, 178);"></i>
            <div>
              <h1 class="skills-title">Others</h1>
              <span class="skills-subtitle"> </span>
            </div>

            <i class="uil uil-angle-down arrow" style="color: rgb(125, 34, 178);"></i>
          </div>

          <div class="skills-list grid">
            <div class="skills-data">
              <div class="skills-titles">
                <h3 class="skills-name">Microsoft Word</h3>
              </div>
            </div>

            <div class="skills-data">
              <div class="skills-titles">
                <h3 class="skills-name">Canva</h3>
              </div>
            </div>

            <div class="skills-data">
              <div class="skills-titles">
                <h3 class="skills-name">Microsoft Excel</h3>
              </div>
            </div>
          </div>
        </div>

        <!-- end skill 3 -->
      </div>
    </section>

    <section class="qualification section" id="qualification">
      <h2 class="section-title">My qualification</h2>
      <span class="section-subtitle">My personal experience</span>

      <div class="qualification-container container">
        <div class="qualification-tabs">
          <div class="qualification-button button--flex qualification-active" data-target="#education" style="color: rgb(125, 34, 178);">
            <i class="uil uil-graduation-cap qualification-icon" style="color: rgb(125, 34, 178);"></i>
            Education
          </div>
          <div class="qualification-button button--flex" data-target="#work" style="color: rgb(125, 34, 178);">
            <i class="uil uil-briefcase qualification-icon" style="color: rgb(125, 34, 178);"></i>
            Experiences
          </div>
        </div>

        <!-- qualification content -->
        <div class="qualification-sections">
          <!-- education -->
          <div class="qualification-content qualification-active" data-content id="education">
            <!-- data 1 -->
            <div class="qualification-data">
              <div>
                <h3 class="qualification-title">Student</h3>
                <span class="qualification-subtitle">SDN SOCAH 1</span>
                <div class="qualification-calendar">
                  <i class="uil uil-calendar-alt"></i>
                  2012 - 2018
                </div>
              </div>

              <div>
                <span class="qualification-rounder"></span>
                <span class="qualification-line"></span>
              </div>
            </div>
            <!-- data 2 -->
            <div class="qualification-data">
              <div></div>

              <div>
                <span class="qualification-rounder"></span>
                <span class="qualification-line"></span>
              </div>

              <div>
                <h3 class="qualification-title">Student</h3>
                <span class="qualification-subtitle">MTsN Bangkalan</span>
                <div class="qualification-calendar">
                  <i class="uil uil-calendar-alt"></i>
                  2018 - 2021
                </div>
              </div>
            </div>
            <!-- data 3 -->
            <div class="qualification-data">
              <div>
                <h3 class="qualification-title">Student</h3>
                <span class="qualification-subtitle">SMKN 2 BANGKALAN</span>
                <div class="qualification-calendar">
                  <i class="uil uil-calendar-alt"></i>
                  2021 - 2024
                </div>
              </div>

              <div>
                <span class="qualification-rounder"></span>
                <span class="qualification-line"></span>
              </div>
            </div>
            <!-- data 4 -->

          </div>

          <!-- work -->
          <div class="qualification-content" data-content id="work">
            <!-- data 1 -->
            <div class="qualification-data">
              <div>
                <h3 class="qualification-title">On The Job Training</h3>
                <span class="qualification-subtitle">Intership IT | PT. Adiluhung Saranasegara Indonesia</span>
                <div class="qualification-calendar">
                  <i class="uil uil-calendar-alt"></i>
                  Mei 2023 - Oktober 2023
                </div>
              </div>
              <div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="services section" id="services"></section> -->

    <section class="portofolio section" id="portofolio">
      <h2 class="section-title">Portfolio</h2>
      <span class="section-subtitle">Recent Works</span>

      <?php $data = mysqli_query($conn, "SELECT * FROM portofolio"); ?>

      <div class="portofolio-container container swiper mySwiper">
        <div class="swiper-wrapper">
          <!-- portofolio 1 -->
          <div class="grid">

            <div id="portfolio-container"></div>

            <script>
              // Ambil data dari API
              fetch('api.php')
                .then(response => response.json())
                .then(data => {
                  const portfolioContainer = document.getElementById('portfolio-container');

                  data.forEach(item => {
                    const portfolioItem = document.createElement('div');
                    portfolioItem.innerHTML = `
                        <img src="admin/berkas/${item.gambar}" alt="" class="portofolio-img" />
                        <div class="portofolio-data">
                            <h3 class="portofolio-title">${item.judul}</h3>
                            <p class="portofolio-desc">${item.deskripsi}</p>
                            <br>
                        </div>
                    `;
                    portfolioContainer.appendChild(portfolioItem);
                  });
                })
                .catch(error => console.error('Error:', error));
            </script>


          </div>



        </div>
    </section>

    <section class="contactme section" id="contact">
      <h3 class="section-title">Contact Me</h3>
      <span class="section-subtitle">Get in touch with me!</span>

      <div class="contact-container container grid">
        <div>
          <div class="contact-info">
            <i class="uil uil-phone-alt"></i>

            <div>
              <h3 class="contact-title">Call Me</h3>
              <span class="contact-subtitle">0895***</span>
            </div>
          </div>

          <div class="contact-info">
            <i class="uil uil-envelope"></i>

            <div>
              <h3 class="contact-title">Email Me</h3>
              <span class="contact-subtitle">haniputri456@gmail.com</span>
            </div>
          </div>

          <div class="contact-info">
            <i class="uil uil-map-marker"></i>

            <div>
              <h3 class="contact-title">Location</h3>
              <span class="contact-subtitle">Jl. Maritim, Bargan, Socah</span>
            </div>
          </div>
        </div>

        <form action="https://formsubmit.co/email.haniputri456@gmail.com" method="POST" class="contact-form grid">
          <!-- honeypot -->
          <input type="text" name="_honey" style="display: none" />
          <!-- remove captcha -->
          <input type="hidden" name="_captcha" value="false" />

          <input type="hidden" name="_next" value="https://github.com/inihani/20ha" />

          <div class="contact-inputs grid">
            <div class="contact-content">
              <label for="" class="contact-label">Name</label>
              <input type="text" name="name" id="" class="contact-input" required />
            </div>
            <div class="contact-content">
              <label for="" class="contact-label">Email</label>
              <input type="email" name="email" id="" class="contact-input" required />
            </div>
            <div class="contact-content">
              <label for="" class="contact-label">Phone Number</label>
              <input type="text" name="phone" id="" class="contact-input" required />
            </div>
            <div class="contact-content">
              <label for="" class="contact-label">Message</label>
              <textarea class="contact-input" name="message" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
              <button type="submit" class="button button--flex">
                Send Message
                <i class="uil uil-message button-icon"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>

    <footer class="footer">
      <div class="footer-bg">
        <div class="footer-container container grid">
          <div>
            <h1 class="footer-title">Hani Dwi Yulinda P</h1>
            <span class="footer-subtitle">Student</span>
          </div>

          <ul class="footer-links">
            <li>
              <a href="#about" class="footer-link">About</a>
            </li>
            <li>
              <a href="#portofolio" class="footer-link">Portofolio</a>
            </li>
            <li>
              <a href="#contact" class="footer-link">Contact Me</a>
            </li>
          </ul>

          <div class="footer-socials">
            <a target="_blank" href="https://github.com/inihani/20ha" class="footer-social">
              <i class="uil uil-github"></i>
            </a>
            <a target="_blank" href="https://instagram.com/hnnputt?igshid=MzRlODBiNWFlZA==" class="footer-social">
              <i class="uil uil-instagram"></i>
            </a>
          </div>
        </div>
        <p class="footer-copy">&#169; Hani Portofolio. All rights reserved</p>
      </div>
    </footer>

    <!-- ==== scroll to top ==== -->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="uil uil-arrow-up scrollup-icon"></i>
    </a>
  </main>

  <script src="./swiper-bundle.min.js
    "></script>
  <script src="./main.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
</body>

</html>