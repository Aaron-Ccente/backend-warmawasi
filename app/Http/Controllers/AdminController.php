<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
class AdminController extends Controller
{
    public function createAdmin(AdminRequest $request){
        $admin = Admin::create($request->all());
    }
}
