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
  
  // get propaties
  public int    get__id()         { return $this->id; }
  public String get__name()       { return $this->name; }
  public String get__email()      { return $this->email; }
  public String get__password()   { return $this->password; }
  public String get__theme()      { return $this->theme; }
  public int    get__genders_id() { return $this->genders_id; }
  
  // set propaties
  public void set__id($id)                 { $this->id         = $id; }
  public void set__name($name)             { $this->name       = $name; }
  public void set__email($email)           { $this->email      = $email; }
  public void set__password($password)     { $this->password   = $password; }
  public void set__theme($theme)           { $this->theme      = $theme; }
  public void set__genders_id($genders_id) { $this->genders_id = $genders_id; }
