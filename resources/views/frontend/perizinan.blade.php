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
                                <form id="myForm">
                                    @csrf

                                    <div class="card-body">

                                        <div class="card-text">
                                            <div class=" ">
                                                <label class="form-label" for="sektor">Sektor Perizinan</label>
                                                <select class="form-select select-sektor" name="sektor" id="sektor"
                                                    onchange="idSektor(this)" required>
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
                                                <input name="nama_pemohon" placeholder="Nama Pemohon" value="" type="text"
                                                    class="form-control" id="nama_pemohon">
                                            </div>

                                            {{-- <div class="">
                                                <label class="form-label">Tanggal Pengajuan</label>
                                                <input name="tanggal_pengajuan" placeholder="Tanggal Pengajuan" value=""
                                                    type="date" class="form-control" id="tanggal_pengajuan">
                                            </div> --}}

                                            <div class="">
                                                <label class="form-label">Tanggal Dibutuhkan</label>
                                                <input name="tanggal_dibutuhkan" placeholder="Tanggal Dibutuhkan" value=""
                                                    type="date" class="form-control" id="tanggal_dibutuhkan">
                                            </div>

                                            {{-- <div class="">
                                                <label class="form-label">No Registrasi</label>
                                                <input name="no_registrasi" placeholder="" value="" type="text"
                                                    class="form-control">
                                            </div> --}}

                                            <!-- <div class="">
                                                                                                                                                                                                                                                                                                        <label class="form-label">Status</label>
                                                                                                                                                                                                                                                                                                        <input name="status" placeholder="" value="" type="text"
                                                                                                                                                                                                                                                                                                            class="form-control">
                                                                                                                                                                                                                                                                                                    </div> -->
                                            <div class="">
                                                <label class="form-label">No Telepon</label>
                                                <input name="no_telepon" placeholder="" value="" type="text"
                                                    class="form-control" id="no_telepon">
                                            </div>
                                            <div class="">
                                                <label class="form-label">Email</label>
                                                <input name="email" placeholder="" value="" type="text"
                                                    class="form-control" id="email">
                                            </div>
                                            <br>
                                            <div>

                                                <!-- Button trigger modal -->
                                                <button id="buttonSimpan" type="submit" class="btn btn-primary">
                                                    Simpan
                                                </button>
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
                <div class="modal-footer" id="button_custom">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button> --}}
                    {{-- <button type="button" class="btn btn-primary">Lanjutkan</button> --}}
                    {{-- <a href="/tambahdokumen" class="btn btn-primary btn-icon-text" id="unggah">
                        <i class="ti-plus btn-icon-prepend"></i>
                        Unggah Dokumen
                    </a> --}}
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
                    // $('.select-perizinan').empty();
                    $.each(data, function(key, name) {
                        $('.select-perizinan').append(new Option(name, key));
                    });
                    console.log(data);
                }
            });

            $('#id_sub').val();
            console.log("Cek cek lagi");
        });

        $('.select-perizinan').on('change', function() {
            var token = $('meta[name="csrf-token"]').attr('content');
            const id_perizinan = jQuery(this).val();
            $("#unggah").attr("href", `/tambahdokumen?perizinan=${id_perizinan}`)

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "/persyaratan",
                data: {
                    id_sub_perizinan: id_perizinan,
                },
                dataType: 'json',
                success: function(data) {
                    $('.persyaratan').empty();
                    var text = document.getElementById('modal-body')
                    var table =
                        '<table><thead><tr><th scope="col">No</th><th scope="col">Syarat</th><th scope="col">Sub Syarat</th></tr></thead><tbody>'
                    // var nomor = 1
                    // var temp = ''
                    // $.each(data[0], function(key, name) {
                    //     if (temp == name.syarat) {
                    //         name.syarat = ''
                    //         table +=
                    //             `<tr><th></th><th>${name.syarat}</th><th>${name.sub_syarat}</th></tr>`
                    //         nomor += 1
                    //     } else {
                    //         table +=
                    //             `<tr><th>${nomor}</th><th>${name.syarat}</th><th>${name.sub_syarat}</th></tr>`
                    //     }
                    //     temp = name.syarat
                    // });
                    // table += '</tbody></table>'
                    // text.innerHTML = table

                    // console.log("ini perizinan");

                    let syarat = []
                    data = data.sort((a, b) => {
                        return a.id_syarat - b.id_syarat
                    })
                    console.log(data)
                    // data.forEach((d, i) => {
                    //     syarat[i] = {
                    //         syarat: d.syarat,
                    //         sub_syarat: []
                    //     }
                    //     if(d.sub_syarat){
                    //         syarat[i].sub_syarat.push(d.sub_syarat)
                    //     }
                    // })
                    // console.log(data);
                    data.forEach(e => {
                        if (!Object.keys(syarat).includes(e.syarat)) {
                            syarat[e.syarat] = []
                        }
                        if (e.sub_syarat != null) {
                            syarat[e.syarat].push(e.sub_syarat)
                        }
                    })
                    // for (const s in syarat) {
                    //     const current_syarat = s
                    //     const current_sub_s = syarat[s]
                    //     $.each(data[0], function(key, name) {
                    //         if (temp == name.syarat) {
                    //             name.syarat = ''
                    //             table +=
                    //                 `<tr><th></th><th>${name.syarat}</th><th>${name.sub_syarat}</th></tr>`
                    //             nomor += 1
                    //         } else {
                    //             table +=
                    //                 `<tr><th>${nomor}</th><th>${name.syarat}</th><th>${name.sub_syarat}</th></tr>`
                    //         }
                    //         temp = name.syarat
                    //     });
                    //     table += '</tbody></table>'
                    //     text.innerHTML = table
                    // }
                    syarat_key = Object.keys(syarat);
                    syarat_key.forEach((key, index) => {
                        const current_syarat = key
                        const current_sub_s = syarat[key]
                        if (current_sub_s.length > 0) {
                            current_sub_s.forEach((sub_syarat, i) => {
                                if (i == 0) {
                                    table +=
                                        `<tr><th>${index+1}</th><th>${current_syarat}</th><th>${i+1}. ${sub_syarat}</th></tr>`
                                } else {
                                    table +=
                                        `<tr><th></th><th></th><th>${i+1}. ${sub_syarat}</th></tr>`
                                }
                            })
                        } else {
                            table +=
                                `<tr><th>${index+1}</th><th>${key}</th><th>-</th></tr>`
                        }
                        // console.log(index + 1, key)
                        // console.log(current_sub_s)
                    });
                    // syarat.forEach((d, i) => {
                    //     // console.log("data", d)
                    //     if (!d.sub_syarat) {
                    //         table +=
                    //             `<tr><th>${i+1}</th><th>${d.syarat}</th><th></th></tr>`
                    //     } else {
                    //         d.sub_syarat.forEach((s, index) => {
                    //             if (index == 0) {
                    //                 table +=
                    //                     `<tr><th>${i+1}</th><th>${d.syarat}</th><th>${s}</th></tr>`
                    //             } else {
                    //                 table +=
                    //                     `<tr><th></th><th></th><th>${s}</th></tr>`
                    //             }
                    //         })
                    //     }
                    // })
                    table += '</tbody></table>'
                    text.innerHTML = table
                    console.log(syarat);
                    // console.log(data[0][0].id_syarat, data[0][0].sub_syarat);
                }
            });
        })

        $(document).ready(function() {
            $("#buttonSimpan").click(function(event) {
                event.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "/perizinan/tambahpermohonan",
                    data: {
                        sektor: jQuery('#sektor').val(),
                        perizinan: jQuery('#perizinan').val(),
                        id_jenis: jQuery('#id_jenis').val(),
                        tanggal_dibutuhkan: jQuery('#tanggal_dibutuhkan').val(),
                        nama_pemohon: jQuery('#nama_pemohon').val(),
                        no_telepon: jQuery('#no_telepon').val(),
                        email: jQuery('#email').val(),
                    },
                    dataType: 'json',
                    success: function(result) {
                        jQuery('.alert').show();
                        jQuery('.alert').html(result.success);
                    }
                });
            });
        });

        function idSektor(params) {
            console.log(params.value);
            var buttonn = document.getElementById('button_custom')
            button_submit = `
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>

            <a href="/tambahdokumen/${params.value}" class="btn btn-primary btn-icon-text" id="unggah">
                <i class="ti-plus btn-icon-prepend"></i>
                Unggah Dokumen
            </a>
            `
            buttonn.innerHTML = button_submit
        }
    </script>

@endsection

@push('js')
@endpush
