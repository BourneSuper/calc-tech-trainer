<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class AnyMultiplyFiveTimesOdds extends QAndABase{
    
    public function __construct(){
        $this->name = '任意数乘以(5的奇数倍的数)';
        $this->condition = '操作数=5的倍数，如5,15,25,35';
        $this->description = '将操作数(5的奇数倍的数)乘以2后，与另一个操作数相乘，最后除以2';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        $potentialOp2Arr = [ 1, 3, 5, 7, 9 ];
        
        $this->operator1 = rand( 10, 1000 );
        $this->operator2 = 5 * $potentialOp2Arr[ rand( 0, count( $potentialOp2Arr ) - 1 ) ];
        
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