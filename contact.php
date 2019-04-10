<?php include("email.php");?>

<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>contact me</h2>
        </div>
        <div class="modal-body">
            <form method="post" action="#" class="ccform">
                <div class="ccfield-prepend">
                    <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
                    <input class="ccformfield" name="name" type="text" placeholder="Name" required>
                </div>
                <div class="ccfield-prepend">
                    <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
                    <input class="ccformfield" name="email" type="text" placeholder="Email" required>
                </div>
                <div class="ccfield-prepend">
                    <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
                    <input class="ccformfield" name="phone" type="text" placeholder="Phone">
                </div>
                <div class="ccfield-prepend">
                    <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
                    <input class="ccformfield" name="subject" type="text" placeholder="Subject" required>
                </div>
                <div class="ccfield-prepend">
                    <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
                    <textarea class="ccformfield" name="message" rows="4" placeholder="Message" required></textarea>
                </div>
                <div class="ccfield-prepend">
                    <input class="ccbtn" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>


