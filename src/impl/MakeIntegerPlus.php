<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class MakeIntegerPlus extends QAndABase{
    
    public function __construct(){
        $this->name = '拆分法做加法';
        $this->condition = '加法计算';
        $this->description = '从左往右计算的思想，可以加速计算。将第二个操作数按位拆分成多个数，然后与第一个操作数相加。';
        
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