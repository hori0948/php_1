<?php

//親クラス
class Company
{
    //プロパティ宣言
    protected $name;
    protected $address;
    protected $phone;

    //クラス関数定義
    public function getInformation(){
        return [
         $this->name,
         $this->address,
         $this->phone,
        ];
    }

    public function setInfomation($name,$address,$phone){
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    //処理
    public function displayCompany()
    {
        echo '会社名：' .$this->name. "\n";
        echo '住所：' .$this->address. "\n";
        echo '電話番号' .$this->phone. "\n";
    }
}


//子クラスDepartment(部署情報)
class Department extends Company
{
    private $departmentName;
    private $manager;

    public function getDepatrmentInfo(){
        return $this->departmentName;
        return $this->manager;
    }

    public function setDepatrmentInfo($departmentName,$manager){
        $this->departmentName = $departmentName;
        $this->manager = $manager;
    }

    //処理
    public function displayDepartment()
    {
        $this->displayCompany();
        echo '部署名：' .$this->departmentName. "\n";
        echo '部長：' .$this->manager. "\n";
        echo "\n";
    }
}

//インスタンス生成
$dept1 = new Department();
$dept1->setInfomation('サンプルA','市ヶ谷','080-XXXX-XXXX');
$dept1->setDepatrmentInfo('人事','高田');

$dept2 = new Department();
$dept2->setInfomation('サンプルB','池袋','090-XXXX-XXXX');
$dept2->setDepatrmentInfo('総務','田中');

$dept3 = new Department();
$dept3->setInfomation('サンプルC','新宿','070-XXXX-XXXX');
$dept3->setDepatrmentInfo('営業','高橋');

//array関数でまとめる
$departments = array($dept1, $dept2, $dept3);
//foreach文
foreach ($departments as $dept){
    $dept->displayDepartment();
}
?>