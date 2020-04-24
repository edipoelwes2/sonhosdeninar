@extends('admin.master.master')

@section('content')

    <div>
        <table id="" class="myTable nowrap" width="100" style="width: 100% !important;">
    
            <div>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </div>
        
        </table>
    </div>

<div>
    <button id="addItem" class="btn">+</button>
</div>



@push('js')
<script>
    $(function () {

        let itemTemplate = `<tr>
                                <td>
                                    <select class="btn btn-success">
                                        <option>Selecione um produto</option>
                                        @foreach($products as $product)
                                            <option>{{ $product->category->name }} / {{ $product->brand->name }} / 
                                                {{ $product->description }} / {{ $product->size }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="number" placeholder="quantidade">
                                </td>

                                <td>
                                    <input type="number" placeholder="preço">
                                </td>

                                <td>
                                    <input type="number" placeholder="subTotal">
                                </td>

                                <td>
                                    <button class="removeItem btn">-</button>
                                </td>
                                <hr>
                            </tr>`;

        $("#addItem").on("click", function () {
            $(".myTable").find("tbody").append(itemTemplate);
        });

        $(document).on("click", ".removeItem", function () {
            $(this).closest("tr").remove();

        })

    });
</script>
@endpush

@endsection