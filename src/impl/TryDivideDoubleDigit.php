<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class TryDivideDoubleDigit extends QAndABase{
    
    public function __construct(){
        $this->name = '试商法--除数是两位数';
        $this->condition = '除数是两位数';
        $this->description = '商五法。同头无除则商为8或9。商9法，前两位比除数小且前三位与除数的和大于除数的10倍，则一定为9。';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 5, 25, 125 ];
        
        $this->operator1 = rand( 10, 1000 );
        $this->operator2 = rand( 10, 99 );
        
        $display = $this->operator1 . " / " . $this->operator2 . " = ? " . $this->name . PHP_EOL;
        $display .= ' ' . $this->condition . ' || ' . $this->description . PHP_EOL;
        
        echo $display;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayAnswer()
     */
    public function displayAnswer(){
        
        $this->answer = $this->operator1 / $this->operator2;
        
        echo $this->operator1 . " / " . $this->operator2 . " = " . $this->answer . PHP_EOL;
        
    }
    
    
}

?>