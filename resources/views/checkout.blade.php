<x-home-layout>
    <x-slot name="slot">
    
    <div class="container my-5">
        <div class='row'>
            <div class='col-md-12 '>
                <div class="card">
                    <div class="card-header">
                     <h4>confrim your payment</h4>
                    </div>
                    <div class="card-body">
                    <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Cource</th>
                            <th style="width:10%">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="/storage/{{ $cor->image }}" width="100" height="100" class="img-responsive"/></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $cor->name }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{{ $cor->price }}$</td>
                            
                           
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align:right;"><h3><strong>Total {{ $cor->price }}$</strong></h3></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:right;">
                                <form action="{{ route('session',$cor) }}" method="POST">
                                <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type='hidden' name="total" value="{{ $cor->price }}">
                                <input type='hidden' name="productname" value="{{ $cor->name }}">
                                <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-slot>
</x-home-layout>