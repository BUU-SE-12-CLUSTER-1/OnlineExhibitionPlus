<div>
<link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
<form class="oe-input-label" wire:submit="saveImportedExcel" enctype="multipart/form-data">
@csrf
<input class="oe-input" wire:model="file" type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
<input class="buttonAdd" type="submit" value="Upload" name="btn_submit">
@if(isset($errors) && $errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{$error}}
    @endforeach
</div>
@endif

</form>

</div>
