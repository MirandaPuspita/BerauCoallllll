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
                    {{-- <form action="{{ url('/konfirmasidata') }}" method="get">
                        @csrf
                        <div class="row"> --}}
                    <div class="col align-items-stretch mt-2 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <i class=""></i>
                            <div class="col d-flex align-items-center justify-content-between">
                                <h4 class="card-title m-0">KONFIRMASI DATA</h4>
                            </div>
                            <hr>
                            Apakah dokumen yang Anda unggah telah sesuai?
                            {{-- <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Data Teknis</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Berkas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Nomor Izin Usaha (NIB)</td>
                                            <td></td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile01">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Izin Usaha dengan bidang usaha sebagaimana tercantum dalam Peraturan Menteri
                                                Perhubungan yang mengatur tentang Terminal Khusus dan TUK</td>
                                            <td></td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile01">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Tanda bukti status kepemilikan hak atas tanah atau tanda bukti perjanjian
                                                pemanfaatan tanah</td>
                                            <td></td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile01">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> --}}
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            {{-- <a href="/konfirmasidata" class="btn btn-success">
                                        <i class="ti-plus btn-icon-prepend"></i>
                                        Selanjutnya
                                    </a> --}}

                            <button type="reset" class="btn btn-danger">Batal</button>
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
