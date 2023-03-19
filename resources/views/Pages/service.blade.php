@extends('Layouts/app')

@section('tittle')
    HR Consulting
@endsection

@section('content')
<div class="section-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 p-5">
                <h2 style="margin-top: 70px; margin-bottom: 10px;">HR Outsourching</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>
                <button type="button" class="btn btn-outline btn-2">Consult Now</button>
            </div>
            <div class="col-lg-6 col-md-12">
                <img class="gambar-section1" src="image/image10.png" alt="">
            </div>
        </div>
        <div class="row mt-4 align-items-center">
            <div class="col-lg-6 col-md-12">
                <img class="gambar-section2" src="image/image11.png" alt="">
            </div>
            <div class="col-lg-6 col-md-12 ">
                <h2 style="margin-top: 80px; margin-bottom: 10px;">About service</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </div>
    </div>
</div>
<!-- section-1 -->
<div class="section-2 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 p-3">
                <h1 style="margin-top: 70px;">Why should our sources?</h1>
            </div>
            <div class="row d-flex">
                <div class="col-lg-6 col-md-12 p-5">
                    <img src="image/image15.png" alt="" width="60" height="60">
                    <P class="span">Cuts cost</P>
                    <div class="row mt-4">
                        <p>
                            Operational and labour costs are significantly reduced when you start outsourcing. You don’t have to fork out a fortune of your hard-earned money to develop and establish a department in your company. Through outsourcing, you can minimise on unnecessary
                            expenditures and inject your capital more in other aspects of your business
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12  p-5">
                    <img src="image/image15.png" alt="" width="60" height="60">
                    <P class="span">Access to professionals</P>
                    <div class="row mt-4">
                        <p>
                            Just by outsourcing, you will short-cut your way into the pool of global knowledge and have the best experts in the field working alongside you and your company. Complex tasks will be operated by professionals with extensive knowledge and vast experience.
                            Outsourcing helps you to increase efficiency in your business.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12  p-5">
                    <img src="image/image15.png" alt="" width="60" height="60">
                    <P class="span">Save time and energy</P>
                    <div class="row mt-4">
                        <p>
                            You thought that you’ll only save time, right? Well, more good news coming your way! Outsourcing also saves you a ton of your time and energy. You will be doing yourself a favour by freeing up your schedule, which will allow you to focus on improving
                            and scaling your business to the next level.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12  p-5">
                    <img src="image/image15.png" alt="" width="60" height="60">
                    <P class="span">Reduces risk</P>
                    <div class="row mt-4">
                        <p>
                            Outsourcing with a notable firm will help you to mitigate the risks in your company. Instead of pouring time, energy and money into creating areas of professional skills and development such as HR or ITs, it is much better to outsource these responsibilities.
                        </p>
                    </div>
                </div>
            </div>
            <!-- row flex -->
        </div>
        <!-- container -->
    </div>
    <div class="text-p">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p class="kutipan">“ Let us supply you with trained professionals in that area who can help<br>you to smoothly iron out these critical duties ”</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section 2 -->
<div class="section-3">
    <div class="container bg-color">
        <div class="row mx-auto">
            <h1 class="text-h1">Check our ther services</h1>
            <div class="col-lg-4 col-md-12 p-5">
                <div class="card bg-image" style="width:300px;height: 180px;">
                    <img class="card-image ms-3" src="image/image16.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text m-auto">Development Human Capital Program 1</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 p-5">
                <div class="card bg-image" style="width:300px;height: 180px;">
                    <img class="card-image ms-3" src="image/image17.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Development Human Capital Program 2</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 p-5">
                <div class="card bg-image" style="width:300px;height: 180px;">
                    <img class="card-image ms-3" src="image/image18.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Psychology Assessment</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- section 3 -->
<div class="section-consul d-md">
    <div class="container">
        <h1 style="text-align: center;">Consult Now</h1>
        <div class="row mx-auto">
            <form action="">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group mt-4">
                    <label for="compnayname" class="form-label">Company name</label>
                    <input type="text" class="form-control" id="companyname">
                </div>
                <div class="form-group mt-4">
                    <label for="picnumber" class="form-label">PIC number</label>
                    <input type="text" class="form-control" id="picnumber">
                </div>
                <div class="form-group mt-4">
                    <label for="compnayadrres" class="form-label">Company address</label>
                    <input type="text" class="form-control" id="companyadrres">
                </div>
                <div class="form-group mt-4">
                    <label for="requestservice" class="form-label">Request service</label>
                    <input type="text" class="form-control" id="requestservice">
                </div>
                <div class="form-group mt-4">
                    <label for="requestservice" class="form-label">Need description</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit " class="btn btn-2  mt-4">Consult Now</button>
            </form>
        </div>
    </div>
    <!-- container -->
</div>
<!-- section-consul -->
@endsection