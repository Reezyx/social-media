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
        <h3>Daftar {{ $judul }}</h3>
        <table class="table">
            <tr>
                <th class="scope">No</th>
                <th class="scope">Username</th>
                <th class="scope">Image</th>
            </tr>
            @foreach ($follows as $follow)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="{{ route('seePeople',['user' => $follow->follower->id ] ) }}">{{ $follow->follower->username }}</a> </td>
                <td>{{ $follow->follower->image }}</td>
                <td>
                    <form action="{{ route('follow',['people' => $follow->follower->id]) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">{{ $follow->follower->is_follow ? 'unfollow' : 'follow' }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>