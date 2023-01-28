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
                <button data-bs-toggle="modal" data-bs-target="#createModal" class="btn btn-md btn-success mb-3"><i class="nav-icon fas fa-plus"></i></button>
                <!-- Modal create-->
                <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group mb-3">
                                    <label>Nama User:</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nama User">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email:</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password:</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Role:</label>
                                    <select name="role" class="form-control" required placeholder="Role">
                                        <option value="author">Author</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                <table id="dataTable" class="table table-bordered">
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
                        @forelse ($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <div class="d-inline-flex">
                                    <button data-bs-toggle="modal" data-bs-target="#editModal{{$user->id}}" class="btn btn-sm btn-primary" style="margin-right:10px"><i class="fas fa-edit"></i></button>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-box"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal edit-->
                        <div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                        <div class="form-group mb-3">
                                            <label>Nama User:</label>
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Nama User">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Email:</label>
                                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Password:</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Role:</label>
                                            <select name="role" class="form-control" required placeholder="Role">
                                                <option @if ($user->role == 'author') selected @endif value="author">Author</option>
                                                <option @if ($user->role == 'admin') selected @endif value="admin">Admin</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </tbody>
                </table>
                {{ $users->links() }}
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
                            @forelse ($users_archive as $user_arc)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $user_arc->name }}</td>
                                <td>{{ $user_arc->email }}</td>
                                <td>{{ $user_arc->role }}</td>

                                <td class="text-center">
                                    <button data-bs-toggle="modal" data-bs-target="#editModalArc{{$user_arc->id}}" class="btn btn-sm btn-primary mr-2"><i class="fa fa-edit"></i></button>
                                    <a href="{{ route('user.unarchive', $user_arc->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-box-open"></i></a>
                                </td>
                            </tr>
                            <!-- Modal edit-->
                            <div class="modal fade" id="editModalArc{{$user_arc->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('user.update', $user_arc->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                            <div class="form-group mb-3">
                                                <label>Nama User:</label>
                                                <input type="text" name="name" value="{{ $user_arc->name }}" class="form-control" placeholder="Nama User">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Email:</label>
                                                <input type="text" name="email" value="{{ $user_arc->email }}" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Password:</label>
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Role:</label>
                                                <select name="role" class="form-control" required placeholder="Role">
                                                    <option value="">--Pilih--</option>
                                                    <option @if ($user_arc->role == 'admin') selected @endif value="admin">Admin</option>
                                                    <option @if ($user_arc->role == 'author') selected @endif value="author">Author</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    {{ $users->links() }}
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
