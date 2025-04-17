document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.getElementById("loginForm");
    if (loginForm) {
        loginForm.addEventListener("submit", (e) => {
            e.preventDefault();
            alert("Inicio de sesión simulado");
            const email = document.getElementById("email").value;
            // Redirección de prueba según tipo (puedes simular lógica simple)
            if (email.includes("empresa")) {
                window.location.href = "panel_empresa.html";
            } else {
                window.location.href = "panel_candidato.html";
            }
        });
    }

    const candidatoForm = document.getElementById("registroCandidatoForm");
    if (candidatoForm) {
        candidatoForm.addEventListener("submit", (e) => {
            e.preventDefault();
            alert("Registro de candidato simulado");
            window.location.href = "index.html";
        });
    }

    const empresaForm = document.getElementById("registroEmpresaForm");
    if (empresaForm) {
        empresaForm.addEventListener("submit", (e) => {
            e.preventDefault();
            alert("Registro de empresa simulado");
            window.location.href = "index.html";
        });
    }
});
