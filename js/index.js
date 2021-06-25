function Aluno(alunoNome, alunoNota) {
    this.nome = alunoNome
    this.nota = alunoNota
};

aluno1 = new Aluno("Paulo", 7)
aluno2 = new Aluno("Roberto", 9)
aluno3 = new Aluno("João", 5)
aluno4 = new Aluno("Antônio", 4)
aluno5 = new Aluno("Luiz", 6)

function status(alunoASerAvaliado) {
    notaQueOAlunoTirou = alunoASerAvaliado.nota;
    if (notaQueOAlunoTirou >= 7)
        console.log(`O aluno ${alunoASerAvaliado.nome} tirou a nota ${alunoASerAvaliado.nota}, portanto está aprovado`);
        else console.log(`O aluno ${alunoASerAvaliado.nome} tirou a nota ${alunoASerAvaliado.nota} e infelizmente está reprovado`);
};

status(aluno3);