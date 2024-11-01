
<style type="text/css">
        /* General Styles */

body {
    color: #54585A;
    font-family: 'Noto Sans Hebrew', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
    color:#54585A ;
    font-family: 'Noto Sans Hebrew', sans-serif;
    font-weight: 700; /* Bold */
}
.custom-heading{
    font-size:42px;
       color:#54585A ;
    font-family: 'Noto Sans Hebrew', sans-serif;
    font-weight: 600;

}
p {
    font-family: 'Noto Sans Hebrew', sans-serif;
}
        .blocks {
         height: auto;
            display: flex;
            flex-direction: column; 
            align-items: center;
            margin-top: 150px;
            margin-bottom:100px;
        }
        
     .inner {
    display: flex; 
    flex-direction: column;
    justify-content: center;
    align-items: center; 
    height: 100%;
    padding: 10px;
    border-radius: 8px;
    margin: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}


        /* Banner Sections */
        .banner3, .banner4, .banner10 {
            height:500px; 
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;
            padding: 40px 20px; 
        }
.banner5{
    height: auto;
     display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;
            padding: 40px 20px; 
}
   .button-group {
            display: flex;
           justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .banner3 {
            background-color: #F2F2F2;
        }

    .banner6 {
           display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;
            padding: 40px 20px; 
            background-color: #F2F2F2;
               height:auto; 
        }
          .banner4 {
           display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;
            padding: 40px 20px; 
            background-color:#396DA5;
               height:auto; 
        }

.bg-col {
    background-color:#FFFFFF ; 
    transition: background-color 0.3s ease; 
}

.bg-col:hover {
    background-color: #345884;
    color: white; 
}


 .innerr {
                height: 200px;
                border-radius:5px;
                width: 90%;
                 box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
     
        .banner10 {
            background-color: #FFFFFF;
            height: 500px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
                .head-title{

            color:white;
            font-size: 52px!important;
        }
            .custom-heading{
    font-size:28px;
       color:#54585A ;
    font-family: 'Noto Sans Hebrew', sans-serif;
    font-weight: 600;

}
            .blocks {
                flex-direction: column;
            }
            .inner {
                height: 200px;
                width: 90%; 
            }
              .innerr {
                height: 200px;
                width: 90%; 
            }
            .btn {
                width: 100%; 
                padding: 15px;
                font-size: 18px; 
            }
             .button-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        }

       

.banner{
        height: 600px;
       background-image: url('assets/img/hospital.jpg');
            background-size: cover;
            background-position: center;
            background-color:gray;
            display: flex;
            align-items: center;
            position: relative;
            text-align: left;
}
    

        .btn {
            border: none;
            background-color: #326295;
            color: white; 
            padding: 10px 20px; 
            font-size: 16px;
            margin: 5px; 
            transition: background-color 0.3s; 
        }

        .btn:hover {
            background-color: #214b72; 
        }
        .head-title{

            color:white;
            font-size: 62px;
        }
        .head-paragraph{
            color: white;
            font-size: 32px;
            font-weight:200;
        }
    .video-container {
        position: relative;
        width: 100%; /* Full width */
        max-width: 800px; /* Optional: Set a max width */
        margin: auto; /* Center the video */
    }
    
    video {
        width: 100%; /* Make video responsive */
        height: auto; /* Maintain aspect ratio */
    }

    /* Play button styling */
    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 40px;
        color: white;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 10px 15px;
        cursor: pointer;
    }
.btn-custom{
     background-color:#2F5E90!important;
     padding:10px 50px!important;
     color:white!important;
}
.btn-custom:hover{
     background-color:#396DA5!important;
     padding:10px 50px!important;
     color:white!important;
}

    </style>
</head>
<body>

<?php include 'header.php' ?>
<!-- Banner Section -->
<section class="container-fluid banner " >
    <div class="container">
        <h1 class="head-title">Cornerstone Specialty Hospitals</h1>
        <p class="head-paragraph">Southwest Louisiana</p>
    </div>
</section>



<!-- Block Section -->
<section class="container-fluid blocks">
    <div class="container">
        <h2 class="custom-heading m-2" >Cornerstone Specialty Hospitals Southwest Louisiana</h2>
        <p class="m-2">Cornerstone Specialty Hospitals Southwest Louisiana, located in Lake Charles, exists to care for patients in need of intensive and specialized care. Designed as a bridge in the continuum of care, patients who transition to Cornerstone Specialty Hospitals from a traditional hospital/short-term acute care hospital receive a customized treatment plan from a dedicated team. With a connection from the heart, we are focused on empowering our patients to achieve their goals.</p>
       <div class="row mt-5 mb-5">
    <div class="col-md-3 col-12">
        <div class="inner d-flex flex-column justify-content-center align-items-center">
            <img src="assets/img/icon-1.png" alt="Location Icon" class="img-fluid mb-2" style="max-width: 100px;">
            <p class="text-center">524 Dr. Michael Debakey Drive, 3rd Floor, Lake Charles,<br> LA 70601</p>
        </div>
    </div>
    <div class="col-md-3 col-12">
        <div class="inner d-flex flex-column justify-content-center align-items-center">
            <img src="assets/img/icon-2.png" alt="Phone Icon" class="img-fluid mb-2" style="max-width: 100px;">
            <p class="text-center">(337) 310-6000</p>
        </div>
    </div>
    <div class="col-md-3 col-12">
        <div class="inner d-flex flex-column justify-content-center align-items-center">
            <img src="assets/img/icon-3.png" alt="Social Media Icon" class="img-fluid mb-2" style="max-width: 100px;">
            <p class="text-center">Follow Us</p>
        </div>
    </div>
    <div class="col-md-3 col-12">
        <div class="inner d-flex flex-column justify-content-center align-items-center">
            <img src="assets/img/icon-4.png" alt="Success Stories Icon" class="img-fluid mb-2" style="max-width: 100px;">
            <p class="text-center">Success Stories</p>
        </div>
    </div>
</div>

</section>

<section class="banner3">
    <div class="container">
        <h2 class="custom-heading">Accreditation</h2>
        <p>Cornerstone Specialty Hospitals Southwest Louisiana is accredited through The Joint Commission, an organization that recognizes a hospital's commitment to patient care.</p>
        <img src="assets/img/innerlogo.png" alt="Accreditation Logo" style="max-width: 100%; height: auto;">
    </div>
</section>

<section class="banner4">
    <div class="container">
        <h1 style="color:white;" class="custom-heading">Take a Virtual Tour</h1>
        <div class="video-container">
    <video id="myVideo" controls>
        <source src="path/to/your/video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="play-button" onclick="document.getElementById('myVideo').play();">&#9658;</div>
</div>
       
    </div>
</section>

<section class="banner5">
    <div class="container">
        <h2 class="custom-heading">Why We Make A Difference in Southwest Louisiana</h2>
         <?php include 'slider.php' ?>

    </div>
</section>

<section class="banner6">
    <div class="container">
        <h2 class="custom-heading">Our Specialized Programs</h2>
        <p>Cornerstone Specialty Hospitals offer the following types of care.</p>
        
        <!-- First Row -->
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-12 mb-5">
                <div class="innerr d-flex flex-column justify-content-center align-items-center bg-col">
                    <img src="assets/img/icon-1.png" alt="Location Icon" class="img-fluid mb-2" style="max-width: 100px;">
                    <p class="text-center">524 Dr. Michael Debakey Drive, 3rd Floor, Lake Charles,<br> LA 70601</p>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="innerr d-flex flex-column justify-content-center align-items-center bg-col">
                    <img src="assets/img/icon-2.png" alt="Phone Icon" class="img-fluid mb-2" style="max-width: 100px;">
                    <p class="text-center">(337) 310-6000</p>
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-12 mb-5">
                <div class="innerr d-flex flex-column justify-content-center align-items-center bg-col">
                    <img src="assets/img/icon-1.png" alt="Location Icon" class="img-fluid mb-2" style="max-width: 100px;">
                    <p class="text-center">524 Dr. Michael Debakey Drive, 3rd Floor, Lake Charles,<br> LA 70601</p>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="innerr d-flex flex-column justify-content-center align-items-center bg-col">
                    <img src="assets/img/icon-2.png" alt="Phone Icon" class="img-fluid mb-2" style="max-width: 100px;">
                    <p class="text-center">(337) 310-6000</p>
                </div>
            </div>
        </div>

       <!-- Third Row -->
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-12 mb-5">
                <div class="innerr d-flex flex-column justify-content-center align-items-center bg-col">
                    <img src="assets/img/icon-1.png" alt="Location Icon" class="img-fluid mb-2" style="max-width: 100px;">
                    <p class="text-center">524 Dr. Michael Debakey Drive, 3rd Floor, Lake Charles,<br> LA 70601</p>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="innerr d-flex flex-column justify-content-center align-items-center bg-col">
                    <img src="assets/img/icon-2.png" alt="Phone Icon" class="img-fluid mb-2" style="max-width: 100px;">
                    <p class="text-center">(337) 310-6000</p>
                </div>
            </div>
        </div>

        <!-- Centered Column -->
        <div class="row mt-5 mb-5 justify-content-center">
            <div class="col-md-6 col-12">
                <div class="innerr d-flex flex-column justify-content-center align-items-center bg-col">
                    <img src="assets/img/icon-3.png" alt="Special Icon" class="img-fluid mb-2" style="max-width: 100px;">
                    <p class="text-center">Additional Information or Special Services</p>
                </div>
            </div>
        </div>
    </div>
</section>



</div>
    </div>
</section>
<?php include 'faqs.php' ?>
<section class="banner10">
    <div class="container text-center">
        <h5 style="color:#54585A">In compliance with the Centers for Medicare and Medicaid Services, price transparency information is available below.</h5><br>
        <p>Your out-of-pocket costs may vary depending upon multiple factors, including the specifics of your insurance plan and your individualized treatment plan.<br>Please reach out to our 
            Central Billing Office with any questions at <b>(469) 621-6671</b></p>
        <div class="button-group">
            <button class="btn btn-custom">Standard Charges</button>
            <button class="btn btn-custom">Shoppable Services</button>
        </div>
    </div>
</section>

<script>
    function toggleMenu() {
        var menuItems = document.getElementById("menuItems");
        menuItems.classList.toggle("show");
    }
</script>
<?php include 'footer.php'; ?>
</body>
</html>
