<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>

<!-- bread crumbs start -->
<section class="py-3">
    <div class="container">
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

<!-- mydesign start -->
<section class="my-design-sec">
    <div class="container">
        <div class="row">
            <h1>
                My Designs
            </h1>
            <div class="col-12 col-lg-7">
                <div class="all-packages">
                    <div class="d-flex packages-heading">
                        <input type="checkbox">
                        <h2>All Packages
                            <span>
                                (1 Package)
                            </span>
                        </h2>
                    </div>
                    <div class="package-box">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="package-box-img">
                                    <input type="checkbox">
                                    <img src="images/summery1.png" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="package-box-txt">
                                    <h2>
                                        White Kitchen
                                    </h2>
                                    <h3>
                                        Size: < 100 sqft. | Layout: Linear </h3>
                                            <div>
                                                <p>Estimate at: $9,000</p>
                                                <div>
                                                    <h4>$1</h4>
                                                    <h5>$99</h5>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="Order-Detail">
                    <h2>Order Detail</h2>
                    <ul>
                        <li>
                            <h3>
                                Packages Selected
                            </h3>
                            <h4>
                                White Kitchen
                            </h4>
                        </li>
                        <li>
                            <h3>
                                Total Deposit
                            </h3>
                            <h5>
                                $1
                            </h5>
                        </li>
                    </ul>
                    <a href="#" class="theme-btn">Proceed to Payment (1)</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- mydesign end -->

<?php
include 'includes/footer.php';
$page = 'home';
?>