<?php $title ='Contact Us';
        $includeF = '';
        $includeContact = '';
        $includeNav = '';
    include "includes/header.inc.php";
?>



<div class="contact">
<?php  include "includes/nav.inc.php"; ?>
</div>
        <div class="contact-land">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-land-title text-center text-white">
                            <h1>Keep in Touch</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <h3 class="mb-5 text-center"><span>Fill </span> Free</h3>


            <form action="" method="POST">
                <div class="inputs">
                <div class="info-contact">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="text" name="sub" placeholder="Subject">
                </div>
                <div class="message">
                    <textarea name="" id="" cols="28" rows="10" placeholder="message"></textarea>
                </div>
                </div>

                <input type="submit" name="go" value="Send">
            </form>
        </div>





        <?php 
    // =========================  end of contact =================================
    include "includes/footer.inc.php";
?>