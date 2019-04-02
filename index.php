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
        <div id="cover_photo" class="container">
            <div id="cover_photo_container">
                <img id="cover_photo_raw" src="images/cover_photo.png">
            </div>
        </div>

        <!-- Summary Container-->
        <!-- Short summary about me and my social media links -->
        <!-- Access contact form by clicking the "shoot me an e-mail" link-->
        <div id="summary" class="container" data-aos="fade-right">
            <h2>
                Hi, I'm Andrew Auxilio - a Melbourne-based website developer <br> and below are some of the projects I
                have worked on.😄
            </h2>
            <h3>
                If you're in need of a personal or business website, 
                <br> 
                I will be able to help you. So <a id="myBtn">shoot me an e-mail</a>🔫 
                <br> 
                or message me on any of my social media accounts! 
                <br>
                <br>
                <a href="https://au.linkedin.com/in/andrewanthonyauxilio" target="_blank" class="fa fa-linkedin"></a>
                <a href="https://github.com/andrewauxilio" target="_blank" class="fa fa-github"></a>
                <a href="https://www.instagram.com/drewxmnda/" target="_blank" class="fa fa-instagram"></a>
                <a href="https://www.facebook.com/andrewauxilio" target="_blank" class="fa fa-facebook"></a>
            </h3>
        </div>

        <!-- Work Container-->
        <!-- Showcase the projects that I have done-->
        <div id="work" class="container">
            <div class="Grid Grid--cols-3 u-textCenter" data-aos="fade-left">
                <div class="Grid-cell">
                    <div id="work_photo_container">
                        <div><img id="work_photo_raw" src="projects/pawfume/pawfume.png"></div>
                    </div>
                </div>
                <div class="Grid-cell">
                    <div id="work_photo_container">
                        <div><img id="work_photo_raw" src="projects/amanda-au/amanda.png"></div>
                    </div>
                </div>
                <div class="Grid-cell">
                    <div id="work_photo_container">
                        <div><img id="work_photo_raw" src="projects/dowell/dowell.png"></div>
                    </div>
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