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
                    <form action="{{ route('home.setting.update', $dt_setting->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        
                        <h6 class="card-title">Setting</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-form-label">No. Whatsapp</label>
                                    <input type="number" name="whatsapp" value="{{$dt_setting->whatsapp}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        {{-- ------------------ END SECTION 1 ------------------ --}}
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
