<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usercontrol extends Controller
{
    public function fetch_logic_home(){
        $data = DB::table('sign')->get();
        return view('welcome',['data'=>$data]);
    }

    public function logic_see($id){
        $data = DB::table('sign')->where('sr',$id)->get();
        return view('see',['data'=>$data]);
    }

    public function logic_insert_data(Request $r){
           $r->validate([
                  'name' => 'required |min:3',
                  'email' => 'required |email ',
                  'contact' => 'required ',
                  'feedback' => 'required |min:5'
            ]);

           
            if($r){
                $data = DB::table('sign')->insert([
                    'name'=>$r->name,
                    'email'=>$r->email,
                    'contact'=>$r->contact,
                    'feedback'=>$r->feedback
                ]);
    
                if($data){
                    return redirect()->route('home');
                }
            }
         
            
            
    }

    public function fetch_logic_updatepage( $id){
        $data = DB::table('sign')->where('sr',$id)->get();
        return view('modify',['data'=>$data]);
    }

    public function logic_update(Request $r, $id){
        $data = DB::table('sign')->where('sr',$id)->update([
                    'name'=>$r->name,
                    'email'=>$r->email,
                    'contact'=>$r->contact,
                    'feedback'=>$r->feedback
        ]);

       
        if($data){
            return redirect()->route('home');
        }
    }

    public function logic_delete($id){
        $data = DB::table('sign')->where('sr',$id)->delete();
        if($data){
            return redirect()->route('home');
        }
    }
}
