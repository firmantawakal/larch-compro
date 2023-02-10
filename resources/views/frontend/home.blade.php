@extends('frontend.layout.master')

@section('content')

    <!-- Start Banner
    ============================================= -->
    <div class="banner-area content-double bg-theme-small normal-text default-padding-top">
        <div class="side-bg ">
            <img class="" src="{{ url('image/home/'.$dt_home->section1_image)}}" alt="Thumb" style="min-width: 70%;">
        </div>
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 info" style="padding-bottom:30px">
                            <h2>{{$dt_home->section1_title}}</h2>
                            <div class="btn-toolbar" >
                                <button type="button" class="btn btn-theme" onclick="window.location='{{url('signup')}}'">Sign up</button>
                                <a type="button" class="btn btn-dark border" target="_blank" href='https://wa.me/{{$dt_setting->whatsapp}}'>Contact us</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="blogs">
                                <h2 class="border-top">{{$dt_home->section1_subtitle1}}</h2>
                                <p>
                                    {{$dt_home->section1_content1}}
                                </p>
                                <a href="#" style="color: #F54703">Learn more <i class="fas fa-angle-right"></i></a>
                            </div>
                            <div class="blogs">
                                <h2 class="border-top">{{$dt_home->section1_subtitle2}}</h2>
                                <p>
                                    {{$dt_home->section1_content2}}
                                </p>
                                <a href="#" style="color: #F54703;">Learn more <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our Features
    ============================================= -->
    <div class="case-study-area carousel-shadow default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading">
                        <h2>{{$dt_home->section2_title1}}</h2>
                        <h4>{{$dt_home->section2_title2}}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="case-items">
                    <div class="col-md-12">
                        <div class="case-carousel owl-carousel owl-theme">
                        	@foreach ($section2 as $sec2)
                            <!-- Start Single Item -->
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ url('image/home/'.$sec2->image)}}" alt="Thumb">
                                    <div class="top-info">
                                        <h4><a href="{{url('detail/2/'.$sec2->id)}}">{{$sec2->subtitle}}</a></h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        {{-- {{$sec2->content}} --}}
                                        @php 
                                        $str = $sec2->content;
                                        if (strlen($str) > 140)
                                        {
                                            $str = substr($str, 0, 140);
                                            $str = explode(' ', $str);
                                            array_pop($str); // remove last word from array
                                            $str = implode(' ', $str);
                                            $str = $str . ' ...';
                                        }
                                        echo $str;
                                        @endphp
                                    </p>
                                    <br>
                                    <a href="{{url('detail/2/'.$sec2->id)}}" class="btn btn-theme border btn-sm">Pelajari lebih lanjut</a>

                                </div>
                            </div>
                
                            <!-- End Single Item -->
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Features -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area default-padding-bottom bg-theme-small">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="{{ url('image/home/'.$dt_home->section3_image)}}" alt="Thumb">
                </div>
                <div class="col-md-7 info">
                    <h2>{{$dt_home->section3_title}}</h2>
                    <p>
                        {{$dt_home->section3_content}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start Our Features
    ============================================= -->
    <div class="our-feautes-area bg-light less-border default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Single Item -->
                <div class="col-md-6 default-padding-bottom">
                    <h4>{{$dt_home->section4_title1}}</h4>
                    <h3>{{$dt_home->section4_title2}}</h3 >
                    <ul>
                        <li>
                            <i class="fas fa-check-circle icon-list"></i>
                            <div class="text-list">{{$dt_home->section4_list1}}</div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle icon-list"></i>
                            <div class="text-list">{{$dt_home->section4_list2}}</div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle icon-list"></i>
                            <div class="text-list">{{$dt_home->section4_list3}}</div>
                        </li>
                    </ul>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-md-5 col-md-offset-1 single-item">
                    <div class="item" style="background-color:#fdf4ef; padding: 45px 0px 0px 45px;">
                        <img src="{{ url('image/home/'.$dt_home->section4_image)}}" alt="Thumb">
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Our Features -->

    <!-- Start Our Features
    ============================================= -->
    <div class="our-feautes-area bg-light less-border default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item" style="background-color:#fdf4ef;padding: 45px 0px 0px 45px;">
                        <img src="{{ url('image/home/'.$dt_home->section5_image)}}" alt="Thumb">
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-md-7 col-md-offset-1">
                    <h4>{{$dt_home->section5_title1}}​</h4>
                    <h3>{{$dt_home->section5_title2}}</h3 >
                    <ul>
                        <li>
                            <i class="fas fa-check-circle icon-list"></i>
                            <div class="text-list">{{$dt_home->section5_list1}}</div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle icon-list"></i>
                            <div class="text-list">{{$dt_home->section5_list2}}</div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle icon-list"></i>
                            <div class="text-list">{{$dt_home->section5_list3}}</div>
                        </li>
                    </ul>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Our Features -->

    <!-- Start Our Features
    ============================================= -->
    <div class="our-feautes-area bg-light less-border default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Single Item -->
                <div class="col-md-7 default-padding-bottom">
                    <h4>{{$dt_home->section6_title1}}</h4>
                    <h3>{{$dt_home->section6_title2}}</h3 >
                    <ul>
                        <li>
                            <i class="fas fa-check-circle icon-list"></i>
                            <div class="text-list">{{$dt_home->section6_list1}}</div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle icon-list"></i>
                            <div class="text-list">{{$dt_home->section6_list2}}</div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle icon-list"></i>
                            <div class="text-list">{{$dt_home->section6_list3}}</div>
                        </li>
                    </ul>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-md-4 col-md-offset-1 single-item">
                    <div class="item" style="background-color:#fdf4ef; padding: 45px 0px 0px 45px;">
                        <img src="{{ url('image/home/'.$dt_home->section6_image)}}" alt="Thumb">
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Our Features -->

    <!-- Start Our Features
    ============================================= -->
    <div class="our-feautes-area bg-theme-small less-border default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading">
                        <h2>{{$dt_home->section7_title1}}</h2>
                        <h4>{{$dt_home->section7_title2}}</h4>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 30px;">
                <!-- Start Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <h4>{{$dt_home->section7_subtitle1}}</h4>
                        <ul>
                            <li>
                                <i class="fas fa-check-circle icon-list"></i>
                                <div class="text-list">{{$dt_home->section7_list1_a}}</div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle icon-list"></i>
                                <div class="text-list">{{$dt_home->section7_list1_b}}</div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle icon-list"></i>
                                <div class="text-list">{{$dt_home->section7_list1_c}}</p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-theme border btn-sm">Pelajari lebih lanjut</a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <h4>{{$dt_home->section7_subtitle2}}</h4>
                        <ul>
                            <li>
                                <i class="fas fa-check-circle icon-list"></i>
                                <div class="text-list">{{$dt_home->section7_list2_a}}</div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle icon-list"></i>
                                <div class="text-list">{{$dt_home->section7_list2_b}}</div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle icon-list"></i>
                                <div class="text-list">{{$dt_home->section7_list2_c}}</p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-theme border btn-sm">Pelajari lebih lanjut</a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <h4>{{$dt_home->section7_subtitle3}}</h4>
                        <ul>
                            <li>
                                <i class="fas fa-check-circle icon-list"></i>
                                <div class="text-list">{{$dt_home->section7_list3_a}}</div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle icon-list"></i>
                                <div class="text-list">{{$dt_home->section7_list3_b}}</div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle icon-list"></i>
                                <div class="text-list">{{$dt_home->section7_list3_c}}</p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-theme border btn-sm">Pelajari lebih lanjut</a>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Our Features -->

    <!-- Start SEO Test
    ============================================= -->
    <div class="seo-form-area text-center bg-dark text-light default-padding">
        <div class="container">
            <div class="row" style="padding-bottom: 20px;">
                <div class="col-md-8 col-md-offset-2">
                    <h2>{{$dt_home->section8_title1}}</h2>
                    <h4>{{$dt_home->section8_title2}}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <button type="button" class="btn btn-theme">Sign up</button>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <div class="form-group">
                                <button type="button" onclick="javascript:window.open('https://wa.me/{{$dt_setting->whatsapp}}', '_blank')" class="btn btn-light border">Contact us</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End SEO Test -->
    @endsection
