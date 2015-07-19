<?php

class HelloController extends Controller{
  public function hello(){
    $this->view('hello');
  }
}
