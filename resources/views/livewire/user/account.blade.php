<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="/" rel="nofollow">
                    <i class="fi-rs-home mr-5">
                    </i>
                    Home
                </a>
                <span>
                </span>
                Pages
                <span>
                </span>
                My Account
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a aria-controls="dashboard" aria-selected="false"
                                            class="nav-link active" data-bs-toggle="tab" href="#dashboard"
                                            id="dashboard-tab" role="tab">
                                            <i class="fi-rs-settings-sliders mr-10">
                                            </i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-controls="orders" aria-selected="false" class="nav-link"
                                            data-bs-toggle="tab" href="#orders" id="orders-tab" role="tab">
                                            <i class="fi-rs-shopping-bag mr-10">
                                            </i>
                                            Orders
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a aria-controls="address" aria-selected="true" class="nav-link"
                                            data-bs-toggle="tab" href="#address" id="address-tab"
                                            role="tab">
                                            <i class="fi-rs-marker mr-10">
                                            </i>
                                            My Address
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-controls="account-detail" aria-selected="true" class="nav-link"
                                            data-bs-toggle="tab" href="#account-detail" id="account-detail-tab"
                                            role="tab">
                                            <i class="fi-rs-user mr-10">
                                            </i>
                                            Account details
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        @livewire('auth.user-logout')
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content account dashboard-content pl-50">
                                <div aria-labelledby="dashboard-tab" class="tab-pane fade active show"
                                    id="dashboard" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="mb-0">
                                                Hello {{ $userData->name }}
                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                From your account dashboard. you can easily check &amp; view your
                                                <a href="#">
                                                    recent orders
                                                </a>
                                                ,
                                                <br />
                                                manage your
                                                <a href="#">
                                                    shipping and billing addresses
                                                </a>
                                                and
                                                <a href="#">
                                                    edit your password and account details.
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div aria-labelledby="orders-tab" class="tab-pane fade" id="orders"
                                    role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="mb-0">
                                                Your Orders
                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Order
                                                            </th>
                                                            <th>
                                                                Date
                                                            </th>
                                                            <th>
                                                                Status
                                                            </th>
                                                            <th>
                                                                Total
                                                            </th>
                                                            <th>
                                                                Actions
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                #1357
                                                            </td>
                                                            <td>
                                                                March 45, 2020
                                                            </td>
                                                            <td>
                                                                Processing
                                                            </td>
                                                            <td>
                                                                $125.00 for 2 item
                                                            </td>
                                                            <td>
                                                                <a class="btn-small d-block" href="#">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                #2468
                                                            </td>
                                                            <td>
                                                                June 29, 2020
                                                            </td>
                                                            <td>
                                                                Completed
                                                            </td>
                                                            <td>
                                                                $364.00 for 5 item
                                                            </td>
                                                            <td>
                                                                <a class="btn-small d-block" href="#">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                #2366
                                                            </td>
                                                            <td>
                                                                August 02, 2020
                                                            </td>
                                                            <td>
                                                                Completed
                                                            </td>
                                                            <td>
                                                                $280.00 for 3 item
                                                            </td>
                                                            <td>
                                                                <a class="btn-small d-block" href="#">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div aria-labelledby="address-tab" class="tab-pane fade" id="address"
                                    role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card mb-3 mb-lg-0">
                                                <div class="card-header">
                                                    <h3 class="mb-0">
                                                        Billing Address
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <address>
                                                        3522 Interstate
                                                        <br />
                                                        75 Business Spur,
                                                        <br />
                                                        Sault Ste.
                                                        <br />
                                                        Marie, MI 49783
                                                    </address>
                                                    <p>
                                                        New York
                                                    </p>
                                                    <a class="btn-small" href="#">
                                                        Edit
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0">
                                                        Shipping Address
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <address>
                                                        4299 Express Lane
                                                        <br />
                                                        Sarasota,
                                                        <br />
                                                        FL 34249 USA
                                                        <br />
                                                        Phone: 1.941.227.4444
                                                    </address>
                                                    <p>
                                                        Sarasota
                                                    </p>
                                                    <a class="btn-small" href="#">
                                                        Edit
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-labelledby="account-detail-tab" class="tab-pane fade"
                                    id="account-detail" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>
                                                Account Details
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                Already have an account?
                                                <a href="/page-login">
                                                    Log in instead!
                                                </a>
                                            </p>
                                            <form method="post" name="enq">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>
                                                            First Name
                                                            <span class="required">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input class="form-control" name="name" required=""
                                                            type="text" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>
                                                            Last Name
                                                            <span class="required">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input class="form-control" name="phone"
                                                            required="" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>
                                                            Display Name
                                                            <span class="required">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input class="form-control" name="dname" required=""
                                                            type="text" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>
                                                            Email Address
                                                            <span class="required">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input class="form-control" name="email" required=""
                                                            type="email" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>
                                                            Current Password
                                                            <span class="required">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input class="form-control" name="password"
                                                            required="" type="password" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>
                                                            New Password
                                                            <span class="required">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input class="form-control" name="npassword"
                                                            required="" type="password" />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>
                                                            Confirm Password
                                                            <span class="required">
                                                                *
                                                            </span>
                                                        </label>
                                                        <input class="form-control" name="cpassword"
                                                            required="" type="password" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="btn btn-fill-out submit font-weight-bold"
                                                            name="submit" type="submit" value="Submit">
                                                            Save Change
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
