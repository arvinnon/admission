@extends('admission.layouts.admission')
@section('content')
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
<h2>GRADUATE SCHOOL</h2>
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
        <td></td>
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
        <td></td>
   </tr>
  </tbody>
</table>

<table border="1px;">
  <tr>
      <td>No.</td>
      <td>Applicant No.</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Email</td>
      <td>Phone </td>
      <td>Address </td>
      <td>Status </td>
      <td>Action </td>
  </tr>

  @foreach ($data as $data);
  <tr>
      <td></td>
      <td></td>
      <td>{{$data->fname}}</td>
      <td>{{$data->lname}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->address}}</td>
      <td>
        <select id="status" name="status">
          <option value="APPROVED"><button class="dropdown-item" type="button">APPROVED</button></option>
          <option value="INCOMPLETE"><button class="dropdown-item" type="button">INCOMPLETE</button></option>
          <option value="OVERRIDE"><button class="dropdown-item" type="button">OVERRIDE</button></option>
        </select>
      </td>
      <td>
        <select id="status" name="status">
          <option value="VIEW"><button class="dropdown-item" type="button">VIEW</button></option>
          <option value="EDIT"><button class="dropdown-item" type="button">EDIT</button></option>
        </select>
      </td>
  </tr>

  @endforeach
</table>

@endsection