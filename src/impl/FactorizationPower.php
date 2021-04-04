<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class FactorizationPower extends QAndABase{
    
    public function __construct(){
        $this->name = '因式分解做两位数平方';
        $this->condition = '两位数平方计算';
        $this->description = 'a^2 = a^2 - b^2 + b^2 = ( a + b )(a - b ) + b^2, b用来凑整数,凑成整十整百的数可以加速计算';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 5, 25, 125 ];
        
        $this->operator1 = rand( 20, 99 );
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