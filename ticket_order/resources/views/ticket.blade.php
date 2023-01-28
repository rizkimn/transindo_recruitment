<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Old+Standard+TT:wght@400;700&family=Playfair+Display:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/css/ticket.css')}}">
    {{-- Boxicon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Print Out Your Ticket</title>
    <style>
        .parent > div {
            background-image: url("{{asset('asset/img/pics/paper-text.jpg')}}")
        }
    </style>
</head>
<body>
    <h2>Here's Your Ticket</h2>
    <div class="parent">
        <div class="div1">
            <div class="heading">
                <h5>AgenX Event Organizer</h5>
                <h1>Music Concert, Perform by Angels</h1>
                <h2><i>Explore the Rythm, Enjoy the Melody, Follow the Bass</i></h2>
            </div>
        </div>
        <div class="div2">
            <h3>HTM</h3>
            <h1>Rp35k</h1>
        </div>
        <div class="div3">
            <div class="tanggal">
                <h3>18 Februari 2023 | Stadion Gelora Kie Raha</h3>
            </div>
            <div class="nomor-tiket">
                {{$ticket_id}}
            </div>
        </div>
    </div>
    <h2 class="print">Print Out Your Ticket Above !</h2>
    <a href="/"><i class="bx bx-chevron-left"></i> Back to Portal</a>
</body>
</html>
