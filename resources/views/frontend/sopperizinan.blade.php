@extends('frontend.layouts2.master')

@section('title', 'Sop Perizinan')

@push('css')
@endpush

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                {{-- <ol>
                    <li><a href="index.html">Home</a></li>
                </ol> --}}
                <h2 class="logo"><a href="/"> <img src="{{ asset('frontend/images/sop.jpg') }}" width="1300"></a>
                </h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Breadcrumbs ======= -->

        <div class="container" style="justify-content: center">
            {{-- <ol>
                    <li><a href="index.html">Home</a></li>
                </ol> --}}
            <h1>Instruksi Kerja (IKA)</h1>
            <h6> 1. Pastikan PC/Laptop terkoneksi dengan internet </h6>
            <h6> 2. User dapat mengakses website https://………. dengan cara melakukan login,
                Login menggunakan email dan password yang telah dibuat pada website https://…….
                Apabila user belum memiliki akun, maka user harus membuat akun terlebih dahulu pada tautan https://…….</h6>
            <h6> 3. Website menyediakan lima menu, diantaranya: </h6>
            <h6> Beranda, berisi informasi singkat mengenai tagline departemen license PT Berau Coal. </h6>
            <h6> SOP Perizinan, berisi informasi alur (diagram alir) perizinan secara umum selain itu dilengkapi dengan
                instruksi kerja (IKA). </h6>
            <h6> Permohonan Izin, berisi informasi form yang digunakan untuk mengajukan permohonan izin. </h6>
            <h6>Peta, berisi informasi mengenai kegiatan perizinan yang ada di PT Berau Coal. </h6>
            <h6> Hubungi Kami, berisi informasi lokasi, email, telepon, dan fax. Departemen license PT Berau Coal.</h6>
            <h6> 4. Alur permohonan izin, dilakukan dengan memilih menu permohonan izin, dilakukan dengan cara:</h6>
            <h6>a. User memilih sektor perizinan </h6>
            <h6>b. User memilih nama perizinan </h6>
            <h6>c. User memilih jenis perizinan </h6>
            <h6>d. User memasukkan koordinat yang diajukan </h6>
            <h6>e. User mengisikan nama pemohon </h6>
            <h6>f. User memilih tanggal pengajuan </h6>
            <h6>g. User memilih tanggal dibutuhkan </h6>
            <h6>h. Apabila user telah melengkapi form data yang tersedia pada menu permohonan izin, maka user memilih
                button ajukan permohonan. </h6>
            <h6> (1) Apabila button ajukan permohonan dipilih maka akan menampilkan pop up berupa syarat permohonan izin
                (sesuai dengan nama perizinan yang dipilih).</h6>
            <h6> (2) Apabila button cancel dipilih maka tampilan pop up hilang dan kembali ke halaman form permohonan
                izin.</h6>
            <h6>5. User dapat melihat lokasi permohonan yang telah tersedia pada menu peta.</h6>
            <h6>6. User dapat melakuakn log out, apabila permohonan izin telah dilakukan.</h6>
            <br>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Instruksi Kerja</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Pastikan PC/Laptop terkoneksi dengan internet</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>User dapat mengakses website https://………. dengan cara melakukan login,
                            Login menggunakan email dan password yang telah dibuat pada website https://…….
                            Apabila user belum memiliki akun, maka user harus membuat akun terlebih dahulu pada tautan
                            https://…….</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Website menyediakan lima menu, diantaranya:</td>
                        <td>Beranda, berisi informasi singkat mengenai tagline departemen license PT Berau Coal.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>SOP Perizinan, berisi informasi alur (diagram alir) perizinan secara umum selain itu dilengkapi
                            dengan instruksi kerja (IKA).</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>Permohonan Izin, berisi informasi form yang digunakan untuk mengajukan permohonan izin.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>Peta, berisi informasi mengenai kegiatan perizinan yang ada di PT Berau Coal.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>Hubungi Kami, berisi informasi lokasi, email, telepon, dan fax. Departemen license PT Berau
                            Coal.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Alur permohonan izin, dilakukan dengan memilih menu permohonan izin, dilakukan dengan cara:</td>
                        <td>User memilih sektor perizinan</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>User memilih nama perizinan</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>User memilih jenis perizinan</td>
                        <td></td>
                    </tr>
                    {{-- <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>User memasukkan koordinat yang diajukan</td>
                        <td></td>
                    </tr> --}}
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>User mengisikan nama pemohon</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>User memilih tanggal pengajuan</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>User memilih tanggal dibutuhkan</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>Apabila user telah melengkapi form data yang tersedia pada menu permohonan izin, maka user
                            memilih button ajukan permohonan.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td>Apabila button ajukan permohonan dipilih maka akan menampilkan pop up berupa syarat permohonan
                            izin (sesuai dengan nama perizinan yang dipilih).</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td>Apabila button cancel dipilih maka tampilan pop up hilang dan kembali ke halaman form
                            permohonan izin.</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>User dapat melihat lokasi permohonan yang telah tersedia pada menu peta.</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>User dapat melakuakn log out, apabila permohonan izin telah dilakukan.</td>
                        <td></td>
                        <td></td>
                    </tr>

                    {{-- <tr>
                        <th scope="row">2</th>
                        <td>User dapat mengakses website https://………. dengan cara melakukan login,
                            Login menggunakan email dan password yang telah dibuat pada website https://…….
                            Apabila user belum memiliki akun, maka user harus membuat akun terlebih dahulu pada tautan
                            https://…….</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>

        <!-- End Breadcrumbs -->
    </main>
    <!-- End #main -->


@endsection

@push('js')
@endpush
