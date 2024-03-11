<H1> Import Excel</H1>
<form action="{{url('/import-excel')}}" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
<input type="submit" value="Upload" name="btn_submit">
@if(isset($errors) && $errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{$error}}
    @endforeach
</div>
@endif

</form>
