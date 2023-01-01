<?php
namespace src\Core\Html;

use src\Core\Html\Html;

/**
 * class BootstrapHtml
 */
class BootstrapHtml implements Html{

    private $data;

    private $titleCharacter;
    private $bodyCharacter;
    private $surrounder;
    private $cssClass;
    private $separator;
    private $pre;

    public function __construct($surrounder="div", $cssClass="col demoBody", $titleCharacter='h1', 
                                $bodyCharacter='h5', $separator = 'hr', $pre = true) {
        $this->surrounder = $surrounder;
        $this->cssClass = $cssClass;
        $this->titleCharacter = $titleCharacter;
        $this->bodyCharacter = $bodyCharacter;
        $this->separator = $separator;
        $this->pre = $pre;
        $this->startData();
    }

    
    public function startData(){
        $separator = $this->separator !== '' ? "<{$this->separator}>" : '';
        $pre = $this->pre === true ? '<pre>' : '';
        $this->data = $separator."<{$this->surrounder} class='{$this->cssClass}'><{$this->bodyCharacter}>".$pre;
    }

    public function fillData($content){
        $this->data .= $content;
    }

    public function endData(){
        $pre = $this->pre === true ? '</pre>' : '';
        $this->data .= $pre."</{$this->bodyCharacter}></{$this->surrounder}>";
    }

    public function getData(){
        return $this->data;
    }

    /**
     * @param string $html 
     * @return string
     */
    public function setCharacter($titleCharacter = 'h1', $bodyCharacter='h5'){
        $this->titleCharacter = $titleCharacter;
        $this->bodyCharacter = $bodyCharacter;
    }

    public function getTitle($title){
        return "<{$this->titleCharacter}><div class='demoTitle'>{$title}</div></{$this->titleCharacter}>";
    }

    public function getBodyCharacter($title){
        return $this->bodyCharacter;
    }

    public function addSeparator(){
        $separator = $this->separator !== '' ? "<{$this->separator}>" : '';
        $this->data .= $separator;
    }

    public function setSeparator($separator){
        $this->separator = $separator;
    }

}