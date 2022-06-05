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

                    <div class="row">
                        <div class="col align-items-stretch mt-2 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class=""></i>
                                <div class="col d-flex align-items-center justify-content-between">
                                    <h4 class="card-title m-0">UNGGAH DOKUMEN</h4>
                                </div>
                                <hr>
                                <table class="table table-hover" id="tabel-syarat">
                                    <!-- <thead>
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
                                                                                                                                                                                                                                                            </tbody> -->
                                </table>

                                <button type="button" class="btn btn-danger">Kembali</button>
                                {{-- <a href="/konfirmasidata" class="btn btn-success">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Selanjutnya
                                </a> --}}
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Simpan
                                </button>
                            </div>

                        </div>
                    </div>


                </div>
            </section>
        </section>
        <!-- End Services Section -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI DATA</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah dokumen yang Anda unggah telah sesuai?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script type="text/javascript">
        $.urlParam = function(name) {
            var results = new RegExp('[\?&]' + name + '=([^&#]*)')
                .exec(window.location.search);

            return (results !== null) ? results[1] || 0 : false;
        }

        const id_perizinan = $.urlParam('perizinan');

        var token = $('meta[name="csrf-token"]').attr('content');
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
                // $('.persyaratan').empty();
                var text = document.getElementById('tabel-syarat')
                var table =
                    '<thead><tr><th scope="col">No</th><th scope="col">Data Teknis</th><th scope="col">Berkas</th></tr></thead><tbody>'

                let syarat = []
                data = data.sort((a, b) => {
                    return a.id_syarat - b.id_syarat
                })
                // console.log(data)
                data.forEach(e => {
                    if (!Object.keys(syarat).includes(e.syarat)) {
                        syarat[e.syarat] = []
                    }
                    if (e.sub_syarat != null) {
                        syarat[e.syarat].push(e.sub_syarat)
                    }
                })
                syarat_key = Object.keys(syarat);
                // console.log(syarat_key);
                syarat_key.forEach((key, index) => {
                    const current_syarat = key
                    const current_sub_s = syarat[key]
                    table +=
                        `<form id="formDokumen"> 
                            <tr>
                                <th>${index+1}</th><th>${key}</th><th>
                                    <input type="hidden" name="id_syarat" id="id_syarat" value="1">
                                    <input type="hidden" name="id_datapemohon" id="id_datapemohon" value="2">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile" accept="application/pdf" onchange="uploadForm()">
                                    </div>
                                </th>
                            </tr> 
                        </form>`
                    if (current_sub_s.length > 0) {
                        current_sub_s.forEach((sub_syarat, i) => {
                            table +=
                                `<tr><th>${index+1}.${i+1}</th><th>${sub_syarat}</th><th></th></tr>`
                        })
                    }

                });
                table += '</tbody>'
                text.innerHTML = table
                // console.log(syarat);
            }
        });


        // dari sini gess
        function uploadForm() {
            // console.log(jQuery('#inputGroupFile').val());
            // console.log(jQuery('#inputGroupFile'));

            let formData = new FormData($('#inputGroupFile'));
            let file = $('input[type=file]')[0].files[0];
            formData.append('file', file, file.name);

            console.log(formData);

            // $(document).ready(function() {
            //     $("#buttonSimpan").click(function(event) {
            //         event.preventDefault();
            //         $.ajaxSetup({
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            //             }
            //         });
            //         $.ajax({
            //             type: 'POST',
            //             url: "/perizinan/tambahpermohonan",
            //             data: {
            //                 id_syarat: jQuery('#id_syarat').val(),
            //                 berkas: jQuery('#inputGroupFile').val(),
            //                 id_datapemohon: jQuery('#id_datapemohon').val(),
            //             },
            //             dataType: 'json',
            //             data: formData,
            //             success: function(result) {
            //                 jQuery('.alert').show();
            //                 jQuery('.alert').html(result.success);
            //             }
            //         });
            //     });
            // });
        }
    </script>
    <!-- End #main -->


@endsection

@push('js')
@endpush
