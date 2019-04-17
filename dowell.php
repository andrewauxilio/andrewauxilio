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
            <p class="title">Dowell Windows</p>
            <p class="title_small">Dowell Windows</p>
        </div>

        <!-- Website Screenshot Section -->
        <div class="project">
            <div id="project_photo_container">
                <div><img id="project_photo_raw" src="images/dowell_screens.png" alt="Dowell Saw Module Screenshots"></div>
            </div>
        </div>

        <!-- Website Information -->
        <!-- Client Information -->
        <div class="project-info">
            
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
                The Dowell Saw Module application was developed to help streamline window 
                manufacturing process in our warehouses. The application aims to eliminate 
                the paperwork and store saw data, digitally. This application will also be 
                used as a springboard for data analytics within the company.
            </p>

            <ul class="tags">
                <li><a href="#" class="tag">HTML5</a></li>
                <li><a href="#" class="tag">CSS3</a></li>
                <li><a href="#" class="tag">Bootsrap 3</a></li>
                <li><a href="#" class="tag">JavaScript</a></li>
                <li><a href="#" class="tag">VueJS</a></li>
                <li><a href="#" class="tag">PHP</a></li>
                <li><a href="#" class="tag">Laravel</a></li>
                <li><a href="#" class="tag">MSSQL</a></li>
            </ul>

        </div>  

        <!-- link to footer module-->
        <?php include("modules/footer.php");?>

    </div>

    <!-- link to scripts module-->
    <?php include("modules/scripts.php");?>

</body>
</html>