<!DOCTYPE html>
<html lang="en">
@include('layout/head')
<body>

<div class="container mt-5">

    <div class="col-sm-12">
    <button  class="btn btn-primary btn-lg mb-5" type="">
    <a class="text-light" href="{{route ('kategori.create')}}">Buat Kategori</a>
    </button>
    <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no=0;
    ?>
  @foreach($kategori as $kategori)
    <tr>
      <th scope="row">{{$no+=1}}</th>
      <td>{{$kategori->nama_kategori}}</td>
      <td>
      <form method="post" action="{{route('kategori.destroy',$kategori->id)}}">
          @method('delete')
          @csrf
          <a href="{{ route ('kategori.edit', $kategori->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
      </td>
    </tr>
  @endforeach  
  </tbody>
  </table>
    </div>

</div>


@include('layout/script')
</body>
</html>