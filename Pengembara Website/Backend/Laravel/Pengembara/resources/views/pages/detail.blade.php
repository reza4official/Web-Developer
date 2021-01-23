@extends('layouts.app')

@section('title')
    Detail Travel
@endsection

@section('content')
    <main>
        <!-- Details -->
        <section class="section-details-header"></section>
        <!-- Breadcrumb -->
        <section class="section-details-content">
            <div class="container">
            <div class="row">
                <div class="col p-0">
                <nav>
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item">Paket Travel</li>
                    <li class="breadcrumb-item active">Details</li>
                    </ol>
                </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                <div class="card card-details mb-2 mb-sm-2">
                    <h1>Nusa Penida</h1>
                    <p>Republic of Indonesia</p>

                    <!-- Gallery 
                    Note:
                    a: Original Images
                    src: thumbnail Images
                    xpreview: mmain display images-->

                    <div class="gallery">
                    <div class="xzoom-container">
                        <img
                        src="{{url('frontend/images/main_pic/nusa_penida_main.png')}}"
                        class="xzoom"
                        id="xzoom-default"
                        xoriginal="{{url('frontend/images/originals/nusa_penida_main_original.jpg')}}"
                        />
                    </div>
                    <div class="xzoom-thumbs">
                        <a
                        href="{{url('frontend/images/originals/nusa_penida_main_original.jpg')}}"
                        >
                        <img
                            src="{{url('frontend/images/nusa_penida_1.png')}}"
                            class="xzoom-gallery"
                            width="128"
                            xpreview="{{url('frontend/images/main_pic/nusa_penida_main.png')}}"
                        />
                        </a>
                        <a
                        href="{{url('frontend/images/originals/nusa_penida_2_original.jpg')}}"
                        >
                        <img
                            src="{{url('frontend/images/nusa_penida_2.png')}}"
                            class="xzoom-gallery"
                            width="128"
                            xpreview="{{url('frontend/images/main_pic/nusa_penida_main_2.png')}}"
                        />
                        </a>
                        <a
                        href="{{url('frontend/images/originals/nusa_penida_3_original.jpg')}}"
                        >
                        <img
                            src="{{url('frontend/images/nusa_penida_3.png')}}"
                            class="xzoom-gallery"
                            width="128"
                            xpreview="{{url('frontend/images/main_pic/nusa_penida_main_3.png')}}"
                        />
                        </a>
                        <a
                        href="{{url('frontend/images/originals/nusa_penida_4_original.jpg')}}"
                        >
                        <img
                            src="{{url('frontend/images/nusa_penida_4.png')}}"
                            class="xzoom-gallery"
                            width="128"
                            xpreview="{{url('frontend/images/main_pic/nusa_penida_main_4.png')}}"
                        />
                        </a>
                        <a
                        href="{{url('frontend/images/originals/nusa_penida_5_original.jpg')}}"
                        >
                        <img
                            src="{{url('frontend/images/nusa_penida_5.png')}}"
                            class="xzoom-gallery"
                            width="128"
                            xpreview="{{url('frontend/images/main_pic/nusa_penida_main_5.png')}}"
                        />
                        </a>
                    </div>
                    </div>

                    <!-- Destination Details -->
                    <h2>About Destination</h2>
                    <p>
                    Nusa Penida is an island southeast of Indonesia's island Bali
                    and a district of Klungkung Regency that includes the
                    neighbouring small island of Nusa Lembongan. The Badung Strait
                    separates the island and Bali. The interior of Nusa Penida is
                    hilly with a maximum altitude of 524 metres. It is drier than
                    the nearby island of Bali.
                    </p>
                    <p>
                    Bali and a district of Klungkung Regency that includes the
                    neighbouring small island of Nusa Lembongan. The Badung Strait
                    separates the island and Bali.
                    </p>

                    <!-- Destination Event -->
                    <div class="features row">
                    <div class="col-md-4">
                        <img
                        src="{{url('frontend/images/event_icon.png')}}"
                        alt="event-icon"
                        class="featured-images"
                        />
                        <div class="description">
                        <h3>Featured Event</h3>
                        <p>Tari Kecak</p>
                        </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <img
                        src="{{url('frontend/images/language_icon.png')}}"
                        alt="language-icon"
                        class="featured-images"
                        />
                        <div class="description">
                        <h3>Language</h3>
                        <p>Bahasa Indonesia</p>
                        </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <img
                        src="{{url('frontend/images/foods_icon.png')}}"
                        alt="foods-icon"
                        class="featured-images"
                        />
                        <div class="description">
                        <h3>Foods</h3>
                        <p>Local Foods</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Trip Information Card -->
                <div class="col-lg-4">
                <div class="card card-details card-right">
                    <h2>Members are going</h2>
                    <div class="members my-2">
                    <img
                        src="{{url('frontend/images/members_pic.png')}}"
                        alt=""
                        class="member-images mr-1"
                    />
                    <img
                        src="{{url('frontend/images/members_pic.png')}}"
                        alt=""
                        class="member-images mr-1"
                    />
                    <img
                        src="{{url('frontend/images/members_pic.png')}}"
                        alt=""
                        class="member-images mr-1"
                    />
                    <img
                        src="{{url('frontend/images/members_pic.png')}}"
                        alt=""
                        class="member-images mr-1"
                    />
                    <img
                        src="{{url('frontend/images/more_members_pic.png')}}"
                        alt=""
                        class="member-images mr-1"
                    />
                    </div>
                    <hr />
                    <h2 class="mb-3">Trip Informations</h2>
                    <table class="trip-information">
                    <tr>
                        <th width="50%">Date of Departure</th>
                        <td width="50%" class="text-right">8 January 2021</td>
                    </tr>
                    <tr>
                        <th width="50%">Duration</th>
                        <td width="50%" class="text-right">5D 4N</td>
                    </tr>
                    <tr>
                        <th width="50%">Type</th>
                        <td width="50%" class="text-right">Open Trip</td>
                    </tr>
                    <tr>
                        <th width="50%">Price</th>
                        <td width="50%" class="text-right">$100.00 / person</td>
                    </tr>
                    </table>
                </div>
                <div class="join-container">
                    <a
                    href="{{url('/checkout')}}"
                    class="btn btn-block btn-join-now mt-3 py-2"
                    >
                    Join Now
                    </a>
                </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{url('Frontend/libraries/xzoom/dist/xzoom.css')}}" />
@endpush

@push('addon-script')
    <script src="{{url('frontend/libraries/xzoom/dist/xzoom.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".xzoom, .xzoom-gallery").xzoom({
            zoomWidth: 500,
            title: false,
            tint: "#333",
            Xoffset: 15,
            });
        });
    </script>
@endpush