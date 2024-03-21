<h1>ADD Project</h1>
<form action={{url('/insert-project')}} method="POST">
@csrf
    <table >
        <tr>
            <td>
                <label for="proj_name">ชื่อโปรเจกต์ </label>
            </td>
            <td>
                <label for="proj_student_year">เลือกชั้นปี</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="proj_name">
            </td>
            <td>
                <select name="proj_student_year">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="proj_company_id">บริษัท/สำนักงาน</label>
            <?php?>
                    <input type="text" name="company_name">
                    <select name="proj_company_id">
                        <option value="#" selected="selected">-- Select company --</option>
                        @foreach($oe_companies as $company)
                        <option value={{$company['company_id']}}>{{$company['company_name']}}</option>
                        @endforeach
                        <option value="insert-company";">Add company</option>
                    </select>
            </td>
            <td>
                <label for="projtag_tag_id">หมวดหมู่</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="company_name">
                <?php
                    $oe_companies = Request::get(url('/company-dropdown-list'));
                    ?>
                <select name="proj_company_id" id="select-company">
                    <option value="#" selected="selected">-- Select company --</option>
                    @foreach($oe_companies as $company)
                    <option value={{$company['company_id']}}>{{$company['company_name']}}</option>
                    @endforeach
                    <option value="insert-company";">Add company</option>
                </select>
            </td>
            <td id="project-tag">
                <button type="button" onclick="insert_tag()">+</button>

            </td>
        </tr>

    </table>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var company_selector = document.getElementById('select-company');
    var tag_selector = document.getElementById('select-tag');

    company_selector.onchange = function(){
        var user_option = this.options[this.selectedIndex];
        if(user_option.value == 'insert-company'){
            window.open('{{url('/insert-company')}}', "company page");
        }
    }
    tag_selector.onchange = function(){
        var user_option = this.options[this.selectedIndex];
        if(user_option.value == 'insert-tag'){
            window.open('{{url('/insert-tag')}}', "tag page");
        }
    }
    $(document).ready(function(){
        $('#project-tag').after(`<select name="projtag_tag_id" id="select-tag">
                    <option value="#" selected="selected">-- Select tag --</option>
                    @foreach($oe_tags as $tag)
                    <option value={{$tag['tag_id']}}>{{$tag['tag_name']}}</option>
                    @endforeach
                    <option value="insert-tag";">Add tag</option>
                </select>`)
    });
    function insert_tag(){
        $('#project-tag').after(`<select name="projtag_tag_id" id="select-tag">
                    <option value="#" selected="selected">-- Select tag --</option>
                    @foreach($oe_tags as $tag)
                    <option value={{$tag['tag_id']}}>{{$tag['tag_name']}}</option>
                    @endforeach
                    <option value="insert-tag";">Add tag</option>
                </select>`)
    }
</script>
