    @extends('layouts.layout')

    @section('name')
        Home
    @endsection

    @section('content')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-datepicker.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script>
        function truncateText(selector, maxLength) {
        var element = document.querySelector(selector),
            truncated = element.innerText;

        if (truncated.length > maxLength) {
            truncated = truncated.substr(0,maxLength) + '...';
        }
        return truncated;

        }
        document.querySelector('p').innerText = truncateText('p', 107);       
    </script>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="/img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <!-- flash messages section begin -->
                        <center>
                            <div class="flash-message" style="display: flex;justify-content: center;align-items: center;">
                              @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                    <center><p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p></center>
                                @endif
                              @endforeach
                            </div>
                        </center>
                        <!-- flash messages section end -->
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <span>We Share coz We Care</span>
                                <h2 style="color: #5768ad;">All is Well!</h2>
                                <a style="color: white;" href="javascript:void(0);" onclick="javascript:introJs().setOption('showProgress',true).start();"><u><span>Take a Tour</span></u></a>
                                <a style="text-decoration: none" href="{{ url('about') }}" class="primary-btn">DISCOVER MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="home-about spad" style="padding-top: 0px;">
        <div class="section-title">
                <br>
                <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                <h2>About Us</h2>
            </div>
        <div class="container">
            
            <div class="row">
                <div class="col-lg-7">
                    <div class="home__about__pic">
                        <div class="home__about__pic__item large-item set-bg">
                            <img src="img/about/about-11.jpg" alt="" width="345" height="620">
                        </div>
                        <div class="home__about__pic__item">
                            <div class="home__about__pic__item__inner set-bg" data-setbg="img/about/about-2.jpg">
                                <img src="img/about/about-21.jpg" alt="">
                            </div>
                            <div class="home__about__pic__item__inner set-bg" data-setbg="img/about/about-3.jpg">
                                <img src="img/about/about-31.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-step="7" data-intro="This section is introduction to Sahaayak & have a look at it by clicking more about us button because we share & we care." data-position="bottom-middle-aligned">
                    <div class="home__about__text">
                        <span>“We Share coz We Care”</span>
                        <p align="justify">Student Guidance Cell (SGC) aims to provide guidance and counselling services to students
                         based on their needs with assured privacy and confidential exchange of communication. SGC also provides academic
                          support in the form of special classes for students. The formation of SGC was based on the feedback from graduated 
                          students of the institute who stressed on the need to have a facility to counsel and motivate the students.
                           SGC helps the students to function better in all domains of life - academic, social, personal and psychological.</p>
                        <p class="para-2" align="justify">The motive behind SGC stems from the need to facilitate the process of growth and
                         maintain a positive well-being of the students. The counselling services offered by SGC empowers the students to 
                         have enhanced ability to solve problems, make decisions as well as make them more efficient in tackling personal problems.
                          In a nut shell, it is aimed at enhancing their ability to utilize the best potential available in them.</p>
                        <a style="text-decoration: none" href="{{ url('about') }}" class="primary-btn">MORE ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- featured topics Begin -->
    <section class="upcoming-classes spad">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <img src="img/icon.png" alt="Sahaayak" width="58" height="38">
                            <h2 data-step="6" data-intro="In this section you can expect the latest featured news gathered from different sources." data-position="bottom-middle-aligned">News & Announcements</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                
                </div>
            </div>
            <center><a style="text-decoration: none" href="{{ url('displayNews') }}" class="primary-btn">View All News & Announcements</a></center>
    </section>

    <!-- Featured Topics End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container" data-step="8" data-intro="This section describes the testimonies given by honourble personalities." data-position="bottom-middle-aligned">
            <div class="testimonial__slider owl-carousel">
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="testimonial__text">
                                <p>Being a counsellor at SGC I am thrilled by the quality of support providing to the NITC family through the Sahayak website. It is reliable, and fast and no complications. Sahayak is a great service and finally helping us to live in Mental health in better and beautiful way...</p>
                                <img src="{{ asset('/img/team/aneesh.PNG') }}" alt="">
                                <h5>Dr Aneesh T<span>- psychologist</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="testimonial__text">
                                <p>As a Counsellor at SGC, I used to help and support people to manage their lives. But Covid 19 outbreak changed everything and we are compelled to provide online Psychological services. We have now taken a new step through Sahaayak Website.  It is going to be a major milestone in SGC's development. Sahaayak is really an user friendly, easy to handle platform which assures 100% confidentiality.</p>                                
                                <img src="{{ asset('/img/team/neethu.PNG') }}" alt="">
                                <h5>Neethu A T<span>- Psychologist</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>I am beyond impressed with the help we received here,and continue to receive. Counsellors are professional, open minded, accessible and knowledgeable. I am happy.</p>
                                <img src="img/testimonial/default.PNG" alt="">
                                <h5>Anonymous<span>- Student</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>The SGC Teams are extremely well-trained and provide a welcoming safe space for all of the students! I would highly highly recommend the SGC to anyone and everyone!</p>
                                <img src="img/testimonial/default.PNG" alt="">
                                <h5>Anonymous<span>- Student</span></h5>
                            </div>
                        </div>
                    </div>
                </div> 
             </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
    @endsection