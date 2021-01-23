@extends('layouts.app')

@section('title')
    Pengembara
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore the Beautiful World
            <br />
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br />
            moment you never see before
        </p>

        <!-- Button Get Started -->
        <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

    <!-- Main -->
    <main>
        <!-- Statistik -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>7</h2>
                <p>Partners</p>
            </div>
            </section>
        </div>

        <!-- Wisata Popular -->
        <section class="section-popular" id="popular">
            <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                <h2>Wisata Popular</h2>
                <p>
                    Something that you never try
                    <br />
                    before in this world
                </p>
                </div>
            </div>
            </div>
        </section>

        <!-- Card Wisata -->
        <section class="section-popular-content" id="popularContent">
            <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                <div
                    class="card-travel text-center d-flex flex-column"
                    style="background-image: url('frontend/images/deratan.png')"
                >
                    <div class="travel-country">INDONESIA</div>
                    <div class="travel-location">DERATAN, BALI</div>
                    <div class="travel-button mt-auto">
                    <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                        View Details
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                <div
                    class="card-travel text-center d-flex flex-column"
                    style="background-image: url('frontend/images/bromo.png')"
                >
                    <div class="travel-country">INDONESIA</div>
                    <div class="travel-location">BROMO, JOGJA</div>
                    <div class="travel-button mt-auto">
                    <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                        View Details
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                <div
                    class="card-travel text-center d-flex flex-column"
                    style="background-image: url('frontend/images/nusa_penida.png')"
                >
                    <div class="travel-country">INDONESIA</div>
                    <div class="travel-location">NUSA PENIDA</div>
                    <div class="travel-button mt-auto">
                    <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                        View Details
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                <div
                    class="card-travel text-center d-flex flex-column"
                    style="background-image: url('frontend/images/dubai.png')"
                >
                    <div class="travel-country">MIDDLE EAST</div>
                    <div class="travel-location">DUBAI</div>
                    <div class="travel-button mt-auto">
                    <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                        View Details
                    </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Our Partners -->
        <section class="section-partners" id="partners">
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                <h2>Our Partners</h2>
                <p>
                    Companies are trusted us
                    <br />
                    more than just a trip
                </p>
                </div>
                <div class="col-md-8 text-center">
                <img
                    src="{{url('Frontend/images/partners.png')}}"
                    alt="Logo Partners"
                    class="img-partner"
                />
                </div>
            </div>
            </div>
        </section>

        <!-- Testimonial Header -->
        <section class="section-testimonial-heading" id="testimonialHead">
            <div class="container">
            <div class="row">
                <div class="col text-center">
                <h2>They're Loving US</h2>
                <p>
                    Moments were giving them
                    <br />
                    the best experience
                </p>
                </div>
            </div>
            </div>
        </section>

        <!-- Card Testimonial -->
        <section class="section-testimonial-content" id="testimonial-content">
            <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                    <img
                        src="{{url('frontend/images/user.png')}}"
                        alt="user"
                        class="mb-4 rounded-circle"
                    />
                    <h3 class="mb-4">Reza Armstrong</h3>
                    <p class="testimonial">
                        " It was glorious an I could not stop to say wohoo for every
                        single moment. Dankeeeee "
                    </p>
                    </div>
                    <hr />
                    <p class="trip-to mt-2">Trip to Ubud, Bali, Indonesia</p>
                </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                    <img
                        src="{{url('frontend/images/user.png')}}"
                        alt="user"
                        class="mb-4 rounded-circle"
                    />
                    <h3 class="mb-4">Reza Armstrong</h3>
                    <p class="testimonial">
                        " It was glorious an I could not stop to say wohoo for every
                        single moment. Dankeeeee "
                    </p>
                    </div>
                    <hr />
                    <p class="trip-to mt-2">Trip to Ubud, Bali, Indonesia</p>
                </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                    <img
                        src="{{url('frontend/images/user.png')}}"
                        alt="user"
                        class="mb-4 rounded-circle"
                    />
                    <h3 class="mb-4">Reza Armstrong</h3>
                    <p class="testimonial">
                        " It was glorious an I could not stop to say wohoo for every
                        single moment. Dankeeeee "
                    </p>
                    </div>
                    <hr />
                    <p class="trip-to mt-2">Trip to Ubud, Bali, Indonesia</p>
                </div>
                </div>
            </div>
            <!-- Button I Need Help & Get Started -->
            <div class="row">
                <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                    I Need Help
                </a>
                <a href="#" class="btn btn-get-started-2 px-4 mt-4 mx-1">
                    Get Started
                </a>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection