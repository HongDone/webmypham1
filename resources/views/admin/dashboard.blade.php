@extends('admin_layout')
@section('main_content')
    <div class="container2">
        <div class="dashboard">
            <div class="heading">
                <h2 style="display: inline;">Dashboard</h2>
                <div id="change-date-period">
                    <span>Change Date Period</span>
                    <select name="select-date-period-box" id="select-period">
                        <option value="default">All Time</option>
                        <option value="today">Today</option>
                        <option value="last-day">Last Day</option>
                        <option value="last-week">Last Week</option>
                        <option value="last-2-weeks">Last 2 Weeks</option>
                        <option value="last-month">Last Month</option>
                        <option value="last-3-months">Last 3 Months</option>
                        <option value="last-6-months">Last 6 Months</option>
                    </select>
                </div>
            </div>
            <div id="gerenal-infor">
                <div class="sub-container  custom-background">
                    <p class="cell-title">Active Customers</p>
                    <p class="value" id="active-customers">3</p>
                </div>
                <div class="sub-container  custom-background">
                    <p class="cell-title">Active Products</p>
                    <p class="value" id="active-products">10</p>
                </div>
                <div class="sub-container  custom-background">
                    <p class="cell-title">Orders</p>
                    <p class="value" id="orders">12</p>
                </div>
                <div class="sub-container  custom-background">
                    <p class="cell-title">Total Income</p>
                    <p class="value" id="total-income">300$</p>
                </div>
            </div>
            <div id=recently-infor>
                <div id="latest-orders" class="custom-background">
                    <h4 class="title-of-recentlty-infors">Latest Orders</h4>
                    <ul id="latest-orders-list">
                        <li class="latest-order-infor">
                            <div class="component-order-infor">
                                <span class="order-number">Order #13</span>
                                <span class="number-of-items">1 items</span>
                                <p class="created-day">Created today</p>
                                <p class="owner">By User@1234</p>
                            </div>
                            <div class="total-price">
                                12.00$
                            </div>
                        </li>
                        <li class="latest-order-infor">
                            <div class="component-order-infor">
                                <span class="order-number">Order #12</span>
                                <span class="number-of-items">1 items</span>
                                <p class="created-day">Created last Day</p>
                                <p class="owner">By User@1234</p>
                            </div>
                            <div class="total-price">
                                10.00$
                            </div>
                        </li>
                        <li class="latest-order-infor">
                            <div class="component-order-infor">
                                <span class="order-number">Order #11</span>
                                <span class="number-of-items">1 items</span>
                                <p class="created-day">Created 2 days ago</p>
                                <p class="owner">By User@1234</p>
                            </div>
                            <div class="total-price">
                                14.00$
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="latest-customers" class="custom-background">
                    <h4 class="title-of-recentlty-infors">Latest Customers</h4>
                    <ul id="latest-customers-list">
                        <li class="latest-customer-infor">
                            <div class="customer-icon-container">
                                <i class="fas fa-user-alt   "></i>
                            </div>
                            <div class="customer-infors">
                                <h4>User@1234</h4>
                                <p>liliana123@gmail.com</p>
                            </div>
                        </li>
                        <li class="latest-customer-infor">
                            <div class="customer-icon-container">
                                <i class="fas fa-user-alt   "></i>
                            </div>
                            <div class="customer-infors">
                                <h4>User@1234</h4>
                                <p>liliana123@gmail.com</p>
                            </div>
                        </li>
                        <li class="latest-customer-infor">
                            <div class="customer-icon-container">
                                <i class="fas fa-user-alt   "></i>
                            </div>
                            <div class="customer-infors">
                                <h4>User@1234</h4>
                                <p>liliana123@gmail.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection