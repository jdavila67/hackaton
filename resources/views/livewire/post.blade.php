<div class="ten wide column">
    <div class="ui feed">
         @foreach($posts as $post)
        <div class="event">
            <div class="label">
                <img src="https://via.placeholder.com/140x140">
            </div>
            <div class="content">
                <div class="summary">
                    <a >{{$post->organizations->name}}</a> a publicado en su pagina
                    <div class="date">
                      hace  {{$post->days}} días.
                    </div>
                </div>
                <div class="extra text">
                    {{$post->description}}
                </div>
                <div class="meta a-w-100">
                    <a class="like"onclick="hide('{{$post->id}}')">
                        <i class="comment outline icon"></i> {{count($post->comments)}} Comentarios
                    </a>

                    <div class="ui comments" id="{{$post->id}}" style="display: none;">

                        <h3 class="ui dividing header">Comments</h3>
                        @foreach($post->comments as $comment)
                        <div   class="comment" >
                            <a class="avatar">
                                <img src="https://via.placeholder.com/140x140">
                            </a>
                            <div class="content">
                                <div class="metadata">
                                    <span class="date">el {{$comment->created_at}}</span>
                                </div>
                                <div class="text">
                                    {{$comment->comment}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <form class="ui reply form">
                            <div class="field">
                                <textarea></textarea>
                            </div>
                            <div class="ui blue labeled submit icon button">
                                <i class="icon edit"></i> Add Reply
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@section('scripts')
    <script>
        function hide(id) {
            var x = document.getElementById(id);
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
@endsection
