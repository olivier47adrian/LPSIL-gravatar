<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AvatarController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "mon controleur est en marche";
    }

    /**
     * add an avatar.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add(Request $request)
    {
            $recipes = new Recipes();

            $recipes->title = $request->title;
            $recipes->description = $request->description;
            $recipes->note = $request->note;
            $recipes->save();

            $tabRow = Recipes::all();


            return view('reponse', ['tabRow' => $tabRow]);

    }


}
