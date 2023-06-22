<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Form</title>
    <style media="screen">
      .error{
        color:red;
      }
    </style>
  </head>
  <body>
    <?php
       $name=$fname=$course=$semester=$subjects="";

       if ($_SERVER["REQUEST_METHOD"]=="POST") {
         if (empty($_POST["name"])) {
           echo "<span class=\"error\">Error: Name Required</span>";
         }
         else{
           $name=val($_POST["name"]);
           $fname=val($_POST["fname"]);
           $course=val($_POST["course"]);
           $semester=val($_POST["semester"]);
           $subjects=val($_POST["subjects"]);
         }
       }
       function val($data){
         $data=trim($data);
         $data=stripslashes($data);
         $data=htmlspecialchars($data);

         return $data;
       }
     ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <table class="table table-success table-striped-columns table-hover">
        <tr>
          <th class="text-center" colspan="2"><h2>Examination Form</h2></th>
        </tr>
        <tr>
          <th>Name: </th>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <th>Father's name: </th>
          <td><input type="text" name="fname"></td>
        </tr>
        <tr>
          <th>Course: </th>
          <td><select name="course">
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="B.Sc.">B.Sc.</option>
            <option value="B.Com.">B.Com.</option>
          </select></td>
        </tr>
        <tr>
          <th>Semester: </th>
          <td><input type="radio" name="semester" value="1">1
          <input type="radio" name="semester" value="3" checked>3
          <input type="radio" name="semester" value="5">5</td>
        </tr>
        <tr>
          <th>Subjects: </th>
          <td><textarea name="subjects" rows="8" cols="80"></textarea></td>
        </tr>
        <tr>
          <td><input class="btn btn-success" type="submit" name="submit" value="Submit">
              <input class="btn btn-danger" type="reset" name="reset" value="Reset"></td>
        </tr>
      </table>
    </form>
    <br><hr><br>
    <?php
       echo "Entered Details:- <br>";
       echo "Name: ".$name . "<br>";
       echo "Father's Name: ".$fname . "<br>";
       echo "Course: ".$course . "<br>";
       echo "Semester: ".$semester . "<br>";
       echo "Subjects: ".$subjects . "<br>";
    ?>
  </body>
</html>
