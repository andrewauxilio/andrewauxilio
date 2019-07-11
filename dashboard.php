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
            <p class="title">Dowell Dashboards</p>
            <p class="title_small">Dowell Dashboards</p>
        </div>

        <!-- Website Screenshot Section -->
        <div class="project">
            <div id="project_photo_container">
                <div><img id="project_photo_raw" src="images/dashboard_screens.png" alt="Dowell Dashboard Module Screenshots"></div>
            </div>
        </div>

        <!-- Website Information -->
        <!-- Client Information -->
        <div class="project-info">
            
            <!-- Source and Website Buttons-->
            <div class="info">
                <a href="https://github.com/andrewauxilio/dowell_analytics" target="_blank">
                    <div class='source'>
                        Source
                    </div>
                </a>
                <a href="http://dashboard.dowell.com.au/" target="_blank">
                    <div class='site'>
                        Visit
                    </div>
                </a>
            </div>

            <!-- Project Description-->
            <p class="more">
                The Dowell Dashboard Module application was developed to display live data 
                for management to view and analyze. Instead of management asking the I.T 
                department for data reports (which usually takes a long time), they can 
                instead use the application to view data instantly.
            </p>

            <ul class="tags">
                <li><a href="#" class="tag">HTML5</a></li>
                <li><a href="#" class="tag">CSS3</a></li>
                <li><a href="#" class="tag">Bootsrap 4</a></li>
                <li><a href="#" class="tag">VueJS</a></li>
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