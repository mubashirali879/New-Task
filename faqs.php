<style type="text/css">
    .faq-header {
        background-color: transparent; 
        color: #54585A;
        font-size: 20px;
        font-weight: 600;
        padding: 10px;
        cursor: pointer;
        display: flex;
        justify-content: space-between; 
        align-items: center; 
        border:none !important;
        border-radius: 5px; /* Rounded corners for a nicer look */
    }

    .faq-header.active {
        color: #fff;
        background-color: #345884; /* Active header color */
    }

    .faq-content {
        display: none;
        padding: 10px;

    }

    /* Show content when the header is active */
    .faq-header.active + .faq-content {
        display: block;
    }

    .icon {
        font-size: 22px;
    }
    .item {
        margin-bottom: 10px;
        padding:0px!important;
        background-color: #EDEDED;
    }
    .faq-head {
        color: #54585A;
        font-size: 42px;
        font-weight: 700;
        margin: 40px 0px;
    }
    .faq-header {
        padding:20px!important;
        font-size: 20px;
        color: #54585A;
        font-family: 'Noto Sans Hebrew', sans-serif;
        font-weight: 600;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Hebrew:wght@400;600;700&display=swap" rel="stylesheet">
    <style type="text/css">
        .faq-header {
            background-color: transparent; 
            color: #54585A;
            font-size: 20px;
            font-weight: 600;
            padding: 10px;
            cursor: pointer;
            display: flex;
            justify-content: space-between; 
            align-items: center; 
            border: 1px solid #E0E0E0; /* Add a border for separation */
            border-radius: 5px; /* Rounded corners for a nicer look */
        }

        .faq-header.active {
            color: #fff;
            background-color: #345884; /* Active header color */
        }

        .faq-content {
            display: none;
            padding: 10px;
            border-top: 1px solid #E0E0E0; /* Border to separate content */
        }

        /* Show content when the header is active */
        .faq-header.active + .faq-content {
            display: block;
        }

        .icon {
            font-size: 22px;
        }
        .item {
            margin-bottom: 10px;
            padding: 10px;
            background-color:none;
        }
        .faq-head {
            color: #54585A;
            font-size: 42px;
            font-weight: 700;
            margin: 40px 0px;
        }
        .faq-header {
            font-size: 20px;
            color: #54585A;
            font-family: 'Noto Sans Hebrew', sans-serif;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container col-md-8">
        <div class="faq-section active mt-5">
            <h2 class="custom-heading" style="margin-bottom:20px;">Frequently Asked Questions</h2>
            <div class="faq-item item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span>What is your return policy?</span>
                    <span class="icon">+</span>
                </div>
                <div class="faq-content">
                    <p>You can return any item within 30 days of receipt for a full refund.</p>
                </div>
            </div>
           
            <div class="faq-item item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span>How do I track my order?</span>
                    <span class="icon">+</span>
                </div>
                <div class="faq-content">
                    <p>You will receive an email with tracking information once your order has shipped.</p>
                </div>
            </div>
             <div class="faq-item item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span>How do I track my order?</span>
                    <span class="icon">+</span>
                </div>
                <div class="faq-content">
                    <p>You will receive an email with tracking information once your order has shipped.</p>
                </div>
            </div>
             <div class="faq-item item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span>How do I track my order?</span>
                    <span class="icon">+</span>
                </div>
                <div class="faq-content">
                    <p>You will receive an email with tracking information once your order has shipped.</p>
                </div>
            </div>
             <div class="faq-item item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span>How do I track my order?</span>
                    <span class="icon">+</span>
                </div>
                <div class="faq-content">
                    <p>You will receive an email with tracking information once your order has shipped.</p>
                </div>
            </div>
             <div class="faq-item item">
                <div class="faq-header" onclick="toggleFaq(this)">
                    <span>How do I track my order?</span>
                    <span class="icon">+</span>
                </div>
                <div class="faq-content">
                    <p>You will receive an email with tracking information once your order has shipped.</p>
                </div>
            </div>

            <!-- Additional FAQ items here -->
        </div>
    </div>

    <script type="text/javascript">
        function toggleFaq(header) {
            const content = header.nextElementSibling;
            header.classList.toggle('active');
            
            if (content.style.display === "block") {
                content.style.display = "none";
                header.querySelector('.icon').innerHTML = '+';
            } else {
                content.style.display = "block";
                header.querySelector('.icon').innerHTML = '-';
            }
        }
    </script>
</body>
</html>
