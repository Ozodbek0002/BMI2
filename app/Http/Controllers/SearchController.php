<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Environment, Indicators, Informations, SocialStatus, User, Mahalla, Employment};

class SearchController extends Controller
{

    public function SearchUsers(Request $request)
    {
        $search = $request->get('search');
        $mahallas = Mahalla::all()->except(1);
        $users = User::where('name', 'like', '%' . $search . '%')->paginate(10);

        return view('admin.users.index', [
            'users' => $users,
            'mahallas' => $mahallas
        ]);

    }

    public function SearchMahallas(Request $request)
    {
        $search = $request->get('search');
        $mahallas = Mahalla::where('name', 'like', '%' . $search . '%')->paginate(10);
        return view('admin.mahallas.index', [
            'mahallas' => $mahallas
        ]);

    }


    public function SearchInformation(Request $request)
    {
        if (auth()->user()->id == 1) {
            $search = $request->get('search');
            $informations = Informations::where('full_name', 'like', '%' . $search . '%')->paginate(10);
            $mahallas = Mahalla::all()->except(1);
        } else {
            $search = $request->get('search');
            $informations = Informations::where('full_name', 'like', '%' . $search . '%')->where('mahalla_id', auth()->user()->mahalla_id)->paginate(10);
            $mahallas = Mahalla::where('id', auth()->user()->mahalla_id)->get();
        }

        return view('admin.informations.index', [
            'informations' => $informations,
            'mahallas' => $mahallas
        ]);

    }


    public function SearchEmployments(Request $request)
    {
        if (auth()->user()->id == 1) {
            $search = $request->get('search');
            $employments = Employment::where('name', 'like', '%' . $search . '%')->paginate(10);
            $mahallas = Mahalla::all()->except(1);
        } else {
            $search = $request->get('search');
            $employments = Employment::where('name', 'like', '%' . $search . '%')->where('mahalla_id', auth()->user()->mahalla_id)->paginate(10);
            $mahallas = Mahalla::where('id', auth()->user()->mahalla_id)->get();

        }

        return view('admin.employments.index', [
            'employments' => $employments,
            'mahallas' => $mahallas
        ]);

    }


    public function SearchStatuses(Request $request)
    {
        if (auth()->user()->id == 1) {
            $search = $request->get('search');
            $statuses = SocialStatus::where('name', 'like', '%' . $search . '%')->paginate(10);
            $mahallas = Mahalla::all()->except(1);
        } else {
            $search = $request->get('search');
            $statuses = SocialStatus::where('name', 'like', '%' . $search . '%')->where('mahalla_id', auth()->user()->mahalla_id)->paginate(10);
            $mahallas = Mahalla::where('id', auth()->user()->mahalla_id)->get();
        }

        return view('admin.statuses.index', [
            'statuses' => $statuses,
            'mahallas' => $mahallas
        ]);

    }


    public function SearchIndicators(Request $request)
    {
        if (auth()->user()->id == 1) {
            $search = $request->get('search');
            $indicators = Indicators::where('title', 'like', '%' . $search . '%')->paginate(10);
            $mahallas = Mahalla::all()->except(1);
        } else {
            $search = $request->get('search');
            $indicators = Indicators::where('title', 'like', '%' . $search . '%')->where('mahalla_id', auth()->user()->mahalla_id)->paginate(10);
            $mahallas = Mahalla::where('id', auth()->user()->mahalla_id)->get();
        }

        return view('admin.indicators.index', [
            'indicators' => $indicators,
            'mahallas' => $mahallas
        ]);

    }


    public function SearchEnvironments(Request $request)
    {
        if (auth()->user()->id == 1) {
            $search = $request->get('search');
            $environments = Environment::where('name', 'like', '%' . $search . '%')->paginate(10);
            $mahallas = Mahalla::all()->except(1);
        } else {
            $search = $request->get('search');
            $environments = Environment::where('name', 'like', '%' . $search . '%')->where('mahalla_id', auth()->user()->mahalla_id)->paginate(10);
            $mahallas = Mahalla::where('id', auth()->user()->mahalla_id)->get();
        }

        return view('admin.environments.index', [
            'environments' => $environments,
            'mahallas' => $mahallas
        ]);

    }


}
