<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>


<!-- bread crumbs start -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- bread crumbs end -->


<!-- product details start-->
<section class="prod-detail-first">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="pro-detail-img">
                    <a data-fancybox="gallery" data-src="images/Modern-02.jpeg">
                        <img src="images/Modern-02.jpeg" alt="" class="img-fluid">
                    </a>
                    <a data-fancybox="gallery" data-src="images/Modern-03.jpeg">
                        <img src="images/Modern-03.jpeg" alt="" class="img-fluid">
                    </a>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <a data-fancybox="gallery" data-src="images/Modern-04.jpeg">
                                <img src="images/Modern-04.jpeg" alt="" class="img-fluid ">
                            </a>
                        </div>
                        <div class="col-12 col-lg-6">
                            <a data-fancybox="gallery" data-src="images/Modern-05.jpg" class="show-all-photos">
                                <img src="images/Modern-05.jpg" alt="" class="img-fluid" class="">
                                <span>show all photos</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div>
                    <h2>Modern</h2>
                    <ul class="ratings">
                        <li>
                            <h4>
                                160+ Sold
                            </h4>
                        </li>
                        <li>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </li>
                        <li>
                            <h4>
                                <a href="#">
                                    5Reviews
                                </a>
                            </h4>
                        </li>
                    </ul>
                    <p>Modern has a timeless black and white minimalist theme.
                    </p>
                    <ul class="features">
                        <li>
                            <h5>
                                Popular
                            </h5>
                        </li>
                        <li>
                            <h5>
                                2-4 Weeks
                            </h5>
                        </li>
                    </ul>
                    <div class="Remodeling-Service">
                        <input type="checkbox">
                        <label for="">

                        </label>
                        <img src="images/package_service.png" alt="">
                        <div>
                            <h4>Eano's Remodeling Service</h4>
                            <h5>Let Eano handle construction for a complete, hassle-free renovation experience</h5>
                        </div>
                    </div>
                    <div class="material-list">
                        <div class="material-list-heading">
                            <h3>Material List</h3>
                            <h5><a href="#">24 Items <i class="fa-regular fa-chevron-right"></i></a></h5>
                        </div>
                        <div class="material-list-slider">
                            <div class="material-list-slide">
                                <img src="images/matr1.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="material-list-slide">
                                <img src="images/matr1.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="material-list-slide">
                                <img src="images/matr1.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="material-list-slide">
                                <img src="images/matr1.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="material-list-slide">
                                <img src="images/matr1.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="material-list-slide">
                                <img src="images/matr1.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="material-list-slide">
                                <img src="images/matr1.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="material-list-slide">
                                <img src="images/matr1.jpeg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="prod-size">
                        <h3>Bathroom Size</h3>
                        <ul>
                            <li>
                                <input type="radio" name="size" id="size-small">
                                <label for="size-small">Small</label>
                                <span>
                                    < 30 sqft. </span>
                            </li>
                            <li>
                                <input type="radio" name="size" id="size-medium">
                                <label for="size-medium">Medium</label>
                                <span> 30-80 sqft. </span>
                            </li>
                            <li>
                                <input type="radio" name="size" id="size-large">
                                <label for="size-large">Large</label>
                                <span> >80 sqft. </span>
                            </li>
                        </ul>
                    </div>
                    <div class="Layout">
                        <h3>Layout</h3>
                        <div class="layout-box">
                            <div class="layout-img">
                                <img src="images/layout1.png" alt="">
                                <h4>
                                    Powder Room
                                </h4>
                            </div>
                            <div class="select-radio">
                                <input type="radio" name="Layout" id="layout1">
                                <label for="layout1"> Select</label>
                            </div>
                        </div>
                        <div class="layout-box">
                            <div class="layout-img">
                                <img src="images/layout2.png" alt="">
                                <h4>
                                    Shower Only
                                </h4>
                            </div>
                            <div class="select-radio">
                                <input type="radio" name="Layout" id="layout2">
                                <label for="layout2"> Select</label>
                            </div>
                        </div>
                        <div class="layout-box">
                            <div class="layout-img">
                                <img src="images/layout3.png" alt="">
                                <h4>
                                    Tub & Shower Combination
                                </h4>
                            </div>
                            <div class="select-radio">
                                <input type="radio" name="Layout" id="layout3">
                                <label for="layout3"> Select</label>
                            </div>
                        </div>
                        <div class="layout-box">
                            <div class="layout-img">
                                <img src="images/layout4.png" alt="">
                                <h4>
                                    Separate Tub & Shower
                                </h4>
                            </div>
                            <div class="select-radio">
                                <input type="radio" name="Layout" id="layout4">
                                <label for="layout4"> Select</label>
                            </div>
                        </div>
                    </div>
                    <div class="Layout">
                        <h3>Wet Zone Enclosure Type</h3>
                        <div class="layout-box">
                            <div class="layout-img">
                                <img src="images/wetzone1.png" alt="">
                                <h4>
                                    Half Glass
                                </h4>
                            </div>
                            <div class="select-radio">
                                <input type="radio" name="WetZone" id="WetZone1">
                                <label for="WetZone1"> Select</label>
                            </div>
                        </div>
                        <div class="layout-box">
                            <div class="layout-img">
                                <img src="images/wetzone2.png" alt="">
                                <h4>
                                    Full Glass
                                </h4>
                            </div>
                            <div class="select-radio">
                                <input type="radio" name="WetZone" id="WetZone2">
                                <label for="WetZone2"> Select</label>
                            </div>
                        </div>
                        <div class="layout-box">
                            <div class="layout-img">
                                <img src="images/wetzone3.png" alt="">
                                <h4>
                                    Curtain
                                </h4>
                            </div>
                            <div class="select-radio">
                                <input type="radio" name="WetZone" id="WetZone3">
                                <label for="WetZone3"> Select</label>
                            </div>
                        </div>
                    </div>
                    <div class="Layout">
                        <h3>Dry Zone Tiling</h3>
                        <div class="layout-box">
                            <div class="layout-img">
                                <img src="images/dryzone1.png" alt="">
                                <h4>
                                    Half Way Up
                                </h4>
                            </div>
                            <div class="select-radio">
                                <input type="radio" name="DryZone" id="DryZone1">
                                <label for="DryZone1"> Select</label>
                            </div>
                        </div>
                        <div class="layout-box">
                            <div class="layout-img">
                                <img src="images/dryzone2.png" alt="">
                                <h4>
                                    Floor to Ceiling
                                </h4>
                            </div>
                            <div class="select-radio">
                                <input type="radio" name="DryZone" id="DryZone2">
                                <label for="DryZone2"> Select</label>
                            </div>
                        </div>
                        <div class="layout-box">
                            <div class="layout-img">
                                <img src="images/dryzone3.png" alt="">
                                <h4>
                                    None
                                </h4>
                            </div>
                            <div class="select-radio">
                                <input type="radio" name="DryZone" id="DryZone3">
                                <label for="DryZone3"> Select</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product details end-->

<!-- swap product detials sec start -->
<section class="swap-product-sec">
    <section class="prod-detail-first">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="pro-detail-img">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <img src="images/area1.png" alt="" class="img-fluid changing-img Dry-Area-1 prod-main">
                            </div>
                            <div class="col-12 col-lg-4">
                                <img src="images/area2.jpeg" alt="" class="img-fluid prod-side-img">
                                <img src="images/area3.png" alt="" class="img-fluid prod-side-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div>
                        <div class="Layout">
                            <h3>Dry Area 1</h3>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/area1.png" alt="" class="Dry-Area-1">
                                    <div>
                                        <h4>
                                            Vanity Light
                                        </h4>
                                        <h5>
                                            Mitzi by Hudson Valley Lighting
                                        </h5>
                                        <h6>
                                            Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                                        </h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Dry-Area-1')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/area1.png" alt="">
                                    <div>
                                        <h4>
                                            Vanity
                                        </h4>
                                        <h6>
                                            30 in.Glossy White
                                        </h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Dry-Area-1')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                            <div class="layout-box">
                                <div class="layout-img " type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/area1.png" alt="">
                                    <div>
                                        <h4>
                                            Toilet
                                        </h4>
                                        <h6>28.375 in x 17.1875 in x 29 in</h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Dry-Area-1')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="prod-detail-first">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="pro-detail-img">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <img src="images/area4.png" alt="" class="img-fluid changing-img Dry-Area-2 prod-main">
                            </div>
                            <div class="col-12 col-lg-4">
                                <img src="images/area5.jpeg" alt="" class="img-fluid prod-side-img">
                                <img src="images/area6.png" alt="" class="img-fluid prod-side-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div>
                        <div class="Layout">
                            <h3>Dry Area 2</h3>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/layout1.png" alt="Dry-Area-2">
                                    <div>
                                        <h4>
                                            Vanity Light
                                        </h4>
                                        <h5>
                                            Mitzi by Hudson Valley Lighting
                                        </h5>
                                        <h6>
                                            Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                                        </h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Dry-Area-2')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/layout2.png" alt="">
                                    <div>
                                        <h4>
                                            Vanity
                                        </h4>
                                        <h6>
                                            30 in.Glossy White
                                        </h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Dry-Area-2')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/layout3.png" alt="">
                                    <div>
                                        <h4>
                                            Toilet
                                        </h4>
                                        <h6>28.375 in x 17.1875 in x 29 in</h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Dry-Area-2')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="prod-detail-first">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="pro-detail-img">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <img src="images/Modern-04.jpeg" alt=""
                                    class="img-fluid changing-img Wet-Area prod-main">
                            </div>
                            <div class="col-12 col-lg-4">
                                <img src="images/Modern-05.jpg" alt="" class="img-fluid prod-side-img">
                                <img src="images/Modern-05.jpg" alt="" class="img-fluid prod-side-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div>
                        <div class="Layout">
                            <h3>Wet Area</h3>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/layout1.png" alt="" class="Wet-Area">
                                    <div>
                                        <h4>
                                            Vanity Light
                                        </h4>
                                        <h5>
                                            Mitzi by Hudson Valley Lighting
                                        </h5>
                                        <h6>
                                            Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                                        </h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Wet-Area')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/layout2.png" alt="">
                                    <div>
                                        <h4>
                                            Vanity
                                        </h4>
                                        <h6>
                                            30 in.Glossy White
                                        </h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Wet-Area')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/layout3.png" alt="">
                                    <div>
                                        <h4>
                                            Toilet
                                        </h4>
                                        <h6>28.375 in x 17.1875 in x 29 in</h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Wet-Area')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="prod-detail-first">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="pro-detail-img">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <img src="images/Modern-04.jpeg" alt=""
                                    class="img-fluid changing-img Finishing prod-main">
                            </div>
                            <div class="col-12 col-lg-4">
                                <img src="images/Modern-05.jpg" alt="" class="img-fluid prod-side-img">
                                <img src="images/Modern-05.jpg" alt="" class="img-fluid prod-side-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div>
                        <div class="Layout">
                            <h3>Finishing Items</h3>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/layout1.png" alt="" class="Finishing">
                                    <div>
                                        <h4>
                                            Vanity Light
                                        </h4>
                                        <h5>
                                            Mitzi by Hudson Valley Lighting
                                        </h5>
                                        <h6>
                                            Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                                        </h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Finishing')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/layout2.png" alt="">
                                    <div>
                                        <h4>
                                            Vanity
                                        </h4>
                                        <h6>
                                            30 in.Glossy White
                                        </h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Finishing')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                            <div class="layout-box">
                                <div class="layout-img" type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#view-detail">
                                    <img src="images/layout3.png" alt="">
                                    <div>
                                        <h4>
                                            Toilet
                                        </h4>
                                        <h6>28.375 in x 17.1875 in x 29 in</h6>
                                    </div>
                                </div>
                                <div class="swap-btn-sec">
                                    <button class="swap-btn" onclick="openSideSwap('Finishing')">swap</button>
                                    <button class="remove-btn">remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- swap product detials sec start -->

<!-- other materials sec start -->
<section class="other-materials">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h3>Other Materials</h3>
                <div class="other-materials-slider">
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <div>
                                <ul>
                                    <li>
                                        <a href="">
                                            <h6>remove</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <h6>swap</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                    <div class="other-materials-slide">
                        <div class="other-materials-img">
                            <img src="images/prodslideImg1.png" alt="">
                            <ul>
                                <li>
                                    <a href="">
                                        <h6>remove</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <h6>swap</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="other-mat-desc">
                            <h4>
                                Switch
                            </h4>
                            <h6>
                                Levitonf
                            </h6>
                            <span type="button" class="btn" data-bs-toggle="modal" data-bs-target="#view-detail">
                                view details >
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- other materials sec end -->


<!-- summery sec start -->
<section class="summery-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="pro-detail-img">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <img src="images/summery1.png" alt="" class="img-fluid summ-3">
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="images/summery2.png" alt="" class="img-fluid summ-3">
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="images/summery3.jpeg" alt="" class="img-fluid summ-3">
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="images/summery4.png" alt="" class="img-fluid summ-3">
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="images/summery5.png" alt="" class="img-fluid summ-3">
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="images/summery6.png" alt="" class="img-fluid summ-3">
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="images/summery7.jpeg" alt="" class="img-fluid summ-3">
                        </div>
                        <div class="col-12 col-lg-3">
                            <img src="images/summery8.png" alt="" class="img-fluid summ-3">
                        </div>
                        <div class="col-12 col-lg-4">
                            <img src="images/summery9.png" alt="" class="img-fluid summ-4">
                        </div>
                        <div class="col-12 col-lg-4">
                            <img src="images/summery10.jpeg" alt="" class="img-fluid summ-4">
                        </div>
                        <div class="col-12 col-lg-4">
                            <img src="images/summery11.jpeg" alt="" class="img-fluid summ-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="sidecol">
                    <h6>Summery</h6>
                    <h2>Modern</h2>
                    <h3>Specifications</h3>
                    <p>
                        Size: < 30 sqft. | Layout: Powder Room | Wet Zone Enclosure Type: Half Glass | Dry Zone Tiling:
                            Half Way Up </p>

                            <div class="material-list">
                                <div class="material-list-heading">
                                    <h3>Material List</h3>
                                    <h5><a href="#">24 Items <i class="fa-regular fa-chevron-right"></i></a></h5>
                                </div>
                                <div class="material-list-slider">
                                    <div class="material-list-slide">
                                        <img src="images/matr1.jpeg" alt="" class="img-fluid">
                                    </div>
                                    <div class="material-list-slide">
                                        <img src="images/matr1.jpeg" alt="" class="img-fluid">
                                    </div>
                                    <div class="material-list-slide">
                                        <img src="images/matr1.jpeg" alt="" class="img-fluid">
                                    </div>
                                    <div class="material-list-slide">
                                        <img src="images/matr1.jpeg" alt="" class="img-fluid">
                                    </div>
                                    <div class="material-list-slide">
                                        <img src="images/matr1.jpeg" alt="" class="img-fluid">
                                    </div>
                                    <div class="material-list-slide">
                                        <img src="images/matr1.jpeg" alt="" class="img-fluid">
                                    </div>
                                    <div class="material-list-slide">
                                        <img src="images/matr1.jpeg" alt="" class="img-fluid">
                                    </div>
                                    <div class="material-list-slide">
                                        <img src="images/matr1.jpeg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="Remodeling-Service">
                                <input type="checkbox">
                                <label for="">

                                </label>
                                <img src="images/package_service.png" alt="">
                                <div>
                                    <h4>Eano's Remodeling Service</h4>
                                    <h5>Let Eano handle construction for a complete, hassle-free renovation experience
                                    </h5>
                                </div>
                            </div>
                            <div class="estimated-at">
                                <ul>
                                    <li>
                                        <h6>Estimated at</h6>
                                    </li>
                                    <li>
                                        <h2>
                                            $4,500
                                        </h2>
                                    </li>
                                </ul>
                                <a href="#" class="theme-btn">Select Design</a>
                                <p>This estimate is based on typical costs of local projects. Your final quote will vary
                                    no
                                    more than 20％ based on your project needs and current market prices.
                                </p>
                            </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- summery sec end -->

<!-- Reviews sec start -->
<section class="Reviews-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="reviews-head">
                    <h2>5 Reviews</h2>
                </div>
                <ul class="reviews-loop">
                    <li>
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <ul class="ratings">
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                                <h6>
                                    08/04/2022
                                </h6>
                                <h5>
                                    Verified Purchase
                                </h5>
                            </div>
                            <div class="col-12 col-lg-9">
                                <div class="main-review">
                                    <h4>
                                        Overall, the material service from ShopPackage is quite good. Although we
                                        initially ordered the wrong bathroom door, once we notified them, their staff
                                        immediately helped us arrange a return and placed a new order. This didn't delay
                                        our project timeline! Using their service eliminates the need to find an
                                        additional designer, which I think is a great point. You can directly choose the
                                        design you like.
                                    </h4>
                                    <div>
                                        <ul>
                                            <li>
                                                <img src="images/proj2.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/proj2.png" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <ul class="ratings">
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                                <h6>
                                    08/04/2022
                                </h6>
                                <h5>
                                    Verified Purchase
                                </h5>
                            </div>
                            <div class="col-12 col-lg-9">
                                <div class="main-review">
                                    <h4>
                                        Overall, the material service from ShopPackage is quite good. Although we
                                        initially ordered the wrong bathroom door,
                                    </h4>
                                    <div>
                                        <ul>
                                            <li>
                                                <img src="images/proj2.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/proj2.png" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <ul class="ratings">
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                                <h6>
                                    08/04/2022
                                </h6>
                                <h5>
                                    Verified Purchase
                                </h5>
                            </div>
                            <div class="col-12 col-lg-9">
                                <div class="main-review">
                                    <h4>
                                        Overall, the material service from ShopPackage is quite good. Although we
                                        initially ordered the wrong bathroom door, once we notified them, their staff
                                    </h4>
                                    <div>
                                        <ul>
                                            <li>
                                                <img src="images/proj2.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/proj2.png" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Reviews sec end -->



<!--  swap right sidebar start -->
<section class="SideSwap">
    <div class="SideSwap-head">
        <a href="javascript:void()" class="" onclick="closeSideSwap()">
            <i class="far fa-times"></i>
        </a>
        <h2>
            Vanity
        </h2>
        <form action="">
            <i class="far fa-search"></i>
            <input type="text" placeholder="Search for materials">
        </form>
    </div>
    <div class="SideSwap-pord">
        <div class="layout-box">
            <div class="layout-img">
                <div class="layout-img-sec">
                    <img src="images/layout1.png" alt="">
                    <div class="favourite">
                        <input type="checkbox" name="favourite" id="favourite1">
                        <label for="favourite1">
                            <i class="fas fa-heart"></i>
                        </label>
                    </div>
                </div>
                <div>
                    <h4>
                        Vanity Light
                    </h4>
                    <h5>
                        Mitzi by Hudson Valley Lighting
                    </h5>
                    <h6>
                        Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                    </h6>
                </div>
            </div>
            <div class="swap-btn-sec">
                <button class="swap-btn sidebar" onclick="changeImg('images/layout1.png')">swap</button>
            </div>
        </div>
        <div class="layout-box">
            <div class="layout-img">
                <div class="layout-img-sec">
                    <img src="images/layout2.png" alt="">
                    <div class="favourite">
                        <input type="checkbox" name="favourite" id="favourite1">
                        <label for="favourite1">
                            <i class="fas fa-heart"></i>
                        </label>
                    </div>
                </div>
                <div>
                    <h4>
                        Vanity Light
                    </h4>
                    <h5>
                        Mitzi by Hudson Valley Lighting
                    </h5>
                    <h6>
                        Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                    </h6>
                </div>
            </div>
            <div class="swap-btn-sec">
                <button class="swap-btn sidebar" onclick="changeImg('images/layout2.png')">swap</button>
            </div>
        </div>
        <div class="layout-box">
            <div class="layout-img">
                <div class="layout-img-sec">
                    <img src="images/layout3.png" alt="">
                    <div class="favourite">
                        <input type="checkbox" name="favourite" id="favourite1">
                        <label for="favourite1">
                            <i class="fas fa-heart"></i>
                        </label>
                    </div>
                </div>
                <div>
                    <h4>
                        Vanity Light
                    </h4>
                    <h5>
                        Mitzi by Hudson Valley Lighting
                    </h5>
                    <h6>
                        Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                    </h6>
                </div>
            </div>
            <div class="swap-btn-sec">
                <button class="swap-btn sidebar" onclick="changeImg('images/layout3.png')">swap</button>
            </div>
        </div>
        <div class="layout-box">
            <div class="layout-img">
                <div class="layout-img-sec">
                    <img src="images/layout4.png" alt="">
                    <div class="favourite">
                        <input type="checkbox" name="favourite" id="favourite1">
                        <label for="favourite1">
                            <i class="fas fa-heart"></i>
                        </label>
                    </div>
                </div>
                <div>
                    <h4>
                        Vanity Light
                    </h4>
                    <h5>
                        Mitzi by Hudson Valley Lighting
                    </h5>
                    <h6>
                        Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                    </h6>
                </div>
            </div>
            <div class="swap-btn-sec">
                <button class="swap-btn sidebar" onclick="changeImg('images/layout4.png')">swap</button>
            </div>
        </div>
        <div class="layout-box">
            <div class="layout-img">
                <div class="layout-img-sec">
                    <img src="images/layout1.png" alt="">
                    <div class="favourite">
                        <input type="checkbox" name="favourite" id="favourite1">
                        <label for="favourite1">
                            <i class="fas fa-heart"></i>
                        </label>
                    </div>
                </div>
                <div>
                    <h4>
                        Vanity Light
                    </h4>
                    <h5>
                        Mitzi by Hudson Valley Lighting
                    </h5>
                    <h6>
                        Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                    </h6>
                </div>
            </div>
            <div class="swap-btn-sec">
                <button class="swap-btn sidebar" onclick="changeImg('images/layout1.png')">swap</button>
            </div>
        </div>
        <div class="layout-box">
            <div class="layout-img">
                <div class="layout-img-sec">
                    <img src="images/layout1.png" alt="">
                    <div class="favourite">
                        <input type="checkbox" name="favourite" id="favourite1">
                        <label for="favourite1">
                            <i class="fas fa-heart"></i>
                        </label>
                    </div>
                </div>
                <div>
                    <h4>
                        Vanity Light
                    </h4>
                    <h5>
                        Mitzi by Hudson Valley Lighting
                    </h5>
                    <h6>
                        Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                    </h6>
                </div>
            </div>
            <div class="swap-btn-sec">
                <button class="swap-btn sidebar" onclick="changeImg('images/layout1.png')">swap</button>
            </div>
        </div>
        <div class="layout-box">
            <div class="layout-img">
                <div class="layout-img-sec">
                    <img src="images/layout1.png" alt="">
                    <div class="favourite">
                        <input type="checkbox" name="favourite" id="favourite1">
                        <label for="favourite1">
                            <i class="fas fa-heart"></i>
                        </label>
                    </div>
                </div>
                <div>
                    <h4>
                        Vanity Light
                    </h4>
                    <h5>
                        Mitzi by Hudson Valley Lighting
                    </h5>
                    <h6>
                        Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                    </h6>
                </div>
            </div>
            <div class="swap-btn-sec">
                <button class="swap-btn sidebar" onclick="changeImg('images/layout1.png')">swap</button>
            </div>
        </div>
        <div class="layout-box">
            <div class="layout-img">
                <div class="layout-img-sec">
                    <img src="images/layout1.png" alt="">
                    <div class="favourite">
                        <input type="checkbox" name="favourite" id="favourite1">
                        <label for="favourite1">
                            <i class="fas fa-heart"></i>
                        </label>
                    </div>
                </div>
                <div>
                    <h4>
                        Vanity Light
                    </h4>
                    <h5>
                        Mitzi by Hudson Valley Lighting
                    </h5>
                    <h6>
                        Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                    </h6>
                </div>
            </div>
            <div class="swap-btn-sec">
                <button class="swap-btn sidebar" onclick="changeImg('images/layout1.png')">swap</button>
            </div>
        </div>
        <div class="layout-box">
            <div class="layout-img">
                <div class="layout-img-sec">
                    <img src="images/layout1.png" alt="">
                    <div class="favourite">
                        <input type="checkbox" name="favourite" id="favourite1">
                        <label for="favourite1">
                            <i class="fas fa-heart"></i>
                        </label>
                    </div>
                </div>
                <div>
                    <h4>
                        Vanity Light
                    </h4>
                    <h5>
                        Mitzi by Hudson Valley Lighting
                    </h5>
                    <h6>
                        Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                    </h6>
                </div>
            </div>
            <div class="swap-btn-sec">
                <button class="swap-btn sidebar" onclick="changeImg('images/layout1.png')">swap</button>
            </div>
        </div>
        <div class="layout-box">
            <div class="layout-img">
                <div class="layout-img-sec">
                    <img src="images/layout1.png" alt="">
                    <div class="favourite">
                        <input type="checkbox" name="favourite" id="favourite1">
                        <label for="favourite1">
                            <i class="fas fa-heart"></i>
                        </label>
                    </div>
                </div>
                <div>
                    <h4>
                        Vanity Light
                    </h4>
                    <h5>
                        Mitzi by Hudson Valley Lighting
                    </h5>
                    <h6>
                        Fixture Depth (In.) 8.25 x Height (In.) 11.5 x Width
                    </h6>
                </div>
            </div>
            <div class="swap-btn-sec">
                <button class="swap-btn sidebar" onclick="changeImg('images/layout1.png')">swap</button>
            </div>
        </div>
    </div>
</section>

<!-- swap right sidebar end -->



<!-- view detail modal start -->
<!-- Modal -->
<div class="modal fade" id="view-detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="view-detail-slider owl-carousel owl-theme">
                    <div class="item" data-hash="one">
                        <h1>Switch</h1>
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <div class="main-img">
                                    <img src="images/summery9.png" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="more-imgs">
                                    <img src="images/summery10.jpeg" alt="">
                                    <img src="images/summery11.jpeg" alt="">
                                    <img src="images/summery12.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <h2>Description</h2>
                        <p>Coordinating Claro Wall Plate and accessories sold seperately. Let Lutron’s Maestro Vacancy
                            Sensor
                            switch automatically turn the lights or fan off for you. It’s a simple, easy, and low cost
                            way
                            to
                            save energy and add automation to your home. Simply turn lights/fan on when you enter a
                            room,
                            and
                            the Maestro Vacancy Sensor will automatically turn lights/fan off when room is vacant. With
                            manual-on feature, the vacancy sensor is perfect for use in a bedroom or TV room so
                            lights/fan
                            only
                            turn on when you want them to. Install it in the kids’ rooms and never worry about lights
                            being
                            left
                            on by mistake. Keeping the sleek design of the Maestro family, Lutron sensors will match the
                            decor
                            of any room in your home. Maestro Sensors works with any bulb type, including CFLs and LEDs.
                        </p>
                        <ul>
                            <li>
                                -Coordinating claro wall plate and accessories sold separately
                            </li>
                            <li>
                                -Automatically turns lights off when room is unoccupied
                            </li>
                            <li>
                                -Uses advanced XCT sensing technology, offering the most reliable on/off performance up
                                to
                                30 ft.
                            </li>
                            <li>
                                -Works with all bulb types
                            </li>
                            <li>
                                -Meets California Title 24 and other sensor code requirements
                            </li>
                            <li>
                                -Requires ground wire
                            </li>
                        </ul>
                        <h2>Spec</h2>
                        <p>1.75 in. x 1.75 in. x 4.2 in</p>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div>
                                    <h2>Brand</h2>
                                    <p>Lutron</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div>
                                    <h2>
                                        Quantity
                                    </h2>
                                    <p>
                                        1 Unit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-hash="two">
                        <h1>Switch</h1>
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <div class="main-img">
                                    <img src="images/summery9.png" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="more-imgs">
                                    <img src="images/summery10.jpeg" alt="">
                                    <img src="images/summery11.jpeg" alt="">
                                    <img src="images/summery12.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <h2>Description</h2>
                        <p>Coordinating Claro Wall Plate and accessories sold seperately. Let Lutron’s Maestro Vacancy
                            Sensor
                            switch automatically turn the lights or fan off for you. It’s a simple, easy, and low cost
                            way
                            to
                            save energy and add automation to your home. Simply turn lights/fan on when you enter a
                            room,
                            and
                            the Maestro Vacancy Sensor will automatically turn lights/fan off when room is vacant. With
                            manual-on feature, the vacancy sensor is perfect for use in a bedroom or TV room so
                            lights/fan
                            only
                            turn on when you want them to. Install it in the kids’ rooms and never worry about lights
                            being
                            left
                            on by mistake. Keeping the sleek design of the Maestro family, Lutron sensors will match the
                            decor
                            of any room in your home. Maestro Sensors works with any bulb type, including CFLs and LEDs.
                        </p>
                        <ul>
                            <li>
                                -Coordinating claro wall plate and accessories sold separately
                            </li>
                            <li>
                                -Automatically turns lights off when room is unoccupied
                            </li>
                            <li>
                                -Uses advanced XCT sensing technology, offering the most reliable on/off performance up
                                to
                                30 ft.
                            </li>
                            <li>
                                -Works with all bulb types
                            </li>
                            <li>
                                -Meets California Title 24 and other sensor code requirements
                            </li>
                            <li>
                                -Requires ground wire
                            </li>
                        </ul>
                        <h2>Spec</h2>
                        <p>1.75 in. x 1.75 in. x 4.2 in</p>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div>
                                    <h2>Brand</h2>
                                    <p>Lutron</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div>
                                    <h2>
                                        Quantity
                                    </h2>
                                    <p>
                                        1 Unit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- view detail modal end -->


<?php
include 'includes/footer.php';
$page = 'home';
?>

<script>
$(document).ready(function () {
    $('.other-materials-img a').click(function (event) {
        event.preventDefault();
        console.log("Removed");
        var $container = $(this).closest('.other-materials-img');
        console.log($container)
        $container.remove();
    });
});

</script>