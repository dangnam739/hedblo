<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        All Tags
        <div class="float-right"><a href="{{ URL::to('tags/new') }}"><button class="btn btn-outline-secondary btn-sm">Add new tag</button></a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tag name</th>
                        <th>Posts</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tag name</th>
                        <th>Posts</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td><a href="{{ URL::to('tags/' . $tag->tag_id) }}">{{ $tag->tag_title }}</a></td>
                            <td>{{ $tag->posts->count() }}</td>
                            <td><a href={{ URL::to('tags/' . $tag->tag_id) }}>Show all post<a></td>
                            <td><a href={{ URL::to('tags/' . $tag->tag_id) . '/edit' }}>Edit<a></td>
                            <td><a href={{ URL::to('tags/delete/' . $tag->tag_id) }}>Destroy<a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
