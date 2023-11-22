<div class="container">
    <form action="">

        {{-- Identitas Siswa : Start --}}
        <div class="row" id="form-identitas-siswa">

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
                    <button class="btn btn-primary" type="button" id="identitasSiswa">Berikutnya</button>
                </div>
            </div>
            {{-- Next Button : End --}}

        </div>
        {{-- Identitas Siswa : End --}}

        {{-- Asal sekolah : Start --}}
        <div class="row" id="form-asal-sekolah" style="display: none;">

            {{-- Title Page : Start --}}
            <div class="col-12 mt-3">
                <h3 class="text-center">Asal Sekolah</h3>
            </div>
            {{-- Title Page : End --}}

            {{-- Divider : Start --}}
            <div class="col-12">
                <hr>
            </div>
            {{-- Divider : End --}}

            {{-- Unit : Start --}}
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group mb-3">
                            <label for="asal-sekolah" class="form-label text-muted">Asal Sekolah</label>
                            <select class="form-select" id="asal-sekolah" data-dselect-search="true">
                                <option value>Pilih Asal Sekolah</option>
                                <option value="Lainnya">Lainnya</option>
                                <option value="Sekolah gatau apa">Sekolah Gatau Apa</option>
                                <option value="Sekolah gatau apa 2">Sekolah Gatau Apa 2</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Unit : End --}}

            {{-- NPSN : Start --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">NPSN</label>
                    <input type="text" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                </div>
            </div>
            {{-- NPSN : End --}}

            {{-- Nama Sekolah : Start --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">Nama Sekolah</label>
                    <input type="text" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                </div>
            </div>
            {{-- Nama Sekolah : End --}}

            {{-- Status : Start --}}
            <div class="col-lg-4 col-md-12 col-12">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">Status</label>
                    <div class="d-flex border px-3 rounded justify-content-evenly">
                        <div class="form-check me-3 mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                              Negeri
                            </label>
                        </div>
                        <div class="form-check me-3 mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Swasta
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Status : End --}}

            {{-- Alamat : Start --}}
            <div class="col-lg-12 col-md-12">
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            {{-- Alamat : End --}}

            {{-- Provinsi : Start --}}
            <div class="col-lg-3 col-md-6 col-6">
                <div class="form-group mb-3">
                    <label for="provinsi-2" class="form-label text-muted">Provinsi</label>
                    <select class="form-select" id="provinsi-2" data-dselect-search="true">
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
                    <label for="kabupaten-2" class="form-label text-muted">Kabupaten</label>
                    <select class="form-select" id="kabupaten-2" data-dselect-search="true">
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
                    <label for="kecamatan-2" class="form-label text-muted">Kecamatan</label>
                    <select class="form-select" id="kecamatan-2" data-dselect-search="true">
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
                    <label for="desa-2" class="form-label text-muted">Desa</label>
                    <select class="form-select" id="desa-2" data-dselect-search="true">
                        <option value>Pilih Desa</option>
                        <option value="sma">Sekolah Menengah Atas</option>
                        <option value="smp">Sekolah Menengah Pertama</option>
                    </select>
                </div>
            </div>
            {{-- Desa : End --}}

            {{-- Apakah Memiliki Kebutuhan Khusus? : Start --}}
            <div class="col-lg-6 col-md-12 col-12">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">Apakah Memiliki Kebutuhan Khusus?</label>
                    <div class="d-flex border px-3 rounded justify-content-evenly">
                        <div class="form-check me-3 mt-2">
                            <input class="form-check-input" type="radio" name="radio-kebutuhan-khusus" id="kebutuhan-khusus-ya">
                            <label class="form-check-label" for="kebutuhan-khusus-ya">
                              Ya
                            </label>
                        </div>
                        <div class="form-check me-3 mt-2">
                            <input class="form-check-input" type="radio" name="radio-kebutuhan-khusus" id="kebutuhan-khusus-tidak" checked>
                            <label class="form-check-label" for="kebutuhan-khusus-tidak">
                              Tidak
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Apakah Memilik Kebutuhan Khusus? : End --}}

            {{-- Jika iya, sebutkan kebutuhan khusus tersebut :  Start --}}
            <div class="col-lg-4 col-md-12 col-12" style="display: none;" id="dropdown-kebutuhan-khusus">
                <div class="form-group mb-3">
                    <label for="kebutuhan-khusus-dropdown" class="form-label text-muted">Jika iya, sebutkan kebutuhan khusus tersebut</label>
                    <select class="form-select" id="kebutuhan-khusus-dropdown" data-dselect-search="true">
                        <option value>Pilih</option>
                        <option value="Netra">Netra</option>
                        <option value="Rungu">Rungu</option>
                    </select>
                </div>
            </div>
            {{-- Jika iya, sebutkan kebutuhan khusus tersebut :  End --}}

            {{-- Divider : Start --}}
            <div class="col-12">
                <br>
            </div>
            {{-- Divider : End --}}

            {{-- Next Button : Start --}}
            <div class="col-3 my-3 me-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-danger" type="button" id="prevAsalSekolah">Sebelumnya</button>
                </div>
            </div>
            {{-- Next Button : End --}}

            {{-- Next Button : Start --}}
            <div class="col-3 my-3">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" id="nextAsalSekolah">Berikutnya</button>
                </div>
            </div>
            {{-- Next Button : End --}}

        </div>
        {{-- Asal sekolah : End --}}

        {{-- Orang Tua : Start --}}
        <div class="row" id="form-orang-tua" style="display: none;">

            {{-- Title Page : Start --}}
            <div class="col-12 mt-3">
                <h3 class="text-center">Orang Tua</h3>
            </div>
            {{-- Title Page : End --}}

            {{-- Divider : Start --}}
            <div class="col-12">
                <hr>
            </div>
            {{-- Divider : End --}}

            {{-- Status Orang Tua : Start --}}
            <div class="col-lg-6 col-12">
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted">Status Orang Tua</label>
                    <div class="d-flex border px-3 rounded justify-content-evenly">
                        <div class="form-check me-3 py-2">
                            <input class="form-check-input" type="radio" name="radio-status-ortu" id="status-ortu-kandung" checked>
                            <label class="form-check-label" for="status-ortu-kandung">
                              Orang Tua Kandung
                            </label>
                        </div>
                        <div class="form-check me-3 py-2">
                            <input class="form-check-input" type="radio" name="radio-status-ortu" id="status-ortu-wali">
                            <label class="form-check-label" for="status-ortu-wali">
                              Orang Tua Wali
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Status Orang Tua : End --}}

            {{-- Identitas Ortu Kandung : Start --}}
            <div id="ortu-kandung-section">

                {{-- Identitas Ayah Kandung : Start --}}
                <div class="section-form mt-3 mb-3 text-info">
                    <span class="pb-2" style="border-bottom: 1px dashed #ccc; color: rgba(27, 47, 69, 0.9);">
                        <i class="fa-solid fa-address-card"></i> &nbsp;<b>Identitas Ayah Kandung</b>
                    </span>
                </div>
                {{-- Identitas Ayah Kandung : End --}}

                <div class="row">

                    {{-- NIK : Start --}}
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">NIK</label>
                            <input type="number" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                            <small class="text-muted">* Diisi sesuai KTP atau KK</small>
                        </div>
                    </div>
                    {{-- NIK : End --}}

                    {{-- Nama : Start --}}
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Nama</label>
                            <input type="text" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                            <small class="text-muted">* Diisi sesuai KTP atau KK</small>
                        </div>
                    </div>
                    {{-- Nama : End --}}

                </div>

                <div class="row">

                    {{-- Tanggal Lahir : Start --}}
                    <div class="col-lg-3 col-12">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Tanggal Lahir</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa-solid fa-calendar"></i>
                                </span>
                                <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    {{-- Tanggal Lahir : End --}}

                    {{-- Pendidikan Ayah : Start --}}
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="pendidikan-ayah" class="form-label text-muted">Pendidikan</label>
                            <select class="form-select" id="pendidikan-ayah" data-dselect-search="true">
                                <option value>Pilih Pendidikan</option>
                                <option value="sma">Sekolah Menengah Atas</option>
                                <option value="smp">Sekolah Menengah Pertama</option>
                            </select>
                        </div>
                    </div>
                    {{-- Pendidikan Ayah : End --}}

                    {{-- Pekerjaan : Start --}}
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Pekerjaan</label>
                            <input type="text" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                        </div>
                    </div>
                    {{-- Pekerjaan : End --}}

                </div>

                {{-- Identitas Ibu Kandung : Start --}}
                <div class="section-form mt-3 mb-3 text-info">
                    <span class="pb-2" style="border-bottom: 1px dashed #ccc; color: rgba(27, 47, 69, 0.9);">
                        <i class="fa-solid fa-address-card"></i> &nbsp;<b>Identitas Ibu Kandung</b>
                    </span>
                </div>
                {{-- Identitas Ibu Kandung : End --}}

                <div class="row">

                    {{-- NIK : Start --}}
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">NIK</label>
                            <input type="number" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                            <small class="text-muted">* Diisi sesuai KTP atau KK</small>
                        </div>
                    </div>
                    {{-- NIK : End --}}

                    {{-- Nama : Start --}}
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Nama</label>
                            <input type="text" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                            <small class="text-muted">* Diisi sesuai KTP atau KK</small>
                        </div>
                    </div>
                    {{-- Nama : End --}}

                </div>

                <div class="row">

                    {{-- Tanggal Lahir : Start --}}
                    <div class="col-lg-3 col-12">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Tanggal Lahir</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa-solid fa-calendar"></i>
                                </span>
                                <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    {{-- Tanggal Lahir : End --}}

                    {{-- Pendidikan Ayah : Start --}}
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="pendidikan-ibu" class="form-label text-muted">Pendidikan</label>
                            <select class="form-select" id="pendidikan-ibu" data-dselect-search="true">
                                <option value>Pilih Pendidikan</option>
                                <option value="sma">Sekolah Menengah Atas</option>
                                <option value="smp">Sekolah Menengah Pertama</option>
                            </select>
                        </div>
                    </div>
                    {{-- Pendidikan Ayah : End --}}

                    {{-- Pekerjaan : Start --}}
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Pekerjaan</label>
                            <input type="text" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                        </div>
                    </div>
                    {{-- Pekerjaan : End --}}

                </div>

            </div>
            {{-- Identitas Ortu Kandung : End --}}

            {{-- Identitas Ortu Wali : Start --}}
            <div id="ortu-wali-section" style="display: none;">

                {{-- Identitas Wali : Start --}}
                <div class="section-form mt-3 mb-3 text-info">
                    <span class="pb-2" style="border-bottom: 1px dashed #ccc; color: rgba(27, 47, 69, 0.9);">
                        <i class="fa-solid fa-address-card"></i> &nbsp;<b>Identitas Wali</b>
                    </span>
                </div>
                {{-- Identitas Wali : End --}}

                <div class="row">

                    {{-- NIK : Start --}}
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">NIK</label>
                            <input type="number" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                            <small class="text-muted">* Diisi sesuai KTP atau KK</small>
                        </div>
                    </div>
                    {{-- NIK : End --}}

                    {{-- Nama : Start --}}
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Nama</label>
                            <input type="text" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                            <small class="text-muted">* Diisi sesuai KTP atau KK</small>
                        </div>
                    </div>
                    {{-- Nama : End --}}

                </div>

                <div class="row">

                    {{-- Tanggal Lahir : Start --}}
                    <div class="col-lg-3 col-12">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Tanggal Lahir</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa-solid fa-calendar"></i>
                                </span>
                                <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    {{-- Tanggal Lahir : End --}}

                    {{-- Pendidikan Ayah : Start --}}
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="pendidikan-wali" class="form-label text-muted">Pendidikan</label>
                            <select class="form-select" id="pendidikan-wali" data-dselect-search="true">
                                <option value>Pilih Pendidikan</option>
                                <option value="sma">Sekolah Menengah Atas</option>
                                <option value="smp">Sekolah Menengah Pertama</option>
                            </select>
                        </div>
                    </div>
                    {{-- Pendidikan Ayah : End --}}

                    {{-- Pekerjaan : Start --}}
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Pekerjaan</label>
                            <input type="text" class="form-control mb-1" id="exampleFormControlInput1" placeholder="---">
                        </div>
                    </div>
                    {{-- Pekerjaan : End --}}

                </div>

            </div>
            {{-- Identitas Ortu Wali : End --}}

            {{-- Next Button : Start --}}
            <div class="col-3 my-3 me-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-danger" type="button" id="prevOrangTua">Sebelumnya</button>
                </div>
            </div>
            {{-- Next Button : End --}}

            {{-- Next Button : Start --}}
            <div class="col-3 my-3">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" id="nextOrangTua">Berikutnya</button>
                </div>
            </div>
            {{-- Next Button : End --}}

        </div>
        {{-- Orang Tua : End --}}

        {{-- Data Periodik : Start --}}
        <div class="row" id="form-data-periodik" style="display: none;">

            {{-- Title Page : Start --}}
            <div class="col-12 mt-3">
                <h3 class="text-center">Data Periodik</h3>
            </div>
            {{-- Title Page : End --}}

            {{-- Divider : Start --}}
            <div class="col-12">
                <hr>
            </div>
            {{-- Divider : End --}}

            {{-- Tinggi Badan : Start --}}
            <div class="col-lg-3 col-md-6 col-6">
                <label for="tinggi" class="form-label text-muted">Tinggi Badan</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="....." id="tinggi">
                    <span class="input-group-text" id="basic-addon2">cm</span>
                </div>
            </div>
            {{-- Tinggi Badan : End --}}

            {{-- Berat Badan : Start --}}
            <div class="col-lg-3 col-md-6 col-6">
                <label for="berat" class="form-label text-muted">Berat Badan</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="....." id="berat">
                    <span class="input-group-text" id="basic-addon2">cm</span>
                </div>
            </div>
            {{-- Berat Badan : End --}}

            <div class="row">

                {{-- Jarak Radio : Start --}}
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-muted">Perkiraan Jarak Tempuh Ke Sekolah</label>
                        <div class="d-flex border px-3 rounded justify-content-evenly">
                            <div class="form-check py-1">
                                <input class="form-check-input" type="radio" name="jarak" id="jarak-dekat" checked>
                                <label class="form-check-label" for="jarak-dekat">
                                    Kurang Dari 1 KM
                                </label>
                            </div>
                            <div class="form-check py-1">
                                <input class="form-check-input" type="radio" name="jarak" id="jarak-jauh">
                                <label class="form-check-label" for="jarak-jauh">
                                    Lebih Dari 1 KM
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Jarak Radio : End --}}

                {{-- Berat Badan : Start --}}
                <div class="col-lg-4 col-md-12 col-12" style="display: none;" id="input-jarak">
                    <label for="berat" class="form-label text-muted">Sebutkan Jaraknya</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="....." id="berat">
                        <span class="input-group-text" id="basic-addon2">km</span>
                    </div>
                </div>
                {{-- Berat Badan : End --}}

            </div>

            <div class="row">

                <label for="tinggi" class="form-label text-muted">Waktu Tempuh</label>

                {{-- Waktu Tempuh Jam : Start --}}
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="....." id="tinggi">
                        <span class="input-group-text" id="basic-addon2">jam</span>
                    </div>
                </div>
                {{-- Waktu Tempuh Jam : End --}}

                {{-- Waktu Tempuh Menit : Start --}}
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="....." id="berat">
                        <span class="input-group-text" id="basic-addon2">menit</span>
                    </div>
                </div>
                {{-- Waktu Tempuh Menit : End --}}

            </div>

            <div class="row">

                {{-- Jumlah Saudara : Start --}}
                <div class="col-lg-3 col-md-12 col-12">
                    <label for="tinggi" class="form-label text-muted">Jumlah Saudara Kandung</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="....." id="berat">
                        <span class="input-group-text" id="basic-addon2">orang</span>
                    </div>
                </div>
                {{-- Jumlah Saudara : End --}}

            </div>

            <div class="row mb-3">

                {{-- Penjelasan : Start --}}
                <div class="col-lg-6 col-md-12 col-12">
                    <small class="text-muted">
                        Diisi dengan jumlah saudara kandung peserta didik. Jumlah saudara kandung dihitung tanpa menyertakan peserta didik, dengan rumus jumlah kakak ditambah jumlah adik. Isikan 0 apabila anak tunggal.
                    </small>
                </div>
                {{-- Penjelasan : End --}}

            </div>

            {{-- Next Button : Start --}}
            <div class="col-3 my-3 me-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-danger" type="button" id="prevDataPeriodik">Sebelumnya</button>
                </div>
            </div>
            {{-- Next Button : End --}}

            {{-- Next Button : Start --}}
            <div class="col-3 my-3">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" id="nextDataPeriodik">Berikutnya</button>
                </div>
            </div>
            {{-- Next Button : End --}}

        </div>
        {{-- Data Periodik : End --}}

        {{-- Penyelesaian : Start --}}
        <div class="row" id="form-selesai" style="display: none;">

            {{-- Title Page : Start --}}
            <div class="col-12 mt-3">
                <h3 class="text-center">Penyelesaian</h3>
            </div>
            {{-- Title Page : End --}}

            {{-- Divider : Start --}}
            <div class="col-12">
                <hr>
            </div>
            {{-- Divider : End --}}

            <div class="row">

                {{-- Pemberitahuan : Start --}}
                <div class="col-12 mb-3">
                    <b class="text-muted">Harap pastikan data yang diisi sudah benar!</b>
                </div>
                {{-- Pemberitahuan : End --}}

                {{-- Nama : Start --}}
                <div class="col-lg-6 col-md-12 col-12">
                    <label for="" class="form-label text-muted">Nama : </label>
                    <input type="text" class="form-control" placeholder="....." disabled>
                </div>
                {{-- Nama : End --}}

                {{-- Nama : Start --}}
                <div class="col-lg-6 col-md-12 col-12">
                    <label for="" class="form-label text-muted">Nama : </label>
                    <input type="text" class="form-control" placeholder="....." disabled>
                </div>
                {{-- Nama : End --}}

                {{-- Nama : Start --}}
                <div class="col-lg-6 col-md-12 col-12">
                    <label for="" class="form-label text-muted">Nama : </label>
                    <input type="text" class="form-control" placeholder="....." disabled>
                </div>
                {{-- Nama : End --}}

                {{-- Nama : Start --}}
                <div class="col-lg-6 col-md-12 col-12">
                    <label for="" class="form-label text-muted">Nama : </label>
                    <input type="text" class="form-control" placeholder="....." disabled>
                </div>
                {{-- Nama : End --}}

                {{-- Nama : Start --}}
                <div class="col-lg-6 col-md-12 col-12">
                    <label for="" class="form-label text-muted">Nama : </label>
                    <input type="text" class="form-control" placeholder="....." disabled>
                </div>
                {{-- Nama : End --}}

                {{-- Nama : Start --}}
                <div class="col-lg-6 col-md-12 col-12">
                    <label for="" class="form-label text-muted">Nama : </label>
                    <input type="text" class="form-control" placeholder="....." disabled>
                </div>
                {{-- Nama : End --}}

            </div>

            {{-- Divider : Start --}}
            <div class="col-12 my-2">
                <hr>
            </div>
            {{-- Divider : End --}}

            {{-- Checkbox Persetujuan : Start --}}
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="persetujuan">
                    <label class="form-check-label" for="persetujuan">
                        <b>Saya menyatakan</b> bahwa data yang saya isi adalah benar
                    </label>
                </div>
            </div>
            {{-- Checkbox Persetujuan : End --}}

            {{-- Next Button : Start --}}
            <div class="col-3 my-3 me-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-danger" type="button" id="prevSelesai">Sebelumnya</button>
                </div>
            </div>
            {{-- Next Button : End --}}

            {{-- Send Data : Start --}}
            <div class="col-3 my-3 me-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-success" type="button" id="submit-button" disabled>
                        <i class="fa-solid fa-paper-plane" class="mx-2"></i>
                        <b>Kirim</b>
                    </button>
                </div>
            </div>
            {{-- Send Data : End --}}

        </div>
        {{-- Penyelesaian : End --}}


    </form>
</div>
