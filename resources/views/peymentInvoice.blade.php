<h1>مبلغ {{$price}}</h1>
<ul>
    <form action="{{url('/payInvoice/'. $id)}}" method="POST">
        <select name="payment_result">
            <option value="1">پرداخت نشده</option>
            <option value="-1">ناموفق</option>
            <option value="0">موفق</option>
        </select>
        <input type="hidden" name="au" value="{{mt_rand(111111, 999999999)}}">
        <input name="id" value="{{$id}}" type="hidden">
        {{ Form::token()}}
        <input type="submit" value="انجام تراکنش">
    </form>
</ul>