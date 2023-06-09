@extends('layouts/layoutMaster')

@section('title', 'Flight Create')

@section('vendor-style')
@endsection

@section('page-style')
@endsection

@section('vendor-script')
@endsection

@section('page-script')
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Flight Form</h5>
                <div class="card-body">
                    @livewire('flight.form', ['flight' => $flight])
                </div>
            </div>
        </div>

    </div>

@endsection
