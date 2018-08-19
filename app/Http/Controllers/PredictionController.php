<?php

namespace App\Http\Controllers;
use App\prediction;
use App\match;
use Auth;
use Illuminate\Http\Request;
use function PhpParser\filesInDir;

class PredictionController extends Controller
{
//    public function __construct()
//    {
//       // $this->middleware('auth');
//        $this->middleware('User');
//
//    }

    public function index()
    {
        $userId = Auth::user()->id;
        $predictions = prediction::Where('user_id',$userId)->get();
        return View('prediction.index',['predictions'=>$predictions]);
    }

    public function create($id)
    {
        $match=match::find($id);
        return view('prediction.create',['match'=>$match]);
    }

    public function store(Request $request)
    {
        prediction::create($request->all());
        return redirect()->to('prediction')->with('message','Record Inserted Successfully!');
    }

    public function edit($id)
    {
        $prediction=prediction::find($id);
        return view('prediction.edit',['prediction'=>$prediction]);
    }

    public function update(Request $request,$id)
    {
      $prediction=prediction::find($id);
      $prediction->update($request->all());
      return redirect()->to('prediction')->with('message','Record Updated Successfully!');
    }
    public function destroy ($id)
    {
        $prediction = prediction::find($id)->delete();
        return redirect()->to('prediction')->with('message', 'Prediction deleted Successfully!');


    }
}
