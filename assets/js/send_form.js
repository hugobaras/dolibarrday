$(document).ready(function () {
  $("#registrationForm").on("submit", function (e) {
    e.preventDefault();

    var formData = $(this).serialize();

    $.ajax({
      type: "POST",
      url: "form_traitement.php",
      data: formData,
      success: function (response) {
        Swal.fire({
          title: "Réussite !",
          text: "Votre inscription au DolibarrDay est validée. Un mail vous a été envoyé.",
          icon: "success",
          confirmButtonText: "Ok",
        });
      },
      error: function (jqXHR, textStatus, errorThrown) {
        Swal.fire({
          title: "Erreur",
          text: "Une erreur s'est produite. Veuillez réessayer.",
          icon: "error",
          confirmButtonText: "Ok",
        });
      },
    });
  });
});
