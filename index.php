<!DOCTYPE html>
<!-- Created By Raj -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Port<span>folio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="http://localhost/login-register/logout.php" class="menu-btn">Logout</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Raj Singh</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="https://www.linkedin.com/in/raj-singh-aa680b248">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Raj and I'm a <span class="typing-2"></span></div>
                    <p>Hi, I'm a web developer and I'm currently pursuing my Bachelor's degree in Computer Science from Saraswati College of Engineering, Kharghar.<br> I like to learn new technologies.</p>
                    <a href="http://localhost/portfolio-website/insert.php">My Resume</a>
                </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <img src="images/log.svg">
                    
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Java</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C++</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
    </section>
    

     <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Raj Singh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Mumbai, India</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">raj4445567@gmail.com</div>
                            </div>
                        </div>
                     </div>
                     <div class="social-media">
                        <a href="https://twitter.com/singhraj_17" class="social-icon">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://github.com/Raj-Singh-17" class="social-icon">
                          <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/raj-singh-aa680b248" class="social-icon">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </div>
                </div>
               
                <div class="column right">
                    <div class="text">Message me</div>
                    <form id="myForm">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" id="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" id="message" placeholder="Message" required></textarea>
                        </div>
                        <div class="button-area">
                            <button>Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">Raj</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
