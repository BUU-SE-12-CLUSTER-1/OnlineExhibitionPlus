const selectBox = document.querySelector('.select-company-box');
    const selectOption = document.querySelector('.select-company-option');
    const companyContent = document.querySelector('.company-content');
    const companyOptions = document.querySelector('.company-options');
    const optionSearch = document.querySelector('#optionSearch');
    const soValue = document.querySelector('#soValue');
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
        var filter, li, i, textValue;
        filter = optionSearch.value.toUpperCase();
        li = companyOptions.getElementByTagName('li');
        for(i = 0 ; i < li.length; i++){
            liCount = li[i];
            textValue = liCount.textContent || liCount.innerText;
            if(textValue.toUpperCase.indexOf(filter) > -1){
                li[i].style.display = '';
            }else{
                li[i].style.display = 'none';
            }
        }
    });
