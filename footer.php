<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Hebrew:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style type="text/css">

.footer {
    display: flex;
    align-items: center;
    background-color: #EDEDED;
}
.foot{
	padding:50px 0px;
}
.custom-hea{
    font-size:22px;
       color:#54585A ;
    font-family: 'Noto Sans Hebrew', sans-serif;
    font-weight: 600;

}
p {
    margin-top: 0;
    margin-bottom: 0;
}
.footer h5 {
    font-weight: bold;
    margin-bottom: 15px;
}

.footer a {
    color: #54585A; /* Adjust the color as needed */
    text-decoration: none; /* Remove underline */
}

.footer a:hover {
    text-decoration: underline; /* Add underline on hover */
}

.social-icon {
    display: inline-block;
}

.footer li {
    margin-bottom: 15px; /* Adjust this value for desired spacing */
}

.bottom-footer {
    background-color: #54585A; /* Dark background for bottom footer */
    padding: 15px 0; /* Padding for the footer */
}

.footer-link {
    color: white; /* Link color */
    text-decoration: none; /* Remove underline */
}

.footer-link:hover {
    text-decoration: underline; /* Underline on hover */
}

@media (max-width: 768px) {
    .footer {
        flex-direction: column; /* Stack items on smaller screens */
        align-items: flex-start; /* Align to the left */
    }
    
    .social-icon img {
        width: 30px; /* Adjust social icons size for smaller screens */
        height: 30px;
    }

    .bottom-footer .row {
        text-align: left; /* Center text on smaller screens */
    }
}
</style>

<footer class="footer bg-light text-dark pt-4">
    <div class="container foot">
        <div class="row">
            <!-- Block 1: Logo and Description -->
            <div class="col-md-4 col-sm-6 mb-4">
                  <a href="#"><img src="assets/img/site-logo.png" width="auto" height="40px" alt="Footer Logo"></a><br><br>
                <p>Our mission is to make a difference by providing exceptional care and delivering the best experience. We pride ourselves on our quality of care, respnsive services, and commitment to excellence.</p>
            </div>
            <!-- Block 2: Useful Links -->
            <div class="col-md-2 col-sm-6 mb-4">
                <ul class="list-unstyled">
                    <li><a href="#about">Home</a></li>
                    <li><a href="#services">About us</a></li>
                    <li><a href="#contact">Location</a></li>
                    <li><a href="#contact">Who We Serve</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
            <!-- Block 3: Menu -->
            <div class="col-md-2 col-sm-6 mb-4">
                <ul class="list-unstyled">
                    <li><a href="#home">Careers</a></li>
                    <li><a href="#blog">Services</a></li>
                    <li><a href="#careers"><p>Speciality Hospitals</p></a>
                    <li><a href="#careers"><p>Senior Living</p></a></li>
                    <li><a href="#careers"><p>Behavioral Health</p></a></li>
                </ul>
            </div>
            <!-- Block 4: Social Icons -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="d-flex justify-content-around">
                <a href="#" class="social-icon">
    <i class="fab fa-twitter" style="font-size: 30px; color: #2F5E90;"></i>
</a>
<a href="#" class="social-icon">
    <i class="fab fa-facebook-f" style="font-size: 30px; color: #2F5E90;"></i>
</a>

               <a href="#" class="social-icon">
    <i class="fab fa-instagram" style="font-size: 30px; color: #2F5E90;"></i>
</a>

                </div>
                <!-- Address and Phone Number -->
                <div class="text-center mt-4">
                    <p>123 Your Street, City, State, Zip</p>
                    <p>Phone: (123) 456-7890</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="bottom-footer">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 text-left">
                <p style="color:white">All rights reserved © 2024</p>
            </div>
            <div class="col-md-6 text-right">
                <a href="#about" class="footer-link">About</a>
                <span style="color:white;" class="mx-2">|</span> <!-- Divider -->
                <a href="#contact" class="footer-link">Contact</a>
            </div>
        </div>
    </div>
</div>
