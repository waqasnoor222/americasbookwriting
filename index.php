<?php

include('smtp/PHPMailerAutoload.php');

function smtp_mailer($to,$subject, $msg){
  $mail = new PHPMailer(); 
  $mail->IsSMTP(); 
  $mail->SMTPAuth = true; 
  $mail->SMTPSecure = 'tls'; 
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587; 
  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';
  //$mail->SMTPDebug = 2; 
  $mail->Username = "tahmeerhussain1@gmail.com";
  $mail->Password = "zqulzmmsagjjylan";
  $mail->SetFrom("tahmeerhussain1@gmail.com");
  $mail->Subject = $subject;
  $mail->Body =$msg;
  $mail->AddAddress($to);
  $mail->SMTPOptions=array('ssl'=>array(
    'verify_peer'=>false,
    'verify_peer_name'=>false,
    'allow_self_signed'=>false
  ));
  if(!$mail->Send()){
    echo $mail->ErrorInfo;
  }else{
    return 'Sent';
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    $subject = "New Submission from {$name}";

    // Recipient email
   // Replace with the actual recipient email

    // Email body
    $body = "";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message: $message\n";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    

    $result = smtp_mailer($email, $subject, $body);

    if ($result === 'Sent') {
        $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

        $thankYouUrl = $baseUrl . "/thankyou";
        header("Location: $thankYouUrl");
        exit();
  } else {
      echo "Error: " . $result;
  }
    
}


 include 'include/header.php';



?>
    <section class="py-5 banner position-relative vid_main">
      <video class="lozad position-absolute" data-poster="assets/img/video-poster.webp" autoplay muted playasline loop>
        <source data-src="assets/videos/bookwritingvideo-1.webm" type="video/mp4">
      </video>
      <div class="container-xl highlight_banner">
        <div class="row justify-content-center pt-5">
          <div class="col-lg-12 col-md-12 col-xl-11 text-white text-center pt-5">
            <p class="f-20">
              <strong>Award Winning Book Writing Services</strong>
            </p>
            <h1 class="fw-700 f-36"> Become the Best-Seller Author with American Book Agency <br>
              <span class="clr-2">The Best Book Writing Company in USA</span>
            </h1>
            <div class=" d-flex justify-content-center -tel:+1-315-636-4603center mt-3">
              <button class="me-2 mb-2 " type="button" data-bs-toggle="modal" data-bs-target="#quote">Get Started</button>
              <a class="btn mb-2 btn-2" href="tel:+1-315-636-4603">+1-315-636-4603</a>
            </div>
            <ul class="list-unstyled row row-cols-sm-6 justify-content-center row-cols-2 px-5 mt-3">
              <li class="col">
                <img class="lozad" data-src="assets/img/banner-seal-white-4.webp" alt="American Book Agency">
              </li>
              <li class="col">
                <img class="lozad" data-src="assets/img/banner-seal-white-3.webp" alt="American Book Agency">
              </li>
              <li class="col">
                <img class="lozad" data-src="assets/img/banner-seal-white-2.webp" alt="American Book Agency">
              </li>
              <li class="col">
                <img class="lozad" data-src="assets/img/banner-seal-white-1.webp" alt="American Book Agency">
              </li>
            </ul>
          </div>
        </div>
        <div class="row bannerbook d-none d-md-block">
          <div class="container">
            <img class="lozad" data-src="assets/img/home_banner_bottam_img.webp" alt="American Book Agency">
          </div>
        </div>
      </div>
    </section>
    <section class="pt-4 pt-md-0">
      <div class="container-xl">
        <div class="row justify-content-center">
          <div class="col-12 text-center mt-3 mb-3">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active"></div>
                <div class="carousel-item"></div>
                <div class="carousel-item"></div>
              </div>
            </div>
            <marquee class="f-18 fw-700 mb-3 text-dark" loop="-1">
              <span class="mx-5 ">#1 Book Writing Company!</span>
              <span class="mx-5"> Leading Book Writing Experts!</span>
              <span class="mx-5">Affordable Book Writing Services in USA</span>
            </marquee>
          </div>
          <div class="col-lg-5 d-none d-lg-block align-self-end">
            <img class="lozad" data-src="assets/img/01-1.webp" alt="American Book Agency">
          </div>
          <div class="col-lg-7 col-md-12 pb-5 align-self-center">
            <h2 class="f-24 fw-700">The Best Online Book Writing Services in USA, Writing Professional and Best-Selling Works For You</h2>
            <p>Welcome to the #1 book writing company in USA, American Book Agency – where we believe that everyone has a story to tell and deserves to have it read. Our team of professional book writing experts for hire is dedicated to bringing your ideas to life with maximum determination and dedication. We know that these qualities are crucial for success, and our team of booking writing experts has all these qualities in their quivers.</p>
            <p>As a professional book writing agency, we’re all about making your book writing experience as fun and stress-free as possible. We believe that writing should be a joyful experience, and we work hard to make that happen. Our team of leading book writing experts is here to help you every step of the way, from brainstorming ideas to putting the finishing touches on your manuscript.</p>
            <p>Here are some of the benefits of working with American Book Agency:</p>
            <ul class="points row row-cols-md-2 row-cols-1">
              <li class="col pe-3">Professional book writing services at affordable rates.</li>
              <li class="col pe-3">Access to valuable tools for improving your writing abilities.</li>
              <li class="col pe-3">A commitment to quality and excellence in everything we do.</li>
              <li class="col pe-3">A team of dedicated professionals who are passionate about bringing your ideas to life.</li>
            </ul>
            <p>Turn your best-seller author dreams into a reality with the most affordable book writing services in USA. Our team of expert writers is dedicated to bringing your ideas to life with maximum determination and dedication, and we’re excited to help you tell your story!</p>
            <div class="d-flex flex-wrap mt-3 align-items-center">
              <button class="me-3 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#quote">Get Started</button>
              <!-- <a class="btn me-3 mb-2 btn-2 chat" href="javascript:void(0)	">Live Chat</a> -->
              <a class="f-20 btn me-3 mb-2 btn-2 chat" href="tel:+1-315-636-4603">
                <i class="fa-solid fa-phone "></i> +1-315-636-4603 </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="lozad py-5" data-background-image="assets/img/bg_recommended.webp">
        <div class="container-xl">
          <div class="row text-center justify-content-center">
            <div class="col-lg-8">
              <h2 class="fw-700 f-39 mb-5">Professional Book Writing, Publishing, and Marketing Services for Authors</h2>
            </div>
          </div>
          <ul class="nav nav-tabs justify-content-between border-bottom-0" id="myTab" role="tablist">
            <li class="nav-item mb-2" role="presentation">
              <button class="nav-link active" id="Ghostwriting-tab" data-bs-toggle="tab" data-bs-target="#Ghostwriting" type="button" role="tab" aria-controls="Ghostwriting" aria-selected="true">GHOST WRITING</button>
            </li>
            <li class="nav-item mb-2" role="presentation">
              <button class="nav-link" id="Editing-tab" data-bs-toggle="tab" data-bs-target="#Editing" type="button" role="tab" aria-controls="Editing" aria-selected="false">Editing</button>
            </li>
            <li class="nav-item mb-2" role="presentation">
              <button class="nav-link" id="Publishing-tab" data-bs-toggle="tab" data-bs-target="#Publishing" type="button" role="tab" aria-controls="Publishing" aria-selected="false">Publishing</button>
            </li>
            <li class="nav-item mb-2" role="presentation">
              <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false">Marketing</button>
            </li>
            <li class="nav-item mb-2" role="presentation">
              <button class="nav-link" id="outluning-tab" data-bs-toggle="tab" data-bs-target="#outluning" type="button" role="tab" aria-controls="outluning" aria-selected="false">Book Outlining</button>
            </li>
            <li class="nav-item mb-2" role="presentation">
              <button class="nav-link" id="formating-tab" data-bs-toggle="tab" data-bs-target="#formating" type="button" role="tab" aria-controls="formating" aria-selected="false">BOOK FORMATTING</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="Ghostwriting" role="tabpanel" aria-labelledby="Ghostwriting-tab">
              <div class="row py-4 align-items-center">
                <div class="col-lg-3">
                  <h3 class="fw-700 f-20">Bring Your Ideas to Life with the Best Ghost Writing Agency in USA</h3>
                  <p>Ghost writing is the art of transforming your ideas into a well-written and award winning book. It’s perfect for individuals who have great ideas but lack the time or skills to write a book. At American Book Agency, we have a team of leading book writing experts who are adept at capturing your voice and turning your thoughts into a compelling narrative.</p>
                  <p>Choosing our top ranked book writing company for your ghost writing needs ensures that your book will be written by professional book writing experts who respect your ideas and confidentiality. As a leading book writing company, we pride ourselves on our ability to tell your story just the way you want it, making us the most reliable choice for ghost writing services.</p>
                </div>
                <div class="col-lg-9">
                  <div class="book-slider">
                    <div class="item">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/01.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/02.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/03.webp" alt="American Book Agency">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Editing" role="tabpanel" aria-labelledby="Editing-tab">
              <div class="row py-4 align-items-center">
                <div class="col-lg-3">
                  <h3 class="fw-700 f-20">Transform Your Draft into a Book with Professional Book Editing Services</h3>
                  <p>Editing is a crucial step in the book writing process that refines and polishes a manuscript. It involves correcting grammatical errors, improving sentence structure, and ensuring clarity and coherence in the text. At American Book Agency, our editing services are designed to enhance your manuscript while preserving your unique voice.</p>
                  <p>With American Book Agency, you can trust that your manuscript will be meticulously edited by professionals who understand the nuances of language and narrative flow. Our commitment to quality and attention to detail make us the best and most reliable book writing company in USA.</p>
                </div>
                <div class="col-lg-9">
                  <div class="book-slider">
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/04.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/05.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/06.webp" alt="American Book Agency">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Publishing" role="tabpanel" aria-labelledby="Publishing-tab">
              <div class="row py-4 align-items-center">
                <div class="col-lg-3">
                  <h3 class="fw-700 f-20"> From Manuscript to Printed Book - We Offer Complete Book Writing Services</h3>
                  <p>Publishing involves turning a final draft into a finished book and making it available to the public. It can be a complex process involving design, printing, distribution, and marketing. At American Book Agency, we offer complete book writing services with comprehensive publishing that take the hassle out of the publishing process.</p>
                  <p>Choosing our book writing agency for your publishing needs means entrusting your book to a team of leading book writing experts with extensive publishing experience. Our book writing company handles all aspects of the publishing process, ensuring your book reaches your audience in the best possible form. Our reliability and commitment to success set us apart in the publishing industry.</p>
                </div>
                <div class="col-lg-9">
                  <div class="book-slider">
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/07.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/08.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/09.webp" alt="American Book Agency">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
              <div class="row py-4 align-items-center">
                <div class="col-lg-3">
                  <h3 class="fw-700 f-20"> Maximize Your Book Sales with The Best Book Marketing Services in USA</h3>
                  <p>Marketing is the key to your book reaching its intended audience and becoming a best-seller. It involves strategic planning, targeted promotion, and consistent engagement with your readers. At American Book Agency, we offer marketing services that boost your book’s visibility and maximize its potential.</p>
                  <p>By choosing our book writing company, you’re choosing a marketing partner who understands the literary market and knows how to make your book stand out. The strategic approach of our book writing agency and our commitment to your success make us the most reliable choice for your book marketing needs.</p>
                </div>
                <div class="col-lg-9">
                  <div class="book-slider">
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/10.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/11.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/12.webp" alt="American Book Agency">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="outluning" role="tabpanel" aria-labelledby="outluning-tab">
              <div class="row py-4 align-items-center">
                <div class="col-lg-3">
                  <h3 class="fw-700 f-20"> Lay the Perfect Foundation for Your Book with Expert Outlining Services</h3>
                  <p> In professional book writing services, outlining is the process of creating a detailed plan for your book, including its structure, plot points, and character development. It provides a roadmap for your book and makes the writing process much smoother. At American Book Agency, we offer book outlining services that help you craft your story seamlessly.</p>
                  <p>Choosing our professional book writing company for your book outlining needs ensures that your book benefits from careful planning and expert storytelling. Our book writing agency’s understanding of narrative structure and commitment to your vision makes American Book Agency the most reliable choice for your book outlining needs.</p>
                </div>
                <div class="col-lg-9">
                  <div class="book-slider">
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/13.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/14.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/15.webp" alt="American Book Agency">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="formating" role="tabpanel" aria-labelledby="formating-tab">
              <div class="row py-4 align-items-center">
                <div class="col-lg-3">
                  <h3 class="fw-700 f-20">Expert Book Formatting Services for a Professional Finish</h3>
                  <p> Book formatting involves arranging the text and elements of your book to ensure a smooth and enjoyable reading experience. It includes tasks such as setting margins, choosing fonts, and arranging text. Our book writing company specializes in expert book formatting services that present your story to capture your reader’s hearts.</p>
                  <p>Choosing American Book Agency’s professional book writing services ensures that your book’s formatting is handled by leading book writing experts who understand the importance of readability and aesthetics. Our commitment to quality and attention to detail makes us the most sensible choice for your book formatting needs.</p>
                </div>
                <div class="col-lg-9">
                  <div class="book-slider">
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/16.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/17.webp" alt="American Book Agency">
                      </span>
                    </div>
                    <div class="item px-2">
                      <span class="portfolio">
                        <img data-lazy="assets/img/portfolio/18.webp" alt="American Book Agency">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row pb-3	">
              <div class="col-lg-3 col-md-2 col-5">
                <a href="tel:+1-315-636-4603">
                  <button>Contact Us</button>
                </a>
              </div>
              <div class="col-lg-9 col-md-10 col-7">
                <div class="row">
                  <div class="col-md-3 col-sm-4 ">
                    <img class="lozad" data-src="assets/img/call-hand.webp" alt="American Book Agency">
                  </div>
                  <div class="col-md-9 align-self-center d-none d-md-block bg-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-sm-end justify-content-center">
          <div class="col-lg-9 col-md-10 col-11 cta py-5 text-white">
            <div class="row justify-content-center">
              <div class="col-xl-8 col-lg-8 col-sm-10">
                <h2 class="fw-700 f-39"> Hire American Book Agency to Become the #1 Best-Seller Book Writer in USA</h2>
                <p>Then, embark on this journey with our professional book writing company as we help you unlock your writing aspirations. By joining our vibrant community of aspiring authors, you’re not just stepping into a group but becoming part of a family of many best-seller book writing experts. It’s not a book that you’re writing but a legacy. </p>
                <p>So, let’s get in touch with American Book Agency today.</p>
                <div class="d-flex mt-3">
                  <button class="me-2 mb-2" type="button" data-bs-toggle="modal" data-bs-target="#quote">Get Started</button>
                  <a class="btn mb-2 btn-2" href="tel:+1-315-636-4603">+1-315-636-4603</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="f-39 fw-700">Benefits of Partnering with the <br> #1 Book Writing Company in USA </h2>
            <p>Discover the unique advantages of working with American Book Agency, where we prioritize your needs and success, offering a range of benefits.</p>
          </div>
        </div>
        <div class="row row-cols-lg-3">
          <div class="col mb-4">
            <div class="perk lozad" data-background-image="assets/img/Professional-Expertise.webp">
              <div class="overlay d-flex justify-content-center align-items-center text-white text-center">
                <div class="perk-description p-5">
                  <i class="fa-solid fa-book f-39 mb-3"></i>
                  <h3 class="f-20 fw-700 border-bottom">Time Efficiency</h3>
                  <p>Streamlined by the best book writing experts in the industry, our process is optimized to ensure your book is completed swiftly, saving you valuable time.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="perk ">
              <div class="d-flex justify-content-center align-items-center h-100 text-center">
                <div class="perk-description p-5">
                  <i class="fa-solid fa-layer-group f-39 mb-3"></i>
                  <h3 class="f-20 fw-700 border-bottom">Customized Approach</h3>
                  <p>Our book writing services are tailored to your unique individual needs. Our vision is to ensure your vision is accurately brought to life.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="perk lozad" data-background-image="assets/img/Customized-Approach.webp">
              <div class="overlay d-flex justify-content-center align-items-center text-white text-center">
                <div class="perk-description p-5">
                  <i class="fa-solid fa-book-bookmark f-39 mb-3"></i>
                  <h3 class="f-20 fw-700 border-bottom">Professional Expertise</h3>
                  <p>Our team of seasoned book writing experts brings a wealth of experience to your project – pretty much guaranteeing high-quality results.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="perk ">
              <div class=" d-flex justify-content-center align-items-center h-100 text-center">
                <div class="perk-description p-5">
                  <i class="fa-solid fa-layer-group f-39 mb-3"></i>
                  <h3 class="f-20 fw-700 border-bottom">Editing & Proofreading</h3>
                  <p> Our meticulous editing and proofreading services make sure that your manuscript is polished and error-free.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="perk lozad" data-background-image="assets/img/Industry-Insights.webp">
              <div class="overlay d-flex justify-content-center align-items-center text-white text-center">
                <div class="perk-description p-5">
                  <i class="fa-solid fa-book-bookmark f-39 mb-3"></i>
                  <h3 class="f-20 fw-700 border-bottom">Industry Insights</h3>
                  <p>A significant part of our book writing services is to provide valuable insights about the publishing industry and give you the ability to make informed decisions about your book.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="perk ">
              <div class=" d-flex justify-content-center align-items-center h-100 text-center">
                <div class="perk-description p-5">
                  <i class="fa-solid fa-book f-39 mb-3"></i>
                  <h3 class="f-20 fw-700 border-bottom">Confidentiality & Ownership</h3>
                  <p>As a leading book writing agency, we respect your privacy and ensure all rights and ownership of the final product remain with you.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5 bg-d text-center text-white">
      <div class="container-xl">
        <div class="row ">
          <div class="col-12">
            <h3 class="f-20 fw-700">We're Trusted by Renowned Businesses</h3>
          </div>
        </div>
        <div class="row row-cols-lg-6 row-cols-md-4 row-cols-3">
          <div class="col">
            <img data-src="assets/img/1.webp" class="trusted lozad" alt="American Book Agency">
            <small>MEMBER FOR 2+ YEARS</small>
          </div>
          <div class="col">
            <img data-src="assets/img/2.webp" class="trusted lozad" alt="American Book Agency">
            <small>EXPERTS & PARTNERS</small>
          </div>
          <div class="col">
            <img data-src="assets/img/3.webp" class="trusted lozad" alt="American Book Agency">
            <small>EXPERTS & PARTNERS</small>
          </div>
          <div class="col">
            <img data-src="assets/img/4.webp" class="trusted lozad" alt="American Book Agency">
            <small>2020 WRITING AWARDS</small>
          </div>
          <div class="col">
            <img data-src="assets/img/5.webp" class="trusted lozad" alt="American Book Agency">
            <small>MEMBER FOR 2+ YEARS</small>
          </div>
          <div class="col">
            <img data-src="assets/img/6.webp" class="trusted lozad" alt="American Book Agency">
            <small>4+ YEAR CERTIFICATION</small>
          </div>
        </div>
      </div>
    </section>
    <section class="geners text-white">
      <div class="item py-5 ">
        <img data-lazy="assets/img/bg-1-min.webp" class="image">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="f-39 fw-700">Book Writing Genres We Specialize In</h2>
            </div>
          </div>
          <div class="row justify-content-center align-items-center ">
            <div class="col-lg-5">
              <img alt="American Book Agency" data-lazy="assets/img/romance.png" class="icon">
              <h3 class="f-24 fw-700"> Self-Help </h3>
              <h4 class="f-20 fw-700">Unlock Your Potential with Our Expertly Crafted Self-Help Books</h4>
              <p>Self-help books are designed to assist readers in improving their personal or professional lives. They offer practical advice and strategies to overcome challenges, achieve goals, or enhance well-being. </p>
              <p>At American Book Agency, we excel in crafting self-help books that resonate with readers. Our experienced book writing experts understand how to present complex ideas in an accessible and engaging manner, making us a trusted choice for self-help book writing.</p>
              <a href="tel:+1-315-636-4603" class="btn"> +1-315-636-4603 </a>
            </div>
            <div class="col-lg-6">
              <ul class="row row-cols-2 list-unstyled">
                <li class="col">
                  <img alt="American Book Agency" data-lazy="assets/img/r-1.webp" class="book">
                </li>
                <li class="col">
                  <img alt="American Book Agency" data-lazy="assets/img/r-2.webp" class="book">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item py-5 ">
        <img data-lazy="assets/img/scifi.webp" class="image">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="f-39 fw-700">Book Writing Genres We Specialize In</h2>
            </div>
          </div>
          <div class="row justify-content-center align-items-center ">
            <div class="col-lg-5">
              <img alt="American Book Agency" data-lazy="assets/img/scifi.png" class="icon">
              <h3 class="f-24 fw-700"> Science Fiction </h3>
              <h4 class="f-20 fw-700">Embark on Extraordinary Journeys with Our Captivating Science Fiction Books</h4>
              <p> Science fiction is a genre that explores imaginative and futuristic concepts such as advanced science, technology, space exploration, time travel, parallel universes, and extraterrestrial life.</p>
              <p>American Book Agency has a dedicated team of creative book writing experts who are well-versed in the science fiction genre. Our book writing agency excels at building intricate, futuristic worlds and crafting compelling narratives that captivate readers and transport them into the realm of the extraordinary. </p>
              <a href="tel:+1-315-636-4603" class="btn"> +1-315-636-4603 </a>
            </div>
            <div class="col-lg-6">
              <ul class="row row-cols-2 list-unstyled">
                <li class="col">
                  <img alt="American Book Agency" data-lazy="assets/img/scifi-1.webp" class="book">
                </li>
                <li class="col">
                  <img alt="American Book Agency" data-lazy="assets/img/scifi-2.webp" class="book">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item py-5 ">
        <img data-lazy="assets/img/hfi.webp" class="image">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="f-39 fw-700">Book Writing Genres We Specialize In</h2>
            </div>
          </div>
          <div class="row justify-content-center align-items-center ">
            <div class="col-lg-5">
              <img alt="American Book Agency" data-lazy="assets/img/hifi.png" class="icon">
              <h3 class="f-24 fw-700"> Historical Fiction </h3>
              <h4 class="f-20 fw-700">Travel Through Time with Our Authentic Historical Fiction Books</h4>
              <p>Historical fiction is a literary genre where the story is set in the past, often during a significant historical event. The narrative tends to include well-researched historical details to recreate the period setting authentically.</p>
              <p>At American Book Agency, we pride ourselves on our meticulous research skills and attention to detail. Our best-seller book writing experts are adept at weaving fact and fiction to create immersive historical narratives that transport readers back in time.</p>
              <a href="tel:+1-315-636-4603" class="btn"> +1-315-636-4603 </a>
            </div>
            <div class="col-lg-6">
              <ul class="row row-cols-2 list-unstyled">
                <li class="col">
                  <img alt="American Book Agency" data-lazy="assets/img/hifi-1.webp" class="book">
                </li>
                <li class="col">
                  <img alt="American Book Agency" data-lazy="assets/img/hifi-2.webp" class="book">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item py-5 ">
        <img data-lazy="assets/img/Mystery.webp" class="image">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="f-39 fw-700">Book Writing Genres We Specialize In</h2>
            </div>
          </div>
          <div class="row justify-content-center align-items-center ">
            <div class="col-lg-5">
              <img alt="American Book Agency" data-lazy="assets/img/Mystery.png" class="icon">
              <h3 class="f-24 fw-700"> Mystery/Thriller </h3>
              <h4 class="f-20 fw-700">Unravel Intriguing Mysteries with Our Gripping Thriller Books</h4>
              <p>Mystery/Thriller is a genre that uses suspense, tension, and excitement as the main elements. These stories involve solving a mystery and often include plot twists and cliffhangers to keep the reader engaged.</p>
              <p>American Book Agency specializes in crafting gripping mystery/thriller narratives. Our book writing experts are skilled at creating suspenseful plots and complex characters that keep readers on the edge of their seats, making us a go-to choice for mystery/thriller book writing.</p>
              <a href="tel:+1-315-636-4603" class="btn"> +1-315-636-4603 </a>
            </div>
            <div class="col-lg-6">
              <ul class="row row-cols-2 list-unstyled">
                <li class="col">
                  <img alt="American Book Agency" data-lazy="assets/img/Mystery-1.webp" class="book">
                </li>
                <li class="col">
                  <img alt="American Book Agency" data-lazy="assets/img/Mystery-2.webp" class="book">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="item py-5 ">
        <img data-lazy="assets/img/fantasy.webp" class="image">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="f-39 fw-700">Book Writing Genres We Specialize In</h2>
            </div>
          </div>
          <div class="row justify-content-center align-items-center ">
            <div class="col-lg-5">
              <img alt="American Book Agency" data-lazy="assets/img/fantasy.png" class="icon">
              <h3 class="f-24 fw-700"> Fantasy </h3>
              <h4 class="f-20 fw-700">Embark on Magical Adventures with Our Enchanting Fantasy Books</h4>
              <p> Fantasy is a genre that uses magic and other supernatural elements as a primary plot element, theme, or setting. The narrative often involves a medieval setting, mythical creatures, and a hero's quest.</p>
              <p>Our imaginative book writing experts excel at creating enchanting fantasy worlds and compelling narratives. As a leading book writing agency, we pride ourselves on bringing your fantastical ideas to life, crafting magical journeys that captivate readers and leave a lasting impression.</p>
              <a href="tel:+1-315-636-4603" class="btn"> +1-315-636-4603 </a>
            </div>
            <div class="col-lg-6">
              <ul class="row row-cols-2 list-unstyled">
                <li class="col">
                  <img alt="American Book Agency" data-lazy="assets/img/fantasy-1.webp" class="book">
                </li>
                <li class="col">
                  <img alt="American Book Agency" data-lazy="assets/img/fantasy-2.webp" class="book">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="industry">
      <div class="item py-5 ">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="f-39 fw-700">Our Book Writing Works for <br> All Kinds of Industries in USA </h2>
              <p>Hire our creative book writing agency and embark on an exciting journey to literary success. <br>Let your voice be heard, and your story be told. </p>
            </div>
          </div>
          <div class="row justify-content-center align-items-center ">
            <div class="col-lg-6">
              <ul class="row list-unstyled">
                <li class="col-2 pe-0">
                  <img alt="American Book Agency" class="w-100" data-lazy="assets/img/next-selling-before.png">
                </li>
                <li class="col-5">
                  <img alt="American Book Agency" data-lazy="assets/img/1-1.webp" class="book">
                </li>
                <li class="col-5 mt-4">
                  <img alt="American Book Agency" data-lazy="assets/img/1-2.webp" class="book">
                </li>
              </ul>
            </div>
            <div class="col-lg-5">
              <img alt="American Book Agency" data-lazy="assets/img/one.png" class="icon">
              <h3 class="f-39 fw-700"> Travel </h3>
              <h4 class="f-20 fw-700"> Explore the World Through Words with Our Travel Category</h4>
              <p> The Travel category encompasses books that take readers on a journey, exploring different cultures, landscapes, and experiences around the world. As a professional book writing company, we excel in crafting engaging travel narratives that transport readers to new places, igniting their wanderlust.</p>
              <a href="tel:+1-315-636-4603" class="btn"> +1-315-636-4603 </a>
            </div>
          </div>
        </div>
      </div>
      <div class="item py-5 ">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="f-39 fw-700">Our Book Writing Works for <br> All Kinds of Industries in USA </h2>
              <p>Hire our creative book writing agency and embark on an exciting journey to literary success. <br>Let your voice be heard, and your story be told. </p>
            </div>
          </div>
          <div class="row justify-content-center align-items-center ">
            <div class="col-lg-6">
              <ul class="row list-unstyled">
                <li class="col-2 pe-0">
                  <img alt="American Book Agency" class="w-100" data-lazy="assets/img/next-selling-before.png">
                </li>
                <li class="col-5">
                  <img alt="American Book Agency" data-lazy="assets/img/2-1.webp" class="book">
                </li>
                <li class="col-5 mt-4">
                  <img alt="American Book Agency" data-lazy="assets/img/2-2.webp" class="book">
                </li>
              </ul>
            </div>
            <div class="col-lg-5">
              <img alt="American Book Agency" data-lazy="assets/img/two.png" class="icon">
              <h3 class="f-39 fw-700"> Real Estate </h3>
              <h4 class="f-20 fw-700">Unlock Property Insights with Our Real Estate Category</h4>
              <p>The Real Estate category includes books that provide insights into the property market, offering advice on buying, selling, investing, and managing properties. At our book writing company, we have expertise in creating informative real estate books that equip readers with valuable industry knowledge.</p>
              <a href="tel:+1-315-636-4603" class="btn"> +1-315-636-4603 </a>
            </div>
          </div>
        </div>
      </div>
      <div class="item py-5 ">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="f-39 fw-700">Our Book Writing Works for <br> All Kinds of Industries in USA </h2>
              <p>Hire our creative book writing agency and embark on an exciting journey to literary success. <br>Let your voice be heard, and your story be told. </p>
            </div>
          </div>
          <div class="row justify-content-center align-items-center ">
            <div class="col-lg-6">
              <ul class="row list-unstyled"><li class="col-2 pe-0"><img alt="American Book Agency" class="w-100" data-lazy="assets/img/next-selling-before.png"></li><li class="col-5"><img alt="American Book Agency" data-lazy="assets/img/3-1.webp" class="book"></li><li class="col-5 mt-4"><img alt="American Book Agency" data-lazy="assets/img/3-2.webp" class="book"></li></ul>
            </div><div class="col-lg-5"><img alt="American Book Agency" data-lazy="assets/img/three.png" class="icon"><h3 class="f-39 fw-700"> Sports/Gaming </h3><h4 class="f-20 fw-700"> Experience Thrills & Skills with Our Sports/Gaming Category</h4><p> The Sports/Gaming category covers books that delve into the exciting worlds of sports and gaming, from player biographies to game guides. At our book writing agency, we create compelling sports and gaming books that capture the passion, strategy, and excitement of these fields.</p><a href="tel:+1-315-636-4603" class="btn"> +1-315-636-4603 </a></div>
          </div>
        </div>
      </div>
      <div class="item py-5 "><div class="container"><div class="row text-center"><div class="col-12"><h2 class="f-39 fw-700">Our Book Writing Works for <br> All Kinds of Industries in USA</h2><p>Hire our creative book writing agency and embark on an exciting journey to literary success.<br>Let your voice be heard, and your story be told.</p></div></div><div class="row justify-content-center align-items-center "><div class="col-lg-6"><ul class="row list-unstyled"><li class="col-2 pe-0"><img alt="American Book Agency" class="w-100" data-lazy="assets/img/next-selling-before.png"></li><li class="col-5"><img alt="American Book Agency" data-lazy="assets/img/4-1.webp" class="book"></li><li class="col-5 mt-4"><img alt="American Book Agency" data-lazy="assets/img/4-2.webp" class="book"></li></ul></div><div class="col-lg-5"><img alt="American Book Agency" data-lazy="assets/img/four.png" class="icon"><h3 class="f-39 fw-700"> Health Care </h3><h4 class="f-20 fw-700">Discover Health Insights with Our Healthcare Category</h4><p> The Healthcare category comprises books that offer guidance on various health-related topics, from disease prevention to wellness strategies. Our book writing experts specialize in writing comprehensive healthcare books that empower readers to take charge of their well-being. </p><a href="tel:+1-315-636-4603" class="btn"> +1-315-636-4603 </a></div></div></div></div><div class="item py-5 "><div class="container"><div class="row text-center"><div class="col-12"><h2 class="f-39 fw-700">Our Book Writing Works for <br> All Kinds of Industries in USA</h2><p>Hire our creative book writing agency and embark on an exciting journey to literary success.<br>Let your voice be heard, and your story be told.</p></div></div><div class="row justify-content-center align-items-center "><div class="col-lg-6"><ul class="row list-unstyled"><li class="col-2 pe-0"><img alt="American Book Agency" class="w-100" data-lazy="assets/img/next-selling-before.png"></li><li class="col-5"><img alt="American Book Agency" data-lazy="assets/img/5-1.webp" class="book"></li><li class="col-5 mt-4"><img alt="American Book Agency" data-lazy="assets/img/5-2.webp" class="book"></li></ul></div><div class="col-lg-5"><img alt="American Book Agency" data-lazy="assets/img/five.png" class="icon"><h3 class="f-39 fw-700"> General Business </h3><h4 class="f-20 fw-700">Master the Business World with Our General Business Books</h4><p>The General Business category includes books that provide insights into the world of business, covering topics like entrepreneurship, management, and finance. At American Book Agency, our book writing experts produce insightful business books that equip readers with the knowledge to succeed in the business world.</p><a href="tel:+1-315-636-4603" class="btn"> +1-315-636-4603 </a></div></div></div></div>
    </section>


    <section class="py-5 lozad" data-background-image="assets/img/testi-bg.webp">
      <div class="container py-5">
          <div class="row justify-content-center">
              <div class="col-12 text-center">
                  <h2 class="f-39 fw-700"> Hesitant to hire us?<br> Check Out What Our Customers Are Saying!</h2></div>
              <div class="col-lg-7">
                  <div class="review">
                      <div class="item bg-light p-3">
                          <div class="row justify-content-center text-center text-lg-start">
                              <div class="col-lg-4 col-6"><img alt="American Book Agency" class="review-image" data-lazy="assets/img/testi-img1.webp"></div>
                              <div class="col-lg-8">
                                  <p class="f-20 fw-700 clr-1"><i> Magnificent Work!!</i></p>
                                  <p> American Book Agency created a gem using my book idea! The book writing experts on their team did a fantastic job of capturing the heart of my story. I’m happy with the completed work, and the editing and publication processes
                                      went smoothly. I appreciate you making my wish come true.</p>
                                  <ul class="list-unstyled d-flex mb-0">
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                  </ul>
                                  <p class="fw-700"> Sarah T </p>
                              </div>
                          </div>
                      </div>
                      <div class="item bg-light p-3">
                          <div class="row justify-content-center text-center text-lg-start">
                              <div class="col-lg-4 col-6"><img alt="American Book Agency" class="review-image" data-lazy="assets/img/testi-img2.webp"></div>
                              <div class="col-lg-8">
                                  <p class="f-20 fw-700 clr-1"><i> Flawless Editing Services </i></p>
                                  <p> I had a great experience working with American Book Agency. The professionalism and creativity of their talented ghostwriters improved my project. This book writing company understood my idea and produced a finished product
                                      that was amazing beyond my expectations. I heartily endorse American Book Agency as the #1 most affordable book writing company in USA.</p>
                                  <ul class="list-unstyled d-flex mb-0">
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                  </ul>
                                  <p class="fw-700"> John M </p>
                              </div>
                          </div>
                      </div>
                      <div class="item bg-light p-3">
                          <div class="row justify-content-center text-center text-lg-start">
                              <div class="col-lg-4 col-6"><img alt="American Book Agency" class="review-image" data-lazy="assets/img/testi-img3.webp"></div>
                              <div class="col-lg-8">
                                  <p class="f-20 fw-700 clr-1"><i> The best book Publishing </i></p>
                                  <p>I was looking for a professional yet affordable book writing company when a buddy suggested that I speak with American Book Agency. Their knowledgeable book writing experts assisted me in realizing my goal of becoming
                                      an author. It is admirable how committed they are to excellence and attention to detail. I want to thank them and say how pleased I am with the final version.</p>
                                  <ul class="list-unstyled d-flex mb-0">
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                  </ul>
                                  <p class="fw-700">Emily S </p>
                              </div>
                          </div>
                      </div>
                      <div class="item bg-light p-3">
                          <div class="row justify-content-center text-center text-lg-start">
                              <div class="col-lg-4 col-6"><img alt="American Book Agency" class="review-image" data-lazy="assets/img/testi-img4.webp"></div>
                              <div class="col-lg-8">
                                  <p class="f-20 fw-700 clr-1"><i> Great and on time work </i></p>
                                  <p>Working with American Book Agency transformed the course of my life. Every word they penned reflects the commitment and love for storytelling that their team put into it. It was an interactive and optimistic process. I
                                      am excited that my book has been published.</p>
                                  <ul class="list-unstyled d-flex mb-0">
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                      <li class="me-2 clr-1"><i class="fa-solid fa-star"></i></li>
                                  </ul>
                                  <p class="fw-700"> Tina K </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  
  
  
  
  
  

  
  
  
  
  
  
  <?php 
 include 'include/footer.php';
?>