<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { margin: 0; padding: 0; background-color: #f1f5f9; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; }
        .wrapper { width: 100%; table-layout: fixed; background-color: #f1f5f9; padding-bottom: 40px; }
        .main-card { max-width: 450px; margin: 20px auto; background-color: #ffffff; border-radius: 32px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); }
        .status-bar { background-color: #059669; padding: 12px; text-align: center; color: #ffffff; font-size: 10px; font-weight: 900; letter-spacing: 2px; text-transform: uppercase; }
        .invoice-body { padding: 40px 30px; }
        .brand { font-size: 26px; font-weight: 900; color: #0f172a; text-align: center; margin-bottom: 5px; }
        .brand span { color: #059669; }
        .receipt-id { font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; text-align: center; display: block; margin-bottom: 30px; }
        .total-box { background-color: #f8fafc; border-radius: 24px; padding: 25px; text-align: center; margin-bottom: 35px; border: 1px solid #f1f5f9; }
        .total-label { font-size: 10px; font-weight: 800; color: #64748b; text-transform: uppercase; letter-spacing: 1px; }
        .total-amount { font-size: 38px; font-weight: 900; color: #0f172a; margin-top: 5px; }
        
        .item-table { width: 100%; border-collapse: collapse; }
        .th-text { font-size: 10px; font-weight: 900; color: #94a3b8; text-transform: uppercase; border-bottom: 2px solid #f1f5f9; padding-bottom: 10px; }
        .item-name { font-size: 14px; font-weight: 700; color: #1e293b; padding-top: 15px; }
        .item-qty { font-size: 11px; color: #64748b; font-weight: 600; padding-bottom: 15px; }
        .item-price { font-size: 14px; font-weight: 800; color: #0f172a; text-align: right; vertical-align: top; padding-top: 15px; }

        .divider { border-top: 2px dashed #e2e8f0; margin: 30px 0; }
        .customer-card { background-color: #0f172a; border-radius: 20px; padding: 20px; color: #ffffff; }
        .c-label { font-size: 9px; font-weight: 700; opacity: 0.5; text-transform: uppercase; }
        .c-value { font-size: 13px; font-weight: 600; display: block; margin-top: 2px; }
    </style>
</head>
<body>
    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
                <div class="main-card">
                    <div class="status-bar">Official Digital Receipt</div>
                    
                    <div class="invoice-body">
                        <div class="brand">Pharma<span>Link</span></div>
                        <span class="receipt-id">Transaction #{{ $receipt->receipt_handle }}</span>

                        <div class="total-box">
                            <span class="total-label">Amount Paid</span>
                            <div class="total-amount">Rs. {{ number_format($receipt->total_amount, 2) }}</div>
                        </div>

                        <table class="item-table" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <th class="th-text" align="left">Medicine Name</th>
                                <th class="th-text" align="right">Total</th>
                            </tr>
                            @foreach($receipt->items as $item)
                            <tr>
                                <td class="item-details">
                                    <div class="item-name">{{ $item->product->name }}</div>
                                    <div class="item-qty">Qty: {{ $item->quantity }} units @ Rs. {{ number_format($item->price_at_time, 2) }}</div>
                                </td>
                                <td class="item-price">
                                    Rs. {{ number_format($item->price_at_time * $item->quantity, 2) }}
                                </td>
                            </tr>
                            @endforeach
                        </table>

                        <div class="divider"></div>

                        <div class="customer-card">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="50%" align="left">
                                        <span class="c-label">Customer</span>
                                        <span class="c-value">{{ $receipt->customer->name ?? 'Walk-in' }}</span>
                                    </td>
                                    <td width="50%" align="right">
                                        <span class="c-label">Phone</span>
                                        <span class="c-value">{{ $receipt->customer->phone ?? 'N/A' }}</span>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div style="text-align: center; font-size: 11px; color: #94a3b8; font-weight: 600; margin-top: 30px; line-height: 1.6;">
                            This is a computer-generated digital receipt.<br>
                            Thank you for your purchase at PharmaLink.<br>
                            <strong>{{ $receipt->created_at->format('d M Y | h:i A') }}</strong>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>