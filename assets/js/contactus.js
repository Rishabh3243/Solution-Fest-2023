  function sendMail() {
    var templateParams = {
      name: document.getElementById("name").value,
      surname: document.getElementById("surname").value,
      email: document.getElementById("email").value,
      message: document.getElementById("website").value
    };
  
    emailjs.send('service_bl7gn5d','template_egg1j46',templateParams);
  }