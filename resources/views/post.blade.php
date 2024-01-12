<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


      <div class="container" >
        <div class="card">
            <div class="card-body">
                <img src="{{ $post->image }}" alt="" width="150" height="150" class="rounded">
                <h5>{{ $post->content }}</h5>
               
                <h3>Daftar Komen</h3>

                <form action="/sendComment" method="post">
                  @csrf
                  <div class="mb-3">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <label for="form-comment" class="form-label">comment </label>
                    <input type="text" class="form-control" name="comment" id="form-comment" placeholder="Masukan Komen">
                  </div>

                  <button type="submit" class="btn btn-primary">Komen</button>
                </form>


                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">User</th>
                        <th scope="col">Komen</th>
                        <th scope="col">Like</th>
                        <th scope="col">Hapus Komen</th>
                        <th scope="col">Balasan</th>
                      </tr>
                    </thead>
                
                    <tbody>
                        <?php $i=1 ;
                        $a=1; ?>
                        @foreach ($comments as $comment)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $comment->user->username }}</td>
                            <td>{{ $comment->comment }} </td>
                            <td>
                              {{ $comment->likes_count }}
                              <form action="{{ route('likeComment',['comment' => $comment->id]) }}" method="post">
                              @csrf
                              <button type="submit">{{ $comment->is_like ? 'Unlike' : 'Like' }}</button>
                              </form>
                            </td>
                            <td>
                              @if ($comment->is_mine)
                                  <form action="{{ route('deleteComment',['post' => $post->id,'comment' => $comment->id]) }}" method="post">
                                      @csrf
                                    
                                      @method('DELETE')
                                      <button type="submit">Hapus</button>
                                  </form>
                              @endif
                            </td>
                            
                            <td>
                              <h5>Balasan</h5>
                              <form action="/sendReply" method="post">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <input type="hidden" name="parent_comment_id" value="{{ $comment->id }}">
            
                                <div class="mb-3">
                                  <input type="text" class="form-control" name="comment" id="form-comment" placeholder="Masukan balasan">
                                </div>
              
                                <button type="submit" class="btn btn-primary">Komen</button>
                              </form>
                              @if($comment->replies->count() > 0)
                              <ul>
                                  @foreach($comment->replies as $reply)
                                      <li>{{ $reply->user->name }}: {{ $reply->comment }}      
                                        @if ($comment->is_mine)
                                        <form action="{{ route('deleteReply',['post' => $post->id,'comment' => $reply->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Hapus</button>
                                        </form>
                                    @endif</li>
                                  @endforeach
                              </ul>
                               @endif
                            </td>
                            

                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            
            </div>
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>