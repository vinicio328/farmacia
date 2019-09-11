@extends('layouts.website')


@section('content')
    <h1>Listado de Productos</h1>
    <h2>Categoria: Todos</h2>
    <table class="table table-striped table-bordered" style="width:100%" id="users-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio Venta</th>
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
                    { data: 'precio_venta', name: 'precio_venta' },
                    { data: 'stock', name: 'stock' }
                ],
				language: {
					url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
				}
            });
        });
    </script>

@endpush
