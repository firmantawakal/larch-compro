@extends('layout.master')

@push('plugin-styles')
    <!-- Plugin css import here -->
@endpush

@section('content')
<!-- Page content here -->
<div class="row">
    <div class="col-md-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5><i class="icon fas fa-check"></i> Berhasil!</h5>{{ $message }}
            </div>
        @endif
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
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="main-tab" data-bs-toggle="pill" href="#main" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Aktif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="archive-tab" data-bs-toggle="pill" href="#archive" role="tab" aria-controls="archive" aria-selected="false">Arsip</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade active show" id="main" role="tabpanel" aria-labelledby="main-tab">
                
                <table id="dataTableExample" class="table table-stripe">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Pembangunan</th>
                            <th scope="col">Lokasi Pembangunan</th>
                            <th scope="col">Alamat Lokasi</th>
                            <th scope="col">Luas Tanah</th>
                            <th scope="col">File</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($visitors as $visitor)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $visitor->nama }}</td>
                            <td>{{ $visitor->alamat.', '.$visitor->kota }}</td>
                            <td>{{ $visitor->jenis_pembangunan }}</td>
                            <td>{{ $visitor->lokasi_pembangunan }}</td>
                            <td>{{ $visitor->alamat_lokasi.', '.$visitor->kota_lokasi }}</td>
                            <td>{{ $visitor->luas_tanah1.', '.$visitor->luas_tanah2 }}</td>
                            <td>{{ $visitor->file }}</td>
                            <td>
                                <div class="d-inline-flex">
                                    <button data-bs-toggle="modal" data-bs-target="#editModal{{$visitor->id}}" class="btn btn-sm btn-primary" style="margin-right:10px"><i class="fas fa-edit"></i></button>
                                    {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('visitor.destroy', $visitor->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-box"></i></button>
                                    </form> --}}
                                </div>
                            </td>
                        </tr>
                        <!-- Modal edit-->
                        <div class="modal fade" id="editModal{{$visitor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            {{-- <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('visitor.update', $visitor->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                        <div class="form-group mb-3">
                                            <label>Nama User:</label>
                                            <input type="text" name="name" value="{{ $visitor->name }}" class="form-control" placeholder="Nama User">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Email:</label>
                                            <input type="text" name="email" value="{{ $visitor->email }}" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Password:</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Role:</label>
                                            <select name="role" class="form-control" required placeholder="Role">
                                                <option @if ($visitor->role == 'author') selected @endif value="author">Author</option>
                                                <option @if ($visitor->role == 'admin') selected @endif value="admin">Admin</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                                </div>
                            </div>
                            </div> --}}
                        </div>
                        @empty
                        @endforelse
                    </tbody>
                </table>
                {{ $visitors->links() }}
                </div>
                {{-- ARCHIVE TAG --}}
                <div class="tab-pane fade" id="archive" role="tabpanel" aria-labelledby="archive-tab">
                    <table id="dataTable2" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama User</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($visitors_archive as $visitor_arc)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $visitor_arc->name }}</td>
                                <td>{{ $visitor_arc->email }}</td>
                                <td>{{ $visitor_arc->role }}</td>

                                <td class="text-center">
                                    <button data-bs-toggle="modal" data-bs-target="#editModalArc{{$visitor_arc->id}}" class="btn btn-sm btn-primary mr-2"><i class="fa fa-edit"></i></button>
                                    {{-- <a href="{{ route('visitor.unarchive', $visitor_arc->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-box-open"></i></a> --}}
                                </td>
                            </tr>
                            <!-- Modal edit-->
                            <div class="modal fade" id="editModalArc{{$visitor_arc->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                {{-- <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('visitor.update', $visitor_arc->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                            <div class="form-group mb-3">
                                                <label>Nama User:</label>
                                                <input type="text" name="name" value="{{ $visitor_arc->name }}" class="form-control" placeholder="Nama User">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Email:</label>
                                                <input type="text" name="email" value="{{ $visitor_arc->email }}" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Password:</label>
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Role:</label>
                                                <select name="role" class="form-control" required placeholder="Role">
                                                    <option value="">--Pilih--</option>
                                                    <option @if ($visitor_arc->role == 'admin') selected @endif value="admin">Admin</option>
                                                    <option @if ($visitor_arc->role == 'author') selected @endif value="author">Author</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                    </div>
                                </div>
                                </div> --}}
                            </div>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    {{ $visitors->links() }}
                </div>
                </div>
            </div>
            <!-- /.card -->
            </div>
    </div>
</div>
@endsection

@push('plugin-scripts')
    <!-- Plugin js import here -->
@endpush

@push('custom-scripts')
    <!-- Custom js here -->
@endpush
