<?php require_once('layout/header.php')?>
<main id="main">
<link href="assets/css/product_preview.css" rel="stylesheet">
<!-- http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552 -->
    <section>    
        <div class="container">
            <div class="row">
                <aside class="col-sm-5 border-right">
                    <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                        <div class='carousel-outer'>
                            
                            <div class='carousel-inner '>
                                <div class='item active'>
                                    <img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg' alt=''id="zoom_05"  data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg"/>
                                </div>
                                <div class='item'  id="zoom_05">
                                    <img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image2xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/image2xxl.jpg" />
                                </div>
                                <div class='item'>
                                    <img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image3xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/8/2/3/3/5313328/image3xxl.jpg" />
                                </div>
                                    
                                <div class='item'>
                                    <img src='http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg" id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='http://images.asos-media.com/inv/media/5/2/1/3/4603125/gold/image1xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/5/2/1/3/4603125/gold/image1xxl.jpg" id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='http://images.asos-media.com/inv/media/5/3/6/8/4948635/mink/image1xxl.jpg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/5/3/6/8/4948635/mink/image1xxl.jpg" id="zoom_05"/>
                                </div>
                                <div class='item'>
                                    <img src='http://images.asos-media.com/inv/media/1/3/0/8/5268031/image2xxl.jpgg' alt='' data-zoom-image="http://images.asos-media.com/inv/media/1/3/0/8/5268031/image2xxl.jpg" id="zoom_05"/>
                                </div>
                                <script>
                                    $("#zoom_05").elevateZoom({ zoomType    : "inner", cursor: "crosshair" });
                                </script>
                            </div>
                                
                            
                            <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                <span class='glyphicon glyphicon-chevron-left'></span>
                            </a>
                            <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                <span class='glyphicon glyphicon-chevron-right'></span>
                            </a>
                        </div>
                        
                        
                        <ol class='carousel-indicators mCustomScrollbar meartlab'>
                            <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg' alt='' /></li>
                            <li data-target='#carousel-custom' data-slide-to='1'><img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image2xxl.jpg' alt='' /></li>
                            <li data-target='#carousel-custom' data-slide-to='2'><img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/image3xxl.jpg' alt='' /></li>
                            <li data-target='#carousel-custom' data-slide-to='3'><img src='http://images.asos-media.com/inv/media/3/6/7/0/4850763/multi/image1xxl.jpg' alt='' /></li>
                            <li data-target='#carousel-custom' data-slide-to='4'><img src='http://images.asos-media.com/inv/media/5/2/1/3/4603125/gold/image1xxl.jpg' alt='' /></li>
                            <li data-target='#carousel-custom' data-slide-to='5'><img src='http://images.asos-media.com/inv/media/5/3/6/8/4948635/mink/image1xxl.jpg' alt='' /></li>
                            <li data-target='#carousel-custom' data-slide-to='6'><img src='http://images.asos-media.com/inv/media/1/3/0/8/5268031/image2xxl.jpg' alt='' /></li>

                        </ol>
                    </div>
                </aside>
                <aside class="col-sm-7">
                    <article class="card-body p-5">
                        <h4 class="title mb-3">Original Version of Some product name</h4>

                        <p class="price-detail-wrap"> 
                            <span class="price text-warning"> 
                                <span class="currency">US $</span><span class="num">1299</span>
                            </span> 
                            <span>/per kg</span> 
                        </p> 
                        <div class="item-property">
                            <h6>Description</h6>
                            <p>Here goes description consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco </p>
                        </div>
                        <div class="param param-feature">
                            <h6>Model#</h6>
                            <p>12345611</p>
                        </div>  
                        <div class="param param-feature">
                            <h6>Color</h6>
                            <p>Black and white</p>
                        </div>  
                        <div class="param param-feature">
                            <h6>Delivery</h6>
                            <p>Russia, USA, and Europe</p>
                        </div>  

                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="param param-inline">
                                    <h6>Quantity: </h6>
                                    <p>
                                        <select class="form-control form-control-sm" style="width:70px;">
                                            <option> 1 </option>
                                            <option> 2 </option>
                                            <option> 3 </option>
                                        </select>
                                    </p>
                                </div>  
                            </div> 
                            <div class="col-sm-7">
                                <div class="param param-inline">
                                    <h6>Size: </h6>
                                    <p>
                                        <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <span class="form-check-label">SM</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <span class="form-check-label">MD</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <span class="form-check-label">XXL</span>
                                        </label>
                                    </p>
                                </div>  
                            </div> 
                        </div> 
                        <hr>
                        <a href="#" class="btn btn-lg btn-primary text-uppercase"> Buy now </a>
                        <a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Add to cart </a>
                    </article> 
                </aside> 
            </div>
        </div>
    </section>
</main>
<script src="assets/js/product_preview.js">
<?php require_once('layout/footer.php')?>
