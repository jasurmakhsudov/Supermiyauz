@if(session('errors')||(session('success')))
    {{-- @foreach($errors->all() as $error) --}}
        <div id="messages" class="alert 
        @if(session('errors'))
            alert-danger
        @elseif(session('success'))
            alert-success
        @endif
        alert-dismissible fade show" role="alert">
            <strong>
                {{ session('errors') }}
                {{ session('success') }}
            </strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    {{-- @endforeach --}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script>
      $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-dismissible").alert('close');
        });
    </script>
@endif
