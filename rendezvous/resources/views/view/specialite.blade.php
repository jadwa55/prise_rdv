@extends('layouts.app')

@section('title')
    Prise un rendez-vous
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>{{ $categories->name }}</h2>
                @foreach ($specialites as $spe)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h3> {{ $spe->name }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
