<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Environment, Indicators, Informations, SocialStatus, User, Mahalla, Employment};

class SearchController extends Controller
{

    public function  SearchUsers(Request $request){
        $search = $request->get('search');
        $users = User::where('name', 'like', '%'.$search.'%')->paginate(10);
        return view('admin.users.index', [
            'users' => $users,
        ]);

    }

    public function  SearchMahallas(Request $request){
        $search = $request->get('search');
        $mahallas = Mahalla::where('name', 'like', '%'.$search.'%')->paginate(10);
        return view('admin.mahallas.index', [
            'mahallas' => $mahallas
        ]);

    }


    public function  SearchInformation(Request $request){
        $search = $request->get('search');
        $informations = Informations::where('full_name', 'like', '%'.$search.'%')->paginate(10);
        $mahallas = Mahalla::all();

        return view('admin.informations.index', [
            'informations' => $informations,
            'mahallas' => $mahallas
        ]);

    }


    public function  SearchEmployments(Request $request){
        $search = $request->get('search');
        $employments = Employment::where('name', 'like', '%'.$search.'%')->paginate(10);
        $mahallas = Mahalla::all();

        return view('admin.employments.index', [
            'employments' => $employments,
            'mahallas' => $mahallas
        ]);

    }


    public function SearchStatuses(Request $request){
        $search = $request->get('search');
        $statuses = SocialStatus::where('name', 'like', '%'.$search.'%')->paginate(10);
        $mahallas = Mahalla::all();

        return view('admin.statuses.index', [
            'statuses' => $statuses,
            'mahallas' => $mahallas
        ]);

    }


    public function SearchIndicators(Request $request){
        $search = $request->get('search');
        $indicators = Indicators::where('title', 'like', '%'.$search.'%')->paginate(10);
        $mahallas = Mahalla::all();

        return view('admin.indicators.index', [
            'indicators' => $indicators,
            'mahallas' => $mahallas
        ]);

    }


    public function SearchEnvironments(Request $request){
        $search = $request->get('search');
        $environments = Environment::where('name', 'like', '%'.$search.'%')->paginate(10);
        $mahallas = Mahalla::all();

        return view('admin.environments.index', [
            'environments' => $environments,
            'mahallas' => $mahallas
        ]);

    }




}
