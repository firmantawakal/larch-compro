@extends('layout.master')

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
                        {{-- @php
                            dd($dt_home)
                        @endphp --}}
                        <h6 class="card-title">Section 1</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" name="section1_title" value="{{$dt_home->section1_title}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Subtitle 1</label>
                                    <input type="text" name="section1_subtitle1" value="{{$dt_home->section1_subtitle1}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Content 1</label>
                                    <textarea class="form-control" name="section1_content1" id="" rows="2">{{$dt_home->section1_content1}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Subtitle 2</label>
                                    <input type="text" name="section1_subtitle2" value="{{$dt_home->section1_subtitle2}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Content 2</label>
                                    <textarea class="form-control" name="section1_content2" id="" rows="2">{{$dt_home->section1_content2}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Image</label>
                                    <input type="file" class="form-control" name="section1_image" id="">
                                </div>
                            </div>
                        </div>
                        {{-- ------------------ END SECTION 1 ------------------ --}}
                        <hr>
                        <h6 class="card-title">Section 2</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title 1</label>
                                    <input type="text" name="section2_title1" value="{{$dt_home->section2_title1}}" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="col-form-label">Subtitle 1</label>
                                    <input type="text" name="section2_subtitle1" value="{{$dt_home->section2_subtitle1}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Content 1</label>
                                    <textarea class="form-control" name="section2_content1" id="" rows="2">{{$dt_home->section2_content1}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Image 1</label>
                                    <input type="file" class="form-control" name="section2_image1" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title 2</label>
                                    <input type="text" name="section2_title2" value="{{$dt_home->section2_title2}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Subtitle 2</label>
                                    <input type="text" name="section2_subtitle2" value="{{$dt_home->section2_subtitle2}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Content 2</label>
                                    <textarea class="form-control" name="section2_content2" id="" rows="2">{{$dt_home->section2_content2}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Image 2</label>
                                    <input type="file" class="form-control" name="section2_image2" id="">
                                </div>
                            </div>
                        </div>
                        {{-- ------------------ END SECTION 2 ------------------ --}}

                        <hr>
                        <h6 class="card-title">Section 3</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" name="section3_title" value="{{$dt_home->section3_title}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Content</label>
                                    <textarea class="form-control" name="section3_content" id="" rows="2">{{$dt_home->section3_content}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Image</label>
                                    <input type="file" class="form-control" name="section3_image" id="">
                                </div>
                            </div>
                        </div>
                        {{-- ------------------ END SECTION 3 ------------------ --}}

                        <hr>
                        <h6 class="card-title">Section 4</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title 1</label>
                                    <input type="text" name="section4_title1" value="{{$dt_home->section4_title1}}" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="col-form-label">Title 2</label>
                                    <input type="text" name="section4_title2" value="{{$dt_home->section4_title2}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Image</label>
                                    <input type="file" class="form-control" name="section4_image" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">List 1</label>
                                    <textarea class="form-control" name="section4_list1" id="" rows="2">{{$dt_home->section4_list1}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 2</label>
                                    <textarea class="form-control" name="section4_list2" id="" rows="2">{{$dt_home->section4_list2}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 3</label>
                                    <textarea class="form-control" name="section4_list3" id="" rows="2">{{$dt_home->section4_list3}}</textarea>
                                </div>
                                
                            </div>
                        </div>
                        {{-- ------------------ END SECTION 4 ------------------ --}}

                        <hr>
                        <h6 class="card-title">Section 5</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title 1</label>
                                    <input type="text" name="section5_title1" value="{{$dt_home->section5_title1}}" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="col-form-label">Title 2</label>
                                    <input type="text" name="section5_title2" value="{{$dt_home->section5_title2}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Image</label>
                                    <input type="file" class="form-control" name="section5_image" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">List 1</label>
                                    <textarea class="form-control" name="section5_list1" id="" rows="2">{{$dt_home->section5_list1}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 2</label>
                                    <textarea class="form-control" name="section5_list2" id="" rows="2">{{$dt_home->section5_list2}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 3</label>
                                    <textarea class="form-control" name="section5_list3" id="" rows="2">{{$dt_home->section5_list3}}</textarea>
                                </div>
                                
                            </div>
                        </div>
                        {{-- ------------------ END SECTION 5 ------------------ --}}

                        <hr>
                        <h6 class="card-title">Section 6</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title 1</label>
                                    <input type="text" name="section6_title1" value="{{$dt_home->section6_title1}}" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="col-form-label">Title 2</label>
                                    <input type="text" name="section6_title2" value="{{$dt_home->section6_title2}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Image</label>
                                    <input type="file" class="form-control" name="section6_image" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">List 1</label>
                                    <textarea class="form-control" name="section6_list1" id="" rows="2">{{$dt_home->section6_list1}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 2</label>
                                    <textarea class="form-control" name="section6_list2" id="" rows="2">{{$dt_home->section6_list2}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 3</label>
                                    <textarea class="form-control" name="section6_list3" id="" rows="2">{{$dt_home->section6_list3}}</textarea>
                                </div>
                                
                            </div>
                        </div>
                        {{-- ------------------ END SECTION 6 ------------------ --}}

                        <hr>
                        <h6 class="card-title">Section 7</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title 1</label>
                                    <input type="text" name="section7_title1" value="{{$dt_home->section7_title1}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title 2</label>
                                    <input type="text" name="section7_title2" value="{{$dt_home->section7_title2}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="col-form-label">Subtitle 1</label>
                                    <input type="text" name="section7_subtitle1" value="{{$dt_home->section7_subtitle1}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 1 (a)</label>
                                    <textarea class="form-control" name="section7_list1_a" id="" rows="2">{{$dt_home->section7_list1_a}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 1 (b)</label>
                                    <textarea class="form-control" name="section7_list1_b" id="" rows="2">{{$dt_home->section7_list1_b}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 1 (c)</label>
                                    <textarea class="form-control" name="section7_list1_c" id="" rows="2">{{$dt_home->section7_list1_c}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="col-form-label">Subtitle 2</label>
                                    <input type="text" name="section7_subtitle2" value="{{$dt_home->section7_subtitle2}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 2 (a)</label>
                                    <textarea class="form-control" name="section7_list2_a" id="" rows="2">{{$dt_home->section7_list2_a}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 2 (b)</label>
                                    <textarea class="form-control" name="section7_list2_b" id="" rows="2">{{$dt_home->section7_list2_b}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 2 (c)</label>
                                    <textarea class="form-control" name="section7_list2_c" id="" rows="2">{{$dt_home->section7_list2_c}}</textarea>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="col-form-label">Subtitle 3</label>
                                    <input type="text" name="section7_title2" value="{{$dt_home->section7_title2}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 3 (a)</label>
                                    <textarea class="form-control" name="section7_list3_a" id="" rows="2">{{$dt_home->section7_list3_a}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 3 (b)</label>
                                    <textarea class="form-control" name="section7_list3_b" id="" rows="2">{{$dt_home->section7_list3_b}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">List 3 (c)</label>
                                    <textarea class="form-control" name="section7_list3_c" id="" rows="2">{{$dt_home->section7_list3_c}}</textarea>
                                </div>
                                
                            </div>
                        </div>
                        {{-- ------------------ END SECTION 7 ------------------ --}}


                        <hr>
                        <h6 class="card-title">Section 8</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title 1</label>
                                    <input type="text" name="section8_title1" value="{{$dt_home->section8_title1}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">Title 2</label>
                                    <input type="text" name="section8_title2" value="{{$dt_home->section8_title2}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        {{-- ------------------ END SECTION 8 ------------------ --}}

                        {{-- <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a> --}}
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
