@php

    App::setLocale(session()->get('locale', 'ar'));
    $lang = App::getLocale();
@endphp

<!DOCTYPE html>
<html lang="{{ $lang == 'ar' ? 'ar' : 'en' }}" dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جمعية السياحة العلاجية - المؤتمر السنوي للسياحة العلاجية</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>




<body style="direction: {{ $lang == 'ar' ? 'rtl' : 'ltr' }} !important">
    {{-- {{ dd(App::getLocale()) }} --}}
    <!-- Navigation -->
    <nav class="navbar" style="direction: {{ $lang == 'ar' ? 'rtl' : 'ltr' }} !important">
        <div class="nav-container">
            <div class="logo-section">
                <div class="logo">
                    <img src="assets/logo.png" style="width: 150px; height: 70px; border-radius: 10px;" alt="">
                </div>
            </div>
            <!-- <button class="nav-toggle" aria-label="Toggle navigation menu">
                <i class="fas fa-bars"></i>
            </button> -->
            <div class="nav-menu">
                <div class="nav-item">
                    <a href="#" onclick="showPage('home')" class="nav-link active">{{ __('home.home') }}</a>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link"> {{ __('home.about') }} <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#" onclick="showPage('about')">{{ __('home.about_association') }}</a>
                        <a href="#" onclick="showPage('taif')">{{ __('home.about_taif') }}</a>
                        <a href="#" onclick="showPage('conference-about')">{{ __('home.about_conference') }}</a>
                        <a href="#" onclick="showPage('committee')">{{ __('home.committee') }}</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link">
                        {{ __('home.conference') }} <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#" onclick="showPage('program')">{{ __('home.program') }}</a>
                        <a href="#" onclick="showPage('program2')">{{ __('home.program2') }}</a>
                        <a href="#" onclick="showPage('speakers')">{{ __('home.speakers') }}</a>
                        <a href="#" onclick="showPage('attendees')">{{ __('home.attendees') }}</a>
                        <a href="#" onclick="showPage('registration')">{{ __('home.registration') }}</a>
                    </div>
                </div>


                {{-- الشركاء والرعاة --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link">
                        {{ __('home.partners') }} <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#" onclick="showPage('sponsors')">{{ __('home.sponsors') }}</a>
                        <a href="#" onclick="showPage('sponsorship')">{{ __('home.sponsorship') }}</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link">{{ __('home.media') }} <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#" onclick="showPage('media')">{{ __('home.media_coverage') }}</a>
                        <a href="#" onclick="showPage('exhibition')">{{ __('home.exhibition') }}</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link">{{ __('home.hospitality') }} <i
                            class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#" onclick="showPage('accommodation')">{{ __('home.accommodation') }}</a>
                        <a href="#" onclick="showPage('visa')">{{ __('home.visa') }}</a>
                        <a href="#" onclick="showPage('flights')">{{ __('home.flights') }}</a>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="#" onclick="showPage('contact')" class="nav-link">{{ __('home.contact') }}</a>
                </div>
            </div>

            <div style="display: flex; gap: 10px;">
                @if (session()->has('locale'))
                    @if (session('locale') == 'ar')
                        <a href="{{ route('lang', ['locale' => 'en']) }}"
                            style="display:inline-block; padding:8px 16px; border-radius:8px;
                      background:rgba(0, 255, 157, 0.5); color:black; font-weight:600;
                      text-decoration:none; transition:all 0.3s ease;
                      backdrop-filter:blur(4px); box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                            EN
                        </a>
                    @else
                        <a href="{{ route('lang', ['locale' => 'ar']) }}"
                            style="display:inline-block; padding:8px 16px; border-radius:8px;
                      background:rgba(0, 255, 157, 0.5); color:black; font-weight:600;
                      text-decoration:none; transition:all 0.3s ease;
                      backdrop-filter:blur(4px); box-shadow:0 4px 12px rgba(0,255,157,0.4);">
                            العربية
                        </a>
                    @endif
                @else
                    <a href="{{ route('lang', ['locale' => 'en']) }}"
                        style="display:inline-block; padding:8px 16px; border-radius:8px;
                  background:rgba(0, 255, 157, 0.5); color:black; font-weight:600;
                  text-decoration:none; transition:all 0.3s ease;
                  backdrop-filter:blur(4px); box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                        EN
                    </a>
                @endif
            </div>


        </div>
    </nav>

    <!-- Navbar للموبايل -->
    <nav class="mobile-navbar">
        <div class="mobile-nav-container">
            <div class="mobile-logo">
                <img src="assets/logo.png" alt="Logo">
            </div>
            <button class="mobile-toggle" aria-label="فتح القائمة">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div class="mobile-menu">
            <div class="mobile-item">
                <a href="#" onclick="showPage('home')" class="mobile-link active">الرئيسية</a>
            </div>

            <div class="mobile-item dropdown">
                <button class="dropdown-btn">من نحن <i class="fas fa-chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="#" onclick="showPage('about')">عن الجمعية</a>
                    <a href="#" onclick="showPage('taif')">عن الطائف</a>
                    <a href="#" onclick="showPage('conference-about')">عن المؤتمر</a>
                    <a href="#" onclick="showPage('committee')">اللجنة العلمية</a>
                </div>
            </div>

            <div class="mobile-item dropdown">
                <button class="dropdown-btn">المؤتمر <i class="fas fa-chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="#" onclick="showPage('program')">المؤتمر</a>
                    <a href="#" onclick="showPage('program2')">برنامج المنتدي</a>
                    <a href="#" onclick="showPage('speakers')">المتحدثون</a>
                    <a href="#" onclick="showPage('attendees')">من يجب أن يحضر</a>
                    <a href="#" onclick="showPage('registration')">سجل الآن</a>
                </div>
            </div>

            <div class="mobile-item dropdown">
                <button class="dropdown-btn">الشركاء والرعاة <i class="fas fa-chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="#" onclick="showPage('sponsors')">الرعاة</a>
                    <a href="#" onclick="showPage('sponsorship')">احجز رعايتك</a>
                </div>
            </div>

            <div class="mobile-item dropdown">
                <button class="dropdown-btn">الإعلام <i class="fas fa-chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="#" onclick="showPage('media')">تغطية إعلامية</a>
                    <a href="#" onclick="showPage('exhibition')">المعرض</a>
                </div>
            </div>

            <div class="mobile-item dropdown">
                <button class="dropdown-btn">الضيافة <i class="fas fa-chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="#" onclick="showPage('accommodation')">الإقامة</a>
                    <a href="#" onclick="showPage('visa')">متطلبات التأشيرة</a>
                    <a href="#" onclick="showPage('flights')">الرحلات الجوية</a>
                </div>
            </div>

            <div class="mobile-item">
                <a href="#" onclick="showPage('contact')" class="mobile-link">اتصل بنا</a>
            </div>

            <div class="mobile-lang">
                <button onclick="switchLanguage('ar')" class="active">العربية</button>
                <button onclick="switchLanguage('en')">EN</button>
            </div>
        </div>
    </nav>


    <!-- Main Content Container -->
    <main id="main-content">
        <!-- Home Page -->
        <div id="home" class="page active">
            <section class="hero">
                <div class="hero-background"></div>
                <div class="hero-content">
                    <div class="logo-hero">
                        <img src="assets/logo.png" style="width: 200px; height: 100px; border-radius: 10px;"
                            alt="">
                        <img src="assets/logo2.jpeg" style="width: 200px; height: 100px; border-radius: 10px;"
                            alt="">
                    </div>

                    <h1 class="hero-title">
                        {{ __('home.headline') }} </h1>
                    <p class="hero-subtitle">{{ __('home.tagline') }}</p>

                    <div class="hero-info">
                        <div class="info-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>{{ __('home.date') }} </span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span> {{ __('home.venue') }}</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-users"></i>
                            <span> {{ __('home.participants') }} </span>
                        </div>
                    </div>

                    <div class="hero-buttons">
                        <button class="btn btn-primary"
                            onclick="showPage('registration')">{{ __('home.register_now') }}</button>
                        <button class="btn btn-secondary" onclick="showPage('about')"> {{ __('home.learn_more') }}
                        </button>
                    </div>
                </div>
            </section>

            <section class="about-preview"
                style="padding: 4rem 0; background: linear-gradient(to bottom, #f8f9fa, #fff);">
                <div class="container" style="width: 90%; max-width: 1400px; margin: 0 auto;">

                    <!-- headline -->
                    <h2 data-aos="fade-down"
                        style="text-align: center; margin-bottom: 3rem; color: #2c3e50; font-size: 2.2rem; position: relative;">
                        {{ __('home.about') }}
                    </h2>

                    <div
                        style="display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap; padding: 10px 5px;">

                        <!-- Vision -->
                        <div style="flex: 1 1 calc(25% - 20px); min-width: 250px;
                background: white; border-radius: 15px; 
                padding: 2rem; text-align: right; box-shadow: 0 10px 30px rgba(0,0,0,0.08);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                position: relative; overflow: hidden; height: 300px;"
                            data-aos="fade-left" data-aos-duration="3000">

                            <div
                                style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #3498db, #2980b9);">
                            </div>
                            <i class="fas fa-eye" style="font-size: 24px; color: #3498db; margin-bottom: 10px;"></i>
                            <h3 style="color: #2c3e50; margin-bottom: 1rem; font-size: 1.4rem;">
                                {{ __('home.our_vision') }}
                            </h3>
                            <p style="color: #666; line-height: 1.6; margin: 0;">
                                {{ __('home.our_vision_text') }}
                            </p>
                        </div>

                        <!-- Mission -->
                        <div style="flex: 1 1 calc(25% - 20px); min-width: 250px;
                background: white; border-radius: 15px; 
                padding: 2rem; text-align: right; box-shadow: 0 10px 30px rgba(0,0,0,0.08);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                position: relative; overflow: hidden; height: 300px;"
                            data-aos="fade-left" data-aos-duration="3000">

                            <div
                                style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #2ecc71, #27ae60);">
                            </div>
                            <i class="fas fa-bullseye"
                                style="font-size: 24px; color: #2ecc71; margin-bottom: 10px;"></i>
                            <h3 style="color: #2c3e50; margin-bottom: 1rem; font-size: 1.4rem;">
                                {{ __('home.our_mission') }}
                            </h3>
                            <p style="color: #666; line-height: 1.6; margin: 0;">
                                {{ __('home.our_mission_text') }}
                            </p>
                        </div>

                        <!-- Values -->
                        <div style="flex: 1 1 calc(25% - 20px); min-width: 250px;
                background: white; border-radius: 15px; 
                padding: 2rem; text-align: right; box-shadow: 0 10px 30px rgba(0,0,0,0.08);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                position: relative; overflow: hidden; height: 300px;"
                            data-aos="fade-left" data-aos-duration="3000">

                            <div
                                style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #f39c12, #e67e22);">
                            </div>
                            <i class="fas fa-handshake"
                                style="font-size: 24px; color: #f39c12; margin-bottom: 10px;"></i>
                            <h3 style="color: #2c3e50; margin-bottom: 1rem; font-size: 1.4rem;">
                                {{ __('home.our_values') }}
                            </h3>
                            <p style="color: #666; line-height: 1.6; margin: 0;">
                                {{ __('home.our_values_text') }}
                            </p>
                        </div>

                        <!-- Impact -->
                        <div style="flex: 1 1 calc(25% - 20px); min-width: 250px;
                background: white; border-radius: 15px; 
                padding: 2rem; text-align: right; box-shadow: 0 10px 30px rgba(0,0,0,0.08);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                position: relative; overflow: hidden; height: 300px;"
                            data-aos="fade-left" data-aos-duration="3000">

                            <div
                                style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #9b59b6, #8e44ad);">
                            </div>
                            <i class="fas fa-globe" style="font-size: 24px; color: #9b59b6; margin-bottom: 10px;"></i>
                            <h3 style="color: #2c3e50; margin-bottom: 1rem; font-size: 1.4rem;">
                                {{ __('home.our_impact') }}
                            </h3>
                            <p style="color: #666; line-height: 1.6; margin: 0;">
                                {{ __('home.our_impact_text') }}
                            </p>
                        </div>
                    </div>
                </div>


                <style>
                    /* للتأكد من التجاوب على الشاشات الصغيرة */
                    @media (max-width: 1200px) {
                        .container>div {
                            /* overflow-x: auto; */
                            padding-bottom: 20px;
                        }
                    }

                    /* تأثير التحويم */
                    div[style*="flex: 1"]:hover {
                        transform: translateY(-10px);
                        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                    }
                </style>
            </section>
            <section style="background-color: #e91e631a; padding: 4rem 0;">
                <div class="container" style="width: 90%; max-width: 1400px; margin: 0 auto;">
                    <h2 data-aos="fade-dawn"
                        style="text-align: center; margin-bottom: 3rem; color: #2c3e50; font-size: 2.2rem; position: relative;">
                        {{ __('home.future') }}
                    </h2>
                    <p data-aos="fade-up" style="text-align: center; color: #666; line-height: 1.6; margin: 0;">
                        {{ __('home.vision') }}

                    </p>
                </div>
            </section>
            <section class="conference-preview" style="background-color: #f9f9f9; padding: 50px 0;">
                <div class="container">

                    <!-- Conference Title -->
                    <h2 data-aos="fade-dawn">{{ __('home.conference_title') }}</h2>

                    <!-- Subtitle -->
                    <p data-aos="fade-dawn" data-aos-duration="3000" class="section-subtitle" style="color: #666;">
                        {{ __('home.conference_subtitle') }}
                    </p>

                    <div class="stats-grid">

                        <!-- Days -->
                        <div data-aos="fade-left" data-aos-duration="3000" class="stat-card"
                            style="background-color: #ccfbf1 ; color: #333; border-radius: 12px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 40px; text-align: center;">
                            <i class="fas fa-calendar-alt" style="font-size: 24px; margin-bottom: 10px;"></i>
                            <div class="stat-number" style="font-size: 36px; font-weight: bold; margin-bottom: 10px;">
                                {{ __('home.days_number') }}
                            </div>
                            <div class="stat-label" style="font-size: 18px;">{{ __('home.days_label') }}</div>
                        </div>

                        <!-- Participants -->
                        <div class="stat-card" data-aos="fade-dawn" data-aos-duration="3000"
                            style="background-color: #c7b8ea !important; color: #333; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; text-align: center;">
                            <i class="fas fa-users" style="font-size: 24px; margin-bottom: 10px;"></i>
                            <div class="stat-number" style="font-size: 36px; font-weight: bold; margin-bottom: 10px;">
                                {{ __('home.participants_number') }}
                            </div>
                            <div class="stat-label" style="font-size: 18px;">{{ __('home.participants_label') }}
                            </div>
                        </div>

                        <!-- Speakers -->
                        <div class="stat-card" data-aos="fade-right" data-aos-duration="3000"
                            style="background-color: #ffffcc; color: #333; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; text-align: center;">
                            <i class="fas fa-microphone" style="font-size: 24px; margin-bottom: 10px;"></i>
                            <div class="stat-number" style="font-size: 36px; font-weight: bold; margin-bottom: 10px;">
                                {{ __('home.speakers_number') }}
                            </div>
                            <div class="stat-label" style="font-size: 18px;">{{ __('home.speakers_label') }}</div>
                        </div>

                        <!-- Sessions -->
                        <div class="stat-card" data-aos="fade-right" data-aos-duration="3000"
                            style="background-color: #add8e6; color: #333; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; text-align: center;">
                            <i class="fas fa-clock" style="font-size: 24px; margin-bottom: 10px;"></i>
                            <div class="stat-number" style="font-size: 36px; font-weight: bold; margin-bottom: 10px;">
                                {{ __('home.sessions_number') }}
                            </div>
                            <div class="stat-label" style="font-size: 18px;">{{ __('home.sessions_label') }}</div>
                        </div>

                    </div>

                    <!-- CTA Button -->
                    <div class="cta-section" style="margin-top: 30px; text-align: center;">
                        <button class="btn btn-primary"
                            style="background-color: #3498db; color: #fff; border: none; padding: 10px 20px; font-size: 18px; cursor: pointer;"
                            onclick="showPage('program')">
                            {{ __('home.conference_cta') }}
                        </button>
                    </div>

                </div>
            </section>

        </div>

        <!-- About Pages -->
        <div id="about" class="page">
            <section class="page-hero"
                style="background: linear-gradient(135deg, #1abc9c 0%, #16a085 50%, #27ae60 100%); padding: 4rem 2rem; text-align: center; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>

                <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 2;">
                    <div
                        style="display: inline-block; background: rgba(255, 255, 255, 0.15); padding: 1.5rem; border-radius: 50%; margin-bottom: 2rem; backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.2);">
                        <i class="fas fa-hospital-alt" style="font-size: 3rem; color: white;"></i>
                    </div>

                    <h1
                        style="font-size: 3.5rem; font-weight: 700; color: white; margin-bottom: 1.5rem; text-shadow: 2px 2px 10px rgba(0,0,0,0.3);">
                        {{ __('home.about_title') }}</h1>

                    <p
                        style="font-size: 1.3rem; color: rgba(255, 255, 255, 0.95); max-width: 800px; margin: 0 auto 2rem; text-shadow: 1px 1px 5px rgba(0,0,0,0.2);">
                        {{ __('home.about_description_1') }}
                    </p>

                    <div
                        style="background: rgba(255, 255, 255, 0.1); padding: 2rem; border-radius: 20px; backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.2); max-width: 900px; margin: 0 auto;">
                        <p style="font-size: 1.2rem; color: white; margin: 0; font-weight: 500; line-height: 1.8;">
                            {{ __('home.about_description_2') }}
                        </p>
                    </div>
                </div>
            </section>

            <!-- What We Offer Section -->
            <section style="padding: 5rem 2rem; max-width: 1200px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: 4rem;">
                    <h2
                        style="font-size: 2.5rem; font-weight: 700; color: #2c3e50; margin-bottom: 1rem; position: relative;">
                        {{ __('home.offer_title') }}
                        <span
                            style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background: linear-gradient(135deg, #1abc9c, #27ae60); border-radius: 2px;"></span>
                    </h2>
                    <p style="font-size: 1.2rem; color: #7f8c8d; max-width: 600px; margin: 0 auto;">
                        {{ __('home.offer_subtitle') }}
                    </p>
                </div>

                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin-bottom: 3rem;">

                    <!-- Card 1 -->
                    <div
                        style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 40px rgba(0,0,0,0.08); border: 1px solid rgba(26, 188, 156, 0.1); transition: all 0.3s ease; position: relative; overflow: hidden;">
                        <div
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: linear-gradient(135deg, #1abc9c, #27ae60); border-radius: 0 20px 0 100px; opacity: 0.1;">
                        </div>

                        <div
                            style="display: flex; align-items: center; margin-bottom: 1.5rem; position: relative; z-index: 2;">
                            <div
                                style="background: linear-gradient(135deg, #1abc9c, #27ae60); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-left: 1rem;">
                                <i class="fas fa-stethoscope" style="color: white; font-size: 1.5rem;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; color: #2c3e50; margin: 0;">
                                {{ __('home.offer_card_1_title') }}
                            </h3>
                        </div>

                        <p style="color: #7f8c8d; font-size: 1.1rem; line-height: 1.8; margin: 0;">
                            {{ __('home.offer_card_1_desc') }}
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 40px rgba(0,0,0,0.08); border: 1px solid rgba(26, 188, 156, 0.1); transition: all 0.3s ease; position: relative; overflow: hidden;">
                        <div
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: linear-gradient(135deg, #3498db, #2980b9); border-radius: 0 20px 0 100px; opacity: 0.1;">
                        </div>

                        <div
                            style="display: flex; align-items: center; margin-bottom: 1.5rem; position: relative; z-index: 2;">
                            <div
                                style="background: linear-gradient(135deg, #3498db, #2980b9); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-left: 1rem;">
                                <i class="fas fa-plane" style="color: white; font-size: 1.5rem;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; color: #2c3e50; margin: 0;">
                                {{ __('home.offer_card_2_title') }}
                            </h3>
                        </div>

                        <p style="color: #7f8c8d; font-size: 1.1rem; line-height: 1.8; margin: 0;">
                            {{ __('home.offer_card_2_desc') }}
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 40px rgba(0,0,0,0.08); border: 1px solid rgba(26, 188, 156, 0.1); transition: all 0.3s ease; position: relative; overflow: hidden;">
                        <div
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: linear-gradient(135deg, #e74c3c, #c0392b); border-radius: 0 20px 0 100px; opacity: 0.1;">
                        </div>

                        <div
                            style="display: flex; align-items: center; margin-bottom: 1.5rem; position: relative; z-index: 2;">
                            <div
                                style="background: linear-gradient(135deg, #e74c3c, #c0392b); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-left: 1rem;">
                                <i class="fas fa-heartbeat" style="color: white; font-size: 1.5rem;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; color: #2c3e50; margin: 0;">
                                {{ __('home.offer_card_3_title') }}
                            </h3>
                        </div>

                        <p style="color: #7f8c8d; font-size: 1.1rem; line-height: 1.8; margin: 0;">
                            {{ __('home.offer_card_3_desc') }}
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div
                        style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 40px rgba(0,0,0,0.08); border: 1px solid rgba(26, 188, 156, 0.1); transition: all 0.3s ease; position: relative; overflow: hidden;">
                        <div
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: linear-gradient(135deg, #f39c12, #e67e22); border-radius: 0 20px 0 100px; opacity: 0.1;">
                        </div>

                        <div
                            style="display: flex; align-items: center; margin-bottom: 1.5rem; position: relative; z-index: 2;">
                            <div
                                style="background: linear-gradient(135deg, #f39c12, #e67e22); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-left: 1rem;">
                                <i class="fas fa-camera" style="color: white; font-size: 1.5rem;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; color: #2c3e50; margin: 0;">
                                {{ __('home.offer_card_4_title') }}
                            </h3>
                        </div>

                        <p style="color: #7f8c8d; font-size: 1.1rem; line-height: 1.8; margin: 0;">
                            {{ __('home.offer_card_4_desc') }}
                        </p>
                    </div>

                    <!-- Card 5 -->
                    <div
                        style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 10px 40px rgba(0,0,0,0.08); border: 1px solid rgba(26, 188, 156, 0.1); transition: all 0.3s ease; position: relative; overflow: hidden;">
                        <div
                            style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: linear-gradient(135deg, #9b59b6, #8e44ad); border-radius: 0 20px 0 100px; opacity: 0.1;">
                        </div>

                        <div
                            style="display: flex; align-items: center; margin-bottom: 1.5rem; position: relative; z-index: 2;">
                            <div
                                style="background: linear-gradient(135deg, #9b59b6, #8e44ad); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-left: 1rem;">
                                <i class="fas fa-user-friends" style="color: white; font-size: 1.5rem;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; color: #2c3e50; margin: 0;">
                                {{ __('home.offer_card_5_title') }}
                            </h3>
                        </div>

                        <p style="color: #7f8c8d; font-size: 1.1rem; line-height: 1.8; margin: 0;">
                            {{ __('home.offer_card_5_desc') }}
                        </p>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section
                style="background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%); padding: 4rem 2rem; text-align: center; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>

                <div style="max-width: 800px; margin: 0 auto; position: relative; z-index: 2;">
                    <div
                        style="display: inline-block; background: rgba(255, 255, 255, 0.1); padding: 1.2rem; border-radius: 50%; margin-bottom: 2rem; backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.2);">
                        <i class="fas fa-hands-helping" style="font-size: 2.5rem; color: white;"></i>
                    </div>

                    <h2
                        style="font-size: 2.5rem; font-weight: 700; color: white; margin-bottom: 1.5rem; text-shadow: 2px 2px 10px rgba(0,0,0,0.3);">
                        {{ __('home.contact_title') }}</h2>

                    <p
                        style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 2rem; line-height: 1.8; text-shadow: 1px 1px 5px rgba(0,0,0,0.2);">
                        {{ __('home.contact_desc') }}
                    </p>

                    <div style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
                        <a href="#"
                            style="background: rgba(255, 255, 255, 0.2); color: white; text-decoration: none; padding: 1rem 2rem; border-radius: 50px; font-weight: 600; border: 2px solid rgba(255, 255, 255, 0.3); backdrop-filter: blur(10px); transition: all 0.3s ease; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-phone"></i>
                            {{ __('home.contact_call') }}
                        </a>

                        <a href="#"
                            style="background: white; color: #2c3e50; text-decoration: none; padding: 1rem 2rem; border-radius: 50px; font-weight: 600; transition: all 0.3s ease; display: flex; align-items: center; gap: 0.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                            <i class="fas fa-envelope"></i>
                            {{ __('home.contact_email') }}
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <div id="taif" class="page" style="font-family: system-ui, -apple-system, sans-serif;">
            <section class="page-hero"
                style="color: white; padding: 4rem 0; text-align: center; border-radius: 0 0 20px 20px; margin-bottom: 2rem;">
                <div class="container" style="width: 90%; max-width: 1200px; margin: 0 auto;">
                    <img src="assets/logo.png" style="width: 200px; height: 100px; margin-bottom: 1.5rem;"
                        alt="شعار الطائف">
                    <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">{{ __('home.home_hero_title') }}</h1>
                    <p style="font-size: 1.1rem; opacity: 0.9; max-width: 800px; margin: 0 auto;">
                        {{ __('home.home_hero_desc') }}
                    </p>
                </div>
            </section>

            <section style="padding: 2rem 0;">
                <div style="width: 90%; max-width: 1200px; margin: 0 auto;">
                    <!-- بطاقة رئيسية -->
                    <div
                        style="background: white; border-radius: 15px; padding: 2rem; margin-bottom: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1); text-align: right;">
                        <h2 style="font-size: 1.5rem; margin-bottom: 1rem;">{{ __('home.home_main_card_title') }}</h2>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: #2c3e50; margin-bottom: 1.5rem;">
                            {{ __('home.home_main_card_desc_1') }}
                        </p>
                        <div style="margin-bottom: 1.5rem;">
                            <span
                                style="display: inline-block; background: #e74c3c; color: white; padding: 8px 20px; border-radius: 25px; font-size: 1rem; font-weight: bold;">
                                {{ __('home.home_main_card_tag') }}
                            </span>
                        </div>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: #2c3e50; margin: 0;">
                            {{ __('home.home_main_card_desc_2') }}
                        </p>
                    </div>

                    <!-- شبكة البطاقات -->
                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                        <!-- بطاقة مدينة الورود -->
                        <div
                            style="background: white; border-radius: 12px; padding: 1.5rem; box-shadow: 0 5px 15px rgba(0,0,0,0.08); text-align: right;">
                            <h3 style="color: #e74c3c; margin-bottom: 1rem; font-size: 1.3rem;">
                                {{ __('home.home_rose_city_title') }}
                            </h3>
                            <p style="color: #666; line-height: 1.6; margin-bottom: 1rem;">
                                {{ __('home.home_rose_city_desc') }}
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 0; color: #666;">
                                <li style="padding: 0.4rem 0; border-bottom: 1px solid #eee;">•
                                    {{ __('home.home_rose_city_point_1') }}</li>
                                <li style="padding: 0.4rem 0; border-bottom: 1px solid #eee;">•
                                    {{ __('home.home_rose_city_point_2') }}</li>
                                <li style="padding: 0.4rem 0;">• {{ __('home.home_rose_city_point_3') }}</li>
                            </ul>
                        </div>

                        <!-- بطاقة الفعاليات -->
                        <div
                            style="background: white; border-radius: 12px; padding: 1.5rem; box-shadow: 0 5px 15px rgba(0,0,0,0.08); text-align: right;">
                            <h3 style="color: #3498db; margin-bottom: 1rem; font-size: 1.3rem;">
                                {{ __('home.home_events_title') }}
                            </h3>
                            <ul style="list-style: none; padding: 0; margin: 0; color: #666;">
                                <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;">
                                    <strong>{{ __('home.home_events_desc_1_title') }}:</strong><br>
                                    {{ __('home.home_events_desc_1') }}
                                </li>
                                <li style="padding: 0.5rem 0;">
                                    <strong>{{ __('home.home_events_desc_2_title') }}:</strong><br>
                                    {{ __('home.home_events_desc_2') }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- بطاقة عريضة للمعالم السياحية -->
                    <div
                        style="background: linear-gradient(to right, #f8f9fa, white); border-radius: 15px; padding: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1); text-align: right;">
                        <h3 style="color: #2c3e50; margin-bottom: 1.5rem; font-size: 1.4rem;">
                            {{ __('home.home_tourist_title') }}
                        </h3>

                        <div style="margin-bottom: 2rem;">
                            <h4 style="color: #27ae60; margin-bottom: 0.8rem; font-size: 1.2rem;">
                                {{ __('home.home_tourist_spot_1') }}
                            </h4>
                            <p style="color: #666; line-height: 1.8; margin-bottom: 1rem;">
                                {{ __('home.home_tourist_spot_1_desc') }}
                            </p>
                        </div>

                        <div>
                            <h4 style="color: #8e44ad; margin-bottom: 0.8rem; font-size: 1.2rem;">
                                {{ __('home.home_tourist_spot_2') }}
                            </h4>
                            <p style="color: #666; line-height: 1.8;">
                                {{ __('home.home_tourist_spot_2_desc') }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>



        <div id="conference-about" class="page">
            <section
                style="background: linear-gradient(135deg, #f8f9fa 0%, #e3f2fd 100%); padding: 60px 20px; text-align: center;">
                <div style="max-width: 1200px; margin: 0 auto;">
                    <h1
                        style="font-size: 3rem; font-weight: 700; color: #2c3e50; margin: 0 0 30px 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">
                        {{ __('home.conference_hero_title') }}</h1>
                </div>
            </section>

            <section style="padding: 80px 20px; background-color: #ffffff;">
                <div style="max-width: 1200px; margin: 0 auto;">
                    <div
                        style="background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%); border-radius: 25px; padding: 50px; box-shadow: 0 20px 60px rgba(0,0,0,0.1); margin-bottom: 50px; border: 1px solid #e1e8ed;">
                        <h2
                            style="font-size: 2.5rem; font-weight: 600; color: #34495e; text-align: center; margin: 0 0 40px 0;">
                            {{ __('home.conference_title') }}</h2>
                        <p
                            style="font-size: 1.3rem; line-height: 2.2; color: #5a6c7d; text-align: justify; margin: 0;">
                            {{ __('home.conference_desc') }}
                        </p>
                    </div>

                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; margin: 50px 0;">

                        <div
                            style="background: linear-gradient(145deg, #fff8e1 0%, #ffffff 100%); border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 15px 35px rgba(255, 152, 0, 0.1); border: 2px solid #ffb74d; transition: transform 0.3s ease;">
                            <div
                                style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff9800 0%, #f57c00 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 10px 25px rgba(255, 152, 0, 0.3);">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.8rem; font-weight: 600; color: #e65100; margin: 0 0 20px 0;">
                                {{ __('home.conference_participant_1_title') }}</h3>
                            <p style="font-size: 1.1rem; color: #6d4c41; line-height: 1.8; margin: 0;">
                                {{ __('home.conference_participant_1_desc') }}</p>
                        </div>

                        <div
                            style="background: linear-gradient(145deg, #f3e5f5 0%, #ffffff 100%); border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 15px 35px rgba(156, 39, 176, 0.1); border: 2px solid #ba68c8; transition: transform 0.3s ease;">
                            <div
                                style="width: 80px; height: 80px; background: linear-gradient(135deg, #9c27b0 0%, #7b1fa2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 10px 25px rgba(156, 39, 176, 0.3);">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.8rem; font-weight: 600; color: #6a1b9a; margin: 0 0 20px 0;">
                                {{ __('home.conference_participant_2_title') }}</h3>
                            <p style="font-size: 1.1rem; color: #4a148c; line-height: 1.8; margin: 0;">
                                {{ __('home.conference_participant_2_desc') }}</p>
                        </div>

                        <div
                            style="background: linear-gradient(145deg, #e0f2f1 0%, #ffffff 100%); border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 15px 35px rgba(0, 150, 136, 0.1); border: 2px solid #4db6ac; transition: transform 0.3s ease;">
                            <div
                                style="width: 80px; height: 80px; background: linear-gradient(135deg, #009688 0%, #00695c 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 10px 25px rgba(0, 150, 136, 0.3);">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A3 3 0 0 0 17.1 7H14.9c-1.3 0-2.4.84-2.85 2.06L9.5 18H12v6h8z" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.8rem; font-weight: 600; color: #00695c; margin: 0 0 20px 0;">
                                {{ __('home.conference_participant_3_title') }}</h3>
                            <p style="font-size: 1.1rem; color: #004d40; line-height: 1.8; margin: 0;">
                                {{ __('home.conference_participant_3_desc') }}</p>
                        </div>

                        <div
                            style="background: linear-gradient(145deg, #e8f5e8 0%, #ffffff 100%); border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 15px 35px rgba(76, 175, 80, 0.1); border: 2px solid #81c784; transition: transform 0.3s ease;">
                            <div
                                style="width: 80px; height: 80px; background: linear-gradient(135deg, #4caf50 0%, #2e7d32 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 10px 25px rgba(76, 175, 80, 0.3);">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M7 14c-1.66 0-3 1.34-3 3 0 1.31-1.16 2-2 2 .92 1.22 2.49 2 4 2 2.21 0 4-1.79 4-4 0-1.66-1.34-3-3-3zm13.71-9.37l-1.34-1.34c-.39-.39-1.02-.39-1.41 0L9 12.25 11.75 15l8.96-8.96c.39-.39.39-1.02 0-1.41z" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.8rem; font-weight: 600; color: #2e7d32; margin: 0 0 20px 0;">
                                {{ __('home.conference_participant_4_title') }}</h3>
                            <p style="font-size: 1.1rem; color: #1b5e20; line-height: 1.8; margin: 0;">
                                {{ __('home.conference_participant_4_desc') }}</p>
                        </div>

                        <div
                            style="background: linear-gradient(145deg, #e3f2fd 0%, #ffffff 100%); border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 15px 35px rgba(33, 150, 243, 0.1); border: 2px solid #64b5f6; transition: transform 0.3s ease;">
                            <div
                                style="width: 80px; height: 80px; background: linear-gradient(135deg, #2196f3 0%, #1565c0 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 10px 25px rgba(33, 150, 243, 0.3);">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.8rem; font-weight: 600; color: #1565c0; margin: 0 0 20px 0;">
                                {{ __('home.conference_participant_5_title') }}</h3>
                            <p style="font-size: 1.1rem; color: #0d47a1; line-height: 1.8; margin: 0;">
                                {{ __('home.conference_participant_5_desc') }}</p>
                        </div>

                        <div
                            style="background: linear-gradient(145deg, #fce4ec 0%, #ffffff 100%); border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 15px 35px rgba(233, 30, 99, 0.1); border: 2px solid #f48fb1; transition: transform 0.3s ease;">
                            <div
                                style="width: 80px; height: 80px; background: linear-gradient(135deg, #e91e63 0%, #ad1457 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; box-shadow: 0 10px 25px rgba(233, 30, 99, 0.3);">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.8rem; font-weight: 600; color: #ad1457; margin: 0 0 20px 0;">
                                {{ __('home.conference_participant_6_title') }}</h3>
                            <p style="font-size: 1.1rem; color: #880e4f; line-height: 1.8; margin: 0;">
                                {{ __('home.conference_participant_6_desc') }}</p>
                        </div>
                    </div>

                    <div style="margin-top: 80px;">
                        <h2
                            style="font-size: 2.5rem; font-weight: 600; color: #34495e; text-align: center; margin: 0 0 50px 0;">
                            {{ __('home.conference_goals_title') }}</h2>

                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 40px;">

                            <div
                                style="background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%); border-radius: 20px; padding: 40px; box-shadow: 0 15px 35px rgba(0,0,0,0.08); border-left: 5px solid #3498db;">
                                <h3
                                    style="font-size: 2rem; font-weight: 600; color: #2980b9; margin: 0 0 25px 0; display: flex; align-items: center;">
                                    <div
                                        style="width: 50px; height: 50px; background: linear-gradient(135deg, #3498db 0%, #2980b9 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                                            <path
                                                d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A3 3 0 0 0 17.1 7H14.9c-1.3 0-2.4.84-2.85 2.06L9.5 18H12v6h8z" />
                                        </svg>
                                    </div>
                                    {{ __('home.conference_goal_1_title') }}
                                </h3>
                                <p style="font-size: 1.2rem; color: #5a6c7d; line-height: 1.9; margin: 0;">
                                    {{ __('home.conference_goal_1_desc') }}</p>
                            </div>

                            <div
                                style="background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%); border-radius: 20px; padding: 40px; box-shadow: 0 15px 35px rgba(0,0,0,0.08); border-left: 5px solid #27ae60;">
                                <h3
                                    style="font-size: 2rem; font-weight: 600; color: #229954; margin: 0 0 25px 0; display: flex; align-items: center;">
                                    <div
                                        style="width: 50px; height: 50px; background: linear-gradient(135deg, #27ae60 0%, #229954 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                                            <path
                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                        </svg>
                                    </div>
                                    {{ __('home.conference_goal_2_title') }}
                                </h3>
                                <p style="font-size: 1.2rem; color: #5a6c7d; line-height: 1.9; margin: 0;">
                                    {{ __('home.conference_goal_2_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <div id="committee" class="page" style="min-height: 100vh;">

            <!-- Header Section -->
            <section class="page-hero"
                style="background: linear-gradient(135deg, #4fd1c7 0%, #63b3ed 100%); padding: 80px 0; text-align: center; position: relative; overflow: hidden;">
                <!-- Medical Tourism Logo -->
                <div style="position: absolute; top: 20px; right: 20px; opacity: 0.1;">
                    <svg width="120" height="80" viewBox="0 0 120 80" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M60 10 L50 30 L70 30 Z M60 70 L50 50 L70 50 Z M20 40 L40 30 L40 50 Z M100 40 L80 30 L80 50 Z"
                            fill="white" />
                        <circle cx="60" cy="40" r="15" fill="white" />
                        <path d="M55 40 L65 40 M60 35 L60 45" stroke="#4fd1c7" stroke-width="2" />
                    </svg>
                </div>

                <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <!-- Logo -->
                    <div style="margin-bottom: 30px; display: flex; justify-content: center;">
                        <div
                            style="width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 5 L25 5 L25 15 L35 15 L35 25 L25 25 L25 35 L15 35 L15 25 L5 25 L5 15 L15 15 Z"
                                    fill="white" />
                                <circle cx="20" cy="20" r="3" fill="#4fd1c7" />
                            </svg>
                        </div>
                    </div>

                    <h1
                        style="color: white; font-size: 3.5rem; font-weight: 700; margin: 0 0 20px 0; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        {{ __('home.scientific_committee_title') }}</h1>
                    <p
                        style="color: rgba(255,255,255,0.9); font-size: 1.3rem; font-weight: 400; margin: 0; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                        {{ __('home.scientific_committee_subtitle') }}</p>
                </div>
            </section>

            <!-- Content Section -->
            <section class="content-section" style="padding: 100px 0; background-color: #f8f9fa;">
                <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

                    <!-- Coming Soon Card -->

                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">

                        <div
                            style="background: white; border-radius: 15px; padding: 30px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                            <div
                                style="width: 50px; height: 50px; background: linear-gradient(135deg, #fef5e7, #fed7aa); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="#f6ad55" stroke-width="2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="m22 21-3-3m0 0a5 5 0 1 0-7.07-7.07 5 5 0 0 0 7.07 7.07Z" />
                                </svg>
                            </div>
                            <h3 style="color: #2d3748; font-size: 1.3rem; font-weight: 600; margin: 0 0 15px 0;">
                                {{ __('home.scientific_committee_feature_1_title') }}</h3>
                            <p style="color: #718096; font-size: 1rem; line-height: 1.6; margin: 0;">
                                {{ __('home.scientific_committee_feature_1_desc') }}</p>
                        </div>

                        <div
                            style="background: white; border-radius: 15px; padding: 30px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                            <div
                                style="width: 50px; height: 50px; background: linear-gradient(135deg, #e6fffa, #b2f5ea); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="#4fd1c7" stroke-width="2">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                                </svg>
                            </div>
                            <h3 style="color: #2d3748; font-size: 1.3rem; font-weight: 600; margin: 0 0 15px 0;">
                                {{ __('home.scientific_committee_feature_2_title') }}</h3>
                            <p style="color: #718096; font-size: 1rem; line-height: 1.6; margin: 0;">
                                {{ __('home.scientific_committee_feature_2_desc') }}</p>
                        </div>

                        <div
                            style="background: white; border-radius: 15px; padding: 30px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); transition: transform 0.3s ease;">
                            <div
                                style="width: 50px; height: 50px; background: linear-gradient(135deg, #f0f4ff, #c7d2fe); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="#6366f1" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12,6 12,12 16,14" />
                                </svg>
                            </div>
                            <h3 style="color: #2d3748; font-size: 1.3rem; font-weight: 600; margin: 0 0 15px 0;">
                                {{ __('home.scientific_committee_feature_3_title') }}
                            </h3>
                            <p style="color: #718096; font-size: 1rem; line-height: 1.6; margin: 0;">
                                {{ __('home.scientific_committee_feature_3_desc') }}</p>
                        </div>

                    </div>
                </div>
            </section>

            <section
                style="padding: 80px 20px; background: #f8f9fa; min-height: 100vh; font-family: 'Cairo', sans-serif;">
                <div style="max-width: 1200px; margin: 0 auto;">
                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
                        @foreach ($sciences as $science)
                            <!-- عضو 1 -->
                            <div style="background: #ffffff; border-radius: 20px; padding: 30px; text-align: center; border: 3px solid #87CEEB; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0, 0, 0, 0.15)'"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.1)'">
                                <div
                                    style="width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 25px; overflow: hidden; border: 4px solid #87CEEB;">
                                    <img src="{{ asset($science->image) }}" alt="د. أحمد محمد"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <h3
                                    style="color: #333; font-size: 24px; 
                            font-weight: 700; margin: 0 0 8px 0;">
                                    {{ $science->title_ar }}
                                </h3>
                                <p style="color: #666; font-size: 16px; margin: 0 0 20px 0; font-weight: 400;">Dr.
                                    Ahmed
                                    {{ $science->title_en }}</p>
                                <div
                                    style="background: #f8f9fa; border-radius: 15px; padding: 15px; margin-top: 20px; border: 1px solid #e9ecef;">
                                    <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">
                                        {{ $science->desc_ar }}
                                        - <br> {{ $science->desc_en }} </p>
                                </div>
                            </div>
                        @endforeach
                        <!-- عضو 2 -->
                        {{-- <div style="background: #ffffff; border-radius: 20px; padding: 30px; text-align: center; border: 3px solid #87CEEB; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0, 0, 0, 0.15)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.1)'">
                            <div
                                style="width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 25px; overflow: hidden; border: 4px solid #87CEEB;">
                                <img src="https://images.unsplash.com/photo-1594824371042-319863e19ee3?w=120&h=120&fit=crop&crop=face"
                                    alt="د. فاطمة السيد" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3 style="color: #333; font-size: 24px; font-weight: 700; margin: 0 0 8px 0;">د. فاطمة
                                السيد محمود</h3>
                            <p style="color: #666; font-size: 16px; margin: 0 0 20px 0; font-weight: 400;">Dr. Fatma
                                El-Sayed Mahmoud</p>
                            <div
                                style="background: #f8f9fa; border-radius: 15px; padding: 15px; margin-top: 20px; border: 1px solid #e9ecef;">
                                <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">أستاذ الأشعة
                                    التشخيصية - جامعة عين شمس<br>Professor of Diagnostic Radiology - Ain Shams
                                    University</p>
                            </div>
                        </div>

                        <!-- عضو 3 -->
                        <div style="background: #ffffff; border-radius: 20px; padding: 30px; text-align: center; border: 3px solid #87CEEB; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0, 0, 0, 0.15)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.1)'">
                            <div
                                style="width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 25px; overflow: hidden; border: 4px solid #87CEEB;">
                                <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=120&h=120&fit=crop&crop=face"
                                    alt="د. محمد إبراهيم" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3 style="color: #333; font-size: 24px; font-weight: 700; margin: 0 0 8px 0;">د. محمد
                                إبراهيم حسن</h3>
                            <p style="color: #666; font-size: 16px; margin: 0 0 20px 0; font-weight: 400;">Dr. Mohamed
                                Ibrahim Hassan</p>
                            <div
                                style="background: #f8f9fa; border-radius: 15px; padding: 15px; margin-top: 20px; border: 1px solid #e9ecef;">
                                <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">أستاذ الجراحة
                                    العامة - جامعة الإسكندرية<br>Professor of General Surgery - Alexandria University
                                </p>
                            </div>
                        </div>

                        <!-- عضو 4 -->
                        <div style="background: #ffffff; border-radius: 20px; padding: 30px; text-align: center; border: 3px solid #87CEEB; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0, 0, 0, 0.15)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.1)'">
                            <div
                                style="width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 25px; overflow: hidden; border: 4px solid #87CEEB;">
                                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=120&h=120&fit=crop&crop=face"
                                    alt="د. نورا أحمد" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3 style="color: #333; font-size: 24px; font-weight: 700; margin: 0 0 8px 0;">د. نورا أحمد
                                سالم</h3>
                            <p style="color: #666; font-size: 16px; margin: 0 0 20px 0; font-weight: 400;">Dr. Nora
                                Ahmed Salem</p>
                            <div
                                style="background: #f8f9fa; border-radius: 15px; padding: 15px; margin-top: 20px; border: 1px solid #e9ecef;">
                                <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">أستاذ أمراض
                                    النساء والتوليد - جامعة أسيوط<br>Professor of Obstetrics & Gynecology - Assiut
                                    University</p>
                            </div>
                        </div>

                        <!-- عضو 5 -->
                        <div style="background: #ffffff; border-radius: 20px; padding: 30px; text-align: center; border: 3px solid #87CEEB; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0, 0, 0, 0.15)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.1)'">
                            <div
                                style="width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 25px; overflow: hidden; border: 4px solid #87CEEB;">
                                <img src="https://images.unsplash.com/photo-1607990281513-2c110a25bd8c?w=120&h=120&fit=crop&crop=face"
                                    alt="د. خالد يوسف" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3 style="color: #333; font-size: 24px; font-weight: 700; margin: 0 0 8px 0;">د. خالد يوسف
                                عبدالله</h3>
                            <p style="color: #666; font-size: 16px; margin: 0 0 20px 0; font-weight: 400;">Dr. Khaled
                                Youssef Abdullah</p>
                            <div
                                style="background: #f8f9fa; border-radius: 15px; padding: 15px; margin-top: 20px; border: 1px solid #e9ecef;">
                                <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">أستاذ طب الأطفال
                                    - جامعة المنصورة<br>Professor of Pediatrics - Mansoura University</p>
                            </div>
                        </div> --}}

                    </div>

                    <!-- تأثيرات الخلفية المتحركة -->
                    <div
                        style="position: absolute; top: 10%; left: 5%; width: 100px; height: 100px; background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%); border-radius: 50%; animation: float 6s ease-in-out infinite;">
                    </div>
                    <div
                        style="position: absolute; top: 60%; right: 8%; width: 60px; height: 60px; background: radial-gradient(circle, rgba(255, 255, 255, 0.08) 0%, transparent 70%); border-radius: 50%; animation: float 4s ease-in-out infinite reverse;">
                    </div>
                    <div
                        style="position: absolute; bottom: 20%; left: 15%; width: 80px; height: 80px; background: radial-gradient(circle, rgba(255, 255, 255, 0.06) 0%, transparent 70%); border-radius: 50%; animation: float 8s ease-in-out infinite;">
                    </div>

                    <style>
                        @keyframes float {

                            0%,
                            100% {
                                transform: translateY(0px);
                                opacity: 0.7;
                            }

                            50% {
                                transform: translateY(-20px);
                                opacity: 0.3;
                            }
                        }

                        body {
                            margin: 0;
                            padding: 0;
                            overflow-x: hidden;
                        }
                    </style>
            </section>
        </div>

        <style>
            @keyframes pulse {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.5;
                }
            }

            @media (max-width: 768px) {
                h1 {
                    font-size: 2.5rem !important;
                }

                .page-hero {
                    padding: 60px 0 !important;
                }

                .content-section {
                    padding: 60px 0 !important;
                }
            }
        </style>

        <!-- Conference Pages -->
        <div id="program" class="page">
            <section
                style="background: linear-gradient(135deg, #2b6cb8 0%, #1e5aa8 100%); color: white; padding: 80px 0; text-align: center;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <h1
                        style="font-size: 3.5em; font-weight: 700; margin: 0 0 20px 0; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">
                        {{ __('home.hero_title') }}</h1>
                    <p
                        style="font-size: 1.2em; font-weight: 300; margin: 0 0 40px 0; opacity: 0.95; line-height: 1.6;">
                        {{ __('home.hero_subtitle') }}</p>

                    <!-- Event Details -->
                    <div
                        style="display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap; margin-top: 40px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div
                                style="background: rgba(255,255,255,0.2); padding: 8px; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <div style="width: 16px; height: 16px; background: white; border-radius: 2px;"></div>
                            </div>
                            <div>
                                <div style="font-size: 0.9em; opacity: 0.8;">{{ __('home.hero_participants') }}</div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div
                                style="background: rgba(255,255,255,0.2); padding: 8px; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <div style="width: 16px; height: 16px; background: white; border-radius: 50%;"></div>
                            </div>
                            <div>
                                <div style="font-size: 0.9em; opacity: 0.8;">{{ __('home.hero_countries') }}</div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div
                                style="background: rgba(255,255,255,0.2); padding: 8px; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <div style="width: 16px; height: 16px; background: white; border-radius: 2px;"></div>
                            </div>
                            <div>
                                <div style="font-size: 0.9em; opacity: 0.8;">{{ __('home.hero_speakers') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Location and Date -->
                    <div style="margin-top: 30px; display: flex; justify-content: center; gap: 60px; flex-wrap: wrap;">
                        <div style="text-align: center;">
                            <div style="font-size: 1.1em; font-weight: 600;">{{ __('home.hero_location') }}</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 1.1em; font-weight: 600;">{{ __('home.hero_date') }}</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Statistics Section -->
            <section style="padding: 60px 0; background: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">

                        <!-- Stat 1 -->
                        <div
                            style="background: linear-gradient(135deg, #fef5e7 0%, #fed7aa 100%); padding: 40px; text-align: center; border-radius: 20px; box-shadow: 0 10px 25px rgba(254, 215, 170, 0.3);">
                            <div
                                style="width: 60px; height: 60px; background: #f97316; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(249, 115, 22, 0.4);">
                                <div style="width: 24px; height: 24px; background: white; border-radius: 50%;"></div>
                            </div>
                            <div style="font-size: 3em; font-weight: 700; color: #ea580c; margin-bottom: 10px;">
                                {{ __('home.stats_experience_number') }}
                            </div>
                            <div style="color: #9a3412; font-size: 1.1em; font-weight: 500;">
                                {{ __('home.stats_experience_text') }}</div>
                        </div>

                        <!-- Stat 2 -->
                        <div
                            style="background: linear-gradient(135deg, #ede9fe 0%, #c4b5fd 100%); padding: 40px; text-align: center; border-radius: 20px; box-shadow: 0 10px 25px rgba(196, 181, 253, 0.3);">
                            <div
                                style="width: 60px; height: 60px; background: #8b5cf6; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(139, 92, 246, 0.4);">
                                <div style="width: 24px; height: 24px; background: white; border-radius: 4px;"></div>
                            </div>
                            <div style="font-size: 3em; font-weight: 700; color: #7c3aed; margin-bottom: 10px;">
                                {{ __('home.stats_countries_number') }}</div>
                            <div style="color: #5b21b6; font-size: 1.1em; font-weight: 500;">
                                {{ __('home.stats_countries_text') }}</div>
                        </div>

                        <!-- Stat 3 -->
                        <div
                            style="background: linear-gradient(135deg, #ecfdf5 0%, #a7f3d0 100%); padding: 40px; text-align: center; border-radius: 20px; box-shadow: 0 10px 25px rgba(167, 243, 208, 0.3);">
                            <div
                                style="width: 60px; height: 60px; background: #10b981; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(16, 185, 129, 0.4);">
                                <div style="width: 24px; height: 24px; background: white; border-radius: 2px;"></div>
                            </div>
                            <div style="font-size: 3em; font-weight: 700; color: #059669; margin-bottom: 10px;">
                                {{ __('home.stats_speakers_number') }}
                            </div>
                            <div style="color: #065f46; font-size: 1.1em; font-weight: 500;">
                                {{ __('home.stats_speakers_text') }}</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Distinguished Speakers Section -->
            <section style="padding: 80px 0; background: #f8fafc;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <h2
                        style="text-align: center; font-size: 2.5em; font-weight: 700; color: #2d3748; margin-bottom: 60px;">
                        {{ __('home.special') }}
                    </h2>

                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">

                        @foreach ($speakers as $speaker)
                            <div
                                style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                                <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                    <img src="{{ asset($speaker->image) }}"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                    <div style="position: relative; z-index: 2;">

                                    </div>
                                </div>
                                <div style="padding: 20px; background: white;">
                                    <h4
                                        style="color: #2d3748; font-size: 1.2em; font-weight: 600; margin: 0 0 8px 0; font-family: 'Cairo', sans-serif;">
                                        {{ $speaker->name_en }}</h4>
                                    <p style="color: #4fd1c7; margin: 0; font-size: 1em; font-weight: 500;">
                                        {{ $speaker->name_ar }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
            </section>
        </div>

        <div id="program2" class="page">
            <style>
                .program-container {
                    max-width: 1200px;
                    margin: 0 auto;
                    background: white;
                    border-radius: 20px;
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                    overflow: hidden;
                }

                .header-section {
                    /* background: linear-gradient(135deg, #2DD4BF 0%, #3B82F6 50%, #8B5CF6 100%); */
                    /* padding: 40px 30px; */
                    text-align: center;
                    /* color: white; */
                }

                /* .logo {
                    width: 100px;
                    height: 100px;
                    margin: 0 auto 20px;
                    background: white;
                    border-radius: 15px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                } */

                .logo svg {
                    width: 60px;
                    height: 60px;
                    fill: #2DD4BF;
                }

                .main-title {
                    font-size: 3rem;
                    font-weight: 700;
                    margin-bottom: 15px;
                    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                }

                .subtitle {
                    font-size: 1.2rem;
                    opacity: 0.9;
                    margin-bottom: 30px;
                    line-height: 1.6;
                }

                .stats-row {
                    display: flex;
                    justify-content: center;
                    gap: 40px;
                    flex-wrap: wrap;
                }

                .stat-item {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    background: rgba(255, 255, 255, 0.1);
                    padding: 15px 25px;
                    border-radius: 50px;
                    backdrop-filter: blur(10px);
                }

                .stat-icon {
                    width: 24px;
                    height: 24px;
                    fill: white;
                }

                .content-section {
                    padding: 50px 30px;
                }

                .table-container {
                    background: #f8fafc;
                    border-radius: 15px;
                    overflow: hidden;
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
                }

                .table-header {
                    background: linear-gradient(135deg, #1e293b, #334155);
                    color: white;
                    padding: 20px;
                    display: grid;
                    grid-template-columns: 2fr 2fr 3fr;
                    gap: 20px;
                    font-weight: 600;
                    font-size: 1.1rem;
                }

                .table-row {
                    display: grid;
                    grid-template-columns: 2fr 2fr 3fr;
                    gap: 20px;
                    padding: 25px 20px;
                    border-bottom: 1px solid #e2e8f0;
                    transition: all 0.3s ease;
                }

                .table-row:hover {
                    background: #f1f5f9;
                    transform: translateY(-2px);
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
                }

                .table-row:last-child {
                    border-bottom: none;
                }

                .topic-en {
                    font-weight: 600;
                    color: #1e293b;
                    margin-bottom: 8px;
                    line-height: 1.4;
                }

                .topic-ar {
                    color: #64748b;
                    font-size: 0.95rem;
                    line-height: 1.5;
                }

                .speakers {
                    color: #3b82f6;
                    font-weight: 500;
                    line-height: 1.6;
                }

                .additional-info {
                    background: linear-gradient(135deg, #fef3c7, #fde68a);
                    margin-top: 40px;
                    padding: 25px;
                    border-radius: 15px;
                    border-left: 5px solid #f59e0b;
                }

                .additional-info h3 {
                    color: #92400e;
                    font-size: 1.3rem;
                    margin-bottom: 15px;
                    font-weight: 600;
                }

                .additional-info p {
                    color: #78350f;
                    line-height: 1.7;
                    font-size: 1.05rem;
                }

                @media (max-width: 768px) {
                    .main-title {
                        font-size: 2rem;
                    }

                    .stats-row {
                        gap: 20px;
                    }

                    .stat-item {
                        padding: 12px 20px;
                    }

                    .table-header,
                    .table-row {
                        grid-template-columns: 1fr;
                        gap: 15px;
                    }

                    .content-section {
                        padding: 30px 20px;
                    }

                    .header-section {
                        padding: 30px 20px;
                    }
                }

                .fade-in {
                    animation: fadeInUp 0.8s ease-out;
                }

                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translateY(30px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
            </style>
            </head>


            <div class="program-container fade-in">
                <div class="header-section"
                    style="margin-top: 90px; transform: translateY(10%);
     display: flex; flex-direction: column; align-items: center;">
                    <div class="logo" style="transform: translateY(10%);">
                        <img src="assets/logo.png" alt="logo"
                            style="width:250px; height:100px; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,.15); object-fit:cover;">
                    </div>
                    <h1 class="main-title" style="transform: translateY(10%);">{{ __('home.forum_program') }}</h1>
                    <p class="subtitle" style="transform: translateY(10%);">{{ __('home.conference_agenda') }}
                    </p>

                    <div class="stats-row" style="background-color: #1abc9c; width: 80%;">
                        <div class="stat-item">
                            <svg class="stat-icon" viewBox="0 0 24 24">
                                <path
                                    d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" />
                            </svg>
                            <span>{{ __('home.conference_date') }}</span>
                        </div>
                        <div class="stat-item">
                            <svg class="stat-icon" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                            <span>{{ __('home.conference_duration') }}</span>
                        </div>
                        <div class="stat-item">
                            <svg class="stat-icon" viewBox="0 0 24 24">
                                <path
                                    d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zM4 18v-6h2.5l6 8h2L7 12V6H4.5l7-3V1.5L3 6v12h1zm9.5-3c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" />
                            </svg>
                            <span>{{ __('home.conference_sessions') }}</span>
                        </div>
                    </div>
                </div>

                <div class="content-section">
                    <div class="table-container">
                        <div class="table-header">
                            <div>الموضوع (عربي)</div>
                            <div>TOPIC (ENGLISH)</div>
                            <div>المتحدثون / SPEAKERS</div>
                        </div>

                        <div class="table-row">
                            <div>
                                <div class="topic-ar">الاقتصاد العلاجي: مستقبل مدن الصحة والعافية</div>
                            </div>
                            <div>
                                <div class="topic-en">Therapeutic Economy: The Future of Health and Wellness Cities
                                </div>
                            </div>
                            <div class="speakers">Viana Hassan (فيانا حسن), Mohammed Aldukhaini (محمد الدخيني)</div>
                        </div>

                        <div class="table-row">
                            <div>
                                <div class="topic-ar">السياحة العلاجية في المملكة: الفرص والتحديات</div>
                            </div>
                            <div>
                                <div class="topic-en">Medical Tourism in the Kingdom: Opportunities and Challenges
                                </div>
                            </div>
                            <div class="speakers">Mohammed Aldar (محمد الدار), Abdelghani Rozy (عبدالغني روزي)</div>
                        </div>

                        <div class="table-row">
                            <div>
                                <div class="topic-ar">استراتيجيات التسويق الرقمي للسياحة العلاجية</div>
                            </div>
                            <div>
                                <div class="topic-en">Digital Marketing Strategies for Medical Tourism</div>
                            </div>
                            <div class="speakers">Sultan Alsaadoon (سلطان السعدون), Talal Almaliki (طلال المالكي)
                            </div>
                        </div>

                        <div class="table-row">
                            <div>
                                <div class="topic-ar">تسويق الطائف كوجهة عالمية للسياحة العلاجية</div>
                            </div>
                            <div>
                                <div class="topic-en">Marketing Taif as a Global Medical Tourism Destination</div>
                            </div>
                            <div class="speakers">Saud Bin Nahar (سعود بن نهار), Christoph Weigel (كريستوف ويجل)
                            </div>
                        </div>

                        <div class="table-row">
                            <div>
                                <div class="topic-ar">الاستثمار في السياحة العلاجية: الفرص والمخاطر المالية</div>
                            </div>
                            <div>
                                <div class="topic-en">Investment in Medical Tourism: Financial Opportunities and
                                    Risks</div>
                            </div>
                            <div class="speakers">Mohammed Aljahani (محمد الجهني), Laszlo Puczko (لازلو بوتسكو)
                            </div>
                        </div>

                        <div class="table-row">
                            <div>
                                <div class="topic-ar">تجارب دولية ناجحة في السياحة العلاجية: كيف نجحوا؟</div>
                            </div>
                            <div>
                                <div class="topic-en">Successful International Experiences in Medical Tourism: How
                                    Did They Succeed?</div>
                            </div>
                            <div class="speakers">Talal Althumali (طلال الثمالي), Ahmed Moshli (أحمد مسحلي)</div>
                        </div>

                        <div class="table-row">
                            <div>
                                <div class="topic-ar">ما الذي يجعل الوجهة جذابة للسياح العلاجيين؟</div>
                            </div>
                            <div>
                                <div class="topic-en">What Makes a Destination Attractive to Medical Tourists?</div>
                            </div>
                            <div class="speakers">Christian Fadi El-khouri (كريستيان فادي الخوري), Prem Jagyasi
                                (بريم جاجياسي)</div>
                        </div>

                        <div class="table-row">
                            <div>
                                <div class="topic-ar">المعايير الدولية للجودة والترخيص للمراكز الطبية</div>
                            </div>
                            <div>
                                <div class="topic-en">International Quality Standards and Licensing for Medical
                                    Centers</div>
                            </div>
                            <div class="speakers">Dr. Awad Alomari (د. عوض العمري), Dorit von der Osten (دوريت فون
                                دير أوستن)</div>
                        </div>
                    </div>

                    <div class="additional-info">
                        <h3>{{ __('home.additional_info') }}</h3>
                        <p>
                            {{ __('home.announce') }}</p>
                    </div>
                </div>
            </div>
        </div>





        <div id="speakers" class="page">
            <section style=" padding: 80px 0; text-align: center;">
                <img src="assets/logo.png" alt="logo"
                    style="width:250px; height:100px; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,.15); object-fit:cover;">

                <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <h1
                        style="font-size: 3.5em; 
                        font-weight: 700; margin: 0 0 20px 0; 
                        text-shadow: 0 2px 4px rgba(0,0,0,0.3);">
                        {{ __('home.special') }}
                    </h1>
                    <p
                        style="font-size: 1.2em; font-weight: 300; margin: 0 0 40px 0; opacity: 0.95; line-height: 1.6;">
                        {{ __('home.experts') }}</p>

                    <!-- Event Details -->
                    <!-- <div
                        style="display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap; margin-top: 40px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div
                                style="background: rgba(255,255,255,0.2); padding: 8px; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <div style="width: 16px; height: 16px; background: white; border-radius: 2px;"></div>
                            </div>
                            <div>
                                <div style="font-size: 0.9em; opacity: 0.8;">أكثر من 500 مشارك</div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div
                                style="background: rgba(255,255,255,0.2); padding: 8px; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <div style="width: 16px; height: 16px; background: white; border-radius: 50%;"></div>
                            </div>
                            <div>
                                <div style="font-size: 0.9em; opacity: 0.8;">8 دولة مختلفة</div>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div
                                style="background: rgba(255,255,255,0.2); padding: 8px; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <div style="width: 16px; height: 16px; background: white; border-radius: 2px;"></div>
                            </div>
                            <div>
                                <div style="font-size: 0.9em; opacity: 0.8;">16 متحدث مميز</div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Location and Date -->
                    <!-- <div style="margin-top: 30px; display: flex; justify-content: center; gap: 60px; flex-wrap: wrap;">
                        <div style="text-align: center;">
                            <div style="font-size: 1.1em; font-weight: 600;">الطائف، المملكة العربية السعودية</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-size: 1.1em; font-weight: 600;">يوليو 2025</div>
                        </div>
                    </div> -->
                </div>
            </section>

            <!-- Statistics Section -->
            <section style="padding: 60px 0; background: white;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">

                        <!-- Stat 1 -->
                        <div
                            style="background: linear-gradient(135deg, #fef5e7 0%, #fed7aa 100%); padding: 40px; text-align: center; border-radius: 20px; box-shadow: 0 10px 25px rgba(254, 215, 170, 0.3);">
                            <div
                                style="width: 60px; height: 60px; background: #f97316; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(249, 115, 22, 0.4);">
                                <div style="width: 24px; height: 24px; background: white; border-radius: 50%;"></div>
                            </div>
                            <div style="font-size: 3em; font-weight: 700; color: #ea580c; margin-bottom: 10px;">
                                {{ __('home.stats_experience_number') }}
                            </div>
                            <div style="color: #9a3412; font-size: 1.1em; font-weight: 500;">
                                {{ __('home.stats_experience_text') }}</div>
                        </div>

                        <!-- Stat 2 -->
                        <div
                            style="background: linear-gradient(135deg, #ede9fe 0%, #c4b5fd 100%); padding: 40px; text-align: center; border-radius: 20px; box-shadow: 0 10px 25px rgba(196, 181, 253, 0.3);">
                            <div
                                style="width: 60px; height: 60px; background: #8b5cf6; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(139, 92, 246, 0.4);">
                                <div style="width: 24px; height: 24px; background: white; border-radius: 4px;"></div>
                            </div>
                            <div style="font-size: 3em; font-weight: 700; color: #7c3aed; margin-bottom: 10px;">
                                {{ __('home.stats_countries_number') }}</div>
                            <div style="color: #5b21b6; font-size: 1.1em; font-weight: 500;">
                                {{ __('home.stats_countries_text') }}</div>
                        </div>

                        <!-- Stat 3 -->
                        <div
                            style="background: linear-gradient(135deg, #ecfdf5 0%, #a7f3d0 100%); padding: 40px; text-align: center; border-radius: 20px; box-shadow: 0 10px 25px rgba(167, 243, 208, 0.3);">
                            <div
                                style="width: 60px; height: 60px; background: #10b981; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(16, 185, 129, 0.4);">
                                <div style="width: 24px; height: 24px; background: white; border-radius: 2px;"></div>
                            </div>
                            <div style="font-size: 3em; font-weight: 700; color: #059669; margin-bottom: 10px;">
                                {{ __('home.stats_speakers_number') }}
                            </div>
                            <div style="color: #065f46; font-size: 1.1em; font-weight: 500;">
                                {{ __('home.stats_speakers_text') }}</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Distinguished Speakers Section -->
            <section style="padding: 80px 0; background: #f8fafc;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <h2
                        style="text-align: center; font-size: 2.5em; font-weight: 700; color: #2d3748; margin-bottom: 60px;">
                        المتحدثون المميزون
                    </h2>

                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">

                        <!-- Abdelghani Rozy -->

                        @foreach ($speakers as $speaker)
                            <div
                                style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                                <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                    <img src="{{ asset($speaker->image) }}"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                    <div style="position: relative; z-index: 2;">

                                    </div>
                                </div>
                                <div style="padding: 20px; background: white;">
                                    <h4
                                        style="color: #2d3748; font-size: 1.2em; font-weight: 600; margin: 0 0 8px 0; font-family: 'Cairo', sans-serif;">
                                        {{ $speaker->name_en }}</h4>
                                    <p style="color: #4fd1c7; margin: 0; font-size: 1em; font-weight: 500;">
                                        {{ $speaker->name_ar }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                        <!-- Mohammed Aldar -->
                        {{-- <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>Mohammed Aldar</h4>
                                <p style="color: #4fd1c7;">محمد الدار</p>
                            </div>
                        </div>

                        <!-- Mohammed Aldukhaini -->
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>Mohammed Aldukhaini</h4>
                                <p style="color: #4fd1c7;">محمد الدخيني</p>
                            </div>
                        </div>

                        <!-- Viana Hassan -->
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>Viana Hassan</h4>
                                <p style="color: #4fd1c7;">فيانا حسن</p>
                            </div>
                        </div>

                        <!-- Christoph Weigel -->
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>Christoph Weigel</h4>
                                <p style="color: #4fd1c7;">كريستوف ويجل</p>
                            </div>
                        </div>

                        <!-- Sultan Alsaadoon -->
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>Sultan Alsaadoon</h4>
                                <p style="color: #4fd1c7;">سلطان السعدون</p>
                            </div>
                        </div>

                        <!-- Talal Almaliki -->
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>Talal Almaliki</h4>
                                <p style="color: #4fd1c7;">طلال المالكي</p>
                            </div>
                        </div>

                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>HRH Prince Saud bin Nahar</h4>
                                <p style="color: #4fd1c7;">سمو الأمير سعود بن نهار</p>
                            </div>
                        </div>

                        <!-- Prem Jagyasi -->
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>Prem Jagyasi</h4>
                                <p style="color: #4fd1c7;">بريم جاجياسي</p>
                            </div>
                        </div>


                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>Dr. Awad Alomari</h4>
                                <p style="color: #4fd1c7;">د. عوض العمري</p>
                            </div>
                        </div>
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>Dorit von der Osten</h4>
                                <p style="color: #4fd1c7;">دوريت فون دير أوستن</p>
                            </div>
                        </div>
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4>Christian Fadi El-khouri </h4>
                                <p style="color: #4fd1c7;">كريستيان فادي الخوري </p>
                            </div>
                        </div>
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4> Mohammed Aljahani
                                </h4>
                                <p style="color: #4fd1c7;"> محمد الجهني

                                </p>
                            </div>
                        </div>
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4> Laszlo Puczko

                                </h4>
                                <p style="color: #4fd1c7;"> لازلو بوتسكو



                                </p>
                            </div>
                        </div>
                        <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4> Talal Althumali


                                </h4>
                                <p style="color: #4fd1c7;"> طلال الثمالي





                                </p>
                            </div>
                        </div> --}}
                        {{-- <div
                            style="background: white; border-radius: 20px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border: 3px solid #4fd1c7; overflow: hidden; transition: all 0.3s ease; position: relative;">
                            <div style="background: #f7fafc; padding: 30px 20px 20px; position: relative;">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 120'%3E%3Cpath d='M0,0 Q50,30 100,0 T200,0 L200,120 Q150,90 100,120 T0,120 Z' fill='%23e2e8f0'/%3E%3C/svg%3E"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; opacity: 0.3;" />
                                <div style="position: relative; z-index: 2;">
                                    <div
                                        style="width: 80px; height: 80px; background: #e2e8f0; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center;">
                                        <svg viewBox="0 0 200 200" style="width: 60px; height: 60px;">
                                            <path
                                                d="M50,50 Q100,20 150,50 Q180,100 150,150 Q100,180 50,150 Q20,100 50,50 Z"
                                                fill="#cbd5e0" opacity="0.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="padding: 20px; background: white;">
                                <h4> Ahmed Moshli



                                </h4>
                                <p style="color: #4fd1c7;"> أحمد مسحلي







                                </p>
                            </div>
                        </div> --}}
            </section>
        </div>

        <style>
            .main-title {
                text-align: center;
                font-size: 3em;
                font-weight: bold;
                color: #2c3e50;
                margin-bottom: 50px;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            }

            .test {
                display: flex !important;
                flex-direction: column;
                gap: 30px !important;
                /* grid-template-columns: repeat(auto-fit, minmax(700px, 1fr)); */
                padding: 20px;
                /* مسافة داخلية */
            }


            .attendee-card {
                background: white;
                border-radius: 20px;
                padding: 30px;
                box-shadow: 0 30px 35px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .attendee-card::before {
                content: '';
                position: absolute;
                top: 0;
                right: 0;
                width: 100%;
                height: 6px;
                border-radius: 20px 20px 0 0;
            }

            .attendee-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 50px 50px rgba(0, 0, 0, 0.15);
            }

            .card-header {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
                gap: 15px;
            }

            .card-icon {
                width: 50px;
                height: 50px;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 24px;
                color: white;
                flex-shrink: 0;
            }

            .card-title {
                font-size: 1.4em;
                font-weight: bold;
                color: #2c3e50;
                line-height: 1.3;
            }

            .card-content {
                color: #555;
                line-height: 1.8;
                font-size: 1.05em;
            }

            /* Color themes for each card */
            .attendee-card:nth-child(1)::before {
                background: linear-gradient(90deg, #1abc9c, #16a085);
            }

            .attendee-card:nth-child(1) .card-icon {
                background: linear-gradient(135deg, #1abc9c, #16a085);
            }

            .attendee-card:nth-child(2)::before {
                background: linear-gradient(90deg, #9b59b6, #8e44ad);
            }

            .attendee-card:nth-child(2) .card-icon {
                background: linear-gradient(135deg, #9b59b6, #8e44ad);
            }

            .attendee-card:nth-child(3)::before {
                background: linear-gradient(90deg, #e74c3c, #c0392b);
            }

            .attendee-card:nth-child(3) .card-icon {
                background: linear-gradient(135deg, #e74c3c, #c0392b);
            }

            .attendee-card:nth-child(4)::before {
                background: linear-gradient(90deg, #f39c12, #d68910);
            }

            .attendee-card:nth-child(4) .card-icon {
                background: linear-gradient(135deg, #f39c12, #d68910);
            }

            .attendee-card:nth-child(5)::before {
                background: linear-gradient(90deg, #3498db, #2980b9);
            }

            .attendee-card:nth-child(5) .card-icon {
                background: linear-gradient(135deg, #3498db, #2980b9);
            }

            .attendee-card:nth-child(6)::before {
                background: linear-gradient(90deg, #2ecc71, #27ae60);
            }

            .attendee-card:nth-child(6) .card-icon {
                background: linear-gradient(135deg, #2ecc71, #27ae60);
            }

            .attendee-card:nth-child(7)::before {
                background: linear-gradient(90deg, #e67e22, #d35400);
            }

            .attendee-card:nth-child(7) .card-icon {
                background: linear-gradient(135deg, #e67e22, #d35400);
            }

            .attendee-card:nth-child(8)::before {
                background: linear-gradient(90deg, #34495e, #2c3e50);
            }

            .attendee-card:nth-child(8) .card-icon {
                background: linear-gradient(135deg, #34495e, #2c3e50);
            }

            .attendee-card:nth-child(9)::before {
                background: linear-gradient(90deg, #ff6b6b, #ee5a52);
            }

            .attendee-card:nth-child(9) .card-icon {
                background: linear-gradient(135deg, #ff6b6b, #ee5a52);
            }

            .attendee-card:nth-child(10)::before {
                background: linear-gradient(90deg, #4ecdc4, #44a08d);
            }

            .attendee-card:nth-child(10) .card-icon {
                background: linear-gradient(135deg, #4ecdc4, #44a08d);
            }

            .attendee-card:nth-child(11)::before {
                background: linear-gradient(90deg, #667eea, #764ba2);
            }

            .attendee-card:nth-child(11) .card-icon {
                background: linear-gradient(135deg, #667eea, #764ba2);
            }

            @media (max-width: 768px) {
                .attendees {
                    grid-template-columns: 1fr;
                }

                .main-title {
                    font-size: 2.2em;
                }

                .attendee-card {
                    padding: 20px;
                }

                .card-title {
                    font-size: 1.2em;
                }
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .attendee-card {
                animation: fadeInUp 0.6s ease forwards;
            }

            .attendee-card:nth-child(odd) {
                animation-delay: 0.1s;
            }

            .attendee-card:nth-child(even) {
                animation-delay: 0.2s;
            }
        </style>


        <div id="attendees" class="page">
            <div class="test">
                <div class="logo" style="width: 100%; text-align: center; padding-top: 60px;">
                    <img src="assets/logo.png" alt="logo"
                        style="width:250px; 
             height:100px; border-radius:12px;
              box-shadow:0 4px 10px rgba(0,0,0,.15); object-fit:cover;">
                </div>
                <h1 class="main-title">{{ __('home.target_audiences') }}</h1>

                <div class="attendee-card">
                    <div class="card-header">
                        <div class="card-icon">🩺</div>
                        <h2 class="card-title">{{ __('home.healthcare_providers') }}</h2>
                    </div>
                    <div class="card-content">
                        {{ __('home.healthcare_providers_desc') }}
                    </div>
                </div>

                <div class="attendee-card">
                    <div class="card-header">
                        <div class="card-icon">✈️</div>
                        <h2 class="card-title">{{ __('home.travel_agencies') }}</h2>
                    </div>
                    <div class="card-content">
                        {{ __('home.travel_agencies_desc') }}
                    </div>
                </div>

                <div class="attendee-card">
                    <div class="card-header">
                        <div class="card-icon">🏥</div>
                        <h2 class="card-title">{{ __('home.medical_practitioners') }}</h2>
                    </div>
                    <div class="card-content">
                        {{ __('home.medical_practitioners_desc') }}
                    </div>
                </div>

                <div class="attendee-card">
                    <div class="card-header">
                        <div class="card-icon">🎓</div>
                        <h2 class="card-title">{{ __('home.universities') }}</h2>
                    </div>
                    <div class="card-content">
                        {{ __('home.universities_desc') }}
                    </div>
                </div>

                <div class="attendee-card">
                    <div class="card-header">
                        <div class="card-icon">🏛️</div>
                        <h2 class="card-title">{{ __('home.government_representatives') }}</h2>
                    </div>
                    <div class="card-content">
                        {{ __('home.government_representatives_desc') }}
                    </div>
                </div>

                <div class="attendee-card">
                    <div class="card-header">
                        <div class="card-icon">💼</div>
                        <h2 class="card-title">{{ __('home.investors_entrepreneurs') }}</h2>
                    </div>
                    <div class="card-content">
                        {{ __('home.investors_entrepreneurs_desc') }}
                    </div>
                </div>

                <div class="attendee-card">
                    <div class="card-header">
                        <div class="card-icon">🚀</div>
                        <h2 class="card-title">{{ __('home.startups_tech') }}</h2>
                    </div>
                    <div class="card-content">
                        {{ __('home.startups_tech_desc') }}
                    </div>
                </div>

                <div class="attendee-card">
                    <div class="card-header">
                        <div class="card-icon">🤝</div>
                        <h2 class="card-title">{{ __('home.support_service_providers') }}</h2>
                    </div>
                    <div class="card-content">
                        {{ __('home.support_service_providers_desc') }}
                    </div>
                </div>

                <div class="attendee-card">
                    <div class="card-header">
                        <div class="card-icon">🏖️</div>
                        <h2 class="card-title">{{ __('home.health_resorts') }}</h2>
                    </div>
                    <div class="card-content">
                        {{ __('home.health_resorts_desc') }}
                    </div>
                </div>

                <div class="attendee-card">
                    <div class="card-header">
                        <div class="card-icon">🛡️</div>
                        <h2 class="card-title">{{ __('home.insurance_companies') }}</h2>
                    </div>
                    <div class="card-content">
                        {{ __('home.insurance_companies_desc') }}
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Registration Page -->
        <div id="registration" class="page">
            <style>
                /* .container {
                    max-width: 800px;
                    margin: 0 auto;
                    background: white;
                    border-radius: 20px;
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                    overflow: hidden;
                } */

                .header {
                    /* background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); */
                    padding: 40px 30px;
                    text-align: center;
                    /* color: white; */

                    margin-top: 150px;
                }

                /* .logo {
                    width: 80px;
                    height: 80px;
                    background: white;
                    border-radius: 50%;
                    margin: 0 auto 20px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 24px;
                    color: #4facfe;
                } */

                .header h1 {
                    font-size: 2.5rem;
                    margin-bottom: 10px;
                    font-weight: bold;
                }

                .header p {
                    font-size: 1.1rem;
                    opacity: 0.9;
                    line-height: 1.6;
                }

                .form-section {
                    padding: 40px 30px;
                }

                .section-title {
                    font-size: 1.8rem;
                    color: #333;
                    margin-bottom: 30px;
                    text-align: center;
                    position: relative;
                }

                .section-title::after {
                    content: '';
                    width: 60px;
                    height: 3px;
                    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
                    position: absolute;
                    bottom: -10px;
                    left: 50%;
                    transform: translateX(-50%);
                }

                .form-grid {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 20px;
                    margin-bottom: 20px;
                }

                .form-group {
                    margin-bottom: 20px;
                }

                .form-group.full-width {
                    grid-column: 1 / -1;
                }

                label {
                    display: block;
                    margin-bottom: 8px;
                    font-weight: 600;
                    color: #333;
                }

                .required {
                    color: #e74c3c;
                }

                input,
                select {
                    width: 100%;
                    padding: 12px 15px;
                    border: 2px solid #e1e5e9;
                    border-radius: 10px;
                    font-size: 16px;
                    transition: all 0.3s ease;
                    background: #f8f9fa;
                }

                input:focus,
                select:focus {
                    outline: none;
                    border-color: #4facfe;
                    background: white;
                    box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.1);
                }

                .gender-group {
                    display: flex;
                    gap: 20px;
                    margin-top: 8px;
                }

                .radio-option {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    cursor: pointer;
                }

                .radio-option input[type="radio"] {
                    width: auto;
                    margin: 0;
                }

                .checkbox-group {
                    display: flex;
                    align-items: flex-start;
                    gap: 10px;
                    margin: 20px 0;
                    padding: 15px;
                    background: #f8f9fa;
                    border-radius: 10px;
                }

                .checkbox-group input[type="checkbox"] {
                    width: auto;
                    margin: 0;
                    margin-top: 2px;
                }

                .submit-btn {
                    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
                    color: white;
                    padding: 15px 40px;
                    border: none;
                    border-radius: 50px;
                    font-size: 18px;
                    font-weight: bold;
                    cursor: pointer;
                    width: 100%;
                    transition: all 0.3s ease;
                    margin-top: 20px;
                }

                .submit-btn:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 10px 20px rgba(79, 172, 254, 0.3);
                }

                .terms-section {
                    margin-top: 40px;
                    padding: 30px;
                    background: #f8f9fa;
                    border-radius: 15px;
                }

                .terms-title {
                    font-size: 1.5rem;
                    color: #333;
                    margin-bottom: 20px;
                    text-align: center;
                }

                .terms-list {
                    list-style: none;
                    padding: 0;
                }

                .terms-list li {
                    padding: 10px 0;
                    border-bottom: 1px solid #e1e5e9;
                    display: flex;
                    align-items: flex-start;
                    gap: 15px;
                }

                .terms-list li:last-child {
                    border-bottom: none;
                }

                .term-number {
                    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
                    color: white;
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: bold;
                    font-size: 14px;
                    flex-shrink: 0;
                }

                @media (max-width: 768px) {
                    .form-grid {
                        grid-template-columns: 1fr;
                    }

                    .header h1 {
                        font-size: 2rem;
                    }

                    .container {
                        margin: 0 10px;
                    }

                    .form-section,
                    .header {
                        padding: 30px 20px;
                    }
                }

                .success-message {
                    display: none;
                    background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
                    color: white;
                    padding: 20px;
                    border-radius: 10px;
                    text-align: center;
                    margin-top: 20px;
                    font-weight: bold;
                }
            </style>
            </head>

            <div class="container">
                <div class="header">
                    <div class="logo">
                        <img src="assets/logo.png" alt="logo"
                            style="width:250px; height:100px; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,.15); object-fit:cover;">
                    </div>
                    <h1>{{ __('home.register_now') }}</h1>
                    <p>{{ __('home.registration_subtitle') }}</p>
                </div>

                <div class="form-section">
                    <h2 class="section-title">{{ __('home.registration_form') }}</h2>

                    <form id="registrationForm" method="post" action="{{ route('participations') }}">
                        @csrf
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="firstName">{{ __('home.first_name') }} <span
                                        class="required">*</span></label>
                                <input name="firstName" type="text" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="middleName">{{ __('home.middle_name') }} <span
                                        class="required">*</span></label>
                                <input name="middleName" type="text" id="middleName" name="middleName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">{{ __('home.last_name') }} <span
                                        class="required">*</span></label>
                                <input name="lastName" type="text" id="lastName" name="lastName" required>
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="email">{{ __('home.email') }} <span class="required">*</span></label>
                                <input name="email" type="email" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="phone">{{ __('home.phone') }} <span class="required">*</span></label>
                                <input name="phone" type="tel" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="organization">{{ __('home.organization') }} <span
                                        class="required">*</span></label>
                                <input name="organization" type="text" id="organization" name="organization"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="passport">{{ __('home.passport_number') }} <span
                                        class="required">*</span></label>
                                <input name="passport" type="text" id="passport" name="passport" required>
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="country">{{ __('home.country') }} <span
                                        class="required">*</span></label>
                                <input name="country" type="text" id="country" name="country" required>
                            </div>
                            <div class="form-group">
                                <label for="city">{{ __('home.city') }} <span class="required">*</span></label>
                                <input name="city" type="text" id="city" name="city" required>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="specialization">{{ __('home.specialization') }} <span
                                    class="required">*</span></label>
                            <input name="specialization" type="text" id="specialization" name="specialization"
                                required>
                        </div>

                        <div class="form-group full-width">
                            <label>{{ __('home.gender') }}</label>
                            <div class="gender-group">
                                <div class="radio-option">
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label for="male">{{ __('home.male') }}</label>
                                </div>
                                <div class="radio-option">
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label for="female">{{ __('home.female') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="checkbox-group">
                            <input name="terms" type="checkbox" id="terms" name="terms" required>
                            <label for="terms">{{ __('home.agree_terms') }} <span
                                    class="required">*</span></label>
                        </div>

                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            {{ __('home.submit_registration') }}
                        </button>

                        <div id="successMessage" class="success-message">
                            {{ __('home.success_message') }}
                        </div>
                    </form>
                </div>

                <div class="terms-section">
                    <h3 class="terms-title">{{ __('home.terms_conditions') }}</h3>
                    <ul class="terms-list">
                        <li>
                            <div class="term-number">1</div>
                            <div>{{ __('home.term_1') }}</div>
                        </li>
                        <li>
                            <div class="term-number">2</div>
                            <div>{{ __('home.term_2') }}</div>
                        </li>
                        <li>
                            <div class="term-number">3</div>
                            <div>{{ __('home.term_3') }}</div>
                        </li>
                        <li>
                            <div class="term-number">4</div>
                            <div>{{ __('home.term_4') }}</div>
                        </li>
                    </ul>
                </div>
            </div>

            <script>
                // document.getElementById('registrationForm').addEventListener('submit', function (e) {
                //     e.preventDefault();

                //     // Basic validation
                //     const email = document.getElementById('email').value;
                //     const emailConfirm = document.getElementById('emailConfirm').value;
                //     const terms = document.getElementById('terms').checked;

                //     if (email !== emailConfirm) {
                //         alert('البريد الإلكتروني وتأكيد البريد الإلكتروني غير متطابقين');
                //         return;
                //     }

                //     if (!terms) {
                //         alert('يجب الموافقة على الشروط والأحكام');
                //         return;
                //     }

                //     // Simulate form submission
                //     const submitBtn = document.querySelector('.submit-btn');
                //     const successMessage = document.getElementById('successMessage');

                //     submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري الإرسال...';
                //     submitBtn.disabled = true;

                //     setTimeout(() => {
                //         successMessage.style.display = 'block';
                //         submitBtn.innerHTML = '<i class="fas fa-check"></i> تم الإرسال';
                //         submitBtn.style.background = 'linear-gradient(135deg, #11998e 0%, #38ef7d 100%)';

                //         // Scroll to success message
                //         successMessage.scrollIntoView({ behavior: 'smooth' });
                //     }, 2000);
                // });
            </script>
        </div>

        <!-- Sponsors Pages -->
        <div id="sponsors" class="page">
            <section class="page-hero"
                style="background: linear-gradient(135deg, #4fd1c7 0%, #63b3ed 100%); padding: 80px 0; text-align: center; position: relative; overflow: hidden;">
                <!-- Medical Tourism Logo -->
                <div style="position: absolute; top: 20px; right: 20px; opacity: 0.1;">
                    <!-- SVG content can go here -->
                </div>

                <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <!-- Logo -->
                    <div style="margin-bottom: 30px; display: flex; justify-content: center;">
                        <div
                            style="width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <img src="assets/logo.png"
                                style="width: 200px; height: 100px; box-shadow:0 4px 10px rgba(0,0,0,.15);"
                                alt="logo">
                        </div>
                    </div>

                    <h1
                        style="color: white; font-size: 3.5rem; font-weight: 700; margin: 0 0 20px 0; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        {{ __('home.sponsors') }}
                    </h1>
                    <p
                        style="color: rgba(255,255,255,0.9); font-size: 1.3rem; font-weight: 400; margin: 0; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                        {{ __('home.sponsors_subtitle') }}
                    </p>
                </div>
            </section>

            <!-- Content Section -->
            <section class="content-section" style="padding: 100px 0; background-color: #f8f9fa;">
                <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

                    <!-- Coming Soon Card -->
                    <div
                        style="background: white; border-radius: 20px; padding: 60px 40px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 50px; position: relative; overflow: hidden;">

                        <!-- Background Pattern -->
                        <div
                            style="position: absolute; top: -50px; left: -50px; width: 100px; height: 100px; background: linear-gradient(45deg, #4fd1c7, #63b3ed); border-radius: 50%; opacity: 0.1;">
                        </div>
                        <div
                            style="position: absolute; bottom: -30px; right: -30px; width: 60px; height: 60px; background: linear-gradient(45deg, #63b3ed, #4fd1c7); border-radius: 50%; opacity: 0.1;">
                        </div>

                        <!-- Icon -->
                        <div
                            style="width: 80px; height: 80px; background: linear-gradient(135deg, #e6fffa 0%, #b2f5ea 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px auto; border: 3px solid #4fd1c7;">
                            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#4fd1c7"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2L2 7v10c0 5.55 3.84 10 9 9 5.16-1 9-3.45 9-9V7l-10-5z" />
                                <path d="M8 11l2 2 4-4" />
                            </svg>
                        </div>

                        <h2
                            style="color: #2d3748; font-size: 2.5rem; font-weight: 700; margin: 0 0 20px 0; background: linear-gradient(135deg, #4fd1c7, #63b3ed); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                            {{ __('home.coming_soon') }}
                        </h2>

                        <p
                            style="color: #718096; font-size: 1.2rem; line-height: 1.8; margin: 0; max-width: 500px; margin: 0 auto 20px auto;">
                            {{ __('home.coming_soon_description') }}
                        </p>
                    </div>

                    <!-- Additional Info Cards -->

                </div>
            </section>
        </div>

        <style>
            #sponsorship {
                max-width: 1200px;
                margin: 0 auto;
                background: white;
                border-radius: 20px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                overflow: hidden;
            }

            .header {
                /* background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%); */
                /* color: white; */
                text-align: center;
                padding: 40px 20px;
                position: relative;
            }

            /* .logo {
                width: 80px;
                height: 80px;
                background: linear-gradient(45deg, #f39c12, #e67e22);
                border-radius: 50%;
                margin: 0 auto 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 24px;
                font-weight: bold;
                border: 3px solid rgba(255, 255, 255, 0.3);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            } */

            .header h1 {
                font-size: 2.5rem;
                margin-bottom: 15px;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            }

            .header p {
                font-size: 1.1rem;
                opacity: 0.9;
                max-width: 600px;
                margin: 0 auto;
            }

            .content {
                padding: 60px 40px;
            }

            .packages-section {
                margin-bottom: 60px;
            }

            .packages-title {
                text-align: center;
                font-size: 2rem;
                color: #2c3e50;
                margin-bottom: 40px;
                position: relative;
            }

            .packages-title::after {
                content: '';
                position: absolute;
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%);
                width: 60px;
                height: 3px;
                background: linear-gradient(45deg, #f39c12, #e67e22);
                border-radius: 2px;
            }

            .packages-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                gap: 30px;
                margin-bottom: 50px;
            }

            .package {
                background: white;
                border-radius: 15px;
                padding: 30px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                border: 2px solid transparent;
                transition: all 0.3s ease;
                position: relative;
            }

            .package:hover {
                transform: translateY(-5px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            }

            .package.gold {
                border-color: #f39c12;
                background: linear-gradient(135deg, #fff9e6 0%, #ffffff 100%);
            }

            .package.silver {
                border-color: #95a5a6;
                background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            }

            .package.bronze {
                border-color: #cd7f32;
                background: linear-gradient(135deg, #fff5f0 0%, #ffffff 100%);
            }

            .package-header {
                text-align: center;
                margin-bottom: 25px;
            }

            .package-title {
                font-size: 1.5rem;
                font-weight: bold;
                margin-bottom: 10px;
                color: #2c3e50;
            }

            .package-subtitle {
                color: #7f8c8d;
                font-size: 0.95rem;
            }

            .package-features {
                list-style: none;
            }

            .package-features li {
                padding: 8px 0;
                padding-right: 25px;
                position: relative;
                color: #34495e;
            }

            .package-features li::before {
                content: '✓';
                position: absolute;
                right: 0;
                color: #27ae60;
                font-weight: bold;
            }

            .form-section {
                background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
                border-radius: 15px;
                padding: 40px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            }

            .form-title {
                text-align: center;
                font-size: 1.8rem;
                color: #2c3e50;
                margin-bottom: 30px;
                position: relative;
            }

            .form-title::after {
                content: '';
                position: absolute;
                bottom: -8px;
                left: 50%;
                transform: translateX(-50%);
                width: 40px;
                height: 2px;
                background: linear-gradient(45deg, #f39c12, #e67e22);
                border-radius: 1px;
            }

            .form-grid {
                display: flex;
                flex-direction: column;
                /* grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); */
                gap: 25px;
                margin-bottom: 25px;
            }

            .form-group {
                display: flex;
                flex-direction: column;
            }

            .form-group label {
                font-weight: bold;
                color: #2c3e50;
                margin-bottom: 8px;
            }

            .required {
                color: #e74c3c;
            }

            .form-group input,
            .form-group select,
            .form-group textarea {
                padding: 12px 15px;
                border: 2px solid #e0e6ed;
                border-radius: 8px;
                font-size: 1rem;
                transition: all 0.3s ease;
                background: white;
            }

            .form-group input:focus,
            .form-group select:focus,
            .form-group textarea:focus {
                outline: none;
                border-color: #f39c12;
                box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.1);
            }

            .form-group textarea {
                resize: vertical;
                min-height: 100px;
            }

            .submit-btn {
                background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
                color: white;
                padding: 15px 40px;
                border: none;
                border-radius: 8px;
                font-size: 1.1rem;
                font-weight: bold;
                cursor: pointer;
                transition: all 0.3s ease;
                width: 100%;
                margin-top: 20px;
            }

            .submit-btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px rgba(243, 156, 18, 0.3);
            }

            @media (max-width: 768px) {
                .content {
                    padding: 40px 20px;
                }

                .packages-grid {
                    grid-template-columns: 1fr;
                }

                .form-grid {
                    grid-template-columns: 1fr;
                }

                .header h1 {
                    font-size: 2rem;
                }
            }
        </style>

        <div id="sponsorship" class="page">
            <div class="header">
                <div class="logo">
                    <img src="assets/logo.png"
                        style="width: 200px; height: 100px; border-radius: 10px; box-shadow: 8px 8px 20px rgba(0, 0, 0, 0.2);"
                        alt="logo">
                </div>
                <h1>{{ __('home.book_sponsorship') }}</h1>
                <p>{{ __('home.sponsorship_subtitle') }}</p>
            </div>

            <div class="content">
                <div class="packages-section">
                    <h2 class="packages-title">{{ __('home.sponsorship_packages') }}</h2>

                    <div class="packages-grid">
                        <div class="package gold">
                            <div class="package-header">
                                <h3 class="package-title">{{ __('home.gold_sponsor') }}</h3>
                                <p class="package-subtitle">{{ __('home.gold_sponsor_subtitle') }}</p>
                            </div>
                            <ul class="package-features">
                                <li>{{ __('home.gold_feature_1') }}</li>
                                <li>{{ __('home.gold_feature_2') }}</li>
                                <li>{{ __('home.gold_feature_3') }}</li>
                                <li>{{ __('home.gold_feature_4') }}</li>
                            </ul>
                        </div>

                        <div class="package silver">
                            <div class="package-header">
                                <h3 class="package-title">{{ __('home.silver_sponsor') }}</h3>
                                <p class="package-subtitle">{{ __('home.silver_sponsor_subtitle') }}</p>
                            </div>
                            <ul class="package-features">
                                <li>{{ __('home.silver_feature_1') }}</li>
                                <li>{{ __('home.silver_feature_2') }}</li>
                                <li>{{ __('home.silver_feature_3') }}</li>
                                <li>{{ __('home.silver_feature_4') }}</li>
                            </ul>
                        </div>

                        <div class="package bronze">
                            <div class="package-header">
                                <h3 class="package-title">{{ __('home.bronze_sponsor') }}</h3>
                                <p class="package-subtitle">{{ __('home.bronze_sponsor_subtitle') }}</p>
                            </div>
                            <ul class="package-features">
                                <li>{{ __('home.bronze_feature_1') }}</li>
                                <li>{{ __('home.bronze_feature_2') }}</li>
                                <li>{{ __('home.bronze_feature_3') }}</li>
                                <li>{{ __('home.bronze_feature_4') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h2 class="form-title">{{ __('home.sponsorship_request') }}</h2>

                    <form>
                        <div class="form-grid">
                            <div class="form-group">
                                <label>{{ __('home.institution_name') }} <span class="required">*</span></label>
                                <input type="text" placeholder="{{ __('home.institution_name_placeholder') }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>{{ __('home.responsible_person') }} <span class="required">*</span></label>
                                <input type="text"
                                    placeholder="{{ __('home.responsible_person_placeholder') }}" required>
                            </div>

                            <div class="form-group">
                                <label>{{ __('home.phone') }} <span class="required">*</span></label>
                                <input type="tel" placeholder="{{ __('home.phone_placeholder') }}" required>
                            </div>

                            <div class="form-group">
                                <label>{{ __('home.sponsorship_type') }} <span class="required">*</span></label>
                                <select required>
                                    <option value="">{{ __('home.select_sponsorship_type') }}</option>
                                    <option value="gold">{{ __('home.gold_sponsor_option') }}</option>
                                    <option value="silver">{{ __('home.silver_sponsor_option') }}</option>
                                    <option value="bronze">{{ __('home.bronze_sponsor_option') }}</option>
                                    <option value="custom">{{ __('home.custom_sponsorship') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>{{ __('home.additional_notes') }}</label>
                            <textarea placeholder="{{ __('home.additional_notes_placeholder') }}"></textarea>
                        </div>

                        <button type="submit"
                            class="submit-btn">{{ __('home.submit_sponsorship_request') }}</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Media Pages -->
        <div id="media" class="page">
            <section class="page-hero"
                style="background: linear-gradient(135deg, #4fd1c7 0%, #63b3ed 100%); padding: 80px 0; text-align: center; position: relative; overflow: hidden;">
                <!-- Medical Tourism Logo -->
                <div style="position: absolute; top: 20px; right: 20px; opacity: 0.1;">
                    <!-- SVG content can go here -->
                </div>

                <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <!-- Logo -->
                    <div style="margin-bottom: 30px; display: flex; justify-content: center;">
                        <div
                            style="width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <img src="assets/logo.png"
                                style="width: 200px; height: 100px; box-shadow:0 4px 10px rgba(0,0,0,.15);"
                                alt="logo">
                        </div>
                    </div>

                    <h1
                        style="color: white; font-size: 3.5rem; font-weight: 700; margin: 0 0 20px 0; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        {{ __('home.media_coverage') }}
                    </h1>
                    <p
                        style="color: rgba(255,255,255,0.9); font-size: 1.3rem; font-weight: 400; margin: 0; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                        {{ __('home.media_coverage_subtitle') }}
                    </p>
                </div>
            </section>

            <!-- Content Section -->
            <section class="content-section"
                style="padding: 100px 0; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); position: relative; overflow: hidden;">

                <!-- Background decoration -->
                <div
                    style="position: absolute; top: -100px; left: -100px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(102,126,234,0.1) 0%, transparent 70%); border-radius: 50%;">
                </div>
                <div
                    style="position: absolute; bottom: -50px; right: -50px; width: 200px; height: 200px; background: radial-gradient(circle, rgba(118,75,162,0.1) 0%, transparent 70%); border-radius: 50%;">
                </div>

                <div class="container"
                    style="max-width: 1200px; margin: 0 auto; padding: 0 20px; position: relative; z-index: 2;">

                    <!-- Section Title -->
                    <div style="text-align: center; margin-bottom: 70px;">
                        {{-- <h2
                            style="color: #2d3748; font-size: 2.8rem; font-weight: 800; margin-bottom: 15px; background: linear-gradient(135deg, #667eea, #764ba2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                            التغطية الإعلامية</h2> --}}
                        {{-- <div
                            style="width: 80px; height: 4px; background: linear-gradient(90deg, #667eea, #764ba2); margin: 0 auto; border-radius: 2px;">
                        </div> --}}
                    </div>

                    <div class="news-grid"
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(380px, 1fr)); gap: 40px; margin-top: 50px;">

                        @foreach ($medias as $media)
                            <div
                                style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.08); transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; border: 1px solid rgba(102,126,234,0.1);">

                                <!-- News Image -->
                                <div style="width: 100%; height: 280px; position: relative; overflow: hidden;">
                                    <img src="{{ asset($media->image) }}"
                                        alt="{{ $media->title ?? 'صورة الخبر' }}"
                                        style="width: 100%; height: 100%; object-fit: cover; object-position: center; transition: transform 0.6s ease-out;"
                                        onmouseover="this.style.transform='scale(1.08)'"
                                        onmouseout="this.style.transform='scale(1)'">

                                    <!-- Modern overlay -->
                                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, rgba(102,126,234,0.1) 0%, rgba(118,75,162,0.1) 100%); opacity: 0; transition: opacity 0.3s ease;"
                                        onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                                    </div>
                                </div>

                                <!-- News Content -->
                                <div style="padding: 35px;">
                                    <div
                                        style="color: #667eea; font-size: 0.95rem; font-weight: 700; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.5px;">
                                        {{ $media->created_at ? $media->created_at->format('d M Y') : 'تاريخ غير محدد' }}
                                    </div>

                                    <h3 style="color: #1a202c; font-size: 1.5rem; font-weight: 800; margin-bottom: 18px; line-height: 1.3; transition: color 0.3s ease;"
                                        onmouseover="this.style.color='#667eea'"
                                        onmouseout="this.style.color='#1a202c'">
                                        {{ $lang == 'ar' ? $media->title_ar : $media->title_en }}
                                    </h3>

                                    <p
                                        style="color: #4a5568; font-size: 1.05rem; line-height: 1.7; margin-bottom: 0; font-weight: 400;">
                                        {{ $lang == 'ar' ? $media->desc_ar : $media->desc_en }}
                                    </p>

                                    <!-- Decorative element -->
                                    <div style="width: 50px; height: 3px; background: linear-gradient(90deg, #667eea, #764ba2); margin-top: 25px; border-radius: 2px; transition: width 0.3s ease;"
                                        onmouseover="this.style.width='80px'" onmouseout="this.style.width='50px'">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
        </div>

        <div id="exhibition" class="page">
            <section class="page-hero"
                style="background:
                 linear-gradient(135deg, #4fd1c7 0%, #63b3ed 100%);
                  padding: 80px 0; text-align: center; position: relative;
                   overflow: hidden;">
                <!-- Medical Tourism Logo -->
                <div style="position: absolute; top: 20px; right: 20px; opacity: 0.1;">
                    <!-- <svg width="120" height="80" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M60 10 L50 30 L70 30 Z M60 70 L50 50 L70 50 Z M20 40 L40 30 L40 50 Z M100 40 L80 30 L80 50 Z"
                            fill="white" />
                        <circle cx="60" cy="40" r="15" fill="white" />
                        <path d="M55 40 L65 40 M60 35 L60 45" stroke="#4fd1c7" stroke-width="2" />
                    </svg> -->
                </div>

                <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <!-- Logo -->
                    <div style="margin-bottom: 30px; display: flex; justify-content: center;">
                        <div
                            style="width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <!-- <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 5 L25 5 L25 15 L35 15 L35 25 L25 25 L25 35 L15 35 L15 25 L5 25 L5 15 L15 15 Z"
                                    fill="white" />
                                <circle cx="20" cy="20" r="3" fill="#4fd1c7" />
                            </svg> -->

                            <img src="assets/logo.png"
                                style="width: 200px; height: 100px;
                            box-shadow:0 4px 10px rgba(0,0,0,.15); "
                                alt="">
                        </div>
                    </div>

                    <h1
                        style="color: white; font-size: 3.5rem; font-weight: 700; margin: 0 0 20px 0; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        {{ __('home.gallary') }}
                    </h1>
                    <p
                        style="color: rgba(255,255,255,0.9); font-size: 1.3rem; font-weight: 
                        400; margin: 0; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                        {{ __('home.gallary_subtitle') }}




                    </p>
                </div>
            </section>

            <!-- Content Section -->
            <!-- Swiper CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

            <section style="padding: 100px 0; background-color: #f8f9fa; position: relative; overflow: hidden;">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

                    <!-- Gallery Container -->
                    <div
                        style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">

                        <!-- Swiper Container -->
                        <div class="swiper mySwiper"
                            style="border-radius: 15px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                            <div class="swiper-wrapper">
                                @foreach ($images as $image)
                                    <div class="swiper-slide"
                                        style="height: 400px; display:flex; justify-content:center; align-items:center; background:#eee;">
                                        <img src="{{ asset($image->image) }}" alt="Gallery Image"
                                            style="width:100%; height:100%; object-fit:cover; border-radius:15px;">
                                        <div
                                            style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent); color: white; padding: 20px;">
                                            <h3 style="font-size: 1.5rem; font-weight: 700; margin: 0;">
                                                {{ $lang == 'ar' ? $image->title_ar : $image->title_en }}
                                            </h3>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- Navigation -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
            <script>
                const swiper = new Swiper(".mySwiper", {
                    loop: true,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                });
            </script>

        </div>

        <!-- Hospitality Pages -->
        <div id="accommodation" class="page">
            <section class="page-hero"
                style="background: linear-gradient(135deg, #4fd1c7 0%, #63b3ed 100%); padding: 80px 0; text-align: center; position: relative; overflow: hidden;">
                <!-- Medical Tourism Logo -->
                <div style="position: absolute; top: 20px; right: 20px; opacity: 0.1;">
                    <!-- <svg width="120" height="80" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M60 10 L50 30 L70 30 Z M60 70 L50 50 L70 50 Z M20 40 L40 30 L40 50 Z M100 40 L80 30 L80 50 Z"
                            fill="white" />
                        <circle cx="60" cy="40" r="15" fill="white" />
                        <path d="M55 40 L65 40 M60 35 L60 45" stroke="#4fd1c7" stroke-width="2" />
                    </svg> -->
                </div>

                <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                    <!-- Logo -->
                    <div style="margin-bottom: 30px; display: flex; justify-content: center;">
                        <div
                            style="width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                            <!-- <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 5 L25 5 L25 15 L35 15 L35 25 L25 25 L25 35 L15 35 L15 25 L5 25 L5 15 L15 15 Z"
                                    fill="white" />
                                <circle cx="20" cy="20" r="3" fill="#4fd1c7" />
                            </svg> -->

                            <img src="assets/logo.png"
                                style="width: 200px; height: 100px;
                            box-shadow:0 4px 10px rgba(0,0,0,.15); "
                                alt="">
                        </div>
                    </div>

                    <h1
                        style="color: white; font-size: 3.5rem; font-weight: 700; margin: 0 0 20px 0; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        {{ __('home.accommodation_title') }}
                    </h1>
                    <p
                        style="color: rgba(255,255,255,0.9); font-size: 1.3rem; font-weight: 
                        400; margin: 0; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                        {{ __('home.accommodation_subtitle') }}
                    </p>
                </div>
            </section>

            <!-- Content Section -->
            <!-- Hotels Section -->
            <div style="text-align: center; margin-bottom: 60px;">
                <h2
                    style="color: #2d3748; font-size: 2.8rem; font-weight: 700; margin: 0 0 15px 0; background: linear-gradient(135deg, #4fd1c7, #63b3ed); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    {{ __('home.hotels_title') }}
                </h2>
                <div
                    style="width: 80px; height: 4px; background: linear-gradient(90deg, #4fd1c7, #63b3ed); margin: 0 auto 20px auto; border-radius: 2px;">
                </div>
                <p
                    style="color: #718096; font-size: 1.2rem; line-height: 1.6; margin: 0; max-width: 600px; margin: 0 auto;">
                    {{ __('home.hotels_description') }}
                </p>
            </div>

            <!-- Hotels Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">

                <!-- Hotel 1: Intercontinental -->
                <div style="background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); position: relative; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                    <!-- Gradient Accent -->
                    <div
                        style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #4fd1c7, #63b3ed);">
                    </div>

                    <!-- Hotel Icon -->
                    <div
                        style="width: 60px; height: 60px; background: linear-gradient(135deg, #e6fffa 0%, #b2f5ea 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; border: 2px solid #4fd1c7;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#4fd1c7"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9,22 9,12 15,12 15,22" />
                        </svg>
                    </div>

                    <h3 style="color: #2d3748; font-size: 1.4rem; font-weight: 700; margin: 0 0 15px 0;">
                        {{ __('home.intercontinental_name') }}</h3>
                    <p style="color: #718096; font-size: 1rem; line-height: 1.6; margin: 0 0 20px 0;">
                        {{ __('home.intercontinental_address') }}</p>

                    <!-- Location Button -->
                    <a href="#"
                        style="display: inline-flex; align-items: center; background: linear-gradient(135deg, #4fd1c7, #63b3ed); color: white; padding: 12px 20px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(79,209,199,0.3);"
                        onmouseover="this.style.boxShadow='0 6px 20px rgba(79,209,199,0.4)'; this.style.transform='translateY(-2px)'"
                        onmouseout="this.style.boxShadow='0 4px 15px rgba(79,209,199,0.3)'; this.style.transform='translateY(0px)'">
                        📍 {{ __('home.view_location') }}
                    </a>
                </div>

                <!-- Hotel 2: Vander -->
                <div style="background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); position: relative; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                    <div
                        style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #63b3ed, #9f7aea);">
                    </div>

                    <div
                        style="width: 60px; height: 60px; background: linear-gradient(135deg, #f0e6ff 0%, #e9d8fd 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; border: 2px solid #63b3ed;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#63b3ed"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 21h18" />
                            <path d="M5 21V7l8-4v18" />
                            <path d="M19 21V11l-6-4" />
                        </svg>
                    </div>

                    <h3 style="color: #2d3748; font-size: 1.4rem; font-weight: 700; margin: 0 0 15px 0;">
                        {{ __('home.vander_name') }}</h3>
                    <p style="color: #718096; font-size: 1rem; line-height: 1.6; margin: 0 0 20px 0;">
                        {{ __('home.vander_address') }}</p>

                    <a href="#"
                        style="display: inline-flex; align-items: center; background: linear-gradient(135deg, #63b3ed, #9f7aea); color: white; padding: 12px 20px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(99,179,237,0.3);"
                        onmouseover="this.style.boxShadow='0 6px 20px rgba(99,179,237,0.4)'; this.style.transform='translateY(-2px)'"
                        onmouseout="this.style.boxShadow='0 4px 15px rgba(99,179,237,0.3)'; this.style.transform='translateY(0px)'">
                        📍 {{ __('home.view_location') }}
                    </a>
                </div>

                <!-- Hotel 3: Wrac -->
                <div style="background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); position: relative; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                    <div
                        style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #48bb78, #38b2ac);">
                    </div>

                    <div
                        style="width: 60px; height: 60px; background: linear-gradient(135deg, #f0fff4 0%, #c6f6d5 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; border: 2px solid #48bb78;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#48bb78"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M2.97 12.92A2 2 0 0 0 2 14.63v3.24a2 2 0 0 0 .97 1.71l3 1.8a2 2 0 0 0 2.06 0L12 19v-5.5l-5-3-4.03 2.42Z" />
                            <path d="m7 16.5-4.74-2.85" />
                            <path d="m7 16.5 5-3" />
                            <path d="M7 16.5v5.17" />
                            <path
                                d="M12 13.5V19l3.97 2.38a2 2 0 0 0 2.06 0l3-1.8a2 2 0 0 0 .97-1.71v-3.24a2 2 0 0 0-.97-1.71L17 10.5l-5 3Z" />
                            <path d="m17 16.5-5-3" />
                            <path d="m17 16.5 4.74-2.85" />
                            <path d="M17 16.5v5.17" />
                            <path
                                d="M7.97 4.42A2 2 0 0 0 7 6.13v4.37l5 3 5-3V6.13a2 2 0 0 0-.97-1.71l-3-1.8a2 2 0 0 0-2.06 0l-3 1.8Z" />
                            <path d="M12 8 7.26 5.15" />
                            <path d="m12 8 4.74-2.85" />
                            <path d="M12 13.5V8" />
                        </svg>
                    </div>

                    <h3 style="color: #2d3748; font-size: 1.4rem; font-weight: 700; margin: 0 0 15px 0;">
                        {{ __('home.wrac_name') }}</h3>
                    <p style="color: #718096; font-size: 1rem; line-height: 1.6; margin: 0 0 20px 0;">
                        {{ __('home.wrac_address') }}</p>

                    <a href="#"
                        style="display: inline-flex; align-items: center; background: linear-gradient(135deg, #48bb78, #38b2ac); color: white; padding: 12px 20px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(72,187,120,0.3);"
                        onmouseover="this.style.boxShadow='0 6px 20px rgba(72,187,120,0.4)'; this.style.transform='translateY(-2px)'"
                        onmouseout="this.style.boxShadow='0 4px 15px rgba(72,187,120,0.3)'; this.style.transform='translateY(0px)'">
                        📍 {{ __('home.view_location') }}
                    </a>
                </div>

                <!-- Hotel 4: Mina Plaza -->
                <div style="background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); position: relative; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                    <div
                        style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #ed8936, #f56500);">
                    </div>

                    <div
                        style="width: 60px; height: 60px; background: linear-gradient(135deg, #fffaf0 0%, #fbd38d 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; border: 2px solid #ed8936;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#ed8936"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                            <path d="M7.5 4.21l4.5 2.6 4.5-2.6" />
                            <path d="M7.5 19.79V14.6L3 12" />
                            <path d="M21 12l-4.5 2.6v5.19" />
                            <path d="M3.27 6.96L12 12.01l8.73-5.05" />
                            <path d="M12 22.08V12" />
                        </svg>
                    </div>

                    <h3 style="color: #2d3748; font-size: 1.4rem; font-weight: 700; margin: 0 0 15px 0;">
                        {{ __('home.mina_plaza_name') }}</h3>
                    <p style="color: #718096; font-size: 1rem; line-height: 1.6; margin: 0 0 20px 0;">
                        {{ __('home.mina_plaza_address') }}</p>

                    <a href="#"
                        style="display: inline-flex; align-items: center; background: linear-gradient(135deg, #ed8936, #f56500); color: white; padding: 12px 20px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(237,137,54,0.3);"
                        onmouseover="this.style.boxShadow='0 6px 20px rgba(237,137,54,0.4)'; this.style.transform='translateY(-2px)'"
                        onmouseout="this.style.boxShadow='0 4px 15px rgba(237,137,54,0.3)'; this.style.transform='translateY(0px)'">
                        📍 {{ __('home.view_location') }}
                    </a>
                </div>

                <!-- Hotel 5: Swiss Spirit -->
                <div style="background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); position: relative; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
                    <div
                        style="position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, #e53e3e, #c53030);">
                    </div>

                    <div
                        style="width: 60px; height: 60px; background: linear-gradient(135deg, #fed7d7 0%, #fc8181 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; border: 2px solid #e53e3e;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#e53e3e"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z" />
                            <path d="M3 6h18" />
                            <path d="M16 10a4 4 0 0 1-8 0" />
                        </svg>
                    </div>

                    <h3 style="color: #2d3748; font-size: 1.4rem; font-weight: 700; margin: 0 0 15px 0;">
                        {{ __('home.swiss_spirit_name') }}</h3>
                    <p style="color: #718096; font-size: 1.6; margin: 0 0 20px 0;">
                        {{ __('home.swiss_spirit_address') }}</p>

                    <a href="#"
                        style="display: inline-flex; align-items: center; background: linear-gradient(135deg, #e53e3e, #c53030); color: white; padding: 12px 20px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(229,62,62,0.3);"
                        onmouseover="this.style.boxShadow='0 6px 20px rgba(229,62,62,0.4)'; this.style.transform='translateY(-2px)'"
                        onmouseout="this.style.boxShadow='0 4px 15px rgba(229,62,62,0.3)'; this.style.transform='translateY(0px)'">
                        📍 {{ __('home.view_location') }}
                    </a>
                </div>
            </div>
        </div>

        <div id="visa" class="page">
            <style>
                .header {
                    /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
                    /* color: white; */
                    text-align: center;
                    padding: 40px 20px;
                }

                .logo-placeholder {
                    width: 120px;
                    height: 120px;
                    background: rgba(255, 255, 255, 0.2);
                    border-radius: 50%;
                    margin: 0 auto 20px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 24px;
                    backdrop-filter: blur(10px);
                }

                .main-title {
                    font-size: 2.5rem;
                    font-weight: 700;
                    margin-bottom: 10px;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                }

                .content {
                    padding: 40px;
                }

                .visa-info-box {
                    background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
                    border-radius: 20px;
                    padding: 40px;
                    margin: 30px 0;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                    border: 1px solid rgba(255, 255, 255, 0.3);
                }

                .visa-info-title {
                    font-size: 1.8rem;
                    font-weight: 700;
                    color: #2d3748;
                    text-align: center;
                    margin-bottom: 30px;
                    padding-bottom: 15px;
                    border-bottom: 3px solid #667eea;
                }

                .visa-info-subtitle {
                    font-size: 1.3rem;
                    color: #4a5568;
                    text-align: center;
                    margin-bottom: 25px;
                    font-weight: 600;
                }

                .section {
                    margin-bottom: 35px;
                    background: rgba(255, 255, 255, 0.7);
                    padding: 25px;
                    border-radius: 15px;
                    backdrop-filter: blur(5px);
                }

                .section-title {
                    font-size: 1.4rem;
                    font-weight: 700;
                    color: #2d3748;
                    margin-bottom: 15px;
                    padding: 10px 15px;
                    background: linear-gradient(135deg, #667eea, #764ba2);
                    color: white;
                    border-radius: 10px;
                    text-align: center;
                }

                .section-content {
                    line-height: 1.8;
                    color: #4a5568;
                    font-size: 1.1rem;
                }

                .steps {
                    counter-reset: step-counter;
                    margin: 20px 0;
                }

                .step {
                    counter-increment: step-counter;
                    margin-bottom: 15px;
                    padding: 15px;
                    background: rgba(255, 255, 255, 0.8);
                    border-radius: 10px;
                    border-right: 4px solid #667eea;
                    position: relative;
                }

                .step::before {
                    content: counter(step-counter);
                    position: absolute;
                    right: -15px;
                    top: 15px;
                    width: 30px;
                    height: 30px;
                    background: #667eea;
                    color: white;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: bold;
                    font-size: 0.9rem;
                }

                .note {
                    background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
                    padding: 20px;
                    border-radius: 15px;
                    margin: 20px 0;
                    border-right: 5px solid #f6ad55;
                    font-weight: 600;
                    color: #744210;
                }

                .bullet-point {
                    margin: 10px 0;
                    padding-right: 20px;
                    position: relative;
                }

                .bullet-point::before {
                    content: "•";
                    color: #667eea;
                    font-weight: bold;
                    position: absolute;
                    right: 0;
                    font-size: 1.2rem;
                }

                .international-section {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 30px;
                    margin-top: 40px;
                }

                .info-box {
                    background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);
                    padding: 30px;
                    border-radius: 20px;
                    text-align: center;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    border: 1px solid rgba(255, 255, 255, 0.3);
                }

                .info-box:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
                }

                .info-box-title {
                    font-size: 1.4rem;
                    font-weight: 700;
                    color: #2d3748;
                    margin-bottom: 15px;
                    padding: 10px;
                    background: rgba(255, 255, 255, 0.8);
                    border-radius: 10px;
                }

                .info-box-content {
                    color: #4a5568;
                    line-height: 1.7;
                    font-size: 1.05rem;
                }

                @media (max-width: 768px) {
                    .international-section {
                        grid-template-columns: 1fr;
                        gap: 20px;
                    }

                    .main-title {
                        font-size: 2rem;
                    }

                    .content {
                        padding: 20px;
                    }

                    .visa-info-box {
                        padding: 25px;
                    }
                }

                .icon {
                    font-size: 3rem;
                    margin-bottom: 15px;
                    opacity: 0.8;
                }
            </style>
            </head>


            <div class="container">
                <div class="header">
                    <div class="logo-placeholder">
                        <div class="icon">
                            <img src="assets/logo.png" alt="logo"
                                style="width:250px; height:100px;
                                 border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,.15); object-fit:cover;">
                        </div>
                    </div>
                    <h1 class="main-title">{{ __('home.visa_requirements') }}</h1>
                </div>

                <div class="content">
                    <div class="visa-info-box">
                        <h2 class="visa-info-title">{{ __('home.visa_info_title_en') }}</h2>
                        <h3 class="visa-info-subtitle">{{ __('home.visa_info_title_ar') }}</h3>

                        <p class="section-content"
                            style="text-align: center; margin-bottom: 25px; font-weight: 600;">
                            {{ __('home.visa_info_conference') }}
                        </p>

                        <p class="section-content" style="margin-bottom: 25px;">
                            {{ __('home.visa_general_info') }}
                        </p>

                        <div class="section">
                            <h3 class="section-title">{{ __('home.business_visa_title') }}</h3>
                            <div class="section-content">
                                <div class="bullet-point">{{ __('home.business_visa_point1') }}
                                </div>
                                <div class="bullet-point">{{ __('home.business_visa_point2') }}
                                </div>
                                <div class="bullet-point">{{ __('home.business_visa_point3') }}</div>
                                <div class="bullet-point">{{ __('home.business_visa_point4') }}</div>
                            </div>
                        </div>

                        <div class="section">
                            <h3 class="section-title">{{ __('home.tourist_evisa_title') }}</h3>
                            <div class="section-content">
                                <div class="bullet-point">{{ __('home.tourist_evisa_point1') }}</div>
                                <div class="bullet-point">{{ __('home.tourist_evisa_point2') }}</div>
                                <div class="bullet-point">{{ __('home.tourist_evisa_point3') }}</div>

                                <h4 style="margin: 20px 0 15px 0; color: #2d3748; font-weight: 700;">{{ __('home.application_steps_title') }}
                                </h4>
                                <div class="steps">
                                    <div class="step">{{ __('home.application_step1') }}
                                    </div>
                                    <div class="step">{{ __('home.application_step2') }}</div>
                                    <div class="step">{{ __('home.application_step3') }}
                                    </div>
                                    <div class="step">{{ __('home.application_step4') }}</div>
                                </div>

                                <div class="note">
                                    {{ __('home.visa_verification_note') }}
                                </div>

                                <div class="note">
                                    <strong>{{ __('home.note_title') }}:</strong> {{ __('home.visit_purpose_note') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="international-section">
                        <div class="info-box">
                            <div class="icon">🌍</div>
                            <h3 class="info-box-title">{{ __('home.international_participants_title') }}</h3>
                            <div class="info-box-content">
                                {{ __('home.international_participants_content') }}
                            </div>
                        </div>

                        <div class="info-box">
                            <div class="icon">📋</div>
                            <h3 class="info-box-title">{{ __('home.required_documents_title') }}</h3>
                            <div class="info-box-content">
                                {{ __('home.required_documents_content') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="flights" class="page">
            <style>
                .flights-container {
                    max-width: 900px;
                    margin: 0 auto;
                    padding: 40px 20px;
                }

                .flights-header {
                    text-align: center;
                    margin-bottom: 60px;
                }

                .flights-title {
                    font-size: 48px;
                    font-weight: 700;
                    color: #2c3e50;
                    margin-bottom: 20px;
                    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                }

                .flights-subtitle {
                    font-size: 20px;
                    color: #7f8c8d;
                    font-weight: 400;
                    max-width: 600px;
                    margin: 0 auto;
                    line-height: 1.6;
                }

                .flights-icon-container {
                    /* background: linear-gradient(135deg, #20b2aa, #48d1cc); */
                    width: 120px;
                    height: 120px;
                    border-radius: 50%;
                    margin: 40px auto;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    /* box-shadow: 0 10px 30px rgba(32, 178, 170, 0.3); */
                }

                .flights-icon {
                    font-size: 48px;
                    color: white;
                }

                .airlines-section {
                    margin-top: 60px;
                    background: white;
                    border-radius: 25px;
                    padding: 50px 40px;
                    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
                    border: 1px solid rgba(32, 178, 170, 0.1);
                }

                .airlines-title {
                    font-size: 32px;
                    font-weight: 600;
                    color: #2c3e50;
                    text-align: center;
                    margin-bottom: 40px;
                }

                .airlines-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 25px;
                    margin-bottom: 60px;
                }

                .airline-card {
                    background: linear-gradient(135deg, rgba(32, 178, 170, 0.05), rgba(72, 209, 204, 0.08));
                    border: 2px solid rgba(32, 178, 170, 0.15);
                    border-radius: 15px;
                    padding: 25px;
                    text-align: center;
                    transition: all 0.3s ease;
                    position: relative;
                    overflow: hidden;
                }

                .airline-card::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    height: 4px;
                    background: linear-gradient(90deg, #20b2aa, #48d1cc);
                }

                .airline-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 15px 40px rgba(32, 178, 170, 0.2);
                    border-color: #20b2aa;
                }

                .airline-name {
                    font-size: 24px;
                    font-weight: 600;
                    color: #2c3e50;
                    margin-bottom: 8px;
                }

                .airline-name-ar {
                    font-size: 16px;
                    color: #7f8c8d;
                    font-weight: 400;
                }

                .airline-icon {
                    position: absolute;
                    top: 20px;
                    left: 20px;
                    font-size: 24px;
                    color: #20b2aa;
                }

                .info-cards {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
                    gap: 30px;
                    margin-top: 60px;
                }

                .info-card {
                    background: white;
                    border-radius: 20px;
                    padding: 35px;
                    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
                    border: 1px solid rgba(32, 178, 170, 0.1);
                    transition: all 0.3s ease;
                }

                .info-card:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
                }

                .info-card h3 {
                    font-size: 24px;
                    font-weight: 600;
                    color: #2c3e50;
                    margin-bottom: 20px;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }

                .info-card h3::before {
                    content: '';
                    width: 4px;
                    height: 25px;
                    background: linear-gradient(135deg, #20b2aa, #48d1cc);
                    border-radius: 2px;
                }

                .info-card p {
                    font-size: 16px;
                    line-height: 1.8;
                    color: #555;
                    margin-bottom: 15px;
                }

                @media (max-width: 768px) {
                    .flights-title {
                        font-size: 36px;
                    }

                    .flights-subtitle {
                        font-size: 18px;
                    }

                    .airlines-grid {
                        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                        gap: 20px;
                    }

                    .info-cards {
                        grid-template-columns: 1fr;
                        gap: 25px;
                    }
                }
            </style>
            </head>

            <body>
                <div class="flights-container">
                    <div class="flights-header">
                        <div class="flights-icon-container">
                            <div class="flights-icon">
                                <img src="assets/logo.png"
                                    style="width: 200px;
                                 height: 100px; border-radius: 10px;
                                  box-shadow: 8px 8px 16px rgba(0, 0, 0, 0.1);"
                                    alt="">
                            </div>
                        </div>
                        <h1 class="flights-title">{{ __('home.flights_title') }}</h1>
                        <p class="flights-subtitle">{{ __('home.flights_subtitle') }}</p>
                    </div>

                    <div class="airlines-section">
                        <h2 class="airlines-title">{{ __('home.airlines_available_title') }}</h2>

                        <div class="airlines-grid">
                            <div class="airline-card">
                                <div class="airline-icon">✈️</div>
                                <div class="airline-name">{{ __('home.saudia_name') }}</div>
                                <div class="airline-name-ar">{{ __('home.saudia_name_ar') }}</div>
                            </div>

                            <div class="airline-card">
                                <div class="airline-icon">✈️</div>
                                <div class="airline-name">{{ __('home.flyadeal_name') }}</div>
                                <div class="airline-name-ar">{{ __('home.flyadeal_name_ar') }}</div>
                            </div>

                            <div class="airline-card">
                                <div class="airline-icon">✈️</div>
                                <div class="airline-name">{{ __('home.flynas_name') }}</div>
                                <div class="airline-name-ar">{{ __('home.flynas_name_ar') }}</div>
                            </div>

                            <div class="airline-card">
                                <div class="airline-icon">✈️</div>
                                <div class="airline-name">{{ __('home.nile_air_name') }}</div>
                                <div class="airline-name-ar">{{ __('home.nile_air_name_ar') }}</div>
                            </div>

                            <div class="airline-card">
                                <div class="airline-icon">✈️</div>
                                <div class="airline-name">{{ __('home.air_arabia_name') }}</div>
                                <div class="airline-name-ar">{{ __('home.air_arabia_name_ar') }}</div>
                            </div>

                            <div class="airline-card">
                                <div class="airline-icon">✈️</div>
                                <div class="airline-name">{{ __('home.air_arabia_egypt_name') }}</div>
                                <div class="airline-name-ar">{{ __('home.air_arabia_egypt_name_ar') }}</div>
                            </div>

                            <div class="airline-card">
                                <div class="airline-icon">✈️</div>
                                <div class="airline-name">{{ __('home.flydubai_name') }}</div>
                                <div class="airline-name-ar">{{ __('home.flydubai_name_ar') }}</div>
                            </div>

                            <div class="airline-card">
                                <div class="airline-icon">✈️</div>
                                <div class="airline-name">{{ __('home.jazeera_airways_name') }}</div>
                                <div class="airline-name-ar">{{ __('home.jazeera_airways_name_ar') }}</div>
                            </div>

                            <div class="airline-card">
                                <div class="airline-icon">✈️</div>
                                <div class="airline-name">{{ __('home.qatar_airways_name') }}</div>
                                <div class="airline-name-ar">{{ __('home.qatar_airways_name_ar') }}</div>
                            </div>

                            <div class="airline-card">
                                <div class="airline-icon">✈️</div>
                                <div class="airline-name">{{ __('home.turkish_airlines_name') }}</div>
                                <div class="airline-name-ar">{{ __('home.turkish_airlines_name_ar') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="info-cards">
                        <div class="info-card">
                            <h3>{{ __('home.airport_info_title') }}</h3>
                            <p>{{ __('home.airport_info_content') }}</p>
                        </div>

                        <div class="info-card">
                            <h3>{{ __('home.important_info_title') }}</h3>
                            <p>{{ __('home.important_info_content') }}</p>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Contact Page -->
        <div id="contact" class="page">
            <style>
                .contact-container {
                    max-width: 1200px;
                    margin: 0 auto;
                    background: white;
                    border-radius: 20px;
                    padding: 60px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                    display: flex;
                    flex-direction: column;
                }

                .contact-header {
                    text-align: center;
                    margin-bottom: 60px;
                }

                .contact-title {
                    font-size: 48px;
                    font-weight: bold;
                    color: #2c3e50;
                    margin-bottom: 20px;
                }

                .contact-subtitle {
                    font-size: 18px;
                    color: #7f8c8d;
                    line-height: 1.8;
                    max-width: 600px;
                    margin: 0 auto;
                }

                .contact-content {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 80px;
                    align-items: start;
                }

                .contact-form {
                    background: #f8f9ff;
                    padding: 40px;
                    border-radius: 20px;
                    border: 2px solid #e8ecff;
                }

                .form-title {
                    font-size: 32px;
                    font-weight: bold;
                    margin-bottom: 30px;
                    text-align: center;
                    color: #2c3e50;
                }

                .form-group {
                    margin-bottom: 25px;
                    position: relative;
                }

                .form-label {
                    display: block;
                    margin-bottom: 8px;
                    font-size: 14px;
                    color: #2c3e50;
                    font-weight: 500;
                }

                .form-label::after {
                    content: " *";
                    color: #e74c3c;
                }

                .form-input {
                    width: 100%;
                    padding: 15px 20px;
                    border: 2px solid #e8ecff;
                    border-radius: 10px;
                    background: white;
                    color: #2c3e50;
                    font-size: 16px;
                    transition: all 0.3s ease;
                }

                .form-input::placeholder {
                    color: #bdc3c7;
                }

                .form-input:focus {
                    outline: none;
                    border-color: #667eea;
                    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
                }

                .form-textarea {
                    min-height: 120px;
                    resize: vertical;
                }

                .contact-info2 {
                    background: #e8f5e8;
                    padding: 40px;
                    border-radius: 20px;
                    color: #2c3e50;
                    position: relative;
                    border: 2px solid #d4e8d4;
                }

                .info-title {
                    font-size: 32px;
                    font-weight: bold;
                    margin-bottom: 40px;
                    text-align: center;
                    color: #2c3e50;
                }

                .info-item {
                    margin-bottom: 35px;
                    display: flex;
                    align-items: flex-start;
                    gap: 15px;
                }

                .info-icon {
                    width: 50px;
                    height: 50px;
                    background: #4ecdc4;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                    color: white;
                }

                .info-content h3 {
                    font-size: 20px;
                    font-weight: bold;
                    margin-bottom: 8px;
                    color: #2c3e50;
                }

                .info-content p {
                    font-size: 16px;
                    color: #5a6c7d;
                    line-height: 1.6;
                }

                .logo-watermark {
                    position: absolute;
                    bottom: 20px;
                    left: 20px;
                    opacity: 0.1;
                    width: 80px;
                    height: 80px;
                }

                .footer-text {
                    text-align: center;
                    margin-top: 30px;
                    font-size: 14px;
                    color: #5a6c7d;
                    line-height: 1.6;
                }

                @media (max-width: 768px) {
                    .contact-content {
                        grid-template-columns: 1fr;
                        gap: 40px;
                    }

                    .contact-container {
                        padding: 30px 20px;
                    }

                    .contact-title {
                        font-size: 36px;
                    }
                }
            </style>

           <div class="contact-container">
    <div class="contact-header">
        <h1 class="contact-title">{{ __('home.contact_us') }}</h1>
        <p class="contact-subtitle">
            {{ __('home.contact_subtitle') }}
        </p>
    </div>

    <div class="contact-content">
        <div class="contact-form">
            <h2 class="form-title">{{ __('home.send_message') }}</h2>

            <div class="form-group">
                <label class="form-label">{{ __('home.full_name') }}</label>
                <input type="text" class="form-input" placeholder="{{ __('home.full_name_placeholder') }}">
            </div>

            <div class="form-group">
                <label class="form-label">{{ __('home.email') }}</label>
                <input type="email" class="form-input" placeholder="{{ __('home.email_placeholder') }}">
            </div>

            <div class="form-group">
                <label class="form-label">{{ __('home.phone') }}</label>
                <input type="tel" class="form-input" placeholder="{{ __('home.phone_placeholder') }}">
            </div>

            <div class="form-group">
                <label class="form-label">{{ __('home.message') }}</label>
                <textarea class="form-input form-textarea" placeholder="{{ __('home.message_placeholder') }}"></textarea>
            </div>
        </div>

        <div class="contact-info2">
            <h2 class="info-title">{{ __('home.contact_info') }}</h2>

            <div class="info-item">
                <div class="info-icon">
                    📍
                </div>
                <div class="info-content">
                    <h3>{{ __('home.address') }}</h3>
                    <p>{{ __('home.address_value') }}</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    📧
                </div>
                <div class="info-content">
                    <h3>{{ __('home.email_label') }}</h3>
                    <p>{{ __('home.email_value') }}</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    📞
                </div>
                <div class="info-content">
                    <h3>{{ __('home.contact_number') }}</h3>
                    <p>{{ __('home.contact_number_value') }}</p>
                </div>
            </div>

            <div class="footer-text">
                {{ __('home.footer_text') }}
            </div>

            <!-- Logo watermark placeholder -->
            <div class="logo-watermark">
                <svg viewBox="0 0 100 100" fill="currentColor">
                    <path d="M50 10 L90 50 L50 90 L10 50 Z" opacity="0.3" />
                </svg>
            </div>
        </div>
    </div>
</div>


        </div>
    </main>
    <style>
        .social-icons {
            margin-top: 15px;
            display: flex;
            gap: 15px;
            justify-content: flex-start;
            /* يخليها في النص */
        }

        .social-icons a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #2D8F8F;
            /* لون أساسي */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background: #1e6b6b;
            /* لون أغمق عند hover */
            transform: translateY(-5px);
            /* حركة خفيفة */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
    </style>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="assets/logo.png" style="width: 150px; height: 70px; border-radius: 10px;"
                            alt="">

                    </div>
                    <h3>جمعية السياحة العلاجية</h3>
                    <p>منظمة رائدة في تطوير قطاع السياحة العلاجية وتعزيز التنمية المستدامة في المملكة العربية السعودية.
                    </p>
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>


                <div class="footer-section">
                    <h4 style="color: rgba(0, 255, 157, 0.5);">روابط سريعة</h4>
                    <ul class="footer-links">
                        <li><a href="#" onclick="showPage('home')">الرئيسية</a></li>
                        <li><a href="#" onclick="showPage('about')">من نحن</a></li>
                        <li><a href="#" onclick="showPage('program')">المؤتمر</a></li>
                        <li><a href="#" onclick="showPage('registration')">التسجيل</a></li>
                        <li><a href="#" onclick="showPage('contact')">اتصل بنا</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 style="color: palegreen;">المؤتمر</h4>
                    <ul class="footer-links">
                        <li><a href="#" onclick="showPage('speakers')">المتحدثون</a></li>
                        <li><a href="#" onclick="showPage('program')">البرنامج</a></li>
                        <li><a href="#" onclick="showPage('sponsors')">الرعاة</a></li>
                        <li><a href="#" onclick="showPage('accommodation')">الإقامة</a></li>
                        <li><a href="#" onclick="showPage('media')">الإعلام</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 style="color: orangered;">معلومات التواصل</h4>
                    <div class="contact-info">
                        <p><i style="color: orangered;" class="fas fa-map-marker-alt"></i> الطائف، المملكة العربية
                            السعودية</p>
                        <p><i style="color: orangered;" class="fas fa-phone"></i> +966 50 930 0053</p>
                        <p><i style="color: orangered;" class="fas fa-envelope"></i> info@saudimt2025.com</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 جمعية السياحة العلاجية. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
        const mobileToggle = document.querySelector('.mobile-toggle');
        const mobileMenu = document.querySelector('.mobile-menu');
        const dropdownBtns = document.querySelectorAll('.dropdown-btn');
        const allMobileLinks = document.querySelectorAll('.mobile-menu a');

        mobileToggle.addEventListener('click', () => {
            if (mobileMenu.style.display === 'flex') {
                mobileMenu.style.display = 'none';
                document.body.style.overflow = 'auto';
                // إقفال كل الـ dropdowns عند إخفاء القائمة
                dropdownBtns.forEach(btn => {
                    btn.nextElementSibling.style.display = 'none';
                });
            } else {
                mobileMenu.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }
        });

        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                content.style.display = content.style.display === 'flex' ? 'none' : 'flex';
            });
        });

        // إخفاء القائمة عند الضغط على أي link
        allMobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.style.display = 'none';
                document.body.style.overflow = 'auto';
                // إقفال كل الـ dropdowns عند الضغط على أي link
                dropdownBtns.forEach(btn => {
                    btn.nextElementSibling.style.display = 'none';
                });
            });
        });
    </script>
</body>

</html>
