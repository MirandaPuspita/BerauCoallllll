@extends('frontend.layouts2.master')

@section('title', 'Hubungi Kami')

@section('content')

    <form action="{{ url('/hubungikami') }}" method="post">
        @csrf
        <!-- ======= Hero Section ======= -->
        <section id="herod" class="d-flex align-items-center">
        </section>
        <!-- End Hero -->

        <main id="main">

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Kontak</h2>
                        <p>Kami memiliki komitmen untuk memberikan layanan terbaik kami kepada Anda dan selalu berusaha
                            untuk memberikan pelayanan yang Anda butuhkan. Apabila terdapat pertanyaan terkait dengan
                            pelayanan kami, Anda dapat menyampaikannya kepada kami melalui</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Lokasi:</h4>
                                    <p>Head Office PT Berau Coal
                                        Jl. Pemuda No. 40
                                        Tanjung Redeb 77311, Berau
                                        Kalimantan Timur PO BOX 114</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>corporate.communication@beraucoal.co.id</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Telp:</h4>
                                    <p>(62-554) 23400 – (62-21) 7264 778</p>
                                    <h4>Fax:</h4>
                                    <p>(62-554) 23465 – (62-21) 7268 289</p>
                                </div>

                                {{-- <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7974.035952821895!2d117.4918389741308!3d2.1468028437405278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320df5ae31df4615%3A0x9833b790626ee97c!2sPT.%20Berau%20Coal!5e0!3m2!1sen!2sid!4v1647401139970!5m2!1sen!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                            </div>
                        </div>

                        {{-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <div class="info">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Nama</label>
                                        <input type="text" name="name" class="form-control" id="name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Subjek</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Pesan</label>
                                    <textarea class="form-control" name="message" rows="10" required></textarea>
                                </div>
                                <div class="text-center mt-5 mb-5"><button type="submit">Kirim Pesan</button></div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
            <!-- End Contact Section -->
        </main>
    </form>
@endsection
