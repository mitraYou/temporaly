<?php

class DB {
  
  /* Propaties */
  private int    $id;
  private String $name;
  private String $email;
  private String $password;
  private String $theme;
  private int    $genders_id;
  
  /* functions */
  
  public function 

  // get propaties
  public function get__id()         : int      { return $this->id; }
  public function get__name()       : String   { return $this->name; }
  public function get__email()      : String   { return $this->email; }
  public function get__password()   : String   { return $this->password; }
  public function get__theme()      : String   { return $this->theme; }
  public function get__genders_id() : int      { return $this->genders_id; }
  
  // set propaties
  public function set__id($id)                 { $this->id         = $id; }
  public function set__name($name)             { $this->name       = $name; }
  public function set__email($email)           { $this->email      = $email; }
  public function set__password($password)     { $this->password   = $password; }
  public function set__theme($theme)           { $this->theme      = $theme; }
  public function set__genders_id($genders_id) { $this->genders_id = $genders_id; }

}
