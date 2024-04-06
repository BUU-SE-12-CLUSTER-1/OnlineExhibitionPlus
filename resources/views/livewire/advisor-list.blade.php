<div>
@livewireStyles
    <div class="search-container" style="position:fixed;right:313px;margin-top:-65px;">
        <input wire:model.live="search" style="padding-left: 10px;" type="text" class="search" name="search_user" placeholder="Search User">
        <button type="button" class="search-button" name="btn_search_user">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
    <div class="table-div">
<table border="0">
<tr>
        <th>
        id
    </th>
        <th>
         Title
    </th>
    <th>
    FisrtName
</th>
    <th>
    LastName
</th>
    <th>
   Action
</th>

</tr>
<?php $advisor_id = null?>
@foreach ($oe_advisors as $advisor)
    <tr>
        <td>
            <label> {{$advisor['advisor_id']}} </label>
        </td>
        <td>
            <label> {{$advisor['advisor_title']}} </label>
        </td>
        <td>
            <label>{{$advisor['advisor_fname']}}</label>
        </td>
        <td>
            <label>{{$advisor['advisor_lname']}}</label>
        </td>
        <?php $advisor_id = $advisor['advisor_id']?>
        <td>
            <livewire:advisor-action :advisor="$advisor" :key="$advisor->id"></livewire:user-action>
            
        </td>
    </tr>
@endforeach
</table>
</div>
<span>
    {{$oe_advisors->appends(request()->input())->links()}}
</span>
</div>

