<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahalla;

class SearchController extends Controller
{

    public function  SearchUsers(Request $request){
        $search = $request->get('search');
        $users = User::where('name', 'like', '%'.$search.'%')->paginate(10);
        return view('admin.users.index', [
            'users' => $users
        ]);

    }

    public function  SearchMahallas(Request $request){
        $search = $request->get('search');
        $mahallas = Mahalla::where('name', 'like', '%'.$search.'%')->paginate(10);
        return view('admin.mahallas.index', [
            'mahallas' => $mahallas
        ]);

    }



}
