<div class="pa-panel" id="three-panel">
    <div class="billing-history">
        <div class="billing-history-inner">
            @foreach ($orders as $order)
                <div class="billing-date-item">
                    <button type="button" class="collapsible col-first"><span class="collapsible-button">
                            <span class="collapsible-side-div">
                                <span class="dd">{{ $order->created_at->format('d.m.Y') }}</span>
                            </span>
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </button>
                    <div class="content">
                        <table class="billing-table">
                            <thead>
                                <tr>
                                    <td>@lang('personalArea.nume_produs')</td>
                                    <td>@lang('personalArea.pret')</td>
                                    <td>@lang('personalArea.cantitatea')</td>
                                    <td>@lang('personalArea.subtotal')</td>
                                </tr>
                            </thead>
                            @foreach ($order->cart_data as $item)
                                <tbody>
                                    <tr>
                                        <td> {{ $item->name }} </td>
                                        <td>
                                            <span>{{ $item->price }}</span> lei
                                        </td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>
                                            <span>{{ $item->price * $item->quantity }}</span> lei
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <form action="{{ route('removeOrder', $order->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="delete-history-item" onclick="return confirm('confim delete')">
                              <i class='fa fa-trash-o'></i>
                            </button>
                          </form>
                        <p class="total-cost">
                            @lang('personalArea.total'):
                            <b>
                                <span>{{$order->total_sum}}</span> lei
                            </b>
                        </p>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
