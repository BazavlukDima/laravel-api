<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

use App\Http\Requests;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comments::all();

        // var_dump($comments = $this->makeArray($comments));die();

        return response()->json(['comments' => $comments], 200);
        // return response()->$comments;
    }

    public function addComment(Request $request)
    {
        Comments::create($request);

        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }

    // private function makeArray($comments){
    //     $childs=[];
        
    //     foreach($comments as $comment){
    //         $childs[$comment->parent_id][]=$comment;
    //     }
        
    //     foreach($comments as $comment){
    //         if(isset($childs[$comment->id]))
    //             $comment->childs=$childs[$comment->id];
            
    //     }
    //     if(count($childs)>0){
    //         $tree=$childs[0];
    //         }
    //     else {
    //             $tree=[];
    //         }
    //     return $tree;
    // }
}
