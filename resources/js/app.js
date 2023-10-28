import './bootstrap';
import emailjs from '@emailjs/browser';

emailjs.init("SwwJKrDLs85Z2qR3e");

window.onload = function () {
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault();

        // console.log(this);

        emailjs.sendForm('service_x9v33ho', 'template_srlggf8', this)
            .then(function () {
                alert('Email envoyé avec succès !'); // Affiche un message de feedback
                location.reload(); // Recharge la page
            }, function (error) {
                console.log('Échec de l\'envoi de l\'email, erreur :', error);
            });
    });
}
