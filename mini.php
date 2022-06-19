<?php
session_start();
require("./connection.php");
if(isset($_SESSION['user']['username'])){
echo "<script>alert('Welcome ".$_SESSION['user']['username']. "')</script>";
}
else{
    "<script>alert('Please Login to continue')</script>";
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./mini.css">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        

        <title>BookMyHotel</title>
        <link rel="shortcut icon" href="/img/favicon.ico">
            
    </head>

    <body>
        <nav>
            <div class="logo">
                <img class="navlogo" src="img/navlogo.jpg">
            </div>
            <div class="banner">
                <a href="#">Home</a>
                <a href="./logout.php">Logout</a>
            </div>
        </nav>
        <div class="line">
            <p class="f">Book Domestic and International Hotels at the best price.</p>
            <p class="s">Quick and easy booking!</p>
        </div>
        <div class="image"></div>
        <div class="formclass">
            <form action="" onsubmit="return false" ;>
                <div class="up">
                    <label for="country">Country</label>
                    <select name="country" id="country">
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="UAE">UAE</option>
                <option value="Australia">Australia</option>
            </select>
                    <label for="city">City</label>
                    <select name="city" id="city">
                    <option value="goa">Goa</option>
                    <option value="pune">Pune</option>
                    <option value="banglore">Banglore</option>
                    <option value="mumbai">Mumbai</option>
                </select>
                    <label for="check-in">Check-in</label>
                    <input type="date" id="check-in" name="check-in">

                    <label for="check-out">Check-out</label>
                    <input type="date" id="check-out" name="check-out">
                </div>
                <div class="next">
                    <div class="nextnext">
                        <label class="nextlabel" for="room">Rooms</label>
                        <select name="room" id="room">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>


                        <label class="nextlabel" for="guest">Guests</label>
                        <select onchange="validate_rANDg()" name="guest" id="guest">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
             
            </select>

                        <h6>*We allow 3 guests per room*</h6>
                    </div>

                    <div class="nextnext2">
                        <label class="nextlabel" for="tot">Type of Trip</label>
                        <select name="tot" id="tot">
                <option value="business">Business</option>
                <option value="fun">Leisure</option>
                <option value="fun">Other</option>
            </select>
                    </div>
                </div>

                <div class="search">
                    <button onclick="validate_city()">Search</button>
                    <!--change color on hovering-->
                </div>
            </form>
        </div>


        <h2 class="vdoh2">&#x1F447 If you're looking for a place to relax, you've come to the right place!&#x1F447 </h2>
        <div class="videos">
            <div class="carousel" data-flickity='{ "wrapAround": true }'>
                <div class="carousel-cell iframe-container"><iframe src="https://www.youtube.com/embed/jtBoWxYe0ds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="carousel-cell iframe-container"><iframe src="https://www.youtube.com/embed/UoIjjPqqnO0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="carousel-cell iframe-container"><iframe src="https://www.youtube.com/embed/6y3rHNjBcOM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="carousel-cell iframe-container"><iframe src="https://www.youtube.com/embed/0MyCsC9c3Xw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="carousel-cell iframe-container"><iframe src="https://www.youtube.com/embed/cFS9URmmyKo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="carousel-cell iframe-container"><iframe src="https://www.youtube.com/embed/rDc_hQcyxJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>
        </div>
        <div class="cities">
            <img height="250px" width="1100px" src="img/cities.jpeg">
        </div>
        <h2 class="offerh2">&#x1F447 We've got some Exciting offers for you!&#x1F447 </h2>
        <div class="offer1">
            <div class="first">
                <img class="oimage" src="./img/hotelimg1.jpg" width="420" height="315" alt="This is img1">

                <h3>Domestic hotels starting at Rs.1299/day.</h3>
                <p class="undersco">______</p>
                <h4>On beatiful stay of 2 nights.</h4>
            </div>
            <div class="second">
                <img class="oimage" src="./img/hotelimg2.jpg" width="420" height="315" alt="This is img2">
                <h3>Upto Rs.2000 OFF* + ZERO cancellation charges.</h3>
                <p class="undersco">______</p>
                <h4>Offer valid till 3rd Feb 2022.</h4>
            </div>
            <div class="third">
                <img class="oimage" src="./img/hotelimg3.png" width="420" height="315" alt="This is img3">
                <h3>Grab upto 30% OFF</h3>
                <p class="undersco">______</p>
                <h4>Valid on all Marriot stays countrywide</h4>
            </div>
        </div>
        <div class="offer2">
            <div class="forth">
                <img class="oimage" src="./img/hotelimg4.jpg" width="420" height="315" alt="This is img4">
                <h3>Book your International holidays now</h3>
                <p class="undersco">______</p>
                <h4>Get upto 25% OFF on pakages. </h4>
            </div>
            <div class="fifth">
                <img class="oimage" src="./img/hotelimg5.jpg" width="420" height="315" alt="This is img5">
                <h3>Special offers on Axis Bank Burgundy cards</h3>
                <p class="undersco">______</p>
                <h4>On all Domestic stays</h4>
            </div>
            <div class="sixth">
                <img class="oimage" src="./img/hotelimg6.jpg" width="420" height="315" alt="This is img6">
                <h3>Get flat 15% OFF</h3>
                <p class="undersco">______</p>
                <h4>Avail on bookings made with us till 31st March</h4>
            </div>
        </div>
        <div class="info">
            <h2><span class="po">PRODUCT OFFERING: <br><br></span> Hotels, International Hotels, Homestays and Villas, Activities, Holidays In India, International Holidays, Book Hotels From UAE, Exciting offers and discounts.<br><br>
                <span class="po"><br>ABOUT THE SITE: <br><br></span> This site offers you to search a wide range of Domestic and International hotels. It allows you to compare hotels nearby. You can then decide and book your choice of stay.
                <!--detailed-->
            </h2>

        </div>
        <div class="review">

            <div class="a">I liked the website options and fully satisfied with the overall service of Make My Trip. - Anonymous34
            </div>
            <div class="b">It was a great pleasure for us to thank a many times to BookMyHotel for their friendly behaviour and so many help. - Ishika
            </div>
            <div class="c">Amazing offers and discounts. Trustworthy site. I would highly recommend.- Yash

            </div>
        </div>
        <div class="social">
            <h2>Follow us on</h2>
            <img class="profile-pic" src="./img/logo.jpeg" width="250px" height="250px">
            <h3 class="profile-name">BookMyHotel</h3>
            <div class="sm-handle">
                <a href="https://www.instagram.com/trivago" class="ig-icon" target="_blank"><i class="fa fa-instagram ig-icon"></i> Instagram</a>&nbsp;&nbsp;|
                <a href="https://www.facebook.com/trivago" class="fb-icon" target="_blank"><i class="fa fa-facebook fb-icon"></i>  Facebook</a>&nbsp;&nbsp;|
                <a href="https://www.linkedin.com/in/linkin.bio/trivago" class="linkedin-icon" target="_blank"><i class="fa fa-linkedin linkedin-icon"></i> Linkedin</a>
            </div>

        </div>

        <div class="download">
            <h1>Download App Now!</h1>
            <h2>Use code 'WELCOMEBMH' and get upto Rs 3000 off on your first domestic hotel booking</h2>
            <img class="google" width="100" height="30" src="./img/googleplay.jpeg">
            <img class="app" width="100" height="30" src="./img/appstore.jpeg">
        </div>
        <footer>
            <a href="./contact.php">Contact Us</a>
            <a href="./pp.html">Privacy Policy</a>
            <a href="./tnc.html">Terms&Conditions</a>
        </footer>
        <script>
            function validate_rANDg() {
                var room = document.getElementById("room").value;
                //console.log(room);
                var guest = document.getElementById("guest").value;
                //console.log(guest);
                var result = guest / 3;
                var ceill = Math.ceil(result);
                //console.log(ceill);
                if (room >= ceill) {

                    return true;
                } else {
                    alert("You have exceeded the guest per room limit");
                    return false;
                }
            }

            function validate_city() {
                console.log(1);
                var cityinput = document.getElementById("city").value;

                if (cityinput == "goa") {
                    window.location.href = 'city1.html';
                } else if (cityinput == "pune") {
                    window.location.href = 'city2.html';
                } else if (cityinput == "banglore") {
                    window.location.href = 'city3.html';
                } else {
                    window.location.href = 'city4.html';
                }

            }
        </script>

    </body>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    </html>