<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Chat</div>

                    <div class="card-body">
                        @foreach($chats as $chat)
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0">{{ $chat->user->name }}</h5>
                                    {{ $chat->message }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('chats.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <textarea name="message" id="message" rows="3" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
</body>
</html>