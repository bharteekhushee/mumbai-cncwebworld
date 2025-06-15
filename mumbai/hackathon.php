<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Hackathon - CNC WEB WORLD</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
    <?php include 'common/headerlink.php'?>
    <style>
        .apply-btn {
            background-color: #5E3FDE;
            padding: 10px 25px;
            color: white;
            border-radius: 3px;
        }
        /* -----------------------------------------------
        Pop-Up form 
        -------------------------------------------------*/
        .popup-screen-hackathon {
            position: fixed;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            visibility: hidden;
            transition: all 0.5s ease;
            /* backdrop-filter:blur(6px); */
        }

        .popup-screen-hackathon.active {
            visibility: visible;
        }

        .popup-hackathon {
            position: relative;
            max-width: 450px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 0px 30px 30px 30px;
            border-radius: 10px;
            backdrop-filter: blur(0px);
            box-shadow: 0px 2px 5px 5px rgba(0, 0, 0, 0.1);
            transform: scale(0);
            transition: all 0.6s;
            font-family: "Poppins", sans-serif;
        }

        .popup-screen-hackathon.active .popup-hackathon {
            transform: scale(1);
        }

        .popup-hackathon h3{
            margin-top: 20px;
            color: darkblue;
            font-weight: 500;
        }

        .popup-hackathon #close {
            border: none;
            background-color: transparent;
            font-size: 39px;
            margin-top: 0;
        }

        /* -------------------------------------------
        Pop-Up form
        -----------------------------------------------*/
        #detail {
            background-color: #f1f1f1;
            font-family: "Poppins", sans-serif;
        }

        #detail .col .box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
        }

        #content {
            font-family: "Poppins", sans-serif;
        }

        #content a {
            color: black;
            transition: all 0.4s;
        }

        #content a:hover {
            color: #0D6EFD;
            text-decoration: underline !important;
        }
    </style>
</head>

<body class="body">
    <!--PopUp form-->
    <div class="popup-screen-hackathon">
        <div class="popup-hackathon">
            <div class="d-flex justify-content-between">
                <h3 class="h3">Wait! Before You Go,</h3>
                <button id="close" class="ms-auto">&times;</button>
            </div>
            <p>
                Attend a <strong>Free Demo Session</strong>.
            </p>
            <p>
                Then Enroll in Our <strong>100% Job Guarantee</strong> Course at the Nerul, Navi Mumbai Branch
            </p>
            <br>
           <div class="text-center"> <a href="#" class="apply-btn">Apply For Demo</a></div>
        </div>
    </div>
    <!--PopUp form-->
    <!-- top header start -->
    <?php include 'common/topheader.php'?>
    <!-- top header end -->
    <!-- header start -->
    <?php include 'common/header.php'?>
    <!-- header end -->
    <!-- banner start -->
    <section>
        <img src="./assets/img/hackathon-b.png" alt="banner image" class="img-fluid w-100">
    </section>
    <!-- banner end -->
    <!-- detail start -->
    <section id="detail">
        <div class="container-lg py-5 px-5 px-lg-0">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col d-flex">
                    <div class="box">
                        <h2 class="fw-bold">Hackathon Details</h2>
                        <p class="fw-semibold">📌 Topics Covered: C, C++, Data Structures, Java, Python</p>
                        <p class="fw-semibold">📝 Total Marks: 50</p>
                        <p class="fw-semibold"> ⏳ Duration: 50 Minutes</p>
                        <br>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="box">
                        <h2 class="fw-bold">Exciting Rewards</h2>
                        <p class="fw-semibold">🏆 Top 5 Performers will receive Trophies & Attractive Prizes.</p>
                        <p class="fw-semibold">🎖️ All Participants will receive a ₹3000 Course Voucher + Medal.</p>
                        <br>
                        <a href="#" class="apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mt-4">
                        Don't miss this golden opportunity to test your technical skills and gain recognition. Register
                        now and be a part of this exciting challenge!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- detail end -->
    <!-- content start -->
    <section id="content">
        <div class="container-lg py-5 px-lg-0 px-5">
            <p>
                <strong> 📅 [Mention Date & Time]</strong>
            </p>
            <p><strong>📍 Venue:-</strong> [
                <a href="https://maps.app.goo.gl/UBcTuWiEUj2aS1nXA"> Second Floor, Nerul Railway Station Complex, Office
                    No, F-201 & 203, above Union Bank, Nerul West, Navi Mumbai, Maharashtra 400706 Mob.: 7400193799
                </a>]
            </p>
        </div>
    </section>
    <!-- content end -->
    <!-- linkwhatsapp start -->
    <?php include './common/linkwhatsapp.php' ?>
    <!-- linkwhatsapp end -->
    <!-- footer section start -->
    <?php include './common/footer.php' ?>
    <!-- footer section end -->
    <!-- fixed section start -->
    <a href="https://api.whatsapp.com/send?phone=917400332999" class="btn-whatsapp">
        <img src="./assets/img/whatsapp.svg" alt="" class="img-fluid">
    </a>
    <!-- fixed section end -->
    <script>
        //   Popup form
        const popupScreenHackathon = document.querySelector(".popup-screen-hackathon")
        const closeHackathon = document.querySelector("#close")

        window.addEventListener("load", () => {
            setTimeout(() => {
                popupScreenHackathon.classList.add("active");
            }, 5000
            );
            setInterval(() => {
                popupScreenHackathon.classList.add("active");
            }, 35000
            )
        });
        function enquiry() {
            popupScreenHackathon.classList.add("active")
            // popBox.style.display = "none";
        };
        closeHackathon.addEventListener("click", function () {
            popupScreenHackathon.classList.remove("active")
            // popBox.style.display = "none";
        });
        //   Popup form

    </script>
    <?php include './common/footerlink.php' ?>
    
</body>

</html>