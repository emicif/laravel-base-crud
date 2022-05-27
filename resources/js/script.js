// funzione che richiede all'utente conferma

const deleteButton = document.querySelectorAll('.delete-button');

deleteButton.forEach(element => {

    element.addEventListener('click', ($event) => {
        const answer = confirm('Are you sure?');

        // se risposta è no
        if (!answer) {
            $event.preventDefault();
        }
    })
});
