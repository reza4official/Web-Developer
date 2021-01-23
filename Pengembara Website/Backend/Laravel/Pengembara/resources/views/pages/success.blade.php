@extends('layouts.success')

@section('title')
    Checkout Success!
@endsection

@section('content')
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{url('frontend/images/mail.png')}}" class="mb-4" />
                <h1>Yay! Success</h1>
                <p>
                    We've sent you email for trip instruction
                    <br />
                    please read it as well
                </p>
                <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-4 py-2"
                    >Home Page</a
                >
            </div>
        </div>
    </main>
@endsection
























