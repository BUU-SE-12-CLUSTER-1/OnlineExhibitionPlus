<div>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/project_userpf2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
            <table>
                <tr>
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

                    <tr style="background-color: white">
                        <td style="background-color: white">
                            <livewire:project-manage-box :project="$project" :key="$project['proj_id']" />
                        </td>
                        <?php
                            $td_count = 1;
                        ?>

                @endif
            @endforeach


            </table>


<span>
    {{$oe_projects->appends(request()->input())->links()}}
</span>

@livewireScripts
<script></script>
</div>

