<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

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
        /*  $recipes = new Recipes();

          $recipes->title = $request->title;
          $recipes->description = $request->description;
          $recipes->note = $request->note;
          $recipes->save();*/

            return view('addAvatar');

    }

    /**
     * list of avatars.
     *
     * @param  Request  $request
     * @return Response
     */
    public function listAvatars(Request $request)
    {
        if(isset($request->request->email)){
            $avatar = new Avatar();

            $avatar->title = $request->title;
            $avatar->description = $request->description;
            $avatar->note = $request->note;
            $avatar->save();
        }

        $user_id = Auth::id();
        $tabRow = Avatar::where('user_id', '=', $user_id)->get();

        return view('listAvatars', ['tabRow' => $tabRow]);
    }


}
