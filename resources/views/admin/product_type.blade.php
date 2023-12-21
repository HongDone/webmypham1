@extends('admin_layout')
@section('main_content')
      <div class="container">
        <div class="addproducttype-form">
          <div class="addproducttype-form-content">
           <h2>Create new product type <span id="addproducttype-close">X Close</span></h2>
           <form action="/webmypham/admin/product_type/store" method = "post">
             @method('PATCH')
             <input type="text" name = "type_name" value = "type_name" placeholder="Product Title">
              <button class="cancel-btn">Cancel</button>
              <input type = "submit" class="submit-btn" value = "submit" name = "submit"></input>
            </div>
           </form>
        </div>
      </div>
    </div>

<div class = "container2">
            <div class="product_type">
        <h2 style="display: inline;">Product Type</h2>
        <button id="addproducttype-form" style="width: 250px; margin-bottom: 30px;">Add New Product Type</button>
    </div>
	<table id = "myTable">
          <thead>
             <tr>
                <th style="width: 10%;">ID
                  </th>
                    <th style="width: 20%;">Name</th>
                    <th style="width: 20%;">Created At
                    </th>
                    <th style="width: 15%;">Last Updated At
                    </th>
                    <th style="width: 15%;">Actions</th>
                </tr>
            </thead>
            <tbody>
            	@foreach ($product_type as $product_type)
            	<tr>
            		<td>
            			{{$product_type->type_id}}
            		</td>
            		<td>
            			{{$product_type->type_name}}
            		</td>
            		 <td>
            			{{$product_type->created_at}}
            		</td>
            		 <td>
            			{{$product_type->updated_at}}
            		</td>
                    <td class="product-actions">
                        <i class="fas fa-caret-down   actions-button"></i>
                        <ul class="product-actions-sub-menu">
                            <li>
                                <i class="fas fa-edit    "></i>
                                <span>Edit</span>
                            </li>
                            <li class="delete-button ">
                                <i class="fas fa-trash   "></i>
                                Delete
                            </li>
                        </ul>
                    </td>
            	</tr>
            	@endforeach
            </tbody>
	</table>
</div>
@endsection