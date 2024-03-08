<?php include('header.php') ?>
<section style="padding-top: 150px;">
    <div class="hero-body" id="uploaddata">
        <div class="container-fluid  ">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 upl">
                    <div class="uplo">
                        <p align="center" class="control uploader">
                            <label class="button button is-dark is-fullwidth is-medium">
                                <span class="icon is-small">
                                    <i class="fas fa-upload text-light"></i>
                                </span>
                                <span class="text-light">Upload image</span>
                                <input type="file" accept="image/*" id="fileInput_1" onchange="handleFileUpload()" class="button button-28 button is-dark chooseFile" multiple />
                            </label>
                        </p>
                        <p align="center" class="text-dark text-center pt-10">Max file size 1GB. Sign Up for more</p>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
    <div class="updata pt-140 " id="responcedata" style="display: none;">


        <div class="container image-preview-tab">
            <div class="row icon_bg">
                <div class="col-lg-8">
                    <div class="image-tab-border">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Before</button>
                                <span class="hover-line"></span> <!-- Hover line -->
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">After</button>
                                <span class="hover-line"></span> <!-- Hover line -->
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div id="previewContainer">
                                    <img id="previewImage" />
                                    <button id="closeButton1" onclick="closePreview()">x</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <div id="previewContainer">
                                    <img id="previewImage2" />
                                    <button id="closeButton2" onclick="closePreview()">x</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4">
                    <div class=" download-btn-menu  p-5">
                        <!-- Vertical buttons -->
                        <div class="vertical">
                            <div class="btn-download-normal">
                                <button type="button" class="button-10">Download </button>
                                <p>Preview size: 432 * 578 <i class="fa fa-info-circle"></i></p>
                            </div>
                            <div class="btn-download-hd">
                                <button type="button" class="button-10">Download HD</button>
                                <p>Full size: 868 * 1160 <i class="fa fa-info-circle"></i> </p>
                            </div>
                            <div class="btn-download-premium">

                                <p>*Need Unlimited Cutouts?</p>
                                <button type="button" class="button-10">GET PREMIUM</button>
                            </div>

                            <div class="like">
                                <p>rate Us</p>
                                <div class="emoji">
                                    <img src="assets/images/like.png" alt="">


                                    <img src="assets/images/dislike.png" alt="">

                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>






</section>



<style>
    #pills-tab li {
        position: relative;
    }

    /* Styling for the hover line */
    .hover-line {
        position: absolute;
        height: 2px;
        background-color: #397df6;
        transition: width 0.3s ease-in-out, left 0.3s ease-in-out;
        width: 0;
        left: 50%;
        transform: translate(-50%, 0);
        bottom: 0;
    }

    /* Styling for hover effect */
    .nav-link:hover+.hover-line {
        width: 70%;
    }

    ul#pills-tab {

        padding-left: 50px;
    }

    /* Styling for active tab */
    .nav-link.active+.hover-line {
        width: 70%;
    }

    #pills-tab button.nav-link.active {
        color: #397df6 !important;
        background-color: transparent !important;

    }

    button#pills-home-tab,
    button#pills-profile-tab {
        color: #000 !important;
        background-color: transparent !important;

    }

    .emoji {
        display: flex;
        gap: 10px;
    }

    .emoji img {
        width: 40px;
    }

    button.button-10 {
        width: 190px;
    }

    .like {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .button-10:hover {
        color: white;
    }

    /* CSS */
    .button-10 {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 6px 14px;
        font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
        border-radius: 6px;
        border: none;
        color: #fff;
        background: linear-gradient(180deg, #4B91F7 0%, #367AF6 100%);
        background-origin: border-box;
        box-shadow: 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-10:focus {
        box-shadow: inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2), 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), 0px 0px 0px 3.5px rgba(58, 108, 217, 0.5);
        outline: 0;
    }

    #responcedata.show-popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
        background-color: white;
        border: 1px solid #ccc;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: block;
    }

    .vertical p {
        color: black;
    }

    .vertical {
        display: flex;
        flex-direction: column;
        height: 100%;
        align-items: center;
        justify-content: center;
        gap: 30px;
    }

    .download-btn-menu {
        height: 480px;
        background: white;

    }

    #closeButton1,
    #closeButton2 {
        position: absolute;
        top: 77%;
        right: 7%;
        padding: 2px 10px;
        background-color: #000;
        border: none;
        cursor: pointer;
        color: white;
        border-radius: 20px;
    }

    #previewImage {
        width: auto;
        /* Set the width of the image */
        height: 400px;
        /* Let the height adjust proportionally */
    }

    #previewContainer img,
    #previewContainer2 img {
        max-width: 100%;
        height: 400px;
    }

    .image-preview-tab {
        background: white;
        padding: 10px;
        border-radius: 20px;
        box-shadow: 0px 0px 2px black;
    }

    div#previewContainer {
        width: 100%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .upl {
        background: white;
        padding: 16px;
        border-radius: 20px;

        box-shadow: 0px 0px 2px black;
    }

    div#responce {
        padding: 40px 0px;
    }

    input {
        font-family: "Oswald", sans-serif;
    }

    .uploader {
        cursor: pointer !important;
        position: relative;
        overflow: hidden;
        background-color: #000000;
        width: 30%;
        align-items: center;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
    }

    .uplo {
        justify-content: center;
        border: 2px dotted #5991e9 !important;
        padding: 36px 8px;
        border-radius: 20px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
    }

    .chooseFile {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        padding-left: 200px;
        margin-right: -200px;
    }

    #thumbnail {
        width: 25%;
        margin-top: 10px;
        cursor: pointer;
        height: auto;
    }

    .convertbtn {
        font-size: 20px;
        min-width: 156px !important;
        padding: 14px 16px;
    }

    .align_cen {
        display: flex;
        align-items: center;
    }

    .pt-100 {
        padding-bottom: 100px;
    }

    @media (max-width:767px) {
        .container.upl {
            background: white;
            padding: 33px;
            border-radius: 50px;
        }

        .col-lg-6.uplo {
            /* display: flex; */
            justify-content: center;
            border: 2px dotted #5991e9;
            padding: 44px;
            border-radius: 50px;
        }

        .counter_file_12 {
            background: #f1f1f1;
            padding: 10px;
            margin: 0;
            border-radius: 1px;
            height: auto !important;
        }

        .button {
            cursor: pointer;
            border: none;
            padding: 13px 19px !important;
            border-radius: 5px;
            font-size: 14px;
        }

        .uploader {
            cursor: pointer !important;
            position: relative;
            overflow: hidden;
            display: inline-block;
            background-color: #000000;
            margin: 0 59px !important;
        }
    }

    /* CSS */
    .button-46 {
        align-items: center;
        background-color: rgba(240, 240, 240, 0.26);
        border: 1px solid #DFDFDF;
        border-radius: 16px;
        box-sizing: border-box;
        color: #000000;
        cursor: pointer;
        display: flex;
        font-family: Inter, sans-serif;
        font-size: 18px;
        justify-content: center;
        line-height: 28px;
        max-width: 100%;
        padding: 14px 22px;
        text-decoration: none;
        transition: all .2s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: 100%;
    }

    .button-46:active,
    .button-46:hover {
        outline: 0;
    }

    .button-46:hover {
        background-color: #FFFFFF;
        border-color: rgba(0, 0, 0, 0.19);
    }

    @media (min-width: 768px) {
        .button-46 {
            font-size: 20px;
            min-width: 200px;
            padding: 14px 16px;
        }

        .button {
            cursor: pointer;
            border: none;
            padding: 12px 0px;
            border-radius: 5px;
            font-size: 14px;
            letter-spacing: 1px;
            transition: 0.3s;
        }
    }



    .button-container {
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }

    .button {
        cursor: pointer;
        border: none;
        padding: 12px 24px;
        border-radius: 5px;
        font-size: 14px;
        letter-spacing: 1px;
        transition: 0.3s;
    }

    .cancel_btn {
        background-color: rgb(0, 102, 204);
        color: white;
    }

    button#button-cancel {
        border: 1px solid green;
        color: green;
    }


    .cdownload {
        border: 2px solid #0066CC;
        background-color: white;
        color: #0066CC;
    }

    .cdownload:hover {
        color: #fff;
    }


    .mr-12 {
        margin-right: 12px;
    }

    .popup {
        width: 300px;
        height: 100px;
        border: 2px solid black;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    /* CSS */
    .button-63 {
        align-items: center;
        background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
        border: 0;
        border-radius: 8px;
        box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
        box-sizing: border-box;
        color: #FFFFFF;
        display: flex;
        font-family: Phantomsans, sans-serif;
        font-size: 20px;
        justify-content: center;
        line-height: 1em;
        max-width: 100%;
        min-width: 140px;
        padding: 19px 24px;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
        cursor: pointer;
    }

    .button-63:active,
    .button-63:hover {
        outline: 0;
    }

    @media (min-width: 768px) {
        .button-63 {
            font-size: 24px;
            min-width: 196px;
        }
    }

    input#fileInput {
        background: #efefef;
        width: 30%;
        padding: 30px;
        border-radius: 0;
    }

    .row.pt-50.icon_bg {
        background: white;
    }

    .counter_file {
        background: white;
        padding: 10px;
        margin: 0;
        border-radius: 1px;
        height: auto;
        border: 2px solid #f1f1f1;
    }

    button.button-46 {
        width: 50%;
        border: 1px solid;
        border-radius: 10px;
    }

    .counter_file_12 {
        background: #f1f1f1;
        padding: 10px;
        margin: 0;
        border-radius: 1px;
        height: 75px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table_grid {
        display: flex;
        gap: 50px;
        justify-content: center;
        align-items: baseline;
        flex-wrap: wrap;
    }

    table,
    th,
    td {
        border: none;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        width: 600px;
    }

    th {
        background-color: #f2f2f2;
    }

    #fileCountMessage {
        margin-top: 10px;
        font-weight: bold;
    }

    #uploadedImage {
        max-width: 100%;
        display: none;
    }
</style>


<?php include('footer.php') ?>