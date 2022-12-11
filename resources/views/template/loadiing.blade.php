@push('js')
    <script>
      $(document).ready(function(){
      // Show full page LoadingOverlay
      $.LoadingOverlay("show");

      // Hide it after 3 seconds
    setTimeout(function(){
      $.LoadingOverlay("hide");
    }, 1000);

  });
</script>
@endpush