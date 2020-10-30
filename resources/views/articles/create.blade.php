@extends('layout')

@section ('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section ('about')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>

            <form method="post" action="/articles">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" value="{{ old('title') }}">
                    @if($errors->has('title'))
                        <p style="color: darkred;">{{ $errors->first('title') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Excerpt</label>
                    <textarea class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" >{{ old('excerpt') }}</textarea>
                    @if($errors->has('excerpt'))
                        <p style="color: darkred;">{{ $errors->first('excerpt') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" name="body">{{ old('body') }}</textarea>
                    @if($errors->has('body'))
                        <p style="color: darkred;">{{ $errors->first('body') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection