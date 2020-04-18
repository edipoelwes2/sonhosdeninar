@extends('admin.master.master')

@section('content')
<section class="dash_content_app">
    <header class="dash_content_app_header">
        <h2 class="icon-search">Filtro</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="{{ route('admin.products.index') }}" class="text-orange">Produtos</a></li>
                </ul>
            </nav>

            <a href="{{ route('admin.products.create') }}" class="btn btn-orange icon-user ml-1">Criar Produto</a>
            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    @include('admin.users.filter')

    <div class="dash_content_app_box">
        <div class="dash_content_app_box_stage">
            <table id="dataTable" class="nowrap stripe" width="100" style="width: 100% !important;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th>Tamanho</th>
                        <th>Quantidade</th>
                        <th>Media de Custo</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><a href="{{ route('admin.products.edit', ['product' => $product->id]) }}" class="text-orange">
                            {{ $product->category->name }}-{{ $product->brand->name }}-{{ $product->description  }}</a></td>
                        <td>{{ $product->size }}</td>
                        <td>0</td>
                        <td>R$ 0,00</td>
                        <td>R$ {{ $product->price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection