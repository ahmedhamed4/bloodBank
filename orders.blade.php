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
                    </a>
                </div>
                <div class="col-md-9 nav-col" style="padding-right: 5.2rem;">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
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


                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('list-order') }}">طلباتي</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout-patient') }}">تسجيل خروج</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">سجل كمتبرع</a>
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



<!--*************** About Us Starts Here ***************-->
<section id="about" class="contianer-fluid about-us h-75" dir="rtl">
    <div class="container">
        <div class="row session-title">
            <h2 class="right">طلباتي</h2>
        </div>
        <div class="row">

            <table class="table table-striped table-bordered text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">رقم الطلب</th>
                    <th scope="col">الفصيلة</th>
                    <th scope="col">الفرع</th>
                    <th scope="col">الحالة</th>
                </tr>
                </thead>
                <tbody>
                @forelse($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->blood_type->name }}</td>
                        <td>{{ $order->branch->name }}</td>
                        <td>
                            @if($order->status == 'accepted')
                                <span class="badge badge-success">مقبول</span>
                            @elseif($order->status == 'cancelled')
                                <span class="badge badge-danger">ملغي</span>
                            @else
                                <span class="badge badge-secondary">قيد الانتظار</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">لا يوجد طلبات</td>
                    </tr>
                @endforelse

                </tbody>
            </table>

            <div class="center align-content-center text-center justify-content-center" style="margin-right: 50%">
                {{ $orders->render() }}
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
