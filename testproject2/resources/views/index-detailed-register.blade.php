@extends('base/nav_register')


@section('content')
    <div class="mainmenu-bg" id="mainmenu-bg"></div>
    <div id="mainmenu-wrap">
        <nav id="mainmenu" class="mainmenu">
            <button id="mainmenu-close" class="mainmenu-close" href="#"><i class="ion-android-close"></i></button>
            <ul>
                <li class="menu-item-has-children active">
                    <a href="index-detailed.html">Home <i class="fa fa-caret-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="index-agency.html">Home - Agency</a></li>
                        <li class="active"><a href="index-detailed.html">Home - Detailed</a></li>
                        <li><a href="index-banners.html">Home - Banners</a></li>
                        <li><a href="index-multi.html">Home - Multi</a></li>
                        <li><a href="index-booking.html">Home - Booking</a></li>
                        <li><a href="index-map.html">Home - Full Map</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="catalog-grid.html">Properties <i class="fa fa-caret-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="catalog-grid.html">Catalog - Grid Style</a></li>
                        <li><a href="catalog-list.html">Catalog - List Style</a></li>
                        <li><a href="property.html">Single Property - Style 1</a></li>
                        <li><a href="property-2.html">Single Property - Style 2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="agents.html">Agents <i class="fa fa-caret-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="agents.html">Agents List</a></li>
                        <li><a href="agent.html">Agent Page</a></li>
                    </ul>
                </li>
                <li>
                    <a href="elements.html">Elements</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="blog-grid.html">Blog <i class="fa fa-caret-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">Grid Style</a></li>
                        <li><a href="blog-list.html">List Style</a></li>
                        <li><a href="post.html">Single Post</a></li>
                        <li><a href="post-slider-sidebar-right.html">Slider Post</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="gallery.html">Pages <i class="fa fa-caret-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="404.html">404 Page</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>



    <div class="topblock-wrap" style="background-image: url(img/1920x1080_building-corner-sky-architecture-minimalism.jpg)">
        
        <div class="container topblock2">

            <div class="row counter-list">
                <div class="cf-sm-6 cf-lg-3 col-xs-6 col-sm-6 col-md-3 counter-item-col">
                    <div class="counter-item">
                        <p data-value="423" class="counter-item-val">423</p>
                        <p class="counter-item-ttl">Ratings</p>
                    </div>
                </div>
                <div class="cf-sm-6 cf-lg-3 col-xs-6 col-sm-6 col-md-3 counter-item-col">
                    <div class="counter-item">
                        <p data-value="7732" class="counter-item-val">7732</p>
                        <p class="counter-item-ttl">Properties</p>
                    </div>
                </div>
                <div class="cf-sm-6 cf-lg-3 col-xs-6 col-sm-6 col-md-3 counter-item-col">
                    <div class="counter-item">
                        <p data-value="1230" class="counter-item-val">1230</p>
                        <p class="counter-item-ttl">Clients</p>
                    </div>
                </div>
                <div class="cf-sm-6 cf-lg-3 col-xs-6 col-sm-6 col-md-3 counter-item-col">
                    <div class="counter-item">
                        <p data-value="621" class="counter-item-val">621</p>
                        <p class="counter-item-ttl">Transactions</p>
                    </div>
                </div>
            </div>



            <div class="search-tabs search2">
                <ul class="search2-top">
                    <li class="search2-loc">
                        <select class="chosen-select">
                            <option value="">City, Country</option>
                            <option value="1">Rome, Italy</option>
                            <option value="2">New-York, USA</option>
                            <option value="3">London, England</option>
                            <option value="4">Madrid, Spain</option>
                        </select>
                    </li>
                    <li class="search2-status search2-status-1 active" data-search-tab="#search-tab-1">Any</li>
                    <li class="search2-status" data-search-tab="#search-tab-2">For Rent</li>
                    <li class="search2-status" data-search-tab="#search-tab-3">For Sale</li>
                    <li class="search2-reset"><a href="#">Reset</a></li>
                </ul>
                <div class="search2-tabs">
                    <form action="#" class="search-tab search2-status-tab active" id="search-tab-1">
                        <div class="search2-main">
                            <div class="search2-col search2-type">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-type.png" alt=""><!-- NO SPACE --></span>
                                    Type
                                </label>
                                <select class="chosen-select">
                                    <option>Select Type</option>
                                    <option>Apartment</option>
                                    <option>Flat</option>
                                    <option>House</option>
                                    <option>Villa</option>
                                </select>
                            </div>
                            <div class="search2-col search2-bed">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-bed.png" alt=""><!-- NO SPACE --></span>
                                    Bedrooms
                                </label>
                                <ul class="search2-values">
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="1" class="styler-input"> <span><i>1</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="2" class="styler-input"> <span><i>2</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="3" class="styler-input" checked> <span><i>3</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="4" class="styler-input"> <span><i>4</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="5" class="styler-input"> <span><i>5</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="6" class="styler-input"> <span><i>6 +</i></span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search2-col search2-bath">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-bath.png" alt=""><!-- NO SPACE --></span>
                                    Bathrooms
                                </label>
                                <ul class="search2-values">
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="1" class="styler-input"> <span><i>1</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="2" class="styler-input" checked> <span><i>2</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="3" class="styler-input"> <span><i>3</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="4" class="styler-input"> <span><i>4</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="5+" class="styler-input"> <span><i>5 +</i></span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search2-col search2-floors">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-floor.png" alt=""><!-- NO SPACE --></span>
                                    Floors
                                </label>
                                <select class="chosen-select">
                                    <option>Any</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <div class="search2-advanced">
                            <div class="search2-col search2-price">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-price.png" alt=""><!-- NO SPACE --></span>
                                    Price Range
                                </label>
                                <input
                                        type="text"
                                        class="range-slider"
                                        data-min="56700"
                                        data-max="4000000"
                                        data-from="278400"
                                        data-to="3500000"
                                        data-type="double"
                                        data-grid="false"
                                        data-prefix="$"
                                >
                            </div>
                            <div class="search2-col search2-square">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-area.png" alt=""><!-- NO SPACE --></span>
                                    Square Feet
                                </label>
                                <input
                                        type="text"
                                        class="range-slider"
                                        data-min="70"
                                        data-max="4400"
                                        data-from="3100"
                                        data-to="3300"
                                        data-type="double"
                                        data-grid="false"
                                >
                            </div>
                            <div class="search2-col search2-year">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-year.png" alt=""><!-- NO SPACE --></span>
                                    Year Built
                                </label>
                                <input
                                        type="text"
                                        class="range-slider"
                                        data-min="2010"
                                        data-max="2017"
                                        data-from="2014"
                                        data-to="2017"
                                        data-type="double"
                                        data-grid="false"
                                >
                            </div>
                        </div>

                        <div class="search2-features">
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Air Conditioning</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox"> <span>Microwave</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Window Coverings</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox"> <span>Lawn</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Swimming Pool</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>WiFi</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Dryer</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox"> <span>Gym</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox"> <span>TV Cable</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Laundry</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Barbeque</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Refrigerator</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Sauna</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox"> <span>Washer</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Outdoor Shower</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Outdoor Shower</span></label>
                        </div>
                    </form>
                    <form action="#" class="search-tab search2-status-tab" id="search-tab-2">
                        <div class="search2-main">
                            <div class="search2-col search2-type">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-type.png" alt=""><!-- NO SPACE --></span>
                                    Type
                                </label>
                                <select class="chosen-select">
                                    <option>Select Type</option>
                                    <option>Apartment</option>
                                    <option>Flat</option>
                                    <option>House</option>
                                    <option>Villa</option>
                                </select>
                            </div>
                            <div class="search2-col search2-bed">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-bed.png" alt=""><!-- NO SPACE --></span>
                                    Bedrooms
                                </label>
                                <ul class="search2-values">
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="1" class="styler-input"> <span><i>1</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="2" class="styler-input"> <span><i>2</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="3" class="styler-input" checked> <span><i>3</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="4" class="styler-input"> <span><i>4</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="5" class="styler-input"> <span><i>5</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="6" class="styler-input"> <span><i>6 +</i></span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search2-col search2-bath">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-bath.png" alt=""><!-- NO SPACE --></span>
                                    Bathrooms
                                </label>
                                <ul class="search2-values">
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="1" class="styler-input"> <span><i>1</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="2" class="styler-input" checked> <span><i>2</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="3" class="styler-input"> <span><i>3</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="4" class="styler-input"> <span><i>4</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="5+" class="styler-input"> <span><i>5 +</i></span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search2-col search2-floors">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-floor.png" alt=""><!-- NO SPACE --></span>
                                    Floors
                                </label>
                                <select class="chosen-select">
                                    <option>Any</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <div class="search2-advanced">
                            <div class="search2-col search2-price">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-price.png" alt=""><!-- NO SPACE --></span>
                                    Price Range
                                </label>
                                <input
                                        type="text"
                                        class="range-slider"
                                        data-min="56700"
                                        data-max="4000000"
                                        data-from="278400"
                                        data-to="3500000"
                                        data-type="double"
                                        data-grid="false"
                                        data-prefix="$"
                                >
                            </div>
                            <div class="search2-col search2-square">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-area.png" alt=""><!-- NO SPACE --></span>
                                    Square Feet
                                </label>
                                <input
                                        type="text"
                                        class="range-slider"
                                        data-min="70"
                                        data-max="4400"
                                        data-from="3100"
                                        data-to="3300"
                                        data-type="double"
                                        data-grid="false"
                                >
                            </div>
                            <div class="search2-col search2-year">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-year.png" alt=""><!-- NO SPACE --></span>
                                    Year Built
                                </label>
                                <input
                                        type="text"
                                        class="range-slider"
                                        data-min="2010"
                                        data-max="2017"
                                        data-from="2014"
                                        data-to="2017"
                                        data-type="double"
                                        data-grid="false"
                                >
                            </div>
                        </div>
                    </form>
                    <form action="#" class="search-tab search2-status-tab" id="search-tab-3">
                        <div class="search2-main">
                            <div class="search2-col search2-type">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-type.png" alt=""><!-- NO SPACE --></span>
                                    Type
                                </label>
                                <select class="chosen-select">
                                    <option>Select Type</option>
                                    <option>Apartment</option>
                                    <option>Flat</option>
                                    <option>House</option>
                                    <option>Villa</option>
                                </select>
                            </div>
                            <div class="search2-col search2-bed">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-bed.png" alt=""><!-- NO SPACE --></span>
                                    Bedrooms
                                </label>
                                <ul class="search2-values">
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="1" class="styler-input"> <span><i>1</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="2" class="styler-input"> <span><i>2</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="3" class="styler-input" checked> <span><i>3</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="4" class="styler-input"> <span><i>4</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="5" class="styler-input"> <span><i>5</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="radio" name="search2-bath-1" value="6" class="styler-input"> <span><i>6 +</i></span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search2-col search2-bath">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-bath.png" alt=""><!-- NO SPACE --></span>
                                    Bathrooms
                                </label>
                                <ul class="search2-values">
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="1" class="styler-input"> <span><i>1</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="2" class="styler-input" checked> <span><i>2</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="3" class="styler-input"> <span><i>3</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="4" class="styler-input"> <span><i>4</i></span></label>
                                    </li>
                                    <li>
                                        <label class="search2-label-val"><input type="checkbox" value="5+" class="styler-input"> <span><i>5 +</i></span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search2-col search2-floors">
                                <label class="search2-label">
                                    <span class="search2-label-ico"><!--   NO SPACE --><img src="img/ico-floor.png" alt=""><!-- NO SPACE --></span>
                                    Floors
                                </label>
                                <select class="chosen-select">
                                    <option>Any</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <div class="search2-features">
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Air Conditioning</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox"> <span>Microwave</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Window Coverings</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox"> <span>Lawn</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Swimming Pool</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>WiFi</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Dryer</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox"> <span>Gym</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox"> <span>TV Cable</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Laundry</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Barbeque</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Refrigerator</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Sauna</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox"> <span>Washer</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Outdoor Shower</span></label>
                            <label class="cf-xs-6 cf-sm-4 cf-lg-3 col-xs-6 col-sm-4 col-md-3"><input type="checkbox" checked> <span>Outdoor Shower</span></label>
                        </div>
                    </form>
                </div>
            </div>


        </div>

        <div class="search2-submit">
            <input type="submit" value="Show 2342 Results">
        </div>

    </div>


    <div class="container maincont">

        <div class="mainttl-wrap">
            <h1 class="mainttl"><span>Latest <b>Offers</b></span></h1>
            <div class="mainttl-sort">
                <p class="mainttl-sort-label">Sort by: <span>Rating</span></p>
                <ul class="mainttl-sort-values">
                    <li><a href="#">Default Order</a></li>
                    <li><a href="#">Name</a></li>
                    <li class="active"><a href="#">Rating</a></li>
                    <li><a href="#">Price</a></li>
                    <li><a href="#">Date</a></li>
                    <li><a href="#">Popularity</a></li>
                </ul>
            </div>
        </div>

        <div class="row prop-grid">
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="img/119588452_4666462576727202_3506099912071125158_n.jpg" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">บางนา</a>, <a href="catalog-grid.html">ก.ม.8</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property-01.html">โครงการ CITY SCENERY</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Meter
                        </dt>
                        <dd>375</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>6</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">฿22,000,000</span></p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Sale</a></p>
                    </div>
                </div>
            </div>
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">Rome</a>, <a href="catalog-grid.html">Italy</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property.html">Family Home 14 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>1400</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$1800</span> <span class="prop-i-price-currency">/ mo</span>
                        </p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Rent</a></p>
                    </div>
                </div>
            </div>
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">Paris</a>, <a href="catalog-grid.html">France</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property.html">Loft 13 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>1300</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$130,500</span></p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Sale</a></p>
                    </div>
                </div>
            </div>
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">San Francisco</a>, <a href="catalog-grid.html">USA</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property.html">Apartment 11 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>1100</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$1300</span> <span class="prop-i-price-currency">/ mo</span>
                        </p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Rent</a></p>
                    </div>
                </div>
            </div>
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">Copenhagen</a>, <a href="catalog-grid.html">Denmark</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property.html">Condo 21 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>2100</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$140,700</span></p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Sale</a></p>
                    </div>
                </div>
            </div>
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">Ankara</a>, <a href="catalog-grid.html">Turkey</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property.html">Loft 11 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>1100</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$1200</span> <span class="prop-i-price-currency">/ mo</span>
                        </p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Rent</a></p>
                    </div>
                </div>
            </div>
        </div>

        <button class="prop-items-more">Show more</button>

    </div>

    <div class="banner-block" style="background-image: url(http://placehold.it/1920x900);">
        <div class="stylization container">
            <h3>Apartaments with <span class="special-marked">best interior <img class="special-marked-lt" src="img/triangle-lt.png" alt=""> <img class="special-marked-rt" src="img/triangle-rt.png" alt=""></span></h3>
            <a href="catalog-grid.html" class="btn2">Read more</a>
        </div>
    </div>

    <div class="container maincont">

        <div class="mainttl-wrap">
            <h1 class="mainttl"><span>Featured <b>Offers</b></span></h1>
            <div class="mainttl-sort">
                <p class="mainttl-sort-label">Sort by: <span>Rating</span></p>
                <ul class="mainttl-sort-values">
                    <li><a href="#">Default Order</a></li>
                    <li><a href="#">Name</a></li>
                    <li class="active"><a href="#">Rating</a></li>
                    <li><a href="#">Price</a></li>
                    <li><a href="#">Date</a></li>
                    <li><a href="#">Popularity</a></li>
                </ul>
            </div>
        </div>

        <div class="row prop-grid">
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">Brooklyn</a>, <a href="catalog-grid.html">USA</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property-01.html">Apartment 21 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>2100</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$160,300</span></p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Sale</a></p>
                    </div>
                </div>
            </div>
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">Rome</a>, <a href="catalog-grid.html">Italy</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property.html">Family Home 14 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>1400</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$1800</span> <span class="prop-i-price-currency">/ mo</span>
                        </p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Rent</a></p>
                    </div>
                </div>
            </div>
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">Paris</a>, <a href="catalog-grid.html">France</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property.html">Loft 13 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>1300</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$130,500</span></p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Sale</a></p>
                    </div>
                </div>
            </div>
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">San Francisco</a>, <a href="catalog-grid.html">USA</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property.html">Apartment 11 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>1100</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$1300</span> <span class="prop-i-price-currency">/ mo</span>
                        </p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Rent</a></p>
                    </div>
                </div>
            </div>
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">Copenhagen</a>, <a href="catalog-grid.html">Denmark</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property.html">Condo 21 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>2100</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$140,700</span></p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Sale</a></p>
                    </div>
                </div>
            </div>
            <div class="cf-xs-6 cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 prop-i-col">
                <div class="prop-i">
                    <a href="property.html" class="prop-i-img">
                        <img src="http://placehold.it/362x215" alt="">
                    </a>
                    <div class="prop-i-top">
                        <p class="prop-i-loc"><a href="catalog-grid.html">Ankara</a>, <a href="catalog-grid.html">Turkey</a></p>
                        <div class="prop-i-moreinfo">
                            <ul>
                                <li class="prop-i-date">
                                    Published 2 month ago
                                </li>
                                <li>
                                    <a href="#">Add to Favorite</a>
                                </li>
                                <li>
                                    <a href="catalog-grid.html">Similar Properties</a>
                                </li>
                                <li class="prop-i-agent">
                                    <a href="agent.html" class="prop-i-agent-img"><img src="http://placehold.it/80x80" alt=""></a>
                                    <p class="prop-i-agent-type">Agent</p>
                                    <p class="prop-i-agent-name"><a href="agent.html">Mark Duncan</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="prop-i-ttl">
                        <a href="property.html">Loft 11 Sqrt</a>
                    </h3>
                    <ul class="prop-i-rating">
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                        <li><i class="ion-android-star"></i></li>
                    </ul>
                    <dl class="prop-i-info">
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo1.png" alt=""></span>
                            Square Feet
                        </dt>
                        <dd>1100</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo2.png" alt=""></span>
                            Bedrooms
                        </dt>
                        <dd>3</dd>
                        <dt>
                            <span class="prop-i-info-icon"><img src="img/propinfo3.png" alt=""></span>
                            Guests
                        </dt>
                        <dd>4</dd>
                    </dl>
                    <div class="prop-i-bottom">
                        <p class="prop-i-price"><span class="prop-i-price-val">$1200</span> <span class="prop-i-price-currency">/ mo</span>
                        </p>
                        <p class="prop-i-type"><a href="catalog-grid.html">For Rent</a></p>
                    </div>
                </div>
            </div>
        </div>

        <button class="prop-items-more">Show more</button>

    </div>


    <div class="modalform">
        <form action="#" method="POST" class="form-validate">
            <p class="modalform-ttl">Contact Us</p>
            <input type="text" placeholder="Your name" data-required="text" name="name">
            <input type="text" placeholder="Your phone" data-required="text" name="phone">
            <input type="text" placeholder="Your email" data-required="text" data-required-email="email" name="email">
            <button class="btn1" type="submit">Send</button>
        </form>
    </div>


@endsection

