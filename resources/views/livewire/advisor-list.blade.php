<div>
@livewireStyles
<link rel="stylesheet" href="{{ asset('assets/css/button.css') }}">
<div class="search-container" style="position:relative;margin-left:1230px;margin-top:-50px;">
        <input wire:model.live="search" style="padding-left: 10px; outline:none;" type="text" class="search" name="search_company" placeholder="Search Advisor">
        <button type="button" class="search-button" name="btn_search_advisor">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>

<div class="table-div" >
    <table style="margin-top:-50px;" border="0" >
    <tr>
        <th>
        id
    </th>
        <th>
         Title
    </th>
    <th>
    First Name
    </th>
    <th>
    Last Name
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
            <livewire:advisor-action :advisor="$advisor" :key="$advisor->id"></livewire:advisor-action>

        </td>
    </tr>
@endforeach
    </table>
</div>
<span>
    {{$oe_advisors->appends(request()->input())->links()}}
</span>

@livewireScripts
</div>

