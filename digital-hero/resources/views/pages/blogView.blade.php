<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DGital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="{{ URL::asset('img/أبطال الديجيتال.png')}}" rel="icon">
    <link href="{{ URL::asset('img/أبطال الديجيتال.png')}}" rel="apple-touch-icon">

    <!-- Libraries Stylesheet -->
    <link href="{{ URL::asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/blog.css') }}">
    
</head>

<body dir="rtl">
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="#" class="navbar-brand p-0">
                    <img src="{{ URL::asset('img/أبطال الديجيتال.png')}}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">الرئيسية</a>
                        <a href="#المقالات" class="nav-item nav-link">المقالات</a>
                        <a href="" class="nav-item nav-link">مشروع المؤسسة</a>
                        <a href="contact.html" class="nav-item nav-link">تواصل معنا</a>
                    </div>
                    <a href="login.html" class="btn rounded-3 py-1 px-3 ms-2 d-none d-lg-block">دخول</a>
                    <a href="register.html" class="btn rounded-3 py-1 px-3 ms-3 d-none d-lg-block" style="background-color: #FBA504;">التسجيل</a>
                </div>
            </nav>
    <!-- End Hero -->
    <section id="hero">
                <div class="container px-lg-5">
                    <div class="row align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white text-center mb-4 animated slideInDown">نادي أبطال الديجيتال <br><p class="text-secondary" style="font-size: 30px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> علال الفاسي</p></h1>
                            <p class="text-white pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                            <div class="d-grid gap-2 col-4 mx-auto">
                            <a href="register2.html" class="btn btn-secondary py-sm-1 px-sm-5 rounded-3 animated slideInLeft">نخارط معانا</a>
                        </div>
                        </div>
                        <div class="col-lg-6 my-4 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/أبطال الديجيتال.png" alt="">
                        </div>
                    </div>
                </div>
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
        </svg>
    </div>
        </section>
    <!-- Navbar & Hero End -->

    <!-- ////////////////////////////////////////////////// -->

        <div class="d-flex justify-content-center" id="المقالات">
            <div class="">
            <div class="card">
                <h2>عنوان المقالة</h2>
                <h5>26 مارس 2022 , يونس</h5>
                <div class="fakeimg" style="height: 200px"><img src=""> </div>
                <p>
                    الرياضة ترويض للنفس قبل أن تكون حصداً للألقاب والكؤوس وفرداً للعضلات، وما جدوى أن يكون البطل بلا أخلاق، تتدلى على صدره أوسمه عارية من كل معاني الأخلاق الفاضلة 
                </p>
                <div class="icons">
                <button  onclick="myFun()" style=" background: white; border-style: none; width: 50px; height: 50px;"><ion-icon style="color: rgb(124, 24, 190); font-size:28px; margin-bottom: 20px;" name="chatbubble"></ion-icon></button>
                <i class="fa fa-heart" style="font-size:28px;"></i>
                </div>          
            <!-- partial:index.partial.html -->
                <div class="col-6">
                    <textarea id="area1" type="text" class="input" placeholder="خلي كومونتير  ..." v-model="newItem" @keyup.enter="addItem()"></textarea>
                </div><!-- End col -->
            </div>
            </div>
        </div>
    <!-- ////////////////////////////////////////////////// -->


    <!-- Footer Start -->
        
    <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s" dir="rtl">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-4 col-lg-3">
                <p class="section-title text-white h5 mb-4"><strong>العنوان</strong><span></span></p>
                <p><i class="fa fa-map-marker-alt me-3"></i> الثانوية الإعدادية علال الفاسي</p>
                <p><i class="fa fa-phone-alt me-3"></i > 09876 543 212+</p>
                <p><i class="fa fa-envelope me-3"></i> info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                <a class="btn btn-link text-end" href="index.html"> شكون حنا</a>
                <a class="btn btn-link text-end" href="contact.html"> تواصل معنا</a>
                <a class="btn btn-link text-end" href="">سياسة الخصوصية</a>
                <a class="btn btn-link text-end" href="">الشروط والأحكام</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4"><strong>نادي أبطال الديجيتال</strong><span></span></p>
                <p>الهدف هو اننا نحاولو نكتشفو المواهب المعلوماتية و نطوروها بشكل أفضل كما اننا غادي نحرصو على اندماجكم باش ينجح هاد الكلوب</p>
                
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="row g-3 my-5">
                        <img class="img-fluid" src="{{ URL::asset('img/أبطال الديجيتال.png')}}" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <div class="container px-lg-2">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="index.html">Degital</a>, جميع الحقوق محفوظة. 
                    
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <!-- Designed By <a class="border-bottom" href="">OUALI Rida</a><br><br> -->
                </div>
                <div class="col-md-6 text-center text-md-end" dir="ltr">
                    <div class="footer-menu">
                        <a href="">الرئيسية</a>
                        <a href="">Cookies</a>
                        <a href="">مساعدة</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ URL::asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ URL::asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ URL::asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ URL::asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ URL::asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
</body>

</html>