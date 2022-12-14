@extends('admin.index')

@section('content')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <body>
    <h1 class="text-center"> Sua danh sach nguoi dung</h1>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="row">
              <form action="/update/user/{{$users->id}}" method="post" enctye="mutilpart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="{{$users->name}}" name="name" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{$users->email}}" name="email" class="form-control" id="" >
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">So dien thoai</label>
                    <input type="text" value="{{$users->phone}}" name="phone" class="form-control" id="" >
                </div>
                <!-- <div class="mb-3">
                    <label for="role" class="form-label">Mat khau</label>
                    <input type="password" value="{{$users->password}}" name="password" class="form-control" id="">
                </div> -->
                <div class="mb-3">
                    <label for="role" class="form-label">Quyen</label>
                    <input type="text" value="{{$users->role}}" name="role" class="form-control" id="">
                </div>
               
                <button type="submit" class="btn btn-primary">Dong y</button>
               
                <a href="{{route('manager/user')}}" type="button" class="btn btn-success">Tro ve</a>
              </form>
          </div>
        </div>
      </div>
    </div>
    <body>
      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>
@endsection
