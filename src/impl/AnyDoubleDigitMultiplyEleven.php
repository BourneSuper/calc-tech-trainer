<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class AnyDoubleDigitMultiplyEleven extends QAndABase{
    
    public function __construct(){
        $this->name = '任意两位数乘以11';
        $this->condition = '两位数乘以11';
        $this->description = '十字交叉法的特例，口诀：两边一拉，和放中间';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 5, 25, 125 ];
        
        $this->operator1 = rand( 10, 99 );
        $this->operator2 = 11;
        
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