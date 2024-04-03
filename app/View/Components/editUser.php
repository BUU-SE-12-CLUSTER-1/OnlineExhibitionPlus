<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\UserModel;
use App\Models\MajorModel;
use App\Models\RoleModel;

class editUser extends Component
{
    /**
     * Create a new component instance.
     */
    public $user_id;
    public function __construct($user_id)
    {
        //
        $user_data = UserModel::find($user_id);
        $major_data = MajorModel::all();
        $role_data = RoleModel::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.edit-user');
    }
}
