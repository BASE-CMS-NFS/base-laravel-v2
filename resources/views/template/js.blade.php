 <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{url('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{url('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{url('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{url('assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <!-- Vendors JS -->
    <script src="{{url('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{url('assets/js/main.js')}}"></script>
    <script src="{{url('assets/vendor/sweetalert2/sweetalert2.min.js')}}"></script>

    <!-- Page JS -->
    <script src="{{url('assets/js/dashboards-analytics.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="{{url('assets/js/loadingoverlay.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

    <script>
      $("#test").click(function(){
        $("div.spanner").addClass("show");
        $("div.overlay").addClass("show");
      });
     </script>

<script>
    function hapus(url){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't delete this data",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#696cff',
            cancelButtonColor: '#ff3e1d',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                location.href=url; 
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            })
        }
</script>

<script>
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });
</script>