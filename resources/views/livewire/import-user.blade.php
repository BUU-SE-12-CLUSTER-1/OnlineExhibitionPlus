<div>
<link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
<form class="oe-input-label" wire:submit="saveImportedExcel" enctype="multipart/form-data">
@csrf
<input class="oe-input" wire:model="file" type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
@error('file')
<span class="text-danger-500">{{ $message }}</span>
@enderror
<input class="buttonAdd" type="submit" value="Upload" name="btn_submit">
</form>
</div>
