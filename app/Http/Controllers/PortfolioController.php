<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
 public function index()
{
    $projectFolder = 'severomorsk-kovaleva';
    $basePath = public_path('images/projects/' . $projectFolder);
    
    $beforePhotos = $this->getImagesFromFolder($basePath . '/before', $projectFolder);
    $duringPhotos = $this->getImagesFromFolder($basePath . '/during', $projectFolder);
    $afterPhotos = $this->getImagesFromFolder($basePath . '/after', $projectFolder);
    
    return view('portfolio.index', compact('beforePhotos', 'duringPhotos', 'afterPhotos'));
}
    
    private function getImagesFromFolder($folderPath, $projectFolder)
    {
        $images = [];
        
        if (File::exists($folderPath)) {
            $files = File::files($folderPath);
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'avif'];
            
            foreach ($files as $file) {
                if (in_array(strtolower($file->getExtension()), $allowedExtensions)) {
                    $images[] = '/images/projects/' . $projectFolder . '/' . basename($folderPath) . '/' . $file->getFilename();
                }
            }
        }
        
        return $images;
    }
}