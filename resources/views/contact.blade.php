@extends('layout')
@section ('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section ('content')
    <<div id="wrapper">
        <div id="page" class="container">
            <h1>Contact US</h1>

            <form method="post" action="/contact">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <p style="color: darkred;">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

                @if (session('message'))
                    <p style="color: darkgreen;">{{ session('message') }}</p>
                @endif
            </form>
        </div>
    </div>
@endsection