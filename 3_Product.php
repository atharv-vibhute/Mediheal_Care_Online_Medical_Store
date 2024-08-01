<?php include_once('5_Header.php');
include('hms/include/config.php');

?>

    <main>

        <div class="product_header">
            <div class="ed_img_overlay">
                <div class="container">
                    <div class="row">
                        <div class="header_product">
                            <h1 class="h1">PRODUCT</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

        <div class="container">
            <div class="row">

                <!-- <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11"> -->
                    <div class="input-container wide-input">
                        <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                        <input type="text" name="medicines" id="search-medicine" placeholder="Search Medicines" class="input-other placeholder" autofocus>
                        <button type="submit" class="input-other button more_btn2 check_button" id="search-medicine-button">Check</button>
                    </div>
                <!-- </div> -->

                <!-- <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <a href="#"><i class="fa fa-cart-plus fa-5x i" aria-hidden="true"></i></a>
                </div> -->

            </div>
        </div>



    <div class="blue filter_container">
        <div class="container">       

            <div class="row">
                <h2 class="h2 filters white"><i class="fa fa-filter" aria-hidden="true"></i> FILTERS</h3>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="fill">
                        <label><h3 class="h3 mediheal text-center">MEDICAL SYSTEM</h3>
                            <input type="checkbox" name="medical_system[]" id="allopathy" value="allopathy" class="h4"> Allopathy <span id="allopathy-count" class="quantity">0</span><br>
                            <input type="checkbox" name="medical_system[]" id="homeopathy" value="homeopathy" class="h4"> Homeopathy <span id="homeopathy-count" class="quantity">0</span><br>
                            <input type="checkbox" name="medical_system[]" id="ayurveda" value="ayurveda" class="h4"> Ayurveda <span id="ayurveda-count" class="quantity">0</span><br>
                            <input type="checkbox" name="medical_system[]" id="other1" value="other1" class="h4"> Other <span id="other1-count" class="quantity">0</span><br>
                        </label>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="fill">
                        <label><h3 class="h3 mediheal text-center">PRODUCT RANGE</h3>
                            <input type="checkbox" name="range[]" id="range-0" value="0"> Below ₹50 <span id="range-0-count" class="quantity">0</span><br>
                            <input type="checkbox" name="range[]" id="range-50" value="50"> ₹50 - ₹99 <span id="range-50-count" class="quantity">0</span><br>
                            <input type="checkbox" name="range[]" id="range-100" value="100"> ₹100 - ₹499 <span id="range-100-count" class="quantity">0</span><br>
                            <input type="checkbox" name="range[]" id="range-500" value="500"> ₹500 - ₹999 <span id="range-500-count" class="quantity">0</span><br>
                            <input type="checkbox" name="range[]" id="range-1000" value="1000"> Above ₹1000 <span id="range-1000-count" class="quantity">0</span><br>
                        </label>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="fill">
                        <label><h3 class="h3 mediheal text-center">PRODUCT FORM</h3>
                            <input type="checkbox" name="product_form[]" id="tablet" value="tablet"> Tablet <span id="tablet-count" class="quantity">0</span><br>
                            <input type="checkbox" name="product_form[]" id="liquid" value="liquid"> Liquid <span id="liquid-count" class="quantity">0</span><br>
                            <input type="checkbox" name="product_form[]" id="other2" value="other2"> Other <span id="other2-count" class="quantity">0</span><br>
                        </label>
                    </div> 
                </div>                
            </div>    

        </div>          
    </div>   

        <div class="right" id="medicine-list">
            <div class="category_contanier">
                <div class="container">
                        <h2 class="h2 mediheal"><span class="alternate_mediheal">MEDIHEAL'S</span> PRODUCT CATEGORIES</h2>
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="category">
                                    <img src="Images/3_why-your-supplement-type-matters.jpg" alt="Medicines"
                                        width="100%" class="photo">
                                    <h3 class="h3 category_types">MEDICINES</h3>
                                    <a href="#medicines" class="more_btn3">
                                        Go...
                                    </a>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="category">
                                    <img src="Images/4_repair-medical-equipment_copy_1201x800.jpg" alt="Health Devices"
                                        width="100%" class="photo">
                                    <h3 class="h3 category_types">HEALTH DEVICES</h3>
                                    <a href="#health_devices" class="more_btn3">
                                        Go...
                                    </a>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="category">
                                    <img src="./Images/5_depositphotos_164057554-stock-photo-composition-with-containers-of-global_copy_1201x800.jpg"
                                        alt="Personal Care" width="100%" class="photo">
                                    <h3 class="h3 category_types">PERSONAL CARE</h3>
                                    <a href="#personal_care" class="more_btn3">
                                        Go...
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="category_contanier blue">
                    <div class="container">

                        <h2 class="h2 white" id="medicines">MEDICINES</h2>
                        <p class="para2">
                            Discover a vast array of tablets and medicines at Mediheal Care, your go-to online
                            medical store committed to "Healing with Heart." Our extensive selection includes both
                            generic
                            and
                            branded medications, catering to all your healthcare needs from pain relief and allergy
                            management
                            to essential vitamins and supplements. Each product is carefully chosen for its quality and
                            effectiveness, ensuring you receive top-notch healthcare solutions at competitive prices.
                            With
                            our
                            user-friendly platform, accessing reliable medications has never been easier—shop from the
                            comfort
                            of your home and benefit from fast delivery and expert customer support.
                        </p>

                        <div class="row">
                        <?php
             $procat='medicines';
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                                <div class="product_actual gray medicine" data-system="allopathy" data-range="100" data-form="tablet" data-medicine="montair lc tablet">
                                <img src="hms/images/<?php echo $row['proimg'];?>" alt="image" class="photo_imgage" />
                                <h5 class="h5 products_types"><?php echo $row['proname'];?></h5>
                                    <h6 class="h6">Quantity: <span class="grey_color"><?php echo $row['proquant'];?></span></h6>
                                    <h6 class="h6">Manufacturer: <span class="grey_color"><?php echo $row['promanufacturer'];?></span></h6>
                                    <h6 class="h6">Contains: <span class="grey_color"><?php echo $row['procontains'];?></span></h6>
                                    <h6 class="h6 products">MRP: ₹<?php echo $row['proprice'];?></h6>
                                    <h6 class="h6">Expiry Date: <span class="grey_color"><?php echo $row['proexpiry'];?></span></h6>
                                    <!-- <a href="#" class="more_btn2">
                                        Add To Cart...
                                    </a> -->
                                    <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

                                        <button id="addItem" class="btn-success btn button more_btn2">Add To Cart</button>
                                                                              <div class="alert-message"></div>

                                      </form>
                                </div>
                            </div>
                            <?php } ?>






                           

                        </div>

                        

                    </div>
                </div>



                <div class="category_contanier">
                    <div class="container">

                        <h2 class="h2 blue_text" id="health_devices">HEALTH DEVICES</h2>
                        <p class="para2">
                            Mediheal Care offers a wide range of health devices designed to help you monitor and manage
                            your
                            well-being with ease and accuracy. Our selection includes high-quality blood pressure
                            monitors,
                            digital thermometers, glucose meters, pulse oximeters, and more, catering to various health
                            monitoring needs. We provide both trusted brand-name devices and reliable generic options,
                            ensuring
                            you have access to top-tier technology at competitive prices. With our user-friendly online
                            platform, you can effortlessly find and purchase the health devices you need, backed by
                            swift
                            delivery and exceptional customer support.
                        </p>

                        <div class="row">

                        <?php
             $procat='healthdevices';
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>
                    
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                                <div class="product_actual gray medicine" data-system="other1" data-range="100" data-form="other2" data-medicine="equinox digital thermometer eq-dt-63">
                                    <img src="hms/images/<?php echo $row['proimg'];?>" alt="image" class="photo_imgage" />
                                    <h5 class="h5 products_types"><?php echo $row['proname'];?></h5>
                                    <h6 class="h6">Quantity: <span class="grey_color"><?php echo $row['proquant'];?></span></h6>
                                    <h6 class="h6">Manufacturer: <span class="grey_color"><?php echo $row['promanufacturer'];?></span></h6>
                                    <h6 class="h6">Manufacturing Date: <span class="grey_color"><?php echo $row['promanufacturing'];?></span></h6>
                                    <h6 class="h6">Warrenty: <span class="grey_color"><?php echo $row['prowarrenty'];?></span></h6>
                                    <h6 class="h6 products">MRP: ₹<?php echo $row['proprice'];?></h6>
                                    <!-- <a href="#" class="more_btn2">
                                        Add To Cart...
                                    </a> -->
                                    <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

                                        <button id="addItem" class="btn-success btn button more_btn2">Add To Cart</button>
                                                                              <div class="alert-message"></div>

                                      </form>
                                </div>
                            </div>
                            <?php } ?>
                          

                           

                        </div>

                      


                    </div>
                </div>


                <div class="category_contanier blue">
                    <div class="container">

                        <h2 class="h2 white" id="personal_care">PERSONAL CARE</h2>
                        <p class="para2">
                            Elevate your self-care routine with Mediheal Care's comprehensive range of personal care
                            products.
                            Our selection includes skincare, haircare, oral care, and hygiene essentials, featuring both
                            trusted
                            brand-name items and effective generic options. Whether you're looking for luxurious
                            moisturizers,
                            nourishing shampoos, or everyday hygiene products, we ensure high-quality and affordability
                            are
                            always at your fingertips. Enjoy the ease of shopping from our user-friendly online
                            platform,
                            with
                            competitive prices, special offers, fast delivery, and exceptional customer support to
                            enhance
                            your
                            personal care experience.
                        </p>

                        <div class="row">

                        <?php
             $procat='personalcare';
$sql=mysqli_query($con,"select * from product where procat='$procat'");


while($row=mysqli_fetch_array($sql))
{ 
?>


                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                                <div class="product_actual gray medicine" data-system="other1" data-range="500" data-form="other2" data-medicine="h&s smooth & silky anti dandruff shampoo">
                                    <img src="hms/images/<?php echo $row['proimg'];?>" alt="image" class="photo_imgage" />
                                    <h5 class="h5 products_types"><?php echo $row['proname'];?></h5>
                                    <h6 class="h6">Quantity: <span class="grey_color"><?php echo $row['proquant'];?></span></h6>
                                    <h6 class="h6">Manufacturer: <span class="grey_color"><?php echo $row['promanufacturer'];?></span></h6>
                                    <h6 class="h6 products">MRP: <span class="grey_color">₹<?php echo $row['proprice'];?></span></h6>
                                    <h6 class="h6">Expiry Date: <?php echo $row['proexpiry'];?></h6>
                                    <!-- <a href="#" class="more_btn2">
                                        Add To Cart...
                                    </a> -->
                                    <form class="form-submit">
                                       <input type="hidden" class="pname" value="<?php echo $row['proname'];?>">
                                        <input type="hidden" class="pprice" value="<?php echo $row['proprice'];?>">
                                        <input type="hidden" class="pimage" value="<?php echo $row['proimg'];?>">
                                        <input type="hidden" class="pcode" value="<?php echo $row['id'];?>">

                                        <button id="addItem" class="btn-success btn button more_btn2">Add To Cart</button>
                                                                              <div class="alert-message"></div>

                                      </form>
                                </div>
                            </div>
                            <?php } ?>
                

                        </div>

                        

                </div>
            </div>
        </div>        
        
    </main>

    <script>
  $(document).ready(function(){
 $(document).on('click','#addItem',function(e){
e.preventDefault();
var form=$(this).closest(".form-submit");
var pcode=form.find('.pcode').val();
var pname=form.find('.pname').val();
var pimage=form.find('.pimage').val();

var pprice=form.find('.pprice').val();
//var $this = $(this);
var alertmsg=form.find('.alert-message');
$.ajax({
url:'action.php',
method:'post',
data:{pcode:pcode,pname:pname,pimage:pimage,pprice:pprice},
success:function(response){
  //console.log(response);
  alertmsg.html(response);

  // $this.closest('.alert-message').html(response)
  //$(this).closest('.alert-message').html(response);
 //alertmsg.html(response);
  //window.scrollto(0,0);
  load_cart_item_number();
}
});

 });

  load_cart_item_number();
function load_cart_item_number(){
  $.ajax({
url:'action.php',
method:'get',
data:{cartItem:"cart_item"},
success:function(response){

  $("#cart-item").html(response);
  
}
});
}

  });
 
</script>
<?php include_once('6_Footer.php') ?>