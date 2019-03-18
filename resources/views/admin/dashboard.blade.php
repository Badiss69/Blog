@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                       POSTED
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">{{ $post_count }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-danger">
                    <div class="panel-heading text-center">
                        TRASHED POSTS
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">{{ $trashed_count }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        USERS
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">{{ $user_count }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        CATEGORIES
                    </div>
                    <div class="panel-body">
                        <h1 class="text-center">{{ $categories_count }}</h1>
                    </div>
                </div>
            </div>

@endsection
