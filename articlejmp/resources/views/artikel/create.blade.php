<!DOCTYPE html>
<html lang="en">
@include('layout/head')
<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

<div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form method="POST" action="{{ route ('artikel.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                           <div class="col-xl-12">
                                    <input type="number" class="form-control bg-light border-0" placeholder="ID user" style="height: 55px;" name="id_user">
                                </div>
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Judul" style="height: 55px;" name="judul">
                                </div>
                                <div class="col-xl-12">
                                    <input type="file" class="form-control bg-light border-0" placeholder="cover" style="height: 55px;" name="cover">
                                </div>
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="alt" style="height: 55px;" name="alt">
                                </div>
                                <div class="col-xl-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;" name="id_kategori">
                                        <option selected>Select A Service</option>
                                        @foreach ($kategori as $kategori)
                                        <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xl-12">
                                <textarea class="my-editor" name="desc" id="my-editor" cols="114" rows="10"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Buat Kategori</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                @include('layout/script')
</body>
</html>