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
            <img src="images/dowell_logo.png" alt="Dowell Windows Logos">
        </div>

        <!-- Website Screenshot Section -->
        <div class="project" data-aos="fade-up">
            <div id="project_photo_container">
                <div><img id="project_photo_raw" src="images/dowell_screens.png" alt="Dowell Saw Module Screenshots"></div>
            </div>
        </div>

        <!-- Website Information -->
        <!-- Client Information -->
        <div class="project" data-aos="fade-up">
            
            <!-- Source and Website Buttons-->
            <div class="info">
                <div class='source-d'>
                    Source
                </div>
                <div class='site-d'>
                    Visit
                </div>
            </div>

            <!-- Project Description-->
            <p class="more">
                The Dowell Saw Module application was developed to help streamline window <br>
                manufacturing process in our warehouses. The application aims to eliminate <br>
                the paperwork and store saw data, digitally. This application will also be <br>
                used as a springboard for data analytics within the company.
            </p>
        </div>  

        <!-- link to footer module-->
        <?php include("modules/footer.php");?>

    </div>

    <!-- link to scripts module-->
    <?php include("modules/scripts.php");?>

</body>
</html>