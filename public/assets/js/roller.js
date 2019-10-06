function getRandom() {
    return Math.round(Math.random() * (6 - 1) + 1);
};

document.querySelector('.generate').onclick = function () {
	document.querySelector('.number').textContent = getRandom();
};
