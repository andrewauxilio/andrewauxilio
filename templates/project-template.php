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
        <div class="project_title">
            <p class="title">Lorem Ipsum</p>
            <p class="title_small">Lorem Ipsum</p>
        </div>

        <!-- Website Screenshot Section -->
        <div class="project" data-aos="fade-up">
            <div id="project_photo_container">
                <div><img id="project_photo_raw" src="images/dowell_screens.png" alt="Dowell Saw Module Screenshots"></div>
            </div>
        </div>

        <!-- Website Information -->
        <!-- Client Information -->
        <div class="project-info" data-aos="fade-up">
            
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis laborum pariatur enim, 
                accusantium molestiae excepturi voluptas consequuntur placeat earum deserunt recusandae 
                similique impedit, atque, ipsum delectus iusto quaerat dignissimos corrupti.
            </p>
        </div>  

        <!-- link to footer module-->
        <?php include("modules/footer.php");?>

    </div>

    <!-- link to scripts module-->
    <?php include("modules/scripts.php");?>

</body>
</html>