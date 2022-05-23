@extends('frontend.layouts2.master')

@section('title')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="herod" class="d-flex align-items-center">

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimoni</h2>
                    <p>Silahkan Berikan Testimoni untuk WebGIS ini</p>
                </div>

                <div class="row">

                    <div class="">
                        <div class="info">
                            <form action="/testimoni/store" method="post" accept-charset="utf-8">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" value="" class="form-control" id="nama" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" value="" name="email" id="email" readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="instansi" class="form-label">Instansi</label>
                                    <input name="instansi" type="text" class="form-control" id="instansi"
                                        placeholder="instansi" value="{{ old('instansi') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control" id="jabatan"
                                        placeholder="jabatan" value="{{ old('jabatan') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <textarea class="form-control" name="subject" id="subject" rows="10"></textarea>
                                </div>

                                <div class="form-group">

                                    {{-- Menampilkan Rating --}}
                                    <fieldset class="rating">
                                        <input type="radio" id="star5" name="rating" value="5" /><label
                                            class="full" for="star5" title="Awesome - 5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label
                                            class="full" for="star4" title="Pretty good - 4 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label
                                            class="full" for="star3" title="Meh - 3 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label
                                            class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label
                                            class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    </fieldset>
                                    {{-- END --}}


                                </div>
                                <br>
                                <br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    </form>
@endsection
