@extends('layout.defaultLayout')

@section('title', $title)

@section('css', 'home')

@section('content')

    {{-- begin of hero --}}
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            {{-- grid system --}}
            <div class="row">
                {{-- lg for large because this container is main page --}}
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-6 text-white"><b>Bersama Universitas Ciputra,<br>Gemilang masa depan ditangan Kita</b>
                    </h1>
                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, doloribus!</p>
                    <br>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end of hero --}}

    {{-- begin of hobby --}}
    <section id="hobby">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">TRIVIA</h6>
                    <h1>My Recent Hobbies</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/hobby1.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Listening Music</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/hobby2.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Rubik Cube</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/hobby3.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Origami</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/hobby4.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Web Design</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/hobby5.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Dream Something</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/hobby6.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Make Youtube Contents</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end of hobby --}}

    {{-- begin of article --}}
    <section id="article" class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">Articles</h6>
                    <h1>What happen in Ciputra University?</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="img/article.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="mt-4"><a href="#">Article Title</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/article.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="mt-4"><a href="#">Article Title</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/article.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="mt-4"><a href="#">Article Title</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- end of article --}}

    {{-- begin of contact me --}}
    <section id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">Contact</h6>
                    <h1>Get In Touch</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>

            <form action="" class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Enter E-mail">
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Enter Subject">
                </div>
                <div class="col-md-10">
                    <textarea name="" id="" cols="30" rows="5" class="form-control"
                        placeholder="Enter Message"></textarea>
                </div>
                <div class="col-md-10 d-grid">
                    <button class="btn btn-primary">Contact</button>
                </div>
            </form>

        </div>
    </section>
    {{-- end of contact me --}}

@endsection
