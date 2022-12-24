</div>
</div>
</div>
</main>
{{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> --}}
<script src="{{asset('assets/dashboard/js/bootstrap.min.js')}}" ></script>
  
<!-- Editor  -->
{{-- <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
  var quill = new Quill('#editor', {
    modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline'],
      // ['link', 'blockquote', 'code-block', 'image'],
      ['link', 'blockquote'],
      [{ list: 'ordered' }, { list: 'bullet' }],
      ['image', 'code-block']
    ]
  },
          theme: 'snow'
  });
 quill.on('text-change', function(delta, oldDelta, source) {
      document.getElementById("quill_html").value = quill.root.innerHTML;
  });
</script> --}}
{{-- <script>
var quill = new Quill('#editor', {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline'],
      ['image', 'code-block']
    ]
  },
  placeholder: 'Compose an epic...',
  theme: 'snow'  // or 'bubble'
});
  </script> --}}
  {{-- <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
  <script> 
    var editor = new FroalaEditor('#editor');
</script>   --}}
{{-- <script
type="text/javascript"
src='https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js'
referrerpolicy="origin">
</script>
<script type="text/javascript">
    tinymce.init({
      selector: '#editor',
      width: 600,
      height: 300,
      plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'template', 'help'
      ],
      toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
      menu: {
        favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
      },
      menubar: 'favs file edit view insert format tools table help',
      content_css: 'css/content.css'
    });
    </script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <link href="https://cdn.quilljs.com/1.1.6/quill.snow.css" rel="stylesheet">
  <script src="https://cdn.quilljs.com/1.1.6/quill.js"></script>
  <script>
    var quill = new Quill('#editor', {
      modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline'],
      ['image', 'code-block']
    ]
  },
  placeholder: 'Compose an epic...',
  theme: 'snow'  // or 'bubble'
    });
  </script> --}}
  {{-- <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'details' );
</script> --}}
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
<script>
  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
{{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css'>
<script src='https://code.jquery.com/jquery-3.2.1.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js'></script><script  src="./script.js"></script>
<script>
  $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
</script> --}}
</body>
</html>