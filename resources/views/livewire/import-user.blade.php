<div>
<form wire:submit="saveImportedExcel" enctype="multipart/form-data">
@csrf
<input wire:model="file" type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
<input type="submit" value="Upload" name="btn_submit">
@if(isset($errors) && $errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{$error}}
    @endforeach
</div>
@endif

</form>

</div>
