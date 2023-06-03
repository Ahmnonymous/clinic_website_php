<?php

$conn = mysqli_connect('localhost', 'dr_hamza_ehsan', 'Ahmnonymous@786', 'db_contact_php') or die('connection failed');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    // Check if the same date and time already exists in the database
    $checkQuery = "SELECT * FROM `contact_form` WHERE `date` = '$date' AND `time` = '$time'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        $message[] = 'This appointment time is not available.';
    } else {
        $insertQuery = "INSERT INTO `contact_form` (name, email, number, date, time) VALUES ('$name', '$email', '$number', '$date', '$time')";
        $insert = mysqli_query($conn, $insertQuery) or die('query failed');

        if ($insert) {
            $message[] = 'Appointment made successfully!';
        } else {
            $message[] = 'Appointment failed.';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ehsan Clinic</title>

    <!-- JQuery link  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>ehsan</strong>clinic </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#camps">medical camps</a>
        <a href="#staff">staff</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        <a href="#footer">contact us</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/about-img.svg" alt="">
    </div>

    <div class="content">

        <h3 class="you">we take care of <span>you</span></h3>

        <p> At Ehsan Clinic, we are dedicated to providing comprehensive and personalized healthcare services to individuals and families. 
            With a team of skilled medical staff and a state-of-the-art facility, 
            we strive to deliver exceptional medical care tailored to meet your unique needs.
        </p>

        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- why choose us section starts -->

<section class="why" id="why">

    <h1 class="heading"> why choose <span>us</span>? </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-user-friends"></i>
            <h3>Patient-Centered Approach</h3>
            <p> Your health and well-being are our top priorities. We focus on building strong patient-doctor relationships, 
                actively involving you in your healthcare decisions, and addressing your concerns with empathy and understanding.
            </p>
        </div>

        <div class="box">
            <i class="fas fa-hospital-alt"></i>
            <h3>Comprehensive Services</h3>
            <p>From preventive care and routine check-ups to specialized treatments and minor surgeries, 
                we offer a wide range of services to cater to your healthcare needs. Our goal is to provide convenient, all-encompassing care under one roof.
            </p>
        </div>

        <div class="box">
            <i class="fas fa-stethoscope"></i>
            <h3>Comfortable Environment</h3>
            <p>
            We understand that visiting a healthcare facility can be daunting. 
            That's why we've created a warm and welcoming environment to help you feel relaxed during your visits. 
            Our friendly staff will greet you with a smile and ensure your comfort throughout your time with us.
            </p>
        </div>


    </div>

</section>


<!-- why choose us section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> me </h1>

    <div class="row">

        <div class="image">
            <img src="image/drehsan.jpeg" alt="">
        </div>

        <div class="content">
            <h3>DR. HAMZA EHSAN</h3>
            <h2> Physician & Surgeon </h2>
            <p>
                Dr. Hamza Ehsan is a highly experienced medical professional with a strong background in the field of medicine and paediatrics. 
                With a remarkable tenure of 10 years in clinical practice, Dr. Ehsan possesses a wealth of knowledge and expertise. 
                He holds an M.B.B.S degree, indicating his foundational medical education, and a D.C.H degree, demonstrating his specialization in paediatrics.
                Notably, Dr. Hamza Ehsan is registered as an R.M.P (Registered Medical Practitioner) and I.M.C (International Medical Consultant), 
                attesting to his professional credentials and commitment to providing quality healthcare services. Additionally, 
                he has obtained a Diploma in Paediatrics from the prestigious Royal College of Physicians in Ireland, further enhancing his expertise in the field.
                Dr. Ehsan's experience extends beyond local borders, as he has garnered valuable insights and exposure from working both domestically and internationally. 
                His extensive knowledge and skills in paediatrics make him a trusted healthcare provider for patients of all ages, especially children.
                With a deep passion for his profession and a dedication to patient care, Dr. Hamza Ehsan continues to make a positive impact in the medical community, 
                delivering comprehensive and compassionate healthcare services to his patients.
            </p>
            <!--a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a-->
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
        <i class="fas fa-clinic-medical"></i>
            <h3>OPD</h3>
            <p>
               At our clinic, we have an OPD where patients can visit for a wide range of medical consultations and treatments. 
               We offer routine check-ups, accurate diagnosis of illnesses, personalized treatment plans, 
               prescription of medications, and follow-up visits, all aimed at providing the best outpatient care possible.
            </p>
        </div>

        <div class="box">
        <i class="fas fa-cut"></i>
            <h3>Circumcision</h3>
            <p>
            We specialize in circumcision services, a procedure that involves the surgical removal of the foreskin from the penis. 
            Our experienced medical team ensures that the procedure is conducted with utmost care, adhering to strict sterilization protocols. 
            We offer circumcision for medical, cultural, and religious reasons, always prioritizing the comfort and well-being of our patients.
            </p>
        </div>

        <div class="box">
        <i class="fas fa-briefcase-medical"></i>
            <h3>Minor OT</h3>
            <p>
            Our dedicated operating theatre enables us to perform minor surgical procedures in a safe and sterile environment. 
            From the removal of small skin lesions to biopsies and other outpatient surgical procedures, 
            we are equipped to handle a variety of minor surgeries, ensuring optimal outcomes for our patients.
            </p>
        </div>

        <div class="box">
        <i class="fas fa-ambulance"></i>
            <h3>Trauma services</h3>
            <P>
            At our facility, we provide prompt and efficient trauma services to patients who have suffered injuries or accidents. 
            Our skilled healthcare professionals swiftly assess and stabilize patients, delivering emergency treatments and coordinating further care or referrals as required. 
            We are trained to manage a wide range of traumatic injuries, ensuring the best possible care during critical moments.
            </P>
        </div>

        <div class="box">
        <i class="fas fa-hospital"></i>
            <h3>Ward facility</h3>
            <p>
            Our facility features a well-equipped ward, where we admit patients for further medical care and monitoring. 
            Whether it's close observation, intravenous therapies, post-surgical recovery, or management of acute medical conditions, 
            our dedicated healthcare team ensures that patients receive personalized attention and a comfortable environment during their stay.
            </p>
        </div>

        <div class="box">
        <i class="fas fa-wheelchair"></i>
            <h3>Wheelchair service</h3>
            <p>
            We offer wheelchair services to enhance the mobility of our patients. Our facility provides easily accessible wheelchairs, 
            ensuring that individuals with mobility challenges can navigate through our premises comfortably and with assistance if needed.
            </p>
        </div>

        <div class="box">
        <i class="fas fa-calendar-check"></i>
            <h3>Walk-in appointments</h3>
            <p>
            We understand that urgent healthcare needs arise, which is why we welcome walk-in appointments. 
            At our clinic, patients can visit us without a prior scheduled appointment, 
            and our healthcare team strives to accommodate and attend to their medical concerns promptly.
            </p>
        </div>

        <div class="box">
        <i class="fas fa-laptop-medical"></i>
            <h3>Online appointments</h3>
            <p>
            In addition to walk-in appointments, we offer the convenience of online appointments. 
            Through our telemedicine platforms or online booking systems, patients can schedule consultations or follow-up visits with our medical professionals remotely. 
            This service provides flexibility and accessibility, ensuring that patients can receive our expert care even from the comfort of their own homes.
            </p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- camps section starts -->

<section id="camps">
<div class="carousel-line" >
<!-- Full-width images with number and caption text -->
<div class="carousel-container">
  <div class="mySlides animate">
    <img src="./image/camp-1.jpeg" alt="slide" />
    <div class="number">1 / 5</div>
    <div class="text">Lorem ipsum dolor sit amet consectetur</div>
  </div>

  <div class="mySlides animate">
    <img src="./image/camp-2.jpeg" alt="slide" />
    <div class="number">2 / 5</div>
    <div class="text">amet consectetur</div>
  </div>

  <div class="mySlides animate">
    <img src="./image/camp-3.jpeg" alt="slide" />
    <div class="number">3 / 5</div>
    <div class="text">Lorem ipsum dolor sit</div>
  </div>

  <div class="mySlides animate">
    <img src="./image/camp-4.jpeg" alt="slide" />
    <div class="number">4 / 5</div>
    <div class="text">Doloribus quo alias reprehenderit</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="prevSlide()">&#10094;</a>
  <a class="next" onclick="nextSlide()">&#10095;</a>

  <!-- The dots/circles -->
  <div class="dots-container">
    <span class="dots" onclick="currentSlide(1)"></span>
    <span class="dots" onclick="currentSlide(2)"></span>
    <span class="dots" onclick="currentSlide(3)"></span>
    <span class="dots" onclick="currentSlide(4)"></span>
  </div>
</div>


<div class="carousel-container">
  <div class="mySlides animate">
    <img src="./image/camp-1.jpeg" alt="slide" />
    <div class="number">1 / 5</div>
    <div class="text">Lorem ipsum dolor sit amet consectetur</div>
  </div>

  <div class="mySlides animate">
    <img src="./image/camp-2.jpeg" alt="slide" />
    <div class="number">2 / 5</div>
    <div class="text">amet consectetur</div>
  </div>

  <div class="mySlides animate">
    <img src="./image/camp-3.jpeg" alt="slide" />
    <div class="number">3 / 5</div>
    <div class="text">Lorem ipsum dolor sit</div>
  </div>

  <div class="mySlides animate">
    <img src="./image/camp-4.jpeg" alt="slide" />
    <div class="number">4 / 5</div>
    <div class="text">Doloribus quo alias reprehenderit</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="prevSlide()">&#10094;</a>
  <a class="next" onclick="nextSlide()">&#10095;</a>

  <!-- The dots/circles -->
  <div class="dots-container">
    <span class="dots" onclick="currentSlide(1)"></span>
    <span class="dots" onclick="currentSlide(2)"></span>
    <span class="dots" onclick="currentSlide(3)"></span>
    <span class="dots" onclick="currentSlide(4)"></span>
  </div>
</div>

</div>


</section>

<!-- cammps section ends -->

<!-- staff section starts  -->

<section class="staff" id="staff">

    <h1 class="heading"> our <span>staff</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-0.jpeg" alt="">
            <h3>Clinic Administrator</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Head Staff</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Senior Staff</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-3.jpeg" alt="">
            <h3>Senior Staff</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>Staff</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Staff</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Staff</h3>
            <span>expert doctor</span>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">        
            <div class="form-container">
            <?php
            if (isset($message)) {
                foreach ($message as $msg) {
                    echo '<p class="message">' . $msg . '</p>';
                }
            }
            ?>
                <h3>Make an appointment</h3>
                <input type="text" name="name" placeholder="Your name" class="box" required>
                <input type="number" name="number" placeholder="Your number" class="box" required>
                <input type="email" name="email" placeholder="Your email" class="box">
                <input type="date" name="date" id="date" class="box" required>
                <input type="time" name="time" id="time" class="box" required>
                <input type="submit" name="submit" value="Make an appointment now" class="btn">
                <span class="error-message" id="error-message"></span>
            </div>
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts -->
<section id="review">
<h1 class="heading"> <span>CLIENT'S</span> REVIEW </h1>    

<div class="slide-container swiper">

            <div class="slide-content">

                <div class="card-wrapper swiper-wrapper">

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r1.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Haris Awan</h2>
                            <p class="description">
                            Dr. Hamza did a great job with my first ever health exam. 
                            He explained everything to me in a very clear manner. He was also kind and friendly. 
                            All of the staff was great.
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r2.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Khawar Aziz</h2>
                            <p class="description">
                            Very credible clinic in the town. Consultation is excellent. 
                            Dr Hamza Ehsan is one of the emerging consultant in his area and he know how to elaborate the disease to the patient in a very simple way. 
                            Moreover his behavior is like a family member.
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r3.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Malik Fahad</h2>
                            <p class="description">
                            Dr. Hamza Ehsan has a very humble and co-operative personality. 
                            His clinical knowledge and skills are extra-ordinary i have been visiting him from past 3 years and he is highly recommended.
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r4.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Muhammad Zain</h2>
                            <p class="description">
                            Dr Hamza Ehsan is the most professional and most intellectual practician I've ever come cross. I've been through his attendance as a patient, 
                            i was really unwell, Dr Hamza provided me proper guidelines and suggested me proper medication and drove me out of my misery. 
                            Now I'm living a healthy life all thanks to Dr Hamza.
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r5.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Chaudhry Shuja</h2>
                            <p class="description">
                            Best private clinic, very professional with top notch consultation by Dr Hamza 💯👍🏻 Wish you the best and nothing less
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r6.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Zainab Atta</h2>
                            <p class="description">
                            The best place to go if you are concerned about any aspect of your health! Dr Ehsan is our family doctor.
                            They deal with each patient according to the patients requirements and until the patient is fully satisfied with their service. 
                            Another good thing about Ehsan clinic is that you can just walk in without an appointment and they are always happy to assist you.
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r7.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Rehan Qureshi</h2>
                            <p class="description">
                            The Best Dr In our Area To Concerned any aspect of Ur health Dr Hamza Ehsan. 
                            He is A very brilliant and  Deal with Patient like a patient requirement. ALLAH BLESS HIM.
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r8.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Adala Yaseen</h2>
                            <p class="description">
                            Highly recommended. <br>Skilled and professional. <br>Excellent Hygiene
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r9.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Rehan Malik</h2>
                            <p class="description">
                            Best clinic, Doctors and nursing staff is very cooperative and helpful. Services are best.
                            Specially Dr Ehsan is very kind hearted man. His treatment is best.
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r10.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Haris-K Official</h2>
                            <p class="description">
                            Best person doctor friend with a charming personality always there to help his patients great person and great service.
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r11.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Haroon Siddique</h2>
                            <p class="description">
                            Dr ehsan is a brillient doctor with great skill of patient dealing.
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="image/r12.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">GymChalk ASMR</h2>
                            <p class="description">
                            Amazing & Highly Professional. <br>Soft & Heart Kind Person. <br>Hygiene clinic With Good Staf. <br>Highly Recommend
                            </p>
                            <button class="button">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            

        </div>
        
</section>
<!-- review section starts -->

<!-- footer section starts  -->

<section id="footer" class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#staff"> <i class="fas fa-chevron-right"></i> staff </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#footer"> <i class="fas fa-chevron-right"></i> contact us </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#services"> <i class="fas fa-chevron-right"></i> OPD </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> Circumcision </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> Minor OT </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> Trauma Services </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> Ward facility </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> Wheelchair Service </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> Walk-in appointments </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> Online appointments </a>

        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="#footer"> <i class="fas fa-phone"></i> +92 333 5222048 </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=a4medqureshi8@gmail.com&su=Hello&body=Dear recipient,%0D%0A%0D%0A" target="_blank"> <i class="fas fa-envelope"></i> ehsan@gmail.com </a>
            <a href="https://www.google.com/maps/dir//Ehsan+Clinic%D8%8C+Near+Hathi+Chowk%D8%8C+Bazar+R.A.Bazar+Rd,+Saddar,+Rawalpindi,+Punjab+46000,+Pakistan%E2%80%AD/@33.6002206,73.0499861,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x38df95e888899965:0x70a7fa01d728bf11!2m2!1d73.0525595!2d33.6002004!3e0?hl=en-GB&entry=ttu" target="_blank"><i class="fas fa-map-marker-alt"></i> Rawalpindi, Pakistan</a>

        </div>

        <div class="box">
            <h3>follow us</h3>
            <!--a href="#"> <i class="fab fa-twitter"></i> twitter </a-->
            <a href="https://pk.linkedin.com/in/hamza-ehsan-035805b4"> <i class="fab fa-linkedin" target="_blank"></i> linkedin </a>
            <a href="https://www.instagram.com/ehsanclinic_/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.facebook.com/ehsanclinic" target="_blank"> <i class="fab fa-facebook"></i> facebook </a>
        </div>

    </div>

    <div class="credit"><a href="https://ahmnonymous.netlify.com/" target="_blank"><span>© Ahmed Raza</span></a> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 25,
    loop: true,
    centerSlide: true,
    fade: true,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    autoplay: {
      delay: 5000,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      950: {
        slidesPerView: 3,
      },
    },
  });
</script>

<script>
function validateForm() {
    var currentDate = new Date().toISOString().split('T')[0]; // Get the current date in ISO format
    var currentTime = new Date().toISOString().split('T')[1].slice(0, 5); // Get the current time in HH:mm format

    var selectedDate = document.getElementById("date").value;
    var selectedTime = document.getElementById("time").value;

    if (selectedDate < currentDate) {
        showError("Invalid Date");
        return false;
    }

    if (selectedDate === currentDate && selectedTime < currentTime) {
        showError("Invalid Time");
        return false;
    }

    return true;
}

function showError(message) {
    var errorMessage = document.getElementById("error-message");
    errorMessage.textContent = message;
}

// Remove error message when the inputs are modified
document.getElementById("date").addEventListener("input", removeError);
document.getElementById("time").addEventListener("input", removeError);

function removeError() {
    var errorMessage = document.getElementById("error-message");
    errorMessage.textContent = "";
}
</script>

<script>
    let slideIndex = 0;
showSlides();

// Next-previous control
function nextSlide() {
  slideIndex++;
  showSlides();
  timer = _timer; // reset timer
}

function prevSlide() {
  slideIndex--;
  showSlides();
  timer = _timer;
}

// Thumbnail image controlls
function currentSlide(n) {
  slideIndex = n - 1;
  showSlides();
  timer = _timer;
}

function showSlides() {
  let slides = document.querySelectorAll(".mySlides");
  let dots = document.querySelectorAll(".dots");

  if (slideIndex > slides.length - 1) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  
  // hide all slides
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  
  // show one slide base on index number
  slides[slideIndex].style.display = "block";
  
  dots.forEach((dot) => {
    dot.classList.remove("active");
  });
  
  dots[slideIndex].classList.add("active");
}

// autoplay slides --------
let timer = 7; // sec
const _timer = timer;

// this function runs every 1 second
setInterval(() => {
  timer--;

  if (timer < 1) {
    nextSlide();
    timer = _timer; // reset timer
  }
}, 1000); // 1sec
</script>

</body>
</html>

