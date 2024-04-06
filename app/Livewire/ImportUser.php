<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MajorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Models\RoleModel;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;

class ImportUser extends Component
{
    use WithFileUploads;
    public $file;

    public function saveImportedExcel(){
        $this->validate([
            'file' =>'required'

         ]);
         try{
        if($this->file){
        $this->file->store('Import','public');
        $import = new UsersImport;
        $import->import($this->file);
        $this->reset(['file']);
        request()->session()->flash('success','User Added Successfully');
        $this->dispatch('close-modal');
        }
        }catch(\Exception $e){
            request()->session()->flash('error','Invalid File. Please use our file template instead.');

    }
    }
    public function render()
    {
        return view('livewire.import-user');
    }
}
