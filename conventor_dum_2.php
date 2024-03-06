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
    <div class="updata" id="responcedata" style="display: none;">


        <div class="container">
            <div class="row icon_bg">
                <div class="col-lg-8">
                    <div class="image-preview-tab">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Before</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">After</button>
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
                    <div class="download-btn-menu">
                        <!-- Vertical buttons -->
                        <div class="vertical">
                            <div class="btn-download-normal">
                                <button type="button" class="button-46">Download </button>
                                <p>Preview size: 432 * 578 </p>
                            </div>
                            <div class="btn-download-hd">
                                <button type="button" class="button-46">Download HD</button>
                            <p>Full size: 868 * 1160 </p>
                            </div>
                            <div class="btn-download-premium"> 

                            <p>*Need Unlimited Cutouts?</p>
                            <button type="button" class="button-46">GET PREMIUM</button>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>






</section>



<style>
    .vertical p{
        color: black
        ;
    }
    .vertical {
        display: flex;
        flex-direction: column;
        height: 100%;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .download-btn-menu {
        height: 480px;
        background: white;
        border-radius: 20px;
    }

    #closeButton1,
    #closeButton2 {
        position: absolute;
        top: 32%;
        right: 36%;
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
</style>

<!-- <section style="padding-top: 150px;" id="response" style="display:none !important;">
    <div class="container">
        <h3>
            After Upload
        </h3>





        <div class="row pt-50 pb-50 ">
            <div class="container icon_bg">


                <div class="col-lg-3"></div>
                <div class="col-lg-6 bg_shadow ">
                    <button class="button-46" role="button" onclick="convertImages()">Convert Images</button>
                    <div class="row counter_file " id="multiple_file_image">
                        <div class="col-lg-12 align_cen ">


                            <p class="text-dark" id="imageDetailsTableBody">

                            </p>
                        </div>

                       
                    </div>
                    <div class="row counter_file_12">
                        <div class="col-lg-8 align_cen ">
                            <p class="text-dark">Total Uploaded Images: <span style="color: #000000 !important;" id="fileCount_1">0</span> </p>
                        </div>

                        <div class="col-lg-4 align_cen ">
                            <button class="button-46 convertbtn" role="button" onclick="clearFileDetails()">Convert</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>



    </div>


</section> -->






<style>
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
</style>
<style>
    /*    .container {
        width: 100vw;

        position: relative;
    } */

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

    /* 
.cancel_btn:hover {
  background-color: rgb(0, 102, 204, 0.85);
}
 */
    .cdownload {
        border: 2px solid #0066CC;
        background-color: white;
        color: #0066CC;
    }

    .cdownload:hover {

        color: #fff;
    }

    /* .cdownload:hover {
  background-color: rgb(0, 102, 204, 0.1);
}
 */
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

    /* .top-right {
  position: absolute;
  top: 0%;
  right: 0%;
  transform: translateX(100%);
  transition: 1s;
}

.bottom-right {
  position: absolute;  
  bottom: 12px;
  right: 0%;
  transform: translateX(100%);
  transition: 1s;
} */
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

<!-- script 1 -->
<!--   <script>
        function handleFileUpload() {
            const fileInput = document.getElementById('fileInput');
            const fileDetail = document.getElementById('fileDetail');
            const fileSize = document.getElementById('fileSize');
            const uploadedImage = document.getElementById('uploadedImage');

            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const fileName = file.name;
                const fileType = getFileType(fileName);
                const formattedSize = formatFileSize(file.size);

                // Display the file details and size
                fileDetail.textContent = `File Name: ${fileName}`;
                fileSize.textContent = `File Size: ${formattedSize}`;

                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedImage.src = e.target.result;
                    uploadedImage.style.display = 'block';
                };

                reader.readAsDataURL(file);
            } else {
                fileDetail.textContent = '';
                fileSize.textContent = ''; // Clear file size
                uploadedImage.style.display = 'none';
            }
        }

        function getFileType(fileName) {
            const parts = fileName.split('.');
            if (parts.length > 1) {
                return parts[parts.length - 1];
            }
            return 'N/A'; // No file extension found
        }

        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';

            const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
            const i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));

            return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
        }
    </script> -->

<!-- script-2 -->

<!-- <script>
    function handleFileUpload() {
        const fileInput = document.getElementById('fileInput_1');
        const fileDetailsContainer = document.getElementById('imageDetailsTableBody');
        const fileCount = document.getElementById('fileCount_1');

        // Clear previous file details and file count
        fileDetailsContainer.innerHTML = '';
        fileCount.textContent = '0';

        const files = fileInput.files;
        const tableBody = document.createElement('tbody');

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const fileName = file.name;
            const fileTypeValue = getFileType(fileName);
            const formattedSize = formatFileSize(file.size);

            // Create a new row for the table and add image details
            const row = tableBody.insertRow();
            row.innerHTML = `
                <td>${fileName}</td>
                <td >${formattedSize}  
                  
                </td>
                <td >  <div class="align_cen">
                        <p class="text-dark">OUTPUT : <button style="background-color: #000000; color:white;padding:10px;" data-toggle="modal" data-target="#Modalpop">Convert </button></p>
                    </div></td>

                    <td >
                    <div class="align_cen">
                       
                        <p class="text-dark"> <a id="close_icon" onclick="removeRow(this)"><i style="font-size:24px" class="fab">&#10006;</i></a></p>
                    </div></td>
            `;
        }

        // Append the table body to the table
        fileDetailsContainer.appendChild(tableBody);

        // Update the file count
        fileCount.textContent = files.length;
    }

    function getFileType(fileName) {
        const parts = fileName.split('.');
        if (parts.length > 1) {
            return parts[parts.length - 1];
        }
        return 'N/A'; // No file extension found
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';

        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        const i = Math.floor(Math.log(bytes) / Math.log(1024));

        return parseFloat((bytes / Math.pow(1024, i)).toFixed(2)) + ' ' + sizes[i];
    }

    function removeRow(iconElement) {
        // Get the closest row element and remove it
        const row = iconElement.closest('tr');
        row.remove();

        // Update the file count
        const fileCount = document.getElementById('fileCount_1');
        fileCount.textContent = parseInt(fileCount.textContent) - 1;
    }

    function clearFileDetails() {
        const fileInput = document.getElementById('fileInput_1');
        const fileCount = document.getElementById('fileCount_1');
        const fileDetailsContainer = document.getElementById('imageDetailsTableBody');

        // Clear the file input, file details, and file count
        fileInput.value = ''; // Clear the selected files
        fileCount.textContent = '0'; // Reset the file count
        fileDetailsContainer.innerHTML = ''; // Clear the displayed file details
    }

    function convertImages() {
        // Implement your logic to convert images
    }
</script> -->



<?php include('footer.php') ?>