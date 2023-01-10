<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Booking</title>
</head>
<body>
<section class="bg-sky-200 float-right px-48" style="height: 100vh;">
    <div>
        <form class="mt-5 space-y-8" method="post">
            <input class="rounded-md pl-10 pr-56 py-2 mt-4 text-gray-800" style="background-color: white;" name="date" placeholder="Appointment date"/><br>
            <div style="display: flex; flex-direction:row">
                <label class="mt-6 mr-5 text-gray-500">Start time</label>
                <input class="rounded-md pl-10 pr-10 py-2 mt-4 text-gray-800" style="background-color: white;" type="time" name="time" placeholder="Appointment start"/><br>
                <label class="mt-6 mr-5 ml-5 text-gray-500">End time</label>
                <input class="rounded-md pl-10 pr-10 py-2 mt-4 text-gray-800" style="background-color: white;" type="time" name="time" placeholder="Appointment end"/><br>
            </div>
            <input class="rounded-md pl-10 pr-56 py-2 mt-4 text-gray-800" style="background-color: white;" type="text" name="county" placeholder="County"/><br>
            <input class="rounded-md pl-10 pr-56 py-2 mt-4 text-gray-800" style="background-color: white;" type="text" name="location" placeholder="location"/><br>
            <input class="rounded-md pl-10 pr-56 py-2 mt-4 text-gray-800" style="background-color: white;" type="number" name="housenumber" placeholder="House number" min="1"/><br>
            <button type="submit" class="bg-black hover:bg-sky-700 text-white font-bold py-4 px-32 ml-14 rounded-full text-lg mt-10">submit</button>
        </form>
    
    </div>
</section>
<section class="pt-32 pl-12 w-96">
    <div class="text-center text-black">
        <h1 class="font-bold text-5xl leading-relaxed text-sky-700">Schedule an<br>Appointment</h1>
        <p class="text-2xl leading-relaxed mt-3">Book a househelp anytime anywhere</p>
    </div>
</section>
</body>
</html>


