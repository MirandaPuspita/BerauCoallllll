@extends('frontend.layouts2.master')

@section('title', 'Daftar Perizinan')

@push('css')
@endpush

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
    <main id="main">

        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>


        <!-- ======= Services Section ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <section id="services" class="services">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Daftar Permohonan</h2>
                        {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                    </div>

                    <div class="row">
                        <div class="col align-items-stretch mt-2 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class=""></i>
                                {{-- <h5 class="ml-auto"><a href="#">DATA PENGAJUAN IZIN</a></h5> --}}
                                <div class="col d-flex align-items-center justify-content-between">
                                    <h4 class="card-title m-0">DATA PENGAJUAN IZIN</h4>
                                    <a href="/perizinan" class="btn btn-primary btn-icon-text">
                                        <i class="ti-plus btn-icon-prepend"></i>
                                        Tambah
                                    </a>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="card text-white bg-warning mb-3" style="max-width: 10rem;">
                                                <div class="card-header">Dalam Proses</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">-</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
                                                <div class="card-header">Terbit/Selesai</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">-</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
                                                <div class="card-header">Ditolak</div>
                                                <div class="card-body">
                                                    <h5 class="card-title">-</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pemohon</th>
                                            <th scope="col">Jenis Permohonan</th>
                                            <th scope="col">No. Registrasi</th>
                                            <th scope="col">Lokasi Permohonan</th>
                                            <th scope="col">Status Permohonan</th>
                                            <th scope="col">Dokumen</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </section>
        <!-- End Services Section -->
    </main>
    <!-- End #main -->


@endsection

@push('js')
@endpush
