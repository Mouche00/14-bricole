function addInput() {
    const competencesContainer = document.getElementById('competences-container');
    const competenceEntry = document.createElement('div');
    competenceEntry.classList.add('competence-entry');

    competenceEntry.innerHTML = `
        <div class="flex justify-center items-center space-x-8">
            <input type="text" name="competences[]" class="competence-input block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-blue-400 rounded-md  dark:text-gray-600 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Competences" required="">
            <input type="text" name="tarifs[]" class="tarif-input block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-blue-400 rounded-md  dark:text-gray-600 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Tarif" required="">
            <div class="w-10 h-10 flex items-center justify-center cursor-pointer remove-competence">
                <img src="pictures/moins.png"  alt="">

            </div>
        </div>
    `;

    competencesContainer.appendChild(competenceEntry);

    competenceEntry.querySelector('.remove-competence').addEventListener('click', function() {
        competencesContainer.removeChild(competenceEntry);
    });
}