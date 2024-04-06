<div>
@livewireStyles
    <div class="search-container" style="position:relative; margin-left:1400px; ">
        <input wire:model.live="search" style="padding-left: 10px;   outline:none;" type="text"  name="search_advisor" placeholder="Search advisor">
        <button type="button" class="search-button" name="btn_search_advisor">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>

        <button style="position:relative; margin-left:70px; " type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'add-advisor'})" >Add Advisor</button>


    </div>

<div class="table-div">
    <table style="margin-top:-50px;" border="0" >
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
            <livewire:advisor-action :advisor="$advisor" :key="$advisor->id"></livewire:advisor-action>

        </td>
    </tr>
@endforeach
    </table>
</div>
<span>
    {{$oe_advisors->appends(request()->input())->links()}}
</span>
</div>

