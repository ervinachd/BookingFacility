@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ PAGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>

    <h1 class='text-center'>FAQ'S</h1>
        <section class="faq-container">
            <div class="faq-one">

                <!-- faq question -->
                <h1 class="faq-page">Apa itu Booking Facility?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Website Booking Facility adalah sebuah website yang digunakan untuk melakukan pemesanan fasilitas yang terdapat di apartemen.</p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-two">

                <!-- faq question -->
                <h1 class="faq-page">Apa persyaratan untuk bisa menggunakan Website Booking Facility?</h1>

                <!-- faq answer -->

                <div class="faq-body">
                    <p>1. User sudah terdaftar didalam database apartemen.
                       <br></br> 2. User hanya bisa melakukan booking max 2x/minggu
                       <br></br> 3. User diwajibkan untuk menunjukkan email notification untuk bisa masuk kedalam fasilitas yang disewakan.
                    
                    </p>
                </div>
            </div>
            <hr class="hr-line">


            <div class="faq-three">

                <!-- faq question -->
<h1 class="faq-page">Bagaimana Cara utnuk Melakukan Pembayaran Fasilitas ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>User cukup mengupload bukti pembayaran transfer kemudian admin akan mengecek pembayaran yang diupload max 1 jam setelah user mengupload bukti transfer.</p>
                </div>
            </div>

        </section>
    </main>
    <script src="main.js"></script>
</body>


</html>

@endsection