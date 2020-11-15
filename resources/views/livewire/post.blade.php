<div class="ten wide column">
    <div class="ui feed">
         @foreach($posts as $post)
        <div class="event">
            <div style="width: 50px;" class="label">
                <img src="https://via.placeholder.com/140x140">
            </div>
            <div class="content" style="margin-top: -25px">
                <div class="summary">
                    <a href="{{route('home.organization.profile', ['id' => $post->organizations->id])}}">{{$post->organizations->name}}</a> a publicado en su pagina
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

                        <h3 class="ui dividing header"></h3>
                        @foreach($post->comments as $comment)
                        <div  class="comment" >
                            <a class="avatar">
                                {{--<img src="https://via.placeholder.com/140x140">--}}
                                <i class="fa-3x fas fa-user-circle"></i>
                            </a>
                            <div class="content" style="margin-top: -20px">
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
                                <i class="icon edit"></i> Publicar
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
