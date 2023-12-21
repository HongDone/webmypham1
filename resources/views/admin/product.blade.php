@extends('admin_layout')
@section('main_content')
<div class="container2">
    <div class="products">
        <h2 style="display: inline;">Products</h2>
        <button id="addproduct-form">Add New Product</button>
    </div>
    <div class="view-and-search">
        <div class="view-number">
            <span>Show</span>
            <select name="number-show" id="number-show">
                <option value="5">5 products</option>
                <option value=10>10 products</option>
                <option value=25>25 products</option>
                <option value=50>50 products</option>
            </select>
            <span>/page</span>
        </div>
        <div class="search-box">
            <span>Search</span>
            <input type="text" class="search-term" id="products-search-term">
        </div>
    </div>
    <div class="table-container" id="products-table-container">
        <table border=0 id="products-table">
            <thead>
                <tr>
                    <th style="width: 10%;" id="product-id">ID
                        <span class="sorting">
                            <i class="fas fa-sort-up  toggle-actived"></i>
                            <i class="fas fa-sort-down  "></i>
                        </span>
                    </th>
                    <th style="width: 20%;" id="image">Image</th>
                    <th style="width: 20%;" id="title">Title
                        <span class="sorting">
                            <i class="fas fa-sort-up    "></i>
                            <i class="fas fa-sort-down    "></i>
                        </span>
                    </th>
                    <th style="width: 15%;" id="price">Price
                        <span class="sorting">
                            <i class="fas fa-sort-up    "></i>
                            <i class="fas fa-sort-down    "></i>
                        </span>
                    </th>
                    <th style="width: 20%;" id="prod-latest-update">Latest Update
                        <span class="sorting">
                            <i class="fas fa-sort-up    "></i>
                            <i class="fas fa-sort-down    "></i>
                        </span>
                    </th>
                    <th style="width: 15%;" id="product-actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="product-id">SP001</td>
                    <td class="product-img-container"> <img
                            src="https://bizweb.dktcdn.net/100/443/867/products/dau-goi-buoi-cocoon-giam-rung-kich-thich-moc-toc-500ml.png?v=1693814136533"
                            alt="" class="product-descript-img"></td>
                    <td class="product-title" style="text-align: left;">Tinh dầu tràm tẩy tế bào chết 500ml</td>
                    <td class="product-price">200000</td>
                    <td class="product-latest-update">2023-20-10 15:30:56</td>
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
                <tr class="stripped-row">
                    <td class="product-id">SP002</td>
                    <td class="product-img-container"> <img
                            src="https://bizweb.dktcdn.net/100/443/867/products/dau-goi-buoi-cocoon-giam-rung-kich-thich-moc-toc-500ml.png?v=1693814136533"
                            alt="" class="product-descript-img"></td>
                    <td class="product-title" style="text-align: left;">Tinh dầu tràm tẩy tế bào chết 500ml</td>
                    <td class="product-price">200000</td>
                    <td class="product-latest-update">2023-20-10 15:30:56</td>
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
                <tr>
                    <td class="product-id">SP003</td>
                    <td class="product-img-container"> <img
                            src="https://bizweb.dktcdn.net/100/443/867/products/dau-goi-buoi-cocoon-giam-rung-kich-thich-moc-toc-500ml.png?v=1693814136533"
                            alt="" class="product-descript-img"></td>
                    <td class="product-title" style="text-align: left;">Tinh dầu tràm tẩy tế bào chết 200ml</td>
                    <td class="product-price">50000</td>
                    <td class="product-latest-update">2023-20-10 15:30:56</td>
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
                <tr class="stripped-row">
                    <td class="product-id">SP004</td>
                    <td class="product-img-container"> <img
                            src="https://bizweb.dktcdn.net/100/443/867/products/dau-goi-buoi-cocoon-giam-rung-kich-thich-moc-toc-500ml.png?v=1693814136533"
                            alt="" class="product-descript-img"></td>
                    <td class="product-title" style="text-align: left;">Tinh dầu tràm tẩy tế bào chết 500ml</td>
                    <td class="product-price">500000</td>
                    <td class="product-latest-update">2023-20-10 15:30:56</td>
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
                <tr>
                    <td class="product-id">SP005</td>
                    <td class="product-img-container"> <img
                            src="https://bizweb.dktcdn.net/100/443/867/products/dau-goi-buoi-cocoon-giam-rung-kich-thich-moc-toc-500ml.png?v=1693814136533"
                            alt="" class="product-descript-img"></td>
                    <td class="product-title" style="text-align: left;">Tinh dầu tràm tẩy tế bào chết 500ml</td>
                    <td class="product-price">100000</td>
                    <td class="product-latest-update">2023-20-10 15:30:56</td>
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
            </tbody>
        </table>
    </div>
    <div class="pagination-container">
        <div class="showing-status">
            <span>Showing from </span>
            <span class="page-value">1 to 5</span>
            <span> of products</span>
        </div>
        <div class="pagingation-nav-container">
            <ul class="pagination-nav">
                <li class="control-button  disabled" id="previous-button">
                    <a href="">Prev</a>
                </li>
                <li class="page-item actived">
                    <a href="">1</a>
                </li>
                <li class="page-item ">
                    <a href="">2</a>
                </li>
                <li class="page-item ">
                    <a href="">3</a>
                </li>
                <li class="control-button  " id="next-button">
                    <a href="">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
