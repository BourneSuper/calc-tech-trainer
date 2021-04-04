<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class AnyMultiplyThreeFive extends QAndABase{
    
    public function __construct(){
        $this->name = '任意数乘以5、25、125';
        $this->condition = '操作数存在5、25、125';
        $this->description = '凑整法，先乘以整数再除';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        $potentialOp2Arr = [ 5, 25, 125 ];
        
        $this->operator1 = rand( 10, 1000 );
        $this->operator2 = $potentialOp2Arr[ rand( 0, 2 ) ];
        
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