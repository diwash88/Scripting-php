<?php 
//prittier for code level
interface HasLockerBox{
    
  
}


class bankAccount {
     //private $amount;
     protected $amount;
     protected $interestRate;
    




     public function__construct($openingBalance){    
        $this->amount = $openingBalance;

     }


     public  function withdraw($withDrawAmount){
        if($withDrawAmount>$this->amount){
            echo (" insufficient balcance");
            return ;
        }
        $this-> amount =$this->amount-$withDrawAmount;
        echo " withdraw account $withDrawAmount ";
     }
     public function deposit($depositAccount){
        $this->amount = $depositAccount;

     }
     public function checkBalance(){
        echo " Your balance is ",$this->amount;
     }
     public function calculateInterest($year){
        echo "Total interest ". ($this->amount *$year *$this->interestRate)/100;
    }

}
class FixedAccount extends  bankAccount {
    protected $interestRate = 12;


    
  public function withdraw($withDrawAmount){
    echo " Cannot withdraw in the 1 lakh in saving ";
    return;
    }
}

class savingAccount extends bankAccount {
    public function__construct($openingBalance){
        $this-> interestRate = 6;
        parent::function__construct($openingBalance);
    }
    public function withdraw($withDrawAmount){
        if($withDrawAmount > 10000){
        echo " Cannot withdraw in the 1 lakh in saving ";
        return;
        }
        perent::withdraw($withDrawAmount);

    }    

}
$DiwashBankAccount = new savingAccount(100000);
$DiwashBankAccount ->withdraw(3000);

//$DiwashBankAccount = new BankAccount(100000);

//$DiwashBankAccount-> withdraw(2000);
$DiwashBankAccount->checkBalance();
//$AkashBankAccount = new BankAccount();
//$DiwashBankAccount->deposit(4000);
//$DiwashBankAccount->checkBalance();
$DiwashBankAccount -> calculateInterest(2);


 


?>