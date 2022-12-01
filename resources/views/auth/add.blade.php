@extends('admin.index')

@section('content')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <body>
    <h1 class="text-center"> Sua danh sach phong tro</h1>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="row">
              <form action="{{route('insert')}}" method="post" enctye="mutilpart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="Title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="" placeholder="Nhap title">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <input type="number" name="category_id" class="form-control" id="" placeholder="Nhap category">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="" placeholder="Nhap price">
                </div>
                <div class="mb-3">
                    <label for="approve" class="form-label">Approve</label>
                    <input type="text" name="approve" class="form-control" id="" placeholder="Nhap approve">
                </div>
                <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Dong y</button>
                </div>
                <div class="col-auto">
                <a href="{{route('admin')}}" type="button" class="btn btn-success">Tro ve</a>
                </div>
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
