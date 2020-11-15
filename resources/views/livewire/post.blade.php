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
                <div class="meta">
                    <a class="like">
                        <i class="comment outline icon"></i> {{count($post->comments)}} Comentarios
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
