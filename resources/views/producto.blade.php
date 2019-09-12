
@extends('layouts.website')


@section('content')
    <h1>Listado de Productos</h1>
    <h2>Categoria: Todos</h2>
    <table class="table table-striped table-bordered" style="width:100%" id="users-table">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio Venta</th>
            <th>Categoria</th>
            <th>Stock</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('producto.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nombre', name: 'nombre' },
                    { data: 'descripcion', name: 'descripcion', width: '40%' },
                    { data: 'precio_venta', name: 'precio_venta', render: $.fn.dataTable.render.number( ',', '.', 2, 'Q' ), width: '10%'},
                    { data: 'condicion', name: 'condicion' },
                    { data: 'stock', name: 'stock', width: '10%' }
                ],
				language: {
					url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
				}
            });
        });
    </script>

@endpush
