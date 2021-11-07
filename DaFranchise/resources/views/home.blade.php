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
                <div class="col-lg-10 mx-auto text-center">
                    <h1 class="display-4 text-white"><b>It takes years to build a reputation five minutes to ruin it.</b></h1>
                    <br>
                    <p class="text-white"> That means <i>customer service can make or break your business.</i><br>Don’t ruin your reputation, or your franchisor’s reputation, by making a stupid mistake you’ll regret later.</p>
                    <br>
                    {{-- <a href="#" class="btn btn-primary">Get Started</a> --}}
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
                    <h1>Top Franchise Type</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/type1.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Food and Beverage</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/type2.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Retail</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/type3.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Laundry</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/type4.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Tour and Travel</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/type5.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Course</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="hobby">
                        <img src="img/type6.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Automotive</h4>
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
                    <h1>What happens in a Franchise?</h1>
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
