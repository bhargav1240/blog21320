<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

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

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>