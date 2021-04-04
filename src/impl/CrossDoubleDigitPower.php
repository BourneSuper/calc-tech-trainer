<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class CrossDoubleDigitPower extends QAndABase{
    
    public function __construct(){
        $this->name = '十字交叉法做两位数平方';
        $this->condition = '两位数平方计算';
        $this->description = '十字交叉法特例, //是位分隔符，多的进位 。( m * 10 + n )^2 = m^2 // 2mn // n^2';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 1, 2, 5 ];
        
        $this->operator1 = rand( 10, 99 );
        $this->operator2 = $this->operator1;
        
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