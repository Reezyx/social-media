<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


      <div class="container">
        <h2>Daftar Postingan</h1>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="font-bold text-md text-blue-300 hover:text-blue-600">Logout</button>
        </form>
        <a href="{{ route('formCreatePost') }}" class="btn btn-primary">Tambah Postingan</a>
        <a href="{{ route('seeBookmark') }}">Lihat Bookmark</a>
        <table class="table">
          <thead class="table-primary">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Image user</th>
              <th scope="col">Username</th>
              <th scope="col">Image Post</th>
              <th scope="col">Content</th>
              <th scope="col">Lihat</th>
              <th scope="col">Hapus</th>
              <th scope="col">Jumlah Like</th>
              <th scope="col">Like</th>
              <th scope="col">Bookmark</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1 ?>
            @foreach ($posts as $post)
             <tr>
              <th scope="row">{{ $i++ }}</th>
              <td>{{ $post->user->image }}</td>
              <td><a href="{{ route('seePeople',['user' => $post->user_id]) }}">{{ $post->user->username }}</a></td>
              <td>{{ $post->image }}</td>
              <td>{{ $post->content }}</td>
              <td><a href="seePost/{{$post->id  }}">Lihat</a></td>
              <td>
                @if ($post->is_mine)
                <form action="{{ route('deletePost', ['post' => $post->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
                @endif
              </td>   
              <td>{{ $post->likes_count }}</td>
              <td>
                <form action="{{ route('likePost',['post' => $post->id]) }}" method="post">
                  @csrf
                  <button type="submit">{{ $post->is_like ? 'Unlike' : 'Like' }}</button>
                </form>
              </td>
              <td>
                <form action="{{ route('addBookmark',['post' => $post->id]) }}" method="post">
                  @csrf
                  <button type="submit">{{ $post->is_bookmark ? 'UnBookmark' : 'Bookmark' }}</button></form>
              </td>
            </tr>   
            @endforeach
          </tbody>
        </table>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>