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
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Excerpt</label>
                    <textarea class="form-control" name="excerpt" ></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>
                    <textarea class="form-control" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection