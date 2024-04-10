
<div>
    @livewireStyles
    <div class="search-container" style="position:relative;margin-left:1210px;margin-top:-50px;">
        <input wire:model.live="search" style="padding-left: 10px;" type="text" class="search" name="search_company" placeholder="Search Company">
        <button type="button" class="search-button" name="btn_search_company" style="margin-left: 20px">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div></br>
    <table style="margin-top:-10px" border:"1">
        <tr>
            <th>
                #
            </th>
            <th>
                Company
            </th>
            <th>
                Action
            </th>
        </tr>
        @foreach ($oe_companies as $company)
            <tr>
                <td>
                    <label> {{ $company['company_id'] }} </label>
                </td>
                <td>
                    <label> {{ $company['company_name'] }} </label>
                </td>
                <td>
                    <livewire:company-action :company="$company" :key="$company->id"></livewire:company-action>
                </td>
            </tr>
        @endforeach
    </table>
    <span>
        {{ $oe_companies->appends(request()->input())->links() }}
    </span>
    <style>
        .w-5 {
            display: none;
        }
    </style>
    @livewireScripts
</div>
