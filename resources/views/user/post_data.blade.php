@foreach($data as $post)
    <div class="col-lg-4">
        <div class="properties properties2 mb-30">
            <div class="properties__card">
                <div class="properties__caption">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->content}}</p>
                    <a href="{{URL::to('/posts/'.$post->post_id)}}" class="border-btn border-btn2">Read more</a>
                </div>
            </div>
        </div>
    </div>
@endforeach

{!! $data->links() !!}
