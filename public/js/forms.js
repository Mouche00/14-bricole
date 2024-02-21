const artisanForm = document.getElementById('artisanForm');
const clientForm = document.getElementById('clientForm');

document.getElementById('artisan-btn').addEventListener('click', function () {
    artisanForm.classList.remove('hidden');
    clientForm.classList.add('hidden');
});

document.getElementById('client-btn').addEventListener('click', function () {
    artisanForm.classList.add('hidden');
    clientForm.classList.remove('hidden');
});


