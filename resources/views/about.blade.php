@extends('layouts.main')

@section('container')
<div class="container mt-3">
    <div class="row p-3">
        <div class="col-md-7 col-sm-12">
            <img src="img/shoess1.jpg" alt="about" class="img-fluid">
        </div>
        <div class="col-md-5">
            <h1 class="mt-3 text-center mb-3">About Us</h1>
            <h5>Welcome To EverydayShoes!</h5>
            <p class="text">
                Hallo sobat Everyday, apa kabar hari ini? Semoga sehat selalu yaa!!
            </p>
            <p class="text">
                Sepatu adalah benda yang sangat diminati berbagai kalangan dari remaja hingga dewasa. 
                Tidak sedikit juga yang kebingungan dalam memilih sepatu yang tepat bagi mereka, maka dari 
                itu aplikasi ini akan membantu user dalam memilih sepatu yang tepat dengan memberikan informasi 
                detail mengenai sepatu tersebut.
            </p>
            <p class="text">
                Keterbatasan informasi mengenai produk adalah salah satu masalah yang dihadapi oleh user. 
                Maka dari itu masalah ini akan diselesaikan oleh aplikasi website EverydayShoes yang memberikan 
                informasi detail mengenai sepatu dari berbagai macam merek sehingga user akan selalu mengikuti 
                alur produk terkini mengenai produk terbaru maupun yang telah tersedia.
            </p>
        </div>
    </div>

    <div class="row mb-5">
        <h1 class="text-center mb-4">Our Team</h1>
        <div class="col-md-3 col-sm-10">
            <div class="card">
                <img src="img/ericko.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Ericko Timur Apandi</h5>
                    <p class="card-text">203040127</p>
                    <ul class="nav justify-content-end">
                        <li class="ms-3">
                            <a class="" href="https://github.com/etacodes"><i class="bi bi-github"></i></a>                            
                        </li>
                        <li class="ms-3">
                            <a class="" href="https://www.instagram.com/erickotmr/?hl=id"><i class="bi bi-instagram"></i></a>                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="img/devin2.jpeg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Devin Febrian</h5>
                    <p class="card-text">203040141</p>
                    <ul class="nav justify-content-end">
                        <li class="ms-3">
                            <a class="" href="https://github.com/devinfebrian"><i class="bi bi-github"></i></a>                            
                        </li>
                        <li class="ms-3">
                            <a class="" href="https://www.instagram.com/devin.febrian/?hl=id"><i class="bi bi-instagram"></i></a>                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3">
                <div class="card">
                    <img src="img/fadil.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Fadhil Ashari</h5>
                        <p class="card-text">203040148</p>
                        <ul class="nav justify-content-end">
                            <li class="ms-3">
                                <a class="" href="https://github.com/fdlashari"><i class="bi bi-github"></i></a>                            
                            </li>
                            <li class="ms-3">
                                <a class="" href="https://www.instagram.com/fdlashari/?hl=id"><i class="bi bi-instagram"></i></a>                            
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                    <div class="card">
                        <img src="img/andi.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Andi Rahman Hakim</h5>
                            <p class="card-text">203040122</p>
                            <ul class="nav justify-content-end">
                                <li class="ms-3">
                                    <a href="https://github.com/uyuy06"><i class="bi bi-github"></i></a>                            
                                </li>
                                <li class="ms-3">
                                    <a href="https://www.instagram.com/angraksa24/?hl=id"><i class="bi bi-instagram"></i></a>                            
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    </div>
</div>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top px-3 border-bottom">
    <div class="col-md-4 d-flex align-items-center ">
        <a class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"></a>
        <span class="text-muted">Developed by EverydayShoes 2022</span>
    </div>
    <img src="" alt="" width="40" height="40">
@endsection
