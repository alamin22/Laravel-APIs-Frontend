<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    protected $key = '6mvU45GVjWG6J2Mge7xUjhM2dOXAoxqt9vxC';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    //data fetch api function
    function getProduct(){
        $response = Http::withHeaders([
			'APP_KEY' => $this->key,//app key
		])->get('localhost:8000/api/zepto-apps/get-datas'); //url must be live server
		$responseData = json_decode($response);//json decode

        return view('welcome',compact('responseData'));
    }
    //search data api function 
    function search(Request $request){
        $response = Http::withHeaders([
			'APP_KEY' => $this->key,//app key
		])->post('localhost:8000/api/zepto-apps/search',[ //url must be live server
            'name' => $request->key,
        ]);
		$responseData = json_decode($response); //json decode
       
        return view('search',compact('responseData'));
    }
}
