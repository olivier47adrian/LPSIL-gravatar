<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Avatar;
use App\Http\Requests;

class ApiController extends Controller
{
    /**
     * Return the man of the API.
     *
     * @return Response
     */
    public function man()
    {
        header('Access-Control-Allow-Origin: *');
        $tabSize = array("100px","200px","300px");
        $tabFileSupport = array("png","jpg","gif");
        $data = array( 'version' => 'GravatarAPi 1.0', 'sizeAvailable' => $tabSize, 'defaultSize' => "100px", 'fileSupport' =>  $tabFileSupport );
        return Response::json(array(
            'error' => false,
            'message' => $data,
            200
        ));


    }

    /**
     * Return the avatar of the user.
     *
     * @return Response
     */
    public function getAvatar($email)
    {
        header('Access-Control-Allow-Origin: *');
        $data = array();
        $tabRow = Avatar::where('email', '=', $email)->get();
        if($tabRow->isEmpty()){
            array_push($data, "not found");
            $error = true;
            $code = 404;
        }
        else {
            foreach ($tabRow as $row) {
                array_push($data, $row->srcImage);
            }
            $error = false;
            $code = 200;
        }
        return Response::json(array(
            'error' => $error,
            'message' => $data,
            $code
        ));
    }


}
