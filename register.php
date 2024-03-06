<?php include('header.php'); ?>
<!-- important css -->
<style>
    .header--dark {
    background-color:rgb(17 24 39) !important;
}

</style>
<section class="section cmn-banner" data-background="assets/images/banner/banner-bg.png" style="background-image: url(&quot;assets/images/banner/banner-bg.png&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cmn-banner__content wow fadeInUp" data-wow-duration="600ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                <h3 class="h3">Create Account</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Create Account
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
<section class="section authentication pb-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-6">
                            <div class="authentication__inner wow fadeInUp" data-wow-duration="600ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                <div class="section__header text-start">
                                    <h2 class="h3">create account</h2>
                                </div>
                                <form action="#" method="post">
                                    <div class="input-single">
                                        <input type="text" name="author-reginame" id="authorregiName" placeholder="enter name" required="">
                                    </div>
                                    <div class="input-single">
                                        <input type="email" name="author-regiEmail" id="authorregiEmail" placeholder="email address" required="">
                                    </div>
                                    <div class="input-single">
                                        <input type="password" name="author-regiPass" id="authorregiPass" placeholder="password" required="">
                                    </div>
                                    <div class="input-single">
                                        <input type="password" name="author-regiConfirmPass" id="authorregiConfirmPass" placeholder="confirm password" required="">
                                    </div>
                                    <div class="divide">
                                        <p>OR</p>
                                    </div>
                                    <div class="authentic">
                                        <button type="submit" class="btn btn--nonary">
                                            <img src="assets/images/google.png" alt="Image">
                                            continue with google
                                        </button>
                                        <button type="submit" class="btn btn--nonary">
                                            <img src="assets/images/facebook.png" alt="Image">
                                            continue with facebook
                                        </button>
                                    </div>
                                    <div class="group-radio">
                                        <input type="checkbox" name="create-in-check" id="createInCheck">
                                        <label for="createInCheck">
                                            i accept your terms &amp; conditions
                                        </label>
                                    </div>
                                    <div class="form-cta">
                                        <button type="submit" aria-label="post comment" class="btn btn--ocotonary">
                                            create account
                                        </button>
                                        <p>
                                            Have an account?
                                            <a href="sign-in.php">Sign In</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php include('footer.php'); ?>