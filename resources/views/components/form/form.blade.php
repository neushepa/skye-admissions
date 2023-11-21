<div class="container">
    <form action="">

        {{-- Identitas Siswa : Start --}}
        <div class="row">

            {{-- Title Page : Start --}}
            <div class="col-12 mt-3">
                <h3 class="text-center">Identitas Siswa</h3>
            </div>
            {{-- Title Page : End --}}

            {{-- Divider : Start --}}
            <div class="col-12">
                <hr>
            </div>
            {{-- Divider : End --}}

            {{-- Unit : Start --}}
            <div class="col-lg-6 col-md-12">
                <div class="form-group mb-3">
                    <label for="dselect-example" class="form-label text-muted">Unit</label>
                    <select class="form-select dselect-example" id="dselect-example" data-dselect-search="true">
                        <option value>Pilih Unit</option>
                        <option value="sma">Sekolah Menengah Atas</option>
                        <option value="smp">Sekolah Menengah Pertama</option>
                    </select>
                </div>
            </div>
            {{-- Unit : End --}}

            {{-- Divider : Start --}}
            <div class="col-12">
                <hr>
            </div>
            {{-- Divider : End --}}

            {{-- Nama Lengkap : Start --}}
            <div class="col-lg-6 col-md-6">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">Nama Lengkap</label>
                    <input type="text" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                    <small class="text-muted">* Sesuai yang tercantum ijazah</small>
                </div>
            </div>
            {{-- Nama Lengkap : End --}}

            {{-- Gender : Start --}}
            <div class="col-lg-6 col-md-6">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">Gender</label>
                    <div class="d-flex border px-3 rounded justify-content-evenly">
                        <div class="form-check me-3 mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                              Laki - laki
                            </label>
                        </div>
                        <div class="form-check me-3 mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Perempuan
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Gender : End --}}

            {{-- Alamat : Start --}}
            <div class="col-lg-8 col-md-12">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">Alamat</label>
                    <input type="text" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                </div>
            </div>
            {{-- Alamat : End --}}

            {{-- RT : Start --}}
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">RT</label>
                    <input type="number" min="1" class="form-control mb-1" id="exampleFormControlInput1" placeholder="00">
                </div>
            </div>
            {{-- RT : End --}}

            {{-- RW : Start --}}
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">RW</label>
                    <input type="number" min="1" class="form-control mb-1" id="exampleFormControlInput1" placeholder="00">
                </div>
            </div>
            {{-- RW : End --}}

            {{-- Provinsi : Start --}}
            <div class="col-lg-3 col-md-6 col-6">
                <div class="form-group mb-3">
                    <label for="provinsi" class="form-label text-muted">Provinsi</label>
                    <select class="form-select" id="provinsi" data-dselect-search="true">
                        <option value>Pilih Provinsi</option>
                        <option value="sma">Sekolah Menengah Atas</option>
                        <option value="smp">Sekolah Menengah Pertama</option>
                    </select>
                </div>
            </div>
            {{-- Provinsi : End --}}

            {{-- Kabupaten : Start --}}
            <div class="col-lg-3 col-md-6 col-6">
                <div class="form-group mb-3">
                    <label for="kabupaten" class="form-label text-muted">Kabupaten</label>
                    <select class="form-select" id="kabupaten" data-dselect-search="true">
                        <option value>Pilih Kabupaten</option>
                        <option value="sma">Sekolah Menengah Atas</option>
                        <option value="smp">Sekolah Menengah Pertama</option>
                    </select>
                </div>
            </div>
            {{-- Kabupaten : End --}}

            {{-- Kecamatan : Start --}}
            <div class="col-lg-3 col-md-6 col-6">
                <div class="form-group mb-3">
                    <label for="kecamatan" class="form-label text-muted">Kecamatan</label>
                    <select class="form-select" id="kecamatan" data-dselect-search="true">
                        <option value>Pilih Kecamatan</option>
                        <option value="sma">Sekolah Menengah Atas</option>
                        <option value="smp">Sekolah Menengah Pertama</option>
                    </select>
                </div>
            </div>
            {{-- Kecamatan : End --}}

            {{-- Desa : Start --}}
            <div class="col-lg-3 col-md-6 col-6">
                <div class="form-group mb-3">
                    <label for="desa" class="form-label text-muted">Desa</label>
                    <select class="form-select" id="desa" data-dselect-search="true">
                        <option value>Pilih Desa</option>
                        <option value="sma">Sekolah Menengah Atas</option>
                        <option value="smp">Sekolah Menengah Pertama</option>
                    </select>
                </div>
            </div>
            {{-- Desa : End --}}

            {{-- Nomor Telepon : Start --}}
            <div class="col-lg-4 col-12">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">Nomor Telepon (Opsional)</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <input type="number" class="form-control" placeholder="Nomor Telepon" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            {{-- Nomor Telepon : End --}}

            {{-- Nomor Handphone : Start --}}
            <div class="col-lg-4 col-12">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">Nomor Handphone</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </span>
                        <input type="number" class="form-control" placeholder="Nomor Telepon" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            {{-- Nomor Handphone : End --}}

            {{-- Email : Start --}}
            <div class="col-lg-4 col-12">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="number" class="form-control" placeholder="email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            {{-- Email : End --}}

            {{-- Next Button : Start --}}
            <div class="col-3 my-3">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Berikutnya</button>
                </div>
            </div>
            {{-- Next Button : End --}}

        </div>
        {{-- Identitas Siswa : End --}}

    </form>
</div>
