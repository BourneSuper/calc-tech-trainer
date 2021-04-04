<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class AnyMultiplyOneTwoFive extends QAndABase{
    
    public function __construct(){
        $this->name = '任意数与尾数是1、2、5的两位数相乘';
        $this->condition = '尾数是1、2、5的两位数';
        $this->description = '将这个两位数用加法拆成整十数和个位数，然后运算';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        $potentialOp2Arr = [ 1, 2, 5 ];
        
        $this->operator1 = rand( 10, 1000 );
        $this->operator2 = rand( 1, 9 ) . $potentialOp2Arr[ rand( 0, count( $potentialOp2Arr ) - 1 ) ];
        
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