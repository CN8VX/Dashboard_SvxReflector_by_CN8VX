// Fonction pour changer la feuille de style et basculer entre les thèmes
function toggleStyleSheet() {
    var currentSheet = document.getElementById('stylefile').getAttribute('href');
    var newSheet, newText, newColor;

    if (currentSheet.includes('style_normal.css')) {
        newSheet = './css/style_black.css';
        newText = 'Light Mode';
        newColor = '#ffffff'; // Blanc ou une couleur claire pour le bouton
    } else {
        newSheet = './css/style_normal.css';
        newText = 'Dark Mode';
        newColor = '#000000'; // Noir ou une couleur foncée pour le bouton
    }

    document.getElementById('stylefile').setAttribute('href', newSheet);
    document.getElementById('toggleButton').textContent = newText;
    document.getElementById('toggleButton').style.backgroundColor = newColor;

    localStorage.setItem('selectedTheme', newSheet);  // Enregistre le thème dans le LocalStorage
    localStorage.setItem('buttonText', newText);  // Enregistre le texte du bouton
    localStorage.setItem('buttonColor', newColor);  // Enregistre la couleur du bouton
}

// Vérifie s'il y a un thème et des paramètres de bouton stockés dans le LocalStorage au chargement de la page
window.onload = function() {
    var savedTheme = localStorage.getItem('selectedTheme');
    var savedText = localStorage.getItem('buttonText');
    var savedColor = localStorage.getItem('buttonColor');

    if (savedTheme) {
        document.getElementById('stylefile').setAttribute('href', savedTheme);
    }

    if (savedText) {
        document.getElementById('toggleButton').textContent = savedText;
    }

    if (savedColor) {
        document.getElementById('toggleButton').style.backgroundColor = savedColor;
    }
}

