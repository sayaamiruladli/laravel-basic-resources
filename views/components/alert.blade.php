@if ($errors->any())
  @foreach ($errors->all() as $error)
  <div class="notification is-danger">
    <button class="delete"></button>
    {{ $error }}
  </div>
  @endforeach
@endif


@if(session('danger'))

  @foreach(session('danger') as $danger)
    <div class="notification is-danger">
      <button class="delete"></button>
      {{ $danger }}
    </div>
  @endforeach

@endif

<script>
  
  

  $(document).ready(function(){
      $('.delete').click(function(){
        $(this).parent().fadeOut();
      });
  });

</script>