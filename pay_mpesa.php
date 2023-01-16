<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Pay with M-PESA</title>
</head>
<body class="bg-sky-300">
    <div class="grid h-screen place-items-center mt-5">
        <img src="images/tick.png">
        <p class="text-2xl"><span class="font-bold text-4xl">Success!</span> You have successfully booked a househelp!</p>
        <button onclick="promptMpesaPayment()" class="bg-black hover:bg-sky-700 text-white font-bold py-4 px-6 rounded-full text-lg">Pay with M-PESA</button>
        <script>
            function promptMpesaPayment() {
                alert("Please enter your M-PESA details to proceed with payment.");
            }
        </script>
    </div>
</body>
</html>