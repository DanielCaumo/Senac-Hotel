
// Flatpickr Conviguration
$("#check-in").flatpickr({
    enableTime: false,
    disableMobile: true,
    dateFormat: "l, j F Y",
    locale: {
        firstDayOfWeek: 1,
        weekdays: {
        shorthand: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        longhand: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],         
        }, 
        months: {
        shorthand: ['Jan', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        longhand: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        },
    },
    minDate: "today",
    time_24hr: true
  });
  
  $("#check-out").flatpickr({
    enableTime: false,
    disableMobile: true,
    dateFormat: "l, j F Y",
    locale: {
        firstDayOfWeek: 1,
        weekdays: {
        shorthand: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        longhand: ['Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado'],         
        }, 
        months: {
        shorthand: ['Jan', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        longhand: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        },
    },
    minDate: "today",
    time_24hr: true
  });
  

  // Validação de Data

  