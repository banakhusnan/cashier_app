@extends('layouts.app')

@section('content')
    <div class="row mb-4">
        <div class="col-md-12">
            <h3>Kategori</h3>
            <div class="row">
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                                <img src="{{ URL::asset('assets/images/categories/coffe.png') }}" alt="Kopi"
                                    width="80px">
                                <span>Kopi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                                <img src="{{ URL::asset('assets/images/categories/tea.png') }}" alt="Kopi"
                                    width="80px">
                                <span>Teh</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                                <img src="{{ URL::asset('assets/images/categories/juice.png') }}" alt="Kopi"
                                    width="80px">
                                <span>Jus</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                                <img src="{{ URL::asset('assets/images/categories/rice.png') }}" alt="Kopi"
                                    width="80px">
                                <span>Nasi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Pilih Menu</h3>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 bg-primary p-2 rounded-3">
                                    <img src="{{ URL::asset('assets/images/categories/rice.png') }}" alt="Kopi"
                                        width="80px">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3 class="fw-bold">Nasi Langgi</h3>
                                    <h5 class="text-muted">Rp. 5.000,-</h5>

                                    <div class="canvas">
                                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#canvasDetailItem" aria-controls="canvasDetailItem">
                                            <span class="mdi mdi-cart-plus"></span> Tambah Item
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="canvasDetailItem"
        aria-labelledby="canvasDetailItemLabel">
        <div class="offcanvas-header">
            <h5 id="canvasDetailItemLabel">Detail Item</h5>
            <button type="button" class="btn text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                <span class="mdi mdi-close"></span>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="mb-3">
                <label for="nama-pelanggan" class="form-label">Nama Pelanggan *</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nama-pelanggan" name="nama_pelanggan"
                        value="{{ old('value') }}" placeholder="Masukan Nama Pelanggan" required>
                </div>
            </div>

            <div class="my-3">
                <hr>
            </div>

            <h4>Item Dipilih</h4>
            <div class="d-flex p-3 border rounded-3">
                <div class="flex-shrink-0 bg-primary p-2 rounded-3">
                    <img src="{{ URL::asset('assets/images/categories/rice.png') }}" alt="Kopi" width="60px">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5>Nasi Langgi</h5>
                    <h6 class="text-muted">Rp. 5.000,-</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
