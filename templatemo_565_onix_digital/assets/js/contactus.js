  function sendMail() {
    var params = {
      name: document.getElementById("name").value,
      surname: document.getElementById("surname").value,
      email: document.getElementById("email").value,
      message: document.getElementById("comment").value,
    };
  
    emailjs
      .send("service_bl7gn5d","template_egg1j46",params)
      .then(function (res) {
        alert("Message Sent Successfully !");
      });
  }