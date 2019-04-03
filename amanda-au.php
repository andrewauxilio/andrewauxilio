<!DOCTYPE html>
<html lang="en">

<!-- link to head module-->
<?php include("modules/head.php");?>

<body>

    <!-- link to navbar module-->
    <?php include("modules/navbar.php");?>
    
    <!-- Contains the whole body-->
    <div class="flex-container">

        <!-- Title/Subtitle Section-->
        <!-- Company/Client Logo -->
        <div class="project_title" data-aos="fade-up">
            <h1>Amanda Au Designs</h1>
        </div>

        <!-- Website Screenshot Section -->
        <div class="project" data-aos="fade-up">
            <div id="project_photo_container">
                <div><img id="project_photo_raw" src="images/dowell_screens.png"></div>
            </div>
        </div>

        <!-- Website Information -->
        <!-- Client Information -->
        <div class="project" data-aos="fade-up">
            
            <!-- Source and Website Buttons-->
            <div class="info">
                <div class='source'>
                    Source
                </div>
                <div class='site'>
                    Visit
                </div>
            </div>

            <!-- Project Description-->
            <p class="more">
                Amanda Au Designs is a portfolio website I designed and developed<br>
                for the aspiring graphic designer Amanda. She wanted a minimalistic <br>
                yet elegant design where she can showcase her best artwork.<br>
            </p>
        </div>  

        <!-- link to footer module-->
        <?php include("modules/footer.php");?>

    </div>

    <!-- link to scripts module-->
    <?php include("modules/scripts.php");?>

</body>
</html>