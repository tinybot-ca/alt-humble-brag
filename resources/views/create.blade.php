@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- New Brag Card -->
            <div class="card">
                <div class="card-header">
                    <h4>New Record</h4>
                </div>

                <!-- Action Buttons -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item grid-bg">
                        <a class="btn btn-outline-primary btn-sm" href="{{ url()->previous() }}">Cancel</a>
                    </li>
                </ul>

                <div class="card-body">
                    <form method="POST" action="/brags" novalidate>
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="description" class="col-sm-4 col-form-label text-md-right">
                                Description
                            </label>
                            <div class="col-md-6">
                                <textarea rows="3" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description">{{ old('description') }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>

                </div> <!-- card-body -->

            </div> <!-- card -->
        </div>
    </div>
</div>

@endsection
