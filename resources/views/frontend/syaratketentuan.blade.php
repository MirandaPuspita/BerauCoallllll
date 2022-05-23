@extends('frontend.layouts2.master')

@section('title', 'Syarat & Ketentuan')

@push('css')
@endpush

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                </ol>
                <h2>Blog</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Syarat dan Ketentuan Perizinan</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart"></i>
                            <h4><a href="#">Syarat dan Ketentuan Perizinan</a></h4>
                            <p> Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                ea commodo
                                consequat tarad limino ata</p>
                            <hr>
                            <form action="{{ url('/syaratketentuan') }}" method="post" enctype="multipart/form-data"
                                accept-charset="utf-8">
                                @csrf

                                <div class="card-body">

                                    <div class="card-text">
                                        <div class=" ">
                                            <label class="form-label" for="sektor">Sektor Perizinan</label>
                                            <select class="form-select select-sektor" name="sektor" id="sektor" required>
                                                <option selected="" disabled>Pilih Sektor Perizinan</option>
                                                @foreach ($sektor as $s)
                                                    <option value="{{ $s->id_sektor }}">{{ $s->nama_sektor}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class=" ">
                                            <label class="form-label" for="perizinan">Nama Perizinan</label>
                                            <select class="form-control select-perizinan" name="perizinan" id="perizinan" required>
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

                                        <br>
                                        <div>
                                            <button type="submit" class="btn btn-success">Cek Syarat dan Ketentuan</button>
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
                $.each(data, function (key, name){
                    $('.select-perizinan').append(new Option(name, key));
                });
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
