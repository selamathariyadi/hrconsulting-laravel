@extends('Layouts/app')

@section('tittle')
    Our Client
@endsection

@section('content')
<div class="section-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 p-5">
                <h2 class="mb-4">Our Client</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen </p>
            </div>
            <div class="col-lg-6 col-md-12">
                <img class="gambar-section1" src="image/image25.png" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 conten-gambar">
        <img src="image/Group25.png" alt="..." class="img-margin">
    </div>
</div>
<!-- section-1 -->
<div class="section-2 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 p-5">
                <h2 class="mb-4">What they said</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <div class="carousel-item ms-3 p-3 active" data-bs-interval="10000">
                                <img src="image/Rectangle65.png" class="img-carausel" alt="...">
                                <div class="img-text">
                                    <img src="image/Ellipse15.png" alt="" style="padding: 10px; width: 120px; height:120px;">

                                    <p class="text-item ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem<br> Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry. Lorem Ipsum has been Lorem Ipsum
                                        is simply dummy text of the printing<br>and typesetting industry. Lorem Ipsum has been</p>
                                </div>
                                <span class="text-title1">Scarlet Witch 
                                <p style="color: white; margin-top: 5px;">Human Resource Departement</p>
                            </span>
                            </div>
                        </div>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
            </div>
            <!-- row flex -->
        </div>
        <!-- container -->
    </div>
    <div class="container mt-5">
        <img src="image/image20.png" alt="" class="mx-auto justify-content-center align-items-center w-100">
    </div>
</div>
@endsection