<?php $title ='About'; 
        $includeNav = '';
        $includeF = '';
        $includeBlog = '';
    include "includes/header.inc.php";
    ?>


<div class="blog">
<?php  include "includes/nav.inc.php"; ?>
</div>
        <div class="blog-land">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-land-title text-center text-white">
                            <h1>Our Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <div class="container">

            <!-- <div class="search-box">
                         <button class="btn-search"><i class="fas fa-search"></i></button>
                         <input type="text" class="input-search" placeholder="Type to Search...">
             </div> -->

                <div class="form-search">
                <form action="" method="POST">
                    <input type="text" name="search" placeholder="Title of the blog" id="input-s">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    
                    <!-- <input type="submit" name="go" value="Search"> -->
                </form>
                </div>

                    <?php #==================== blog content .................. ?>

                    <div class="blogs">
                            <div class="item" >
                                <img src="themes/blogImage/129.jpeg" alt="">
                                <div class="content-blog">
                                <h4>The computer siences</h4>
                                <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus? walid oumechtak</p>
                                <a class="ms-5" href="#">Read More</a>
                                <span class="ms-4">25 octobre</span>
                                </div>
                            </div>
                            <div class="item" >
                                <img src="themes/blogImage/129.jpeg" alt="">
                                <div class="content-blog">
                                <h4>The computer siences</h4>
                                <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus? walid oumechtak</p>
                                <a class="ms-5" href="#">Read More</a>
                                <span class="ms-4">25 octobre</span>
                                </div>
                            </div>
                            <div class="item" >
                                <img src="themes/blogImage/129.jpeg" alt="">
                                <div class="content-blog">
                                <h4>The computer siences</h4>
                                <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus? walid oumechtak</p>
                                <a class="ms-5" href="#">Read More</a>
                                <span class="ms-4">25 octobre</span>
                                </div>
                            </div>
                            <div class="item" >
                                <img src="themes/blogImage/129.jpeg" alt="">
                                <div class="content-blog">
                                <h4>The computer siences</h4>
                                <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus? walid oumechtak</p>
                                <a class="ms-5" href="#">Read More</a>
                                <span class="ms-4">25 octobre</span>
                                </div>
                            </div>
                            <div class="item" >
                                <img src="themes/blogImage/129.jpeg" alt="">
                                <div class="content-blog">
                                <h4>The computer siences</h4>
                                <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus? walid oumechtak</p>
                                <a class="ms-5" href="#">Read More</a>
                                <span class="ms-4">25 octobre</span>
                                </div>
                            </div>
                            <div class="item" >
                                <img src="themes/blogImage/129.jpeg" alt="">
                                <div class="content-blog">
                                <h4>The computer siences</h4>
                                <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus? walid oumechtak</p>
                                <a class="ms-5" href="#">Read More</a>
                                <span class="ms-4">25 octobre</span>
                                </div>
                            </div>
                    </div>
        
            </div>




            
            
        <?php 
    // =========================  end of about =================================
    include "includes/footer.inc.php";
?>