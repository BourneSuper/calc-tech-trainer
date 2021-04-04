<?php
namespace BS\CTT;

class QAndABase implements IQAndA {
    
    public $name;
    public $condition;
    public $description;
    
    protected $operator1;
    protected $operator2;
    protected $operator3;
    
    protected $answer;
    
    private $operator1Arr;
    private $operator2Arr;
    private $operator3Arr;
    
    public function __construct( ){
        $this->name = '';
        $this->condition = '';
        $this->description = '';
        
        $this->operator1 = 0;
        $this->operator2 = 0;
        $this->operator3 = 0;
        $this->answer = '';
        
//         $operator1Arr = [];
//         $operator2Arr = [];
//         $operator3Arr = [];
    }
    
    /**
     * 随机生成数字
     * @param int $maxNum
     * @param int $prefix
     * @param int $postfix
     */
    public function generateNum( $maxNum, $prefix = null, $postfix = null ){
        $num = rand( 1, $maxNum );
        
        if( $prefix != null && is_numeric($prefix) ){
            $num = $prefix . $num;
        }
        
        if( $postfix != null && is_numeric($postfix) ){
            $num .= $postfix;
        }
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\IQAndA::displayQuestion()
     */
    public function displayQuestion() {
        // TODO Auto-generated method stub
        
    }

    /**
     * {@inheritDoc}
     * @see \BS\IC\IQAndA::displayAnswer()
     */
    public function displayAnswer() {
        // TODO Auto-generated method stub
        
    }

    
    
    
    
    
}

?>