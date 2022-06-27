<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function getUsers()
    {
        
        $users = User::all();

        return view('users', [

            
            'users' => $users,
            

        ]);
    }
public function updateProfil(Request $request,$id){
    $validate = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'pseudo' => 'required',
        'email' => 'required',
        'adress' => 'required',
        'phone' => 'required',
        'ville' => 'required',
        'pays' => 'required',
        'zip' => 'required',
        'password' => 'required',
        'image' => 'required'
    ]);    
    dd($request);
    $profile=User::where('id','=',$id)->get();
    $profile=User::find($id);
    $profile->nom = $validate['nom'];
    $profile->prenom = $validate['prenom'];
    $profile->username = $validate['username'];
    $profile->email = $validate['email'];
    $profile->email = $validate['address'];
    $profile->email = $validate['numero_telephone'];
    $profile->email = $validate['city'];
    $profile->email = $validate['country'];
    $profile->email = $validate['zipCode'];
    $profile->email = $validate['password'];
    $profile->email = $validate['photo'];
    $profile->update();
   

    return redirect()->route('index');

}
    
    public function showUsers($id)
    {
        $users = User::find($id);
      
       
            
        return view('user', [


            'users' => $users,
            
            
        ]);
    }
       public function update(Request $request, $id)
    
    {
       

        $validate = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'username' => 'required',
            'email' => 'required'
        ]);    
        $users=User::where('id','=',$id)->get();
        $users=User::find($id);
  
        $users->nom = $validate['nom'];
        $users->prenom = $validate['prenom'];
        $users->username = $validate['username'];
        $users->email = $validate['email'];
       
        
        $users->update();
       
    
        return redirect()->route('getUsers');
    }

    
    public function destroy($id)
    {
        
    {
        $delete = User::find($id);
        $delete->delete();

        return redirect()->route('users');
    }
    }


   
}
