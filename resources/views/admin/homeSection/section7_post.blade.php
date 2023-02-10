<style>
    td {
        white-space: normal !important;
    }
</style>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Post Data</h6>
                <button data-bs-toggle="modal" data-bs-target="#createModal"
                        class="btn btn-xs btn-success mb-3">Tambah</button>
                    <!-- Modal create-->
                    <div class="modal fade" id="createModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Section 7 Post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('section7.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label>Title:</label>
                                            <input type="text" name="subtitle" class="form-control"
                                                placeholder="Judul Post">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>List A:</label>
                                            <input type="text" name="list_a" class="form-control"
                                                placeholder="List A">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>List B:</label>
                                            <input type="text" name="list_b" class="form-control"
                                                placeholder="List B">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>List C:</label>
                                            <input type="text" name="list_c" class="form-control"
                                                placeholder="List C">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th style="min-width: 20px" scope="col">No.</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">List A</th>
                                    <th scope="col">List B</th>
                                    <th scope="col">List C</th>
                                    <th style="min-width: 190px" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($section2s as $section7)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $section7->subtitle }}</td>
                                        <td>{{ $section7->list_a }}</td>
                                        <td>{{ $section7->list_b }}</td>
                                        <td>{{ $section7->list_c }}</td>
                                        <td>
                                            <div class="btn-toolbar" style="padding-left: 15px">
                                                <button data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $section7->id }}"
                                                    class="btn btn-xs btn-primary" style="margin-right:10px;height: 31px;">Edit</button>
                                                <form onsubmit="return confirm('Yakin ingin menghapus data?');"
                                                    action="{{ route('section7.destroy', $section7->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal edit-->
                                    <div class="modal fade" id="editModal{{ $section7->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Section 2 Post</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ route('section7.update', $section7->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('patch')
                                                        <div class="form-group mb-3">
                                                            <label>Title:</label>
                                                            <input type="text" name="subtitle" class="form-control"
                                                                placeholder="Judul Post" value={{$section7->subtitle}}>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label>List A:</label>
                                                            <input type="text" name="list_a" class="form-control"
                                                                placeholder="List A" value={{$section7->list_a}}>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label>List B:</label>
                                                            <input type="text" name="list_b" class="form-control"
                                                                placeholder="List B" value={{$section7->list_b}}>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label>List C:</label>
                                                            <input type="text" name="list_c" class="form-control"
                                                                placeholder="List C" value={{$section7->list_c}}>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal image-->
                                    <div class="modal fade" id="imageModal{{ $section7->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="{{ url('image/home/'.$section7->image)}}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>

@push('custom-scripts')
    <script>
        $('textarea').each(function() {
            var simplemde = new SimpleMDE({
                element: this,
            });
        });
    </script>
@endpush