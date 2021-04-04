<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class LeftToRightPlus extends QAndABase{
    
    public function __construct(){
        $this->name = '从左向右加法';
        $this->condition = '加法计算';
        $this->description = '用于心算。后位满10多加1；后位和9隔位看；后位小9直接写和';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 0.001, 0.01, 0.1, 1, 10, 100 ];
        
        $this->operator1 = rand( 10, 1000 );
        $this->operator2 = rand( 10, 1000 );
        
        $display = $this->operator1 . " + " . $this->operator2 . " = ? " . $this->name . PHP_EOL;
        $display .= ' ' . $this->condition . ' || ' . $this->description . PHP_EOL;
        echo $display;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayAnswer()
     */
    public function displayAnswer(){
        
        $this->answer = $this->operator1 + $this->operator2;
        
        echo $this->operator1 . " + " . $this->operator2 . " = " . $this->answer . PHP_EOL;
        
    }
    
    
}

?>