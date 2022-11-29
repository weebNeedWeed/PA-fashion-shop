@props(["index", "orderItem"])

<tr>
  <th scope="row">{{$index}}</th>
  <td>
    <img src="{{$orderItem->product->image}}" width="80" height="80">
  </td>
  <td>
    {{$orderItem->product->name}}
  </td>
  <td>
    ₫<span class="format-vnd">
      {{$orderItem->product->price}}
    </span>
  </td>
  <td>
    {{$orderItem->quantity}}
  </td>
</tr>
