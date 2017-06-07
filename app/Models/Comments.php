<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'parent_id',
        'author',
        'message',
        'created_at'
    ];

    protected $table="comments";

    public function getCommits()
    {
        $data = $this->select(
                'id',
                'parent_id',
                'author', 'message',
                'email', 'created_at'
            )->orderBy('parent_id', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();

        return $data;
    }

    public function addComment($parent_id, $author, $message)
    {
        // $comment = new Comments;

        // $comment->parent_id = $parent_id;
        // $comment->author = $author;
        // $comment->message = $message;
        // $comment->created_at = date('Y-m-d H:i:s');

        // $comment->save();
    }
}
