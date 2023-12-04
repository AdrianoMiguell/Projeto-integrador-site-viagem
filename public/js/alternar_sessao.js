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

    if (idSessao == "sessao1") {
        let btnSessao = document.getElementById("botaoSessao1");
        let btnDissessao = document.getElementById("botaoSessao2");
        btnSessao.classList.add("botao-active");
        btnDissessao.classList.remove("botao-active");
    } else {
        let btnSessao = document.getElementById("botaoSessao2");
        let btnDissessao = document.getElementById("botaoSessao1");
        btnSessao.classList.add("botao-active");
        btnDissessao.classList.remove("botao-active");
    }
}
