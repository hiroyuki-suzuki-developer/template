@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('commom.side-menu')
        <div class="col-md-9">
            <article class="p-3 rounded shadow-sm bg-white">
                <div class="row justify-content-center border-bottom">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-4 col-sm-12 text-center">
                                <svg class="bd-placeholder-img" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="text-center"><h1 class="h3">商品</h1></p>
                        <div class="row">
                            <div class="col-4 text-reset">
                                <p class="text-left">価格</p>
                                <p class="text-left">価格</p>
                            </div>
                            <div class="col-8">
                                <p>2000~</p>
                                <p>なし</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <p>こちらの商品を購入しますか</p>
                    <p>テストカード番号：4242424242424242</p>
                    <p>テスト郵便番号：94043</p>
                    <p>https://stripe.com/docs/testing</p>
                </div>
                        
                <form id="setup-form" action="{{ route('purchase.post') }}" method="post">
                    @csrf
                    <input id="card-holder-name" type="text" placeholder="カード名義人" name="card-holder-name">
                    <div id="card-element"></div>
                    <button id="card-button">
                    購入
                    </button>
                </form>
            </article>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
const stripe = Stripe("{{config('env.STRIPE_KEY')}}");
const elements = stripe.elements();
const cardElement = elements.create('card');
cardElement.mount('#card-element');
const cardHolderName = document.getElementById('card-holder-name');
const cardButton = document.getElementById('card-button');

cardButton.addEventListener('click', async (e) => {
    e.preventDefault()
    const { paymentMethod, error } = await stripe.createPaymentMethod(
        'card', cardElement, {
            billing_details: { name: cardHolderName.value }
        }
    );
    if (error) {
        console.log(error);
    } else {
        stripePaymentIdHandler(paymentMethod.id);
    }
});

function stripePaymentIdHandler(paymentMethodId) {
    const form = document.getElementById('setup-form');
    const hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'paymentMethodId');
    hiddenInput.setAttribute('value', paymentMethodId);
    form.appendChild(hiddenInput);
    form.submit();
}
</script>
<style>
#card-element,#card-holder-name {
    border-radius: 4px 4px 0 0 ;
    padding: 12px;
    border: 1px solid rgba(50, 50, 93, 0.1);
    height: 44px;
    width: 100%;
    background: white;
}
button#card-button {
    background: #5469d4;
    color: #ffffff;
    font-family: Arial, sans-serif;
    border-radius: 0 0 4px 4px;
    border: 0;
    padding: 12px 16px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    display: block;
    box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
    width: 100%;
}
</style>
@endsection
