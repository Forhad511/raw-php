<?php


namespace App\classes;
use App\classes\User;

class Auth
{
    public $user , $users, $status = true,$email,$password;

    public function __construct($post=null)
    {
        $this->email   = $post['email'];
        $this->password = $post['password'];
    }

    public function index()
    {
        header('Location: action.php?page=login');
    }
    public function login()
    {
       $this->user = new User();
      $this->users = $this->user->getAlluser();
      foreach ($this->users as $user)
      {
          if ($user['email'] == $this->email && $user['password'] == $this->password)
          {
              session_start();
              $_SESSION['user_id']   = $user['id'];
              $_SESSION['user_name'] = $user['name'];


             header('Location: action.php?page=home');
             $this->status = false;
          }
      }
      if ($this->status)
      {
          session_start();
          $_SESSION['message'] = 'Sorry..Invalid Credential.';
          header('Location: action.php?page=login');
      }

    }
    public function logout()
    {
        session_start();
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);

        header('Location: action.php?page=login');
    }
}