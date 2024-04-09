<div>
    @livewireStyles
    <div class="search-container" style="position:relative;margin-left:990px;margin-top:-50px;">
        <input wire:model.live="search" style="padding-left: 10px;" type="text" class="search" name="search_tag" placeholder="Search Tag">
        <button type="button" class="search-button" name="btn_search_tag">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div><br>
    <table style="margin-top:-10px" border="1">
    <tr>
        <th>#</th>
        <th>Tag</th>
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
