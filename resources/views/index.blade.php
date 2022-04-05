@extends('appfront')
@section('content')
@section('title', 'Home')

@section('keywords', 'coderholic, coderholic.com, python programming, free web design course, graphics design course, coderholics, online learning in nigeria, edtech in nigeria, edtech in africa')
@section('description', 'Coderholics::Your mentor based online tech learning platform')
<!-- Start Main Banner Area -->
<div class="main-banner-section jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="banner-content">


                            <h1>Need urgent cash? Get atom loan now</h1>
                            <p>Use your smartphone or gadget as collateral.</p>
                            <a href="/apply-loan" class="btn btn-primary">Apply For A Loan</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="money-transfer-form">
                            <form>
                                <div class="form-group">
                                    <label>Loan Calculator</label>
                                    <div class="money-transfer-field">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Loan Amount needed</label>
                                    <div class="money-transfer-field">
                                        <input type="number" step="1000" min="5000" max="100000" value="5000" name="loan_amount_needed" id="loan_amount_needed" class="form-control" autocomplete="off" onkeyup="sum();" oninput="sum()" onchange="sum()">

                                        <div class="amount-currency-select">
                                            <select>
                                                <option>&#x20a6;</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="currency-info">
                                    <div class="bar"></div>
                                    <span><strong>20%</strong> interest per month</span>
                                </div> -->

                                <div class="form-group">
                                    <label>Loan Duration(days)</label>
                                    <div class="money-transfer-field">
                                        <input type="number" name="duration" id="duration" value="30" readonly class="form-control" autocomplete="off" onkeyup="sum();" oninput="sum()" onchange="sum()">


                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Loan Repayment Amount</label>
                                    <div class="money-transfer-field">
                                        <input type="text" class="form-control" value="6000" name="tot_amount" id="tot_amount" autocomplete="off" readonly>

                                        <div class="amount-currency-select">
                                            <select>
                                                <option>&#x20a6;</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="money-transfer-info">
                                    <span></span>
                                </div>

                                <a href="/apply-loan"><button type="button" class="btn btn-primary">Apply For Loan</button></a>

                                <div class="terms-info">
                                    <p>By clicking Apply For Loan, I am agree with <a href="tandc.php">Terms &amp; Policy</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Featured Boxes Area -->
<section class="featured-boxes-area">
    <div class="container">
        <div class="featured-boxes-inner">
            <div class="row m-0">
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="single-featured-box">
                        <div class="icon color-fb7756">
                            <i class="flaticon-piggy-bank"></i>
                        </div>

                        <h3>Transparent Interest</h3>
                        <!-- <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>

                        <a href="features-1.html" class="read-more-btn">Read More</a> -->
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="single-featured-box">
                        <div class="icon color-facd60">
                            <i class="flaticon-data-encryption"></i>
                        </div>

                        <h3>Fully Encrypted</h3>
                        <!-- <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>

                        <a href="features-1.html" class="read-more-btn">Read More</a> -->
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="single-featured-box">
                        <div class="icon color-1ac0c6">
                            <i class="flaticon-wallet"></i>
                        </div>

                        <h3>Instant Disbursement</h3>
                        <!-- <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>

                        <a href="features-1.html" class="read-more-btn">Read More</a> -->
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class="single-featured-box">
                        <div class="icon">
                            <i class="flaticon-shield"></i>
                        </div>

                        <h3>Safe and Secure</h3>
                        <!-- <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>

                        <a href="features-1.html" class="read-more-btn">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Boxes Area -->

<!-- Start How It Works Area -->
<section class="how-it-works-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>How atom loan works</h2>
            <div class="bar"></div>
            <p>Create a free account, apply and receive loan with the few steps below.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-how-it-works">
                    <img src="assets/img/how-it-works-image/1.png" alt="image">

                    <h3>1. Register for free</h3>
                    <p>Click<a href="register.php" style="color:blue;"> here</a> to register for free. It takes less than 2 minutes to register. </p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-how-it-works">
                    <img src="assets/img/how-it-works-image/5.png" alt="image">

                    <h3>2. Apply for Loan</h3>
                    <p>Apply and Upload pictures of your collateral (must be light weight gadget like phone, tablet, etc).</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-how-it-works">
                    <img src="assets/img/how-it-works-image/3.png" alt="image">

                    <h3>3. Feedback</h3>
                    <p>If approved, we will inform you of our closest agent to drop your collateral.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-how-it-works">
                    <img src="assets/img/how-it-works-image/4.png" alt="image">

                    <h3>4. Loan is Disbursed</h3>
                    <p>As soon our agent confirms your collateral match the information you uploaded, <br>you will be credited.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-how-it-works">
                    <img src="assets/img/how-it-works-image/6.png" alt="image">

                    <h3>5. That's it</h3>
                    <p>You have the money in your desired bank account.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-how-it-works">
                    <img src="assets/img/how-it-works-image/6.png" alt="image">

                    <h3>6. Everyone is happy</h3>
                    <p>Knowing you are smiling is important to us that we added it as one of the steps.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End How It Works Area -->

<!-- Start Services Area -->
<section class="services-area ptb-70 pt-0">
    <div class="container-fluid p-0">
        <div class="overview-box">
            <div class="overview-content">
                <div class="content left-content">
                    <span class="sub-title">Fast &amp; Easy Loan</span>
                    <h2>I don't have &#x20a6;30 Billion</h2>
                    <div class="bar"></div>
                    <p>No worries, apply for loan by clicking below.</p>

                    <ul class="features-list">
                        <li><span><i class="flaticon-check-mark"></i> Free registration</span></li>
                        <li><span><i class="flaticon-check-mark"></i> No account history checking</span></li>
                        <li><span><i class="flaticon-check-mark"></i> 100% transparent interest</span></li>
                        <li><span><i class="flaticon-check-mark"></i> Decide how much you receive</span></li>
                    </ul>

                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>

            <div class="overview-image">
                <div class="image">
                    <img src="{{ asset('assets/img/4.jpg')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->

<!-- Start Services Area -->
<section class="services-area ptb-70 bg-f7fafd">
    <div class="container-fluid p-0">
        <div class="overview-box">
            <div class="overview-image">
                <div class="image">
                    <img src="assets/img/5.png" alt="image">

                    <div class="circle-img">
                        <img src="assets/img/circle.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="overview-content">
                <div class="content">
                    <span class="sub-title">AtomInvest</span>
                    <h2>I have &#x20a6;30 Billion</h2>
                    <div class="bar"></div>
                    <p>Good to know! Invest it here for a 20% return in just 6 months.</p>

                    <ul class="features-list">
                        <li><span><i class="flaticon-check-mark"></i> Investments are insured</span></li>
                        <li><span><i class="flaticon-check-mark"></i> Instant withdrawal</span></li>
                        <li><span><i class="flaticon-check-mark"></i> 20% interest</span></li>
                        <li><span><i class="flaticon-check-mark"></i> Increase your funds</span></li>
                    </ul>

                    <a href="#" class="btn btn-primary">Invest Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->



<!-- Start Fun Facts Area -->
<section class="funfacts-area ptb-70 pt-0">
    <div class="container">
        <div class="section-title">
            <h2></h2>
            <div class="bar"></div>
            <p></p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                <div class="funfact">
                    <h3><span class="odometer" data-count="180">00</span>K</h3>
                    <p>Downloaded</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                <div class="funfact">
                    <h3><span class="odometer" data-count="20">00</span>K</h3>
                    <p>Feedback</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                <div class="funfact">
                    <h3><span class="odometer" data-count="500">00</span>+</h3>
                    <p>Workers</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                <div class="funfact">
                    <h3><span class="odometer" data-count="70">00</span>+</h3>
                    <p>Contrubutors</p>
                </div>
            </div>
        </div>

        <div class="contact-cta-box">
            <h3>Have any question?</h3>
            <p>Don't hesitate to contact us</p>
            <a href="#" class="btn btn-primary">Contact Us</a>
        </div>

        <div class="map-bg">
            <img src="assets/img/map.png" alt="map">
        </div>
    </div>
</section>
<!-- End Fun Facts Area -->


<!-- Start Account Create Area -->
<section class="account-create-area">
    <div class="container">
        <div class="account-create-content">
            <h2>Create an account Now</h2>
            <p>It takes less than 2 minutes to open an account</p>
            <a href="#" class="btn btn-primary">Get Your atom Account</a>
        </div>
    </div>
</section>
<!-- End Account Create Area -->

@endsection
