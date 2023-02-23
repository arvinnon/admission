@extends('admission.layouts.admission')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    td{
        border: 1px solid black;
        
    }
    th{
        width: 10%;
        text-align:center;
        
    }
    table{
        
    }

    
</style>
<h2>ALL ADMISSIONS</h2>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="border-radius: 10px 0px 0px 0px;">NO.</th>
      <th scope="col">APPLICANT NO.</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT NO.</th>
      <th scope="col">STATUS</th>
      <th scope="col" style="border-radius: 0px 10px 0px 0px;">ACTION</th>
    </tr>
  </thead>
  <tbody>
   
   <tr>
        <td>1</td>
        <td>1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
  <select id="status" name="status">
    <option value="APPROVED"><button class="dropdown-item" type="button">APPROVED</button></option>
    <option value="INCOMPLETE"><button class="dropdown-item" type="button">INCOMPLETE</button></option>
    <option value="OVERRIDE"><button class="dropdown-item" type="button">OVERRIDE</button></option>
  </select></td>
   </tr>
  </tbody>
</table>

<table border="1px;">
  <tr>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Entry Classification</td>
      <td>Email</td>
      <td>Phone</td>
      <td>Address</td>
      <td>Status</td>
      <td>Action</td>
  </tr>

  @foreach ($data as $data);
  <tr>
      <td>{{$data->fname}}</td>
      <td>{{$data->lname}}</td>
      <td>{{$data->entry_classification}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->address}}</td>
      <td>
        <select id="status" name="status">
          <option value="APPROVED"><button class="dropdown-item" type="button">APPROVED</button></option>
          <option value="INCOMPLETE"><button class="dropdown-item" type="button">INCOMPLETE</button></option>
        
        </select></td>
        <td>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 View
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Application Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <h4>First Name: {{ $data->fname}}</h4>
       <h4>Last Name: {{$data->lname}}</h4>
       <h4>Entry Classification: {{ $data->fname}}</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Approve</button>
        <button type="button" class="btn btn-primary">Incomplete</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Edit
 </button>
 
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Edit Application Form</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         ...
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Approve</button>
         <button type="button" class="btn btn-primary">Incomplete</button>
       </div>
     </div>
   </div>
 </div>
 


  </td>
  </tr>


  @endforeach
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


@endsection