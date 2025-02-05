<x-app-layout>
    <x-slot name="header">
    </x-slot>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>

<body style="overflow-x:hidden;">
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="main-container">
<form method="GET" action="{{ route('course.index') }}">
@csrf
<h1 style="text-align:center; margin-top:2%;">Courses Record</h1>
 <button class="btn btn-success" type="button" style="margin-left:17px" onclick="openCreateModal()">Create New</button>
<div class="row">
<div class="col m-3">
<table class="table table-hover">
  <thead style="text-align:center;">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody style="text-align:center">
  @foreach ($courses as $course)
    <tr>
      <td>{{ $course->id }}</td>
      <td>{{ $course->name }}</td>
      <td>
      <button class="btn btn-warning" type="button" onclick="openViewModal(
    '{{ $course->name }}')">View</button>

  <button class="btn btn-primary" type="button" onclick="openEditModal('{{ $course->id }}', 
            '{{ $course->name }}')">Update</button>

  <button class="btn btn-danger" type="button" onclick="openDeleteModal({{ $course->id }})">Delete</button>
</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</form>
<div>

<div class="models">
<!-- Modals -->
    @include('course.models')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer style="text-align:center; margin-top:2%; font-size:12px;">
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
</html>
</x-app-layout>
