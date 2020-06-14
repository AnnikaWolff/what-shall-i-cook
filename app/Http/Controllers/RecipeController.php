<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Http\Controllers\Controller;
use App\Helpers\Random;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class RecipeController extends Controller
{
    /**
     * Show random recipe
     *
     * @return View
     */
    public function show()
    {
        $recipe = Recipe::select('*')
            ->inRandomOrder()
            ->limit(1)
            ->get();
            
        $yes = Random::text('yes');
        $no = Random::text('no');
        
        return view('recipe.show', ['recipe' => $recipe[0], 'yes' => $yes, 'no' => $no]);
    }
    
    /**
     * Show all recipes
     *
     * @return View
     */
     public function showAll()
     {
         $recipes = Recipe::select('*')
             ->orderBy('name')
             ->paginate(15);
                      
         return view('recipe.show-all', ['recipes' => $recipes]);
     }
     
     public function showOwn() 
     {
        $recipes = Recipe::select('*')
                    ->where('author', Auth::user()->id)
                    ->paginate(15);
        
        return view('recipe.show-own', ['recipes' => $recipes]);
     }
     
      
    /**
     * Edit recipe
     *
     * @return View
     */
     public function edit($id = null)
     {
        $recipe = Recipe::find($id); 
                
        if (is_null($recipe)) {
            $recipe = new Recipe();    
        }        
        
        return view('recipe.edit', ['recipe' => $recipe]);
     }
     
     
    /**
     * Upsert recipe
     *
     * @return View
     */
     public function store(Request $request)
     {         
        $recipe = Recipe::find($request->edit); 
            
        if (is_null($recipe)) {
            $recipe = new Recipe; 
        }           
        
        $recipe->fill(['name' => $request->name, 'example' => $request->example, 'author' => Auth::user()->id]);
        
        /*
        if (! $recipe->foundSimilar) {
            $similarRecipe = Recipe::select('*')
                    ->where('name', 'like', '%'.$request->name.'%')
                    ->first();
                    
            if (! is_null($similarRecipe)) {
                Session::flash('message', 'Es gibt schon einen ähnlichen Vorschlag: "'.$similarRecipe->name.' ... '.$similarRecipe->example.'". <br>Trotzdem speichern?'); 
                Session::flash('alert-class', 'alert-info'); 
                return view('recipe.edit', ['recipe' => $recipe, 'foundSimilar' => 1]);
            }  
        }*/
        
        $recipe->save();      
        
        Session::flash('message', '"'.$recipe->name.'" gespeichert.'); 
        Session::flash('alert-class', 'alert-success'); 
            
        if ($request->edit) {
            return self::showOwn(); 
        } 
                                        
        return self::edit();
     }
}