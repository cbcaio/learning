<?php

class VideoPlayer {
    public function play(){
        //behavior expected =  play
    }
}

class AviVideoPlayer extends VideoPlayer{
    public function play($file)
    {
        if (pathinfo($file,PATHINFO_EXTENSION) !== 'avi')
        {
            throw new Exception; // violates LSP, behavior different than expected
        }
    }
}
