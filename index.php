<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/upload.css">
        <link rel="stylesheet" href="forms/forms/style.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xyz" crossorigin="anonymous" />


        <title>Lowela Relacion's Portfolio</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Lowela<span>.</span></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <!-- <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li> -->
                        <li class="nav__item"><a href="#work" class="nav__link">Projects</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title"><br>I'am <span class="home__title-color">Lowela</span><br>a  Web Designer</h1>
                    <!-- <p class="about__me">Transforming ideas into reality through creative and user-centric web development.</p> -->
                    <a href="#" class="button">Get in Touch</a>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="50" y="60" href="assets/img/lala1.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/4.jpg" alt="">
                    </div>
                    
                    <div class="about-col-2">
                        <h2 class="about__subtitle">About Me</h2>
                        <p class="about__text">I am Lowela D. Relacion a third year college student of University of Mindanao Digos College taking up a course of Bachelor of Science in Information Technology.</p>  
                        <p class="about__me">Date of birth: <span> January 06,2003</span></p>
                        <p class="about__me">Address: <span> Purok Maabi-abihion, Tres De Mayo, Digos City</span></p>
                        <p class="about__me">Email: <span> relacionlala01@gmail.com</span></p>
                        <p class="about__me">Phone: <span> 0995-355-4653</span></p>
                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                            <p class="tab-links" onclick="opentab('experience')">Experience</p>
                            <p class="tab-links" onclick="opentab('education')">Education</p>
                            <p class="tab-links" onclick="opentab('seminar')">Seminar</p>
                            <p class="tab-links" onclick="opentab('certification')">Certifications</p>
                        </div> 
                        <div class="tab-contents active-tab" id="skills">
                            <ul>
                                <div class="skills__data">
                                    <div class="skills__names">
                                        <i class='bx bxl-html5 skills__icon'></i>
                                        <span class="skills__name">JAVA</span>
                                    </div>
    
                                    <div class="skills__bar skills__java"></div>
    
                                    <div>
                                        <span class="skills__percentage">40%</span>
                                    </div>
                                </div><br>
    
                                <div class="skills__data">
                                    <div class="skills__names">
                                        <i class='bx bxl-html5 skills__icon'></i>
                                        <span class="skills__name">PHP</span>
                                    </div>
    
                                    <div class="skills__bar skills__php"></div>
    
                                    <div>
                                        <span class="skills__percentage">35%</span>
                                    </div>
                                </div><br>
    
                                <div class="skills__data">
                                    <div class="skills__names">
                                        <i class='bx bxl-html5 skills__icon'></i>
                                        <span class="skills__name">CSS</span>
                                    </div>
    
                                    <div class="skills__bar skills__css"></div>
    
                                    <div>
                                        <span class="skills__percentage">40%</span>
                                    </div>
                                </div><br>
    
                                <div class="skills__data">
                                    <div class="skills__names">
                                        <i class='bx bxl-html5 skills__icon'></i>
                                        <span class="skills__name">HTML</span>
                                    </div>
    
                                    <div class="skills__bar skills__html"></div>
    
                                    <div>
                                        <span class="skills__percentage">30%</span>
                                    </div>
                                </div><br>
    
        
                            </ul>
                        </div>  
                        <div class="tab-contents" id="experience">
                            <ul>
                                <li><span>Design and Multimedia Tools</span><br>Canva, Figma, Adobe Photoshop</li>
                                <li><span>Web Development</span><br>Designing Web Interface</li>
                                <li><span>App Development</span><br>Designing App Interface</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>2021-Present</span><br>Bachelor of Science in Information Technology<br>University of Mindanao Digos College</li>
                               
                            </ul>
                        </div>
                        <div class="tab-contents" id="seminar">
                            <ul>
                                <li><span>2024</span><br>DEVCON<br>Davao Tech Dialoques</li>
                               
                            </ul>
                        </div>
                        <div class="tab-contents" id="certification">
                            <ul>
                                <li><span>2023</span><br>CommTECH Nusantara Virtual Exploration of Indonesia</li>
                               
                            </ul>
                        </div>
                    </div>  
                         
                </div>
            </section>


            <!--===== PROJECTS =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Projects</h2>
                <div class="work__container bd-grid" id="workContainer">
                    <a href="https://github.com/lowelarelacion/lowelarelacion.github.io" class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                            <div class="layer">
                                <h3>Student Voting System</h3>
                                <p>Voting system is a software platform that allows groups to securely conduct votes and elections.</p>
                            </div>
                    </a>
                    <a href="https://github.com/lowelarelacion/lowelarelacion.github.io" class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                        <div class="layer">
                            <h3>UM EquipSync</h3>
                            <p>Facilities Equipment Reservation and Monitoring System for UM Digos College</p>
                        </div>
                    </a>
                    <!-- Other existing project items -->
                    <div class="work__img upload__img">
                        <input type="file" id="fileUpload" style="display: none;" />
                        <label for="fileUpload" class="upload__label">
                            <i class="fas fa-plus"></i>
                            <span>Upload Project</span>
                        </label>
                    </div>
                    
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="" class="contact__form">
                        <input type="text" placeholder="Name" class="contact__input">
                        <input type="mail" placeholder="Email" class="contact__input">
                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <input type="button" value="Submit" class="contact__button button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Lowela</p>
            <div class="footer__social">
                <a href="https://web.facebook.com/lala.relacion.1" class="footer__icon"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/lowslrlcn/" class="footer__icon"><i class='bx bxl-instagram'></i></a>
                <a href="https://twitter.com/yourprofile" class="footer__icon"><i class='bx bxl-twitter'></i></a>
            </div>
            <p class="footer__copy">&#169; lowlscode. All rights reserved</p>
        </footer>
        


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/upload.js"></script>


    </body>
</html>
