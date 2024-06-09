<x-app-layout>
    @slot('title', 'Product Detail')
    <x-slot name="header">
        Product Detail
    </x-slot>
    <x-content-layout>
        <x-mycart>
            {{ empty($cartItem) ? '0' : $cartItem->count() }}
        </x-mycart> 
        <x-slot:style>height: 480px</x-slot:style>
        <div class="row h-100">
            <div class="col-md-6 justify-content-center align-items-center d-flex">
                <img src="{{ asset('storage/product-image/' . $product->image) }}" style="height:350px" alt="...">
            </div>

            <div class="col-md-6 d-flex justify-content-center flex-column">
                <h2>{{ $product->name }}</h2>
                <div>
                    <span class="me-2">
                        Rp.{{ number_format($product->sale_price, 0, ',', '.') }}
                    </span>
                    <span class="text-secondary text-decoration-line-through">
                        Rp.{{ number_format($product->price, 0, ',', '.') }}
                    </span>
                </div>
                <p class="mt-2">{{ $product->description }}</p>

                @auth
                    @if (Auth::user()->role_id != 1)
                        <div class="mt-3">
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <label class="form-label" for="quantity">Quantity</label>
                                <div class="d-flex">
                                    <input type="number" min="0" name="quantity" id="quantity" class="form-control w-50 me-2"
                                        value="{{ empty($cart) ? '0' : $cart->quantity }}">
                                    <button class="btn btn-primary" type="submit">Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </x-content-layout>
</x-app-layout>
