          <?php include 'header.php' ?>
          <style>
              .remover {
                  max-width: 750px;
              }


              .con {
                  max-width: 800px;
                  padding: 0 20px;
                  margin: 0 auto;
              }

              .panel {
                  margin: 50px auto 25px;
                  max-width: 500px;
                  text-align: center;
              }

              .button_outer {
                  background: #157efb;
                  border-radius: 30px;
                  text-align: center;
                  height: 50px;
                  width: 200px;
                  display: inline-block;
                  transition: 0.2s;
                  position: relative;
                  overflow: hidden;
              }

              .btn_upload {
                  padding: 17px 30px 12px;
                  color: #fff;
                  text-align: center;
                  position: relative;
                  display: inline-block;
                  overflow: hidden;
                  z-index: 3;
                  white-space: nowrap;
              }

              .btn_upload input {
                  position: absolute;
                  width: 100%;
                  left: 0;
                  top: 0;
                  width: 100%;
                  height: 105%;
                  cursor: pointer;
                  opacity: 0;
              }

              .file_uploading {
                  width: 100%;
                  height: 10px;
                  margin-top: 20px;
                  background: #ccc;
              }

              .file_uploading .btn_upload {
                  display: none;
              }

              .processing_bar {
                  position: absolute;
                  left: 0;
                  top: 0;
                  width: 0;
                  height: 100%;
                  border-radius: 30px;
                  background: #83ccd3;
                  transition: 3s;
              }

              .file_uploading .processing_bar {
                  width: 100%;
              }

              .success_box {
                  display: none;
                  width: 50px;
                  height: 50px;
                  position: relative;
              }

              .success_box:before {
                  content: "";
                  display: block;
                  width: 9px;
                  height: 18px;
                  border-bottom: 6px solid #fff;
                  border-right: 6px solid #fff;
                  -webkit-transform: rotate(45deg);
                  -moz-transform: rotate(45deg);
                  -ms-transform: rotate(45deg);
                  transform: rotate(45deg);
                  position: absolute;
                  left: 17px;
                  top: 10px;
              }

              .file_uploaded .success_box {
                  display: inline-block;
              }

              .file_uploaded {
                  margin-top: 0;
                  width: 50px;
                  background: #83ccd3;
                  height: 50px;
              }

              .uploaded_file_view {
                  max-width: 300px;
                  height: auto;
                  /* margin: 40px auto; */
                  text-align: center;
                  position: relative;
                  transition: 0.2s;
                  opacity: 0;
                  border: 2px solid #ddd;
                  padding: 15px;
              }

              .file_remove {
                  width: 30px;
                  height: 30px;
                  border-radius: 50%;
                  display: block;
                  position: absolute;
                  background: #aaa;
                  line-height: 30px;
                  color: #fff;
                  font-size: 12px;
                  cursor: pointer;
                  right: -15px;
                  top: -15px;
              }

              .file_remove:hover {
                  background: #222;
                  transition: 0.2s;
              }

              .uploaded_file_view img {
                  max-width: 100%;
                  height: auto !important;
                  width: auto !important;
              }

              .review .review-head img {
                  max-width: 350px !important;
                  max-height: 350px !important;
              }

              .uploaded_file_view.show {
                  opacity: 1;
              }

              .error_msg {
                  text-align: center;
                  color: #f00;
              }

              .up_img {
                  width: 400px;
                  min-height: 400px;

                  background-color: #dfdfdf;
                  border-radius: 10px;
              }

              .review .review__single {
                  padding: 50px 20px 1px 20px;

                  border-radius: 20px;
                  transition: all .2s ease-in;
              }
          </style>

          <!-- ==== review start ==== -->
          <section class="section review review-light pt-100" style="padding: 150px 0px;">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-12 col-xl-8">
                          <div class="section__header wow fadeInUp" data-wow-duration="600ms" data-wow-delay="300ms">
                              <h2 class="h2">Upload an image Easy to remove background</h2>
                          </div>
                      </div>
                  </div>
                  <div class="row items-gap">

                      <div class="col-12 col-lg-2">
                      </div>
                      <div class="col-12 col-lg-8">
                          <div class="review__single wow fadeInUp" data-wow-duration="600ms" data-wow-delay="200ms">
                              <div class="review-head">
                                  <div class="review__icons">
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                  </div>
                                  <img src="assets/images/review/icon-two.png" alt="Image">
                              </div>
                              <div>
                                  <div class="panel">
                                      <div class="btn btn--nonary" style="padding: 7px 30px;">
                                          <div class="btn_upload">
                                              <input type="file" id="upload_file" name="">
                                              Upload Image
                                          </div>
                                          <div class="processing_bar"></div>
                                          <div class="success_box"></div>
                                      </div>
                                  </div>
                                  <div class="error_msg"></div>

                              </div>


                              <div class="review-content">
                                  <p align="center" class="fw-7 text-dark">By uploading an image you hereby agree to our Terms of Service. This site is protected by <br>reCAPTCHA and the Google Privacy Policy and Terms of Service apply. </p>
                              </div>

                          </div>
                      </div>
                  </div>

                  <div class="row items-gap">

                      <div class="col-12 col-lg-12" style="padding-top: 50px;">
                          <div class="review__single wow fadeInUp" data-wow-duration="600ms" data-wow-delay="600ms">
                              <div class="review-head">
                                  <div>
                                      <p align="center" class="text-dark">Before Image</p>
                                      <div class="up_img">
                                          <div class="uploaded_file_view" id="uploaded_view">
                                              <span class="file_remove">X</span>
                                          </div>

                                      </div>
                                      <div align="center" class="section__content-cta">
                                          <a href="bg_con.php" class="btn btn--nonary">
                                              Download
                                          </a>
                                          <p align="center">Preview size 339* 739</p>

                                      </div>
                                  </div>
                                  <div>
                                      <p align="center" class="text-dark">After Background Removed Image</p>
                                      <div class="up_img">

                                      </div>
                                      <div align="center" class="section__content-cta">

                                          <a href="contact-us.php" class="btn btn--nonary">
                                              HD Download
                                          </a>
                                          <p align="center">Full size 1290* 2796</p>
                                      </div>
                                  </div>


                              </div>
                              <div class="review-content">
                                  <p align="center" class="fw-7">Rate this result</p>
                                  <p align="center">

                                      <i class="fa fa-thumbs-up" aria-hidden="true" style="font-size: 30px;color: blue;"></i>&nbsp;&nbsp; <i class="fa fa-thumbs-down" aria-hidden="true" style="font-size: 30px;color: red; paddimg-right:20px;"></i>
                                  </p>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- ==== / review end ==== -->




          <?php include 'footer.php' ?>
          <!-- new -->






          <!-- old -->
          <script>
              var btnUpload = $("#upload_file"),
                  btnOuter = $(".button_outer");
              btnUpload.on("change", function(e) {
                  var ext = btnUpload.val().split('.').pop().toLowerCase();
                  if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                      $(".error_msg").text("Not an Image...");
                  } else {
                      $(".error_msg").text("");
                      btnOuter.addClass("file_uploading");
                      setTimeout(function() {
                          btnOuter.addClass("file_uploaded");
                      }, 3000);
                      var uploadedFile = URL.createObjectURL(e.target.files[0]);
                      setTimeout(function() {
                          $("#uploaded_view").append('<img src="' + uploadedFile + '" />').addClass("show");
                      }, 3500);
                  }
              });
              $(".file_remove").on("click", function(e) {
                  $("#uploaded_view").removeClass("show");
                  $("#uploaded_view").find("img").remove();
                  btnOuter.removeClass("file_uploading");
                  btnOuter.removeClass("file_uploaded");
              });
          </script>
          <script>
              // ---------- portfolio mixitup -----------
              var containerEl = document.querySelector('.mix-container');

              var mixer = mixitup(containerEl);
          </script>




          <script>
              const second = 1000,
                  minute = second * 60,
                  hour = minute * 60,
                  day = hour * 24,
                  week = hour * 24 * 7;

              let countDown = new Date('Oct 29, 2022 11:30').getTime(),
                  x = setInterval(function() {

                      let now = new Date().getTime(),
                          distance = countDown - now;

                      document.getElementById('days').innerText = Math.floor(distance / (day)),
                          document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                          document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                          document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);



                  }, second)
          </script>