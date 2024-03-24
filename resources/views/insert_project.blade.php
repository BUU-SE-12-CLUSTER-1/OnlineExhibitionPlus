<link rel="stylesheet" href="{{asset('assets/css/company_selector.css')}}">
<h1>ADD Project</h1>
<form action={{url('/insert-project')}} method="POST">
@csrf
    <table >
        <tr>
            <td>
                <label for="proj_name">ชื่อโปรเจกต์ </label>
            </td>
            <td>
                <label for="proj_created_year">Year</label>
            </td>
            <td>
                <label for="proj_student_year">College Year</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="proj_name">
            </td>
            <td>
                <input name="proj_created_year" type="number" min="2010" max="2099" step="1" value="2024" id="year-picker">
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
                <label for="proj_company_id">Company</label>
                <div class="select-company-box" name="proj_company_id">
                    <div class="select-company-option">
                        <input type="text" placeholder="Please select company" id="companyValue" readonly name="">
                    </div>
                    <div class="company-content">
                        <div class="company-search">
                            <input type="text" id="companyOptionSearch" placeholder="Seach Company" name="">
                        </div>
                        <ul class="company-options">
                            @foreach($oe_companies as $company)
                            <li>{{$company['company_name']}}</li>
                            @endforeach
                            <a href="{{url('/insert-company')}}">add company</a>
                        </ul>
                    </div>
                </div>
            </td>
            <td>
                <label for="proj_company_id">Advisor</label>
                <div class="select-company-box" name="proj_company_id">
                    <div class="select-company-option">
                        <input type="text" placeholder="Please select company" id="companyValue" readonly name="">
                    </div>
                    <div class="company-content">
                        <div class="company-search">
                            <input type="text" id="companyOptionSearch" placeholder="Seach Company" name="">
                        </div>
                        <ul class="company-options">
                            @foreach($oe_advisors as $advisor)
                            <li>{{$advisor['advisor_title']}} {{$advisor['advisor_fname']}} {{$advisor['advisor_lname']}}</li>
                            @endforeach
                            <a href="{{url('/insert-advisor')}}">add advisor</a>
                        </ul>
                    </div>
                </div>
            </td>
            <td>
                <label for="projtag_tag_id">หมวดหมู่</label>
            </td>
        </tr>
        <tr>
            <td>

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
<script>
    const selectBox = document.querySelector('.select-company-box');
    const selectOption = document.querySelector('.select-company-option');
    const companyContent = document.querySelector('.company-content');
    const companyOptions = document.querySelector('.company-options');
    const optionSearch = document.getElementById('companyOptionSearch');
    const soValue = document.querySelector('#companyValue');
    const optionList = document.querySelectorAll('.company-options li');

    selectOption.addEventListener('click', function(){
        selectBox.classList.toggle('active');
    });
    optionList.forEach(function(optionListSingle){
        optionListSingle.addEventListener('click', function(){
            text = this.textContent;
            soValue.value = text;
            selectBox.classList.remove('active');
        })
    });

    optionSearch.addEventListener('keyup', function(){
        const filter = optionSearch.value.toUpperCase();
        optionList.forEach(option =>{
            const companyName = option.textContent.toUpperCase();
            if (companyName.includes(filter) || filter === ''){
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        });
    });

</script>
