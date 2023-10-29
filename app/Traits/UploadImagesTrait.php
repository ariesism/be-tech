<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait UploadImagesTrait
{
    protected $post;
    protected $uploadPath = 'images';
    protected $folderName;

    public function verifyAndUpload($post, $request, $fieldname = 'image', $folder = null)
    {
        $this->post = $post;
        $this->folderName = $folder;

        if ($request->safe()->has($fieldname)) {
            $files = $request->safe()->$fieldname;
            $this->storeImage([$files]);
        }
    }

    public function storeImage($images)
    {
        $folderPath = $this->uploadPath . '/' . $this->folderName;
        foreach ($images as $index => $image) {
            $timestamp = time();
            $extension = $image->extension();
            $filename = sprintf('%s-%s%s.%s', $this->post->id, $timestamp, $index, $extension);
            $filePath = sprintf('%s/%s', $folderPath, $filename);
            Storage::disk('public')->put($filePath, file_get_contents($image));
            
            $this->post->image()->create([
                'imageable_id' => $this->post->id,
                'path' => $filePath,
            ]);
        }

        return;
    }
}