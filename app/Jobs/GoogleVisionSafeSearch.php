<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Queueable;

    private $article_image_id;
    

 
    public function __construct($article_image_id)
    {
      $this->article_image_id =   $article_image_id ;
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
        $image=file_get_contents(storage_path('app/public/' . $i->path));
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google-credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response=$imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();

        $safe=$response->getSafeSearchAnnotation();


        $adult= $safe->getAdult();
        $medical= $safe->getMedical();
        $spoof= $safe->getSpoof();
        $violence= $safe->getViolence();
        $racy= $safe->getRacy();
        
        $likelihoodName = [
            'text-secondary bi bi-circle-fill',
            'text-success bi bi-check-circle-fill',
            'text-success bi bi-check-circle-fill',
            'text-warning bi bi-excalamation-circle-fill',
            'text-warning bi bi-excalamation-circle-fill',
            'text-danger bi bi-dash-circle-fill',
        ];

        $i->adult= $likelihoodName[$adult];
        $i->spoof= $likelihoodName[$spoof];
        $i->racy= $likelihoodName[$racy];
        $i->medical= $likelihoodName[$medical];
        $i->violence= $likelihoodName[$violence];

        $i->save();
    }
}
