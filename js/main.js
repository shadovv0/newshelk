function initFoldElements() {
    const spoilers = document.querySelectorAll('[data-fold]');

    if (!spoilers) return;

    spoilers.forEach(spoiler => {
        const spoilerBtn = spoiler.querySelector('[data-fold-btn]');
        const spoilerBtnText = spoilerBtn.querySelector('.more__text');
        const spoilerContent = spoiler.querySelectorAll('[data-fold-content]');

        spoilerContent.forEach(content => {
            heightToggleElement(spoilerBtn, content);
        })

        if (spoilerBtnText) {
            spoilerBtn.addEventListener('click', (e) => {
                if (spoilerBtn.classList.contains('is-active')) {
                    spoilerBtnText.textContent = spoilerBtnText.dataset.closeText;
                } else {
                    spoilerBtnText.textContent = spoilerBtnText.dataset.openText
                }
            })
        }
    })

}