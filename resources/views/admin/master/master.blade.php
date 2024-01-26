<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta property="og:url"           content="{{ url()->current() }}" />
  <meta property="og:type"          content="{{ $systemDataAll->siteName }}" />
  <meta property="og:title"         content="{{ $systemDataAll->siteName }}." />
  <meta property="og:description"   content="{!!  substr(strip_tags($systemDataAll->siteAbout), 0, 300) !!}" />
  <meta property="og:image"         content="{{asset('/')}}{{ $systemDataAll->siteLogo }}"  />
  <meta property="og:image:width" content="720" />
  <meta property="og:image:height" content="720" />

  <!-- Favicons -->
  <link href="{{asset('/')}}{{ $systemDataAll->siteIcon }}" rel="icon">
  <link href="{{asset('/')}}{{ $systemDataAll->siteIcon }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/')}}public/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/')}}public/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('/')}}public/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('/')}}public/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{asset('/')}}public/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{asset('/')}}public/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('/')}}public/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/')}}public/admin/assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->

  @include('admin.include.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.include.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">


    @yield('body')

  </main><!-- End #main -->
 <!-- ======= Footer ======= -->

 @include('admin.include.footer')
 <!-- End Footer -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="{{asset('/')}}public/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
 <script src="{{asset('/')}}public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="{{asset('/')}}public/admin/assets/vendor/chart.js/chart.umd.js"></script>
 <script src="{{asset('/')}}public/admin/assets/vendor/echarts/echarts.min.js"></script>
 <script src="{{asset('/')}}public/admin/assets/vendor/quill/quill.min.js"></script>
 <script src="{{asset('/')}}public/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
 <script src="{{asset('/')}}public/admin/assets/vendor/tinymce/tinymce.min.js"></script>
 <script src="{{asset('/')}}public/admin/assets/vendor/php-email-form/validate.js"></script>

 <!-- Template Main JS File -->
 <script src="{{asset('/')}}public/admin/assets/js/main.js"></script>
 <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

 <script type="text/javascript">
    function pdeleteTag(id) {
        swal({
            title: 'Are you sure?',
            text: "Your data will  be deleted permanently !",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swal(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
            }
        })
    }




</script>
</body>

</html>
