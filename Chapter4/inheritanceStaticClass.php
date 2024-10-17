<?php 
class Student 
{
    public static $grades = ["SD", "SMP", "SMK"];
    private static $totalStudents = 0;

    public static function motto()
    {
        return " Learn PHP OOP ";
    }

    public static function count()
    {
        return self::$totalStudents;
    }

    public static function addStudent()
    {
        return self::$totalStudents++;
    }
}

echo Student::$grades[2] . "<br/>";
echo Student::motto() . "<br/>";
// SMK
// Learn PHP OOP

echo Student::count() . "<br/>";
// 0

Student::addStudent() . "<br/>";

echo Student::count() . "<br/>";
// 1


class partTimeStudent extends Student
{

}

echo partTimeStudent::$grades[1] . "<br/>";
echo partTimeStudent::motto() . "<br/>";

partTimeStudent::$grades[] = "Alumni";
echo implode(', ', Student::$grades) . "<br/>";

Student::addStudent() . "<br/>";
partTimeStudent::addStudent() . "<br/>";

echo Student::count() . "<br/>";
echo Student::count() . "<br/>";

?>