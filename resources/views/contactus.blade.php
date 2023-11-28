@extends('layouts.layout-v2_2')

@section('css-after')
    <style>
        .atas {
            background-image: url('{{ asset('bgatas.png') }}');
            background-size: cover;
        }

        .colkedua {
            background-image: url('{{ asset('cewe.png') }}')
        }
    </style>
@endsection

@section('konten')
    <section class="atas" style="padding:12%">
        <center>
            <h1 style="color: #000;text-align: center;font-size: 45px;font-weight: 700;">Diskusikan kebutuhan bisnis Anda
                bersama kami</h1>
        </center>
        <center>
            <p style="color: #000;text-align: center;font-size: 22px;">Tim sales kami siap menjawab permasalahan bisnis dan
                memberikan solusi <br> yang paling tepat untuk Anda.</p>
        </center>
    </section>
    <section class="partner">
        <center>
            <p style="color: #000;font-size: 22px;font-weight: 700;">Beberapa partner kami</p>
        </center>
        <center><img src="{{ asset('partnerkami.png') }}" alt=""></center>
    </section>
    <section class="contact sales">
        <div class="row d-flex">
            <div class="col-lg-6" style="padding:7%; background-color:#1E3168;">
                <h1 style="color: #FFF;font-size: 45px;font-weight: 700;">Dengan siapa Anda perlu <br> menghubungi?</h1>
                <p style="color: #FFF;font-size: 18px;font-weight: 400;">Selain Anda akan mendapatkan keuntungan sebagai
                    Member Referral <br> Omsetku, rekan bisnis Anda yang diajak berlangganan juga akan <br> mendapatkan
                    diskon Rp 250.000 untuk paket berlangganan pertama <br> mereka.</p>
                <a href="#" class="btn btn-primary"
                    style="background-color: #1E3168; font-size:15px; border-color: #ffffff; color: #ffffff; border-radius: 5px; width:35vh"><img
                        src="{{ asset('wa-icon.png') }}" alt=""> Whatsapp Sales</a>
            </div>
            <div class="col-lg-6 colkedua" style="height: 70vh"></div>
        </div>
    </section>
    <section class="form contact" style="padding:5%">
        <center>
            <h1 style="color: #000;font-weight: 700;font-size: 40px;">Jadwalkan Demo</h1>
        </center>
        <center>
            <p style="color: #000;font-size: 18px;font-weight: 400; margin-bottom:50px">Konsultasikan kebutuhan Anda dengan
                tim kami dan
                pelajari bagaimana Omsetku dapat <br> menjadi solusi tepat untuk bisnis Anda</p>
        </center>
        <div class="container fluid d-flex justify-content-center"
            style="background-color: #FFF; border-radius: 5px; padding: 25px; padding-bottom:50px !important; padding-top:50px !important; max-width: 1200px; border: 2px solid #DCDCDC;">
            <form action="#">
                <div class="row">
                    <div class="form-group col-md-6">
                        <p style="color: #2B2A35; font-family: Roboto; font-weight: 700; line-height:normal;">Nama Lengkap
                        </p>
                        <input type="text" class="form-control" id="inputNama" placeholder="e.g John Doe"
                            style="background-color: #FFF; border: 1px solid #E2E2E2;width: 450px; height:50px">
                    </div>
                    <div class="form-group col-md-6 ">
                        <p style="color: #2B2A35; font-family: Roboto; font-weight: 700;line-height:normal;">Nama Perusahaan
                        </p>
                        <input type="text" class="form-control" id="inputPerusahaan" placeholder="e.g PT john Doe"
                            style="background-color: #FFF; border: 1px solid #E2E2E2;width: 450px; height:50px">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group col-md-6 ">
                        <p style="color: #2B2A35; font-family: Roboto; font-weight: 700; line-height:normal;">Jumlah
                            Karyawan</p>
                        <select class="form-select" aria-label="Default select example" style="width: 450px; height:50px">
                            <option selected style="color: #D0D6DD;font-weight: 400;">Pilih Jumlah Karyawan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 ">
                        <p style="color: #2B2A35; font-family: Roboto; font-weight: 700; line-height:normal;">Industri</p>
                        <select class="form-select" aria-label="Default select example" style="width: 450px; height:50px">
                            <option selected>Pilih Jumlah Industri</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group col-md-6 ">
                        <p style="color: #2B2A35; font-family: Roboto; font-weight: 700;line-height:normal;">Nomor Ponsel
                        </p>
                        <input type="text" class="form-control" id="inputPonsel" placeholder="e.g. (201) 555-0123"
                            style="background-color: #FFF; border: 1px solid #E2E2E2;width: 450px; height:50px">
                    </div>
                    <div class="form-group col-md-6">
                        <p style="color: #2B2A35; font-family: Roboto; font-weight: 700;line-height:normal;">Jabatan</p>
                        <select class="form-select" aria-label="Default select example" style="width: 450px; height:50px">
                            <option selected>Pilih Jabatan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <p style="color: #2B2A35; font-family: Roboto; font-weight: 700;line-height:normal;">Email
                    </p>
                    <input type="text" class="form-control" id="inputPonsel" placeholder="e.g. john.doe@mail.com"
                        style="background-color: #FFF; border: 1px solid #E2E2E2;width: 125vh; height:50px">
                </div>
                <button type="submit" class="btn btn-primary mt-3"
                    style="background: #1E3168; width:100%; height:5vh; border-radius:5px">Dapatkan Akun Demo
                    Gratis</button>
            </form>
        </div>
    </section>
@endsection
