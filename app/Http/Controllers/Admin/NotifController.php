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
        $notif = Notif::all();
        // dd($notif->user);
        $data = User::select('id', 'name')->get();
        return view('admin.notification.index', compact('data', 'notif'));
    }

    public function store(Request $request)
    {
        foreach($request->user_to_notif as $item) {
            Notif::create([
                'user_to_notify' => $item,
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
