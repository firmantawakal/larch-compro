@extends('frontend.layout.master')

@section('content')
<style>
    .field-icon {
        float: right;
        padding-right: 20px;
        margin-top: -30px;
        position: relative;
        z-index: 2;
    }
</style>
    <!-- Start Contact Area
    ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Contact -->
                <div class="col-md-8 contact-form col-md-offset-2">
                    <div class="form-box">
                        <h2>Get Started</h2>
                        <h4>Selamat datang di Larch - buat akun anda</h4>
                        <form class="contact-form" enctype="multipart/form-data" method="POST">
                            <div class="col-12">
                                <div class="form-group required">
                                        <label for="" class='control-label'>Nama</label>
                                        <input class="form-control" id="nama" placeholder="Nama Anda"
                                            type="text" required>
                                        <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group required">
                                        <label for="" class='control-label'>Email</label>
                                        <input class="form-control" id="email" placeholder="Email Anda"
                                            type="email" required>
                                        <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group required">
                                        <label for="" class='control-label'>Password</label>
                                        <input class="form-control" id="password" placeholder="Password Anda"
                                            type="password" required>
                                        <span toggle="#password" class="fa fa-sun field-icon toggle-password"></span>
                                        <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group required">
                                        <label for="" class='control-label'>Alamat Anda</label>
                                        <textarea class="form-control" id="alamat" rows="2" placeholder="Alamat lengkap" required></textarea>
                                        <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="select2-provinsi"></select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control select2-data-array browser-default" id="select2-kabupaten"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group required">
                                    <label for="telp" class='control-label'>No. Telepon</label>
                                    <input type="text" class="form-control" id="no_telp" placeholder="123-456" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="jenis_pembangunan">Jenis Pembangunan</label>
                                    <select class="form-control" id="jenis_pembangunan" required>
                                        <option value="">-- Pilih Jenis Pembangunan --</option>
                                        @foreach ($jenisPembangunan as $jp)
                                            <option value="{{$jp->id}}">{{$jp->nama_jenis}}</option>
                                        @endforeach   
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class='control-label'>Lokasi Pembangunan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="field">
                                        <div class="form-group">
                                            <label for="a">
                                                <input onclick="showAddress(0)" type="radio" name="issame_location" value="1" checked style="min-height: 0px !important;">Sama dengan alamat anda &nbsp;&nbsp;
                                            </label>
                                            <label for="b">
                                                <input onclick="showAddress(1)" type="radio" name="issame_location" value="0" style="min-height: 0px !important;">Berbeda dengan alamat anda
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 showAddress" style="display: none;">
                                <div class="form-group">
                                        <textarea class="form-control" id="alamat_lokasi" rows="2" placeholder="Alamat Lokasi"></textarea>
                                        <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="row showAddress" style="display: none;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="select2-provinsi2"></select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control select2-data-array browser-default" id="select2-kabupaten2"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class='control-label'>Luas Tanah</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group required">
                                      <input type="number"
                                        class="form-control" id="luas_tanah1" aria-describedby="helpId" placeholder="Panjang" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group required">
                                        <input type="number" class="form-control" id="luas_tanah2" aria-describedby="helpId" placeholder="Lebar" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                  <label for="telp" class='control-label'>Upload File</label>
                                  <input 
                                    name="file" 
                                    id="input-file" 
                                    required 
                                    type="file" 
                                    class="dropify" 
                                    data-height="100" 
                                    data-show-remove="false" 
                                    data-max-file-size="2M" 
                                    multiple
                                    />
                                    <small>Format file yang didukung : .pdf, .jpg, .jpeg, .png</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <button class="btn btn-theme" onclick="submitData()">
                                        Sign Up</i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Contact -->
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection

@push('custom-scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    var urlProvinsi  = "https://ibnux.github.io/data-indonesia/provinsi.json";
    var urlKabupaten = "https://ibnux.github.io/data-indonesia/kabupaten/";

    function clearOptions(id) {
        $('#' + id).empty().trigger('change');
    }

    $.getJSON(urlProvinsi, function (res) {

        res = $.map(res, function (obj) {
            obj.text = obj.nama
            return obj;
        });

        data = [{
            id: "",
            nama: "- Pilih Provinsi -",
            text: "- Pilih Provinsi -"
        }].concat(res);

        //implemen data ke select provinsi
        $("#select2-provinsi").select2({
            dropdownAutoWidth: true,
            width: '100%',
            data: data
        })
        $("#select2-provinsi2").select2({
            dropdownAutoWidth: true,
            width: '100%',
            data: data
        })
    });

    var selectProv = $('#select2-provinsi');
    var selectProv2 = $('#select2-provinsi2');
    $(selectProv).change(function () {
        var value = $(selectProv).val();
        clearOptions('select2-kabupaten');

        if (value) {
            var text = $('#select2-provinsi :selected').text();
            $.getJSON(urlKabupaten + value + ".json", function(res) {

                res = $.map(res, function (obj) {
                    obj.text = obj.nama
                    return obj;
                });

                data = [{
                    id: "",
                    nama: "- Pilih Kabupaten / Kota -",
                    text: "- Pilih Kabupaten / Kota -"
                }].concat(res);

                //implemen data ke select provinsi
                $("#select2-kabupaten").select2({
                    dropdownAutoWidth: true,
                    width: '100%',
                    data: data
                })
            })
        }
    });

    $(selectProv2).change(function () {
        var value = $(selectProv2).val();
        clearOptions('select2-kabupaten2');

        if (value) {
            var text = $('#select2-provinsi2 :selected').text();
            $.getJSON(urlKabupaten + value + ".json", function(res) {

                res = $.map(res, function (obj) {
                    obj.text = obj.nama
                    return obj;
                });

                data = [{
                    id: "",
                    nama: "- Pilih Kabupaten / Kota -",
                    text: "- Pilih Kabupaten / Kota -"
                }].concat(res);

                //implemen data ke select provinsi
                $("#select2-kabupaten2").select2({
                    dropdownAutoWidth: true,
                    width: '100%',
                    data: data
                })
            })
        }
    });

    var selectKab = $('#select2-kabupaten');
    var selectKab2 = $('#select2-kabupaten2');
    $(selectKab).change(function () {
        var value = $(selectKab).val();
        if (value) {
            var text = $('#select2-kabupaten :selected').text();
        }
    });
    $(selectKab2).change(function () {
        var value = $(selectKab2).val();
        if (value) {
            var text = $('#select2-kabupaten2 :selected').text();
        }
    });

    function showAddress(status){
        if (status == 1) {
            $(".showAddress").show();
        }else{
            $(".showAddress").hide();
        }
    }

    let totalImage = 0;
    $("#input-file").change(function(e) {
        var inp = document.getElementById('input-file');
        totalImage = inp.files.length
        for (var i = 0; i < totalImage; ++i) {
            var name = inp.files.item(i).name;
            var validation = fileValidation(inp.files.item(i))
            if (validation=='invalid') {
                // e.target.value = null;
            }
        }
    });

    $(".toggle-password").click(function() {
        // $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    function fileValidation(fileInput) {
        var allowedExtensions = /(\.pdf|\.jpg|\.jpeg|\.png|\.gif)$/i;
            
        if (!allowedExtensions.exec(fileInput.name)) {
            swal({
                    title: "error",
                    text: "Terdapat file yang tidak didukung.",
                    icon: "error"
                })
            return 'invalid';
        }
        else
        {
            return 'valid'
        }
    }
    
    function submitData(){
        let formData = new FormData();
        // formData.append('input_file', $('#input-file')[0].files[0]);
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('nama', $("#nama").val());
        formData.append('email', $("#email").val());
        formData.append('password', $("#password").val());
        formData.append('alamat', $("#alamat").val());
        formData.append('kota', $("#select2-kabupaten option:selected").text()+', '+$("#select2-provinsi option:selected").text());
        formData.append('no_telp', $("#no_telp").val());
        formData.append('jenis_pembangunan', $("#jenis_pembangunan").val());
        formData.append('issame_location', $('input[name="issame_location"]:checked').val());
        formData.append('kota_lokasi', $("#select2-kabupaten2 option:selected").text()+', '+$("#select2-provinsi2 option:selected").text());
        formData.append('alamat_lokasi', $("#alamat_lokasi").val());
        formData.append('luas_tanah1', $("#luas_tanah1").val());
        formData.append('luas_tanah2', $("#luas_tanah2").val());
        
        for (let i = 0; i < totalImage; i++) {
            // formData.append('input_file' + i, $('#input-file')[0].files[i]);
            formData.append('input_file[]', $('#input-file')[0].files[i]);
        }

        $.ajax({
            url: '{{ route("visitor.store") }}',
            type: "POST",
            data: formData, // high importance!
            processData: false, // high importance!
            contentType: false, // high importance!
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                console.log(response)
                swal({
                    title: "Berhasil",
                    text: "Pendaftaran akun berhasil dilakukan",
                    icon: "success"
                }).then(function() {
                    window.location = '{{url("/")}}';
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }

    /* Get from elements values */
 var values = $(this).serialize();

    
</script>

@endpush
