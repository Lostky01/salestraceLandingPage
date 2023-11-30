@extends('layouts.layout-v2_2')

@section('css-after')
    <style>
        :root {
            --base-font-size: 16px;
            /* Set your base font size */
        }

        body {
            font-size: var(--base-font-size);
            /* Set the default font size */
        }

        .atas {
            background-image: url('{{ asset('price-asset/bgatas.png') }}');
            background-size: cover;
        }

        section {
            background-color: white !important;
        }

        @media screen and (max-width: 720px) {
            body {
                font-size: calc(var(--base-font-size) - 10px);
            }

            p {
                font-size: calc(var(--base-font-size) - 10px);
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: calc(var(--base-font-size) - 10px);
            }
        }

        .col-lg-6 img {
            padding-left: 15%;
        }

        @media screen and (max-width:720px) {
            .col-lg-6 img {
                padding-left: 0%;
            }
        }
    </style>
@endsection

@section('konten')
    <section class="atas" style="padding:10%">
        <div class="col-lg-12">
            <center>
                <h1 style="color: #FFF;font-size: 45px;font-weight: 700;">Paket harga fleksibel untuk <br> memenuhi kebutuhan
                    bisnis Anda</h1>
            </center>
        </div>
        <div class="col-lg-12">
            <center>
                <p style="color: #FFF;font-size: 22px;font-weight: 400;">Dengan Berlangganan Platform Omsetku, Anda dapat
                    mengakses platform lengkap kami <br> dan memanfaatkan harga per jam yang mudah dipahami dan disesuaikan
                    dengan <br> kebutuhan Anda.</p>
            </center>
        </div>
        <div class="col-lg-12">
            <div class="row justify-content-center">
                <div class="col-2 text-right">
                    <center>
                        <a href="{{ url('contactus') }}">
                            <img src="{{ asset('price-asset/Link.png') }}" alt="">
                        </a>
                    </center>
                </div>
                <div class="col-2 text-right">
                    <center>
                        <a href="{{ url('contactus') }}">
                            <img src="{{ asset('price-asset/coba2.png') }}" alt="">
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <section class="kedua" style="background-color: #EEEEEE !important;">
        <center>
            <p style="color: #7D7F7F;font-size: 22px;font-weight: 400;">Partner technology of goodeva smart sales</p>
        </center>
        <center><img src="{{ asset('price-asset/partner.png') }}" alt=""></center>
    </section>
    <section class="cards">
        <center>
            <h1 style="color: #000;font-size: 40px;font-weight: 700;">Apa yang kami tawarkan untuk bisnis Anda.</h1>
        </center>
        <center>
            <p style="color: #000;font-size: 18px;font-weight: 400;">Kami menggabungkan observabilitas mendalam, AIOps, dan
                keamanan aplikasi dalam satu platform <br> terbuka dan terpadu untuk terus memberikan jawaban tepat dan
                otomatisasi cerdas dari data.</p>
        </center>
        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 100%;height:100%;box-shadow: 0 8px 8px rgba(48, 47, 47, 0.1);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p style="color: #3C3F40;font-size: 20px;font-weight: 400;">Basic</p>
                                </div>
                                <div class="col-6" style="padding:5px">
                                    <p
                                        style="color: #1E3168;font-size: 23px;font-weight: 400; margin-bottom:0 !important; text-align:right;">
                                        Rp. 2.500.000</p>
                                    <p style="color: #909799;font-size: 11px;font-weight: 400;text-align: right;">Per user,
                                        per month <br>
                                        paid annually</p>
                                </div>
                                <p style="color: #3C3F40;font-size: 15px;font-weight: 400;">Paket dasar kami dengan Google
                                    Workspace <br> integrasi adalah solusi ringan untuk membantu <br>
                                    usaha kecil menjadi terorganisir dengan cepat.</p>
                            </div>
                            <div class="col-12 justify-content-center">
                                <a href="#" class="btn btn-primary"
                                    style="background-color: #FFF; font-size:15px; border-color: #1E3168; color: #1E3168; border-radius: 20px; width:100%;">Try
                                    Free</a>
                                <ul class="list-group list-group-flush mt-5" style="">
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item mt-3">What's included:
                                        <ul style="gap: 16px; list-style: none;">
                                            <li class="mt-3">2,500 Contact limit</li>
                                            <li class="mt-3">Google Workspace Integration</li>
                                            <li class="mt-3">Pipelines</li>
                                            <li class="mt-3">Contact enrichment</li>
                                            <li class="mt-3">Team collaboration</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card"
                        style="width: 100%;height:100%; background-color:#F4F9FA;box-shadow: 0 8px 8px rgba(48, 47, 47, 0.1);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p style="color: #3C3F40;font-size: 20px;font-weight: 400;">Professional</p>
                                </div>
                                <div class="col-6" style="padding:5px">
                                    <p
                                        style="color: #1E3168;font-size: 23px;font-weight: 400; margin-bottom:0 !important; text-align:right;">
                                        Rp. 5.580.000</p>
                                    <p style="color: #909799;font-size: 11px;font-weight: 400;text-align: right;">Per user,
                                        per month <br>
                                        paid annually</p>
                                </div>
                                <p style="color: #3C3F40;font-size: 15px;font-weight: 400;">Rencana pertumbuhan kami yang
                                    paling <br>
                                    populer bisnis mencakup otomatisasi alur <br>
                                    kerja dan integrasi dengan alat bantu Anda.</p>
                            </div>
                            <div class="col-12 justify-content-center">
                                <a href="#" class="btn btn-primary"
                                    style=" font-size:15px; background:#1E3168; border-color: #1E3168; color: FFF; border-radius: 20px; width:100%">Try
                                    Free</a>
                                <ul class="list-group list-group-flush mt-5" style="background-color:#F4F9FA;">
                                    <li class="list-group-item" style="background-color:#F4F9FA;"></li>
                                    <li class="list-group-item mt-3" style="background-color:#F4F9FA;">Everything in Basic,
                                        plus:
                                        <ul style="gap: 16px; list-style: none; background-color:#F4F9FA;">
                                            <li class="mt-3">15,000 Contact limit</li>
                                            <li class="mt-3">Workflow automation</li>
                                            <li class="mt-3">Bulk email and templates</li>
                                            <li class="mt-3">Reporting</li>
                                            <li class="mt-3">Integrations with your favorite tools</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 100%;height:100%;box-shadow: 0 8px 8px rgba(48, 47, 47, 0.1);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p style="color: #3C3F40;font-size: 20px;font-weight: 400;">Business</p>
                                </div>
                                <div class="col-6" style="padding:5px">
                                    <p
                                        style="color: #1E3168;font-size: 23px;font-weight: 400; margin-bottom:0 !important; text-align:right;">
                                        Rp. 11.400.000</p>
                                    <p style="color: #909799;font-size: 11px;font-weight: 400;text-align: right;">Per user,
                                        per month <br>
                                        paid annually</p>
                                </div>
                                <p style="color: #3C3F40;font-size: 15px;font-weight: 400;">Jika Anda fokus pada penskalaan,
                                    gunakan <br>
                                    CRM selangkah lebih maju dengan kontak tak <br>
                                    terbatas, alat pemasaran dan penyesuaian.</p>
                            </div>
                            <div class="col-12 justify-content-center">
                                <a href="#" class="btn btn-primary"
                                    style="background-color: #FFF; font-size:15px; border-color: #1E3168; color: #1E3168; border-radius: 20px; width:100%;">Try
                                    Free</a>
                                <ul class="list-group list-group-flush mt-5" style="">
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item mt-3">Everything in Professional, plus:
                                        <ul style="gap: 16px; list-style: none;">
                                            <li class="mt-3">Unlimited contacts</li>
                                            <li class="mt-3">Email sequences and drip campaigns</li>
                                            <li class="mt-3">Website tracking</li>
                                            <li class="mt-3">Lead scoring</li>
                                            <li class="mt-3">LinkedIn integration</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="omsetku digital">
        <div class="row">
            <div class="col-lg-6" style="padding:10%">
                <h1 style="color: #1E3168;font-size: 40px;font-weight: 700;">Omsetku Digital</h1>
                <h2 style="color: #1E3168;font-size: 30px;font-weight: 700;">Jasa improve engagement bisnis anda</h2>
                <p style="color: #000;font-size: 18px;font-weight: 400;">We earn the trust of our customers, employees, and
                    <br> extended family through transparency, security, compliance, <br> privacy, and performance. And we
                    deliver the industry’s most <br> trusted infrastructure.
                </p>
            </div>
            <div class="col-lg-6" style="padding:5%">
                <img src="{{ asset('price-asset/igmanagement.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class="membantu pelanggan sukses">
        <center>
            <h1 style="color: #000;font-size: 40px;font-weight: 700;">Membantu pelanggan sukses. Itu urusan Omsetku.</h1>
        </center>
        <center>
            <p style="color: #000;font-size: 18px;font-weight: 400;">Para pendiri kami meluncurkan model 1-1-1, yang
                memberikan 1% dari ekuitas, teknologi, dan waktu <br> masyarakat kami untuk meningkatkan pendidikan,
                kesetaraan, dan lingkungan bagi semua orang. Saat ini, <br> lebih dari 17.000 perusahaan di seluruh dunia
                telah bergabung dengan kami dalam gerakan Pledge 1%.</p>
        </center>
        <div class="row">
            <div class="col-lg-6" style="padding:5%">
                <img src="{{ asset('price-asset/orangsukses.png') }}" alt="">
            </div>
            <div class="col-lg-6" style="padding-top:10%">
                <h2 style="color: #1E3168;font-size: 30px;font-weight: 700;">Apa keuntungan program enterprise <br> omsetku
                    untuk rekanbisnis anda?</h2>
                <p style="color: #000;font-size: 18px;font-weight: 400;">Selain Anda akan mendapat keuntungan sebagai <br>
                    Member Enterprise Omsetku, rekan bisnis Anda yang diajak <br> berlangganan juga akan mendapat potongan
                    Rp 250.000 <br> untuk paket langganan pertama mereka.</p>
            </div>
        </div>
    </section>
    <section class="value omsetku">
        <center>
            <h1 style="color: #000;font-weight: 700;font-size: 40px;">Value yang omsetku berikan buat kamu</h1>
        </center>
        <center>
            <p style="color: #000;font-size: 18px;font-weight: 400;">Kemudahan dan kenyamanan dalam penggunaan produk
                melalui layanan <br>
                purna jual yang terbaik dan terlengkap di kelasnya.</p>
        </center>
        <div class="row justify-content-center" style="padding:5%">
            <div class="col-3">
                <center><img src="{{ asset('price-asset/headset.png') }}" alt=""></center>
                <center>
                    <h2 style="color: #7F1AFF;font-size: 16px;font-weight: 800;">CUSTOMER SERVICE</h2>
                </center>
                <center>
                    <p style="color: #000;font-size: 17px;font-weight: 400;">Tim support yang responsif & selalu <br> siap
                        memberikan solusi untuk <br> masalah Anda.</p>
                </center>
            </div>
            <div class="col-3">
                <center><img src="{{ asset('price-asset/lampu.png') }}" alt=""></center>
                <center>
                    <h2 style="color: #1966FF;font-size: 16px;font-weight: 800;">IMPLEMENTASI</h2>
                </center>
                <center>
                    <p style="color: #000;font-size: 17px;font-weight: 400;">Implementasi dan pelatihan <br> produk oleh
                        tim spesialis <br> Goodeva secara gratis.</p>
                </center>
            </div>
            <div class="col-3">
                <center><img src="{{ asset('price-asset/security.png') }}" alt=""></center>
                <center>
                    <h2 style="color: #00ABB6;font-size: 16px;font-weight: 800;">ACCOUNT MANAGER</h2>
                </center>
                <center>
                    <p style="color: #000;font-size: 17px;font-weight: 400;">Konsultasi solusi bisnis secara <br> personal
                        bersama account <br> manager Goodeva.</p>
                </center>
            </div>
            <div class="col-3">
                <center><img src="{{ asset('price-asset/3hijau.png') }}" alt=""></center>
                <center>
                    <h2 style="color: #02D394;font-size: 16px;font-weight: 800;">KNOWLEDGE CENTER</h2>
                </center>
                <center>
                    <p style="color: #000;font-size: 17px;font-weight: 400;">Panduan produk Goodeva <br> yang lengkap dan
                        tersedia <br> dalam berbagai format.</p>
                </center>
            </div>
        </div>
    </section>
    <section class="fitur unggulan omsetku">
        <center>
            <h1 style="color: #000;font-size: 40px;font-weight: 700;">Fitur unggulan pada Omsetku</h1>
        </center>
        <center>
            <p style="color: #000;font-size: 18px;font-weight: 400;">Nilai-nilai inti kita memandu segala sesuatu yang kita
                lakukan sebagai perusahaan dan sebagai <br> manusia. Kami berusaha untuk memberikan yang terbaik dari satu
                sama lain, memberikan <br> kesuksesan kepada pelanggan kami, dan menginspirasi seluruh industri melalui
                tindakan kami.</p>
        </center>
        <div class="row">
            <div class="col-lg-6" style="padding-top:5%;position:static">
                <img src="{{ asset('price-asset/cewe1.png') }}" alt="">
            </div>
            <div class="col-lg-6" style="padding-top:15%">
                <h1 style="color: #1E3168;font-size: 40px;font-weight: 700;">Target Penjualan</h1>
                <h2 style="color: #1E3168;font-weight: 700;font-size: 30px;">Pantau target bulanan hingga tahunan</h2>
                <p style="color: #000;font-size: 18px;font-weight: 400;">We earn the trust of our customers, employees, and
                    <br> extended family through transparency, security, compliance, <br> privacy, and performance. And we
                    deliver the industry’s most <br> trusted infrastructure.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" style="padding-top:15%;padding-left:15%">
                <h1 style="color: #1E3168;font-size: 40px;font-weight: 700;">Detail Pelanggan</h1>
                <h2 style="color: #1E3168;font-weight: 700;font-size: 30px;">Semua data pelanggan tersusun rapih.</h2>
                <p style="color: #000;font-size: 18px;font-weight: 400;">So we champion them to achieve extraordinary
                    things. We <br> innovate and expand our business offerings to provide all <br> our stakeholders with new
                    avenues to achieve ever greater <br> success.</p>
            </div>
            <div class="col-lg-6" style="padding-top:10%;">
                <img src="{{ asset('price-asset/cewe2.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" style="padding-top:5%;">
                <img src="{{ asset('price-asset/cewe3.png') }}" alt="">
            </div>
            <div class="col-lg-6" style="padding-top:10%">
                <h1 style="color: #1E3168;font-size: 40px;font-weight: 700;">Komisi Penjualan</h1>
                <h2 style="color: #1E3168;font-weight: 700;font-size: 30px;">Tingkatkan kinerja sales dengan komisi</h2>
                <p style="color: #000;font-size: 18px;font-weight: 400;">Our customers’ input helps us develop products
                    that best <br> serve their business needs. Providing continual technology <br> releases and new
                    initiatives gives our customers a <br> competitive advantage.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" style="padding-top:15%;padding-left:15%">
                <h1 style="color: #1E3168;font-size: 40px;font-weight: 700;">Expense</h1>
                <h2 style="color: #1E3168;font-weight: 700;font-size: 30px;">Pantau dan hitung semua pengeluaran <br> anti
                    salah</h2>
                <p style="color: #000;font-size: 18px;font-weight: 400;">We are committed to bringing the full power of
                    Salesforce to <br> accelerate the world’s journey to net zero.</p>
            </div>
            <div class="col-lg-6" style="padding-top:10%;">
                <img src="{{ asset('price-asset/cewe4.png') }}" alt="">
            </div>
        </div>
    </section>
@endsection

@section('script-after')
    <script>
        function OpenHome() {
            window.location = "{{ url('contactus') }}";
        }
    </script>
@endsection
