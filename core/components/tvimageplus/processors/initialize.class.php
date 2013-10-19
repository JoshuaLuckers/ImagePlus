<?php

class ImagePlusInitializeProcessor extends ImagePlus\Processor\AbstractProcessor {

    public function process(){

        $newImage = $this->modx->newObject('imagePlusImage');
        $newImage->save();
        $newImageId = $newImage->get('id');

        return $this->success("TV Initialized",array(
                'id' => $newImageId
            ));

    }
}
return 'ImagePlusInitializeProcessor';