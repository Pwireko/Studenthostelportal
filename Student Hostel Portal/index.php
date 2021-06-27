<!DOCTYPE html>
<html>
<title>Student Hostel Portal-Hostel</title>
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

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #ffbf00;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
        background-color: #0e4d92;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* The Modal (background) */
    .modal2 {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal2-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes animatezoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }

</style>


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
                    <a href="index.html" class="w3-bar-item w3-button w3-amber">Hostel</a>
                    <a href="Student.html" class="w3-bar-item w3-button">Students</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small">Contact</a>
                </div>
            </div>
        </header>




        <!-- Good offers -->
        <div class="w3-container w3-margin-top">
            <h3> Popular Locations</h3>
            <h6> Available <strong>Discounts</strong> for returning Clients.</h6>
        </div>
        <div class="w3-row-padding w3-text-white w3-large">
            <div class="w3-half w3-margin-bottom">
                <div class="w3-display-container">
                    <img src="/Assets/Adabraka.jpg" alt="Cinque Terre" style="width:100%">
                    <span class="w3-display-bottomleft w3-padding">Adabraka</span>
                </div>
            </div>
            <div class="w3-half">
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half w3-margin-bottom">
                        <div class="w3-display-container">
                            <img src="/Assets/oxford-street-osu.jpg" alt="New York" style="width:100%">
                            <span class="w3-display-bottomleft w3-padding">Osu</span>
                        </div>
                    </div>
                    <div class="w3-half w3-margin-bottom">
                        <div class="w3-display-container">
                            <img src="/Assets/2.jpg" alt="San Francisco" style="width:100%">
                            <span class="w3-display-bottomleft w3-padding">Kokomlemle</span>
                        </div>
                    </div>
                </div>
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half w3-margin-bottom">
                        <div class="w3-display-container">
                            <img src="/Assets/3.jpg" alt="Pisa" style="width:100%">
                            <span class="w3-display-bottomleft w3-padding">Caprice</span>
                        </div>
                    </div>
                    <div class="w3-half w3-margin-bottom">
                        <div class="w3-display-container">
                            <img src="/Assets/4.jpg" alt="Paris" style="width:100%">
                            <span class="w3-display-bottomleft w3-padding">Ridge</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Photo Grid -->
        <div class="w3-row-padding w3-grayscale" style="margin-bottom:128px">
            <div class="w3-center w3-padding-64">
                <span class="w3-xlarge w3-border-dark-grey w3-padding-16">What We Offer</span>
            </div>
            <div class="w3-col l3 m6 w3-light-gray w3-container w3-padding-16">
                <h3>Accessibility</h3>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            </div>

            <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
                <h3>Security</h3>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            </div>

            <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
                <h3>Consultation</h3>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            </div>

            <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
                <h3>Value</h3>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            </div>
        </div>


        <div class="w3-center w3-padding-32">
            <span class="w3-xlarge w3-border-dark-grey w3-padding-16">Are You A Hostel Manager?</span><br>
            <p>Owners/providers of accommodation, upon registration on the student hostel platform, would be gaining
                access to an untapped market,<br>whereby finding clients is a much easier process. Hostel
                owners/managers also gain access to a plethora of management tools to operate even more
                efficiently.<br><strong>To Get Started, click the Button below.</strong></p><br>

            <!--Login-->
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="w3-amber" src="#">Login</button>
            <div id="id01" class="modal">

                <label for="uname"><b>Name</b></label>
                <form class="modal-content animate" action="/LoginprocessH.php" method="POST" enctype="multipart/form-data">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="container">
                        <h1>Hostel Owner Login</h1>
                        <p>Please fill in this form gain access to your account.</p>
                        <hr>
                        <label for="pnum"><b>Phone number</b></label>
                        <input type="text" placeholder="Enter Number" name="Pnumber" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="Password" required>

                        <button type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

            </script>
            <!--Login-->


            <!--SignUp-->
            <!-- Button to open the modal -->
            <button onclick="document.getElementById('id02').style.display='block' " class='w3-amber' style="width:auto;">Sign Up</button>

            <!-- The Modal (contains the Sign Up form) -->
            <div id="id02" class="modal2">
                <form class="modal2-content animate" action="/Registerprocess.php" method="POST" enctype="multipart/form-data">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    <div class="container">
                        <h1> Hostel Owner Sign Up</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>

                        <label for="username"><b>Name</b></label>
                        <input type="text" placeholder="Enter your Name" name="Uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="Password" required>

                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="cPassword" required>


                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="Email" required>


                        <label for="pnum"><b>Phone number</b></label>
                        <input type="text" placeholder="Enter Number" name="Pnumber" required>

                        <label for="hname"><b>Hostel Name</b></label>
                        <input type="text" placeholder="Enter your Hostel Name" name="Hname" required>

                        <label for="loc"><b>Location</b></label>
                        <input type="text" placeholder="Enter Hostel Location" name="Location" required>

                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                            Remember me
                        </label>

                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms &
                                Privacy</a>.</p>

                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" class="signup">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById('id02');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }

            </script>
            <!--SignUp-->

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
