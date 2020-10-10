<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class NewArticleController extends Controller
{
    //
    
    // Create Article Form
    public function createForm(Request $request) {
        return view('article');
      }
  
      // Store Article Form data
      public function NewArticle(Request $request) {
  
          // Form validation
          $this->validate($request, [
              'title' => 'required',
              'name' => 'required',
              'category' => 'required',
              'address' => 'required',
              'comment' => 'required',
              'cont' => 'required',
              'photographer' => 'required',
              'words' => 'required',
              'about' => 'required'
           ]);
  
          //  Store data in database
          Article::create($request->all());
  
          // 
          return back()->with('success', 'New Article Created.');
      }
  
}
