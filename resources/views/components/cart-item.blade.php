@props(["index","cartItem"])

<tr>
  <th scope="row">{{$index}}</th>
  <td>
    <img src="{{$cartItem->product->image}}" width="78" height="78" />
  </td>
  <td>
    <a class="product-name" href="/product/{{$cartItem->product->slug}}">
      {{$cartItem->product->name}}
    </a>
  </td>
  <td>
    ₫<span class="format-vnd">{{$cartItem->product->price}}</span>
  </td>
  <td>
    <div class="quantity-box">
      <button class="minus" data-cart-item-id="{{$cartItem->id}}">
        <i class="fa-solid fa-minus"></i>
      </button>
      <input type="number" readonly value="{{$cartItem->quantity}}" data-cart-item-id="{{$cartItem->id}}">
      <button class="add" data-cart-item-id="{{$cartItem->id}}">
        <i class="fa-solid fa-plus"></i>
      </button>
    </div>
  </td>
  <td>
    ₫<span data-cart-item-id="{{$cartItem->id}}"
      class="format-vnd">{{$cartItem->quantity * $cartItem->product->price}}</span>
  </td>
  <td>
    <form action="/cart/deleteItem" method="POST">
      @csrf
      <input required type="hidden" name="cart_item_id" value={{$cartItem->id}}>
      <button type="submit" class="delete-button text-danger">
        <i class="fa-solid fa-trash"></i>
      </button>
    </form>
  </td>
</tr>
