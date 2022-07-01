<?php

namespace App\Http\Controllers;

use App\Models\Paniers;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{

    public function getCateg()
    {
        if (Auth::check()){
            $paniers = Paniers::where('user_id', '=',  Auth::user()->id)->get();        
        } else {
            $paniers = null;
        }
     
        $categories = Categories::all();
        return view('categories', [
            'paniers' => $paniers,
            'categories' => $categories,
        ]);
    }

    public function addCateg(Request $request)
    {

        $validate = $request->validate([
            'label' => 'required',
        ]);
        $categorie = new Categories();
        $categorie->label = $validate['label'];
        $categorie->save();
        return redirect()->route('categories');
    }


    public function update(Request $request, $id_cat)

    {
        $categorie = Categories::find($id_cat);
        $categorie->label = $request->label;
        $categorie->save();
        return redirect()->route('categories');
    }


    public function destroy($id_cat)
    {
        $delete = Categories::find($id_cat);
        $delete->delete();
        return redirect()->route('categories');
    }
}
