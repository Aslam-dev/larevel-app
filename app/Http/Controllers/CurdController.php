<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurdController extends Controller
{

   public function storedata (Request $request)
   {

    $validateData => $request->validate([
        'name' => 'required',
        'description' => 'required'
    ]);

    $response = Test::create($validateData);

    return response () ->json(
        [
            'data' => $response
        ]
    );

   }
}
