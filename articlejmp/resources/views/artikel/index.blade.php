<!DOCTYPE html>
<html lang="en">
@include('layout/head')
<body>

<div class="container mt-5">

    <div class="col-sm-12">
      <div class="row">
        <div class="col d-flex">
        <button  class="btn btn-primary btn-lg m-2">
    <a class="text-light" href="{{route ('artikel.create')}}">Buat Article</a>
    </button>
        <button  class="btn btn-primary btn-lg m-2">
    <a class="text-light" href="{{route ('kategori.create')}}">Buat Kategori</a>
    </button>
    <div class="pull-right">
                  <a href="#" class="btn btn-danger btn-lg m-2"
                  onclick="document.getElementById('logout-form').submit()">Sign out</a>
</div>
     
      </div>
    
    <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Cover</th>
      <th scope="col">Alt</th>
      <th scope="col">Kategori</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Slug</th>
      <th scope="col">User</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no=0;
    ?>
  @foreach($article as $article)
    <tr>
      <th scope="row">{{$no+=1}}</th>
      <td>{{$article->judul}}</td>
      <td><img src="{{asset('img/' .$article->cover)}}" alt="" style="max-width:100px; max-height:75px;"></td>
      <td>{{$article->alt}}</td>
      <td>{{$article-> kategori -> nama_kategori}}</td>
      <td>{!! Str::limit($article->desc, 200)!!}</td>
      <td>{{$article->slug}}</td>
      <td>{{$article-> user -> name}}</td>
      <td>
      <form method="post" action="{{route('artikel.destroy',$article->id)}}">
          @method('delete')
          @csrf
          <a href="{{ route ('artikel.edit', $article->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
      </td>
    </tr>
  @endforeach  
  </tbody>
  </table>
    </div>

</div>

<form action="{{ route('logout') }}" method="post" id="logout-form" style="display:none;">
     @csrf
</form>
@include('layout/script')
</body>
</html>