@extends('customer.layout')

@section('content')
    <!-- navigation -->



    <div class="row mb-5 mt-5">
        {{-- <div class="col">
            <h4>customer dashboard</h4>
            <hr>
            <form action="{{ route('customerLogout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div> --}}

        <script src="{{ asset('js/app.js') }}" defer></script>
        <div id="FromApp"></div>



        <div id="FromMix"></div>
        <script src="{{ mix('js/FromMix.js') }}"></script>
    </div>
@endsection
