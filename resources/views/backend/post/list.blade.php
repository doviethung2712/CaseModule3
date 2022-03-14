<div class="container">
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Title</th>
                <th>content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $key => $post)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
