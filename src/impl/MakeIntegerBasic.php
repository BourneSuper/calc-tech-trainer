<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 * 25 * 4 = 100
 * 25 * 8 = 200
 * 25 * 16 = 400
 * 125 * 4 = 500
 * 125 * 8 = 1000
 * 125 * 16 = 2000
 * 625 * 4 = 2500
 * 625 * 8 = 5000
 * 625 * 16 = 10000
 *  
 */
class MakeIntegerBasic extends QAndABase{
    
    public function __construct(){
        $this->name = '凑整法-基础';
        $this->condition = '';
        $this->description = '背记乘法的凑整';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        $potentialOp1Arr = [ 25, 125, 625 ];
        $potentialOp2Arr = [ 4, 8, 16 ];
        
        $this->operator1 = $potentialOp1Arr[ rand( 0, 2 ) ];
        $this->operator2 = $potentialOp2Arr[ rand( 0, 2 ) ];
        
        $display = $this->operator1 . " * " . $this->operator2 . " = ? " . $this->name . PHP_EOL;
        $display .= ' ' . $this->condition . PHP_EOL;
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