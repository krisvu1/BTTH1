@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <p>{{ session()->get('success') }}</p>
    @endif

    <div class="container mt-5">
        <div class="card">
            <div class="row">
                <div class="p-4 col-md-8 cart">
                    <div class="mb-4 title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Shopping Cart</b></h4>
                            </div>
                            <div class="text-right col text-muted align-self-center" id="item-count">
                                {{ $totalItems }} items
                            </div>
                        </div>
                    </div>
                    @foreach ($cartItems as $cartItem)
                        <div class="py-2 row border-top border-bottom align-items-center cart-item"
                            data-price="{{ $cartItem['price'] }}" data-quantity="{{ $cartItem['quantity'] }}">
                            <div class="col">
                                <img src="{{ asset($cartItem['image']) }}" class="card-img-top " style="height:200px"
                                    alt="{{ $cartItem['image'] }}">
                            </div>
                            <div class="col">
                                <div>{{ $cartItem['name'] }}</div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary btn-decrease" type="button">-</button>
                                    </div>
                                    <input type="text" class="text-center form-control quantity-input"
                                        value="{{ $cartItem['quantity'] }}" readonly>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-increase" type="button">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right col">
                                &euro;<span class="item-total">{{ $cartItem['price'] * $cartItem['quantity'] }}</span>
                            </div>
                            <form method="POST" action="{{ route('cart.delete', ['id' => $cartItem['id']]) }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $cartItem['id'] }}">
                                <button type="submit" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </form>

                        </div>
                    @endforeach

                    <div class="mt-4 back-to-shop">
                        <a href="{{ route('show.product-dasboard') }}" class="text-muted">&leftarrow; Back to shop</a>
                    </div>
                </div>
                <div class="p-4 col-md-4 summary bg-light">
                    <h5><b>Summary</b></h5>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS <span
                                id="summary-items">{{ $totalItems }}</span></div>
                        <div class="text-right col">&euro; <span id="summary-total"></span></div>
                    </div>
                    <div method="POST" action="{{ route('order') }}">
                        @csrf
                        <p class="mt-4">SHIPPING</p>
                        <select class="mb-4 form-control">
                            <option class="text-muted">Standard-Delivery- &euro;5.00</option>
                        </select>
                        <p>GIVE CODE</p>
                        <input type="text" id="code" class="form-control" placeholder="Enter your code">
                        <input type="button" class="mt-4 btn btn-dark btn-order" value="Đặt hàng">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('.btn-order').click(function() {
                let cartItems = {!! json_encode($cartItems) !!};
                if (cartItems.length === 0) { // Sửa lỗi chính tả và sử dụng toán tử so sánh đúng
                    Swal.fire({
                        title: 'Error!',
                        text: 'Your cart is empty!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                } else {
                    $.ajax({
                        url: '{{ route('order') }}',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            items: JSON.stringify(cartItems) // Không cần encode lại cartItems
                        }
                    }).done((response) => {
                        Swal.fire({
                            title: 'Order successfully!',
                            text: 'Thank you for your purchase!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location.href = '{{ route('show.product-dasboard') }}';
                        });
                    }).fail((xhr, status, error) => {
                        Swal.fire({
                            title: 'Order failed!',
                            text: 'Something went wrong. Please try again.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }); // Đóng dấu ngoặc đúng chỗ
                }
            });

            function updateSummary() {
                let totalItems = 0;
                let totalPrice = 0;

                $('.cart-item').each(function() {
                    const quantity = parseInt($(this).find('.quantity-input').val());
                    const price = parseFloat($(this).data('price'));
                    totalItems += quantity;
                    totalPrice += price * quantity;
                    $(this).find('.item-total').text((price * quantity).toFixed(2));
                });

                $('#item-count').text(totalItems + ' items');
                $('#summary-items').text(totalItems);
                $('#summary-total').text(totalPrice.toFixed(2));
                $('#total-price').text((totalPrice + 5).toFixed(2)); // Tổng giá tiền cộng thêm phí vận chuyển
            }

            $('.btn-decrease').click(function() {
                const $input = $(this).closest('.input-group').find('.quantity-input');
                let value = parseInt($input.val());
                if (value > 1) {
                    $input.val(value - 1);
                    updateSummary();
                }
            });

            $('.btn-increase').click(function() {
                const $input = $(this).closest('.input-group').find('.quantity-input');
                let value = parseInt($input.val());
                $input.val(value + 1);
                updateSummary();
            });

            updateSummary();
        });
    </script>
@endsection
