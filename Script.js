
function validateQuiz() {

    for (let i = 0; i < 10; i++) {

        let answer = document.querySelector(
            'input[name="q' + i + '"]:checked'
        );

        if (answer == null) {
            alert("Please answer all questions!");
            return false;
        }
    }

    return confirm("Are you sure you want to submit the quiz?");
}
