<?php
namespace src\Core\Html;

Interface Html{

    /**
     * May be p, span, div...
     * @param mixed $htmlSurrounder
     * @return void
     */
    public function setCharacter($title, $content);

}