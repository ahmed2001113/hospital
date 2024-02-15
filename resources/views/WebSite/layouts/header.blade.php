<div class="nav-outer clearfix">
    <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
    <nav class="main-menu navbar-expand-md navbar-light">
        <div class="navbar-header">
            <!-- Togg le Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon flaticon-menu"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">
                @if (App::getLocale() == 'ar')
                <li class="current dropdown"><a href="#">الرئيسية</a>
                </li>
                <li class="dropdown"><a href="#">من نحن</a>
                 </li>
                <li class="dropdown"><a href="#">الاطباء</a>
                </li>
                <li class="dropdown"><a href="#">الاقسام</a>
                </li>
                <li class="dropdown"><a href="#">المقالات</a>
                </li>
@else
<li class="current dropdown"><a href="#">Home</a>
</li>
<li class="dropdown"><a href="#">About</a>
 </li>
<li class="dropdown"><a href="#">Doctors</a>
</li>
<li class="dropdown"><a href="#">Sections</a>
</li>
<li class="dropdown"><a href="#">Articles</a>
</li>
@endif
                <li class="dropdown"><a href="#">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
    <!-- Main Menu End-->

    <!-- Main Menu End-->
    <div class="outer-box clearfix">
        <!-- Main Menu End-->
    

        <!-- Social Box -->
        <ul class="social-box clearfix">
            <li><a title="{{ LaravelLocalization::getCurrentLocale() ==='ar' ? 'تسجيل الدخول': 'login'}}" href="{{route('dashboard.user')}}"><span class="fas fa-user"></span></a>
            </li>


        </ul>

    </div>
</div>