const toggleBtn = document.getElementById("toggle");
const body = document.querySelector("body");

toggleBtn.addEventListener("click", function(){
    body.classList.toggle("dark-mode");

    const isDarkMode = body.classList.contains("dark-mode"); //Vê se o body tem a classe dark-mode
    localStorage.setItem("darkMode", isDarkMode); //localStorage armazena dados no navegador. Os dados armazenados com localStorage permanecem disponíveis mesmo depois que a página é recarregada ou fechada, e são específicos para o domínio da página.

    //setItem é um método do objeto localStorage que define um par chave-valor no armazenamento local. Ele requer dois argumentos: a chave (no caso, "darkMode") e o valor associado à chave (no caso, isDarkMode).

    //Isso tudo serve para armazenar o estado atual do modo escuro (dark-mode). Quando o usuário ativa ou desativa o modo escuro, o valor booleano isDarkMode é armazenado no localStorage com a chave "darkMode". Isso permite que o site lembre do estado do modo escuro, mesmo quando a página é recarregada ou fechada.
})

const isDarkMode = localStorage.getItem("darkMode") === "true";

//localStorage.getItem("darkMode"): Esta parte do código acessa o valor associado à chave "darkMode" no armazenamento local do navegador usando o método getItem() do objeto localStorage. Isso significa que está procurando por algum dado previamente armazenado com a chave "darkMode".

//=== "true": Esta é uma comparação de igualdade estrita que verifica se o valor retornado de localStorage.getItem("darkMode") é exatamente igual à string "true".

//Em resumo, essa linha de código verifica se o modo escuro estava ativado da última vez que o usuário visitou o site.
if (isDarkMode) {
    document.body.classList.add("dark-mode");
}//Se isDarkMode for true, ele aciona a ação do if.

const btnConfirm = document.getElementById("mg");

btnConfirm.addEventListener("click", function(){
    btnConfirm.value = "Calcular média";
})