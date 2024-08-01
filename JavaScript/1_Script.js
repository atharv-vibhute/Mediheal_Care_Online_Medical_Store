document.addEventListener('DOMContentLoaded', function () {
    // Add event listener to the search button
    document.getElementById('search-medicine-button').addEventListener('click', filterMedicines);

    // Add event listener to the search input field for the 'Enter' key
    document.getElementById('search-medicine').addEventListener('keyup', function (event) {
        if (event.key === 'Enter') {
            filterMedicines();
        }
    });

    // Add event listeners to the filter checkboxes
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', filterMedicines);
    });

    function filterMedicines() {
        const searchTerm = document.getElementById('search-medicine').value.trim().toLowerCase();
        const medicines = document.querySelectorAll('.medicine');
        
        let allopathyCount = 0, homeopathyCount = 0, ayurvedaCount = 0, other1Count = 0;
        let range0Count = 0, range50Count = 0, range100Count = 0, range500Count = 0, range1000Count = 0;
        let tabletCount = 0, liquidCount = 0, other2Count = 0;

        medicines.forEach(medicine => {
            const medicineName = medicine.dataset.medicine.toLowerCase();
            const medicalSystem = medicine.dataset.system;
            const range = medicine.dataset.range;
            const form = medicine.dataset.form;

            const matchesSearch = searchTerm === '' || medicineName.includes(searchTerm);
            const matchesMedicalSystem = document.getElementById(medicalSystem).checked || !document.querySelectorAll('input[id*="allopathy"]:checked, input[id*="homeopathy"]:checked, input[id*="ayurveda"]:checked, input[id*="other1"]:checked').length;
            const matchesRange = document.getElementById(`range-${range}`).checked || !document.querySelectorAll('input[id*="range-0"]:checked, input[id*="range-50"]:checked, input[id*="range-100"]:checked, input[id*="range-500"]:checked, input[id*="range-1000"]:checked').length;
            const matchesForm = document.getElementById(form).checked || !document.querySelectorAll('input[id*="tablet"]:checked, input[id*="liquid"]:checked, input[id*="other2"]:checked').length;

            const displayStyle = matchesSearch && matchesMedicalSystem && matchesRange && matchesForm ? 'block' : 'none';
            medicine.style.display = displayStyle;

            // Update counts
            if (displayStyle === 'block') {
                switch (medicalSystem) {
                    case 'allopathy': allopathyCount++; break;
                    case 'homeopathy': homeopathyCount++; break;
                    case 'ayurveda': ayurvedaCount++; break;
                    case 'other1': other1Count++; break;
                }
                switch (range) {
                    case '0': range0Count++; break;
                    case '50': range50Count++; break;
                    case '100': range100Count++; break;
                    case '500': range500Count++; break;
                    case '1000': range1000Count++; break;
                }
                switch (form) {
                    case 'tablet': tabletCount++; break;
                    case 'liquid': liquidCount++; break;
                    case 'other2': other2Count++; break;
                }
            }
        });

        // Display counts
        document.getElementById('allopathy-count').textContent = allopathyCount;
        document.getElementById('homeopathy-count').textContent = homeopathyCount;
        document.getElementById('ayurveda-count').textContent = ayurvedaCount;
        document.getElementById('other1-count').textContent = other1Count;
        document.getElementById('range-0-count').textContent = range0Count;
        document.getElementById('range-50-count').textContent = range50Count;
        document.getElementById('range-100-count').textContent = range100Count;
        document.getElementById('range-500-count').textContent = range500Count;
        document.getElementById('range-1000-count').textContent = range1000Count;
        document.getElementById('tablet-count').textContent = tabletCount;
        document.getElementById('liquid-count').textContent = liquidCount;
        document.getElementById('other2-count').textContent = other2Count;
    }

    // Initial call to display counts
    filterMedicines();
});