<div>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}">
    <div class="search-container" style="position:relative;margin-left:990px;margin-top:-50px;">
        <input wire:model.live="search" style="outline:none; padding-left: 0px;" type="text" class="search" name="search_project" placeholder="Search Project">
        <button type="button" class="search-button" name="btn_search_project">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div><br>
            <table>
                <tr>
                <div class="titleBlue" style="width: 1450px"> <!--เรียกใช้คลาส titleBlue จากไฟล์ myfavoritepj.css และกำหนดสไตล์ความสูงให้เป็น 1450px -->
                    <div >
                        <h1 id="Manageproject">Manage Project</h1> <!-- สร้าง h1 เป็นหัวขข้อหน้าเว็บ -->
                    </div>
                </div>
            </tr>
                <?php
                $td_count = 1;
                    ?>
                @foreach ($oe_projects as $project)
                @if ($td_count < 4)
                    <td>
                        <livewire:project-manage-box :project="$project" :key="$project['proj_id']" />
                    </td>
                    <?php
                        $td_count++;
                    ?>
                @else
                    </tr>

                    <tr style="background-color: white"> <!--กำหนด tr ให้สีพื้นหลังเป็นสีขาว-->
                        <td style="background-color: white"> <!--กำหนด td ให้สีพื้นหลังเป็นสีขาว-->
                            <livewire:project-manage-box :project="$project" :key="$project['proj_id']" />
                        </td>
                        <?php
                            $td_count = 1;
                        ?>

                @endif
            @endforeach



        </td>
    </tr>
    </table>
<span>
    {{$oe_projects->appends(request()->input())->links()}}
</span>

@livewireScripts
<script></script>

@foreach ($oe_projects as $project)
    @if ($project != null)
<x-oe-alert name="delete-{{ $project->proj_id }}">
        <x-slot:body>
        @livewire('delete-alert', ['topic'=>'project', 'model' => $project])
        </x-slot>
        </x-oe-alert>
    @else


    @endif

@endforeach
</div>
