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
                            <form role="form" method="POST" action={{ route('post.population') }}
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Identitas Kartu Keluarga</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor Kartu
                                                    Keluarga<i style="color: red">*</i> </label>
                                                <input class="form-control" type="number" name="nik_family"
                                                    value="{{ old('nik_family') }}" required maxlength="16">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat
                                                    Domisili</label>
                                                <input class="form-control" type="text" name="address"
                                                    value="{{ old('address') }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">RT</label>
                                                    <input class="form-control" type="text" name="rt"
                                                        value="{{ old('rt') }}" required placeholder="contoh: 001">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">RW</label>
                                                    <input class="form-control" type="text" name="rw"
                                                        value="{{ old('rw') }}" required placeholder="contoh: 002">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Kode
                                                        Pos</label>
                                                    <input class="form-control" type="number" name="postal_code"
                                                        value="{{ olf('postal_code') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label">Desa/Kelurahan</label>
                                                    <input class="form-control" type="text" name="village"
                                                        value="{{ old('village') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label">Kecamatan</label>
                                                    <input class="form-control" type="text" name="distric"
                                                        value="{{ old('distric') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label">Kabupaten/Kota</label>
                                                    <input class="form-control" type="text" name="city"
                                                        value="{{ old('city') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label">Provinsi</label>
                                                    <input class="form-control" type="text" name="province"
                                                        value="{{ old('province') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
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
