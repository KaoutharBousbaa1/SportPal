<!DOCTYPE HTML>
<HTML>
    <head>
        <title>Homepage</title>
        <link rel = "stylesheet" href = "Homepage.css"/>
    <script src = "homepage.js" defer></script>
    </head>
    <body>
        <header>
            <div id="main_title">
                <img src = "logo.png" id="logo" />
            </div>
            <nav>
                <ul>
                    <li><a href="Homepage.php" class = "home">HOME</a></li>
                    <li><a href="Signin.php" class = "Signin">SIGN IN</a></li>
                    <li><a href="Signup.php" class = "signup">SIGN UP</a></li>
                    <li><a href="Homepage.php#write" class = "contact">CONTACT</a></li>
                </ul>
            </nav> 
        </header>
        <body>
                <section class = "firstsection">
                    <div class = "firstsection1">
                        <h1 class = "titre">Together, We go Further</h1>
                        <p style = "font-family: Avenir; letter-spacing: 0.5px; margin-top: 80px; line-height: 0.6cm;">
                            The best way to find your sport buddies. 
                            SportPAL is a sport matching app that connects you to sport partners with your level 
                            and in your area. Find your buddy now !<br/><br/>
                            <a href = "Signin.php" id = "getstart">
                                Get Started
                            </a>
                        </p>
                    </div>
                    <div class = "firstsection2">
                        <image src = "getstartedpic.png" id = "getstartedpic">
                        <img src = "getstartedrunning.png" id = "getstartedrunning"/>
                        </image>
                    </div>
                </section>
                <section class = "secondsection">
                    <h2>The process we follow</h2>
                    <p>
                        Using our web application, you will be going 
                        through this development cycle 
                    </p> 
                    <table>
                        <tr>
                            <td>
                                <image src = "register.png" id = "register"></image><br/>
                                <span>Create your profile</span> 
                            </td>
                            <td class = "joinning">
                                <image src = "joinning.png" id = "joinning"></image><br/>
                                <span>Create or join a team</span>
                            </td>
                            <td>                          
                                <image src = "schedule.png" id = "schedule"></image><br/>
                                <span>Schedule time slots</span>
                            </td>
                        </tr>
                    </table>
                </section>
                <section class = "thirdsection">
                    <h2>Services we provide</h2>
                    <p>
                        We aim to bring people together through sport activities and make<br/> 
                        it more easier and fun to coloaborate with other people<br/>
                        with the same sport activities
                    </p>
                    <br/><br/>
                    <table>
                        <tr>
                            <td id = "service1">
                                Search and find your nearby<br/>sport partners to join you
                            </td>
                            <td id = "service2">
                                Create your sport teams or <br/>join people  at your local area
                            </td>
                            <td id = "service3">
                                Schedule your favourite <br/>sport activites
                            </td>
                        </tr>
                        <tr>
                            <td id = "service4">
                                Get notified
                            </td>
                            <td id = "service5">
                                Chat with other people 
                            </td>
                            <td id = "service6">
                                Post about your healthy habits <br/>and get inspired by other people
                            </td>
                        </tr>
                    </table> 
                </section> 
        </body>
        <footer>
            <table>
                <tr>
                        <td>
                            <div class = "cont">
                                <label>Contact Us  &nbsp;</label>
                                <input type = "email" id = "email" placeholder = "example@email.com" size="30" maxlength="10"/>
                            </div> 
                        <td>
                        <td>
                            <a href="mailto:kaouthar.bousbaa@um6p.ma">
                                <div class = "flesh">
                                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                                        <polyline points="8 1 12 5 8 9"></polyline>
                                    </svg>
                                </div>
                            </a>
                        </td>
                        <td id ="write" style = "line-height: 0.6cm;">
                            <strong style = "font-family: Poppins;">Write</strong><br/>
                            <front style = "font-family: Avenir;">Kaouthar.bousbaa@um6p.ma</front>
                        </td>
                </tr>
            </table>
        </footer>
    </body>
</HTML>