<?php   
        session_start();
        $title ='Shoping cart'; 
        $includeF = '';
        $includeNav = '';
        $includeShoping = "";
    include "includes/header.inc.php";
?>


<div class="shoping">
<?php  include "includes/nav.inc.php"; ?>
</div>


    <div class="container">
            <h3 id="title" class="text-center my-5"><span>Shop</span> Cart</h3>

            <table class="table-product" style="width:100% ;">
                <tr>
                    <th>Book details</th>
                    <th>Price</th>
                    <th></th>
                </tr>

                <tr>
                    <td id="flex-table">
                        <div class="image-box">
                            <img src="themes/image/ebook1.jpg" alt="book">
                        </div>
                        <div class="content">
                            <h4>Tout les Femme</h4>
                            <p><span>product ID : </span> 1</p>
                        </div>
                    </td>
                    <td>
                       <h5> 220$ </h5>
                    </td>
                    <td>
                        <a href="">
                    <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                    </td>
                </tr>
                

                          

                <!-- ====== ===== ===== === -->

                <tr>
                    <td id="flex-table">
                        <div class="image-box">
                            <img src="themes/image/ebook1.jpg" alt="book">
                        </div>
                        <div class="content">
                            <h4>Tout les Femme</h4>
                            <p><span>product ID : </span> 1</p>
                        </div>
                    </td>
                    <td>
                      <h5>  220$  </h5>
                    </td>
                    <td>
                        <a href="">
                    <i class="fa-solid fa-circle-xmark"></i>
                    </a>
                    </td>
                </tr>

            </table>


            <div class="total">
                <h5>Total : <span>220$</span></h5>
                <button class="button-87" role="button"> CheckOut </button>
                <!-- <button class="button-52" role="button">Button 52</button> -->
            </div>
    </div>



<?php 
    // =========================  end of shoping  =================================
   
    
    include "includes/footer.inc.php";
?>














        