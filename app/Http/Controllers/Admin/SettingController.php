<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $user_list = User::select('id', 'name', 'username', 'password_text', 'role')->where('role', '!=', 'admin')->get();
        return view('admin.setting.index', [
            'userList' => $user_list
        ]);
    }

    public function destroy(string $id)
    {
        $data = User::find($id);
        $data->delete();
        return response()->json(['message' => 'success']);
    }
}
