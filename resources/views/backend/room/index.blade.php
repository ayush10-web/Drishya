@extends('backend.layouts.master')
@section('content')

   
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

@endpush