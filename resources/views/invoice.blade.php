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

        .sig {
            display: flex;
            width: 100%;
            justify-content: right;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

    <header>
        {{-- <img src='pictures/logo.png' alt="Company Logo" class="logo"> --}}
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
                <p><strong>To:</strong> {{ $name }}</p>
                <p><strong>Customer Address:</strong>{{ $address }}</p>
                <p><strong>Customer Email:</strong>{{ $email }}<p>
            </div>
        </div>

        <table class="invoice-items">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Time</th>
                    <th>Tarif</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($reservation->services as $item)
                <tr>
                    <td>{{ $item->nom }}</td>
                    <td>{{ $hours }}h</td>
                    <td>${{ $item->tarif }}</td>
                    <td>${{ $item->tarif * $hours }}</td>
                </tr>
            @endforeach
                
                {{-- <tr>
                    <td>Item 2</td>
                    <td>1</td>
                    <td>$30.00</td>
                    <td>$30.00</td>
                </tr> --}}
            </tbody>
        </table>

        <div class="total">
            <p><strong>Total: ${{ $sum }}</strong></p>
        </div>

        
    </div>

    <div class="sig">
        <img width="100px" src="{{ 'images/signatures/' . $signature }}">
    </div>
   
</body>

</html>