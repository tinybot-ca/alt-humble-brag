@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <ul class="list-group list-group-flush">

                    <!-- Action Buttons -->
                    <li class="list-group-item grid-bg">
                        <a class="card-link btn btn-outline-primary btn-sm" href="/brags/create">New</a>
                    </li>

                    <!-- Brag List -->
                    @foreach ($brags as $brag)
                    <li class="list-group-item d-flex">
                        {{ $brag->description }}
                        <a class="ml-auto card-link btn btn-outline-primary btn-sm" href="/{{ $brag->id }}/edit">Edit</a>
                    </li>
                    @endforeach

                </ul>

                {{-- <div class="card-body">

                </div> <!-- card-body --> --}}

            </div> <!-- card -->
        </div>
    </div>
</div>
@endsection
