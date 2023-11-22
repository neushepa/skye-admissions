@extends('layouts.main')

{{-- Section Content : Start --}}
@section('content')

    {{-- Header : Start --}}
    @include('../header/navbar/index')
    @include('../header/hero/hero-b')
    {{-- Header : End --}}

    {{-- Main : Start --}}
    <main id="main">

        {{-- Timeline Section : Start --}}
        <section>
            <div class="container" data-aos="fade-up">

                {{-- Timeline : Start --}}
                @include('components.timeline.timeline')
                {{-- Timeline : End --}}

                {{-- Form : Start --}}
                <div class="mt-5 card shadow-sm border-0 border-5 border-top" style="border-top-color: rgba(44, 44, 44, 1);" data-aos="fade-up">
                    @include('components.form.form')
                </div>
                {{-- Form : End --}}

            </div>
        </section>
        {{-- Timeline Section : End --}}

    </main>
    {{-- Main : End --}}

    {{-- Footer : Start --}}
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>Nova</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links d-flex  mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-dash"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-dash"></i> <a href="#">Web Design</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Web Development</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Product Management</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Marketing</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Nova</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer : End --}}

    {{-- Script : Start --}}
    @section('script')
        <script>
            // dselect
            dselect(document.querySelector('#dselect-example'))
            dselect(document.querySelector('#kabupaten'))
            dselect(document.querySelector('#provinsi'))
            dselect(document.querySelector('#kecamatan'))
            dselect(document.querySelector('#desa'))
            dselect(document.querySelector('#kabupaten-2'))
            dselect(document.querySelector('#provinsi-2'))
            dselect(document.querySelector('#kecamatan-2'))
            dselect(document.querySelector('#desa-2'))
            dselect(document.querySelector('#kebutuhan-khusus-dropdown'))
            dselect(document.querySelector('#asal-sekolah'))
            dselect(document.querySelector('#pendidikan-ayah'))
            dselect(document.querySelector('#pendidikan-ibu'))
            dselect(document.querySelector('#pendidikan-wali'))

            $(document).ready(function () {

                // Form Identitas Siswa
                $('#identitasSiswa').on('click', function() {
                    $('#icon-asal-sekolah').addClass('icon-active')
                    $('#form-identitas-siswa').slideUp('slow')
                    $('#form-asal-sekolah').slideDown('slow')
                })

                // Form Asal Sekolah
                $('#prevAsalSekolah').on('click', function() {
                    $('#icon-asal-sekolah').removeClass('icon-active')
                    $('#form-asal-sekolah').slideUp('slow')
                    $('#form-identitas-siswa').slideDown('slow')
                })

                $('#nextAsalSekolah').on('click', function() {
                    $('#icon-orang-tua').addClass('icon-active')
                    $('#form-asal-sekolah').slideUp('slow')
                    $('#form-orang-tua').slideDown('slow')
                })

                // Form Orang Tua
                $('#prevOrangTua').on('click', function() {
                    $('#icon-orang-tua').removeClass('icon-active')
                    $('#form-orang-tua').slideUp('slow')
                    $('#form-asal-sekolah').slideDown('slow')
                })

                $('#nextOrangTua').on('click', function() {
                    $('#icon-data-periodik').addClass('icon-active')
                    $('#form-orang-tua').slideUp('slow')
                    $('#form-data-periodik').slideDown('slow')
                })

                // Form Data Periodik
                $('#prevDataPeriodik').on('click', function() {
                    $('#icon-data-periodik').removeClass('icon-active')
                    $('#form-data-periodik').slideUp('slow')
                    $('#form-orang-tua').slideDown('slow')
                })

                $('#nextDataPeriodik').on('click', function() {
                    $('#icon-selesai').addClass('icon-active')
                    $('#form-data-periodik').slideUp('slow')
                    $('#form-selesai').slideDown('slow')
                })

                // Form Data Periodik
                $('#prevSelesai').on('click', function() {
                    $('#icon-selesai').removeClass('icon-active')
                    $('#form-selesai').slideUp('slow')
                    $('#form-data-periodik').slideDown('slow')
                })

                // Kebutuhan Khusus Radio Event
                $("#kebutuhan-khusus-ya").change(function (e) {
                    e.preventDefault();
                    if ($('#kebutuhan-khusus-ya').is(':checked')) {
                        $('#dropdown-kebutuhan-khusus').css('display', '')
                    }
                });

                $("#kebutuhan-khusus-tidak").change(function (e) {
                    e.preventDefault();
                    if ($('#kebutuhan-khusus-tidak').is(':checked')) {
                        $('#dropdown-kebutuhan-khusus').css('display', 'none')
                    }
                });

                // Status Ortu Radio Event
                $("#status-ortu-kandung").change(function (e) {
                    e.preventDefault();
                    if ($('#status-ortu-kandung').is(':checked')) {
                        $('#ortu-kandung-section').css('display', '')
                        $('#ortu-wali-section').css('display', 'none')
                    }
                });

                $("#status-ortu-wali").change(function (e) {
                    e.preventDefault();
                    if ($('#status-ortu-wali').is(':checked')) {
                        $('#ortu-wali-section').css('display', '')
                        $('#ortu-kandung-section').css('display', 'none')
                    }
                });

                // Status Ortu Radio Event
                $("#jarak-dekat").change(function (e) {
                    e.preventDefault();
                    if ($('#jarak-dekat').is(':checked')) {
                        $('#input-jarak').css('display', 'none')
                    }
                });

                $("#jarak-jauh").change(function (e) {
                    e.preventDefault();
                    if ($('#jarak-jauh').is(':checked')) {
                        $('#input-jarak').css('display', '')
                    }
                });

                // Checkbox persetujuan
                $('#persetujuan').change(function (e) {
                    e.preventDefault();
                    if ($('#persetujuan').is(':checked')) {
                        $('#submit-button').attr('disabled', false);
                    } else {
                        $('#submit-button').attr('disabled', true);
                    }
                });

            })
        </script>
    @endsection
    {{-- Script : End --}}

@endsection
{{-- Section Content : End --}}
