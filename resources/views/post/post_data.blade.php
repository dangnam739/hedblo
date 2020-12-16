<div class="row justify-content-center">
    @foreach($data as $post)
        <div class="col-lg-4">
            <div class="properties properties2 mb-30">
                <div class="properties__card">
                    <div class="properties__img overlay1">
                        @if($post->post_url == null)
                            <img src="{{asset('/storage/post_url/pj3.1.png')}}" alt="" style="height: 200px;">
                        @else
                            <img src="{{asset('/storage/post_url/'.$post->post_url)}}" alt=""  style="height: 200px;">
                        @endif

                    </div>
                    <div class="properties__caption">
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->description}}</p>
                        <a href="{{URL::to('/posts/'.$post->post_id)}}" class="border-btn border-btn2">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

{!! $data->links() !!}
