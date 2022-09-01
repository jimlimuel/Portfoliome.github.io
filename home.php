

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal portfolio</title>
    <link rel="icon" href ="images/about-icon-1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Hi  <span>There !</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
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
                <div class="text-2">Jim Limuel Manlangit</div>
                <div class="text-3">And I am a <span class="typing"></span></div>
                <a href="https://join.skype.com/vL64lVyScfbJ" target= "_blank">Let's Connect </a>
            </div>
        </div>
    </section>


     <!-- about section start -->
     <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/me.2018.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I am a <span class="typing-2"></span></div>
                    <p> Hi there ! Im Jim Limuel Manlangit, and I am an aspiring Web and Software Developer. I graduated in Batangas State University last August 15, 2022. I have a Bachelors 
                        degree in Information Technology major in Business Analytics. A pixel-perfect design and clean code are my specialties. I also add web animations to make the website more interactive.
                        All users can access your website regardless of their device with a responsive design.<p>
                        <a href="download.php?path=CV.pdf">Download CV</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>Design is not what it looks like & feels like. Design is how it works. -Steve jobs</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>Marketing is not a function, it is the whole Business seen from the customer's point of view.
                            -Peter F. Drucker
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Creativity is Intelligence having Fun 
                            -Alber Einstein
                        </p>
                    </div>
                </div>
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
                    <div class="text">My great Experience and Skills.</div>
                    <p>I never stop learning new things. Creating a project is really an opportunity for me to grow more.
                    </p>
                    <a href = "images/certificate.png" alt="">Click certificate</a>
                    
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>75%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>75%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>60%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>60%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>60%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- teams section start -->
   <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Developing Project</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <a href = "images/project1.jpg"><img src="images/project1.jpg" alt=""></a>
                        <div class="text">Technology Advertisement</div>
                        <p>Creating a Better Future with Technology.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href = "images/project2.jpg"><img src="images/project2.jpg" alt=""></a>
                        <div class="text">Coffee Shop</div>
                        <p>Let's have a cup of coffee.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href = "images/project3.png"><img src="images/project3.png" alt=""></a>
                        <div class="text">Travel Booking </div>
                        <p>Travel the most beautiful places in the world.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href = "images/project6.png"><img src="images/project6.png" alt=""></a>
                        <div class="text">Online Grocery Store</div>
                        <p>Buy your Groceries online.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href = "images/Coffee shop2.png"><img src="images/Coffee shop2.png" alt=""></a>
                        <div class="text"></div>
                        <p>Morning coffee is the best.</p>
                    </div>
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
                    <div class="text">Get in Touch</div>
                    <p>Let's have a cup of coffee :)</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Jim Limuel Manlangit</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Santiago Malvar Batangas</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">jimlimuelmanlangit@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.074134927685!2d121.16430800225916!3d14.013618418750253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6eae8c67ed1d%3A0x23b90b5f047c05e9!2s382%20President%20Jose%20P.%20Laurel%20Hwy%2C%20Malvar%2C%20Batangas!5e0!3m2!1sen!2sph!4v1661968791207!5m2!1sen!2sph" 
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="text">Hire me :)</div>

           

                        <form action="userinformation.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="user"placeholder="Name" required></div>
                            <div class="field email">
                                <input type="email" name="email"placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="number"placeholder="Contact" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="message" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit" value="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    
    <footer
    div class="box-container">

<div class="box">
    <h3>quick links</h3>
    <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
    <a href="#about"> <i class="fas fa-arrow-right"></i> about </a>
    <a href="#services"> <i class="fas fa-arrow-right"></i> services </a>
    <a href="#skills"> <i class="fas fa-arrow-right"></i> skills </a>
    <a href="#teams"> <i class="fas fa-arrow-right"></i> projects </a>
</div>

<div class="box">
    <h3>contact info</h3>
    <a href="#"> <i class="fas fa-phone"></i> 09976477759 </a>
    <a href="https://mail.google.com/mail/u/0/#inbox" target ="_blank"> <i class="fas fa-envelope"></i> jimlimuelmanlangit@gmail.com </a>
    <a href="https://goo.gl/maps/RZF3fgdpSfSQ4VYb7" target="_blank"> <i class="fas fa-map"></i>Malvar, Batangas - 4233 </a>
</div>

<div class="box">
    <h3>contact info</h3>
    <a href="https://www.facebook.com/StifManLangit" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
    
    <a href="https://twitter.com/ZxnyJimboo" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
    <a href="https://www.instagram.com/stifmanlangit/" targert="_blank"> <i class="fab fa-instagram"></i> instagram </a>
</div>

</div
        span>Created By Jim Limuel Manlangit <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>

