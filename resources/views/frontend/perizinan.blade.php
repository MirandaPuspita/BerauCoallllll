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
                        <h2>Daftar & Informasi Perizinan</h2>
                        {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                    </div>

                    <div class="row">
                        <div class="col align-items-stretch mt-2 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-bar-chart"></i>
                                <h5 class="ml-auto"><a href="#">Daftar Perizinan</a></h5>
                                <hr>
                                <form action="{{ url('/perizinan') }}" method="post" enctype="multipart/form-data"
                                    accept-charset="utf-8">
                                    @csrf

                                    <div class="card-body">

                                        <div class="card-text">
                                            <div class=" ">
                                                <label class="form-label" for="sektor">Sektor Perizinan</label>
                                                <select class="form-select select-sektor" name="sektor" id="sektor"
                                                    required>
                                                    <option selected="" disabled>Pilih Sektor Perizinan</option>
                                                    @foreach ($sektor as $s)
                                                        <option value="{{ $s->id_sektor }}">{{ $s->nama_sektor }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class=" ">
                                                <label class="form-label" for="perizinan">Nama Perizinan</label>
                                                <select class="form-control select-perizinan" name="perizinan"
                                                    id="perizinan" required>
                                                    <option selected="" disabled>Pilih Nama Perizinan</option>
                                                </select>
                                            </div>

                                            <div class=" ">
                                                <label class="form-label">Jenis Perizinan</label>
                                                <select class="form-select" name="id_jenis" id="id_jenis" required>
                                                    <option selected="" disabled>Pilih Jenis Perizinan</option>
                                                    @foreach ($jenis as $j)
                                                        <option value="{{ $j->id_jenis }}">{{ $j->jenis_perizinan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="">
                                                <label class="form-label">Nama Pemohon</label>
                                                <input name="nama_usaha" placeholder="Nama Pemohon" value="" type="text"
                                                    class="form-control">
                                            </div>

                                            <div class="">
                                                <label class="form-label">Tanggal Pengajuan</label>
                                                <input name="" placeholder="Tanggal Pengajuan" value="" type="date"
                                                    class="form-control">
                                            </div>

                                            <div class="">
                                                <label class="form-label">Tanggal Dibutuhkan</label>
                                                <input name="" placeholder="Tanggal Dibutuhkan" value="" type="date"
                                                    class="form-control">
                                            </div>
                                            <br>
                                            <div>
                                                {{-- <button type="" class="btn btn-success" data-toggle="modal"
                                                    data-target="#modalMd">Ajukan Permohonan</button> --}}

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop">
                                                    Ajukan Permohonan
                                                </button>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- End Services Section -->
    </main>
    <!-- End #main -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">SYARAT DAN KETENTUAN </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Perizinan</th>
                                <th scope="col">Syarat dan Ketentuan</th>
                            </tr>
                        </thead>
                        <tbody class="persyaratan">
                            <tr>
                                <th scope="row">1</th>
                                <td>Pengembangan atau Pembangunan Terminal Khusus</td>
                                <td>1. Nomor Induk Berusaha (NIB)
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td>2. Izin usaha dengan bidang usaha sebagaimana tercantum dala Peraturan Menteri
                                    Perhubungan yang mengatur tentang Terminal Khusus dan TUK</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td>3. Tanda bukti status kepemilikan hak atas tanah atau tanda bukti perjanjian pemanfaatan
                                    tanah</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td>4. Kajian teknis yang paling sedikit memuat:
                                    a. Rencana alur keluar masuk Terminal Khusus
                                    b. Kedalaman kolam Terminal Khusus
                                    c. Rencana volume bongkar muat, dan frekuensi kunjungan kapal serta rencana ukuran
                                    (tonase dan panjang) kapal terbesar yang akan sandar/tambat
                                    d. Rintangan NavigasiPelayaran
                                    e. Rencana kebutuhan Sarana Bantu NavigasiPelayaran</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td>5. Rencana teknis fasilitas sandar/tambat yang paling sedikit memuat
                                    a. Gambar denah, tampak, potongan dan ukuran (dimensi) serta jenis material konstruksi
                                    b. Koordinat geografis minimal 4 (empat) titik yaitu 2 (dua) titik di sisi
                                    dermaga/perairan dan 2 (dua) titik di darat
                                    c. Peta Daerah Lingkungan Keija dan Daerah Lingkungan Kepentingan tertentu Terminal
                                    Khusus
                                    d. Peta situasi Terminal Khusus terhadap Instalasi/Bangunan lain di sekitarnya</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td>6. Berita acara peninjauan dan evaluasi rencana pembangunan Tersus oleh Syahbandar pada
                                    pelabuhan terdekat dan Distrik Navigasi Setempat yang paling sedikit memuat
                                    a. Data fasilitas sandar/ tambat
                                    b. Koordinat geografis minimal 4 (empat) titik yaitu 2 (dua) titik di sisi
                                    dermaga/perairan dan 2 (dua) titik di darat
                                    c. Rencana alur keluar masuk Terminal Khusus dan rencana penempatan Sarana Bantu
                                    NavigasiPelayaran</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td>7. Izin lingkungan sesuai ketentuan perundang-undangan</td>
                            </tr>
                        </tbody>
                    </table>


                    {{-- <table border="2" bordercolor="green">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Perizinan</th>
                                <th scope="col">Syarat dan Ketentuan</th>
                            </tr>
                        </thead>
                        <tbody id="persyaratan">
                            <tr>
                                <td>main Table row 1 column 1</td>
                                <td>
                                    <table border="2" bordercolor="blue">
                                        <tr>
                                            <td>inner Table row 1 column 1</td>
                                        </tr>
                                        <tr>
                                            <td>inner Table row 2 column 1 </td>
                                        </tr>
                                        <tr>
                                            <td>inner Table row 3 column 1 </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>main Table row 1 column 1</td>
                                <td>
                                    <table border="2" bordercolor="blue">
                                        <tr>
                                            <td>inner Table row 1 column 1</td>
                                        </tr>
                                        <tr>
                                            <td>inner Table row 2 column 1 </td>
                                        </tr>
                                        <tr>
                                            <td>inner Table row 3 column 1 </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table> --}}

                    {{-- <table class="some-tab">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td id="Username">Admin</td>
                            <td id="Description">STH STH STH!</td>
                        </tr>
                    </table> --}}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Setujui</button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $('.select-sektor').on('change', function() {
            var token = $('meta[name="csrf-token"]').attr('content');
            const id_sektor = jQuery(this).val();

            console.log("Cek cek");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "/sektor",
                data: {
                    id_sektor: id_sektor,
                },
                dataType: 'json',
                success: function(data) {
                    $('.select-perizinan').empty();
                    $.each(data, function(key, name) {
                        $('.select-perizinan').append(new Option(name, key));
                    });
                    console.log(data);
                }
            });

            $.ajax({
                type: 'POST',
                url: "/persyaratan",
                data: {
                    id_sub_perizinan: 2,
                },
                dataType: 'json',
                success: function(data) {
                    $('.persyaratan').empty();
                    $.each(data, function(key, name) {
                        $('.persyaratan').append(new Option(name, key));
                        // var something = document.getElementsByTagName('table');
                        // var tableca = something[0];

                        // var tr = document.createElement('tr');

                        // var td1 = document.createElement('td');
                        // var td2 = document.createElement('td');

                        // var text1 = document.createTextNode('Text1');
                        // var text2 = document.createTextNode('Text2');

                        // td1.appendChild(text1);
                        // td2.appendChild(text2);
                        // tr.appendChild(td1);
                        // tr.appendChild(td2);

                        // tableca.appendChild(tr);
                        // document.body.appendChild(tableca);
                    });
                    console.log("ini perizinan");
                    console.log(data);
                }
            });

            $('#id_sub').val();

            console.log("Cek cek lagi");
        });
    </script>
@endsection

@push('js')
@endpush
