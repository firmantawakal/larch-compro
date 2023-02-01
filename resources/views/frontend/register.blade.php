@extends('frontend.layout.master')

@section('content')

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
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="col-12">
                                <div class="form-group">
                                        <label for="">Nama</label>
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                            type="text">
                                        <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                        <label for="">Alamat Anda</label>
                                        <label for=""></label>
                                        <textarea class="form-control" name="" id="" rows="3"></textarea>
                                        <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kota">Pilih Kota</label>
                                    <select class="form-control" name="kota" id="kota">
                                    <option>a</option>
                                    <option>b</option>
                                    <option>c</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="telp">No. Telepon</label>
                                    <input type="text"
                                    class="form-control" name="telp" id="telp" aria-describedby="helpId" placeholder="123-456">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kota">Jenis Pembangunan</label>
                                    <select class="form-control" name="kota" id="kota">
                                    <option>a</option>
                                    <option>b</option>
                                    <option>c</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Lokasi Pembangunan</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="field">
                                        <div class="form-group">
                                            <label for="a">
                                                <input type="radio" id="a" name="create_member" value="no" checked style="min-height: 0px !important;">Sama dengan alamat anda &nbsp;&nbsp;
                                            </label>
                                            <label for="b">
                                                <input type="radio" id="b" name="create_member" value="yes" style="min-height: 0px !important;">Berbeda dengan alamat anda
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="col-12">
                                <div class="form-check form-check-inline">

                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="" id="" value="checkedValue"> Berbeda dengan alamat anda
                                    </label>
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="form-group">
                                        <label for="">Alamat Lokasi</label>
                                        <label for=""></label>
                                        <textarea class="form-control" name="" id="" rows="3"></textarea>
                                        <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kota">Pilih Kota</label>
                                    <select class="form-control" name="kota" id="kota">
                                    <option>a</option>
                                    <option>b</option>
                                    <option>c</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="telp">Luas Tanah</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <input type="text"
                                        class="form-control" name="telp" id="telp" aria-describedby="helpId" placeholder="123-456">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="telp" id="telp" aria-describedby="helpId" placeholder="123-456">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                  <label for="telp">Upload File</label>
                                  <input name="file1" type="file" class="dropify" data-height="100" />
                                  {{-- <input type="file" class="form-control" name="telp" id="telp" aria-describedby="helpId" placeholder="123-456"> --}}
                                </div>
                                </div>
                            </div>




                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
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
