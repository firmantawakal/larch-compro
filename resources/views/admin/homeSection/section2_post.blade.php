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
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Section 2 Post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('section2.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label>Title:</label>
                                            <input type="text" name="subtitle" class="form-control"
                                                placeholder="Judul Post">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Content:</label>
                                            <textarea name="content"  rows="3"></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Image:</label>
                                            <input type="file" name="image" class="form-control">
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
                                    <th scope="col">Content</th>
                                    <th style="min-width: 190px" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($section2s as $section2)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $section2->subtitle }}</td>
                                        <td>{{trimText($section2->content)}}</td>
                                        <td>
                                            <div class="btn-toolbar" style="padding-left: 15px">
                                                <button data-bs-toggle="modal"
                                                    data-bs-target="#imageModal{{ $section2->id }}"
                                                    class="btn btn-xs btn-info" style="margin-right:10px;height: 31px;">Image</button>
                                                <button data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $section2->id }}"
                                                    class="btn btn-xs btn-primary" style="margin-right:10px;height: 31px;">Edit</button>
                                                <form onsubmit="return confirm('Yakin ingin menghapus data?');"
                                                    action="{{ route('section2.destroy', $section2->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal edit-->
                                    <div class="modal fade" id="editModal{{ $section2->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Section 2 Post</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ route('section2.update', $section2->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('patch')
                                                        <div class="form-group mb-3">
                                                            <label>Title:</label>
                                                            <input type="text" name="subtitle" class="form-control"
                                                                placeholder="Judul Post" value={{$section2->subtitle}}>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label>Content:</label>
                                                            <textarea name="content" rows="3">{{$section2->content}}</textarea>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label>Image:</label>
                                                            <input type="file" name="image" class="form-control">
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
                                    <div class="modal fade" id="imageModal{{ $section2->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="{{ url('image/home/'.$section2->image)}}">
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