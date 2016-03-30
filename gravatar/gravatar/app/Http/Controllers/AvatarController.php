<?php

    namespace App\Http\Controllers;

    use App\Avatar;
    use App\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Input;

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
         * @param  Request $request
         * @return Response
         */
        public function add(Request $request)
        {
            return view('addAvatar');
        }

        /**
         * list of avatars.
         *
         * @param  Request $request
         * @return Response
         */
        public function listAvatars(Request $request)
        {
            $user_id = Auth::id();
            if (isset($request->email)) {
                $srcImage = 'uploads/' . $request->email . "." . Input::file('image')->guessClientExtension();
                Input::file('image')->move('uploads/', $srcImage);
                $avatar = new Avatar();
                $avatar->email = $request->email;
                $avatar->srcImage = $srcImage;
                $avatar->user_id = $user_id;
                $avatar->save();
            }

            $tabRow = Avatar::where('user_id', '=', $user_id)->get();

            return view('listAvatars', ['tabRow' => $tabRow]);
        }

        /**
         * Remove of avatar.
         *
         * @return Response
         */
        public function removeAvatar($id)
        {
            $user_id = Auth::id();
            $avatar = Avatar::find($id);

            unlink(public_path() . '/' . $avatar->srcImage);
            $avatar->delete();

            return redirect('listAvatars');
        }


    }
