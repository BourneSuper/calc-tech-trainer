<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class FractionUnique extends QAndABase{
    
    public function __construct(){
        $this->name = '特殊分数';
        $this->condition = '';
        $this->description = '分母从2到11背记';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        $potentialOp2Arr = [ 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 ];
        
        $this->operator2 = $potentialOp2Arr[ rand( 0, count( $potentialOp2Arr ) - 1 ) ];
        $this->operator1 = rand( 1, $this->operator2 - 1 );
        
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