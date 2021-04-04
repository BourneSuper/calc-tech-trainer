<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class AnyDivideFour extends QAndABase{
    
    public function __construct(){
        $this->name = '任意数字与四相除';
        $this->condition = '除数是4';
        $this->description = '先除以2，再除以2';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 5, 25, 125 ];
        
        $this->operator1 = rand( 10, 1000 );
        $this->operator2 = 4;
        
        $display = $this->operator1 . " / " . $this->operator2 . " = ? " . $this->name . PHP_EOL;
        $display .= ' ' . $this->condition . ' || ' . $this->description . PHP_EOL;
        
        echo $display;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayAnswer()
     */
    public function displayAnswer(){
        
        $this->answer = $this->operator1 / $this->operator2;
        
        echo $this->operator1 . " / " . $this->operator2 . " = " . $this->answer . PHP_EOL;
        
    }
    
    
}

?>