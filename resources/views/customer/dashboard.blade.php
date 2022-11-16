@extends('customer.layout')

@section('content')
    <div class="row mb-5 mt-5">
        <div class="col">
            <h4>customer dashboard</h4>
            <hr>
            <form action="{{ route('customerLogout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
    </div>
@endsection
