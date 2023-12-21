<?php
class UserDTO
{
  private $id;
  private $username;
  private $password;
  private $email;
  private $admin;

  public function __construct($username, $password)
  {
    $this->email = $username;
    $this->password = sha1($password);
  }

  public function SetId($id)
  {
    return $this->id = $id;
  }


  public function getId()
  {
    return $this->id;
  }

  public function getUsername()
  {
    return $this->username;
  }


  public function getEmail()
  {
    return $this->email;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function getAdmin()
  {
    return $this->admin;
  }

  public function setAdmin($admin)
  {
    $this->admin = $admin;
  }

  public function setUsername($username)
  {
    $this->username = $username;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setPassword($password)
  {
    $this->password = sha1($password);
  }
}
