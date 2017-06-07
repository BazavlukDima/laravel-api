<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

use App\Http\Requests;
use Validator;
use Carbon;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentsModel = new Comments();
        $comments = $commentsModel->getCommits();


        return response()->json(['comments' => $comments], 200);
        // return response()->$comments;
    }

    public function addComments(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //   'messege' => 'required|string|max:255',
        //   'body' => 'required',
        // ]);

        // if ($validator->fails()) {
        //   return response()->json(['Error' => "fails()"], 500);
        // }

        Comments::create(['parent_id' => $request->parent_id,
        'author' => $request->author,
        'message' => $request->message,
        'created_at' => Carbon\Carbon::now()
        ]);

        return response()->json(['messege' => 'Add_Success!'], 200);
    }
}
