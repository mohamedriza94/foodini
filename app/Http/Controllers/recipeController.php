<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


class recipeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.recipe');
    }
    
    public function explorePage()
    {
        return view('explore');
    }
    
    public function addRecipe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'price' => ['required','numeric'],
            'name' => ['required'],
            'category' => ['required'],
            'photo' => ['required','image'],
        ]); //validate all the inputs
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            $recId = rand(115000,995000);

            $recipes = new Recipe;        
            $recipes->rec_id = $recId;
            $recipes->rec_price = $request->input('price');
            $recipes->rec_photo = $request->input('photo');

            $photoPath = request('photo')->store('recipes','public'); //get image path
            $recipes->rec_photo = '/'.'storage/'.$photoPath;

            $recipes->rec_category = $request->input('category');
            $recipes->rec_tut = $request->input('rec_tut');
            $recipes->rec_name = $request->input('name');
            $recipes->rec_desc = $request->input('rec_desc');
            $recipes->admin_id = auth()->guard('admin')->user()->id;
            $recipes->save();
            
            return response()->json([
                'status'=>200
            ]);
        }
    }
    
    public function getRecipe()
    {
        $recipes = Recipe::orderBy('id', 'DESC')->get();
        return response()->json([
            'recipes'=>$recipes,
        ]);
    }
    
    public function getCategorizedRecipe($category)
    {
        $recipes = Recipe::where('rec_category','=', $category)->orderBy('id', 'DESC')->get();
        return response()->json([
            'recipes'=>$recipes,
        ]);
    }
    
    public function searchRecipe($input)
    {
        $recipes = Recipe::Where('rec_name','LIKE','%'.$input.'%')->orderBy('id', 'DESC')->get();
        return response()->json([
            'recipes'=>$recipes,
        ]);
    }
    
    public function getLatestRecipe()
    {
        $recipes = Recipe::orderBy('id', 'ASC')->get();
        return response()->json([
            'recipes'=>$recipes,
        ]);
    }
    
    public function updateRecipe(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            
            'rec_price' => ['required','numeric'],
            'rec_name' => ['required'],
            'admin_id' => ['required'],
            
        ]); //validate all the inputs
        
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            $recipes = Recipe::find($id);;     
            
            if ($recipes) 
            {
                $recipes->rec_price = $request->input('rec_price');
                $recipes->rec_name = $request->input('rec_name');
                $recipes->admin_id = $request->input('admin_id');
                $recipes->save();
                
                return response()->json([
                    'status'=>200
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>300
                ]);
            }
        }
    }
    
    public function deleteRecipe(Request $request, $id)
    {
        $recipes = Recipe::find($id);;     
        
        if ($recipes) 
        {
            $recipes->delete();
            
            return response()->json([
                'status'=>200
            ]);
        }
        else
        {
            return response()->json([
                'status'=>300
            ]);
        }
    }
    
    public function getSingleRecipe($id)
    {
        $recipes = Recipe::find($id);
        if($recipes)
        {
            return view('recipeDetail')->with('recipes', $recipes);
        }
        else
        {
            return response()->json([
                'status'=>400,
            ]);
        }
    }
}
