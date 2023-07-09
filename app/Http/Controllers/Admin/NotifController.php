<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notif;
use App\Models\User;
use Illuminate\Http\Request;

class NotifController extends Controller
{
    public function index()
    {
        $notif = Notif::whereRelation('user', 'role', '!=', 'admin')->get();
        $data = User::select('id', 'name')->where('role', '!=', 'admin')->get();
        return view('admin.notification.index', compact('data', 'notif'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_to_notif.*' => 'required',
            'text' => 'required'
        ]);

        foreach ($request->user_to_notif as $item) {
            Notif::create([
                'user_id' => $item,
                'text' => $request->text
            ]);
        }

        return redirect('/admin/notif');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
