<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notif;
use Illuminate\Http\Request;

class NotifController extends Controller
{
    public function index()
    {
        $notif = Notif::whereRelation('user', 'role', '!=', 'admin')->get();
        return view('admin.notification.index', compact('notif'));
    }

    public function destroy(string $id)
    {
        $data = Notif::find($id);
        $data->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
