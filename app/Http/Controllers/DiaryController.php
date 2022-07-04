<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use Illuminate\Support\Facades\Validator;

class DiaryController extends Controller
{
    public function index(Request $request) {
        $diaries = Diary::where('user_id', auth()->user()->id)
        ->orderBy('id', 'desc')
        ->paginate(3);
        if($request->ajax()) {
            $view = view('partials.diary', compact('diaries'))->render();
            return response()->json([
                'html' => $view
            ]);
        }
        return view('diary.home', compact('diaries'));
    }


    public function edit($id) {
        $diary = Diary::where(['id' => $id, 'user_id' => auth()->user()->id])->get();
        return response()->json([
            'status' => 200,
            'diary' => $diary
        ]);
    }
    
    public function update(Diary $diary, Request $request) {
        $validateUpdate = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
        ]);

        if($validateUpdate->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validateUpdate->errors()
            ]);
        } else {
            $diary->title = $request->title;
            $diary->description = $request->description;
            $diary->save();
            return response()->json([
                'status' => 200,
            ]);
        }

    }




    public function store(Request $request) {
        $validateDiaryAddRequest = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
        ]);
        
        
        if($validateDiaryAddRequest->fails()) {
            return response()->json([
                'status' => 400,
                'error' => $validateDiaryAddRequest->errors()
            ]);
        } else {
            $diary = new Diary;
            $diary->title = $request->title;
            $diary->description = $request->description;
            $diary->user_id = auth()->user()->id;
            $diary->save();
            $id = $diary->id;
            $created_at = $diary->created_at;


            return response()->json([
                'status' => 200,
                'message' => 'Diary Added',
                'diary' => $request->all(),
                'id' => $id,
                'created_at' => $created_at->diffForHumans()
            ]);
        }
    }




    public function delete($id) {
        Diary::find($id)->delete();
        return response()->json([
            'status' => 200,
            'id' => $id
        ]);
    }



    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.index');
    }


}
