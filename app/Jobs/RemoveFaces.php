<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\AlignPosition;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;


class RemoveFaces implements ShouldQueue
{
    use Queueable; 
    private $article_image_id;

    /**
     * Create a new job instance.
     */
    public function __construct($article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i=Image::find($this->article_image_id);
        if(!$i){
            return;
        }
        $srcPath=storage_path('app/public/' . $i->path);
        $image=file_get_contents($srcPath);

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google-credential.json'));

        $imageAnnotator= new ImageAnnotatorClient();
        $response=$imageAnnotator->faceDetection($image);
        $faces=$response->getFaceAnnotations();
        foreach($faces as $face){
            $vertices=$face->getBoundingPoly()->getVertices();
            $bounds=[];
            foreach($vertices as $vertex){
                $bounds[]=[
                    $vertex->getX(),
                    $vertex->getY()
                ];
            }
            $w=$bounds[2][0]-$bounds[0][0];
            $h=$bounds[2][1]-$bounds[0][1];
            $image=SpatieImage::load($srcPath);
            $image->watermark(
                base_path('public/img/vecteezy_gradient-blur-background_20911347.png'), 
                AlignPosition::TopLeft,
                paddingX: $bounds[0][0],
                paddingY: $bounds[0][1],
                width: $w,
                height: $h,
                fit:Fit::Stretch
            );
            $image->save($srcPath);
        }
        $imageAnnotator->close();
        
        
    }
}
