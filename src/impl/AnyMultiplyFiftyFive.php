<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class AnyMultiplyFiftyFive extends QAndABase{
    
    public function __construct(){
        $this->name = '任意数乘以55';
        $this->condition = '操作数=55';
        $this->description = '将55拆成5 * 11 ，再把5凑成10 / 2';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 5, 25, 125 ];
        
        $this->operator1 = rand( 10, 1000 );
        $this->operator2 = 55;
        
        $display = $this->operator1 . " * " . $this->operator2 . " = ? " . $this->name . PHP_EOL;
        $display .= ' ' . $this->condition . ' || ' . $this->description . PHP_EOL;
        echo $display;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayAnswer()
     */
    public function displayAnswer(){
        
        $this->answer = $this->operator1 * $this->operator2;
        
        echo $this->operator1 . " * " . $this->operator2 . " = " . $this->answer . PHP_EOL;
        
    }
    
    
}

?>