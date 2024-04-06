<div>
<link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
<form class="oe-input-label" wire:submit="saveImportedExcel" enctype="multipart/form-data" style="padding-bottom: 80px">
@csrf
<input class="oe-input" wire:model="file" type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" >
@error('file')
<span class="text-danger-500">{{ $message }}</span>
@enderror
@if (session('error'))
<span>{{session('error')}}</span>
@endif
<input class="buttonAdd" type="submit" value="Upload" name="btn_submit" style="margin-left: 480px ; margin-top: 10px">
</form>
</div>
