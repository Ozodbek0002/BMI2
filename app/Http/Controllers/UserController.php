<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahalla;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);
        $mahallas = Mahalla::all()->except(1);
        return view('admin.users.index', [
            'users' => $users,
            'mahallas' => $mahallas,
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = new User();

        $user = $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'mahalla_id' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'min:8',],
            'phone' => 'required|digits:9',
        ], [
            'name.required' => 'Iltimos hodim ism familiyasini yozing .',
            'role_id.required' => 'Iltimos hodim lavozimini tanlang.',
            'mahalla_id.required' => 'Iltimos hodim mahallasini tanlang.',
            'email.required' => 'Iltimos emailni toliq yozing.',
            'email.unique:users' => 'Bu email allaqachon ro`yhatdan o`tgan ',
            'password.required' => 'Iltimos parolni  yozing.',
            'phone.required' => 'Iltimos hodim telefon raqamini yozing.',
        ]);

        $data->name = $user['name'];
        $data->role_id = $user['role_id'];
        $data->mahalla_id = $user['mahalla_id'];
        $data->email = $user['email'];
        $data->password = Hash::make($user['password']);
        $data->phone = $user['phone'];


        $data->save();

        return redirect()->route('admin.users')->with('msg', 'Hodim muvaffaqiyatli qo`shildi.');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {
        $data = User::find($id);

        $data->name = $request['name'];
        $data->role_id = $request['role_id'];
        $data->mahalla_id = $request['mahalla_id'];
        $data->phone = $request['phone'];
        $data->email = $request['email'];

        if ($request->password != null) {
            $data->password = Hash::make($request->password);
        }

        $data->save();
        return redirect()->route('admin.users')->with('msg', 'Hodim muvaffaqiyatli tahrirlandi.');

    }


    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users')->with('msg', 'Hodim muvaffaqiyatli o`chirildi.');
    }
}
