<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class ShiftDigitMultiplication extends QAndABase{
    
    public function __construct(){
        $this->name = '错位法做乘法';
        $this->condition = '';
        $this->description = '列竖式，一行只写一个位数相乘的结果，最后相加。好处是乘法和加法计算分离，坏处是需要对齐';
        
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