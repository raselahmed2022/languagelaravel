<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\LoginData;
use App\Models\ModalVerbs;
use App\Models\Name;
use App\Models\PartsOfSpeech;
use App\Models\Reading;
use App\Models\Speaking;
use App\Models\Tense;
use App\Models\TenseLessons;
use App\Models\UsersRegister;
use App\Models\Vocabulary;
use App\Models\Writing;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiContoller extends Controller
{
   
  

    
    public function getWriting(Request $request){

        $data = DB::table('writing')
        ->selectRaw('level,ge_title,ge_description')
        ->where('level', $request->level)
        ->get();

    return new JsonResponse($data);

    }

    public function getSpeaking(Request $request){

        $data = DB::table('speaking')
            ->selectRaw('level,ge_title,en_description,ge_description')
            ->where('level', $request->level)
            ->get();

        return new JsonResponse($data);

    }

    public function getReading(Request $request){

        $data = DB::table('reading')
        ->selectRaw('level,ge_title,ge_description')
        ->where('level', $request->level)
        ->get();

    return new JsonResponse($data);

    }

   

    public function getEmployee(){

        $data = Employee::select('name','address','phone')->get();

        return new JsonResponse($data);

    }
    public function getModalVerb(){

        $data = ModalVerbs::select('title','url','description')->get();

        return new JsonResponse($data);

    }
    public function getTense(){

        $data = Tense::select('title','url',)->get();

        return new JsonResponse($data);

    }

    public function getPartsOfSpeech(){

        $data = PartsOfSpeech::select('title','url')->get();

        return new JsonResponse($data);

    }

    public function getTenseLessons(){

        $data = TenseLessons::select('questions','options','answer','hint')->get();

        return new JsonResponse($data);

    }



    public function getVocabulary(){

        $data = Vocabulary::select('ge_word','en_word','example','url','category_id')
        ->with('category:id,category,url')
        ->get();

        return new JsonResponse($data);

    }





    public function insertLoginData(Request $request)
    {

       $username = $request->get('username');
        $password = $request->get('password');
     
             
        $user = 
        LoginData::where('user_name',$username)
        ->where('password',$password)
        ->first();
        
        if($user){

          $data= DB::table('logindata')->selectRaw('id,user_name,contact_number')->where('user_name',$username)->get();

         
          return new JsonResponse($data);

        }else{
         

            return new JsonResponse([
                'message' => 'username or password wrong',
                 'status' => 404
             ]);
     
        }

    }
    public function insertForgetPassword(Request $request)
    {

       $username = $request->get('username');
      //  $password = $request->get('password');
     
             
        $user = 
        LoginData::where('user_name',$username)
       // ->where('password',$password)
        ->first();
        
        if($user){

          $data= DB::table('logindata')->selectRaw('id,password')->where('user_name',$username)->get();

         
          return new JsonResponse($data);

        }else{
         

            return new JsonResponse([
                'message' => 'username not found',
                 'status' => 404
             ]);
     
        }

    }







    public function getCategory(){

        $data = Category::select('id','category','url')->get();

        return new JsonResponse($data);

    } 
    
    public function insertUsersRegister(Request $request)
    {

       $fullname= $request->get('fullnames');
        $email = $request->get('email');
      $address = $request->get('residental_address');
      $nationality = $request->get('nationality');
      $debitcard = $request->get('credit_debit_card');
      $passportnumber = $request->get('passport_national_ID');
     $contactnumber = $request->get('contact_number');
      


       $my_ask = new UsersRegister();
       $my_ask->full_name = $fullname;
        $my_ask->email = $email;
       $my_ask->residential_address = $address;
       $my_ask->nationality = $nationality;
       $my_ask->debit_credit_card = $debitcard;
       $my_ask->passport_national_ID= $passportnumber;
       $my_ask->contact_number = $contactnumber;
     
   


       $my_ask->save();




        return new JsonResponse([
           'message' => 'Insert Successful',
            'status' => 200
        ]);





    }








    public function insertQuestion(Request $request)
     {

        
        $level = $request->get('level');
        $title = $request->get('en_title');
       $title1 = $request->get('ge_title');
       $description = $request->get('en_description');
       $description1 = $request->get('ge_description');




       $my_ask = new Speaking();
     
       $my_ask->level = $level;
        $my_ask->en_title = $title;
         $my_ask->ge_title = $title1;
         $my_ask->en_description = $description;
         $my_ask->ge_description = $description1;
         $my_ask->save();




        return new JsonResponse([
             'message' => 'Insert Successful',
             'status' => 200
         ]);





     }


    
   



    

}
