<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <style>
        body
        {
            font-family: 'Quicksand', sans-serif;
        } 
    </style>

    <?php 
             $server="localhost";
             $username="root";
             $password="kiran2001";
             $con=mysqli_connect($server,$username,$password,"vibe");
             $max=105;
             $min=1;
    ?>

    <title>Document</title>
</head>
<body>
    

   
   <div id="slide-show-encloser">
   
    <div class="slideshow-container">
        <div class="mySlides fade">
        <img src="./innerimages/moodbanner.jpg" >
        <div class="text"></div>
        </div>

        <div class="mySlides fade">
        <img src="./innerimages/workoutbanner.jpg">
        <div class="text"></div>
        </div>

        <div class="mySlides fade">
        <img src="./innerimages/naturebanner.jpg">
        <div class="text"></div>
        </div>
        <div class="mySlides fade">
        <img src="./innerimages/work & study.jpg" >
        <div class="text"></div>
        </div>
        <div class="mySlides fade">
        <img src="./innerimages/discobanner.jpg" >
        <div class="text"></div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
   </div>

    <!-- type1 -->

                    <div class='type'>
                        <h4>
                            top100
                        </h4>
                        <a>more</a>
                    </div>
                    <div class='songs'>
                        <?php
                            $var=6;
                            $random_img="../songs/songimages/".(string)mt_rand($min,$max).".jpg";
                            $more_term="top100";
                            while($var!=0)
                            {
                                echo "
                                <div class='song'   style='background-image:url($random_img);'>
                                    <div class='song-img'>
        
                                    </div>
                                    <div class='controls'>
                                    <div class='play-btn'>
                                    </div>
                                    <div class='palaylist-btn'>
                                    </div>
                                    <div class='add-queue'>
                                    </div>
                                </div>
                                    <div class='song-desc'>
        
                                    </div>
                                </div>
                                ";
                                $var-=1;
                                $random_img="../songs/songimages/".(string)mt_rand($min,$max).".jpg";
                            }
                        ?>
                    </div>
    <!-- type2 -->
                    <div class='type'>
                        <h4>
                            top telugu
                        </h4>
                        <a>more</a>
                    </div>
                    <div class='songs'>
                        <?php

                            $q="SELECT * FROM `all_songs` WHERE `song_language` = 'hindi';";
                            $result=mysqli_query($con,$q);

                            $row=mysqli_fetch_array($result);

                            $var=6;
                            $random_img="../songs/songimages/".(string)mt_rand($min,$max).".jpg";
                            $more_term="telugu";
                            while($var!=0)
                            {
                                echo"
                                <div class='song'  style='background-image:url($random_img);'>
                                    <div class='song-img'>
                              
                                    </div>
                                    <div class='controls'>
                                    <div class='play-btn'>
                                    </div>
                                    <div class='palaylist-btn'>
                                    </div>
                                    <div class='add-queue'>
                                    </div>
                                </div>
                                    <div class='song-desc'>
                                    "
                                    .$row['song_name']."
                                    </div>
                                </div>
                                ";
                                $var-=1;
                                $row=mysqli_fetch_array($result);
                                $random_img="../songs/songimages/".(string)mt_rand($min,$max).".jpg";
                            }
                        ?>
                    </div>
    <!-- type3 --> 
                    <div class='type'>
                        <h4>
                            top Hindi
                        </h4>
                        <a>more</a>
                    </div>
                    <div class='songs'>
                        <?php
                       

                            $q="SELECT * FROM `all_songs` WHERE `song_language` = 'hindi';";
                            $result=mysqli_query($con,$q);

                            $row=mysqli_fetch_array($result);

                            $var=6;
                            $more_term="hindi";
                            $random_img="../songs/songimages/".(string)mt_rand($min,$max).".jpg";
                            while($var!=0)
                            {
                                echo"
                                <div class='song'  style='background-image:url($random_img);'>
                                    <div class='song-img' >
        
                                    </div>
                                    <div class='controls'>
                                    <div class='play-btn'>
                                    </div>
                                    <div class='palaylist-btn'>
                                    </div>
                                    <div class='add-queue'>
                                    </div>
                                </div>
                                    <div class='song-desc'>
                                 "
                                 .$row['song_name']."
                                    </div>
                                </div>
                                ";
                                $var-=1;
                                $row=mysqli_fetch_array($result);
                                $random_img="../songs/songimages/".(string)mt_rand($min,$max).".jpg";
                            }
                        ?>
                    </div>
    <!-- type4 --> 
                    <div class='type'>
                        <h4>
                            top English
                        </h4>
                        <a>more</a>
                    </div>
                    <div class='songs'>
                        <?php
                            $var=6;
                            $random_img="../songs/songimages/".(string)mt_rand(95,105).".jpg";
                            while($var!=0)
                            {
                                echo"
                                <div class='song'  style='background-image:url($random_img);'>
                                    <div class='song-img'>
        
                                    </div>
                                    <div class='controls'>
                                    <div class='play-btn'>
                                    </div>
                                    <div class='palaylist-btn'>
                                    </div>
                                    <div class='add-queue'>
                                    </div>
                                </div>
                                    <div class='song-desc'>
        
                                    </div>
                                </div>
                                ";
                                $var-=1;
                                $random_img="../songs/songimages/".(string)mt_rand(95,105).".jpg";
                            }
                        ?>
                    </div>
    <!-- type2 -->
     
    <script>
                var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        }
        var slideIndex = 0;
        showSlides();

        function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 10000); // Change image every 2 seconds
        }
    </script>
</body>
</html>