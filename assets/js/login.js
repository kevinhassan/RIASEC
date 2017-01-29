$(document)
  .ready(function() {
    $('.ui.form')
      .form({
        fields: {
          email: {
            identifier  : 'email',
            rules: [
              {
                type   : 'empty',
                prompt : 'Veuillez entrer une adresse mail'
              },
              {
                type   : 'email',
                prompt : 'Veuillez entrer une adresse mail valide'
              }
            ]
          },
          password: {
            identifier  : 'mdp',
            rules: [
              {
                type   : 'empty',
                prompt : 'Veuillez entrer un mot de passe'
              },
              {
                type   : 'length[6]',
                prompt : 'Veuillez entrer un mot de passe d\'au moins 6 caractères'
              }
            ]
          }
        }
      })
    ;
  })
;
