@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.blog.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="blogs-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Excerpt</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
    </table>

@endsection

@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <style>
        td.details-control {
            background: url('https://datatables.net/examples/resources/details_open.png') no-repeat center center;
            cursor: pointer;
        }
        tr.shown td.details-control {
            background: url('https://datatables.net/examples/resources/details_close.png') no-repeat center center;
        }
    </style>
@endpush

@push('scripts')
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        /* Formatting function for row details - modify as you need */
        function format ( d ) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                '<tr>'+
                '<td>Sizes:</td>'+
                '<td>'+d.sizes+'</td>'+
                '</tr>'+
                '</table>';
        }
        $(function() {
            var table = $('#blogs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.blog.datatable.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'description', name: 'description' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' }
                ]
            });

        });



    </script>
@endpush
