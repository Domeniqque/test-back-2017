@extends('layouts.default')

@section('main')
    <section id="about" class="about-section"><!-- about start -->
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>{{ $doctor->name }}</h1>
                    <h1>{{ $doctor->speciality }}</h1>
                    <p class="lead">{{ $doctor->description }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- about close -->
@endsection