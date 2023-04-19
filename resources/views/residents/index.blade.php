@extends('layouts.index')

@section('content')
<button type="button" class="btn btn-primary btn-sm show-btn" data-bs-toggle="modal" data-bs-target="#create-modal"><i class="fa fa-plus" aria-hidden="true"></i> </button> <label for="">Add New Resident</label>
<table class="table table-hover" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($residents as $key => $resident)
        <tr>
            <th scope="row">{{$resident->id}}</th>
            <td>{{$resident->name}}</td>
            <td>{{$resident->address}}</td>
            <td>{{$resident->mobile}}</td>
            <td>
            <button type="button" class="btn btn-primary btn-sm show-btn" data-key="{{ $key }}" data-bs-toggle="modal" data-bs-target="#show-modal"><i class="fa fa-eye" ></i></button>      
                <button type="button" class="btn btn-warning btn-sm edit-btn" data-key="{{ $key }}" data-bs-toggle="modal" data-bs-target="#edit-modal"><i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-danger  btn-sm btn-delete" data-id= "{{ $resident->id }}" ><i   class="fa fa-trash" ></i></button>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


<!-- Modal -->
@include('residents.modals.create-modal')
@include('residents.modals.show-modal')
@include('residents.modals.edit-modal')

@endsection 

@section('page-script')
@include('residents.modals.modal-script')
@endsection