@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
        @foreach($posts as $post)
            <div class="m-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div>
                                {{ $post->title }}
                            </div>
                            <div class="ml-auto">
                                {{ $post->date }}
                            </div>   
                        </div>
                    </div>
                    <div class="card-body">
                        {{ $post->body }}
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

@stop