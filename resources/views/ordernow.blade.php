@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td> $ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td> $ 100 </td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+100}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form method="POST" action="orderplace">
                 @csrf 
                <div class="form-group">
                    <textarea placeholder="enter your address"  class="form-control"> </textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method</label><br><br>
                    <input type="radio" value="online" name="payment"> <span>Online Payment</span> <br><br>
                    <input type="radio" value="EMI" name="payment"> <span>EMI Payment</span> <br><br>
                    <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br><br>

                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>
        
    </div>
</div>
@endsection