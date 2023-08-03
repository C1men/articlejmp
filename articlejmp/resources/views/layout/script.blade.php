<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('JMP Biru/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('JMP Biru/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('JMP Biru/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('JMP Biru/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('JMP Biru/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('JMP Biru/js/main.js')}}"></script>

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
    CKEDITOR.replace('my-editor', options);
</script>