@extends('layouts.checkout')

@section('title')
    Checkout
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
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item">Details</li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Card Details -->
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details mb-2 mb-sm-2">
                            <h1>Who is Going?</h1>
                            <p>Trip to Nusa Penida, Bali, Indonesia</p>

                            <!-- Table Members Going Details -->
                            <div class="attendee">
                                <table
                                    class="table table-responsive-sm text-center"
                                >
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>VISA</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>
                                            <img
                                                src="{{url('frontend/images/ava_user.png')}}"
                                                height="60"
                                            />
                                        </td>
                                        <td class="align-middle">
                                            Reza Armstrong
                                        </td>
                                        <td class="align-middle">SPA</td>
                                        <td class="align-middle">
                                            30 Days
                                        </td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img
                                                    src="{{url('frontend/images/remove_icon.png')}}"
                                                    height="20"
                                                />
                                            </a>
                                        </td>
                                    </tbody>
                                    <tbody>
                                        <td>
                                            <img
                                                src="{{url('frontend/images/ava_user.png')}}"
                                                height="60"
                                            />
                                        </td>
                                        <td class="align-middle">
                                            Reza Wira
                                        </td>
                                        <td class="align-middle">IDN</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img
                                                    src="{{url('frontend/images/remove_icon.png')}}"
                                                    height="20"
                                                />
                                            </a>
                                        </td>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Add Member Form -->
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline">
                                    <!-- Username Input -->
                                    <label
                                        for="inputUsername"
                                        class="sr-only"
                                        >Name</label
                                    >
                                    <input
                                        type="text"
                                        name="inputUsername"
                                        class="form-control mb-2 mr-sm-2"
                                        id="inputUsername"
                                        placeholder="Username"
                                    />

                                    <!-- VISA Dropdown -->
                                    <label for="inputVisa" class="sr-only"
                                        >Visa</label
                                    >
                                    <select
                                        name="inputVisa"
                                        id="inputVisa"
                                        class="custom-select mb-2 mr-sm-2"
                                    >
                                        <option value="VISA" selected>
                                            VISA
                                        </option>
                                        <option value="30 Days">
                                            30 Days
                                        </option>
                                        <option value="N/A">N/A</option>
                                    </select>

                                    <!-- DOE Passport Date Picker -->
                                    <label
                                        for="doePassport"
                                        class="sr-only"
                                    >
                                        DOE Passport
                                    </label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input
                                            type="text"
                                            class="form-control datepicker"
                                            id="doePassport"
                                            placeholder="DOE Passport"
                                        />
                                    </div>

                                    <!-- Add Now Button -->
                                    <button
                                        type="submit"
                                        class="btn btn-add-now mb-2 px-4"
                                    >
                                        Add Now
                                    </button>
                                </form>
                                <!-- Card Note -->
                                <div
                                    class="card card-note mt-3 justify-content-center"
                                >
                                    <div class="notes ml-3">
                                        <h3 class="mt-2">Note</h3>
                                        <p class="disclaimer mb-2">
                                            You are only able to invite
                                            member that has registered in
                                            Pengembara.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trip Checkout Information Card -->
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Checkout Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Member</th>
                                    <td width="50%" class="text-right">
                                        2 person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional VISA</th>
                                    <td width="50%" class="text-right">
                                        $90.00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">
                                        $80.00 / person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-right">
                                        $280.00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Unique)</th>
                                    <td
                                        width="50%"
                                        class="text-right text-total"
                                    >
                                        <span class="text-blue">$280.</span
                                        ><span class="text-orange">33</span>
                                    </td>
                                </tr>
                            </table>
                            <hr />
                            <h2 class="mb-3">Payment</h2>
                            <p class="payment-instruction">
                                Please complete the payment before you
                                continue the trip.
                            </p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img
                                        src="{{url('frontend/images/bni.png')}}"
                                        class="bank-images"
                                    />
                                    <div class="description">
                                        <h3>PT. Pengembara Indonesia</h3>
                                        <p>
                                            123 - 456 - 789
                                            <br />
                                            Bank Negara Indonesia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img
                                        src="{{url('frontend/images/bca.png')}}"
                                        class="bank-images"
                                    />
                                    <div class="description">
                                        <h3>PT. Pengembara Indonesia</h3>
                                        <p>
                                            123 - 456 - 789
                                            <br />
                                            Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a
                                href="{{url('/checkout/success')}}"
                                class="btn btn-block btn-join-now mt-3 py-2"
                            >
                                I Have Made Payment
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a
                                href="{{url('/detail')}}"
                                class="btn-cancel-booking text-muted"
                            >
                                Cancel Booking
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link
        rel="stylesheet"
        href="{{url('Frontend/libraries/gijgo/css/gijgo.min.css')}}"
    />
@endpush

@push('addon-script')
    <script src="{{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".datepicker").datepicker({
                uiLibrary: "bootstrap4",
                icons: {
                    rightIcon:
                        '<img src="{{url('frontend/images/ic_doe.png')}}" alt="" />',
                },
            });
        });
    </script>
@endpush