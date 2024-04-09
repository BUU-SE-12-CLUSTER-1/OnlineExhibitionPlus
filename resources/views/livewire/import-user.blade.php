<div style="height: 170px;">
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    <a class="excelbtn" href="assets/document/template-add.xlsx"download> dowload example file</a>


    <form class="oe-input-label" wire:submit="saveImportedExcel" enctype="multipart/form-data" style="padding-bottom: 80px  " >
    @csrf
    <br>

    <input class="oe-choose-file" wire:model="file" type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" >

    @error('file')
    <span class="oe-file-error " style="white-space:nowrap;" >{{ $message }}</span>
    @enderror

    <input class="buttonAdd" type="submit" value="Upload" name="btn_submit" style="position:fixed; bottom: 20px; right: 30px;  ">

    @if (session('error'))
    <span>{{session('error')}}</span>
    @endif
    
    </form>




    </div>
