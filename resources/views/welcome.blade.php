@extends('WebSite.layouts.master')

@section('content')
    <!-- Main Slider Three -->
    <section class="main-slider-three">
        <div class="banner-carousel">
            <!-- Swiper -->
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>{{trans('website.welcome')}}</h2>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{URL::asset('WebSite/images/main-slider/3.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!-- Health Section -->
    <section class="health-section">
        <div class="auto-container">
            <div class="inner-container">

                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="border-line"></div>
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <h2>{{trans('website.1')}}</h2>
                                <div class="separator"></div>
                            </div>
                            <div class="text"><h4>
                                {{trans('website.2')}}
                            </h4></div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- End Health Section -->

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon fas fa-user-md"></div>
                            <h3><a href="#">{{trans('website.3')}}</a></h3>
                        </div>
                        <div class="text">{{trans('website.4')}}</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon fas fa-briefcase-medical"></div>
                            <h3><a href="#">{{trans('website.3')}}</a></h3>
                        </div>
                        <div class="text">{{trans('website.4')}}</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Featured Section -->

    <!-- Department Section Three -->
    <section class="department-section-three">
        <div class="image-layer" style="background-image:url(images/background/6.jpg)"></div>
        <div class="auto-container">
            <!-- Department Tabs-->
            <div class="department-tabs tabs-box">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <h2>{{trans('website.6')}}</h2>
                            <div class="separator"></div>
                        </div>
                        <!--Tab Btns-->
                        @if (App::getLocale() == 'ar')
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-urology" class="tab-btn active-btn">قسم الجراحة </li>
                            <li data-tab="#tab-department" class="tab-btn">قسم المخ والأعصاب</li>
                            <li data-tab="#tab-cardiology" class="tab-btn">قسم الاطفال</li>
                            <li data-tab="#tab-gastrology" class="tab-btn">قسم النساء و التوليد</li>
                            <li data-tab="#tab-eye" class="tab-btn">قسم العناية بالعيون</li>
                            <li data-tab="#tab-Internal" class="tab-btn">قسم الباطنة</li>
                        </ul>
                        @else
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-urology" class="tab-btn active-btn">Department of Surgery </li>
                            <li data-tab="#tab-department" class="tab-btn">Department of Neurology</li>
                            <li data-tab="#tab-cardiology" class="tab-btn">Department of Children</li>
                            <li data-tab="#tab-gastrology" class="tab-btn">Department of Obstetrics & Gynaecology</li>
                            <li data-tab="#tab-eye" class="tab-btn">Department of Ophthalmic</li>
                            <li data-tab="#tab-Internal" class="tab-btn">Department of Internal</li>
                        </ul>
                        @endif
                    </div>
                    <!--Column-->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!-- Tab -->
                            <div class="tab active-tab" id="tab-urology">
                                <div class="content">
                                    <h2>Department of Surgery</h2>
                                    <div class="title">Department of Surgery</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Department of Surgery</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Department of Surgery</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab " id="tab-department">
                                <div class="content">
                                    <h2>Neurology Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>
                            <!-- Tab -->
                            <div class="tab " id="tab-cardiology">
                                <div class="content">
                                    <h2>Children Department</h2>
                                    <div class="title">Department of Children</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Children Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Children Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>
                            <!-- Tab -->
                            <div class="tab" id="tab-gastrology">
                                <div class="content">
                                    <h2>Gastrology Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Gastrology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Gastrology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-eye">
                                <div class="content">
                                    <h2>Ophthalmic Department</h2>
                                    <div class="title">Department of Ophthalmic</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Ophthalmic Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Ophthalmic Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>
                            <!-- Tab -->
                            <div class="tab" id="tab-Internal">
                                <div class="content">
                                    <h2>Internal Department</h2>
                                    <div class="title">Department of Internal</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Internal Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Internal Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Department Section -->

    <section class="video-section" style="background-image:url(images/background/5.jpg)">
        <div class="auto-container">
            <div class="content">
                <div class="text">{{trans('website.8')}}<h2>{{trans('website.7')}}</h2>
                </div>
            </div>
    </section>
    <!-- End Video Section -->

    <!-- Appointment Section Two -->
    <section class="appointment-section-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/doctor-2.png" alt=""/>
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <h2>{{trans('website.9')}}</h2>
                                <div class="separator"></div>
                            </div>

                            <!-- Appointment Form -->
                            <div class="appointment-form">
                                <livewire:appointments.create/>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Two -->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{trans('website.10')}}</h2>
                <div class="separator"></div>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-4.jpg" alt=""/>
                        </div>
                        <div class="text">
                            يعد المركز الطبي مكانًا رائعًا للحصول على جميع احتياجاتك الطبية. دخلت
                            لإجراء فحص ولم تنتظر أكثر من 5 دقائق قبل رؤيتي. يمكنني أن أتصور
                            نوع الخدمة التي تحصل عليها في حالة المشكلات الأكثر خطورة. شكرًا!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">

                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>ماكس وينشستر</h3>
                                        <div class="author">مريض الكلى</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-5.jpg" alt=""/>
                        </div>
                        <div class="text">
                            يعد المركز الطبي مكانًا رائعًا للحصول على جميع احتياجاتك الطبية. دخلت
                            لإجراء فحص ولم تنتظر أكثر من 5 دقائق قبل رؤيتي. يمكنني أن أتصور
                            نوع الخدمة التي تحصل عليها في حالة المشكلات الأكثر خطورة. شكرًا!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">

                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>جاك مونيتا</h3>
                                        <div class="author">مريض الكلى</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-4.jpg" alt=""/>
                        </div>
                        <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                            for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                            the type of service you get for more serious issues. Thanks!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">

                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>Max Winchester</h3>
                                        <div class="author">Kidny Patient</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-5.jpg" alt=""/>
                        </div>
                        <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                            for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                            the type of service you get for more serious issues. Thanks!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">

                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>Jack Monita</h3>
                                        <div class="author">Kidny Patient</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Section Two -->

    <!-- Counter Section -->
    <section class="counter-section style-two" style="background-image: url(images/background/pattern-3.png)">
        <div class="auto-container">

            <!-- Fact Counter -->
            <div class="fact-counter style-two">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="2350">0</span>
                                </div>
                                <h4 class="counter-title">{{trans('website.11')}}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box alternate">
                                    +<span class="count-text" data-speed="3000" data-stop="350">0</span>
                                </div>
                                <h4 class="counter-title">{{trans('website.12')}}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="2150">0</span>
                                </div>
                                <h4 class="counter-title">{{trans('website.13')}}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    +<span class="count-text" data-speed="2500" data-stop="225">0</span>
                                </div>
                                <h4 class="counter-title">{{trans('website.14')}}</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Doctor Info Section -->
    <section class="doctor-info-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>ساعات العمل</h3>
                            <ul class="doctor-time-list">
                                <li>من الإثنين إلى الجمعة<span>8:00am–7:00pm</span></li>
                                <li>السبت <span>9:00am–5:00pm</span></li>
                                <li>الأحد<span>9:00am–3:00pm</span></li>
                            </ul>
                            <h4>حالات الطوارئ</h4>
           
                        </div>
                    </div>

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>جدول الأطباء</h3>
                            <div class="text">
                                ما يلي هو للإرشاد فقط لمساعدتك في التخطيط لموعدك
                                طبيب أو ممرضة مفضلة. لا تضمن توافر الأطباء أو الممرضات
                                قد يكون في بعض الأحيان يحضر إلى واجبات أخرى
                            </div>
                            <a href="#" class="detail">تفاصيل اكثر</a>
                        </div>
                    </div>

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>العناية الصحية الاولية</h3>
                            <div class="text">عندما تعلم أنك تستخدم أفضل مواهبك من أجل شيء تحبه ، فأنت
                                لا تستطيع ذلك. التواصل الفعال هو الأساس لبناء علامات تجارية صلبة مثل
                                علاقة السفن بالبناء مع عملائنا
                            </div>
                            <a href="#" class="detail">اتصل الآن</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Info Section -->

@endsection