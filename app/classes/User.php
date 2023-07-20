<?php


namespace App\classes;


class User
{
    public $users=[];

    public function __construct()
    {
        $this->users =[
             0 => [
                 'id'        => 1,
                 'name'      => 'MD Forhad Hossain',
                 'email'     => 'forhad@gmail.com',
                 'password'  => '123123'
             ],
             1 => [
                 'id'        => 2,
                 'name'      => 'Fahim hossain',
                 'email'     => 'fahim@gmail.com',
                 'password'  => '567567'
             ],
             2 => [
                 'id'        => 3,
                 'name'      => 'Sajjad Patwary',
                 'email'     => 'sajjad@gmail.com',
                 'password'  => '789789'
             ],
             3 => [
                 'id'        => 4,
                 'name'      => 'Faisal',
                 'email'     => 'faisal@gmail.com',
                 'password'  => '1212'
             ],

        ];
    }
    public function getAlluser()
    {
        return $this->users;
    }
}