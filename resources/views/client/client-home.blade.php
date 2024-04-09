@extends('layouts.client-side.client-layout')

@section('content')
    <div class="page-home">
        <div class="section-home-highlight">
            <div class="highlights">
                <p class="section-headlines-small">
                Digital Journey Made Extraordinary
                </p>
                <p class="section-headlines">
                    Transform. <br> Elevate. <br> Thrive.
                </p>
            </div>
            <div class="home-cta">
                <div class="search-box">
                    <a class="redirectChoose" href="#">I want to to shop</a>
                    <a class="redirectChoose" href="#">Hire freelancer</a>
                </div>
            </div>
            <div class="hero">
                <img class="hero-img" src="{{ asset('asset/img/hero2v2.svg') }}" alt="" srcset="">
            </div>
        </div>

        <div class="section-home">
            <div class="auguri-highlight">
                <div class="h5 auguri-highlight-title">
                    What We Offer?
                </div>
                <div class="auguri-highlight-inner">
                    <div class="auguri-product fs-6">
                        <div class="auguri-product-title">
                            <p>Explore a curated collection of essentials and luxuries that elevate your lifestyle.</p>
                        </div>
                        <div class="auguri-product-content">
                            <ul>
                                <li>Quality footwear for every occasion</li>
                                <li>Efficient kitchen appliances for modern living</li>
                                <li>Indulgent treats to satisfy your cravings</li>
                                <li>Convenient tech accessories for work and play</li>
                            </ul>
                        </div>
                    </div>
                    <div class="auguri-services fs-6">
                        <div class="auguri-product-title">
                            <p>Experience relief from digital headaches with our expert services tailored to your needs.</p>
                        </div>
                        <div class="auguri-product-content">
                            <ul>
                                <li>Professional Graphic Design to bring your brand to life</li>
                                <li>Intuitive UI/UX Design for seamless digital experiences</li>
                                <li>Custom Web Development for unique online solutions</li>
                                <li>Innovative Mobile App Development for on-the-go success</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-who container-fluid">
        <div class="section-home-wwa">
            <p class="h4 wwa-title">
                Who We Are?
                <div class="lb"></div>
            </p>
            <div class="wwa-content">
                <div class="wwa-write p-3 fs-6">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero quia voluptatem corporis! Architecto soluta consequatur cupiditate, similique fugiat debitis possimus reprehenderit, amet neque omnis exercitationem, nesciunt iste qui nemo dolore.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero quia voluptatem corporis! Architecto soluta consequatur cupiditate, similique fugiat debitis possimus reprehenderit, amet neque omnis exercitationem, nesciunt iste qui nemo dolore.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero quia voluptatem corporis! Architecto soluta consequatur cupiditate, similique fugiat debitis possimus reprehenderit, amet neque omnis exercitationem, nesciunt iste qui nemo dolore.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero quia voluptatem corporis! Architecto soluta consequatur cupiditate, similique fugiat debitis possimus reprehenderit, amet neque omnis exercitationem, nesciunt iste qui nemo dolore.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero quia voluptatem corporis! Architecto soluta consequatur cupiditate, similique fugiat debitis possimus reprehenderit, amet neque omnis exercitationem, nesciunt iste qui nemo dolore.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero quia voluptatem corporis! Architecto soluta consequatur cupiditate, similique fugiat debitis possimus reprehenderit, amet neque omnis exercitationem, nesciunt iste qui nemo dolore.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero quia voluptatem corporis! Architecto soluta consequatur cupiditate, similique fugiat debitis possimus reprehenderit, amet neque omnis exercitationem, nesciunt iste qui nemo dolore.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero quia voluptatem corporis! Architecto soluta consequatur cupiditate, similique fugiat debitis possimus reprehenderit, amet neque omnis exercitationem, nesciunt iste qui nemo dolore.
                </div>
                <div class="wwa-id">
                    <img class="wwa-id-img" src="{{ asset('asset/img/hero4.jpg') }}" alt="" srcset="">
                </div>
                <div class="wwa-socmed">
                    <img class="socmed" src="{{ asset('asset/img/socmed/linkedin.svg') }}" alt="" srcset="">
                    <img class="socmed" src="{{ asset('asset/img/socmed/github.svg') }}" alt="" srcset="">
                    <img class="socmed" src="{{ asset('asset/img/socmed/behance.svg') }}" alt="" srcset="">
                    <img class="socmed" src="{{ asset('asset/img/socmed/facebook.svg') }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <div class="page-contact container-fluid">
        ccd
    </div>
@endsection
