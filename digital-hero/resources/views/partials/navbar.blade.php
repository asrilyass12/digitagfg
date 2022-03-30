<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="#" class="navbar-brand p-0">
            <img src="img/أبطال الديجيتال.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="" class="nav-item nav-link active">الرئيسية</a>
                <a href="{{route('blogs')}}" class="nav-item nav-link">المقالات</a>
                <div class="nav-item dropdown text-end" dir="ltr">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">شكون حنا</a>
                    <div class="dropdown-menu m-0 text-end">
                        <a href="#الأهداف" class="dropdown-item">الأهداف</a>
                        <a href="#الأنشطة" class="dropdown-item">الأنشطة</a>
                        <a href="#الأعضاء" class="dropdown-item">الأعضاء</a>
                        <a href="#المنخرطين" class="dropdown-item">المنخرطين</a>
                    </div>
                </div>
                <a href="" class="nav-item nav-link">مشروع المؤسسة</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">تواصل معنا</a>
            </div>
            <a href="login.html" class="btn rounded-3 py-1 px-3 ms-2 d-none d-lg-block">دخول</a>
            <a href="register.html" class="btn rounded-3 py-1 px-3 ms-3 d-none d-lg-block" style="background-color: #FBA504;">التسجيل</a>
        </div>
    </nav>
<!-- End Hero -->