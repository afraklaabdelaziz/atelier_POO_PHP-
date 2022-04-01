<?php


/**
 * Class Student
 */
class Student
{
    // public string $name;
    // public string $studentNumber;
    //---
    private string $name;
    private string $studentNumber;

    // TODO Generate getters and setters for both arguments
    //getterts & setters
    public function getName(){
      return $this->name;
    }
    public function getStudentNumber(){
      return $this->getStudentNumber;
    }

    public function setName($_name){
      $this->name = $_name;
    }
    public function setStudentNumber($_studentNumber){
      $this->studentNumber = $_studentNumber;
    }


    // TODO Generate constructor with both arguments.
    public function __construct($_name, $_studentNumber){
      $this->name = $_name;
      $this->studentNumber = $_studentNumber;
    }
}
