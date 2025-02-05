<x-app-layout>
    <x-slot name="header">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Record Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<div class="header-text">
        <div class="text-content ">
<h2 style="text-align:center; margin-top:3%; margin-bottom:2%; padding-top:2%"><b>Record Management System</b></h2>
            
<div class="d-grid col-6 mx-auto" style="width: 40%">
  <a class="btn btn-primary fs-5 mb-3" href="{{ route('student.index') }}">STUDENTS</a>
  <a class="btn btn-primary fs-5 mb-3" href="{{ route('teacher.index') }}">TEACHERS</a>
  <a class="btn btn-primary fs-5 mb-3" href="{{ route('department.index') }}">DEPARTMENTS</a>
  <a class="btn btn-primary fs-5 mb-5" href="{{ route('course.index') }}">COURSES</a>
</div>
</div>
</div>
</x-slot>
<footer style="text-align:center; margin-top:2%; font-size:12px; padding-bottom:2%;">
 <p>
                <a href="#">Conditions of Use</a> |
                <a href="#">Privacy Notice</a> |
                <a href="#">Consumer Health Data Privacy Disclosure</a> |
                <a href="#">Your Ads Privacy Choices</a>
            </p>
   <p>
     &copy; 1996-2024, [Szabist-University-Islamabad]. All rights reserved.
            </p>
</footer>
</body>
</html>
</x-app-layout>

   