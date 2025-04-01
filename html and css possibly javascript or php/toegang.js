
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButton = document.getElementById("darkModeToggle");
            const body = document.body;

            // Check of Dark Mode eerder is ingeschakeld
            if (localStorage.getItem("darkMode") === "enabled") {
                body.classList.add("dark-mode");
            }

            toggleButton.addEventListener("click", function () {
                body.classList.toggle("dark-mode");
                if (body.classList.contains("dark-mode")) {
                    localStorage.setItem("darkMode", "enabled");
                } else {
                    localStorage.setItem("darkMode", "disabled");
                }
            });
        });