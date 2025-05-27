<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller{
    public function home(){
        return view('home');
    }
     public function homepost(Request $request){
        $data = $request->all();
        array_shift($data);
        $input =  json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $output = [
        "Resume_str" => $input
        ];
        $final_json = json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
         var_dump($final_json) ;
         $this->storeStepData('', $request);
        return redirect()->route('profile');


    }
     public function profile(){
        return view('profile');
    }
    public function profilepost(Request $request){
        $data = $request->all();
        array_shift($data);
        $input =  json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $output = [
        "Resume_str" => $input
        ];
        $final_json = json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
       var_dump($final_json) ;
       $this->storeStepData('profile', $request);
       return redirect()->route('experience');
       
    }
      public function experience(){
        return view('experience');
    }

      public function experiencepost(Request $request){
        $data = $request->all();
        array_shift($data);
        $input =  json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $output = [
        "Resume_str" => $input
        ];
        $final_json = json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
       var_dump($final_json) ;
       $this->storeStepData('experience', $request);
       return redirect()->route('education');

       
    }
    
     public function education(){
        return view('education');
    }
       public function educationpost(Request $request){
        $data = $request->all();
        array_shift($data);
        $input =  json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $output = [
        "Resume_str" => $input
        ];
        $final_json = json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
       var_dump($final_json) ;
       $this->storeStepData('education', $request);
       return redirect()->route('skills');
       
    }
    
     public function skills(){
        return view('skills');
    }
       public function skillspost(Request $request){
        $data = $request->all();
        $this->storeStepData('skills', $request);

        $allData = Session::get('resume_data', []);
        array_shift($data);
        $input =  json_encode($allData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $output = [
        "Resume_str" => $input
        ];
        $final_json = json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
       var_dump($final_json) ;
       
       
    }

      private function storeStepData($step, Request $request) {
        $data = $request->all();
        array_shift($data); // loại bỏ _token hoặc phần tử đầu

        $currentData = Session::get('resume_data', []);
        $currentData[$step] = $data;

        Session::put('resume_data', $currentData);
    }
    
}
