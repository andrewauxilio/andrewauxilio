<!DOCTYPE html>
<html lang="en">

<!-- link to head module-->
<?php include("modules/head.php");?>

<body>
    <!-- link to navbar module-->
    <?php include("modules/navbar.php");?>
    
    <!-- Contains the whole body-->
    <div class="flex-container">

        <!-- Cover Photo Container-->
        <!-- The landing page section of the website-->
        <div class="cover_photo">
            <!-- <div class="cover_photo_container">
                <img class="cover_photo_raw" src="images/cover_photo.png" alt="Andrew Auxilio Cover Photo">
            </div> -->

            <picture>
                <source class="cover_photo_raw" media="(min-width: 900px)" srcset="images/cover_photo.png">
                <source class="cover_photo_raw" media="(max-width: 800px)" srcset="images/cover_photo_small.png">
                <img class="cover_photo_raw" src="images/cover_photo.png" alt="IfItDoesntMatchAnyMedia">
                <p class="quote">my brain has too many tabs open...</p>
                <p class="quote2">my brain has too many tabs open...</p>
                <span class="social_links">
                    <a href="https://au.linkedin.com/in/andrewanthonyauxilio" target="_blank" class="fab fa-linkedin"></a>
                    <a href="https://github.com/andrewauxilio" target="_blank" class="fab fa-github"></a>
                    <a id="showModal" class="fas fa-envelope"></a>
                </span>

                <div class="arrow bounce" onclick="scrollDown()">
                    <button class="down_btn" onclick="scrollDown()"><p class="fa fa-arrow-down fa-2x"></p></button>
                </div>
            </picture>
            
        </div>

        <!-- Summary Container-->
        <div id="summary">

            <!-- Short summary about me -->
            <h1 data-aos="fade-right">
                Hi, I'm Andrew Auxilio - a Melbourne-based website developer <br> and below are some of the projects I
                have worked on.😄
            </h1>

             <!-- Access contact form by clicking the "shoot me an e-mail" link-->
            <h2 data-aos="fade-right">
                If you're in need of a personal or business website, 
                <br> 
                I will be able to help you. So <a id="showModal">shoot me an e-mail</a>🔫 
                <br> 
                or message me on any of my social media accounts! 
                <br>
                <br>
            </h2>
        </div>

        <!-- Work Container-->
        <!-- Showcase the projects that I have done-->
        <div class="work">
            
            <!-- Pawfume Project-->
            <div class="Grid Grid--cols-3 u-textCenter">
                <div class="Grid-cell" data-aos="fade-right">
                    <a href="pawfume.php">
                        <div class="work_photo_container">
                            <img class="work_photo_raw" src="images/pawfume.png" alt="Pawfume">
                            <div class="middle">
                                <div class="text">Pawfume</div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Amanda Designs Project-->
                <div class="Grid-cell" data-aos="fade-up">
                    <a href="amanda-au.php">
                        <div class="work_photo_container">
                            <img class="work_photo_raw" src="images/amanda.png" alt="Amanda Designs">
                            <div class="middle">
                                <div class="text">Amanda Designs</div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Dowell Windows Project/s-->
                <div class="Grid-cell" data-aos="fade-left">
                    <a href="dowell.php">
                        <div class="work_photo_container">
                            <img class="work_photo_raw" src="images/dowell.png" alt="Dowell Windows">
                            <div class="middle">
                                <div class="text">Dowell Windows</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- link to footer module-->
        <?php include("modules/footer.php");?>

    </div>
    
    <!-- link to contact module-->
    <?php include("contact.php");?>

    <!-- link to scripts module-->
    <?php include("modules/scripts.php");?>

</body>
</html>