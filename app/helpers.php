<?php

if (!function_exists('storeFile')) {
    function storeFile($path, $request)
    {
        $file = $request->getClientOriginalName();

        $filename = pathinfo($file, PATHINFO_FILENAME);
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        $fileNameToStore = $filename . '-' . uniqid() . '.' . $extension;
        $request->storeAs('public/' . $path, $fileNameToStore);

        return $fileNameToStore;
    }
}

// Normalda Image uplaod üçün Intervention image library-sindən istifadə edirəm.
// Və bu funksiya ilə uplaod edirəm. 
// Ancaq bu proyekt kiçik olduğundan sadə bir file uplaod funksiyasından istifadə etdim

// if (!function_exists('storeImage')) {
//     function storeImage($path, $request, $width = 1920, $height = 1080, $thumbnailWidth = null, $thumbnailHeight = null)
//     {
//         $file = $request->getClientOriginalName();
//         $filename = pathinfo($file, PATHINFO_FILENAME);

//         $fileNameToStore = $filename . '-' . uniqid() . '.webp';
//         $filePathToStore = storage_path('app/public/images/') . $path . '/' . $fileNameToStore;
//         $thumbnailFilePathToStore = storage_path('app/public/images/thumbnails/') . $path . '/' . $fileNameToStore;

//         if (!is_dir(storage_path('app/public/images/') . $path)) {
//             mkdir(storage_path('app/public/images/') . $path, 755, true);
//         }
//         if (!is_dir(storage_path('app/public/images/thumbnails/') . $path)) {
//             mkdir(storage_path('app/public/images/thumbnails/') . $path, 755, true);
//         }

//         Image::make($request)->encode('webp', 80)->fit($width, $height)->save($filePathToStore);
//         Image::make($request)->encode('webp', 80)->fit($width, $height)->save($thumbnailFilePathToStore);

//         return $fileNameToStore;
//     }
// }