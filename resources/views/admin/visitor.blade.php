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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <label>Whoops!</label> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="main-tab" data-bs-toggle="pill" href="#main" role="tab"
                                aria-controls="custom-tabs-four-home" aria-selected="true">Aktif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="archive-tab" data-bs-toggle="pill" href="#archive" role="tab"
                                aria-controls="archive" aria-selected="false">Arsip</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade active show" id="main" role="tabpanel" aria-labelledby="main-tab">
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table table-stripe" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Jenis Pembangunan</th>
                                            <th scope="col">Alamat Lokasi</th>
                                            <th scope="col">Luas Tanah</th>
                                            <th scope="col">File</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($visitors as $visitor)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $visitor->nama }}</td>
                                                <td>{{ $visitor->alamat . ', ' . ucwords(strtolower($visitor->kota)) }}</td>
                                                <td>{{ $visitor->jenisPembangunan->nama_jenis }}</td>
                                                <td>{{ $visitor->alamat_lokasi . ', ' . ucwords(strtolower($visitor->kota_lokasi)) }}</td>
                                                <td>{{ $visitor->luas_tanah1 . 'm X ' . $visitor->luas_tanah2.' m' }}</td>
                                                <td><a href="{{ url('image/visitor/'.$visitor->file)}}" target="_blank" rel="noopener noreferrer">Buka File</a></td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <form onsubmit="return confirm('Yakin ingin mengarsip data?');"
                                                            action="{{ route('visitor.destroy', $visitor->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-xs btn-danger">Arsipkan</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Modal edit-->
                                            <div class="modal fade" id="editModal{{ $visitor->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            </div>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- ARCHIVE TAG --}}
                        <div class="tab-pane fade" id="archive" role="tabpanel" aria-labelledby="archive-tab">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-stripe" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Jenis Pembangunan</th>
                                            <th scope="col">Alamat Lokasi</th>
                                            <th scope="col">Luas Tanah</th>
                                            <th scope="col">File</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($visitors_archive as $visitor_arc)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $visitor_arc->nama }}</td>
                                                <td>{{ $visitor_arc->alamat . ', ' . ucwords(strtolower($visitor_arc->kota)) }}</td>
                                                <td>{{ $visitor_arc->jenisPembangunan->nama_jenis }}</td>
                                                <td>{{ $visitor_arc->alamat_lokasi . ', ' . ucwords(strtolower($visitor_arc->kota_lokasi)) }}</td>
                                                <td>{{ $visitor_arc->luas_tanah1 . 'm X ' . $visitor_arc->luas_tanah2.' m' }}</td>
                                                <td><a href="{{ url('image/visitor/'.$visitor_arc->file)}}" target="_blank" rel="noopener noreferrer">Buka File</a> </td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="{{ route('visitor.unarchive', $visitor_arc->id) }}" class="btn btn-xs btn-warning">Aktifkan</a>

                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Modal edit-->
                                            <div class="modal fade" id="editModal{{ $visitor->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            </div>
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
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
