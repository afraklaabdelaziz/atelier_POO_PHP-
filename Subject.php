<?php


/**
 * Class Subject
 */
class Subject
{
    public $code;
    public $name;
    /**
     * @var Student[]
     */
    public $students = [] ;

    // TODO Generate getters and setters


    // TODO Generate constructor for all attributes. $students argument of the constructor can be empty
    public function __construct($_code, $_name){
      $this->code = $_code;
      $this->name = $_name;
    }
    /**
     * Method accepts student name and number, creates instance of the Student class, adds inside $students array
     * and returns created instance
     *
     * @param string $name
     * @param string $studentNumber
     * @return \Student
     */
    public function addStudent(string $name, string $studentNumber): Student
    {
      $std = new Student($name, $studentNumber);
      return $std;
        // TODO Implement method according to method annotation
    }
}
