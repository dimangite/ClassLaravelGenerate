<table class="table table-responsive" id="products-table">
    <thead>
        <th>Name</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->name !!}</td>
            <td>{!! $product->unit_price !!}</td>
            <td>{!! $product->quantity !!}</td>
            <td>
                @if ($product->image !== null || $product->image !== '')
                    <img src="{!! asset('/' . $product->image) !!}" style="width:100px; height: auto;" />
                @endif
            </td>
            <td>{!! $product->created_at !!}</td>
            <td>{!! $product->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>