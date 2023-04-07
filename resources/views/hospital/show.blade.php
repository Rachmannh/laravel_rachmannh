@extends('layouts.master')
@section('title')
        Halaman Data Rumah Sakit
    @endsection

    @section('content')
    <a href="/cast/create" class="btn btn-primary btn-sm my-3">Add Hospital</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($hospital as $key=> $item)
              <tr> 
                <td>{{$key + 1}}</td>
                <td>{{$item->nama_rumah_sakit}}</td>
                <td>
                    <form action="/hospital/{{$item->id}}" method="POST">
                      @csrf
                      @method('delete')
                      <a href="/hospital/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                      <a href="/hospital/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

                      <input type="submit" value="delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
              </tr>
          @empty
              
          @endforelse
        </tbody>
      </table>
    @endsection