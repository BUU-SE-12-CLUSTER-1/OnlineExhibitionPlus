<?php

namespace App\Imports;

use App\Models\UserModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Validators\Failure;
use Throwable;
use Illuminate\Support\Facades\File;

class UsersImport implements ToModel,
    WithHeadingRow,
    SkipsOnError,
    WithValidation,
    SkipsOnFailure
{
    use Importable, SkipsErrors, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   $path = public_path('/assets/img/users/img_user_icon.png');
        $image = File::get($path);
        $img_base64 = base64_encode($image);
        return new UserModel([
            'user_student_id' => $row['studentid'],
            'user_fname' => $row['firstname'],
            'user_lname' => $row['lastname'],
            'user_email' => $row['email'],
            'user_profile_image' => $img_base64,
            'user_role_id' => 2,
            'user_major_id' => $row['majorid'],
        ]);

    }
    public function onError(Throwable $e){}
    public function rules(): array{
        return [
            '*.0' =>['user_student_id','unique:oe_users,user_student_id'],
            '*.3' =>['user_email','unique:oe_users,user_email']
        ];
    }
    public function onFailure(Failure ...$failure){
    }
}
