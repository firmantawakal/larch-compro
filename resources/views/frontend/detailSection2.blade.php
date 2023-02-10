@extends('frontend.layout.master')

@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{url('image/home-blueprints.jpeg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{$sectionData->subtitle}}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area bg-gray single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-12">
                        <div class="item">
                            <div class="content-box">
                                <img src="{{ url('image/home/'.$sectionData->image)}}" alt="Thumb" style="max-width: 100%;padding-bottom:20px">
                                <p>{{$sectionData->content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
   
@endsection

@push('custom-scripts')


@endpush
