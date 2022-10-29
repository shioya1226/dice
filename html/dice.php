<?php
class Calc{
     public $number1;
     public $number2;
     public function __construct(){
         $this->number1=rand(1,6);
         $this->number2=rand(1,6);
     }
  public function numberFirst(){
      return $this->number1;
  }   
  public function numberSecond(){
    return $this->number2;
}   
  public function sum(){
      echo $this->number1 + $this->number2;
  }
  public function sameNumber(){
      if($this->number1==$this->number2){
          echo "ゾロ目来たで";
      }else{
          echo "";
      }
  }
}
$sum=new Calc();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>サイコロ</title>
</head>
<body>
    <h1>サイコロ</h1>
    <p>サイコロの目は「<?php echo $sum->numberFirst();?>」「<?php echo $sum->numberSecond();?>」でした</p>
     <p>サイコロの合計値は「<?php $sum->sum();?>」でした</p>
     <p><?php $sum->sameNumber();?></p>
    <p><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>">もう一度</a></p>
</body>