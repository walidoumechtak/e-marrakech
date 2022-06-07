<?php $title ='Search Books';
        $includeF = '';
        $includeNav = '';
        $includeSearch = "";
    include "includes/header.inc.php";
?>



<div class="search">
<?php  include "includes/nav.inc.php"; ?>
</div>


<div class="search-land">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-land-title text-center text-white">
                            
                                    <form action="" autocomplete="off">
                                        <input type="text" name="search" placeholder="Type your book name">
                                        <input type="submit" name="go" value="Search">
                                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
                    <div class="search-book">
                    <div class="row">
                            <div class="card py-0 px-0 mb-3" style="width: 13.125rem;">
                                <img src="themes/image/ebook1.jpg" class="card-img-top" alt="book">
                                <span class="prix">23<span id="dollar">$</span> </span>
                                    <div class="card-body px-0 py-0">
                                        <h5 class="card-title mt-4 ms-3 mb-2">Tout les Femme</h5>
                                        <div class="rating ms-3">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                        </div> 
                                                                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                        <a href="#" class="btn "> <i class="fa-solid fa-cart-plus"></i> Add to carte</a>
                                    </div>
                            </div>
                            <div class="card py-0 px-0 mb-3" style="width: 13.125rem;">
                                <img src="themes/image/ebook1.jpg" class="card-img-top" alt="book">
                                <span class="prix">23<span id="dollar">$</span> </span>
                                    <div class="card-body px-0 py-0">
                                        <h5 class="card-title mt-4 ms-3 mb-2">Tout les Femme</h5>
                                        <div class="rating ms-3">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                        </div> 
                                                                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                        <a href="#" class="btn "> <i class="fa-solid fa-cart-plus"></i> Add to carte</a>
                                    </div>
                            </div>
                            <div class="card py-0 px-0 mb-3" style="width: 13.125rem;">
                                <img src="themes/image/ebook1.jpg" class="card-img-top" alt="book">
                                <span class="prix">23<span id="dollar">$</span> </span>
                                    <div class="card-body px-0 py-0">
                                        <h5 class="card-title mt-4 ms-3 mb-2">Tout les Femme</h5>
                                        <div class="rating ms-3">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                        </div> 
                                                                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                        <a href="#" class="btn "> <i class="fa-solid fa-cart-plus"></i> Add to carte</a>
                                    </div>
                            </div>
                            <div class="card py-0 px-0 mb-3" style="width: 13.125rem;">
                                <img src="themes/image/ebook1.jpg" class="card-img-top" alt="book">
                                <span class="prix">23<span id="dollar">$</span> </span>
                                    <div class="card-body px-0 py-0">
                                        <h5 class="card-title mt-4 ms-3 mb-2">Tout les Femme</h5>
                                        <div class="rating ms-3">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                        </div> 
                                                                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                        <a href="#" class="btn "> <i class="fa-solid fa-cart-plus"></i> Add to carte</a>
                                    </div>
                            </div>

            </div>



                    </div>
        </div>





<?php 
    // =========================  end of search page  =================================
    include "includes/footer.inc.php";
?>