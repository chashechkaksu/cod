<?php
class User{
    private ?string $middlename=null;
    public function __construct(
        private string $name,
        private string $familia,
        private string $birth,
    ){}

    public function getName(): string
    {
        return $this->name;
    }

    public function getFamilia(): string
    {
        return $this->familia;
    }

    public function getBirth(): string
    {
        return $this->birth;
    }

    public function getMiddlename():?string
    {
        return $this->middlename;
    }
    
    public function changeMiddlename(string $middlename):void
    {
        $this->middlename = $middlename;
    }

    public function getFullName():string
    {
        return $this-> familia . " " . mb_substr($this->name,0,1) . "." . mb_substr($this->middlename,0,1);
    }
}


$user1=new User(
    birth: '2000-01-01',
    name: 'Антон',
    familia: 'Онешко',
);
$user2=new User('Обломов','Олег', '2003-09-01');
$user3=new User('Симпатулин', 'Симпатуль', '2004-02-05');
$user3->changeMiddlename('Игнатьевич');
echo $user1->getFullName();
echo $user2->getFullName();
echo $user3->getFullName();

