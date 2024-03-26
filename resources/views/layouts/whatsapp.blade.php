<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
            /* Tombol WhatsApp */
    #whatsapp-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      cursor: pointer;
      z-index: 999;
    }

    #whatsapp-button img {
      width: 60px; /* Atur lebar ikon sesuai keinginan */
      height: auto;
    }

    /* Animasi WhatsApp */
    #whatsapp-button:hover {
      animation: bounce 0.5s ease infinite;
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-10px);
      }
      60% {
        transform: translateY(-5px);
      }
    }

    /* Pop-up WhatsApp */
    #whatsapp-popup {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 300px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      z-index: 998;
    }

    .popup-content {
      padding: 15px;
    }

    .close-popup {
      float: right;
      cursor: pointer;
    }
    </style>
</head>
<body>
    <!-- Tombol WhatsApp -->
  <div id="whatsapp-button">
    <img src="{{asset('image/whatsapp.png')}}" alt="WhatsApp Icon">
  </div>

  <!-- Pop-up WhatsApp -->
  <div id="whatsapp-popup" >
    <div class="popup-content">
      <span class="close-popup">&times;</span>
      <p>Rekrutmen PPH</p>
      <a href="https://wa.me/62792388238" target="_blank">Hubungi kami di WhatsApp</a>
    </div>
  </div>
</body>
<script>
    // JavaScript lainnya tetap ada di sini

document.getElementById('whatsapp-button').addEventListener('click', function() {
    document.getElementById('whatsapp-popup').style.display = 'block';
  });
  
  document.querySelector('.close-popup').addEventListener('click', function() {
    document.getElementById('whatsapp-popup').style.display = 'none';
  });
  
</script>
</html>