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
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/style.css') }}" />

    <style>
        .column {
            float: left;
            width: 50%;
            padding: 0 5px;
        }
    </style>
</head>

<body>
    <header class="continer-fluid" dir="rtl">
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-md-3 logo center align-middle">
                        <a href="/">
                            <img src="{{ asset('logo/1.png') }}" alt="" style="width: 80px">
                        </a>bdg
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">الرئيسية
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">من نحن</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery">معرض الصور</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#process">خطوات التبرع</a>
                                    </li>

                                    @auth
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('list-order') }}">طلباتي</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout-patient') }}">تسجيل خروج</a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">اشترك كمتبرع</a>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('show-login-form') }}">تسجيل دخول/عضوية</a>
                                        </li>
                                    @endauth

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @include('admin.layouts.message')
    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('site/assets/images/slider/slide-02.jpg') }}"
                        alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bounceInDown">تبرع بالدم</h5>
                        <p class=" bounceInLeft"> موقع التبرع بالدم هو منصة رقمية تربط بين المتبرعين ومراكز التبرع
                            والمستشفيات بطريقة سهلة وموثوقة.</p>

                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('site/assets/images/slider/slide-03.jpg') }}"
                        alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class=" bounceInDown">انقذ حياة</h5>
                        <p class=" bounceInLeft">يوفر الموقع واجهة مستخدم بسيطة تتيح للمستخدمين تسجيل معلوماتهم وتحديد
                            تفضيلاتهم للتبرع بالدم. </p>

                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

    <!--*************** About Us Starts Here ***************-->
    <section id="about" class="contianer-fluid about-us" dir="rtl">
        <div class="container">
            <div class="row session-title">
                <h2 class="right">من نحن</h2>
            </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h5 class="mt-3">
                        موقع التبرع بالدم هو منصة إلكترونية تهدف إلى تسهيل وتنظيم عملية التبرع بالدم. يوفر الموقع
                        معلومات
                        حول مراكز التبرع المحلية، والمواعيد المتاحة للتبرع، بالإضافة إلى إمكانية تسجيل المتبرعين وتنظيم
                        مواعيدهم بشكل مريح. كما يوفر الإرشادات الضرورية للمتبرعين والمعلومات حول فوائد التبرع بالدم.
                        يعتبر
                        هذا الموقع وسيلة فعالة لتعزيز ثقافة التبرع بالدم وتشجيع المجتمع على المساهمة في إنقاذ حياة
                        الآخرين.
                    </h5>
                    <h5 class="mt-3">
                        موقع التبرع بالدم هو منصة رقمية تربط بين المتبرعين ومراكز التبرع والمستشفيات بطريقة سهلة
                        وموثوقة.
                        يوفر الموقع واجهة مستخدم بسيطة تتيح للمستخدمين تسجيل معلوماتهم وتحديد تفضيلاتهم للتبرع بالدم.
                        كما
                        يوفر الموقع معلومات حول فصائل الدم المطلوبة والحالات الطارئة التي تحتاج إلى تبرع فوري. بفضل هذه
                        الخدمة، يمكن للمتبرعين العثور بسهولة على فرص التبرع المتاحة في منطقتهم والمساهمة في إنقاذ حياة
                        الآخرين بشكل مباشر وفعّال.
                    </h5>
                    <h5 class="mt-3">

                        موقع التبرع بالدم يُعتبر منصة إلكترونية تربط بين المتبرعين والمستشفيات، حيث يمكن للمتبرعين تسجيل
                        معلوماتهم وتحديد تفضيلاتهم للتبرع بالدم بكل سهولة. يُمكن الوصول إلى مواعيد التبرع المتاحة
                        والمعلومات
                        الضرورية بشكل فوري، مما يعزز من فرص إنقاذ الحياة وتلبية الاحتياجات الطبية بشكل أكثر كفاءة
                        وفاعلية.

                    </h5>

                </div>
                <div class="col-md-6 image">
                    <img src="{{ asset('site/assets/images/about.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- ################# Gallery Start Here #######################--->

    <div id="gallery" class="gallery container-fluid">
        <div class="container">
            <div class="row session-title">
                <h2>معرض الصور</h2>
            </div>
            <div class="gallery-row row">
                <div id="gg-screen"></div>
                <div class="gg-box" style="grid-auto-rows:unset">
                    <div class="gg-element">
                        <img src="{{ asset('site/assets/images/gallery/g1.jpg') }}">
                    </div>
                    <div class="gg-element">
                        <img src="{{ asset('site/assets/images/gallery/g2.jpg') }}">
                    </div>
                    <div class="gg-element">
                        <img src="{{ asset('site/assets/images/gallery/g3.jpg') }}">
                    </div>
                    <div class="gg-element">
                        <img src="{{ asset('site/assets/images/gallery/g4.jpg') }}">
                    </div>
                    <div class="gg-element">
                        <img src="{{ asset('site/assets/images/gallery/g5.jpg') }}">
                    </div>
                    <div class="gg-element">
                        <img src="{{ asset('site/assets/images/gallery/g6.jpg') }}">
                    </div>
                    <div class="gg-element">
                        <img src="{{ asset('site/assets/images/gallery/g7.jpg') }}">
                    </div>
                    <div class="gg-element">
                        <img src="{{ asset('site/assets/images/gallery/g8.jpg') }}">
                    </div>
                    <div class="gg-element">
                        <img src="{{ asset('site/assets/images/gallery/g9.jpg') }}">
                    </div>
                    <div class="gg-element">
                        <img src="{{ asset('site/assets/images/gallery/g10.jpg') }}">
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- ################# Donation Process Start Here #######################--->

    <section id="process" class="donation-care" dir="rtl">
        <div class="container">
            <div class="row session-title">
                <h2>خطوات التبرع</h2>
                <p class="text-center text-bold">تتم عملية التبرع من وقت وصولك إلى المركز حتى وقت مغادرتك</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="{{ asset('site/assets/images/gallery/g1.jpg') }}" alt="">
                        <h4 class="right"><b>1 - </b>التسجيل</h4>
                        <p>قم بتسجيل بياناتك بكل سهولة وسرية تامة</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="{{ asset('site/assets/images/gallery/g2.jpg') }}" alt="">
                        <h4 class="right"><b>2 - </b>الزيارة</h4>
                        <p>القدوم لزيارتنا للتبرع بالدم</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="{{ asset('site/assets/images/gallery/g3.jpg') }}" alt="">
                        <h4 class="right"><b>3 - </b>التبرع</h4>
                        <p>نقوم بسحب الدم مع الحفاظ على صحتك</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="{{ asset('site/assets/images/gallery/g4.jpg') }}" alt=""> 
                        <h4 class="right"><b>4 - </b>انقذ حياة</h4>
                        <p>تبرعك يساعد في انقاذ حياة شخص ما</p>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <!--*************** Footer  Starts Here *************** -->
    <footer id="contact" class="container-fluid">
        <div class="container">

            <div class="row content-ro">
                <div class="col-lg-6 col-md-12 footer-contact">
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

                <div class="col-lg-6 col-md-12 footer-form" dir="rtl">
                    @auth
                        <div class="form-card">
                            <div class="form-title">
                                <h4>طلب فصيلة</h4>
                            </div>
                            <div class="form-body">
                                <form action="{{ route('store-order') }}" method="post">
                                    @csrf

                                    <select name="blood_type_id" required class="form-control">
                                        <option disabled selected>اختر فصيلة الدم</option>
                                        @foreach ($blood_types as $blood_type)
                                            <option value="{{ $blood_type->id }}">{{ $blood_type->name }}</option>
                                        @endforeach
                                    </select>

                                    <select name="branch_id" required class="form-control">
                                        <option disabled selected>اختر الفرع</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                        @endforeach
                                    </select>

                                    <button type="submit" class="btn btn-sm btn-primary w-100">اطلب الان</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="form-card">
                            <div class="form-title">
                                <h4>اشترك كمتبرع</h4>
                            </div>
                            <div class="form-body">
                                <form action="{{ route('store-donor') }}" method="post">
                                    @csrf
                                    <div class="column">
                                        <select name="blood_type" required class="form-control">
                                            <option disabled selected>اختر فصيلة الدم</option>
                                            @foreach ($blood_types as $blood_type)
                                                <option value="{{ $blood_type->name }}">{{ $blood_type->name }}</option>
                                            @endforeach
                                        </select>
                                        <input type="date" name="last_donation" max="{{ today() }}"
                                            required placeholder="اخر تاريخ تبرع" class="form-control">
                                    </div>
                                    <div class="column">
                                        <input type="text" name="name" required placeholder="الاسم"
                                            class="form-control">
                                        <input type="text" name="phone" required placeholder="رقم الموبايل"
                                            class="form-control">
                                    </div>
                                    <div class="column">
                                        <input type="number" name="age" required placeholder="العمر"
                                            class="form-control">
                                        <select name="money_donation" required class="form-control">
                                            <option selected disabled>التبرع بالمال</option>
                                            <option value="1">نعم</option>
                                            <option value="0">لا</option>
                                        </select>
                                    </div>
                                    <div class="column">
                                        <select name="gender" required class="form-control">
                                            <option selected disabled> الجنس</option>
                                            <option value="ذكر">ذكر</option>
                                            <option value="انثى">انثى</option>
                                        </select>
                                        <input type="text" name="address" required placeholder="العنوان"
                                            class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary w-100">سجل الان</button>
                                </form>
                            </div>
                        </div>
                    @endauth
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
