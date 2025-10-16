// Hacer desaparecer el mensaje en 5 segundos
setTimeout(() => {
    const toast = document.getElementById("toast");
    if (toast) {
        toast.style.opacity = "0";
        setTimeout(() => toast.remove(), 500); // lo elimina del DOM
    }
}, 5000);
