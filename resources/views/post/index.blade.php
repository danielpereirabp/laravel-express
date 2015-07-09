@extends('template')

@section('content')

	<div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            @foreach($posts as $post)
                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{ $post['title'] }}</h1>

                <hr>

                <!-- Post Content -->
                <p><a href="#">{{ $post['content'] }}</a></p>

                <p>
                    <b>Tags</b>
                    <ul>
                        @foreach($post->tags as $tag)
                            <li>{{ $tag->name }}</li>
                        @endforeach
                    </ul>
                </p>

                <hr>
            @endforeach
            
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Busca</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                    </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </div>

        </div>

    </div>
    <!-- /.row -->

@endsection