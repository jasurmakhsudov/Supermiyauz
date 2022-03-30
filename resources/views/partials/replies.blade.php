@foreach($comments as $comment)
<div class="display-comment">
    <?php $i=rand();?>
    <h5 style="color:@if($comment->user->isAdmin()) #d9534f; @endif">{{ $comment->user->name }} @if($comment->user->isAdmin()) - Administrator @endif</h5>
    <div >
        <div class="panel-info">
          <div class="panel-heading">
            <h4 class="panel-title" style="overflow:hidden">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}"> <span style="word-break: break-word;">{{ $comment->comment }}</span></a>
                @if(Auth::user()->isAdmin())
                <span style="float: right;margin-left: 5px;"> 
                  <form action="{{route('admin.comment.delete',['id'=>$comment->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');" type="submit">Delete</button>
                  </form>
                </span>
                @endif
                <small style="float: right">{{$comment->created_at}}</small>
            </h4>
          </div>
          <div id="collapse{{$i}}" class="px-2 py-2 t-2 collapse">
            <form method="post" action="{{ route('comment.reply') }}">
                @csrf
                <div class="form-group">
                    <textarea type="text" name="comment" rows="2" class="form-control"></textarea>   
                    <input type="hidden" name="video_id" value="{{ $video_id }}" />
                    <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                    <div class="form-group pt-2">
                    <input type="submit" class="btn btn-success btn-lg py-2" value="Reply" />
                    </div>
                </div>
            </form>
        </div>
      </div> 
    </div>

    @include('partials.replies', ['comments' => $comment->replies])
</div>
@endforeach 