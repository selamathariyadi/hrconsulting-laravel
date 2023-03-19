@extends('Layouts/app')

@section('tittle')
    Landing Pages
@endsection
@section('styles2')
<link rel="stylesheet" href="style2.css">
@endsection

@section('content')
<div class="section-1">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-12 p-5">
                <h2>Human Capital <br>Management & Development</h2>
                <p>Kami membantu perusahaan anda membangun dan mengelola sumber data manusia secara efektif dan efisien.</p>
                <button type="button" class="btn btn-outline btn-2">Consult Now</button>
            </div>
            <div class="col-lg-6 col-md-12">
                <img class="gambar-section1" src="image/image3.png" alt="">
            </div>
        </div>
    </div>
    <div class="conten-area text-center p-5">
        <div class="container-fluid">
            <p class="conten-text">
                <span class="kutip mb-3">“</span>Program ini dirancang untuk membantu perusahaan <br>anda membangun sistem pengelolaan manusia yang efektif dan efisien melalui<br> perencanaan yang sistematis dan terintegrasi agar mampu berkontribusi<br>                    dan produktif terhadap pencapaian tujuan perusahaan
            </p>
            <img src="image/group9.png" alt="" class="icon-area">
        </div>
    </div>
</div>
<!-- section-1 -->
<div class="section-2 mt-5">
    <div class="container">
        <div class="row justify-content-around align-items-center m-auto">
            <div class="col-lg-12 col-md-12 p-3">
                <h2 class="text-tittle">Our services</h2>
            </div>
            <div class="row align-items-center justify-content-center m-auto">
                <div class="col-lg-6">
                    <div class="single-cardbox mb-3">
                        <div class="card-body m-auto">
                            <h5 class="card-title p-3">Development<br> Human Capital Program 1</h5>
                            <p class="card-text m-auto">
                                <ul>
                                    <li>Workshop peran SDM diperusahaan</li>
                                    <li> FGD Human process</li>
                                    <li> Pelatihan basic organizational</li>
                                    <li>Development dan basic human resource</li>
                                    <li>Management</li>
                                    <li>Pembukaan agen perubahan internal</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <div class="card-body m-auto">
                            <h5 class="card-title p-3">Development<br> Human Capital Program 2</h5>
                            <p class="card-text m-auto">
                                <ul>
                                    <li>Workshop peran SDM diperusahaan</li>
                                    <li> FGD Human process</li>
                                    <li> Pelatihan basic organizational</li>

                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <div class="card-body m-auto">
                            <h5 class="card-title p-3">Human Resource <br>Outsourching
                            </h5>
                            <p class="card-text m-auto p-3">
                                Ecpand your HR capacity without hiring a full-time employee
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <div class="card-body m-auto">
                            <h5 class="card-title p-3">Psychology <br> Assessment
                            </h5>
                            <p class="card-text m-auto p-3">
                                Konsultasi Psychology Assessment untuk individu maupun perusahaan
                            </p>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
    </div>
</div>
<!-- section 3 -->
<div class="section-1 mt-5">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-12 p-5">
                <h2>Consult Now <br>And Feel The Benefits</h2>
                <p>Kami membantu perusahaan anda membangun dan mengelola sumber data manusia secara efektif dan efisien.</p>
                <button type="button" class="btn btn-outline btn-2">Contact Us</button>
            </div>
            <div class="col-lg-6 col-md-12">
                <img class="gambar-section1" src="image/image4.png" alt="">
            </div>
        </div>
    </div>
</div>
@endsection