<?php

namespace App\Http\Controllers;
use App\match;
use Illuminate\Http\Request;

class MatchController extends Controller
{
//    public function _construct()
//    {
//       // $this->middleware('Admin');
//        //$this->middleware('Admin', ['only' => ['create', 'store', 'edit', 'delete']]);
//        // Alternativly
//        $this->middleware('Admin', ['except' => ['index']]);
//    }
    public function index()
    {
        $matches = match::all();
        return view('match.index')->with('matches', $matches);
    }

    public function create()
    {
        return view('match.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'home_team' => 'required|max:255',
            'away_team' => 'required|max:255',
        ]);
        if($validatedData)
        {
            $match=match::where('home_team',$request->get('home_team'))->where('away_team',$request->get('away_team'))->first();
            if($match==null)
            {

                match::create($request->all());
                return redirect()->to('match')->with('message', 'Match Created Successfully!');

            }
            else{
                redirect()->back()->withErrors(['Match Already Exists.'])->withInput();

            }
        }
        else{

            redirect()->back()->withErrors($validatedData)->withInput();
        }
    }

    public function edit($id)
    {
        $match = match::find($id);
        return view('match.edit',['match'=> $match]);
    }


    public function update($id, Request $request)
    {
        $match = match::find($id);
        $match->update($request->all());
        return redirect()->to('match')->with('message', 'Match Updated Successfully!');
    }


    public function destroy($id)
    {
        $match = match::find($id)->delete();
        return redirect()->to('match')->with('message', 'Match deleted Successfully!');

    }
}
