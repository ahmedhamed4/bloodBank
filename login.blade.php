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

    <style>
        .column {
            float: left;
            width: 50%;
            padding: 0 5px;
        }

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
            padding:  40px 0;
        }

        form {
            margin-top: 20px;
        }

        .mt-3 {
            margin-top: 1rem;
        }

    </style>
</head>

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
                                    <a class="nav-link" href="/">الرئيسية
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


{{--content--}}

    <!-- صفحة تسجيل الدخول للمرضي -->

    <main class="login-form" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-right">تسجيل الدخول للمرضى</div>
                        <div class="card-body">
                            <form action="{{ route('login-patient') }}" method="POST" style="direction: rtl;">
                                @csrf
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">البريد
                                        الالكتروني</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required
                                               autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">رقم
                                        المرور</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> تذكرني
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                                    </div>
                                </div>
                            </form>
                            <div class="col-md-6 offset-md-4 mt-3">
                                <p>ليس لديك حساب؟ <a href="{{ route('show-register-form') }}">سجل الآن</a></p>
                            </div>
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




