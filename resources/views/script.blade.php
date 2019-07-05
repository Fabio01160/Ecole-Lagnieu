@section('script')
    {{-- <script src="../public/js/tinymce/js/tinymce/jquery.tinymce.min"></script> --}}
    <script src="../public/js/tinyfix.js"></script>
    <script src="../public/js/script.js"></script>
    <script>tinymce.init({ selector:'textarea.description' });</script>
@endsection