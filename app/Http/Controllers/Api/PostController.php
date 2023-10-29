<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Helpers\ResponseHelper;
use App\Traits\UploadImagesTrait;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Requests\Api\PostRequest;
use App\Http\Resources\PostCollection;

class PostController extends Controller
{
    use UploadImagesTrait;

    protected $folder = 'posts';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()
            ->with('image')
            ->paginate();
        
        return new PostCollection($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        try {
            $postData = $request->safe()->only(['title', 'content']);
            $postData['user_id'] = auth()->user()->id;
            $post = Post::query()->create($postData);
            $this->verifyAndUpload($post, $request, folder: $this->folder);
            
        } catch (\Throwable $th) {
            ResponseHelper::sendError($th->getMessage());
        }
        // dd($post, $post->load('image'));
        return (new PostResource($post->load('image')))
                    ->additional([
                        'success' => true,
                    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
