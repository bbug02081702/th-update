@extends('admin.index')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @section('content')
    <h1 class="text-center"> Quan ly danh sach phong tro</h1>
    <div class="container">
      <a href="{{route('add')}}" type="button" class="btn btn-success">Them</a>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Tieu de</th>
                  <th scope="col">Danh muc</th>
                  <th scope="col">Gia phong</th>
                  <th scope="col">Trang thai</th>
                  <th scope="col">Hanh dong</th>
                </tr>
              </thead>
              <tbody>
                @php
                 $no = 1;
                @endphp
              @foreach($data as $index => $row)
                <tr>
                  <th scope="row">{{$index + $data->firstItem()}}</th>
                  <td>{{$row->title}}</td>
                  <td>{{$row->category_id}}</td>
                  <td>{{$row->price}}</td>
                  <td>{{$row->approve}}</td>
                  <td>
                  <a href="/edit/{{$row->id}}" type="button" class="btn btn-info">Sua</a>
                  <a href="/delete/{{$row->id}}" type="button" class="btn btn-danger">Xoa</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$data->links()}}
          </div>
        </div>
      </div>
    </div>
    @endsection
      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
