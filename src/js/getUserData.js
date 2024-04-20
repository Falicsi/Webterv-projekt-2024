document.addEventListener("DOMContentLoaded", function() {
    const removeUserForm = document.querySelector(".user-management form[action='../src/actions/RemoveUser.php']");
    const removeUserInput = removeUserForm.querySelector("#user_id");
    const removeUserResultDiv = document.createElement("div");
    removeUserForm.appendChild(removeUserResultDiv);

    removeUserInput.addEventListener("keyup", function(event) {
        const userId = parseInt(removeUserInput.value.trim()); // Az azonosítót számként kezeljük
        if (isNaN(userId)) { // Ellenőrizzük, hogy a beviteli érték egy szám-e
            removeUserResultDiv.textContent = ""; // Ha nem szám, töröljük a tartalmat
            return;
        }

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../src/actions/InspectUser.php", true); // Az InspectUser.php-t hívja
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                const response = xhr.responseText;
                removeUserResultDiv.innerHTML = response !== "" ? "<p>A megadott ID-hoz tartozó felhasználó email címe:</p><p>" + response + "</p>" : "<p>Nincs ilyen felhasználó.</p>";
            }
        };

        xhr.send("user_id=" + encodeURIComponent(userId));
    });
});
