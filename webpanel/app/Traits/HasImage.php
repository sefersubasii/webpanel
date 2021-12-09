<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * Image Manager
 */
trait HasImage
{
    /**
     * Upload Image Or Delete
     *
     * @param UploadedFile $file
     * @param string $oldPathDelete
     * @param string $folder
     * @param string $disk
     * @return string|null
     */
    public function uploadImage(
        UploadedFile $file,
        string $oldPathDelete = null,
        string $folder = 'upload',
        string $disk = 'public'
    ) {
        $uploadedFilePath = $file->store($folder, $disk);

        if (!$uploadedFilePath) {
            return $oldPathDelete;
        }

        // Delete old uploaded image
        if ($oldPathDelete) {
            $this->deleteImage($oldPathDelete);
        }

        return $uploadedFilePath;
    }

    /**
     * Image Delete From Path
     *
     * @param string|array $imagePaths
     * @return bool
     */
    public function deleteImage($imagePaths): bool
    {
        if (!$imagePaths) {
            return false;
        }

        return Storage::disk('public')->delete($imagePaths);
    }
}
