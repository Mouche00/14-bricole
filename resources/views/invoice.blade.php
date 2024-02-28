<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <title>Invoice for Kawtar</title>
    <meta charset='utf-8'>
    <!-- <link href='{{ $css }}' rel='stylesheet'> -->
</head>

<body>
    <!-- <h1>Invoice </h1>
    <img src='pictures/logo.png' class='invoice-icon' alt='Invoice icon'>
    <p><span class='label'>content:</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consequuntur dolorum dolor dignissimos! Fugiat, sequi sed minus blanditiis iste recusandae nemo dicta totam cupiditate quibusdam molestiae deleniti, sint illum! Ullam.</p>
      -->
      <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice {
            border: 1px solid #ddd;
            padding: 20px;
        }

        .invoice-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-items {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .invoice-items th, .invoice-items td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .total {
            text-align: right;
            margin-top: 20px;
        }

        .logo {
            max-width: 150px;
            max-height: 150px;
        }
    </style>
</head>
<body>

    <header>
        <img src='pictures/logo.png' alt="Company Logo" class="logo">
        <h1>Invoice</h1>
    </header>

    <div class="invoice">
        <div class="invoice-details">
            <div>
                <p><strong>From:</strong> BricoleMe</p>
                <p><strong> Address:</strong>Hay anas,Safi,Maroc</p>
                <p><strong> Email:</strong>BricoleMe@email.com<</p>
            </div>
            <div>
                <p><strong>To:</strong> Elhaini Kawtar</p>
                <p><strong>Customer Address:</strong>Hay ourida,Safi,Maroc</p>
                <p><strong>Customer Email:</strong>yourEmail@Gmail.com<p>
            </div>
        </div>

        <table class="invoice-items">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Item 1</td>
                    <td>2</td>
                    <td>$50.00</td>
                    <td>$100.00</td>
                </tr>
                <tr>
                    <td>Item 2</td>
                    <td>1</td>
                    <td>$30.00</td>
                    <td>$30.00</td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            <p><strong>Total: $130.00</strong></p>
        </div>
    </div>
   
</body>

</html>