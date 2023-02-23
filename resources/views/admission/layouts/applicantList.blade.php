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
<h2>ALL ADMISSIONS</h2>
<h1>hi</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="border-radius: 10px 0px 0px 0px;">NO.</th>
      <th scope="col">APPLICANT NO.</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">COURSE</th>
      <th scope="col">PREV. SCHOOL</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT NO.</th>
      <th scope="col" style="border-radius: 0px 10px 0px 0px;">STATUS</th>
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
        <td></td>
        <td></td>
        <td></td>
   </tr>
  </tbody>
</table>




@endsection