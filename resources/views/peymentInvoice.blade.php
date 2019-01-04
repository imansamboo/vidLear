<h1>مبلغ {{$price}}</h1>
<ul>
    <form action="{{url('/payInvoice/'. $id)}}" method="POST">
        <select name="status">
            <option value="پرداخت نشده">پرداخت نشده</option>
            <option value="ناموفق">ناموفق</option>
            <option value="موفق">موفق</option>
        </select>
        <input name="id" value="{{$id}}" type="hidden">
        {{ Form::token()}}
        <input type="submit" value="انجام تراکنش">
    </form>
</ul>