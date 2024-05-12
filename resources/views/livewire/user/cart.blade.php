<main class="main">
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
                Shop
                <span>
                </span>
                Cart
            </div>
        </div>
    </div>
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">
                    Your Cart
                </h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body">
                        There are
                        <span class="text-brand">
                            3
                        </span>
                        products in your cart
                    </h6>
                    <h6 class="text-body">
                        <a class="text-muted" href="#">
                            <i class="fi-rs-trash mr-5">
                            </i>
                            Clear Cart
                        </a>
                    </h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive shopping-summery">
                    <table class="table table-wishlist">
                        <thead>
                            <tr class="main-heading">
                                <th class="custome-checkbox start pl-30">
                                    <input class="form-check-input" id="exampleCheckbox11" name="checkbox"
                                        type="checkbox" value="" />
                                    <label class="form-check-label" for="exampleCheckbox11">
                                    </label>
                                </th>
                                <th colspan="2" scope="col">
                                    Product
                                </th>
                                <th scope="col">
                                    Unit Price
                                </th>
                                <th scope="col">
                                    Quantity
                                </th>
                                <th scope="col">
                                    Subtotal
                                </th>
                                <th class="end" scope="col">
                                    Remove
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="pt-30">
                                    <td class="custome-checkbox pl-30">
                                        <input class="form-check-input" id="exampleCheckbox1" name="checkbox"
                                            type="checkbox" value="" />
                                        <label class="form-check-label" for="exampleCheckbox1">
                                        </label>
                                    </td>
                                    <td class="image product-thumbnail pt-40">
                                        <img alt="#" src="{{ $product->images[0] }}" />
                                    </td>
                                    <td class="product-des product-name">
                                        <h6 class="mb-5">
                                            <span class="product-name mb-10 text-heading">
                                                Field Roast Chao Cheese Creamy Original
                                            </span>
                                        </h6>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width:{{ rand(60, 100) }}%">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <h4 class="text-body">
                                            $2.51
                                        </h4>
                                    </td>
                                    <td class="text-center detail-info" data-title="Stock">
                                        <div class="detail-extralink mr-15">
                                            <div class="detail-qty border radius">
                                                <a class="qty-down" href="#">
                                                    <i class="fi-rs-angle-small-down">
                                                    </i>
                                                </a>
                                                <input class="qty-val" min="1" name="quantity" type="text"
                                                    value="1" />
                                                <a class="qty-up" href="#">
                                                    <i class="fi-rs-angle-small-up">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <h4 class="text-brand">
                                            $2.51
                                        </h4>
                                    </td>
                                    <td class="action text-center" data-title="Remove">
                                        <a class="text-body" href="#">
                                            <i class="fi-rs-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="divider-2 mb-30">
                </div>
                <div class="cart-action d-flex justify-content-between">
                    <a class="btn">
                        <i class="fi-rs-arrow-left mr-10">
                        </i>
                        Continue Shopping
                    </a>
                    <a class="btn mr-10 mb-sm-15">
                        <i class="fi-rs-refresh mr-10">
                        </i>
                        Update Cart
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="border p-md-4 cart-totals ml-30">
                    <div class="table-responsive">
                        <table class="table no-border">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-muted">
                                            Subtotal
                                        </h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 class="text-brand text-end">
                                            $12.31
                                        </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" scope="col">
                                        <div class="divider-2 mt-10 mb-10">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-muted">
                                            Shipping
                                        </h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h5 class="text-heading text-end">
                                            Free
                                        </h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-muted">
                                            Estimate for
                                        </h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h5 class="text-heading text-end">
                                            United Kingdom
                                        </h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" scope="col">
                                        <div class="divider-2 mt-10 mb-10">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-muted">
                                            Total
                                        </h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 class="text-brand text-end">
                                            $12.31
                                        </h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn mb-20 w-100" href="#">
                        Proceed To CheckOut
                        <i class="fi-rs-sign-out ml-15">
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
