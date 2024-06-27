<?php

namespace TIST;

class Application extends extends \Illuminate\Foundation\Application
{
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'public_html';
    }

}
