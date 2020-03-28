<?php get_header(); ?>



<form>
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators carouseldotcss">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php bloginfo('template_url');?>/assets/images/urlaubsguru.de_pentahotel-prag-v3-1200x335.jpg" alt="Mountain View" class="topimgcss">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('template_url');?>/assets/images/urlaubsguru.de_pentahotel-prag-v3-1200x335.jpg" alt="Mountain View" class="topimgcss">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('template_url');?>/assets/images/urlaubsguru.de_pentahotel-prag-v3-1200x335.jpg" alt="Mountain View" class="topimgcss">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-9 text-block1">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs rowformcss" role="tablist">
                            <li role="presentation" class="formimg">
                                <a data-toggle="tab" href="#tour" class="formtxtcss">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/formimages/lg.png" alt="TOURS" class="topimg">
                                    <span class="formhead">TOURS</span>
                                </a>
                            </li>
                            <li role="presentation" class="formimg">
                                <a data-toggle="tab" href="#hotel" class="formtxtcss">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/formimages/hotel.png" alt="HOTELS" class="topimg">
                                    <span class="formhead">HOTELS</span>
                                </a>
                            </li>
                            <li role="presentation" class="active formimg">
                                <a data-toggle="tab" href="#flight" class="formtxtcss">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/formimages/plane1.png" alt="FLIGHTS" class="topimg">
                                    <span class="formhead">FLIGHTS</span>
                                </a>
                            </li>
                            <li role="presentation" class="formimg">
                                <a data-toggle="tab" href="#expressbus" class="formtxtcss">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/formimages/bus_icon.png" alt="EXPRESS BUSES" class="topimg">
                                    <span class="formhead">EXPRESS BUSES</span>
                                </a>
                            </li>
                        </ul>
                    </div> 
                </div>
                <div class="col-md-6 col-sm-9 text-block">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="tour">
                        </div>
                        <div role="tabpanel" class="tab-pane" id="hotel">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>From</label><br>
                                    <input type="text" class="form-control datecss" name="from" value=""><br>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>Date</label><br>
                                    <input type="text" class="form-control datecss" name="from" value=""><br>
                                </div>
                            </div>

                            <div class="searchbtncss">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="search" class="btn btn-default searchbtn">Search</button>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane active" id="flight">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>From</label><br>
                                    <input type="text" class="form-control datecss" name="from" value=""><br>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>To</label><br>
                                    <input type="text" class="form-control datecss" name="to" value=""><br>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>Date</label><br>
                                    <input type="text" class="form-control datecss" name="from" value=""><br>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>No of Pax</label><br>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle dropdownbtn" type="button" id="menu1" data-toggle="dropdown">
                                            no of pax
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="searchbtncss">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="search" class="btn btn-default searchbtn">Search</button>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="expressbus">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>From</label><br>
                                    <input type="text" class="form-control datecss" name="from" value=""><br>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>To</label><br>
                                    <input type="text" class="form-control datecss" name="to" value=""><br>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>Date</label><br>
                                    <input type="text" class="form-control datecss" name="from" value=""><br>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>No of Pax</label><br>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle dropdownbtn" type="button" id="menu1" data-toggle="dropdown">
                                            no of pax
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">3</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="searchbtncss">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="search" class="btn btn-default searchbtn">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                </div>   
            </div>
        </form>

        <div class="row txtdeal">
            Hot Deals
            <hr class="updatehrcss">
            <hr class="hrcss">
        </div>

        <div class="row hotdealrowcss">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-4 col-sm-6 col-xs-12 hotdealcolcss">
                    <a href="#">
                        <img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-1.jpg" class="img-responsive desimgcss" alt="hotel-1">
                    </a>
                    <span class="descriptiontxtcss">DESCRIPTION</span>
                    <span class="fromtxtcss">From<br>$ <strong>125</strong> pp</span>
                    <div class="col-md-12 descriptionreadmore">Read more</div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 hotdealcolcss">
                    <a href="#">
                        <img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-2.jpg" class="img-responsive desimgcss" alt="hotel-2">
                    </a>
                    <span class="descriptiontxtcss">DESCRIPTION</span>
                    <span class="fromtxtcss">From<br>$ <strong>125</strong> pp</span>
                    <div class="col-md-12 descriptionreadmore">Read more</div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 hotdealcolcss">
                    <a href="#">
                        <img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-3.jpg" class="img-responsive desimgcss" alt="hotel-3">
                    </a>
                    <span class="descriptiontxtcss">DESCRIPTION</span>
                    <span class="fromtxtcss">From<br>$ <strong>125</strong> pp</span>
                    <div class="col-md-12 descriptionreadmore">Read more</div>
                </div>
            </div>
            <div class="hotviewmore">
                <a href="#">
                    <img src="<?php bloginfo('template_url');?>/assets/images/more.png" alt="Mountain View" class="viewmoreimg">
                    View More
                </a>
            </div>
            
        </div>

        <div class="row populartour">
            Popular Tours
            <hr class="updatehrcss">
            <hr class="popularhrcss">
        </div>

        <div class="row popularrowcss">
            <div class="col-md-3 col-sm-6 col-xs-6 hotrowcss">
                <a href="#">
                    <img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-4.jpg" alt="hotel-4" class="imgcssreplace">
                </a>    
                <div class="locationcss">
                    <img src="<?php bloginfo('template_url');?>/assets/images/location.png" alt="hot1" class="locationimgcss">
                    <span>Dubai, <br><span class="populartxt"> UAE</span></span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 hotrowcss">
                <a href="#">
                    <img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-1.jpg" alt="hotel-1" class="imgcssreplace">
                </a>
                <div class="locationcss">
                    <img src="<?php bloginfo('template_url');?>/assets/images/location.png" alt="hot1" class="locationimgcss">
                    <span>ShweDaGon, <br><span class="populartxt"> Myanmar</span></span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 hotrowcss">
                <a href="#">
                    <img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-2.jpg" alt="hotel-2" class="imgcssreplace">
                </a>
                <div class="locationcss">
                    <img src="<?php bloginfo('template_url');?>/assets/images/location.png" alt="hot1" class="locationimgcss">
                    <span>Ngapali, <br><span class="populartxt"> Myanmar</span></span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 hotrowcss">
                <a href="#">
                    <img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-3.jpg" alt="hotel-3" class="imgcssreplace">
                </a>
                <div class="locationcss">
                    <img src="<?php bloginfo('template_url');?>/assets/images/location.png" alt="hot1" class="locationimgcss">
                    <span>Bali, <br><span class="populartxt"> Indonesia</span></span>
                </div>
            </div>
            <div class="popviewmore">
                <a href="#">
                    <img src="<?php bloginfo('template_url');?>/assets/images/more.png" alt="Mountain View" class="viewmoreimg">
                    View More
                </a>    
            </div>
        </div>

        <div class="row hoteldeal">
            Popular Destination
            <hr class="updatehrcss">
            <hr class="populardesthrcss">
        </div>

        <div class="row hotelrowcss">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-3 col-sm-6 col-xs-6 hotelcolcss">
                    <span class="pricecss">$200</span>
                    <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-1.jpg" alt="hotel-1" class="imgcss"></a>
                    <div class="hoteltxtcss">Destina, USA</div>
                    <div class="hotelduring">Duration : 5 Days </div>
                    <div class="populardeststar">Hotel: 4 stars</div>
                    <div class="readmore">Read more</div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 hotelcolcss">
                    <span class="pricecss">$100</span>
                    <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-2.jpg" alt="hotel-2" class="imgcss"></a>
                    <div class="hoteltxtcss">Destina, Paris</div>
                    <div class="hotelduring">Duration : 5 Days</div>
                    <div class="populardeststar">Hotel: 3 stars</div>
                    <div class="readmore">Read more</div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 hotelcolcss">
                    <span class="pricecss">$150</span>
                    <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-3.jpg" alt="hotel-3" class="imgcss"></a>
                    <div class="hoteltxtcss">Destina, Myanmar</div>
                    <div class="hotelduring">Duration : 5 Days</div>
                    <div class="populardeststar">Hotel: 3 stars</div>
                    <div class="readmore">Read more</div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 hotelcolcss">
                    <span class="pricecss">$120</span>
                    <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/Hotel/hotel-4.jpg" alt="hotel-4" class="imgcss"></a>
                    <div class="hoteltxtcss">Destina, Myanmar</div>
                    <div class="hotelduring">Duration : 5 Days</div>
                    <div class="populardeststar">Hotel: 3 stars</div>
                    <div class="readmore">Read more</div>
                </div>
            </div> 
            <div class="viewmorecss">
                <a href="#">
                    <img src="<?php bloginfo('template_url');?>/assets/images/more.png" alt="Mountain View" class="viewmoreimg">
                    View More
                </a>    
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 col-md-offset-9 col-sm-4 col-sm-offset-8 col-xs-6 col-xs-offset-6 visaimgcss">
                <img src="<?php bloginfo('template_url');?>/assets/images/paypal.jpeg" alt="paypal" class="paypalimg">
            </div> 
        </div>


<?php get_footer(); ?>        
    
        