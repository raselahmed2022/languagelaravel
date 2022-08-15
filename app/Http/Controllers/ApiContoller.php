<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Name;
use App\Models\Reading;
use App\Models\Speaking;
use App\Models\Writing;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiContoller extends Controller
{
   
  

    
    public function getWriting(){

        $data = Writing::select('level','ge_title','ge_description')->get();

        return new JsonResponse($data);

    }

    public function getSpeaking(Request $request){

        $data = DB::table('speaking')
            ->selectRaw('level,ge_title,en_description,ge_description')
            ->where('level', $request->level)
            ->get();

        return new JsonResponse($data);

    }

    public function getReading(){

        $data = Reading::select('level','ge_title','ge_description')->get();

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
