<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class AnyMultiplyOnePointFive extends QAndABase{
    
    public function __construct(){
        $this->name = '任意数乘以(1.5的倍数)';
        $this->condition = '操作数存在1.5的倍数，如0.15,15%,1.5,15';
        $this->description = '将操作数转化为1.5后，相当于在另一个操作数的基础上加上这个数的一半';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        $potentialOp2Arr = [ 0.001, 0.01, 0.1, 1, 10, 100 ];
        
        $this->operator1 = rand( 10, 1000 );
        $this->operator2 = 1.5 * $potentialOp2Arr[ rand( 0, count( $potentialOp2Arr ) - 1 ) ];
        
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