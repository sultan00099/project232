<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    Hello <i> {{ $send->sender }} </i>
    <p>Your order is accepted. The shop emplopyee will contact you soon.</p>
    Thank You, <br>
    <i> {{ $send->receiver }} </i> 
</body>
</html>