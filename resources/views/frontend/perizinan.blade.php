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

                    {{-- <div class="section-title">
                        <h2>Daftar & Informasi Perizinan</h2>
                    </div> --}}

                    <div class="row">
                        <div class="col align-items-stretch mt-2 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class=""></i>
                                <h5 class="ml-auto"><a href="#">Form Permohonan Izin</a></h5>
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
                <div id="modal-body" class="modal-body">

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
                    var text = document.getElementById('modal-body')
                    var table =
                        '<table><thead><tr><th scope="col">No</th><th scope="col">Nama Perizinan</th><th scope="col">Syarat dan Ketentuan</th></tr></thead><tbody>'
                    var nomor = 1
                    var temp = ''
                    $.each(data[0], function(key, name) {
                        if (temp == name.syarat) {
                            name.syarat = ''
                            table +=
                                `<tr><th></th><th>${name.syarat}</th><th>${name.sub_syarat}</th></tr>`
                            nomor += 1
                        } else {
                            table +=
                                `<tr><th>${nomor}</th><th>${name.syarat}</th><th>${name.sub_syarat}</th></tr>`
                        }
                        temp = name.syarat
                    });
                    table += '</tbody></table>'
                    text.innerHTML = table

                    console.log("ini perizinan");
                    console.log(data);
                    console.log(data[0][0].id_syarat, data[0][0].sub_syarat);
                }
            });

            $('#id_sub').val();

            console.log("Cek cek lagi");
        });
    </script>
@endsection

@push('js')
@endpush
