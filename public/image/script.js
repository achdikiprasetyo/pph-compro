// JavaScript lainnya tetap ada di sini

document.getElementById('whatsapp-button').addEventListener('click', function() {
    document.getElementById('whatsapp-popup').style.display = 'block';
  });
  
  document.querySelector('.close-popup').addEventListener('click', function() {
    document.getElementById('whatsapp-popup').style.display = 'none';
  });
  