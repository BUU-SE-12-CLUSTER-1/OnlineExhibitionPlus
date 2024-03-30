<link rel="stylesheet" href="{{asset('assets/css/insert_project_page_style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/company_selector.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/advisor_selector.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/tag_selector.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/upload_box.css')}}">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
<h1>ADD Project</h1>
<form action={{url('/insert-project')}} method="POST" onkeydown="if(event.keyCode === 13) {
    return false;
}" enctype="multipart/form-data">
@csrf
    <table border="0">
        <tr>
            <td colspan="2">
                <label for="proj_name">ชื่อโปรเจกต์ </label>
            </td>
            <td>
                <label for="proj_created_year">Year</label>
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="text" name="proj_name" >
            </td>
            <td>
                <input name="proj_created_year" type="number" min="2010" max="2099" step="1" value="2024" id="year-picker">
            </td>
        </tr>
        <tr>
            <td>
                <label for="proj_company_id">Company</label>

            </td>
            <td>
                <label for="proj_advisor_id">Advisor</label>

            </td>
            <td>
                <label for="proj_student_year">College Year</label>
            </td>
        </tr>
        <tr>
            <td>
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
                <div class="select-advisor-box" name="proj_advisor_id">
                    <div class="select-advisor-option">
                        <input type="text" placeholder="Please select advisor" id="advisorValue" readonly name="">
                    </div>
                    <div class="advisor-content">
                        <div class="advisor-search">
                            <input type="text" id="advisorOptionSearch" placeholder="Seach Advisor" name="">
                        </div>
                        <ul class="advisor-options">
                            @foreach($oe_advisors as $advisor)
                            <li>{{$advisor['advisor_title']}} {{$advisor['advisor_fname']}} {{$advisor['advisor_lname']}}</li>
                            @endforeach
                            <a href="{{url('/insert-advisor')}}">add advisor</a>
                        </ul>
                    </div>
                </div>
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
                <label for="tag_id">Tag</label>
            </td>
        </tr>
        <tr>
            <td>
                <div class="select-tag-box" name="proj_tag_id">
                    <div class="select-tag-option">
                        <div class="tag-search">
                            <ul>
                                <input type="text" id="tagOptionSearch" placeholder="Add a tag.." name="">
                            </ul>
                            <small style="color: #888"> Add up to 2 tags for your project</small>
                        </div>
                    </div>
                    <div class="tag-content">

                        <ul class="tag-options">
                            @foreach($oe_tags as $tag)
                            <li>{{$tag['tag_name']}}</li>
                            @endforeach
                            <a href="{{url('/insert-tag')}}">add new tag</a>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <label for="proj_main_image">Picture</label>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="drop-area">
                <label for="input-user-image">
                    <input type="file" name="upload-image" accept="image/*" id="input-user-image" hidden>
                    <div id="img-view" style="width: 100%; height: 150px; border-radius: 25px; text-align: center; display: relative;border: 1px solid #000;">
                        <i class="fa-regular fa-images" style="margin-top:25px;font-size: 40px;line-height:60px;"></i><br>
                        <label style="line-height:20px;padding: 6px 4px 6px 4px;vertical-align: middle; font-size: 14px; border: 1px solid #000; border-radius: 12px; width:fit-content;">Upload from your device</label>
                    </div>
                </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <label for="member" >Member</label>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div style="overflow-y: scroll;width: 100%; height: 150px; border-radius: 25px; text-align: center; display: relative; border: 1px solid #000;">
                    <table border="1" style="height: 90%; margin:7px 11px; overflow-x: scroll; " >
                        <td style="height: 90%; width: 25%; border-radius:25px; margin:7px 12px;">
                            test
                        </td>
                        <td style="height: 90%; width: 25%; border-radius:25px; margin:7px 10px;">
                            test
                        </td>
                        <td style="height: 90%; width: 25%; border-radius:25px; margin:7px 10px;">
                            test
                        </td>
                        <td style="height: 90%; width: 25%; border-radius:25px; margin:7px 10px;">
                            test
                        </td>
                        <td style="height: 90%; width: 25%; border-radius:25px; margin:7px 10px;">
                            test
                        </td>
                    </table>
                </div>
            </td>
        </tr>

    </table>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    const selectCompanyBox = document.querySelector('.select-company-box');
    const selectCompanyOption = document.querySelector('.select-company-option');
    const companyContent = document.querySelector('.company-content');
    const companyOptions = document.querySelector('.company-options');
    const optionCompanySearch = document.getElementById('companyOptionSearch');
    const companyValue = document.querySelector('#companyValue');
    const optionCompanyList = document.querySelectorAll('.company-options li');

    selectCompanyOption.addEventListener('click', function(){
        selectCompanyBox.classList.toggle('active');
    });
    optionCompanyList.forEach(function(optionCompanyListSingle){
        optionCompanyListSingle.addEventListener('click', function(){
            text = this.textContent;
            companyValue.value = text;
            selectCompanyBox.classList.remove('active');
        })
    });

    optionCompanySearch.addEventListener('keyup', function(){
        const filter = optionCompanySearch.value.toUpperCase();
        optionCompanyList.forEach(option =>{
            const companyName = option.textContent.toUpperCase();
            if (companyName.includes(filter) || filter === ''){
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        });
    });

</script>
<script>
    const selectAdvisorBox = document.querySelector('.select-advisor-box');
    const selectAdvisorOption = document.querySelector('.select-advisor-option');
    const advisorContent = document.querySelector('.advisor-content');
    const advisorOptions = document.querySelector('.advisor-options');
    const optionAdvisorSearch = document.getElementById('advisorOptionSearch');
    const advisorValue = document.querySelector('#advisorValue');
    const optionAdvisorList = document.querySelectorAll('.advisor-options li');

    selectAdvisorOption.addEventListener('click', function(){
        selectAdvisorBox.classList.toggle('active');
    });
    optionAdvisorList.forEach(function(optionAdvisorListSingle){
        optionAdvisorListSingle.addEventListener('click', function(){
            text = this.textContent;
            advisorValue.value = text;
            selectAdvisorBox.classList.remove('active');
        })
    });

    optionAdvisorSearch.addEventListener('keyup', function(){
        const filter = optionAdvisorSearch.value.toUpperCase();
        optionAdvisorList.forEach(option =>{
            const advisorName = option.textContent.toUpperCase();
            if (advisorName.includes(filter) || filter === ''){
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        });
    });

</script>
<script>
    const tagInput = document.querySelector('#tagInput');
    //const tagForm = document.querySelector('#tag');
    const tagOutput = document.querySelector('.tags');
    const max = document.querySelector('.max');
    function outputTag(){
        const tag = `<span class="tags">
                        <b>${tagFormat}<b>
                        <span class="material-icons-outlined remove-btn">
                        close
                        </span>
                    </span>`
                    tagOutput.innerHTML += tag;
                    tagInput.value = "";
    }


</script>
<script>
    const selectTagBox = document.querySelector('.select-tag-box');
    const selectTagOption = document.querySelector('.select-tag-option');
    const tagContent = document.querySelector('.tag-content');
    const tagOptions = document.querySelector('.tag-options');
    const optionTagSearch = document.getElementById('tagOptionSearch');
    const tagValue = document.querySelector('#tagValue');
    const optionTagList = document.querySelectorAll('.tag-options li');
    const ulTag = document.querySelector('.tag-search ul');
    const tagSearch = document.querySelector('.tag-search input');

    tagSearch.addEventListener('click', function(){
        selectTagBox.classList.toggle('active');
    });
    tagSearch.addEventListener('keyup', function(){
        selectTagBox.classList.add('active');
    });
    tagSearch.addEventListener('keydown', deleteTagByKeyPress);
    function deleteTagByKeyPress(e){
        if(tagSearch.value === "" && e.key === 'Backspace' || e.key === 'Delete' ){
            const ulTagList = document.querySelectorAll('.tag-search ul li');
            lastTag = "";
            ulTagList.forEach(tag=>{
                const ulTagName = tag.textContent;
                lastTag = tag;
            });
            if(lastTag != ""){
                lastTag.remove();
            }
            remainTag = 2 - ulTagList.length+1;
            if(remainTag >=2){
                optionTagSearch.placeholder = "Add a tag..";
            }else{
            optionTagSearch.placeholder = `${remainTag} tags are remaining`;
            }
        }else if(e.key === 'Enter'){
            optionTagList.forEach(function(optionTagListSingle){
        optionTagListSingle.addEventListener('click', function(){
            text = this.textContent;
            isDuplicate = false;
            const ulTagList = document.querySelectorAll('.tag-search ul li');
            ulTagList.forEach(tag=>{
                const ulTagName = tag.textContent;
                if(ulTagName == text){
                    isDuplicate = true;
                }
            });
            if(isDuplicate == false && ulTagList.length<2){
                let newTag = `<li>${text}<i class="uit uit-multiply" onclick="removeTag(this, '${text}')"></i></li>`;
                tagSearch.insertAdjacentHTML("beforebegin", newTag);
            selectTagBox.classList.remove('active');
            optionTagSearch.value = "";
            remainTag = 2 - ulTagList.length-1;
            if(remainTag >= 2){
                optionTagSearch.placeholder = "Add a tag..";
            }else{
            optionTagSearch.placeholder = `${remainTag} tags are remaining`;
            }
        }

        })
    });
        }
    }
    optionTagList.forEach(function(optionTagListSingle){
        optionTagListSingle.addEventListener('click', function(){
            text = this.textContent;
            isDuplicate = false;
            const ulTagList = document.querySelectorAll('.tag-search ul li');
            ulTagList.forEach(tag=>{
                const ulTagName = tag.textContent;
                if(ulTagName == text){
                    isDuplicate = true;
                }
            });
            if(isDuplicate == false && ulTagList.length<2){
                let newTag = `<li>${text}<i class="uit uit-multiply" onclick="removeTag(this, '${text}')"></i></li>`;
                tagSearch.insertAdjacentHTML("beforebegin", newTag);
            selectTagBox.classList.remove('active');
            optionTagSearch.value = "";
            remainTag = 2 - ulTagList.length-1;
            if(remainTag >= 2){
                optionTagSearch.placeholder = "Add a tag..";
            }else{
            optionTagSearch.placeholder = `${remainTag} tags are remaining`;
            }
            }

        })
    });
    function removeTag(element, tagName){
        const ulTagList = document.querySelectorAll('.tag-search ul li');
            ulTagList.forEach(tag=>{
                const ulTagName = tag.textContent;
                if(ulTagName == tagName){
                    tag.remove();
                }
            });
            remainTag = 2 - ulTagList.length+1;
            if(remainTag >= 2){
                optionTagSearch.placeholder = "Add a tag..";
            }else{
            optionTagSearch.placeholder = `${remainTag} tags are remaining`;
            }
    }
    optionTagSearch.addEventListener('keyup', function(){
        const filter = optionTagSearch.value.toUpperCase();
        optionTagList.forEach(option =>{
            const tagName = option.textContent.toUpperCase();
            if (tagName.includes(filter) || filter === ''){
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        });
    });
    optionTagSearch.addEventListener('keyup', addTagByKeyPress);
    function addTagByKeyPress(e){
        if(e.key == 'Enter'){
            const filter = optionTagSearch.value.toUpperCase();
            optionTagList.forEach(option =>{
            const tagName = option.textContent.toUpperCase();
            if (tagName === filter){
                text = option.textContent;
            isDuplicate = false;
            const ulTagList = document.querySelectorAll('.tag-search ul li');
            ulTagList.forEach(tag=>{
                const ulTagName = tag.textContent;
                if(ulTagName == text){
                    isDuplicate = true;
                }
            });
            if(isDuplicate == false && ulTagList.length<2){
                let newTag = `<li>${text}<i class="uit uit-multiply" onclick="removeTag(this, '${text}')"></i></li>`;
                tagSearch.insertAdjacentHTML("beforebegin", newTag);
            selectTagBox.classList.remove('active');
            optionTagSearch.value = "";
            remainTag = 2 - ulTagList.length-1;
            if(remainTag >= 2){
                optionTagSearch.placeholder = "Add a tag..";
            }else{
            optionTagSearch.placeholder = `${remainTag} tags are remaining`;
            }
            }else{
                optionTagSearch.value = "";
            }

            } else{
            optionTagSearch.value = "";
        }
        });
        }
        else{
            const filter = optionTagSearch.value.toUpperCase();
        optionTagList.forEach(option =>{
            const tagName = option.textContent.toUpperCase();
            if (tagName.includes(filter) || filter === ''){
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        });
        }
    }

</script>
<script>
    const dropArea = document.getElementById("drop-area");
const inputFile = document.getElementById("input-user-image");
const imageView = document.getElementById("img-view");

inputFile.addEventListener("change", uploadImage);

function uploadImage(){
    let imgLink = URL.createObjectURL(inputFile.files[0]);
    imageView.style.backgroundImage = `url(${imgLink})`;
    imageView.textContent = "";
    imageView.style.border = 0;
}
dropArea.addEventListener("dragover", function(e){
    e.preventDefault();
});
dropArea.addEventListener("drop", function(e){
    e.preventDefault();
    inputFile.files = e.dataTransfer.files;
    uploadImage();
});
</script>
