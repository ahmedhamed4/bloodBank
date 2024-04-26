<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>بنك الدم</title>
    <link rel="shortcut icon" href="{{ asset('site/assets/images/fav.jpg') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('site/assets/images/fav.jpg') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/fontawsom-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/plugins/grid-gallery/css/grid-gallery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/style.css') }}"/>
</head>


<style>
    body {
        background-color: #f8f9fa;
    }
    .card-header {
        background-color: #DE1F26;
        color: #fff;
        text-align: right;
    }

    .form-group {
        text-align: right;
    }

    .checkbox {
        text-align: right;
    }

    .btn-primary {
        background-color: #DE1F26;
        border-color: #DE1F26;
    }

    .btn-primary:hover {
        background-color: #DE1F26;
        border-color: #DE1F26;
    }

    /* Additional Styles */
    main {
        padding: 20px;
    }

    form {
        margin-top: 20px;
    }

    .mt-3 {
        margin-top: 1rem;
    }
</style>

<body>
<header class="continer-fluid" dir="rtl">
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-md-3 logo">
                    <a href="/">
                        <img src="{{ asset('logo/1.png') }}" alt="" style="width: 80px">
                    </a>
                </div>
                <div class="col-md-9 nav-col" style="padding-right: 5.3rem;">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/#">الرئيسية
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/#about">من نحن</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/#gallery">معرض الصور</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/#process">خطوات التبرع</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/#contact">سجل كمتبرع</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('show-login-form') }}">تسجيل دخول/عضوية</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

@include('admin.layouts.message')

<!-- صفحة تسجيل الدخول للمرضي -->
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-right">تسجيل عضوية للمرضى</div>
                        <div class="card-body">
                            <form action="{{ route('store-patient') }}" method="post" style="direction: rtl" enctype="multipart/form-data">
                                @csrf
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">الاسم:</label>
                                    <input type="text" required name="name" value="{{ old('name') }}" class="form-control" />
                                </div>
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">البريد الإلكتروني:</label>
                                    <input type="email" required name="email" value="{{ old('email') }}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="password">كلمة المرور:</label>
                                    <input type="password" required name="password" class="form-control" />
                                </div>
                                <!-- Phone Number -->
                                <div class="form-group">
                                    <label for="phone">رقم الهاتف:</label>
                                    <input type="text" required name="phone" value="{{ old('phone') }}" class="form-control" />
                                </div>
                                <input type="hidden" name="role" value="user">
                                <button type="submit" class="btn btn-primary float-right">إرسال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



<!--*************** Footer  Starts Here *************** -->
<footer id="contact" class="container-fluid" style="background: #BD362F">
    <div class="container">

        <div class="row content-ro">
            <div class="col-lg-12 col-md-12 footer-contact">
                <h2></h2>
                <div class="address-row">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="detail">
                        <p>معهد الدلتا العالي لنظم المعلومات الإدارية والمحاسبية بالمنصورة</p>
                    </div>
                </div>
                <div class="address-row">
                    <div class="icon">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="detail">
                        <p>sales@BankBlood.com <br> support@BankBlood.com</p>
                    </div>
                </div>
                <div class="address-row">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="detail">
                        <p>01012345678 <br> 01112345678</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <p>Copyright © <a href="#">معهد الدلتا العالي</a> كل الحقوق محفوظة</p>
                </div>
                <div class="col-lg-4 col-md-6 socila-link">
                    <ul>
                        <li><a><i class="fab fa-youtube"></i></a></li>
                        <li><a><i class="fab fa-twitter"></i></a></li>
                        <li><a><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


</body>

<script src="{{ asset('site/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('site/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('site/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('site/assets/plugins/grid-gallery/js/grid-gallery.min.js') }}"></script>
<script src="{{ asset('site/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('site/assets/js/script.js') }}"></script>
</html>



