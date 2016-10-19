<?php
namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Location;
use Illuminate\Support\Facades\View;
class LocationController extends Controller
{



    public function edit_social()
    {

        $locations = Location::find(5);

        return View::make('layout/admin_settings')
                       ->with('locations',$locations);

    }


    public function update_social(Request $request)
    {



        $location = Location::findOrFail(5);
        $location->update($request->all());

        return redirect('news');

    }




}