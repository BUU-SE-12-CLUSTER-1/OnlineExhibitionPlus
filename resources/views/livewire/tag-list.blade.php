<div>
    @livewireStyles
    <table border="1">
    <tr>
        <th>ID</th>
        <th>Tag Name</th>
        <th>Action</th>
    </tr>
        @foreach ($oe_tags as $tag)
    <tr>
        <td>{{$tag['tag_id']}}</td>
        <td>{{$tag['tag_name']}}</td>
        <td>

            <livewire:tag-action :tag="$tag" :key="$tag->id"></livewire:tag-action>

        </td>
    </tr>
        @endforeach
    </table>
<span>
    {{$oe_tags->appends(request()->input())->links()}}
</span>
@livewireScripts
</div>
