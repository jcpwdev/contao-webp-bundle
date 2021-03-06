<?php

namespace Postyou\ContaoWebPBundle\Elements;

use Postyou\ContaoWebPBundle\Util\WebPHelper;

class WebPContentImage extends \ContentImage {


    public function compile() {
        parent::compile();

        if (\Config::get('useWebP') && WebPHelper::hasWebPSupport()) {
            $picture = WebPHelper::getWebPPicture($this->Template->picture);
            $this->Template->picture = $picture;
        }
    }





}
