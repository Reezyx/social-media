<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media Sosial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="max-width: 800px;margin:auto">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="c-img m-auto text-center">
                            <img src="{{ $people->image }}" alt="profil.jpg">
                        </div>
                    </div>
                    <div class="col">
                        <h3>Nama : {{ $people->name }}</h3>
                        <h4>Username : {{ $people->username }}</h4>

                        <h5><a href="{{ route('seeFollower',['user' => $people->id]) }}">Pengikut : {{ $follower_count }}</a></h5>
                        <h5><a href="{{ route('seeFollowing',['user' => $people->id]) }}">Mengikuti : {{ $following_count }}</a></h5>
                        <form action="{{ route('follow',['people' => $people->id]) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary">{{ $people->is_follow ? 'unfollow' : 'follow' }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <h3>Daftar Postingan</h3>
            <div class="row row-cols-1  row-cols-md-3">
                @foreach ($people->post as $post)
                <div class="col">
                    <a href="{{ route('seePost',['post' => $post->id]) }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="c-img text-center m-auto">
                                    <img src="{{ $post->image }}" alt="" class="rounded" width="150" height="150">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>