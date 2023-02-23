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
<h2>COLLEGE</h2>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="border-radius: 10px 0px 0px 0px;">NO.</th>
      <th scope="col">APPLICANT NO.</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">STATUS</th>
      <th scope="col" style="border-radius: 0px 10px 0px 0px;">ACTION</th>
    </tr>
  </thead>
  <tbody>
   <tr>
        <td>0000</td>
        <td>{{$data->lname}}</td>
        <td>{{$data->fname}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->address}}</td>
   
  <select id="status" name="status">
    <option value="APPROVED"><button class="dropdown-item" type="button">APPROVED</button></option>
    <option value="INCOMPLETE"><button class="dropdown-item" type="button">INCOMPLETE</button></option>
    <option value="OVERRIDE"><button class="dropdown-item" type="button">OVERRIDE</button></option>
  </select></td>
        <td></td>
   </tr>
  </tbody>
</table>



@endsection