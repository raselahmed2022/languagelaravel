<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Name;
use App\Models\Reading;
use App\Models\Speaking;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiContoller extends Controller
{
    public function getMaterial(){

        $data = Reading::select('title','description')->get();

        return new JsonResponse($data);

    }
    public function getListening(){

        $data = Name::select('name','url')->get();

        return new JsonResponse($data);

    }

    public function getSpeaking(){

        $data = Speaking::select('en_title','ge_title','en_description')->get();

        return new JsonResponse($data);

    }
    public function getEmployee(){

        $data = Employee::select('name','address','phone')->get();

        return new JsonResponse($data);

    }

    // public function insertQuestion(Request $request)
    // {

    //     $title = $request->get('en_title');
    //     $title = $request->get('ge_title');
    //     $description = $request->get('en_description');
    //     $description = $request->get('ge_description');




    //     $my_ask = new Speaking();
    //     $my_ask->en_title = $title;
    //      $my_ask->ge_title = $title;
    //     $my_ask->en_description = $description;
    //     $my_ask->ge_description = $description;
    //     $my_ask->save();




    //     return new JsonResponse([
    //         'message' => 'Insert Successful',
    //         'status' => 200
    //     ]);





    // }


   



    

}
