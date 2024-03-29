<?php include('header.php'); ?>

<!-- important css -->

<style>
      .header--dark {
    background-color:rgb(17 24 39) !important;
}

</style>
<!-- ==== banner start ==== -->
<section class="section cmn-banner" data-background="assets/images/banner/banner-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cmn-banner__content wow fadeInUp" data-wow-duration="600ms" data-wow-delay="300ms">
                    <h3 class="h3">Contact Us</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Contact Us
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="anime">
        <img src="assets/images/anime-one.png" alt="Image" class="one">
        <img src="assets/images/anime-two.png" alt="Image" class="two">
    </div>
</section>
<!-- ==== / banner end ==== -->
<!-- ==== contact start ==== -->
<section class="section contact-main">
    <div class="container">
        <div class="row items-gap align-items-center">
            <div class="col-12 col-lg-6 col-xxl-5">
                <div class="contact-main__content wow fadeInUp" data-wow-duration="600ms" data-wow-delay="300ms">
                    <h2 class="h3">
                        Have something in mind?
                        <span>Let's talk.</span>
                    </h2>
                    <p>
                        Adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim.
                    </p>
                    <div class="arrow">
                        <img src="assets/images/arrow-contact.png" alt="Image">
                    </div>
                    <div class="cta-contact">
                        <a href="tel:223-087-9756">
                            Schedule a call
                            <i class="fa-solid fa-angle-right">
                            </i>
                        </a>
                        <span>OR</span>
                        <a href="mailto:support@techai.com">
                            Request a feature
                            <i class="fa-solid fa-angle-right">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xxl-6 offset-xxl-1">
                <div class="contact-main__form wow fadeInUp" data-wow-duration="600ms" data-wow-delay="300ms">
                    <form action="#" method="post">
                        <div class="group-input wow fadeInUp" data-wow-duration="600ms" data-wow-delay="600ms">
                            <input type="text" name="contact-name" id="contactName" placeholder="enter full name">
                        </div>
                        <div class="group-input wow fadeInUp" data-wow-duration="600ms" data-wow-delay="900ms">
                            <input type="email" name="contact-email" id="contactEmail" placeholder="enter Your Email">
                        </div>
                        <div class="group-input wow fadeInUp" data-wow-duration="600ms" data-wow-delay="1200ms">
                            <select class="subject">
                                <option data-display="Select Subject">
                                    Select Subject
                                </option>
                                <option value="1">Account</option>
                                <option value="2">Service</option>
                                <option value="3">Pricing</option>
                                <option value="4">Support</option>
                            </select>
                        </div>
                        <div class="group-input wow fadeInUp" data-wow-duration="600ms" data-wow-delay="1500ms">
                            <textarea name="contact-message" id="contactMessage" placeholder="Write a message"></textarea>
                        </div>
                        <div class="group-radio">
                            <input type="checkbox" name="contact-check" id="contactCheck">
                            <label for="contactCheck">
                                I accept your terms & conditions
                            </label>
                        </div>
                        <div class="form-cta justify-content-start">
                            <button type="submit" class="btn btn--nonary">
                                Send Message
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / contact end ==== -->
<!-- ==== update cta start ==== -->
<section class="section update-cta ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="update-cta__inner bg-img wow fadeInUp" data-wow-duration="600ms" data-wow-delay="300ms" data-background="assets/images/update-cta-bg.png">
                    <div class="section__header">
                        <h2 class="h2 text-white">Get updates</h2>
                        <p>
                            Sign up to our newsletter to receive information about new
                            products, special offers and updates.
                        </p>
                    </div>
                    <form action="#" method="post">
                        <div class="mail-group-two">
                            <input type="email" name="subscribe-news-two" id="subscribeNewsTwo" placeholder="enter your email" required>
                            <button type="submit" aria-label="subscribe to our newsletter" class="btn btn--nonary">
                                <span>join now</span>
                                <i class="fa-regular fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / update cta end ==== -->
<?php include('footer.php'); ?>