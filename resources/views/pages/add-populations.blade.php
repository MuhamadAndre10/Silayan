@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tambah data population'])
    <div class="row mx-4 mt-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Data Kartu Keluarga</h6>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error commodi aspernatur sequi expedita
                        libero ducimus corporis recusandae? Asperiores, animi. Inventore.</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form role="form" method="POST" action={{ route('profile.update') }}
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Identitas Kartu Keluarga</p>
                                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor Induk
                                                    Kependudukan (NIK)<i style="color: red">*</i> </label>
                                                <input class="form-control" type="number" name="nik_family" value=""
                                                    required maxlength="16">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat
                                                    Domisili</label>
                                                <input class="form-control" type="text" name="address" value=""
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">RT</label>
                                                    <input class="form-control" type="text" name="firstname"
                                                        value="" required placeholder="contoh: 001">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">RW</label>
                                                    <input class="form-control" type="text" name="firstname"
                                                        value="" required placeholder="contoh: 002">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Kode
                                                        Pos</label>
                                                    <input class="form-control" type="number" name="firstname"
                                                        value="" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">Contact Information</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Address</label>
                                                <input class="form-control" type="text" name="address"
                                                    value="{{ old('address', auth()->user()->address) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">City</label>
                                                <input class="form-control" type="text" name="city"
                                                    value="{{ old('city', auth()->user()->city) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Country</label>
                                                <input class="form-control" type="text" name="country"
                                                    value="{{ old('country', auth()->user()->country) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Postal
                                                    code</label>
                                                <input class="form-control" type="text" name="postal"
                                                    value="{{ old('postal', auth()->user()->postal) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">About me</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">About
                                                    me</label>
                                                <input class="form-control" type="text" name="about"
                                                    value="{{ old('about', auth()->user()->about) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @include('layouts.footers.auth.footer')
            </div>
        </div>
    </div>
@endsection
