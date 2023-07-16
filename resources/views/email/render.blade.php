@extends('layout.welcome')


@section('title')
    Reader
@endsection

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('send_email') }}" method="post">
            @csrf
            <input type="email" name="email" placeholder="Enter your email">
            <br>
            <textarea name="message" cols="30" rows="10"></textarea>
            <button>Send</button>
        </form>

    </div>

@endsection
