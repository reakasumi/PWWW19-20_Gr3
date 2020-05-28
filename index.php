<!DOCTYPE html>
<html>

<head>
    <title>Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/homePage.css">

    <!-- <script src="js/nightMode.js"></script> -->
    <!-- <script src="js/script.js"></script> -->

</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="navigation">
            <nav>
                <div class="header-text">
                    <span class="composition-text">
                        Travel
                    </span>

                    <span class="left-text">
                        Dare to live outside your box!
                    </span>
                </div>
                <i class="fa fa-bars menu-toggle"></i>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="about.html" target="_self">ABOUT</a></li>
                    <li><a href="blog.html" target="_self">BLOG</a></li>
                    <li class="dropdown">
                        <a href="#" target="_self">PLACES</a>
                        <div class="dropdown-content">

                            <div class="row">
                                <div class="column">
                                    <form action="places.php">
                                        <p>
                                            <label class="just-text">Where do you want to go?</label>
                                            <br>
                                            <input list="browsers" class="inputStyle_1" name="browser"
                                                placeholder="Search.." id="myInput"
                                                style=" background-image: url('images/search.png');">
                                            <datalist id="browsers">
                                                <option value="New York">
                                                <option value="Berlin">
                                                <option value="Paris">
                                            </datalist>
                                        </p>
                                        <p class="inline">
                                            <label class="just-text">Check in</label><br>
                                            <input class="inputStyle_2" type="date" id="myDate1" name="dateStart">
                                        </p>
                                        <p class="inline">
                                            <label class="just-text">Check out</label><br>
                                            <input class="inputStyle_2" type="date" id="myDate2" name="dateEnd">
                                        </p>
                                        <p>
                                            <label class="just-text">Guests</label><br>
                                            <input type="number" class="inputStyle_1" placeholder="How many.." min="1"
                                                max="30" step="1" id="myInput2" name="guests">
                                        </p>

                                        <input type="submit" name="search" id="button1" value="SEARCH">

                                    </form>


                                </div>



                            </div>

                    </li>

                    <li> <?php
                         //include_once('login.php');
                          if(isset($_COOKIE["type4"] )){  
                             
                             echo("<a href='logout.php' target='_self' > LOG OUT");
                           }
                           else{
                               echo("<a href='logIn.html' target='_self' > LOG IN");
                           }?></a></li>

                </ul>
            </nav>
        </div>
    </header>


    <!-- BODY -->

    <p class="centered-text-style">
        “ It is not the destination where you end up but the mishaps and memories you create along the way „ ~ Penelope
        Riley
    </p>
    <!-- Slider 1 -->
    <!-- <section id="slider"> -->
    <div class="slider" style="position: relative; margin: auto; width: 75%;" id="slider">
        <!-- Slideshow container -->
        <!-- <div class="slideshow-container"> -->

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="images/slideshow/JF7_101564.jpg" alt="Visitors enjoying the sunset" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/people-men-women-friends.jpg" alt="" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/person-on-mountain-top.jpg" alt="A person hiking!!" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/Sunset_in_the_Old_Town_-_Bucharest,_Romania_-_Travel_photography_(35031271856).jpg"
                alt="Sunset in Bucharest!!" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/through-the-lens.jpg" alt="A photography" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/traveling-people-airport-bridge.jpg" alt="People traveling" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        <a class="next" onclick="plusSlides(1)"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <!-- </div> -->
    </div>

    <article>
        <section class="services">
            <h4 class="redbox">OUR SERVICES</h4>
            <div>
                <img src="images/world-icon.PNG" alt="icon" width="30" height="30">
                <h3 id="title1"></h3>
                <p id="title_text1"></p>
                <details class="reddetails">
                    <summary><a class="article" href="https://www.bublup.com/go/travel/?gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyK-Tc4TcCkCWCXvjdn4VkljsKLULuB1auja3yYF9_ncUV1kddog8ZwaAoHzEALw_wcB"
                        >Read more</summary>
                </details>
            </div>
            <div>
                <img src="images/persons-icon.PNG" alt="icon" width="30" height="30">
                <h3 id="title2"></h3>
                <p id="title_text2"></p>
                <details class="reddetails">
                    <summary><a class="article" href="https://cultureisking.net/home/backpackers-guide-to-switzerland"
                        >Read more</summary>
                </details>
            </div>
            <div>
                <img src="images/settings-icon.PNG" alt="icon" width="30" height="30">
                <h3 id="title3"></h3>
                <p id="title_text3"></p>
                <details class="reddetails">
                    <summary><a class="article" href="https://www.globalcitizenyear.org/?utm_source=google&utm_medium=grant&utm_campaign=NonBrandGeneral&utm_content=places%20to%20travel&gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyJRwTzzExsongzw8YNKR__2M_yzZvv4-KCpc82uMk3k2GcLUCpjBUcaAsAeEALw_wcB"
                    >Read more</summary>
                </details>
            </div>

        </section>


        <section class="players">
            <h4 style="top:13px" class="redbox">OUR PLAYERS</h4>

            <figure>
                <img src="images/people/people1.jpg" alt="photo" width="175" height="175">
                <figcaption>
                  <h4 >Name:  <span id="name1" style="font-weight: lighter;">  </span></h4>
                    <p id="text_person1"></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people2.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <h4 >Name:  <span id="name2" style="font-weight: lighter;">  </span></h4>
                    <p id="text_person2"></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people3.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <h4 >Name:  <span id="name3" style="font-weight: lighter;">  </span></h4>
                    <p id="text_person3"></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people4.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <h4 >Name:  <span id="name4" style="font-weight: lighter;">  </span></h4>
                    <p id="text_person4"></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people5.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <h4 >Name:  <span id="name5" style="font-weight: lighter;">  </span></h4>
                    <p id="text_person5"></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

        </section>


        <section class="work">
            <h4 class="redbox">PLACES</h4>

            <img src="images/newyork.jpg" alt="image" width="300px" height="160px">
            <img src="images/berlin.jpg" alt="image" width="300px" height="160px">
            <img src="images/paris.jpg" alt="image" width="300px" height="160px">
        </section>

    </article>




    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section blog">
                    <h2>Latest From The Blog</h2>
                    <a href="blog.html" target="_blank">
                        <img src="images/cities/Thailand-Wat-Arun-Buddhist-temple-in-Bangkok-Yai-district-of-Bangkok-Wallpaper-Hd-For-Desktop-Mobile-And-Tablet-3840x2400-915x515.jpg"
                            alt="Thailand landscape" width="110px" height="110px">
                        <h4>Thailand - the most visited country</h4>
                        <p><span style="overflow-x: auto;">Due to researches made by statistical results Bangkok,
                                Thailand is one of the most visited cities of 2019. People chose to go there because of
                                its beautiful...</span></p>
                    </a>

                    <a href="blog.html" style="float: left; margin-top: 25px;" target="_blank">
                        <img src="images/vanGogh/Vincent_van_Gogh_-_Self-portrait_with_grey_felt_hat_-_Google_Art_Project.jpg"
                            alt="Van Gogh" width="110px" height="110px">

                        <h4>The art of Vincent van Gogh</h4>
                        <p><span style="overflow-x: auto;">Vincent Willem van Gogh the Dutch post-impressionist painter
                                who is among the most famous and influential figures in the history of Western art. The
                                Starry Night by him is one of the most known picture...</span></p>
                    </a>
                </div>

                <div class="footer-section details">
                    <h2>Company Details</h2>
                    <ul>
                        <li>Travel</li>
                        <li>
                            <address>N&#xeb;n&#xeb; Tereza, 105</address>
                        </li>
                        <li>Prishtin&#xeb;</li>
                        <li>10000</li>
                        <br>
                        <li>Tel:+383 44 129512</li>
                        <li>Fax: 029 3458487617</li>
                        <li>Email: <a href="mailto:contact@mydomain.com">travel@tr-pr.com</a></li>
                        <br>
                        <li>Office hours</li>
                        <li>Monday 08:00~16:00</li>
                        <li>Saturday 10:00~16:00</li>
                    </ul>
                </div>

                <div class="footer-section contact-form">
                    <h2>Contact Us</h2>
                    <form action="" method="post" id="contact">
                        <input type="text" placeholder="Name" name="inputType1"><br>
                        <input type="email" placeholder="Email" name="inputType1" required><br>
                        <textarea placeholder="Message"></textarea><br>
                        <input type="submit" form="contact" value="SUBMIT">
                    </form>
                </div>
            </div>
            <!-- <hr> -->
            <div class="footer-bottom">
                <p id="copy">Copyright &copy; 2019 - All rights reserved</p>
                <p id="template">Travel Company</p>
            </div>

        </div>

        <!-- <audio id="audio1" controls>
            <source id="audio2" src="audio/Haydn_Cello_Concerto_D-1.mp3" type="audio/mpeg">
            </audio> -->





    </footer>
    <!-- //footer -->


    <!-- Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Script -->
    <!-- <script src="js/script.js"></script> -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- <script src="js/header.js"></script> -->
    <!-- <script src="js/newyork.js"></script> -->
    <!-- <script type="text/javascript" src="js/signUp.js"></script> -->
    <script type="text/javascript">
       
        // var num = 5.56789;
        // var n = num.toExponential();

        function Person(first, last, desc) {
            this.firstname = first;
            this.lastname = last;
            this.descVal = desc;
        }

        function TitleText(title, titleText) {
            this.titleVal = title;
            this.titleTextVal = titleText;

        }




        var person1 = new Person("Tyler", "Cammack", "Dr Cammack is a French trained General Practice Family Doctor. He graduated in 1991 from Toulouse Rangueil University.");
        var person2 = new Person("Brice", "Jeremiah", "Brice Jeremiah is a German lover of travelling and a honorable student.He graduated in 1998 from Berlin University.");
        var person3 = new Person("Josefina", "Dobson", "Josefina has a master degree and a whole lot of experiences into travelling.She graduated in 1999 from Berlin University.");
        var person4 = new Person("Nancy", "Brumfield", "Mr.Brumfield is an American who has trained and studied hotelerism.She graduated in 2005 from Moscow University");
        var person5 = new Person("Jennie", "Barkley", "Jennie Barkley is a web developer has bachelor and master degree on Computer Science, San Francisco University of Technology.");

        var t_text1 = new TitleText("Plan your travel", "The most wonderful places"
            + " you can visit are displayed in our website.By breaking the country into smaller, more manageable areas, the site aims to create a virtual travel experience that allows the user to explore.");
        var t_text2 = new TitleText("Blog", "Activites and art works. See the rating of" + " people who visited the places before you and their thoughts on different experiences. This straightforward navigation setup makes it easy for users to access the information they need.");
        var t_text3 = new TitleText("Reservation", "Pick the best place to stay during" +
            " your travel. Also find other activities, organizations and participate or voulenteer to help others as long as you stay in touch with the world, you learn more about cultures.");


        document.getElementById("name1").innerHTML = person1.firstname +
            " " + person1.lastname;
        document.getElementById("name2").innerHTML = person2.firstname +
            " " + person2.lastname;
        document.getElementById("name3").innerHTML = person3.firstname +
            " " + person3.lastname;
        document.getElementById("name4").innerHTML = person4.firstname +
            " " + person4.lastname;
        document.getElementById("name5").innerHTML = person5.firstname +
            " " + person5.lastname;

        document.getElementById("text_person1").innerHTML = person1.descVal;
        document.getElementById("text_person2").innerHTML = person2.descVal;
        document.getElementById("text_person3").innerHTML = person3.descVal;
        document.getElementById("text_person4").innerHTML = person4.descVal;
        document.getElementById("text_person5").innerHTML = person5.descVal;

        document.getElementById("title1").innerHTML = t_text1.titleVal;
        document.getElementById("title2").innerHTML = t_text2.titleVal;
        document.getElementById("title3").innerHTML = t_text3.titleVal;
        document.getElementById("title_text1").innerHTML = t_text1.titleTextVal;
        document.getElementById("title_text2").innerHTML = t_text2.titleTextVal;
        document.getElementById("title_text3").innerHTML = t_text3.titleTextVal;

        try {
            document.getElementById("demo").innerHTML = localStorage.getItem("pass_word");

            if (document.getElementById("demo") == "") throw "is Empty";
            if (isNaN(document.getElementById("demo"))) throw "not a number";
            if (document.getElementById("demo") == "null") throw "is Null";
            if (document.getElementById("demo") == undefined) throw "undefined";
        }
        catch (e) {
            console.warn("Error thrown:\n" + e + " !")
        }

    </script>

</body>

</html>