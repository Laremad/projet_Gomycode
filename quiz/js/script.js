document.getElementById('quiz-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    let score = 0;
    const totalQuestions = 2;

    // Vérification des réponses
    const question1Answer = document.querySelector('input[name="question1"]:checked');
    const question2Answer = document.querySelector('input[name="question2"]:checked');

    if (question1Answer && question1Answer.value === "Dakar") {
        score++;
    }
    if (question2Answer && question2Answer.value === "Atlantique") {
        score++;
    }

    // Affichage du score
    alert(`Votre score est ${score} sur ${totalQuestions}.`);
});
