   // Inicializar o Flatpickr
   flatpickr("#datePicker", {
    dateFormat: "d/m/Y",
    locale: "pt",
    enableTime: false,
    time_24hr: true
});
flatpickr("#timePicker", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true
});