function toggleSessao(idSessao) {
    let sessoes = document.querySelectorAll(".sessoes");

    for (let i = 0; i < sessoes.length; i++) {
        if (sessoes[i].classList.contains("active")) {
            sessoes[i].classList.remove("active");
            sessoes[i].classList.add("d-none");
        }
    }

    let sessao = document.getElementById(idSessao);
    sessao.classList.remove("d-none");
    sessao.classList.add("active");
}
