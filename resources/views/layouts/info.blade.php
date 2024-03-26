<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        .info-bar {
            background-color: #005494;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
    
        .info-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    
        .location-icon,
        .clock-icon {
            margin-right: 2px;
            margin-left: 5px;   
        }
    
        @media only screen and (max-width: 600px) {
            .info-bar {
                display: none;
            }
    
            .info-content {
                flex-direction: column;
            }
        }
    </style>
    


</head>
<body>

<div class="info-bar">
    <div class="info-content">
        <span class="location-icon">📍</span>
        <span class="location-text">Kantor Pusat di Perumahan Kahuripan Nirwana Village Blok BA2 No.1, Sumput, Kec. Sidoarjo, Jawa Timur</span>
        <span>  </span>
        <span class="opening-hours"><span class="clock-icon"> 🕒</span>Jam Buka: Senin - Jumat 8:00 - 16:00 WIB , Sabtu 8:00 - 13:00 WIB</span>
    </div>
</div>

<!-- Navbar goes here -->

</body>
</html>
