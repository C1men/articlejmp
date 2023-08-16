<!DOCTYPE html>
<html lang="en">
@include('layout/head')
<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

<div class="col-lg-12">
                    <div class="bg-primary rounded h-100 d-flex justify-content-center align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form method="POST" action="{{ route ('kategori.update', $kategori->id)}}">
                            @csrf
                            @method('put')
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Kategori" style="height: 55px;" name="nama_kategori" value="{{$kategori->nama_kategori}}">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Edit Kategori</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                @include('layout/script')
</body>
</html>