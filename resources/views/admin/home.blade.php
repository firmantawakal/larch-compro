@extends('layout.master')

<style>
    .hide{
        display: none;
    }
</style>
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <label>Whoops!</label> There were some problems with your input.<br><br>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <h5><i data-feather="check"></i> Berhasil!</h5>{{ $message }}
                        </div>
                    @endif
                    <form action="{{ route('home.update', $dt_home->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="section" value="{{$section}}" class="form-control">
                        @if($section==1)
                            @include('admin.homeSection.section1')
                        @elseif ($section==2)
                            @include('admin.homeSection.section2')
                        @elseif ($section==3)
                            @include('admin.homeSection.section3')
                        @elseif ($section==4)
                            @include('admin.homeSection.section4')
                        @elseif ($section==5)
                            @include('admin.homeSection.section5')
                        @elseif ($section==6)
                            @include('admin.homeSection.section6')
                        @elseif ($section==7)
                            @include('admin.homeSection.section7')
                        @elseif ($section==8)
                            @include('admin.homeSection.section8')
                        @endif
                        
                        <button type="submit" class="btn btn-xs btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if($section==2)
        @include('admin.homeSection.section2_post')
    @endif
    @if($section==7)
        @include('admin.homeSection.section7_post')
    @endif
@endsection