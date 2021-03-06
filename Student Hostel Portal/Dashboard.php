<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h3,
        h6 {
            font-family: "Raleway", Arial, sans-serif
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        h1 {
            letter-spacing: 6px
        }


        .w3-row-padding img {
            margin-bottom: 12px
        }

    </style>
</head>

<body>

    <!-- !PAGE CONTENT! -->
    <div class="w3-content" style="max-width:1100px">

        <!-- Header -->
        <header class="w3-panel w3-center w3-opacity" style="padding:50px 16px">
            <h1 class="w3-xlarge">Student Hostel Portal</h1>
            <h1>CIBT</h1>
            <div class="w3-padding-32">
                <div class="w3-bar w3-border">
                    <a href="Home.html" class="w3-bar-item w3-button">Home</a>
                    <a href="index.html" class="w3-bar-item w3-button ">Hostel</a>
                    <a href="Student.html" class="w3-bar-item w3-button">Students</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small">Contact</a>
                </div>
            </div>
        </header>

        <h3>Welcome To Student Hostel Portal</h3>

        <!-- Page Container -->
        <form action="/Dashboard.php" method="post" enctype="multipart/form-data"></form>
        <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
            <!-- The Grid -->
            <div class="w3-row">
                <!-- Left Column -->
                <div class="w3-col m3">
                    <!-- Profile -->
                    <div class="w3-card w3-round w3-light-gray">
                        <div class="w3-container">
                            <h4 class="w3-center">My Profile</h4>
                            <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                            <hr>
                            <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Wireko Philip</p>
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> L400, Computer Science</p>
                            <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1998</p>
                        </div>
                    </div>
                    <br>

                    <!-- Accordion -->
                    <div class="w3-card w3-round">
                        <div class="w3-white">
                            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-globe fa-fw w3-margin-right"></i> My Groups</button>
                            <div id="Demo1" class="w3-hide w3-container">
                                <p>Some text..</p>
                            </div>
                            <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-user fa-fw w3-margin-right"></i> My Events</button>
                            <div id="Demo2" class="w3-hide w3-container">
                                <p>Some other text..</p>
                            </div>
                            <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-envelope fa-fw w3-margin-right"></i> My Photos</button>
                            <div id="Demo3" class="w3-hide w3-container">
                                <div class="w3-row-padding">
                                    <br>
                                    <div class="w3-half">
                                        <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                    <div class="w3-half">
                                        <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <!-- Interests -->
                    <div class="w3-card w3-round w3-light-gray w3-hide-small">
                        <div class="w3-container">
                            <p>Interests</p>
                            <p>
                                <span class="w3-tag w3-small w3-theme-d5">News</span>
                                <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
                                <span class="w3-tag w3-small w3-theme-d3">Labels</span>
                                <span class="w3-tag w3-small w3-theme-d2">Games</span>
                                <span class="w3-tag w3-small w3-theme-d1">Friends</span>
                                <span class="w3-tag w3-small w3-theme">Games</span>
                                <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                                <span class="w3-tag w3-small w3-theme-l2">Food</span>
                                <span class="w3-tag w3-small w3-theme-l3">Design</span>
                                <span class="w3-tag w3-small w3-theme-l4">Art</span>
                                <span class="w3-tag w3-small w3-theme-l5">Photos</span>
                            </p>
                        </div>
                    </div>
                    <br>

                    <!-- Alert Box -->
                    <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
                        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
                            <i class="fa fa-remove"></i>
                        </span>
                        <p><strong>Hey!</strong></p>
                        <p>People are looking at your profile. Find out who.</p>
                    </div>

                    <!-- End Left Column -->
                </div>

                <!-- Middle Column -->
                <div class="w3-col m7">

                    <div class="w3-row-padding">
                        <div class="w3-col m12">
                            <div class="w3-card w3-round w3-light-gray">
                                <div class="w3-container w3-padding">
                                    <h6 class="w3-opacity">Dashboard</h6>
                                    <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
                                    <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i> ??Post</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w3-container w3-card w3-light-gray w3-round w3-margin"><br>
                        <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                        <span class="w3-right w3-opacity">1 min</span>
                        <h4>John Doe</h4><br>
                        <hr class="w3-clear">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat.</p>
                        <div class="w3-row-padding" style="margin:0 -16px">
                            <div class="w3-half">
                                <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                            </div>
                        </div>
                        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>
                            ??Like</button>
                        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>
                            ??Comment</button>
                    </div>

                    <div class="w3-container w3-card w3-light-gray w3-round w3-margin"><br>
                        <img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                        <span class="w3-right w3-opacity">16 min</span>
                        <h4>Jane Doe</h4><br>
                        <hr class="w3-clear">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat.</p>
                        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>
                            ??Like</button>
                        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>
                            ??Comment</button>
                    </div>

                    <div class="w3-container w3-card w3-light-gray w3-round w3-margin"><br>
                        <img src="/w3images/avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                        <span class="w3-right w3-opacity">32 min</span>
                        <h4>Angie Jane</h4><br>
                        <hr class="w3-clear">
                        <p>Have you seen this?</p>
                        <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                            ea commodo consequat.</p>
                        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>
                            ??Like</button>
                        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>
                            ??Comment</button>
                    </div>

                    <!-- End Middle Column -->
                </div>

                <!-- Right Column -->
                <div class="w3-col m2">
                    <div class="w3-card w3-round w3-light-gray w3-center">
                        <div class="w3-container">
                            <p>Upcoming Events:</p>
                            <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
                            <p><strong>Holiday</strong></p>
                            <p>Friday 15:00</p>
                            <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card w3-round w3-light-gray w3-center">
                        <div class="w3-container">
                            <p>Friend Request</p>
                            <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
                            <span>Jane Doe</span>
                            <div class="w3-row w3-opacity">
                                <div class="w3-half">
                                    <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
                                </div>
                                <div class="w3-half">
                                    <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card w3-round w3-light-gray w3-padding-16 w3-center">
                        <p>ADS</p>
                    </div>
                    <br>

                    <div class="w3-card w3-round w3-light-gray w3-padding-32 w3-center">
                        <p><i class="fa fa-bug w3-xxlarge"></i></p>
                    </div>

                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>







        <!-- End Page Content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </footer>

</body>

</html>
